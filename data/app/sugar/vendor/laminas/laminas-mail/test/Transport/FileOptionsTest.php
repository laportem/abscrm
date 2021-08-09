<?php

/**
 * @see       https://github.com/laminas/laminas-mail for the canonical source repository
 * @copyright https://github.com/laminas/laminas-mail/blob/master/COPYRIGHT.md
 * @license   https://github.com/laminas/laminas-mail/blob/master/LICENSE.md New BSD License
 */

namespace LaminasTest\Mail\Transport;

use Laminas\Mail\Transport\FileOptions;
use PHPUnit\Framework\TestCase;

/**
 * @group      Laminas_Mail
 * @covers Laminas\Mail\Transport\FileOptions<extended>
 */
class FileOptionsTest extends TestCase
{
    public function setUp()
    {
        $this->options = new FileOptions();
    }

    public function testPathIsSysTempDirByDefault()
    {
        $this->assertEquals(sys_get_temp_dir(), $this->options->getPath());
    }

    public function testDefaultCallbackIsSetByDefault()
    {
        $callback = $this->options->getCallback();
        $this->assertInternalType('callable', $callback);
        $test     = call_user_func($callback, '');
        $this->assertRegExp('#^LaminasMail_\d+_\d+\.eml$#', $test);
    }

    public function testPathIsMutable()
    {
        $original = $this->options->getPath();
        $this->options->setPath(__DIR__);
        $test     = $this->options->getPath();
        $this->assertNotEquals($original, $test);
        $this->assertEquals(__DIR__, $test);
    }

    public function testCallbackIsMutable()
    {
        $original = $this->options->getCallback();
        $new      = function ($transport) {
        };

        $this->options->setCallback($new);
        $test = $this->options->getCallback();
        $this->assertNotSame($original, $test);
        $this->assertSame($new, $test);
    }

    public function testSetCallbackThrowsWhenNotCallable()
    {
        $this->expectException('Laminas\Mail\Exception\InvalidArgumentException');
        $this->expectExceptionMessage('expects a valid callback');
        $this->options->setCallback(null);
    }

    public function testSetPathThrowsWhenPathNotWritable()
    {
        $this->expectException('Laminas\Mail\Exception\InvalidArgumentException');
        $this->expectExceptionMessage('expects a valid path in which to write mail files');
        $this->options->setPath('/');
    }
}

<?php

/**
 * @see       https://github.com/laminas/laminas-mail for the canonical source repository
 * @copyright https://github.com/laminas/laminas-mail/blob/master/COPYRIGHT.md
 * @license   https://github.com/laminas/laminas-mail/blob/master/LICENSE.md New BSD License
 */

namespace LaminasTest\Mail\Header;

use Laminas\Mail\Header;
use PHPUnit\Framework\TestCase;

/**
 * @group      Laminas_Mail
 * @covers Laminas\Mail\Header\MimeVersion<extended>
 */
class MimeVersionTest extends TestCase
{
    public function testSettingManually()
    {
        $version = "2.0";
        $mime = new Header\MimeVersion();
        $mime->setVersion($version);
        $this->assertEquals($version, $mime->getFieldValue());
    }

    public function testDefaultVersion()
    {
        $mime = new Header\MimeVersion();
        $this->assertEquals('1.0', $mime->getVersion());
        $this->assertEquals('MIME-Version: 1.0', $mime->toString());
    }

    public function headerLines()
    {
        return [
            'newline'      => ["MIME-Version: 5.0\nbar"],
            'cr-lf'        => ["MIME-Version: 2.0\r\n"],
            'cr-lf-wsp'    => ["MIME-Version: 3\r\n\r\n.1"],
            'multiline'    => ["MIME-Version: baz\r\nbar\r\nbau"],
        ];
    }

    /**
     * @dataProvider headerLines
     * @group ZF2015-04
     */
    public function testFromStringRaisesExceptionOnDetectionOfCrlfInjection($header)
    {
        $this->expectException('Laminas\Mail\Header\Exception\InvalidArgumentException');
        $mime = Header\MimeVersion::fromString($header);
    }

    public function invalidVersions()
    {
        return [
            'no-decimal'    => ['1'],
            'multi-decimal' => ['1.0.0'],
            'alpha'         => ['X.Y'],
            'non-alnum'     => ['Version 1.0'],
        ];
    }

    /**
     * @dataProvider invalidVersions
     * @group ZF2015-04
     */
    public function testRaisesExceptionOnInvalidVersionFromSetVersion($value)
    {
        $header = new Header\MimeVersion();
        $this->expectException('Laminas\Mail\Header\Exception\InvalidArgumentException');
        $header->setVersion($value);
    }

    public function testFromStringRaisesExceptionOnInvalidHeader()
    {
        $this->expectException('Laminas\Mail\Header\Exception\InvalidArgumentException');
        $this->expectExceptionMessage('Invalid header line for MIME-Version string');
        Header\MimeVersion::fromString('Foo: bar');
    }

    public function testDefaultEncoding()
    {
        $header = new Header\MimeVersion('1.0');
        $this->assertSame('ASCII', $header->getEncoding());
    }

    public function testSetEncodingHasNoEffect()
    {
        $header = new Header\MimeVersion('1.0');
        $header->setEncoding('UTF-8');
        $this->assertSame('ASCII', $header->getEncoding());
    }
}

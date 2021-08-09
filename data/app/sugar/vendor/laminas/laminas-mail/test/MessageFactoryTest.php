<?php

/**
 * @see       https://github.com/laminas/laminas-mail for the canonical source repository
 * @copyright https://github.com/laminas/laminas-mail/blob/master/COPYRIGHT.md
 * @license   https://github.com/laminas/laminas-mail/blob/master/LICENSE.md New BSD License
 */

namespace LaminasTest\Mail;

use Laminas\Mail\MessageFactory;
use PHPUnit\Framework\TestCase;

/**
 * @group      Laminas_Mail
 * @covers Laminas\Mail\MessageFactory<extended>
 */
class MessageFactoryTest extends TestCase
{
    public function testConstructMessageWithOptions()
    {
        $options = [
            'encoding'  => 'UTF-8',
            'from'      => 'matthew@example.com',
            'to'        => 'test@example.com',
            'cc'        => 'list@example.com',
            'bcc'       => 'test@example.com',
            'reply-to'  => 'matthew@example.com',
            'sender'    => 'matthew@example.com',
            'subject'   => 'subject',
            'body'      => 'body',
        ];

        $message = MessageFactory::getInstance($options);

        $this->assertInstanceOf('Laminas\Mail\Message', $message);
        $this->assertEquals('UTF-8', $message->getEncoding());
        $this->assertEquals('subject', $message->getSubject());
        $this->assertEquals('body', $message->getBody());
        $this->assertInstanceOf('Laminas\Mail\Address', $message->getSender());
        $this->assertEquals($options['sender'], $message->getSender()->getEmail());

        $getMethods = [
            'from'      => 'getFrom',
            'to'        => 'getTo',
            'cc'        => 'getCc',
            'bcc'       => 'getBcc',
            'reply-to'  => 'getReplyTo',
        ];

        foreach ($getMethods as $key => $method) {
            $value = $message->{$method}();
            $this->assertInstanceOf('Laminas\Mail\AddressList', $value);
            $this->assertEquals(1, count($value));
            $this->assertTrue($value->has($options[$key]));
        }
    }

    public function testCanCreateMessageWithMultipleRecipientsViaArrayValue()
    {
        $options = [
            'from' => ['matthew@example.com' => 'Matthew'],
            'to'   => [
                'test@example.com',
                'list@example.com',
            ],
        ];

        $message = MessageFactory::getInstance($options);

        $from = $message->getFrom();
        $this->assertInstanceOf('Laminas\Mail\AddressList', $from);
        $this->assertEquals(1, count($from));
        $this->assertTrue($from->has('matthew@example.com'));
        $this->assertEquals('Matthew', $from->get('matthew@example.com')->getName());

        $to = $message->getTo();
        $this->assertInstanceOf('Laminas\Mail\AddressList', $to);
        $this->assertEquals(2, count($to));
        $this->assertTrue($to->has('test@example.com'));
        $this->assertTrue($to->has('list@example.com'));
    }

    public function testIgnoresUnreconizedOptions()
    {
        $options = [
            'foo' => 'bar',
        ];
        $mail = MessageFactory::getInstance($options);
        $this->assertInstanceOf('Laminas\Mail\Message', $mail);
    }

    public function testEmptyOption()
    {
        $options = [];
        $mail = MessageFactory::getInstance();
        $this->assertInstanceOf('Laminas\Mail\Message', $mail);
    }

    public function invalidMessageOptions()
    {
        return [
            'null' => [null],
            'bool' => [true],
            'int' => [1],
            'float' => [1.1],
            'string' => ['not-an-array'],
            'plain-object' => [(object) [
                'from' => 'matthew@example.com',
                'to'   => 'foo@example.com',
            ]],
        ];
    }

    /**
     * @dataProvider invalidMessageOptions
     */
    public function testExceptionForOptionsNotArrayOrTraversable($options)
    {
        $this->expectException('Laminas\Mail\Exception\InvalidArgumentException');
        MessageFactory::getInstance($options);
    }
}

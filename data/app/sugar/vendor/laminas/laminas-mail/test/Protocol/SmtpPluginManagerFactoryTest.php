<?php

/**
 * @see       https://github.com/laminas/laminas-mail for the canonical source repository
 * @copyright https://github.com/laminas/laminas-mail/blob/master/COPYRIGHT.md
 * @license   https://github.com/laminas/laminas-mail/blob/master/LICENSE.md New BSD License
 */

namespace LaminasTest\Mail\Protocol;

use Interop\Container\ContainerInterface;
use Laminas\Mail\Protocol\Smtp;
use Laminas\Mail\Protocol\SmtpPluginManager;
use Laminas\Mail\Protocol\SmtpPluginManagerFactory;
use Laminas\ServiceManager\ServiceLocatorInterface;
use PHPUnit\Framework\TestCase;

class SmtpPluginManagerFactoryTest extends TestCase
{
    public function testFactoryReturnsPluginManager()
    {
        $container = $this->prophesize(ContainerInterface::class)->reveal();
        $factory = new SmtpPluginManagerFactory();

        $plugins = $factory($container, SmtpPluginManager::class);
        $this->assertInstanceOf(SmtpPluginManager::class, $plugins);

        if (method_exists($plugins, 'configure')) {
            // laminas-servicemanager v3
            $this->assertAttributeSame($container, 'creationContext', $plugins);
        } else {
            // laminas-servicemanager v2
            $this->assertSame($container, $plugins->getServiceLocator());
        }
    }

    /**
     * @depends testFactoryReturnsPluginManager
     */
    public function testFactoryConfiguresPluginManagerUnderContainerInterop()
    {
        $container = $this->prophesize(ContainerInterface::class)->reveal();
        $smtp = $this->prophesize(Smtp::class)->reveal();

        $factory = new SmtpPluginManagerFactory();
        $plugins = $factory($container, SmtpPluginManager::class, [
            'services' => [
                'test' => $smtp,
            ],
        ]);
        $this->assertSame($smtp, $plugins->get('test'));
    }

    /**
     * @depends testFactoryReturnsPluginManager
     */
    public function testFactoryConfiguresPluginManagerUnderServiceManagerV2()
    {
        $container = $this->prophesize(ServiceLocatorInterface::class);
        $container->willImplement(ContainerInterface::class);

        $smtp = $this->prophesize(Smtp::class)->reveal();

        $factory = new SmtpPluginManagerFactory();
        $factory->setCreationOptions([
            'services' => [
                'test' => $smtp,
            ],
        ]);

        $plugins = $factory->createService($container->reveal());
        $this->assertSame($smtp, $plugins->get('test'));
    }
}

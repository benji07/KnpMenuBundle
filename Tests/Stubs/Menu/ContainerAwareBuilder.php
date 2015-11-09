<?php

namespace Knp\Bundle\MenuBundle\Tests\Stubs\Menu;

use Knp\Menu\FactoryInterface;
use Symfony\Component\DependencyInjection\ContainerAwareInterface;
use Symfony\Component\DependencyInjection\ContainerInterface;

class ContainerAwareBuilder implements ContainerAwareInterface
{
    private $container;

    public function mainMenu(FactoryInterface $factory)
    {
        // Check that the container is really set.
        $this->container->get('test');

        return $factory->createItem('Main menu');
    }

    public function setContainer(ContainerInterface $container = null)
    {
        $this->container = $container;
    }
}

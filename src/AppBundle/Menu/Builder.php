<?php

namespace AppBundle\Menu;

use Knp\Menu\MenuFactory;

class Builder
{
    /**
     * @param MenuFactory $factory
     * @param array $options
     * @return \Knp\Menu\ItemInterface|\Knp\Menu\MenuItem
     */
    public function mainMenu(MenuFactory $factory, array $options)
    {
        $menu = $factory->createItem('root');
        $menu->addChild('Home', ['route' => 'homepage']);

        return $menu;
    }
}
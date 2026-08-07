<?php

declare(strict_types=1);

namespace App\Menu;

use Molitor\Menu\Services\Menu;
use Molitor\Menu\Services\MenuBuilder;

class SiteMenuBuilder extends MenuBuilder
{
    public function main(Menu $menu): void
    {
        $menu->addItem('Kezdőlap', route('home'));
        $menu->addItem('Szolgáltatások', route('services'));
        $menu->addItem('Pályázatok', route('grants'));
        $menu->addItem('Rólunk', route('about'));
        $menu->addItem('Kapcsolat', route('contact'));
    }

    public function footer(Menu $menu): void
    {
        $menu->addItem('Szolgáltatások', route('services'));
        $menu->addItem('Pályázatok', route('grants'));
        $menu->addItem('Rólunk', route('about'));
        $menu->addItem('Kapcsolat', route('contact'));
    }
}

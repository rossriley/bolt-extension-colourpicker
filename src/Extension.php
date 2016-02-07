<?php

namespace Bolt\Extensions\Bolt\Colourpicker;

use Bolt\Application;
use Bolt\Asset\File\JavaScript;
use Bolt\Asset\File\Stylesheet;
use Bolt\BaseExtension;
use Bolt\Extension\SimpleExtension;
use Bolt\Extensions\Bolt\Colourpicker\Provider\ConfigProvider;

class Extension extends SimpleExtension
{

    public function getServiceProviders()
    {
        return [
            $this,
            new ConfigProvider()
        ];
    }

    protected function registerTwigPaths()
    {
        return [
            'twig' => ['position' => 'prepend', 'namespace'=>'bolt']
        ];
    }

    protected function registerAssets()
    {
        return [
            new Stylesheet('assets/colourpicker.css'),
            new JavaScript('assets/colourpicker.js'),
            new JavaScript('assets/start.js')
        ];
    }

}
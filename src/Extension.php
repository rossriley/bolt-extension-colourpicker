<?php

namespace Bolt\Extensions\Bolt\ColourPicker;

use Bolt\Asset\File\JavaScript;
use Bolt\Asset\File\Stylesheet;
use Bolt\Extension\SimpleExtension;
use Bolt\Extensions\Bolt\ColourPicker\Provider\ConfigProvider;

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

<?php

namespace Bolt\Extensions\Bolt\Colourpicker;

use Bolt\Application;
use Bolt\Asset\File\JavaScript;
use Bolt\Asset\File\Stylesheet;
use Bolt\BaseExtension;
use Bolt\Extension\SimpleExtension;

class Extension extends SimpleExtension
{

    protected function initialize()
    {
        $this->app['config']->fields->addField(new ColourPickField());
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

<?php

namespace Bolt\Extensions\Bolt\ColourPicker;

use Bolt\Asset\File\JavaScript;
use Bolt\Asset\File\Stylesheet;
use Bolt\Controller\Zone;
use Bolt\Extension\SimpleExtension;
use Bolt\Extensions\Bolt\ColourPicker\Field\ColourPickField;

class ColourPickerExtension extends SimpleExtension
{
    protected function registerFields()
    {
        return [
            new ColourPickField(),
        ];
    }

    protected function registerTwigPaths()
    {
        return [
            'templates',
        ];
    }

    protected function registerAssets()
    {
        return [
            (new Stylesheet('css/colourpicker.css'))->setZone(Zone::BACKEND),
            (new JavaScript('js/colourpicker.js'))->setZone(Zone::BACKEND),
            (new JavaScript('js/start.js'))->setZone(Zone::BACKEND),
        ];
    }
}

<?php

namespace Bolt\Extensions\Bolt\ColourPicker;

use Bolt\Asset\File\JavaScript;
use Bolt\Asset\File\Stylesheet;
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
            new Stylesheet('colourpicker.css'),
            new JavaScript('colourpicker.js'),
            new JavaScript('start.js'),
        ];
    }
}

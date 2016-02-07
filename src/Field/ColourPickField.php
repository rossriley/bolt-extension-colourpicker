<?php

namespace Bolt\Extensions\Bolt\ColourPicker\Field;

use Bolt\Storage\Field\FieldInterface;

class ColourPickField implements FieldInterface
{
    public function getName()
    {
        return 'colourpicker';
    }

    public function getTemplate()
    {
        return '_colourpicker.twig';
    }

    public function getStorageType()
    {
        return 'text';
    }

    public function getStorageOptions()
    {
        return ['default' => ''];
    }
}

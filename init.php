<?php

namespace Bolt\Extensions\Colourpicker;

if (isset($app)) {
    $app['extensions']->register(new Extension($app));
}
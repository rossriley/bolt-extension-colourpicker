<?php

namespace Bolt\Extensions\Bolt\Colourpicker;

if (isset($app)) {
    $app['extensions']->register(new Extension($app));
}

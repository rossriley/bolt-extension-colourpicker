<?php

namespace Bolt\Extensions\Bolt\Colourpicker\Provider;

use Bolt\Config;
use Bolt\Extensions\Bolt\Colourpicker\Field\ColourPickField;
use Silex\Application;
use Silex\ServiceProviderInterface;

class ConfigProvider implements ServiceProviderInterface
{
    public function register(Application $app)
    {

        $app['config'] = $app->share(
            $app->extend(
                'config',
                function (Config $config) {
                    $config->getFields()->addField(new ColourPickField());

                    return $config;
                }
            )
        );

    }


    public function boot(Application $app)
    {
    }
}

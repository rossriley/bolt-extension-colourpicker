<?php

namespace Bolt\Extensions\Bolt\ColourPicker\Provider;

use Bolt\Config;
use Bolt\Extensions\Bolt\ColourPicker\Field\ColourPickField;
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

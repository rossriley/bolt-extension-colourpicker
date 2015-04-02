<?php

namespace Bolt\Extensions\Bolt\Colourpicker;

use Bolt\Application;
use Bolt\BaseExtension;

class Extension extends BaseExtension
{
    public function __construct(Application $app)
    {
        parent::__construct($app);
        $this->app['config']->fields->addField(new ColourPickField());
        if ($this->app['config']->getWhichEnd() === 'backend') {
            $this->app['htmlsnippets'] = true;
            $this->app['twig.loader.filesystem']->prependPath(__DIR__.'/twig');
        }
    }
  

    public function initialize()
    {
        $this->addCss('assets/colourpicker.css');
        $this->addJavascript('assets/colourpicker.js', true);
        $this->addJavascript('assets/start.js', true);
    }

    public function getName()
    {
        return 'colourpicker';
    }
}

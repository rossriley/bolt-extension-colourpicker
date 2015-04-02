<?php
namespace Bolt\Extensions\Bolt\Colourpicker\Tests;

use Bolt\Tests\BoltUnitTest;
use Bolt\Extensions\Bolt\Colourpicker\Extension;

/**
 * This test ensures the Colourpicker Loads correctly.
 *
 * @author Ross Riley <riley.ross@gmail.com>
 **/

class ColourpickerTest extends BoltUnitTest
{
    public function testExtensionLoads()
    {
        $app = $this->getApp();
        $extension = new Extension($app);
        $app['extensions']->register( $extension );
        $this->assertSame($extension, $app['extensions.colourpicker']);
    }
}
<?php
namespace Bolt\Extensions\Bolt\ColourPicker\Tests;

use Bolt\Tests\BoltUnitTest;
use Bolt\Extensions\Bolt\ColourPicker\Extension;

/**
 * This test ensures the ColourPicker Loads correctly.
 *
 * @author Ross Riley <riley.ross@gmail.com>
 **/

class ColourPickerTest extends BoltUnitTest
{
    public function testExtensionLoads()
    {
        $app = $this->getApp();
        $extension = new Extension($app);
        $app['extensions']->register( $extension );
        $this->assertSame($extension, $app['extensions.colourpicker']);
    }
}
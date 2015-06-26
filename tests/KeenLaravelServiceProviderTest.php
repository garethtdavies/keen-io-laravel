<?php

namespace Wensleydale\KeenLaravel ;

require __DIR__. '/../vendor/autoload.php' ;

class KeenLaravelServiceProviderTest extends \PHPUnit_Framework_TestCase
{
    public function test_register()
    {
        $app_mock = \Mockery::mock('Illuminate\Foundation\Application');
        $app_mock->shouldReceive('singleton')->once();

        $keen = (new KeenLaravelServiceProvider($app_mock))->register();

        $this->assertEquals(null, $keen);
    }
}
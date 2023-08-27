<?php

namespace Beaverlabs\Skeleton\Tests;

use Illuminate\Foundation\Testing\DatabaseMigrations;

class TestCase extends \Orchestra\Testbench\TestCase
{
    use \Orchestra\Testbench\Concerns\CreatesApplication;
    use DatabaseMigrations;

    protected function setUp(): void
    {
        parent::setUp();
    }

    protected function getPackageProviders($app)
    {
        return [
//            \Beaverlabs\Skeleton\SkeletonServiceProvider::class,
        ];
    }
}

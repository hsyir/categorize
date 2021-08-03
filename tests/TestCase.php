<?php


namespace Hsy\Categorize\Tests;


use Cviebrock\EloquentSluggable\ServiceProvider;
use Hsy\Categorize\HsyCategorizeServiceProvider;
use Kalnoy\Nestedset\NestedSetServiceProvider;

class TestCase extends \Orchestra\Testbench\TestCase
{
    protected function setUp(): void
    {
        parent::setUp(); // TODO: Change the autogenerated stub
        $this->withFactories(__DIR__ . "/../database/factories");
        $this->loadMigrationsFrom(__DIR__ . "/../database/migrations");
    }

    protected function getPackageProviders($app)
    {
        return[
            NestedSetServiceProvider::class,
            HsyCategorizeServiceProvider::class,
            ServiceProvider::class,
        ];
    }

    protected function getEnvironmentSetUp($app)
    {
        $app["config"]->set("database.default","testdb");
        $app["config"]->set("database.connections.testdb",[
            "driver"=>"sqlite",
            "database"=>":memory:",
        ]);
    }


}
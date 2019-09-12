<?php

namespace PhucNguyenVn\Http\Middleware\Tests;

class TestCase extends \Orchestra\Testbench\TestCase
{
    public function setUp(): void
    {
        parent::setUp();
    }

    public function getEnvironmentSetUp($app)
    {
        app()['env'] = 'production';
    }
}

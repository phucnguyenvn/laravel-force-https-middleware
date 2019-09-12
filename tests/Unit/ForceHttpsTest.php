<?php

namespace PhucNguyenVn\Http\Middleware\Tests\Unit;

use Illuminate\Http\Request;
use PhucNguyenVn\Http\Middleware\ForceHttps;
use PhucNguyenVn\Http\Middleware\Tests\TestCase;

class ForceHttpsTest extends TestCase
{
    /** @test */
    public function is_forced_redirect_to_https()
    {
        $request = new Request();
        $next = function ($request) {
        };

        $middleware = new ForceHttps();
        $response = $middleware->handle($request, $next);

        $this->assertInstanceOf('Illuminate\Http\RedirectResponse', $response);
        $this->assertEquals(302, $response->getStatusCode());
    }
}

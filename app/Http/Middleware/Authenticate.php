<?php

namespace App\Http\Middleware;

use Illuminate\Auth\Middleware\Authenticate as Middleware;

use Illuminate\Http\Request;

use App\Models\User;

use App\Http\Controllers\LoginController;

class Authenticate extends Middleware
{
    /**
     * Get the path the user should be redirected to when they are not authenticated.
     */
    protected function redirectTo(Request $request): ?string
    {
        $loginController = new LoginController();
        return $loginController->login($request);
    }
}

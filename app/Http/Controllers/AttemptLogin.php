<?php

namespace App\Http\Controllers;

use App\Http\Routes\Web;
use Illuminate\Auth\AuthManager;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class AttemptLogin
{
    public function __construct(private readonly AuthManager $auth) {}

    public function __invoke(Request $request): RedirectResponse {
        return $this->auth->attempt($request->only('email', 'password'))
            ? redirect(Web::home())
            : redirect(Web::showLogin());
    }
}

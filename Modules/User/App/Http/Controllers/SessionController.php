<?php

namespace Modules\User\App\Http\Controllers;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Illuminate\Http\Response;

use Illuminate\Validation\Rule;
use Illuminate\Validation\ValidationException;

class SessionController extends Controller {

    public function create() {
        return view('user::sessions.login');
    }

    public function store(Request $request) {

        $attributes = request() -> validate([
            'account_id' => ['required', 'max:5', Rule::exists('users', 'account_id')],
            'password' => ['required', 'max:60'],
        ]);

        if (auth() -> attempt($attributes)) {
            return redirect('/home');
        }

        throw ValidationException::withMessages(['password' => 'incorrect password']);
    }

    public function destroy() {
        auth() -> logout();
        return redirect('/home');
    }
}

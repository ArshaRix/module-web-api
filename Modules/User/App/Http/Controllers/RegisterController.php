<?php

namespace Modules\User\App\Http\Controllers;

use App\Http\Controllers\Controller;
use Modules\User\App\Models\User;

use Illuminate\Http\Request;
use Illuminate\Http\Response;

use Illuminate\Validation\Rule;

class RegisterController extends Controller {

    public function create() {
        return view('user::sessions.register');
    }

    public function store(Request $request) {
        
        $attributes = request() -> validate([
            'name' => ['required', 'min:3', 'max:60'],
            'email' => ['required', 'email', 'max:60', Rule::unique('users', 'email')],
            'password' => ['required', 'max:60'],
            'account_id' => ['required', 'max:5', Rule::unique('users', 'account_id')],
        ]);

        $user = User::create($attributes);
        
        auth() -> login($user);

        return redirect('/home');

    }
}

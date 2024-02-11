<?php

namespace Modules\User\App\Http\Controllers;

use App\Http\Controllers\Controller;
use Modules\User\App\resources\UserResource;
use Modules\User\App\Models\User;

// use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller {
    
    public function index() {
        // return response() -> json(UserResource::collection(User::all()));
        return view('user::index');
    }

    // public function store(Request $request) {
    //     $user = User::create($request -> all());
    //     return response() -> json($user, 201);
    // }

    public function show($account_id) { // show User account_id using UserResource // users/id
        $filteredResponse = User::select('account_id') -> findOrFail($account_id);
        return new UserResource($filteredResponse);
    }
    
    // public function edit($id) {
    //     // 
    // }

    public function update(Request $request, User $user) { // users/id
        $user -> update($request -> all());
        return response() -> json($user);
    }

    public function destroy(User $user) { // users/id
        $user -> delete();
        return response() -> json(null, 204);
    }
}

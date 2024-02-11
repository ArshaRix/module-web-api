<?php

namespace Modules\Post\App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class PostController extends Controller
{
    public function index()
    {
        return view('post::index');
    }

    public function create()
    {
        return view('post::create');
    }

    public function store(Request $request): RedirectResponse
    {
        //
    }

    public function show($id)
    {
        return view('post::show');
    }

    public function edit($id)
    {
        return view('post::edit');
    }

    public function update(Request $request, $id): RedirectResponse
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}

@extends('user::layouts.master')

@push('styles')

    <link rel="stylesheet" href="{{ asset('/module-user/css/form.css') }}">
    
@endpush

@section('content')

    <div class="page auth child-borders">
        <form class="form user-session" method="POST" action="/register">@csrf
            <div class="form--outer">
                <div class="form--inner form-group">
                    <label for="name">name</label>
                    <input type="text" placeholder="input name" name="name" id="name" value="{{ old('name') }}" required />
                </div>
                <div class="form--inner form-group">
                    <label for="email">email</label>
                    <input type="text" placeholder="input email" name="email" id="email" value="{{ old('email') }}" required />
                </div>
            </div>

            <div class="form--outer">
                <div class="form--inner form-group">
                    <label for="password">password</label>
                    <input type="password" placeholder="input password" name="password" id="password" required />
                </div>
                <div class="form--inner form-group">
                    <label for="account_id">account id</label>
                    <input type="text" placeholder="input account id" name="account_id" id="account_id" value="{{ old('account_id') }}" required />
                </div>
            </div>

            <div class="form--outer form-cta">
                <div class="form--inner form-group">
                    <button class="btn-block btn-small">submit</button>
                </div>
            </div>

            @if ($errors -> any())
                <div class="form--outer form-error">
                    @foreach ($errors -> all() as $error)
                        <div class="form--inner error-text text-muted">{{ $error }}</div>
                    @endforeach
                </div>
            @endif

        </form>
    </div>

@endsection
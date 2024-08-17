@extends('layouts.app')

@section('content')
<div class="container">
    <form method="POST" action="{{ route('register') }}">
        @csrf
        <div>
            <label for="name">Name</label>
            <input type="text" name="name" id="name" required>
        </div>
        <div>
            <label for="email">Email</label>
            <input type="email" name="email" id="email" required>
        </div>
        <div>
            <label for="password">Password</label>
            <input type="password" name="password" id="password" required>
        </div>
        <div>
            <label for="password-confirm">Confirm Password</label>
            <input type="password" name="password_confirmation" id="password-confirm" required>
        </div>
        <div>
            <button type="submit">Register</button>
        </div>
    </form>
</div>
@endsection

@extends('layouts.main')


@section('container')
    <div class="row">
        <div class="col-md-6 m-auto bg-gray-900">
            <div class="form-signin w-100 mt-5">
                <form action="/register" method="post">
                    @csrf
                    <h1 class="h3 mb-3 fw-normal">Please Register</h1>

                    <div class="form-floating">
                        <input type="text" class="form-control rounded-top @error('name') is-invalid @enderror"
                            placeholder="name@example.com" name="name" value="{{ old('nama') }}" required>
                        <label for="floatingInput">Name</label>
                        @error('name')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-floating">
                        <input type="text" class="form-control @error('username') is-invalid @enderror"
                            placeholder="name@example.com" name="username" value="{{ old('username') }}" required>
                        <label for="floatingInput">Username</label>
                        @error('username')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-floating">
                        <input type="text" class="form-control rounded-bottom @error('password') is-invalid @enderror"
                            placeholder="Password" name="password" required>
                        <label for="floatingPassword">Password</label>
                        @error('password')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <button class="w-100 btn btn-lg btn-primary" type="submit">Register</button>
                </form>
            </div>
            <small>Already have account? <a href="/login">login</a></small>
        </div>
    </div>
@endsection

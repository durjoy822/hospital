@extends('home.layouts.master')
@section('content')
    <div class="container my-5">
        <h1 class="text-center">User Profile Dashboard</h1>
        <form action="{{ route('update.user') }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-md-6">
                    <h2 class="my-4">Personal Information</h2>
                    <div class="form-group">
                        <label for="name">Name:</label>
                        <input type="text" name="name" id="name" value="{{ Auth::user()->name }}"
                            class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="age">Date of Birth:</label>
                        <input type="date" name="age" id="age" value="{{ $info->birth_date }}"
                            class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="email">Phone:</label>
                        <input type="text" name="phone" id="email" value="{{ $info->phone }}"
                            class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="new_password">New Password:</label>
                        <input type="password" name="new_password" id="new_password" class="form-control">
                    </div>
                </div>
                <div class="col-md-6">
                    <h2 class="my-4">Profile Photo</h2>
                    <img src="{{ asset($info->photo) }}" width="200" height="200" alt="Profile Photo">
                    <div class="form-group">
                        <label for="picture">Upload or update your profile photo:</label>
                        <input type="file" name="photo" id="picture" class="form-control">
                        @error('photo')
                            <div class="alert alert-danger ">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
            </div>
            <button type="submit" class="btn btn-sm btn-info">Submit</button>
        </form>
        <nav class="my-5">
            <ul class="nav justify-content-center">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('home') }}">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="">Profile</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="">Settings</a>
                </li>
            </ul>
        </nav>
    </div>
@endsection

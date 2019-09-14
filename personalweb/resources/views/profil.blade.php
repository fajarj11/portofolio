@extends('layouts.app')

@section('content')

<div class="container" style="margin-top: 50px;">
    <div class="card">
        <div class="card-body col-md-10 col-md-offset-1">
            <img src="/profile/{{ $user->profile }}" style="witdh: 150px; height: 200px; float: left; border-radius: 50%; margin-right: 25px;">
            <h2 style="padding-top: 10px; color: white;">{{ $user->name }}</h2>
            <form action="/profil" enctype="multipart/form-data" method="POST">
                <label>Update Profile Image</label>
                <input type="file" name="profile">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <input type="submit" class="pull-right btn btn-primary" value="Simpan">
            </form>
        </div>
    </div>
</div>

@endsection
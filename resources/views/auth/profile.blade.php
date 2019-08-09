@extends('layouts.app')

@section('content')
    <br>
    <div class="callout small-12 medium-12 large-12 text-center">
        <h2>{{ Auth::user()->name }}</h2>
    </div>
    <div class="grid-x grid-margin-x callout">
        <div>
            <form method="post" enctype="multipart/form-data" action="/profile"
                  class="align-center small-12 medium-12 large-12" name="updateProfile">
                {{csrf_field()}}
                <div class=" grid-x grid-margin-x">
                    <div class="large-10 large-offset-1 medium-10 medium-offset-1 small-12">
                        <label for="name">Username
                            <input type="text" name="name" value="{{ Auth::user()->name }}">
                        </label>
                    </div>
                    <div class="large-10 large-offset-1 medium-10 medium-offset-1  small-12">
                        <label for="email">Email Address
                            <input type="text" name="email"
                                   value="{{ Auth::user()->email }}"/>
                        </label>
                    </div>
                    <div class="large-offset-1 medium-offset-1">
                        <a href="/profile" type="submit" class="button">Back</a>
                    </div>
                    <div class="large-offset-4 medium-offset-3 small-offset-8">
                        <input type="submit" class="button success" value="Update Profile">
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection

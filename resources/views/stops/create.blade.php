@extends('layouts.app')

@section ('title' , 'Heritage Walks - Add Stop')

@section('content')
    <br>
    <div class="grid-x grid-padding-x">
        <div class="small-12 medium-12 large-12 callout text-center">
            <h3>Add Stop</h3>
        </div>
        @if($errors->any())
            <div class="small-12 medium-12 large-12 callout alert ">
                @foreach ($errors->all() as $error)
                    <p>{{$error}}</p>
                @endforeach
            </div>
        @endif
        <form method="post" enctype="multipart/form-data" action="/stops" class="callout small-12 medium-12 large-12" name="addStop">
            {{csrf_field()}}
            <div class=" grid-x grid-margin-x">
                <div class="large-10 large-offset-1 medium-10 medium-offset-1 small-12">
                    <label for="name">Name
                        <input type="text" name="name"  value="{{ old('name') }}">
                    </label>
                </div>
                <div class="large-10 large-offset-1 medium-10 medium-offset-1  small-12">
                    <label for="street_location">Street Location
                        <textarea name="street_location">{{ old('street_location') }} </textarea>
                    </label>
                </div>
                <div class="large-10 large-offset-1 medium-10 medium-offset-1  small-12">
                    <label for="short_desc">Short Description
                        <textarea name="short_desc" rows="3">{{ old('short_desc') }} </textarea>
                    </label>
                </div>
                <div class="large-10 large-offset-1 medium-10 medium-offset-1  small-12">
                    <label for="full_desc">Long Description
                        <textarea name="full_desc" rows="5"> {{ old('full_desc') }}</textarea>
                    </label>
                </div>
                <div class="large-10 large-offset-1 medium-10 medium-offset-1  small-12">
                    <label for="coord_x">Latitude (X)
                        <input type="text" name="coord_x"  value="{{ old('coord_x') }}">
                    </label>
                </div>
                <div class="large-10 large-offset-1 medium-10 medium-offset-1 small-12">
                    <label for="coord_y">Longitude (Y)
                        <input type="text" name="coord_y"  value="{{ old('coord_y') }}">
                    </label>
                </div>
                <div class="large-10 large-offset-1 medium-10 medium-offset-1 small-12">
                    <label for="img">Image
                        <input type="file" name="img">
                    </label>
                </div>
                <div class="large-10 large-offset-1 medium-10 medium-offset-1 small-12">
                    <label for="audio">Audio
                        <input type="file" name="Audio">
                    </label>
                </div>
                <div class="large-offset-1 medium-offset-1">
                    <a href="/stops" type="submit" class="button">Back</a>
                </div>
                <div class="large-offset-3 medium-offset-3 hide-for-small-only">
                    <input type="reset" class="button alert" value="Clear Form">
                </div>
                <div class="large-offset-4 medium-offset-3 small-offset-8">
                    <input type="submit" class="button success" value="Add">
                </div>
            </div>
        </form>
    </div>
@endsection

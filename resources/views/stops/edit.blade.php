@extends('layouts.app')

@section ('title' , 'Heritage Walks - Edit Stop')

@section('content')
    <br>
    <div class="grid-x grid-padding-x">
        <div class="small-12 medium-12 large-12 callout text-center">
            <h3>Edit Stop</h3>
        </div>
        @if($errors->any())
            <div class="small-12 medium-12 large-12 callout alert ">
                @foreach ($errors->all() as $error)
                    <p>{{$error}}</p>
                @endforeach
            </div>
        @endif
        <form method="post" action="{{ route('stops.update', $stop->id) }}" class="callout small-12 medium-12 large-12" name="EditStop">
            @method('PATCH')
            @csrf
            <div class=" grid-x grid-margin-x">
                <div class="large-10 large-offset-1 medium-10 medium-offset-1 small-12">
                    <label for="name">Name
                        <input type="text" name="name" value="{{ $stop->name }}">
                    </label>
                </div>
                <div class="large-10 large-offset-1 medium-10 medium-offset-1  small-12">
                    <label for="short_desc">Short Description
                        <textarea name="short_desc">{{ $stop->short_desc }} </textarea>
                    </label>
                </div>
                <div class="large-10 large-offset-1 medium-10 medium-offset-1  small-12">
                    <label for="full_desc">Long Description
                        <textarea name="full_desc">{{ $stop->full_desc }}</textarea>
                    </label>
                </div>
                <div class="large-10 large-offset-1 medium-10 medium-offset-1  small-12">
                    <label for="coord_x">Latitude (X)
                        <input type="text" name="coord_x" value="{{ $stop->coord_x }}">
                    </label>
                </div>
                <div class="large-10 large-offset-1 medium-10 medium-offset-1 small-12">
                    <label for="coord_y">Longitude (Y)
                        <input type="text" name="coord_y" value="{{ $stop->coord_y }}">
                    </label>
                </div>
                <div class="large-offset-1 medium-offset-1 small-offset-3">
                    <a href="/stops" type="submit" class="button">Back</a>
                </div>
                <div class="large-offset-3 medium-offset-3 small-offset-3">
                    <input type="reset" class="button alert" value="Clear Form">
                </div>
                <div class="large-offset-4 medium-offset-3 small-offset-3">
                    <input type="submit" class="button success" value="update">
                </div>
            </div>
        </form>
    </div>
@endsection
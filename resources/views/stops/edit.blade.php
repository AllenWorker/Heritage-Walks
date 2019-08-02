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
        <form method="post" enctype="multipart/form-data" action="{{ route('stops.update', $stop->id) }}" class="callout small-12 medium-12 large-12" name="EditStop">
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
                        <textarea name="short_desc" rows="3">{{ $stop->short_desc }} </textarea>
                    </label>
                </div>
                <div class="large-10 large-offset-1 medium-10 medium-offset-1  small-12">
                    <label for="full_desc">Long Description
                        <textarea name="full_desc" rows="5">{{ $stop->full_desc }}</textarea>
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
                <div class="large-10 large-offset-1 medium-10 medium-offset-1 small-12">
                    <label for="img">Image
                        <img src="/images/stops/{{ $stop->img }}" style="width:50px; height:50px; float:left;">
                        <input type="file" name="img">
                    </label>
                </div>
                <div class="large-10 large-offset-1 medium-10 medium-offset-1 small-12">
                    <label for="audio">  <audio controls="controls">
                            <source src="/audio/{{$stop->audio}}" type="audio/mp3" />
                            Your browser does not support the audio element.
                        </audio> Audio
                        <input type="file" name="Audio">
                    </label>
                </div>
                <div class="large-offset-1 medium-offset-1">
                    <a href="/stops" type="submit" class="button">Back</a>
                </div>
                <div class="large-offset-4 medium-offset-6 small-offset-5">
                    <input type="submit" class="button success" value="Save">
                </div>
            </div>
        </form>
    </div>
@endsection

@extends('layouts.app')

@section ('title' , 'Heritage Walks - Add Trails')

@section('content')
    <br>
    <div class="grid-x grid-padding-x">
        <div class="small-12 medium-12 large-12 callout text-center">
            <h3>Edit Trail</h3>
        </div>
        @if($errors->any())
            <div class="small-12 medium-12 large-12 callout alert ">
                @foreach ($errors->all() as $error)
                    <p>{{$error}}</p>
                @endforeach
            </div>
        @endif
        <form method="post" enctype="multipart/form-data" action="{{ route('trails.update', $trail->id) }}" class="callout small-12 medium-12 large-12" name="edittrail">
            @method('PATCH')
            @csrf
            <div class=" grid-x grid-margin-x">
                <div class="large-10 large-offset-1 medium-10 medium-offset-1 small-12">
                    <label for="name">Name
                        <input type="text" name="name" value="{{ $trail->name }}">
                    </label>
                </div>
                <div class="large-10 large-offset-1 medium-10 medium-offset-1  small-12">
                    <label for="length">Length (km)
                        <input type="text" name="length" value="{{ $trail->length }}">
                    </label>
                </div>
                <div class="large-10 large-offset-1 medium-10 medium-offset-1 small-12">
                    <label for="Time">Time (hr)
                        <input type="text" name="time" value="{{ $trail->time }}">
                    </label>
                </div>
                <div class="large-10 large-offset-1 medium-10 medium-offset-1 small-12">
                    <label for="img">Image
                        <img src="/images/trails/{{ $trail->img }}" style="width:50px; height:50px; float:left;">
                        <input type="file" name="img">
                    </label>
                </div>
                <div class="large-offset-1 medium-offset-1 small-offset-3">
                    <a href="/trails" type="submit" class="button">Back</a>
                </div>
                <div class="large-offset-3 medium-offset-3 small-offset-3">
                    <input type="reset" class="button alert" value="Clear Form">
                </div>
                <div class="large-offset-4 medium-offset-3 small-offset-3">
                    <input type="submit" class="button success" value="Add">
                </div>
            </div>
        </form>
    </div>
@endsection
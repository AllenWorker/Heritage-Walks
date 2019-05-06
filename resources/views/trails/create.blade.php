@extends('layouts.app')

@section ('title' , 'Heritage Walks - Add Trails')

@section('content')
    <br>
    <div class="grid-x grid-padding-x">
        <div class="small-12 medium-12 large-12 callout text-center">
            <h3>Add Trails</h3>
        </div>
        @if($errors->any())
            <div class="small-12 medium-12 large-12 callout alert ">
                @foreach ($errors->all() as $error)
                    <p>{{$error}}</p>
                @endforeach
            </div>
        @endif
        <form method="post" action="/trails" class="callout small-12 medium-12 large-12" name="addtrail">
            {{csrf_field()}}
            <div class=" grid-x grid-margin-x">
                <div class="large-10 large-offset-1 medium-10 medium-offset-1 small-12">
                    <label for="name">Name
                        <input type="text" name="name">
                    </label>
                </div>
                <div class="large-10 large-offset-1 medium-10 medium-offset-1  small-12">
                    <label for="length">Length (km)
                        <input type="text" name="length">
                    </label>
                </div>
                <div class="large-10 large-offset-1 medium-10 medium-offset-1 small-12">
                    <label for="Time">Time (hr)
                        <input type="text" name="time">
                    </label>
                </div>
                <div class="large-offset-1 medium-offset-1">
                    <a href="/trails" type="submit" class="button">Back</a>
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
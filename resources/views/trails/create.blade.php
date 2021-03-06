@extends('layouts.app')

@section ('title' , 'Heritage Walks - Add Trail')

@section('content')
    <br>
    <div class="grid-x grid-padding-x">
        <div class="small-12 medium-12 large-12 callout text-center">
            <h3>Add Trail</h3>
        </div>
        @if($errors->any())
            <div class="small-12 medium-12 large-12 callout alert ">
                @foreach ($errors->all() as $error)
                    <p>{{$error}}</p>
                @endforeach
            </div>
        @endif
        <form method="post" enctype="multipart/form-data" action="/trails" class="callout small-12 medium-12 large-12" name="addtrail">
            {{csrf_field()}}
            <div class=" grid-x grid-margin-x">
                <div class="large-10 large-offset-1 medium-10 medium-offset-1 small-12">
                    <label for="name">Name
                        <input type="text" name="name" value="{{ old('name') }}">
                    </label>
                </div>
                <div class="large-10 large-offset-1 medium-10 medium-offset-1  small-12">
                    <label for="description">Description
                        <textarea name="description" rows="4">{{ old('description') }}</textarea>
                    </label>
                </div>
                <div class="large-10 large-offset-1 medium-10 medium-offset-1  small-12">
                    <label for="length">Length (km)
                        <input type="text" name="length"  value="{{ old('length') }}">
                    </label>
                </div>
                <div class="large-10 large-offset-1 medium-10 medium-offset-1 small-12">
                    <label for="Time">Time (hr)
                        <input type="text" name="time"  value="{{ old('time') }}">
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
                <div class="large-10 large-offset-1 medium-10 medium-offset-1 small-12">
                    <h5> Add Stops</h5>
                    @foreach($stops as $aStop)
                        <div>
                            <label>
                                <input type="checkbox" value="{{$aStop->id}}" name="stops[]">
                                {{ $aStop->name }}</label>
                        </div>
                    @endforeach
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

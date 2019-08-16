@extends('layouts.app')

@section ('title' , 'Heritage Walks - Trails')

@section('content')
    <br>
    <div class="grid-x grid-padding-x">
        <div class="callout small-12 medium-12 large-12 text-center">
            <h2>Trails</h2>
            <a href="{{action('TrailsController@create')}}" class="button success">Add Trail</a>
            <div class="grid-container fluid">
                <div class="grid-x">
                    @foreach($trails as $aTrail)
                        <div class="col small-12 medium-6 large-6">
                            <div class="card">
                                <div class="card-divider">
                                    <h4>
                                        {{$aTrail -> id}} {{$aTrail -> name}}
                                    </h4>
                                </div>
                                <div class="card-section">
                                    <div class="grid-x">
                                        <a class="col small-12" href="/trails/{{ $aTrail->id }}">
                                            <img src="/images/trails/{{ $aTrail->img }}">
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
            {{ $trails->links()}}
        </div>
    </div>
@endsection

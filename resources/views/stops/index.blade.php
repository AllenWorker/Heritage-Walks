@extends('layouts.app')

@section ('title' , 'Heritage Walks - Stops')

@section('content')
    <br>
    <div class="grid-x grid-padding-x">
        <div class="callout small-12 medium-12 large-12 text-center">
            <h2>Stops</h2>
            <a href="{{action('StopsController@create')}}" class="button success">Add Stop</a>
            <div class="grid-container fluid">
                <div class="grid-x">
                    @foreach($stops as $aStop)
                        <div class="col small-12 medium-6 large-6">
                            <div class="card">
                                <div class="card-divider">
                                    <h4>
                                        {{$aStop -> id}} {{$aStop -> name}}
                                    </h4>
                                </div>
                                <div class="card-divider">
                                    <p>
                                        {{$aStop -> street_location}}
                                    </p>
                                </div>
                                <div class="card-section">
                                    <div class="grid-x">
                                        <a class="col small-12" href="/stops/{{ $aStop->id }}">
                                            <img src="/images/stops/{{ $aStop->img }}">
                                        </a>
                                        <div class="col small-12">
                                            <p class="large-text-center">
                                                {{$aStop -> short_desc}}
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
                {{ $stops->links()}}
            </div>
        </div>
    </div>
@endsection

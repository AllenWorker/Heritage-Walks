@extends('layouts.app')

@section ('title' , 'Trails')

@section('content')
    <br>
    <div class="grid-x grid-padding-x">
        <div class="callout small-12 medium-12 large-12 text-center">
            <h2>Trails | {{ $trail->name }}</h2>
            <a href="/trails/" class="button">Back</a>
            <a href="{{$trail->id}}/edit" class="button success">Edit Trail</a>
            <p>
                <button class="button alert" data-open="Modal">Delete Trail</button>
            </p>
        </div>
        <div class="small-12 medium-12 large-12 callout">
            <img src="/images/trails/{{ $trail->img }}" style="width:150px; height:150px; float:left;">
            <audio controls="controls">
                <source src="/audio/{{$trail->audio}}" type="audio/mp3" />
                Your browser does not support the audio element.
            </audio>
            <table>
                <tr>
                    <th>ID</th>
                    <td> {{ $trail->id}}
                    <td>
                </tr>
                <tr>
                    <th>Name</th>
                    <td> {{ $trail->name }}
                    <td>
                </tr>
                <tr>
                    <th>Description</th>
                    <td>{{$trail->description}}</td>
                </tr>
                <tr>
                    <th>Length (Km)</th>
                    <td> {{ $trail->length }}
                    <td>
                </tr>
                <tr>
                    <th>Time (hr)</th>
                    <td> {{ $trail->time }}
                    <td>
                </tr>
                <tr>
                    <th>created_at</th>
                    <td> {{ $trail->created_at }}
                    <td>
                </tr>
                <tr>
                    <th>updated_at</th>
                    <td> {{ $trail->updated_at }}
                    <td>
                </tr>
            </table>
        </div>
    </div>

    <div class="small-12 medium-12 large-12 callout">
        <h3>Stops</h3>
        <ul>
        @foreach($trail->stops as $stop)
            <a href="../../stops/{{$stop->id}}">
             <li>{{$stop->name}}</li>
            </a>
        @endforeach
        </ul>

    </div>

    <div class="reveal" id="Modal" data-reveal>
        <h1>Are you sure?</h1>
        <p class="lead">Do you wish to delete this?</p>
        <form action="{{url('/trails', [$trail->id])}}" method="POST">
            {{method_field('DELETE')}}
            {{csrf_field()}}
            <input type="submit" class="button alert float-right" value="Delete"/>
        </form>
        <button class="close-button" data-close aria-label="Close modal" type="button">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
@endsection

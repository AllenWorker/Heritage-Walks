@extends('layouts.app')

@section ('title' , 'Heritage Walks - Stops')

@section('content')
    <br>
    <div class="grid-x grid-padding-x">
        <div class="callout small-12 medium-12 large-12 text-center">
            <h2>Stops</h2>
            <a href="{{action('StopsController@create')}}" class="button success">Add Stop</a>
            <table>
                <tr>
                    <th>Id</th>
                    <th>Name</th>
                    <th>Main Image</th>
                    <th>Street Location</th>
                    <th>Short Description</th>
                    <th>Details</th>
                </tr>
                @foreach($stops as $aStop)
                    <tr>
                        <td><p>{{ $aStop->id }}</p></td>
                        <td><p>{{ $aStop->name }}</p></td>
                        <td><img src="/images/stops/{{ $aStop->img }}" style="width:50px; height:50px; float:left;"></td>
                        <td><p>{{ $aStop->street_location }}</p></td>
                        <td><p>{{ $aStop->short_desc }}</p></td>
                        <td><a href="/stops/{{ $aStop->id }}">Details</a></td>
                    </tr>
                @endforeach
            </table>
            {{ $stops->links()}}

            <div class="grid-container fluid">
                <div class="grid-x">
                    <div class="col small-12 medium-6 large-3">
                        <div class="card">
                            <div class="card-divider"><h4>Hello World!</h4></div>
                            <div class="card-section"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

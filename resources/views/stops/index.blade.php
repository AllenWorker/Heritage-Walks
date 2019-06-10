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
                    <th>Street Location</th>
                    <th>Short Description</th>
                    <th>Details</th>
                </tr>
                @foreach($stops as $aStop)
                    <tr>
                        <td><p>{{ $aStop->id }}</p></td>
                        <td><p>{{ $aStop->name }}</p></td>
                        <td><p>{{ $aStop->street_location }}</p></td>
                        <td><p>{{ $aStop->short_desc }}</p></td>
                        <td><a href="/stops/{{ $aStop->id }}">Details</a></td>
                    </tr>
                @endforeach
            </table>
        </div>
    </div>
@endsection
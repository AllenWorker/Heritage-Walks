@extends('../layout')

@section ('title' , 'Heritage Walks - Trails')

@section('content')
    <br>
    <div class="grid-x grid-padding-x">
        <div class="callout small-12 medium-12 large-12 text-center">
            <h2>Trails</h2>
            <a href="{{action('TrailsController@create')}}" class="button success">Add Trail</a>
        </div>
        <div class="small-12 medium-12 large-12 callout">
            <table>
                <tr>
                    <th>Id</th>
                    <th>Name</th>
                    <th>Details</th>
                </tr>
                @foreach($trails as $aTrail)
                    <tr>
                        <td><p>{{ $aTrail->id }}</p></td>
                        <td><p>{{ $aTrail->name }}</p></td>
                        <td><a href="/trails/{{ $aTrail->id }}">Details</a></td>
                    </tr>
                @endforeach
            </table>
        </div>
    </div>
@endsection
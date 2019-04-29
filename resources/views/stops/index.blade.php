@extends('../layout')

@section ('title' , 'Stops')

@section('content')
    <br>
    <div class="grid-x grid-padding-x">
        <div class="callout small-12 medium-12 large-12 text-center">
            <h2>Stops</h2>
            <a href="{{action('StopsController@create')}}" class="button success">Add Stops</a>
        </div>
        <div class="small-12 medium-12 large-12 callout">
            <table>
                <tr>
                    <th>Id</th>
                    <th>Name</th>
                    <th>short description</th>
                    <th>Details</th>
                </tr>
                @foreach($stops as $aStop)
                    <tr>
                        <td><b>{{ $aStop->id }}</b></td>
                        <td><p>{{ $aStop->name }}</p></td>
                        <td><p>{{ $aStop->short_desc }}</p></td>
                        <td><a href="/stops/{{ $aStop->id }}">Details</a></td>
                    </tr>
                @endforeach
            </table>
        </div>
    </div>
@endsection
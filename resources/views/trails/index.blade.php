@extends('../layout')

@section ('title' , 'Stops')

@section('content')
    <br>
        <div class="callout small-12 medium-12 large-12 text-center">
            <h2>Trails</h2>
        </div>
        <div class="grid-x grid-margin-x">
        <div>
            @foreach($trails as $aTrail)
                <li>
                    <b>{{ $aTrail->id }}</b>
                    <span >{{ $aTrail->name }}</span>
                    <a href="/trails/{{ $aTrail->id }}" >Details</a>
                </li>
            @endforeach
        </div>
    </div>
@endsection
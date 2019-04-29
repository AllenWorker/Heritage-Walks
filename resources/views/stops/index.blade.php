@extends('../layout')

@section ('title' , 'Stops')

@section('content')
    <br>
        <div  class="callout small-12 medium-12 large-12 text-center">
            <h2>Stops</h2>
        </div>
        <div class="grid-x grid-margin-x">
        <div>
                @foreach($stops as $aStop)
                    <li>
                        <b>{{ $aStop->id }}</b>
                        <span >{{ $aStop->name }}</span>
                        <span >{{ $aStop->short_desc }}</span>
                        <a href="/stops/{{ $aStop->id }}" >Details</a>
                    </li>
                @endforeach
        </div>
    </div>
@endsection
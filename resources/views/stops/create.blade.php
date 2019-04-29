@extends('../layout')

@section ('title' , 'Create Stop')

@section('content')
    <br>
    <div class="grid-x grid-padding-x">
        <div class="small-12 medium-12 large-12 callout text-center">
            <h3>Create Stop</h3>
        </div>
        @if($errors->any())
            <div class="small-12 medium-12 large-12 callout alert ">
                @foreach ($errors->all() as $error)
                    <p>{{$error}}</p>
                @endforeach
            </div>
        @endif
        <form method="post" action="/stops" class="callout small-12 medium-12 large-12" name="addStop">
            {{csrf_field()}}
            <div class=" grid-x grid-margin-x-x">
                <div class="large-6 medium-6 small-12">
                    <label for="name">Name
                        <input type="text" name="name">
                    </label>
                </div>
                <div class="large-6 medium-6  small-12">
                    <label for="short_desc">Short Description
                        <input type="text" name="short_desc">
                    </label>
                </div>
                <div class="large-12 medium-6  small-12">
                    <label for="full_desc">Long Description
                        <textarea name="full_desc"> </textarea>
                    </label>
                </div>
                <div class="large-6 medium-6  small-12">
                    <label for="coord_x">Latitude (X)
                        <input type="text" name="coord_x">
                    </label>
                </div>
                <div class="large-6 medium-6 small-12">
                    <label for="coord_y">Longitude (Y)
                        <input type="text" name="coord_y">
                    </label>
                </div>
                <div class="cell">
                    <input type="submit" class="button success" value="Add Stop">
                </div>
            </div>
        </form>
    </div>
@endsection
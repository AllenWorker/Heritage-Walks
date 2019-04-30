@extends('../layout')

@section ('title' , 'Stops')

@section('content')
    <br>
    <div class="grid-x grid-padding-x">
        <div class="callout small-12 medium-12 large-12 text-center">
            <h2>Stop | {{ $stop->id }}</h2>
            <a href="" class="button success">Edit Stop</a>
			<a href="" class="button success">Delete Stop</a>
        </div>
        <div class="small-12 medium-12 large-12 callout">
            <table>
				<tr>
					<th>ID </th>
					<td> {{ $stop->name}}<td>
				</tr>
				<tr>
					<th>Name </th>
					<td> {{ $stop->name }}<td>
				</tr>
				<tr>
					<th>Short Desciption</th>
					<td> {{ $stop->short_desc }}<td>
				</tr>
				<tr>
					<th>Long Desciption</th>
					<td> {{ $stop->full_desc }}<td>
				</tr>
				<tr>
					<th>coord_x</th>
					<td> {{ $stop->coord_x }}<td>
				</tr>
				<tr>
					<th>coord_y</th>
					<td> {{ $stop->coord_y }}<td>
				</tr>
				<tr>
					<th>created_at</th>
					<td> {{ $stop->created_at }}<td>
				</tr>
				<tr>
					<th>updated_at</th>
					<td> {{ $stop->updated_at }}<td>
				</tr>
            </table>
        </div>
    </div>
@endsection
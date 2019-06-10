@extends('layouts.app')

@section ('title' , 'Stops')

@section('content')
    <br>
    <div class="grid-x grid-padding-x">
        <div class="callout small-12 medium-12 large-12 text-center">
            <h2>Stop | {{ $stop->name }}</h2>
			<a href="/stops/" class="button">Back</a>
            <a  href="{{$stop->id}}/edit" class="button success">Edit Stop</a>
			<p><button class="button success" data-open="Modal">Delete Stop</button></p>
        </div>
        <div class="small-12 medium-12 large-12 callout">
			<img src="/images/stops/{{ $stop->img }}" style="width:150px; height:150px; float:left;">
            <table>
				<tr>
					<th>ID </th>
					<td> {{ $stop->id}}<td>
				</tr>
				<tr>
					<th>Name </th>
					<td> {{ $stop->name }}<td>
				</tr>
				<tr>
					<th>Short Description</th>
					<td> {{ $stop->short_desc }}<td>
				</tr>
				<tr>
					<th>Long Description</th>
					<td> {{ $stop->full_desc }}<td>
				</tr>
				<tr>
					<th>Latitude (X)</th>
					<td> {{ $stop->coord_x }}<td>
				</tr>
				<tr>
					<th>Longitude (Y)</th>
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
	<div class="small-12 medium-12 large-12 callout">
		<h3>Trails</h3>
		<ul>
			@foreach($stop->trails as $trails)
				<a href="../../trails/{{$trails->id}}">
					<li>{{$trails->name}}</li>
				</a>
			@endforeach
		</ul>
	</div>
	<div class="reveal" id="Modal" data-reveal>
		<h1>Are you sure?</h1>
		<p class="lead">Do you wish to delete this?</p>
		<form action="{{url('/stops', [$stop->id])}}" method="POST">
			{{method_field('DELETE')}}
			{{csrf_field()}}
			<input type="submit" class="button alert float-right" value="Delete"/>
		</form>
		<button class="close-button" data-close aria-label="Close modal" type="button">
			<span aria-hidden="true">&times;</span>
		</button>
	</div>
@endsection
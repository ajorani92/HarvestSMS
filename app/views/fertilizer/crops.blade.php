@extends('layouts.base')
	@section('content')
		<h2>Crops that can be used with {{ $fertilizer->name }}</h2>

		@foreach($crops as $crop)
		<li>
			<h4>{{ $crop->name }}</h4>
		</li>
			
		@endforeach

	@section('stop')
@extends('layouts.main')

@section('title','News')
@section('content')

	<main>
		<div class="tipo txt_product_grid">{{$dettaglio['titolo']}}</div>

		

	@php
		var_dump($dettaglio['titolo']);
		// var_dump($id);

	@endphp

	</main>

@endsection
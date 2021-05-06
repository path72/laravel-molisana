@extends('layouts.main')

@section('title','I Prodotti')
@section('content')

	<main>
		{{-- vabbe' ma quanti tipi devo distinguere?... --}}
		@php $tipi = []; @endphp
		@foreach ($prodotti as $prodotto)
			@foreach ($prodotto as $key => $value)
				@if ($key=='tipo' && !in_array($value,$tipi))
					@php $tipi[] = $value; @endphp
				@endif
			@endforeach
		@endforeach
		{{-- ... ok, adesso lo so! --}}
		@foreach ($tipi as $tipo)
			<div class="tipo txt_product_grid">{{ucfirst($tipo)}}</div>
			<div class="grid">
				@foreach ($prodotti as $prodotto)
					@if ($prodotto['tipo']==$tipo)
						<div class="card">
							<div class="overlayer">
								<a href="#" class="title txt_product_grid">{{$prodotto['titolo']}}</a>
								<a href="#" class="icon"><i class="fas fa-utensils"></i></a>
							</div>
							<img src="{{$prodotto['src']}}" alt="{{$prodotto['titolo']}}">
						</div>				
					@endif
				@endforeach
			</div>
		@endforeach
	</main>

@endsection
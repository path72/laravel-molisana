@extends('layouts.main')
@section('partial-css')
	{{-- FONT AWESOME --}}
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" integrity="sha512-HK5fgLBL+xu6dm/Ii3z4xhlSUyZgTT9tuc/hSrtw6uzJOvgRr2a9jyxxT1ely+B+xFAmJKVSTbpM/CuL7qxO8w==" crossorigin="anonymous" />
@endsection

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
				@foreach ($prodotti as $key => $prodotto)
					@if ($prodotto['tipo']==$tipo)
						<div class="card">
							<div class="overlayer">
								<a href="{{route('details-page',['idx'=>$key])}}" class="title txt_product_grid">{{$prodotto['titolo']}}</a>
								<a href="{{route('details-page',['idx'=>$key])}}" class="icon"><i class="fas fa-utensils"></i></a>
							</div>
							<img src="{{$prodotto['src']}}" alt="{{$prodotto['titolo']}}">
						</div>				
					@endif
				@endforeach
			</div>
		@endforeach
	</main>

@endsection
<header>
	<div class="logo">
		<img src="{{ asset('img/logo.png') }}" alt="">
	</div>
	<ul class="nav txt_nav">
		<li class="{{(Request::route()->getName()=='home-page')?'active':''}}"><a href="{{route('home-page')}}">Home</a></li>
		<li class="{{(Request::route()->getName()=='products-page')?'active':''}}"><a href="{{route('products-page')}}">Prodotti</a></li>
		<li class="{{(Request::route()->getName()=='news-page')?'active':''}}"><a href="{{route('news-page')}}">News</a></li>
	</ul>
</header>

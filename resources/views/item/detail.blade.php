@extends('layouts.app')
@section('content')
	<ul>
	<li>商品名：{{$item->name}}</li>
	<li>商品説明：{{$item->description}}</li>
	<li>価格：{{$item->price}}</li>
	<li>在庫数：
	@if($item->stock_val > 0)
		在庫あり
	@else
		在庫なし
	@endif
	</li>
	<a href="{{ action('ItemController@index') }}">商品一覧へ戻る</a>
	</ul>
@endsection

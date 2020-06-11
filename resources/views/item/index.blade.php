@extends('layouts.app')

@section('content')
@foreach($items as $item)
	<ul>
	<li>商品名：<a href="<?php echo route('detail.show', array('name' => $item->name)); ?>">{{$item->name}}</a></li>
	<li>価格：{{$item->price}}</li>
	<li>在庫数：
	@if($item->stock_val > 0)
		在庫あり
	@else
		在庫なし
	@endif
	</li>
	</ul>
@endforeach
@endsection

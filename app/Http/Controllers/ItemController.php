<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Item;

class ItemController extends Controller
{
	public function index()
	{
		// DBから全レコードを取得
		$items = Item::all();
		return view('item/index')->with('items', $items);
	}

	public function detail($name)
	{
		$item = Item::where('name', $name)->first();
		return view('item/detail')->with('item', $item);
	}
}

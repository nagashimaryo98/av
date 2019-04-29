<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// db接続
use \App\Actress;

class HomesController extends Controller
{
    //
	public function index() {
		$actress = Actress::where('pr', 1)->where('public',1)->limit(12)->get();
		$new = Actress::where('new',1)->where('public',1)->get();
		// $young = Actress::where('public',1)->orderBy('birthday','desc')->limit(12)->get();
		$title = 'RYLIS';
		$description = '人気の女優から懐かしいあの女優までいるAV女優一覧(6,731人)ページです。RYLISは日本最大級のAV女優情報を掲載しています。';
		return view('pages.home.index',[
			'actress' => $actress,
			'title' => $title,
			'description' => $description,
			'new' => $new,
		]);
	}
}

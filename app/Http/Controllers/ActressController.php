<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use \App\Actress;
use \App\Items;

class ActressController extends Controller
{
    //
	public function index($name) {
		$actress = Actress::where('name', $name)->first();
		if($actress->public == 1) {
			$items = Items::where('actress_id', $actress->id)->paginate(30);
			$popular = Actress::where('pr', 1)->get();
			$title = $actress['name'];
			$description = 'AV女優の'.$actress['name'].'('.$actress['ruby'].')が出演する動画一覧ページです。';
			$description = $description.'RYLISは日本最大級のAV女優情報を掲載しています。';
			return view('pages.actress.index',[
				'actress' => $actress,
				'title' => $title,
				'description' => $description,
				'items' => $items,
				'popular' => $popular
			]);
		} else {
			abort('404');
		}
	}

	public function list($keyword) {
		$actress = Actress::where('keyword', $keyword)->where('public',1)->paginate(42);

		$kana = array(
			'あ', 'い', 'う', 'え', 'お',
			'か', 'き', 'く', 'け', 'こ',
			'さ', 'し', 'す', 'せ', 'そ',
			'た', 'ち', 'つ', 'て', 'と',
			'な', 'に', 'ぬ', 'ね', 'の',
			'は', 'ひ', 'ふ', 'へ', 'ほ',
			'ま', 'み', 'む', 'め', 'も',
			'や', 'ゆ', 'よ',
			'ら', 'り', 'る', 'れ', 'ろ',
			'わ'
		);
		
		$romaji = array(
			'a', 'i', 'u', 'e', 'o',
			'ka', 'ki', 'ku', 'ke', 'ko',
			'sa', 'si', 'su', 'se', 'so',
			'ta', 'ti', 'tu', 'te', 'to',
			'na', 'ni', 'nu', 'ne', 'no',
			'ha', 'hi', 'hu', 'he', 'ho',
			'ma', 'mi', 'mu', 'me', 'mo',
			'ya', 'yu', 'yo',
			'ra', 'ri', 'ru', 're', 'ro',
			'wa'
		);

		$array_search = array_search($keyword,$romaji);

		$title = '「'.$kana[$array_search].'」から始まるav女優一覧';
		$description = $title.'一覧ページです。';
		$description = $description.'RYLISは日本最大級のAV女優情報を掲載しています。';
		return view('pages.actress.list',[
			'actress' => $actress,
			'title' => $title,
			'description' => $description,
			'keyword' => $keyword,
		]);
	}
}

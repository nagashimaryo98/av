<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

use Goutte;

use \App\Actress;

set_time_limit(300);

class SqlController extends Controller
{
    //
	public function index()
	{
		$json = file_get_contents('https://api.dmm.com/affiliate/v3/ItemList?api_id=7CJA3UPAr0XrZVHAXH9b&affiliate_id=hole-990&site=FANZA&service=digital&floor=videoa&hits=100&sort=rank&keyword=%E8%87%BC%E4%BA%95%E3%81%95%E3%81%A8%E7%BE%8E&output=json');
		$json = mb_convert_encoding($json, 'UTF8', 'ASCII,JIS,UTF-8,EUC-JP,SJIS-WIN');
		$api = json_decode($json, true);

		for ($i=0; $i < 32; $i++) { 
			$dmm_data = $api['result']['items'];
			echo($dmm_data[$i]['title']);
			echo '<br>';
			echo($dmm_data[$i]['URL']);
			echo '<br>';
			echo '<br>';
		}

		// $url = 'https://www.dmm.co.jp/mono/dvd/-/actress/';
		// $crawler = Goutte::request('GET', $url);
		// $count = count($crawler->filter('.act-box')->eq(0)->filter('.act-box-100 li a'));

		// for ($i=0; $i < $count; $i++) { 
		// 	$name = $crawler->filter('.act-box-100 li a')->eq($i)->text();

		// 	echo $name;
		// 	echo '<br>';

		// 	$check = Actress::where('name', $name)->first();
		// 	if($check) {
		// 		$id = $check['id'];
		// 		Actress::where('id', $id)->update(['new' => 1]);
		// 	}

		// }


		// $array = array(
		// 	'a','i','u','e','o',
		// 	'ka','ki','ku','ke','ko',
		// 	'sa','si','su','se','so',
		// 	'ta','ti','tu','te','to',
		// 	'na','ni','nu','ne','no',
		// 	'ha','hi','hu','he','ho',
		// 	'ma','mi','mu','me','mo',
		// 	'ya','yu','yo',
		// 	'ra','ri','ru','re','ro',
		// 	'wa',
		// );

		// for ($n=0; $n < count($array); $n++) { 
		// 	$url = 'https://www.dmm.co.jp/mono/dvd/-/actress/=/keyword='.$array[$n].'/';
		// 	$crawler = Goutte::request('GET', $url);

		// 	if(count($crawler->filter('.terminal'))) {
		// 		$page = $crawler->filter('.terminal a')->attr('href');
		// 		$page = mb_substr($page, -2,-1);
		// 		$page = intval($page);
		// 	} else {
		// 		$page = count($crawler->filter('.d-boxpagenation')->eq(0)->filter('ul li'));
		// 		$page = $page-1;
		// 		if($page == 0) {
		// 			$page = 1;
		// 		}
		// 	}
		// 	$page = $page+1;

		// 	for ($s=1; $s < $page; $s++) { 
		// 		$url2 = $url.'page='.$s.'/';
		// 		$crawler = Goutte::request('GET', $url2);
		// 		$count = count($crawler->filter('.act-box-100 li a'));

		// 		for ($i=0; $i < $count; $i++) { 
		// 			$name = $crawler->filter('.act-box-100 li a')->eq($i)->text();

		// 			echo $name;
		// 			echo '<br>';

		// 			$check = Actress::where('name', $name)->first();

		// 			if($check) {
		// 				$id = $check['id'];
		// 				Actress::where('id', $id)->update(['keyword' => $array[$n]]);
		// 			}

		// 			// if(!$check) {

		// 			// 	$json = file_get_contents('https://api.dmm.com/affiliate/v3/ActressSearch?api_id=7CJA3UPAr0XrZVHAXH9b&affiliate_id=hole-990&keyword='.urlencode($name));
		// 			// 	$json = mb_convert_encoding($json, 'UTF8', 'ASCII,JIS,UTF-8,EUC-JP,SJIS-WIN');
		// 			// 	$api = json_decode($json, true);

		// 			// 	$dmm_data = $api['result']['actress'];
		// 			// 	$name = $dmm_data[0]['name'];
		// 			// 	$ruby = $dmm_data[0]['ruby'];
		// 			// 	$bust = $dmm_data[0]['bust'];

		// 			// 	if(array_key_exists('cup',$dmm_data[0])) {
		// 			// 		$cup = $dmm_data[0]['cup'];
		// 			// 	} else {
		// 			// 		$cup = NULL;
		// 			// 	}

		// 			// 	if(array_key_exists('waist',$dmm_data[0])) {
		// 			// 		$waist = $dmm_data[0]['waist'];
		// 			// 	} else {
		// 			// 		$waist = NULL;
		// 			// 	}

		// 			// 	if(array_key_exists('hip',$dmm_data[0])) {
		// 			// 		$hip = $dmm_data[0]['hip'];
		// 			// 	} else {
		// 			// 		$hip = NULL;
		// 			// 	}

		// 			// 	if(array_key_exists('height',$dmm_data[0])) {
		// 			// 		$height = $dmm_data[0]['height'];
		// 			// 	} else {
		// 			// 		$height = NULL;
		// 			// 	}

		// 			// 	if(array_key_exists('birthday',$dmm_data[0])) {
		// 			// 		$birthday = $dmm_data[0]['birthday'];
		// 			// 	} else {
		// 			// 		$birthday = NULL;
		// 			// 	}

		// 			// 	if(array_key_exists('blood_type',$dmm_data[0])) {
		// 			// 		$blood_type = $dmm_data[0]['blood_type'];
		// 			// 	} else {
		// 			// 		$blood_type = NULL;
		// 			// 	}

		// 			// 	if(array_key_exists('hobby',$dmm_data[0])) {
		// 			// 		$hobby = $dmm_data[0]['hobby'];
		// 			// 	} else {
		// 			// 		$hobby = NULL;
		// 			// 	}

		// 			// 	if(array_key_exists('prefectures',$dmm_data[0])) {
		// 			// 		$prefectures = $dmm_data[0]['prefectures'];
		// 			// 	} else {
		// 			// 		$prefectures = NULL;
		// 			// 	}

		// 			// 	if(array_key_exists('imageURL',$dmm_data[0])) {
		// 			// 		$image = $dmm_data[0]['imageURL']['large'];
		// 			// 		$host = parse_url($image,PHP_URL_HOST);
		// 			// 		$path = parse_url($image,PHP_URL_PATH);
		// 			// 		$imageURL = 'https://i2.wp.com/'.$host.$path;
		// 			// 	} else {
		// 			// 		$imageURL = NULL;
		// 			// 	}

		// 			// 	DB::table('actress')->insert([
		// 			// 		'name' => $name,
		// 			// 		'ruby' => $ruby,
		// 			// 		'bust' => $bust,
		// 			// 		'cup' => $cup,
		// 			// 		'waist' => $waist,
		// 			// 		'height' => $height,
		// 			// 		'birthday' => $birthday,
		// 			// 		'blood_type' => $blood_type,
		// 			// 		'hobby' => $hobby,
		// 			// 		'prefectures' => $prefectures,
		// 			// 		'imageURL' => $imageURL,
		// 			// 		'created_at' => now(),
		// 			// 		'updated_at' => now()
		// 			// 	]);
		// 			// 	$id = DB::getPdo()->lastInsertId();

		// 			// 	$json2 = file_get_contents('https://api.dmm.com/affiliate/v3/ItemList?api_id=7CJA3UPAr0XrZVHAXH9b&affiliate_id=hole-990&site=FANZA&service=digital&floor=videoa&hits=100&sort=rank&keyword='.urlencode($name).'&output=json');
		// 			// 	$json2 = mb_convert_encoding($json2, 'UTF8', 'ASCII,JIS,UTF-8,EUC-JP,SJIS-WIN');
		// 			// 	$api2 = json_decode($json2, true);

		// 			// 	for ($m=0; $m < count($api2['result']['items']); $m++) { 
		// 			// 		$dmm_data = $api2['result']['items'][$m];

		// 			// 		if(array_key_exists('title',$dmm_data)) {
		// 			// 			$title = $dmm_data['title'];
		// 			// 		} else {
		// 			// 			$title = NULL;
		// 			// 		}

		// 			// 		if(array_key_exists('volume',$dmm_data)) {
		// 			// 			$volume = $dmm_data['volume'];
		// 			// 		} else {
		// 			// 			$volume = NULL;
		// 			// 		}

		// 			// 		if(array_key_exists('affiliateURL',$dmm_data)) {
		// 			// 			$affiliateURL = $dmm_data['affiliateURL'];
		// 			// 		} else {
		// 			// 			$affiliateURL = NULL;
		// 			// 		}

		// 			// 		if(array_key_exists('affiliateURLsp',$dmm_data)) {
		// 			// 			$affiliateURLsp = $dmm_data['affiliateURLsp'];
		// 			// 		} else {
		// 			// 			$affiliateURLsp = NULL;
		// 			// 		}

		// 			// 		if(array_key_exists('imageURL',$dmm_data)) {
		// 			// 			$imageURL = $dmm_data['imageURL']['large'];
		// 			// 			$dmm_id = $dmm_data['content_id'];
		// 			// 			$host = parse_url($imageURL,PHP_URL_HOST);
		// 			// 			$path = parse_url($imageURL,PHP_URL_PATH);
		// 			// 			$imageURL = 'https://i2.wp.com/'.$host.$path;
		// 			// 		} else {
		// 			// 			$imageURL = NULL;
		// 			// 		}

		// 			// 		DB::table('items')->insert([
		// 			// 			'title' => $title,
		// 			// 			'volume' => $volume,
		// 			// 			'affiliateURL' => $affiliateURL,
		// 			// 			'affiliateURLsp' => $affiliateURLsp,
		// 			// 			'imageURL' => $imageURL,
		// 			// 			'actress_id' => $id,
		// 			// 			'dmm_id' => $dmm_id,
		// 			// 			'created_at' => now(),
		// 			// 			'updated_at' => now()
		// 			// 		]);

		// 			// 	}


		// 			// }

		// 		}
		// 	}
		// 	echo '<br>';

		// }

	}
}

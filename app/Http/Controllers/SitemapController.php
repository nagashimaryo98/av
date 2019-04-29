<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\URL;
use Carbon\Carbon;
use \App\Actress;

class SitemapController extends Controller
{
    // 画面表示
	public function html()
	{
		return view('sitemap');
	}

    // sitemap.xmlの生成と表示
	public function xml()
	{
       $sitemap = \App::make("sitemap");
        $now = Carbon::now();
        $sitemap->add(URL::to('/'), $now, '1.0', 'always');
		$sitemap->add(URL::to('/actress/create'), '2018-10-28', '1.0', 'monthly');
		$actress = Actress::where('public','1')->orderBy('updated_at', 'desc')->get();
		foreach ($actress as $actress_list)
		{
			$sitemap->add(URL::to('/actress/' . $actress_list->id), $actress_list->updated_at, '0.8', 'yearly');
		}

		return $sitemap->render('xml');
	}
}
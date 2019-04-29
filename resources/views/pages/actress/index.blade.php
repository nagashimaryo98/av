@extends('layouts.app')

@section('breadcrumbs', Breadcrumbs::render('actress',$actress))

@section('content')
	<div class="row pt-5">
		<div class="col-sm-2 text-center">
			<img src="{{$actress->imageURL}}" alt="" class="rounded-circle">
		</div>

		<div class="col-sm-10">
			<h1 class="d-inline">{{$actress->name}}</h1>
			<span>{{$actress->ruby}}</span>

			<table class="table text-center mt-4">
				<thead>
					<tr>

						<th width="80">バスト</th>
						<th width="80">カップ数</th>
						<th width="80">ウェスト</th>
						<th width="80">ヒップ</th>
						<th width="80">身長</th>
						<th width="120">生年月日</th>
						<th width="80">血液型</th>
						<th width="">趣味</th>
						<th width="80">出身地</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<th>{{$actress->bust}}</th>
						<td>{{$actress->cup}}</td>
						<td>{{$actress->waist}}</td>
						<td>{{$actress->hip}}</td>
						<td>{{$actress->height}}</td>
						<td>{{$actress->birthday}}</td>
						<td>{{$actress->blood_type}}</td>
						<td>{{$actress->hobby}}</td>
						<td>{{$actress->prefectures}}</td>
					</tr>
				</tbody>
			</table>

		</div>
	</div>

	<h2 class="text-muted h4 mb-4 mt-4">出演作品</h2>

	<div class="row item_list">
		@foreach($items as $item)
		<div class="col-md-2 col-sm-4 col-6 mb-4">
			<a href="{{$item->affiliateURL}}" target="_blank" rel="nofollow">
				
				<div style="background-image: url('{{$item->imageURL}}');" class="cover"></div>
				<div class="small text-muted">
					{{ str_limit($item->title, $limit = 50, $end = '...') }}
				</div>
			</a>
		</div>
		@endforeach

		<div class="w-100">
			{{$items->links()}}
		</div>

	</div>

	<h2 class="pb-3">人気AV女優</h2>
	<div class="row">
	@foreach($popular as $actress_list)
	<div class="col-md-2 col-sm-4 col-6 text-center">
		<a href="/actress/{{$actress_list->id}}">
			<img src="{{$actress_list->imageURL}}" alt="" class="rounded-circle w-75">
			<div class="small">{{$actress_list->name}}</div>		
		</a>
	</div>
	@endforeach
</div>

@endsection
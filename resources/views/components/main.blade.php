<h1 class="title fontxll pt-2 pb-2">
	@if(Request::is('/'))
	おすすめAV女優
	@else
	{{$title}}
	@endif
</h1>
<table class="table text-center" style="table-layout:fixed;">
	<thead>
		<tr>
			@if(Request::is('/'))
			<th scope="col" class="bg-success align-middle"><a href="/" class="text-white">おすすめ</a></th>
			@else
			<th scope="col" class="align-middle"><a href="/">おすすめ</a></th>
			@endif

			@if(Request::is('actress_list/a'))
			<th scope="col" class="bg-success align-middle"><a href="/actress_list/a" class="text-white">あ</a></th>
			@else
			<th scope="col" class="align-middle"><a href="/actress_list/a">あ</a></th>
			@endif

			@if(Request::is('actress_list/ka'))
			<th scope="col" class="bg-success align-middle"><a href="/actress_list/ka" class="text-white">か</a></th>
			@else
			<th scope="col" class="align-middle"><a href="/actress_list/ka">か</a></th>
			@endif
			
			@if(Request::is('actress_list/sa'))
			<th scope="col" class="bg-success align-middle"><a href="/actress_list/sa" class="text-white">さ</a></th>
			@else
			<th scope="col" class="align-middle"><a href="/actress_list/sa">さ</a></th>
			@endif

			@if(Request::is('actress_list/ta'))
			<th scope="col" class="bg-success align-middle"><a href="/actress_list/ta" class="text-white">た</a></th>
			@else
			<th scope="col" class="align-middle"><a href="/actress_list/ta">た</a></th>
			@endif

			@if(Request::is('actress_list/na'))
			<th scope="col" class="bg-success align-middle"><a href="actress_list/na" class="text-white">な</a></th>
			@else
			<th scope="col" class="align-middle"><a href="/actress_list/na">な</a></th>
			@endif

			@if(Request::is('actress_list/ha'))
			<th scope="col" class="bg-success align-middle"><a href="actress_list/ha" class="text-white">は</a></th>
			@else
			<th scope="col" class="align-middle"><a href="/actress_list/ha">は</a></th>
			@endif

			@if(Request::is('actress_list/ma'))
			<th scope="col" class="bg-success align-middle"><a href="actress_list/ma" class="text-white">ま</a></th>
			@else
			<th scope="col" class="align-middle"><a href="/actress_list/ma">ま</a></th>
			@endif

			@if(Request::is('actress_list/ya'))
			<th scope="col" class="bg-success align-middle"><a href="actress_list/ya" class="text-white">や</a></th>
			@else
			<th scope="col" class="align-middle"><a href="/actress_list/ya">や</a></th>
			@endif

			@if(Request::is('actress_list/ra'))
			<th scope="col" class="bg-success align-middle"><a href="actress_list/ra" class="text-white">ら</a></th>
			@else
			<th scope="col" class="align-middle"><a href="/actress_list/ra">ら</a></th>
			@endif

			@if(Request::is('actress_list/wa'))
			<th scope="col" class="bg-success align-middle"><a href="actress_list/wa" class="text-white">わ</a></th>
			@else
			<th scope="col" class="align-middle"><a href="/actress_list/wa">わ</a></th>
			@endif
		</tr>
	</thead>
</table>

<div class="row">
	@foreach($actress as $actress_list)
	<div class="item_box col-md-2 col-sm-4 col-6 text-center mb-4">
		<a href="/actress/{{$actress_list->name}}">
			@if($actress_list->imageURL)
			<img src="{{$actress_list->imageURL}}" alt="" class="rounded-circle">
			@else
			<img src="/images/no_login_profimg.svg" class="w-75">
			@endif
			<div class="small">{{$actress_list->name}}</div>		
		</a>
	</div>
	@endforeach
</div>

@if(!Request::is('/'))
<div class="w-100">
	{{$actress->links()}}
</div>
@endif
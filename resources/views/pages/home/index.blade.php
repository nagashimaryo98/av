@extends('layouts.app')
@section('content')
@include('components.main')
<h2 class="pb-3">新人AV女優</h2>

<div class="row">
	@foreach($new as $new_list)
	<div class="col-md-2 col-sm-4 col-6 text-center mb-4">
		<a href="/actress/{{$new_list->name}}">
			@if($new_list->imageURL)
			<img src="{{$new_list->imageURL}}" alt="" class="rounded-circle">
			@else
			<img src="/images/no_login_profimg.svg" class="w-75">
			@endif
			<div class="small">{{$new_list->name}}</div>		
		</a>
	</div>
	@endforeach
</div>

@endsection
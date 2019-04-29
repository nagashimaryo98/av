@component('components.header')

@slot("title")
{{$title}}
@endslot

@slot("description")
{{$description}}
@endslot

@endcomponent
<body>
    @include('components.inc_header')
    <div id="app" class="container">
        <div class="area">
        	<div class="small">
        		 @yield('breadcrumbs')
        	</div>
            @yield('content')
        </div>
    </div>
</body>
</html>

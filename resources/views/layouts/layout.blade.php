@component('components.inc_header')
@slot("title")
@if(Request::is('/'))
RYLIS
@elseif(Request::is('/login'))
ログイン - 未来型投資コミュニティ
@endif
@endslot
@endcomponent

<body>
	<div id="app" class="container">

		<div class="area">
			@yield("content")
		</div>
		@component("components.footer")
		@endcomponent

	</div>
</body>
</html>
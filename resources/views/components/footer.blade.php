<div class="clear"></div>

<!-- 画面のどこかをクリックしたら、ポップアップを消す処理を追加 -->
<label for="close">
	<div class="popup_close"></div>
</label>
<input type="checkbox" id="close" class="close">

<footer class="footer">
	<div class="area">
		<div class="footer_box">
			<img src="/images/logo_black.svg" alt="">
			<span>ー投資をもっと身近に</span>
		</div>
		<div class="footer_box">
			<ul>
				<li><a href="/">TOPページ</a></li>
				<li><a href="/about">IRクラウドについて</a></li>
				<li><a href="/contact">お問い合わせ</a></li>
			</ul>
			<br>
			<ul>
				<li><a href="/exemption_matters">免責事項</a></li>
				<li><a href="/terms">運営会社</a></li>
				<li><a href="https://twitter.com/IR_Crowd" rel="no_follow" target="_blank">公式Twitterはこちら</a></li>
			</ul>

		</div>
		<div class="footer_box">
			<form action="" class="footer_contact">
				<textarea name="" id="" cols="30" rows="10"></textarea>
				<button class="black_button">送信する</button>
			</form>
		</div>
	</div>
</footer>

@if(Auth::check())
@else
@include("components.not_login")
@endif
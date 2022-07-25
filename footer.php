</div>
<footer class="footer">
	<div class="container">
		<div class="in_footer">
			<div class="footer_logo hide_mobile">
				<a href="/"><img src="/assets/images/logo.svg" alt=""/></a>
			</div>
			<div class="footer_menu hide_mobile">
				<ul>
					<li><a href="/what/" class="title_footer_menu">What we do</a></li>
					<li><a href="/what/#messaging">Messaging and Media</a></li>
					<li><a href="/what/#engaging">Engaging Wi-Fi Experiences</a></li>
					<li><a href="/what/#revenue">Revenue Generation</a></li>
					<li><a href="/what/">Performance Optimization</a></li>
				</ul>
			</div>
			<div class="footer_menu hide_mobile">
				<ul>
					<li><a href="/who/" class="title_footer_menu">Who we serve</a></li>
					<li><a href="/who/">Advertisers & Agencies</a></li>
					<li><a href="/providers/">Wi-Fi Providers</a></li>
					<?/*<li><a href="#">Ad Platforms</a></li>*/?>
				</ul>
			</div>
			<div class="footer_menu hide_mobile">
				<ul>
					<li><a href="/why/" class="title_footer_menu">Our company</a></li>
					<li><a href="/providers/">About</a></li>
					<li><a href="/contacts/">Contact Us</a></li>
				</ul>
			</div>
			<div class="left_copy show_mobile">
				<div class="top_left_copy">© WiConnect 2022</div>
				<div class="bottom_left_copy"><a href="/privacy/" class="privacy" target="_blank">Privacy</a></div>
			</div>
			<div class="footer_linkedin">
				<a href="https://www.linkedin.com/company/18248407" target="_blank"><img src="/assets/images/linkedin.png" alt=""/></a>
			</div>
		</div>
		
	</div>
</footer>
<div class="copyright">
	<div class="container">
		<div class="in_copyright">
			<div class="left_copy hide_mobile">
				<div class="top_left_copy">© WiConnect 2022</div>
				<div class="bottom_left_copy"><a href="/privacy/" target="_blank" class="privacy">Privacy</a></div>
			</div>
			<div class="right_copy">WiConnect is proud to be a member of <a href="https://wballiance.com/" target="_blank"><img src="/assets/images/copy.png" alt=""/></a></div>
		</div>
	</div>
</div>
<?if(strpos($_SERVER['REQUEST_URI'],"/contacts/")===false){?>
<div id="getdemo" style="display:none" class="modal_block">
	<form data-go="/ajax/getdemo.php">
		<div class="title_modal">Request Demo</div>
		<div class="form_line">
			<input type="email" name="email" required value="">
			<label>Email</label>
		</div>
		<button class=" main_button">Request Demo</button>

	</form>
</div>
<?}?>
<div id="answer_ajax" class="modal_block" style="display:none">

</div>
<link href="/assets/js/fancybox/jquery.fancybox.css" rel="stylesheet">
<link rel="stylesheet" href="/assets/js/owl/owl.carousel.min.css">
<link rel="stylesheet" href="/assets/js/owl/owl.theme.default.min.css">
<link rel="stylesheet" href="/assets/css/style.css?rand=<?=rand();?>">
<link rel="stylesheet" href="/assets/css/responsive.css?rand=<?=rand();?>">
<script src="/assets/js/jquery-3.4.1.min.js"></script>
<script src="/assets/js/owl/owl.carousel.min.js"></script>
<script src="/assets/js/jquery.validate.min.js"></script>
<script src="/assets/js/inputmask/min/jquery.inputmask.bundle.min.js"></script>
<script src="/assets/js/fancybox/jquery.fancybox.js"></script>
<script src="/assets/js/script.js?rand=<?=rand();?>"></script>
</body>
</html>
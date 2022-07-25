<?php global $title;
global $description;

?>
<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width">
<link rel="icon" href="/favicon.ico" />
	<title><?=$title;?></title> 
	<meta name="description" content="<?=$description;?>" />

</head>
<body style="opacity:0" <?php if($_SERVER["REQUEST_URI"]!="/"){?>class="not_main"<?php }?>>
<div class="for_header_line"></div>
<header class="header">
	<div class="container">
		<div class="in_header">
			<div class="left_in_header">
				<div class="logo"><?if($_SERVER["REQUEST_URI"]!="/"){?><a href="/"><?}?><img src="/assets/images/logo.svg" alt=""/><?if($_SERVER["REQUEST_URI"]!="/"){?></a><?}?></div>
				<ul class="top_menu">
					<li <?if(strpos($_SERVER['REQUEST_URI'],"/what/")!==false){?>class="active"<?}?>><a href="/what/">What we do</a></li>
					<li class="parent_top <?if(strpos($_SERVER['REQUEST_URI'],"/who/")!==false){?>active<?}?>"><a href="/who/">Who we serve</a> <span><svg width="19" height="11" viewBox="0 0 19 11" fill="none" xmlns="http://www.w3.org/2000/svg">
					<path d="M1 1L9.5 9L18 1" stroke="#FFC400" stroke-width="2"/>
					</svg>
					</span>
						<ul>
							<li ><a href="/who/">Advertisers</a></li>
							<li ><a href="/providers/">Wi-Fi Providers</a></li>
						</ul></li>
					<li class="parent_top <?if(strpos($_SERVER['REQUEST_URI'],"/why/")!==false||strpos($_SERVER['REQUEST_URI'],"/careers/")!==false||strpos($_SERVER['REQUEST_URI'],"/providers/")!==false){?>active<?}?>" ><a href="/why/">Our company</a> <span><svg width="19" height="11" viewBox="0 0 19 11" fill="none" xmlns="http://www.w3.org/2000/svg">
					<path d="M1 1L9.5 9L18 1" stroke="#FFC400" stroke-width="2"/>
					</svg>
					</span>
						<ul>
							<li ><a href="/why/">About</a></li>
							<li ><a href="/careers/">Careers</a></li>
						</ul>
					</li>
					<li <?if(strpos($_SERVER['REQUEST_URI'],"/careers/")!==false){?>class="contacts"<?}?>><a href="/contacts/">Contact us</a></li>
				</ul>
			</div>
			<div class="right_in_header">
				<a href="#getdemo" <?if(strpos($_SERVER['REQUEST_URI'],"/contacts/")!==false){?>style="opacity:0;pointer-events: none;"<?}?> class="getademo fancybox">Request Demo</a>
			</div>
		</div>
		<div class="line_mobile_header show_mobile">
			<div class="logo"><?if($_SERVER["REQUEST_URI"]!="/"){?><a href="/"><?}?><img src="/assets/images/logo.svg" alt=""/><?if($_SERVER["REQUEST_URI"]!="/"){?></a><?}?></div>
			<div class="toggle_menu"><span></span><span></span><span></span></div>
		</div>
	</div>
</header>
<div class="main">
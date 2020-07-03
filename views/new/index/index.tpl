<!DOCTYPE html>
<html lang="ru" class="page">
<head>
	<meta charset="UTF-8">
	<title>{$Title}</title>
	<meta name="yandex-verification" content="b8b8d91f919db8cf" /> 
	<meta property="og:image" content="https://aurora-project.ru/main/templates/new/img/og_img.png">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
	<meta name="description" content="AURORA - Приватный чит №1 для CS:GO! Красивое вх, обход записи на видео и стримах, плавный легит, жетский рейдж, скинченджер. Становитесть богом CSGO прямо сейчас с приватным читом от AURORA PROJECT">
	<meta name="keywords" content="AURORA PROJECT, AURORA, чит, ксго, чит для ксго, лучший, легитный чит,легит, рейдж aurora, приватный чит csgo, бесплатный чит csgo CSGO,CHEAT,HACK,FOR,HACK FOR CSGO,ЧИТ,legit,rage,visual,visuals,wh,aim,aimbot,trigger,triggerbot,best hack,perfect aim,killshot,aurora,legit cheat for csgo,counter strike, counter,strike,CS-GO,CS:GO,global,offensive,global offensive">
	<link rel="shortcut icon" href="https://aurora-project.ru/main/templates/new/img/og_img.png">
	<link rel="stylesheet" href="{$CSS}style.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
	
</head>

<body class="flex flex-column a-center j-center body t-6">

<div class="alerts"></div>

{if $User == false}
<form class="auth-block flex flex-column __modalLogin" data-id="login" id="auth">
	<span class="auth-block__heading">Вход</span>
	<input type="text" class="auth-block__input auth-block__input_login login" placeholder="Логин">
	<input type="password" class="auth-block__input auth-block__input_password password" placeholder="Пароль">
	<div class="g-recaptcha"></div>
	<button class="auth-block__button t-6" type="submit">Войти</button>
	<!--<a href="#" class="auth-block__reset t-6">Забыл пароль?</a>-->
</form> 

<form class="auth-block flex flex-column __modalReg" data-id="reg" id="reg">
	<span class="auth-block__heading __Register">Регистрация</span>
	<input type="text" class="auth-block__input auth-block__input_login login" placeholder="Логин">
	<input type="text" class="auth-block__input auth-block__input_login email" placeholder="E-mail">
	<input type="password" class="auth-block__input auth-block__input_password password" placeholder="Пароль">
	<input type="password" class="auth-block__input auth-block__input_password password2" placeholder="Пароль еще раз">
	<div class="g-recaptcha"></div>
	<button class="auth-block__button t-6 __RegisterBtn">Зарегистрироваться</button>
	<span class="auth-block__info f-medium t-6">
		Нажимая на кнопку “Зарегистрироваться” вы соглашаетесь с условиями
		<a href="/agreements/" target="_blank" class="auth-block__agree t-6">соглашения</a>
	</span>
</form>
{/if}

 

<div class="__clicker"></div>
<div class="__wrap flex flex-column a-center j-center">
<!-- HEADER BLOCK =========== -->
<header class="header flex a-center container">
	<a href="/" class="header__logo f-black t-6">AuroraProject</a>

	<nav class="header__menu flex a-center">
		<a href="/" class="menu__link menu__link_active t-6">Главная</a>
		<a href="/func" class="menu__link t-6">Функционал</a>
		<a href="/payment/" class="menu__link t-6">Купить</a>
		<a href="/instruction/" class="menu__link t-6" >Инструкция</a>
	</nav>

	<div class="header__auth flex a-center">
		{if $User == false}
		<a class="auth__login f-medium t-6 __Login" data-id="login">Вход</a>
		<a class="auth__reg f-medium t-6 __Reg" data-id="reg">Регистрация</a>
		{else}
		<a class="auth__reg f-medium t-6" href="/profile/">{$User['login']}</a>
		{/if}
	</div>
</header>
<!-- MAIN ROOT CONTAINER -->
<main class="main flex flex-column j-center a-center">
<!-- WELCOME SECTION ========= -->
	<div class="welcome flex flex-column j-center container section" data-id="welcome">
		<h1 class="welcome__heading f-black">
			AURORA — приватный <br> чит для СS:GO
		</h1>

		<h2 class="welcome__info">
			Aurora — это модный, а самое главное стильный чит для игры CS:GO. Большое количество полезных функций, понятный интерфейс и русский язык меню, четкий и плавный LEGIT АИМ, жетский и карательный RAGE АИМ, WH, с полным обходом записи на видео и стримах, а также общий скинченджер и красивый инвентарь, и профиль ченджер. Чит предоставит Вам полное преимущество над вашим противником в любой ситуации и точно не оставит Вас равнодушным. Становитесь богом CS:GO прямо сейчас!
		</h2>

		<div>
			<a href="/payment/" class="welcome__button t-6">Приобрести наш товар</a>
			<a href="/instruction/" class="welcome__button t-6">Инструкция</a>
		</div>

		<strong class="welcome__working f-medium">Работает на Windows 7, 8-8.1, 10 - 64 BIT</strong>

		<div class="welcome__advantage flex a-center">
			<em class="advantage__plus advantage__plus_1 flex a-center">
				Постоянные обновления
			</em>

			<em class="advantage__plus advantage__plus_2 flex a-center">
				Большой функционал
			</em>

			<em class="advantage__plus advantage__plus_3 flex a-center">
				Большой <br> опыт в сфере
			</em>
		</div>

		<img src="{$IMG}logotype.png" alt="" class="welcome__wrap-img">
	</div>

<!-- YOUTUBE SECTION --============== -->
	<div class="youtube flex flex-wrap container a-center section">
		<strong class="section__heading f-bold">Видео-обзоры</strong>

		<div class="youtube__video card-style" style="margin-bottom: 100px;"><iframe width="550" height="320" src="https://www.youtube.com/embed/ad0ldSxM0Ss" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen style="margin: 10px 5px;"></iframe></div>
		<div class="youtube__video card-style" style="margin-bottom: 100px;"><iframe width="550" height="320" src="https://www.youtube.com/embed/YPNRVjROpSc" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen style="margin: 10px 5px;"></iframe></div>

		<div class="youtube__video card-style"><iframe width="550" height="320" src="https://www.youtube.com/embed/tTWetqt9xgY" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen style="margin: 10px 5px;"></iframe></div>
		<div class="youtube__video card-style"><iframe width="550" height="320" src="https://www.youtube.com/embed/Cud11OGusEc" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen style="margin: 10px 5px;"></iframe></div>
	</div>

	

</main>
	
<!-- FOOTER BLOCK ========== -->
<footer class="footer flex a-center">
	<span class="footer__copyright f-medium">AURORA-PROJECT.RU ©2018-2019 Copyright</span>

	<div class="footer__social flex a-center">
		<a href="//www.free-kassa.ru/"><img src="//www.free-kassa.ru/img/fk_btn/18.png"></a>
		<a href="//www.youtube.com/channel/UCHeuRvHUKsw7BApFe_Pf-kg" class="social__link social__link_youtube t-6" style="margin-left: 20px;" target="_blank"></a>
		<a href="//vk.com/aurorareborn" class="social__link social__link_vk t-6" target="_blank"></a>
		<a href="//discord.gg/eqYc8QB" class="social__link social__link_discord t-6" target="_blank"></a>
	</div>
</footer>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<script src="https://www.google.com/recaptcha/api.js?onload=recaptchaCallback&render=explicit" async defer></script>
<script type="text/javascript">
	var recaptchaCallback = function() {
		$('.g-recaptcha').each(function(index, el) {
			var widgetId = grecaptcha.render(el, { 'sitekey' : '{$captcha_sitekey}', 'theme' : 'dark'});
			$(this).attr('data-widget-id', widgetId);
		});
	}
</script>
<script src="{$JS}script.js"></script>

<noscript>
	<div style="background-color: rgba(0,0,0,.8); width: 100%; height: 100vh; position: fixed; top: 0; left: 0; text-align: center; display: flex; justify-content: center; align-items: center; font-size: 24px; color: #fff; padding: 10px">
		<span>Пожалуйста, включите JavaScript в настройках браузера</span>
	</div>
</noscript>	
</body>
</html>

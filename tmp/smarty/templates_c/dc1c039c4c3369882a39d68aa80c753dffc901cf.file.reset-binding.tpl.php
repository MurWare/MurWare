<?php /* Smarty version Smarty-3.1.6, created on 2019-04-10 14:31:09
         compiled from "../views/new/reset-binding.tpl" */ ?>
<?php /*%%SmartyHeaderCode:8458156035cadd3fd995214-76227585%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'dc1c039c4c3369882a39d68aa80c753dffc901cf' => 
    array (
      0 => '../views/new/reset-binding.tpl',
      1 => 1552485839,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '8458156035cadd3fd995214-76227585',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'Title' => 0,
    'IMG' => 0,
    'Me' => 0,
    'status' => 0,
    'GetAllTickets' => 0,
    'key' => 0,
    'k' => 0,
    'link' => 0,
    'Back' => 0,
    'CurrentPage' => 0,
    'MaxList' => 0,
    'Next' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_5cadd3fda26f4',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5cadd3fda26f4')) {function content_5cadd3fda26f4($_smarty_tpl) {?><!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title><?php echo $_smarty_tpl->tpl_vars['Title']->value;?>
</title>
	<link href="/main/templates/default/css/bootstrap.min.css" rel="stylesheet">
	<link href="/main/templates/default/css/font-awesome.min.css" rel="stylesheet">
	<link href="/main/templates/default/css/datepicker3.css" rel="stylesheet">
	<link href="/main/templates/default/css/styles.css" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
	<link rel="shortcut icon" type="image/x-icon" href="<?php echo $_smarty_tpl->tpl_vars['IMG']->value;?>
logotype.png" />
	<!--[if lt IE 9]>
	<script src="js/html5shiv.js"></script>
	<script src="js/respond.min.js"></script>
	<![endif]-->
</head>
<body>
	<nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
		<div class="container-fluid">
			<div class="navbar-header">
				<a class="navbar-brand" href="/"><span><?php echo $_smarty_tpl->tpl_vars['Title']->value;?>
</span></a>
			</div>
		</div><!-- /.container-fluid -->
	</nav>
	<div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
		<div class="profile-sidebar">
			<div class="profile-userpic">
				<img src="http://icons.iconarchive.com/icons/artdesigner/tweet-my-web/256/single-bird-icon.png" class="img-responsive" alt="">
			</div>
			<div class="profile-usertitle">
				<div class="profile-usertitle-name"><a href="/profile/" class="color-black"><?php echo $_smarty_tpl->tpl_vars['Me']->value['login'];?>
</a></div>
				<div class="profile-usertitle-status"><span class="indicator label-success"></span><?php echo $_smarty_tpl->tpl_vars['Me']->value['class'];?>
</div>
			</div>
			<div class="clear"></div>
		</div>
		<div class="divider"></div>
		<ul class="nav menu">
			<li><a href="/admin/"><em class="fa fa-dashboard">&nbsp;</em> Статистика</a></li>
			<li><a href="/users/add/"><em class="fa fa-plus-square">&nbsp;</em> Добавить пользователя</a></li>
			<li><a href="/Users/"><em class="fa fa-calendar">&nbsp;</em> Пользователи</a></li>
			<li><a href="/Privilege/"><em class="fa fa-toggle-off ">&nbsp;</em> Привилегии</a></li>
			<li><a href="/Log/"><em class="fa fa-clone">&nbsp;</em> Логи</a></li>
			<li class="active"><a href="/Resbinding/"><em class="fa fa-envelope">&nbsp;</em> Сброс привязки</a></li>
			<li><a href="/Settings/"><em class="fa fa-bar-chart">&nbsp;</em> Настройки</a></li>
			<li><a href="/authorization/logout/"><em class="fa fa-power-off">&nbsp;</em> Выход</a></li>

		</ul>
	</div><!--/.sidebar-->

	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="/">
					<em class="fa fa-home"></em>
				</a></li>
				<li><a href="/admin/">Админ-панель</a></li>
				<li class="active"><a href="/Resbinding/">Сброс привязки</a></li>
			</ol>
		</div><!--/.row-->

		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Сброс привязки</h1>
				<?php if ($_smarty_tpl->tpl_vars['status']->value!=false){?>
					<div class="alert bg-danger" role="alert"><em class="fa fa-lg fa-warning">&nbsp;</em> <?php echo $_smarty_tpl->tpl_vars['status']->value;?>
 </div>
				<?php }?>
			</div>
		</div><!--/.row-->

		<div class="row">
			<div class="col-md-12">
				<div class="panel panel-default articles">
					<div class="panel-heading">
						Сброс привязки
						<ul class="pull-right panel-settings panel-button-tab-right">
							<li class="dropdown"><a class="pull-right dropdown-toggle" data-toggle="dropdown" href="#">
								<em class="fa fa-cogs"></em>
							</a>
								<ul class="dropdown-menu dropdown-menu-right">
									<li>
										<ul class="dropdown-settings">
											<li><a href="/resbinding/">
												<em class="fa fa-cog"></em> Сбросить
											</a></li>

											<li class="divider"></li>

											<li><a href="/resbinding/?sort=active">
												<em class="fa fa-cog"></em> Активные
											</a></li>

											<li class="divider"></li>

											<li><a href="/resbinding/?sort=accept">
												<em class="fa fa-cog"></em> Принятые
											</a></li>

											<li class="divider"></li>

											<li><a href="/resbinding/?sort=decline">
												<em class="fa fa-cog"></em> Отклонённые
											</a></li>
										</ul>
									</li>
								</ul>
							</li>
						</ul>
						<span class="pull-right clickable panel-toggle panel-button-tab-left"><em class="fa fa-toggle-up"></em></span></div>
					<div class="panel-body articles-container">

				<?php if ($_smarty_tpl->tpl_vars['GetAllTickets']->value!=false){?>

						<div class="article border-bottom">
							<div class="col-xs-12">
								<div class="row">
									<div class="col-xs-1 col-md-1">
										<div class="large">#</div>
									</div>
									<div class="col-xs-2 col-md-2">
										<div class="large">Логин</div>
									</div>
									<div class="col-xs-2 col-md-2">
										<div class="large">Сообщение</div>
									</div>
									<div class="col-xs-2 col-md-2">
										<div class="large">Дата</div>
									</div>
									<div class="col-xs-2 col-md-2">
										<div class="large">Статус</div>
									</div>
									<div class="col-xs-2 col-md-2">
										<div class="large">Действие</div>
									</div>
								</div>
							</div>
							<div class="clear"></div>
						</div><!--End .article-->

					<?php  $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['key']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['GetAllTickets']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['key']->key => $_smarty_tpl->tpl_vars['key']->value){
$_smarty_tpl->tpl_vars['key']->_loop = true;
?>

						<div class="article border-bottom">
							<div class="col-xs-12">
								<div class="row">
									<div class="col-xs-1 col-md-1">
										<h4><?php echo $_smarty_tpl->tpl_vars['key']->value['id'];?>
</h4>
									</div>
									<div class="col-xs-2 col-md-2">
										<h4><?php echo $_smarty_tpl->tpl_vars['key']->value['login'];?>
</h4>
									</div>
									<div class="col-xs-2 col-md-2">
										<h4><?php echo $_smarty_tpl->tpl_vars['key']->value['message'];?>
</h4>
									</div>
									<div class="col-xs-2 col-md-2">
										<h4><?php echo date('d.m.Y H:i:s',$_smarty_tpl->tpl_vars['key']->value['date']);?>
</h4>
									</div>
									<div class="col-xs-2 col-md-2">
										<h4><?php echo $_smarty_tpl->tpl_vars['key']->value['status'];?>
</h4>
									</div>
									<div class="col-xs-2 col-md-2">

										<a href="/users/profile/?login-id=<?php echo $_smarty_tpl->tpl_vars['key']->value['login'];?>
" class="btn btn-md btn-primary">Открыть</a>

										<?php if ($_smarty_tpl->tpl_vars['key']->value['status']=='active'){?>
											<a href="/resbinding/accept/?id=<?php echo $_smarty_tpl->tpl_vars['key']->value['id'];?>
&login=<?php echo $_smarty_tpl->tpl_vars['key']->value['login'];?>
" class="btn btn-md btn-success">Принять</a>
											<a href="/resbinding/decline/?id=<?php echo $_smarty_tpl->tpl_vars['key']->value['id'];?>
" class="btn btn-md btn-warning">Отклонить</a>
										<?php }?>

										<?php if ($_smarty_tpl->tpl_vars['k']->value['status']=='decline'){?>
											<a href="/resbinding/accept/?id=<?php echo $_smarty_tpl->tpl_vars['key']->value['id'];?>
" class="btn btn-md btn-success">Принять</a>
										<?php }?>

										<a href="/resbinding/delete/?id=<?php echo $_smarty_tpl->tpl_vars['key']->value['id'];?>
" class="btn btn-md btn-danger">Удалить</a>
									</div>
								</div>
							</div>
							<div class="clear"></div>
						</div><!--End .article-->
					<?php } ?>

						<div class="article border-bottom">
							<div class="col-xs-12">
								<div class="row">
									<div class="col-xs-5 col-md-5">
									</div>
									<div class="col-xs-2 col-md-2">
										<a href="<?php echo $_smarty_tpl->tpl_vars['link']->value;?>
&page=<?php echo $_smarty_tpl->tpl_vars['Back']->value;?>
" class="btn btn-md btn-info"><</a>
										<span><?php echo $_smarty_tpl->tpl_vars['CurrentPage']->value;?>
 / <?php echo $_smarty_tpl->tpl_vars['MaxList']->value;?>
</span>
										<a href="<?php echo $_smarty_tpl->tpl_vars['link']->value;?>
&page=<?php echo $_smarty_tpl->tpl_vars['Next']->value;?>
" class="btn btn-md btn-info">></a>
									</div>
								</div>
							</div>
							<div class="clear"></div>
						</div><!--End .article-->

				<?php }?>

					</div>
				</div><!--End .articles-->



			<div class="col-sm-12">
				<p class="back-link">MoloF SYSTEM</p>
			</div>

	</div>	<!--/.main-->

	<script src="/main/js/jquery-1.11.1.min.js"></script>
	<script src="/main/js/bootstrap.min.js"></script>
	<script src="/main/js/chart.min.js"></script>
	<script src="/main/js/chart-data.js"></script>
	<script src="/main/js/easypiechart.js"></script>
	<script src="/main/js/easypiechart-data.js"></script>
	<script src="/main/js/bootstrap-datepicker.js"></script>
	<script src="/main/js/custom.js"></script>
	<script>
		window.onload = function () {
	var chart1 = document.getElementById("line-chart").getContext("2d");
	window.myLine = new Chart(chart1).Line(lineChartData, {
	responsive: true,
	scaleLineColor: "rgba(0,0,0,.2)",
	scaleGridLineColor: "rgba(0,0,0,.05)",
	scaleFontColor: "#c5c7cc"
	});
};
	</script>

</body>
</html>
<?php }} ?>
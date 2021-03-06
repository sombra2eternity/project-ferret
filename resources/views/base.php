<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>{%PAGE.TITLE%}</title>
	{%META.OG.IMAGE%}
	<link href="{%w.indexURL%}/r/css/index.css" rel="stylesheet"/>
	<link href="{%w.indexURL%}/r/css/font-awesome.min.css" rel="stylesheet"/>
	<script type="text/javascript" src="{%w.indexURL%}/r/js/coreJS.404.js"></script>
	<script type="text/javascript" src="{%w.indexURL%}/r/js/dropdown.js"></script>
	{%PAGE.SCRIPT%}
</head>
<body>
	<header>
		<div>
			<img src='{%w.indexURL%}/r/images/colorvampLogoSimpleWhite.png' style='float:left;margin:7px 15px;'/>
			<ul class='top-menu'>
				<li>Help</li>
				<li><a href="{%w.indexURL%}/u/me">{%user_userName%}'s Account</a></li>
				<li><a href="{%w.indexURL%}/u/logout">Logout</a></li>
			</ul>
		</div>
		<div class="top-info">
			<h1>{%PAGE.H1%}</h1>
			<p>{%PAGE.DESCRIPTION%}</p>
		</div>
	</header>
	<div class="wrapper">
		<div class="side">
			<div>Bandeja de entrada</div>
			<div><a href="{%w.indexURL%}/p">Lista de proyectos</a></div>
		</div>
		<div class="main">
			{%MAIN%}
		</div>
	</div>
</body>
</html>

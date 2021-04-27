<?php

if ((substr($_SERVER['REMOTE_ADDR'],0,11) === '69.164.163.') ||
		(substr(@$_SERVER['HTTP_X_FORWARDED_FOR'],0,11) === '69.164.163.')) {
	die('website disabled');
}

/********************************************************************
 * Header
 ********************************************************************/

function ThemeHeaderTemplate() {
	global $panels;
?>
<!DOCTYPE html>
<html><head>

	<meta charset="utf-8" />

	<title><?php if ($panels->pagetitle) echo htmlspecialchars($panels->pagetitle).' - '; ?>Pok&eacute;mon Showdown</title>

<?php if ($panels->pagedescription) { ?>
	<meta name="description" content="<?php echo htmlspecialchars($panels->pagedescription); ?>" />
<?php } ?>

	<meta http-equiv="X-UA-Compatible" content="IE=Edge,chrome=IE8" />
	<link rel="stylesheet" href="//neodraft.herokuapp.com/style/font-awesome.css?0.4463352778220553" />
	<link rel="stylesheet" href="//neodrafttest.herokuapp.com/theme/panels.css?0.9841815545568764" />
	<link rel="stylesheet" href="//neodrafttest.herokuapp.com/theme/main.css?0.7514639245052994" />
	<link rel="stylesheet" href="//neodraft.herokuapp.com/style/battle.css?0.9159034275582649" />
	<link rel="stylesheet" href="//neodraft.herokuapp.com/style/replay.css?0.6666970851582128" />
	<link rel="stylesheet" href="//neodraft.herokuapp.com/style/utilichart.css?0.272242667803986" />

	<!-- Workarounds for IE bugs to display trees correctly. -->
	<!--[if lte IE 6]><style> li.tree { height: 1px; } </style><![endif]-->
	<!--[if IE 7]><style> li.tree { zoom: 1; } </style><![endif]-->

	<script type="text/javascript">
		var _gaq = _gaq || [];
		_gaq.push(['_setAccount', 'UA-26211653-1']);
		_gaq.push(['_setDomainName', 'pokemonshowdown.com']);
		_gaq.push(['_setAllowLinker', true]);
		_gaq.push(['_trackPageview']);

		(function() {
			var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
			ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
			var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
		})();
	</script>
</head><body>

	<div class="pfx-topbar">
		<div class="header">
			<ul class="nav">
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//neodrafttest.herokuapp.com/?0.988773831277546"><img src="//neodrafttest.herokuapp.com/images/pokemonshowdownbeta.png?0.12232609454330445" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.6483339404399888">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.8021283708255873">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//neodrafttest.herokuapp.com/ladder/?0.763594588198695">Ladder</a></li>
				<li><a class="button nav-last" href="//neodrafttest.herokuapp.com/forums/?0.061723590798909767">Forum</a></li>
			</ul>
			<ul class="nav nav-play">
				<li><a class="button greenbutton nav-first nav-last" href="http://play.pokemonshowdown.com/">Play</a></li>
			</ul>
			<div style="clear:both"></div>
		</div>
	</div>
<?php
}

/********************************************************************
 * Footer
 ********************************************************************/

function ThemeScriptsTemplate() {
?>
	<script src="//neodraft.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.7808291964829202"></script>
	<script src="//neodraft.herokuapp.com/js/lib/lodash.core.js?0.8141795509855285"></script>
	<script src="//neodraft.herokuapp.com/js/lib/backbone.js?0.6999090484592372"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.07179694675566894"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//neodraft.herokuapp.com/js/lib/jquery-cookie.js?0.8748522394934493"></script>
	<script src="//neodraft.herokuapp.com/js/lib/html-sanitizer-minified.js?0.1746702050446709"></script>
	<script src="//neodraft.herokuapp.com/js/battle-sound.js?0.7366086616300722"></script>
	<script src="//neodraft.herokuapp.com/config/config.js?0.5817892573925392"></script>
	<script src="//neodraft.herokuapp.com/js/battledata.js?0.8580238762172128"></script>
	<script src="//neodraft.herokuapp.com/data/pokedex-mini.js?0.12730806309300147"></script>
	<script src="//neodraft.herokuapp.com/data/pokedex-mini-bw.js?0.4034708274877059"></script>
	<script src="//neodraft.herokuapp.com/data/graphics.js?0.23945051178836874"></script>
	<script src="//neodraft.herokuapp.com/data/pokedex.js?0.5424152393223478"></script>
	<script src="//neodraft.herokuapp.com/data/items.js?0.0005750319449888686"></script>
	<script src="//neodraft.herokuapp.com/data/moves.js?0.7592476944562145"></script>
	<script src="//neodraft.herokuapp.com/data/abilities.js?0.2567756789645581"></script>
	<script src="//neodraft.herokuapp.com/data/teambuilder-tables.js?0.9464654259678338"></script>
	<script src="//neodraft.herokuapp.com/js/battle-tooltips.js?0.5328809300503417"></script>
	<script src="//neodraft.herokuapp.com/js/battle.js?0.20866111633132234"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}

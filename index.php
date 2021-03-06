<?php
/* Ancient Beast - Free Open Source Online PvP TBS: card game meets chess, with creatures.
 * Copyright (C) 2007-2012  Valentin Anastase (a.k.a. Dread Knight)
 *
 * This file is part of Ancient Beast.
 *
 * Ancient Beast is free software: you can redistribute it and/or modify
 * it under the terms of the GNU Affero General Public License as
 * published by the Free Software Foundation, either version 3 of the
 * License, or (at your option) any later version.
 *
 * Ancient Beast is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU Affero General Public License for more details.
 *
 * You should have received a copy of the GNU Affero General Public License
 * along with this program.  If not, see <http://www.gnu.org/licenses/>.
 *
 * http://www.AncientBeast.com
 * https://github.com/FreezingMoon/AncientBeast
 * DreadKnight@FreezingMoon.org
 */

$style = '
a.FM:hover {
	text-shadow: black 0.1em 0.1em 0.2em, blue 0 0 10px;
}';
require_once('header.php'); 

if($_GET['action'] == 'logout'){
  session_destroy();
 		echo 'You have been logged out.';
		 echo '<meta http-equiv="refresh" content="1;url=index.php">';
 }
?>
<script type="application/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.4/jquery.min.js"></script>
<script type="application/javascript" src="media/fancybox/jquery.fancybox-1.3.4.pack.js"></script>
<script type="application/javascript" src="media/fancybox/jquery.easing-1.3.pack.js"></script>
<script type="application/javascript" src="media/fancybox/jquery.mousewheel-3.0.4.pack.js"></script>
<link rel="stylesheet" href="media/fancybox/jquery.fancybox-1.3.4.css" type="text/css" media="screen">
<script type="application/javascript">
$(document).ready(function() {
	var basePage = window.location.href.replace(/#.*/, "");
	$("a[rel=pop]").fancybox({
		'overlayColor'  : 'black',
		'transitionIn'	: 'elastic',
		'transitionOut'	: 'elastic',
		'onComplete'	: function(array, index) {
			history.replaceState("", "", basePage + "#id=" + index);
		},
		'onClosed'		: function() {
			history.replaceState("", "", basePage);
		}
	});
	
	if (/[\#&]id=(\d+)/.test(location.hash))
		$("#img" + RegExp.$1).trigger("click");
});
</script>
<article>
<div class="div center" id="media">
<?php
$images = scandir('media/screenshots');
natsort($images);
$i = 0;
foreach($images as $image) {
	if($image == '.' || $image == '..') continue;
	$title = substr($image, 0, -4);
	$image = str_replace(' ', '%20', $image);
	echo '<a id="img' . $i . '" rel="pop" href="media/screenshots/' . $image . '" title="' . $title . '"><img class="shadow" style="width:280px; margin:5px;" src="media/screenshots/' . $image . '" title="' . $title . '" alt="' . $image . '"></a>';
	$i++;
} echo '</div>';?>
<!--<img src="<?php echo $site_root; ?>images/trailer.png" style="cursor:pointer;" title="Watch Gameplay Video" onclick="TINY.box.show({iframe:'//www.youtube.com/embed/cAgf9hKGI3k?wmode=transparent&list=PLADfTwuzK0YQG6rKWImoeKlpVZy9dj_XI',boxid:'trailer',width:853,height:480,opacity:40,topsplit:2})">
<iframe width="880" height="495" src="//www.youtube.com/embed/-7V4yzu_l9E?wmode=transparent?list=PLADfTwuzK0YQG6rKWImoeKlpVZy9dj_XI" frameborder="0" allowfullscreen></iframe>--></div>

<div class="div" id="intro">
<h3 class="indexheader"><a href="#intro">Intro</a></h3>
<p>
<b>Ancient Beast</b> is a turn based strategy indie game project, played online against other people, featuring a wide variety of creatures to acquire and items to equip onto, putting them to use in order to defeat your opponents.<br>This project was carefully designed to be easy to learn, fun to play and hard to master. We hope you'll enjoy it!
<p>
Ancient Beast is <a href="http://www.wuala.com/AncientBeast" target="_blank">free</a>, <a href="https://github.com/FreezingMoon/AncientBeast" target="_blank">open source</a> and developed by <a href="http://www.FreezingMoon.org" target="_blank" class="FM"><b>Freezing Moon</b></a> (and community). It uses web languages such as HTML, PHP and JavaScript, so that it's playable from any modern browser without the need of plugins.
</p></div>
<div class="div" id="plot">
<h3 class="indexheader"><a href="#plot">Plot</a></h3>
<p class="center">
<audio controls="controls">
	<source src="plot.ogg" type="audio/ogg">
Your browser does not support the audio element.
</audio>
</p>
<p>
It's the year 2653. In the last centuries, technology advanced exponentially and everyone had a fair chance of playing God. With help from the <a href="http://reprap.org/" target="_blank"><b>RepRap</b></a> project, a free desktop 3d printer, which gave anyone power to build their own weapon factory or genetic laboratory on their own property. Mechanic parts or genetic modifications turned from a fashion option into a requirement for survival.
</p>
<p>
Despite their combined efforts, the world's governments couldn't prevent the world from plunging into chaos. The Earth has become a battlefield, split between 7 factions fighting for dominion over the ravaged landscape. The apocalypse is here, and only the strong will survive.
</p></div>
<div class="div" id="gameplay">
<h3 class="indexheader"><a href="#gameplay">Gameplay</a></h3>
<p>
In order to play Ancient Beast, you'll need to register an account. After logging in, you'll be offered a level 1 creature to get you started. Fights take place between 2 - 4 players, on a variety of combat fields which are about 16x9 hexes. Based on the difficulty of the fight, you can win gold coins, which can be spent in the shop in order to purchase items or unlock more creatures.
</p>
<p>
Players are represented on the combat field by Dark Priests. All creature stats can be improved by purchasing items.
Players can level up by gaining experience on the combat field, gaining 1 more plasma point each level, being able to materialize more and/or better creatures. In order to materialize a creature you own, it takes a number of plasma points equal to the creature's level plus the number of hexagons it occupies. Any creature owned can be materialized once per combat, provided the player has enough plasma points to do so.<br>
When fighting players of lower levels, you will temporarely lose plasma points in order to balance the fight.
</p>
<p>
After engaging in combat, players are taken to the battle field where both parties take turns to materialize and control creatures. Each player can materialize one or two creatures every round, which usually suffer from materialization sickness, meaning they won't be able to act in the current round.
</p>
</div>
</article>
<?php include('footer.php'); ?>

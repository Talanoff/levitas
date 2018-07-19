<?php

function section_title($string, $subtitle = '') {
	echo "<h2 class=\"section-title\">";

	if ($subtitle === '') {
		echo "<svg class=\"rect\" width=\"14\" height=\"20\" viewBox=\"0 0 14 20\"><path class=\"cls-1\" d=\"M322.941,1068.01l7.054,9.91-6.936,10.07-7.054-9.91Z\" transform=\"translate(-316 -1068)\"/></svg>";
	} else {
		echo "<div class=\"subtitle\">{$subtitle}</div>";
	}

	echo "<svg class=\"dashes\" viewBox=\"0 0 300 1\" preserveAspectRatio=\"none\"><path d=\"M0,0 300,0 300,1 0,1z\"/></svg>
            {$string}
        </h2>";
}

function palisade($count = 1) {
	echo '<div class="palisade">';
	for ($i = 0; $i < $count; $i ++) {
		echo '<svg width="23.188" height="13" viewBox="0 0 23.188 13"><path fill="#bc1616" d="M324.827,3726.7l-11.144,11.29-1.672-1.7L323.155,3725Zm10.374,9.59-1.671,1.7-11.145-11.29,1.672-1.7Z" transform="translate(-312 -3725)"/></svg>';
	}
	echo '</div>';
}
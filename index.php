<?php

require_once('helpers.php');
require_once('views/base/header.php');

$sections = ['top', 'questions', 'quote', 'enroll', 'for-who', 'about', 'program', 'format', 'results', 'testimonials', 'register', 'map'];

foreach ($sections as $section) {
	include(__DIR__ . '/views/sections/' . $section . '.php');
}

require_once('views/base/footer.php');
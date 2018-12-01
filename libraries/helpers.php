<?php

function render($template, $data = array()) {
	$path = 'partials/' . $template .  '.php';
	if (file_exists($path)) {
		extract($data);
		require($path);
	}
}


?>
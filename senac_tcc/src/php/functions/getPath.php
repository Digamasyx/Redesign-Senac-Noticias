<?php
function getPath($path)
{
	$protocol = explode('/', $_SERVER["SERVER_PROTOCOL"])[0];
	$protocol = strtolower($protocol) . "://";

	return $protocol . $_SERVER["HTTP_HOST"] . "/" . $path;
}
?>
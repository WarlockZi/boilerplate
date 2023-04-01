<?php

namespace Engine\Helper;

class Common
{
	public function isPost()
	{
		return isset($_SERVER['POST']);
	}

	public static function getMethod()
	{
		return $_SERVER['REQUEST_METHOD'];
	}

	public static function getPathUrl()
	{
		$pathUrl = $_SERVER['REQUEST_URI'];
		if ($position = strpos($pathUrl, '?')) {
			$pathUrl = substr($pathUrl, 0, $position);
		}
		return $pathUrl;
	}

	public static function platformSlashes($path)
	{
		$slash = DIRECTORY_SEPARATOR;
		return str_replace('/', $slash, $path);
	}

}
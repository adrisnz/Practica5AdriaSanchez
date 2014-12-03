<?php
	require 'load.php';
	require 'model.php';

	// crida al controlador
	require 'request.php';
	require 'controller.php';
	class  Core{
		public static $controller;
		
		static function init(){
			self::$controller=new Controller();

		}
	}
	
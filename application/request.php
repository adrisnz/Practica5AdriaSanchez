<?php
	class Request{
		
		static function getCont(){
			return array_pop(explode('/',$_SERVER['REQUEST_URI']));
		}
	}
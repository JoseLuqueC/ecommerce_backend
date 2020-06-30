<?php

class Conexion{

	public function conectar(){

		$link = new PDO("mysql:host=sql112.tonohost.com;dbname=ottos_25859740_ecommerce",
						"ottos_25859740",
						"MsKmKYS*p9ZMDK3",
						array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
		                      PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8")
						);

		return $link;

	}


}
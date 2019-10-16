<?php 

	class Db{
//		private static $dsn = 'mysql:host=localhost;dbname=baselogin';
		private static $dsn = 'mysql:host=fdb22.awardspace.net;dbname=3182254_baselogin';
//        private static $usuario = 'root'; 
        private static $usuario = '3182254_baselogin'; 
//        private static $contraseña = '';
        private static $contraseña = 'sena1234';
		private static $conexion = null;

		private function __construct(){}

		public static function conectar(){

			try {
				$pdo_options[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
				self::$conexion=new PDO(self::$dsn,self::$usuario,
				self::$contraseña,$pdo_options);
				return self::$conexion;
			} catch (PDOException $e) {
				echo 'Falló la conexión: ' . $e->getMessage();
			}
		}
	}
?>

<?php
/*
* Cuando queramos acceder a una constante o método estático desde 
* dentro de la clase, usamos la palabra reservada: self.
* http://programacion.jias.es/2012/11/poo-en-php-this-parent/
*/
?>
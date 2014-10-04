<?php //.class es para identificar que es una clase en php, puede variar
class conexion{
	//creamos una funcion (metodo) que se llama igual a la clase
	//para definir el comportamiento del objeto en su inicializacion
	private $host;
	private $user;
	private $password;
	private $database;

	function conexion($host='localhost',$user='root',$password='root', $database='artet0_diplomado'){ //metodo constructor nombre igual a la clase
		$this->host = $host;
		$this->user = $user;
		$this->password = $password;
		$this->database = $database;
	}

	function conecta(){
	
		return mysqli_connect($this->host,$this->user,$this->password,$this->database);
		//permite la conexion a la base de datos usando los parametros de la funcion conexion
	}

//deprecated on version mysqli

	function selecciona_bd(){
		//return mysql_select_db($this->database);
		//regresa la base de datos a usar
	}

}
?>
<?php
   include  "conexion.class.php";
   class usuarios{
    private $link;
    function usuarios(){
    	$conexion = new conexion();
        //variable vinculo link
    	$this->link = $conexion->conecta();
    	//$this->conexion->selecciona_bd();

    }
    function inserta($nom,$alias,$email,$pswd){
    	$sql ="insert into usuarios(nombre, alias_usuario, email, contrasena) 
    	values('$nom','$alias','$email','$pswd')";

    	//mysqli, nuevo comando para poder vincular con la base de datos
        mysqli_query($this->link, $sql) or die ("Error en la inserción");
    	return mysqli_insert_id($this->link);
    }

    function avatar($nombre, $id){
        $sql ="update usuarios set avatar = '$nombre' where id_user = '$id'";

        //mysqli, nuevo comando para poder vincular con la base de datos
        mysqli_query($this->link, $sql) or die ("Error en la actualización");
        return true;
    }

    function login($user = null)
    {
        $sql = "SELECT
            id_user,
            alias_usuario,
            nombre,
            contrasena
            FROM usuarios
            WHERE alias_usuario = '$user'";

        $consulta = mysqli_query($this->link, $sql) or die ("Error al consultar");

        // numero de registros encontrados
        // si es != 0 es true y se mete al if
        // de lo contrario retorna una false
        if (mysqli_num_rows($consulta))
        {
            // retorna los valores de la bdd
            return mysqli_fetch_array($consulta);
        }
        else
        {
            return false;
        }
    }

    function recuperar($correo = null)
    {
        $sql = "SELECT
            id_user,
            alias_usuario,
            nombre,
            contrasena
            FROM usuarios
            WHERE email = '$correo'";

        $consulta = mysqli_query($this->link, $sql) or die ("Error en la consulta");

        // numero de registros encontrados
        // si es != 0 es true y se mete al if
        // de lo contrario retorna una false
        if (mysqli_num_rows($consulta))
        {
            // retorna los valores de la bdd
            return mysqli_fetch_array($consulta);
        }
        else
        {
            return false;
        }
    }

    function recuperar_pass($id_user, $token)
    {
        $sql = "INSERT INTO recuperacion (id_user, token) VALUES ('$id_user', '$token')";

        //mysqli, nuevo comando para poder vincular con la base de datos
        mysqli_query($this->link, $sql) or die ("no se pudo insertar en recuperacion");
        return true;
    }

    function consulta_recuperacion($token = null)
    {
        $sql = "SELECT
            r.id_recu,
            r.id_user,
            u.nombre,
            u.contrasena
            FROM recuperacion AS r
            INNER JOIN usuarios AS u ON r.id_user = u.id_user
            WHERE r.token = '$token'";

        $consulta = mysqli_query($this->link, $sql) or die ("Error en la inserción4");

        // numero de registros encontrados
        // si es != 0 es true y se mete al if
        // de lo contrario retorna una false
        if (mysqli_num_rows($consulta))
        {
            // retorna los valores de la bdd
            return mysqli_fetch_array($consulta);
        }
        else
        {
            return false;
        }
    }

    function cambiar_pass($id_user, $pass)
    {
        $sql = "UPDATE usuarios SET contrasena = '$pass' WHERE id_user = '$id_user'";

        //mysqli, nuevo comando para poder vincular con la base de datos
        mysqli_query($this->link, $sql) or die ("Error en modificar pass");
        return true;
    }

    function persona($id_user = 0)
    {
        $sql = "SELECT
            id_user,
            alias_usuario,
            nombre,
            email,
            contrasena,
            avatar
            FROM usuarios
            WHERE id_user = '$id_user'";

        $consulta = mysqli_query($this->link, $sql) or die ("Error al consultar");

        // numero de registros encontrados
        // si es != 0 es true y se mete al if
        // de lo contrario retorna una false
        if (mysqli_num_rows($consulta))
        {
            // retorna los valores de la bdd
            $campo = mysqli_fetch_array($consulta);

            return array(
                "nombre" => $campo["nombre"],
                "alias_usuario" => $campo["alias_usuario"],
                "email" => $campo["email"],
                "contrasena" => $campo["contrasena"],
                "avatar" => $campo["avatar"]);
        }
        else
        {
            return false;
        }
    }

    function actualizar($nom,$alias,$email, $id_user){
        $sql ="UPDATE usuarios SET
            nombre = '$nom',
            alias_usuario = '$alias',
            email = '$email'
            WHERE id_user = '$id_user'";

        //mysqli, nuevo comando para poder vincular con la base de datos
        $query = mysqli_query($this->link, $sql);
        
        if ($query)
        {
            return true;
        }
        else
        {
            return false;
        }
    }
}
    


?>
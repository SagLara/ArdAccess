<?php 
	//require_once('usuario.php');
	//require_once('crud_usuario.php');
	//inicio de sesion
	if(!empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH'])=='xmlhttprequest'){
		require 'conexion.php';
		sleep(1);
		session_start();
		
		$mysqli->set_charset('utf8');
		$usuario = $mysqli->real_escape_string($_POST['usuariolg']);
		$pass = $mysqli->real_escape_string($_POST['passlg']);
		
		if($nueva_con=$mysqli->prepare("SELECT nombre FROM usuarios WHERE nombre=? AND clave=?")){
			$nueva_con->bind_param('ss',$usuario,$pass);
			$nueva_con->execute();
			
			$resultado=$nueva_con->get_result();
			
			if($resultado->num_rows>0):
				$datos = $resultado->fetch_assoc();
				$_SESSION['usuario']=$datos;
				echo json_encode(array('error'=>false,'nombre' =>$datos['nombre']));
			else:
				echo json_encode(array('error'=>true));
			endif;
			$nueva_con->close();
			
		}
	}	
	// $usuario=new Usuario();
	// $crud=new CrudUsuario();
	//verifica si la variable registrarse está definida
	//se da que está definicda cuando el usuario se loguea, ya que la envía en la petición
	// if(isset($_POST['entrar'])) { //verifica si la variable entrar está definida
		// $usuario=$crud->obtenerUsuario($_POST['usuario'],$_POST['pass']);
		// // si el id del objeto retornado no es null, quiere decir que encontro un registro en la base
		// var_dump($usuario); 
		// if ($usuario->getId()!=NULL) {
			// $_SESSION['usuario']=$usuario; //si el usuario se encuentra, crea la sesión de usuario
			// header('Location: menu.php'); //envia a la página que simula la cuenta
		// }else{
			// header('Location: error.php?mensaje=Tu nombre de usuario o clave son incorrectos'); // cuando los datos son incorrectos envia a la página de error
		// }
	// }elseif(isset($_POST['registrarse'])) {
		// $usuario->setNombre($_POST['usuario']);
		// $usuario->setClave($_POST['pas']);
		// if ($crud->buscarUsuario($_POST['usuario'])) {
			// $crud->insertar($usuario);
			// header('Location: registrarse.php');
		// }else{
			// header('Location: error.php?mensaje=El nombre de usuario ya existe');
		// }			
	// }
	// elseif(isset($_POST['salir'])){ // cuando presiona el botòn salir
		// header('Location: index.php');
		// unset($_SESSION['usuarios']); //destruye la sesión
	// }
?>
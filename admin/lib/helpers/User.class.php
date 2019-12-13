<?php
//error_reporting(E_ALL);
//ini_set('display_errors', TRUE);
//ini_set('display_startup_errors', TRUE);
/* 
  Clase de conexión, insertar y actualizar datos de las credenciales de google 

*/

class User {
	private $dbHost     = DB_HOST;
    private $dbUsername = DB_USERNAME;
    private $dbPassword = DB_PASSWORD;
    private $dbName     = DB_NAME;
    private $userTbl    = DB_USER_TBL;
	
	function __construct(){
        if(!isset($this->db)){
            // Connect to the database
            $conn = new mysqli($this->dbHost, $this->dbUsername, $this->dbPassword, $this->dbName);
            if($conn->connect_error){
                die("Failed to connect with MySQL: " . $conn->connect_error);
            }else{
                $this->db = $conn;
            }
        }
    }
	
	function checkUser($userData = array()){
        if(!empty($userData)){
            // Check whether user data already exists in the database
           // $checkQuery = "SELECT * FROM ".$this->userTbl." WHERE oauth_provider = '".$userData['oauth_provider']."' AND oauth_uid = '".$userData['oauth_uid']."'";
           $checkQuery = "SELECT * FROM ".$this->userTbl." WHERE mail_alu='".$userData['email']."'";

          //  echo $checkQuery;
            $checkResult = $this->db->query($checkQuery);
            if($checkResult->num_rows > 0){
                // Update user data if already exists
              //  $query = "UPDATE ".$this->userTbl." SET nombre_alu = '".$userData['first_name']."', apellido_alu = '".$userData['last_name']."', mail_alu = '".$userData['email']."', gender = '".$userData['gender']."', locale = '".$userData['locale']."', picture = '".$userData['picture']."', link = '".$userData['link']."', modified = NOW() WHERE oauth_provider = '".$userData['oauth_provider']."' AND oauth_uid = '".$userData['oauth_uid']."'";


                $query = "UPDATE ".$this->userTbl."  SET oauth_provider = '".$userData['oauth_provider']."', oauth_uid = '".$userData['oauth_uid']."',  gender = '".$userData['gender']."', locale = '".$userData['locale']."', picture = '".$userData['picture']."', link = '".$userData['link']."', modified = NOW() WHERE mail_alu='".$userData['email']."'";

                $update = $this->db->query($query);
            }else{
                // Insert user data in the database
                $query = "INSERT INTO ".$this->userTbl." SET oauth_provider = '".$userData['oauth_provider']."', oauth_uid = '".$userData['oauth_uid']."', nombre_alu = '".$userData['first_name']."', apellido_alu = '".$userData['last_name']."', mail_alu = '".$userData['email']."', gender = '".$userData['gender']."', locale = '".$userData['locale']."', picture = '".$userData['picture']."', link = '".$userData['link']."', created = NOW(), modified = NOW()";
                $insert = $this->db->query($query);
            }
            
            // Get user data from the database
            $result = $this->db->query($checkQuery);
            $userData = $result->fetch_assoc();
        }
    return $userData;
    }

    function cursoAlumno($serial_alu)
    {
        //echo $serial_alu;
        if(!empty($serial_alu)){
        $checkCursoAlu = "SELECT apellido_alu, nombre_alu,nivel.nombre_niv,paralelo.nombre_par,paralelo.serial_par from alumno,paralelo_alumno,paralelo,periodo,nivel where alumno.serial_alu=paralelo_alumno.serial_alu and paralelo.serial_par=paralelo_alumno.serial_par and periodo.serial_per=paralelo_alumno.serial_per and periodo.activo_per='SI' and alumno.serial_alu='".$serial_alu."' and nivel.serial_niv=paralelo.serial_niv";
        //echo $checkCursoAlu;
        $checkCurso = $this->db->query($checkCursoAlu);
    
            $cursoData = $checkCurso->fetch_assoc();
            
    }


    return $cursoData;
    }


   function indicadoresMostrar()
    {
        //echo $serial_alu;
   
        $checkIndicadores = "SELECT idindicador , detalleIndicador, categoria.detalleCategoria from indicador, categoria where categoria.idCategoria=indicador.idCategoria";
        //echo $checkCursoAlu;
      //  echo $checkIndicadores;
        $checkIndi= $this->db->query($checkIndicadores);
    
 
  
    
    return $checkIndi;
    }

    function indicadoresMostrarSingle($user_id)
    {
        //echo $serial_alu;
   
        $checkIndicadores = "SELECT idindicador , detalleIndicador,idCategoria from indicador where idindicador='".$user_id."'";
        //echo $checkCursoAlu;
      // echo $checkIndicadores;
        $checkIndi= $this->db->query($checkIndicadores);
    
 
  
    
       return $checkIndi;
    }
    function docentesAlumno($serial_par)
    {
        if(!empty($serial_par))
            {
                //echo $serial_par;
               $queryDocentes="SELECT serial_matpro,foto_epl,apellido_epl,nombre_epl, email_epl,nombre_mat from profesor,empleado,materia,materia_nivel,materia_profesor where profesor.serial_epl=empleado.serial_epl and profesor.serial_pro=materia_profesor.serial_pro and materia.serial_mat=materia_nivel.serial_mat and materia_nivel.serial_matniv=materia_profesor.serial_matniv and materia_profesor.serial_par='".$serial_par."'  order by nombre_mat";
               //echo $queryDocentes;
                 $checkDocentes = $this->db->query($queryDocentes);
    
                return $checkDocentes;
                 /*while ($docentesAlumno = $checkDocentes->fetch_assoc())
                 {
                   
                    return $docentesAlumno;
                 }*/
            }
            
    }

    function categorias()
    {
    	$queryCategorias="SELECT * from categoria";
    	$checkCategoria=$this->db->query($queryCategorias);
    	return $checkCategoria;
    }
    function guardarIndicadores($detalleIndicador,$idCategoria)
    {

    	  //echo $detalleIndicador;
    	 // echo $idCategoria;
    	$querySIndicadores="INSERT INTO indicador(detalleIndicador,idCategoria) VALUES('".$detalleIndicador."','".$idCategoria."') ";
    	$querySIndicadores= $this->db->query($querySIndicadores);
    }
    function actualizarIndicadores($user_id,$detalleIndicador,$idCategoria)
    {
    	  $query = "UPDATE indicador SET detalleIndicador='".$detalleIndicador."', idCategoria='".$idCategoria."' WHERE idindicador='".$user_id."'";

                $update = $this->db->query($query);
                if(!empty($query))
                {
                	 echo "Datos actualizados";
                }
    }


    function opcionesRespuestas()
    {
    	  $queryOpciones="SELECT idOpcionesRes, detalleOpcionesRes from opcionesrespuestas";
    	  $checkOpciones= $this->db->query($queryOpciones);
    	  return $checkOpciones;
    }

    function loginAdmin($usuario,$password)
    {
          $userAdmin='evaluacion';
          $passwordAdmin='evaluacion36056!!';
           //echo $usuario;
          // echo $password;
           //echo "Hola";
          if($usuario==$userAdmin && $password==$passwordAdmin)
          {
                $verified='Correcto';
                echo "Ingresa";
          }
          else
          {
               $verified='Incorrecto';
               echo "No ingresa";
          }
          return $verified;
    }


        
        // Return user data
    
}
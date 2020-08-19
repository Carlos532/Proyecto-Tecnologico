<!------------------------------------ CODIGO PHP ------------------------------------->
<?php
require 'includes/conexion.php';
  //Registrarse***********************************
if(isset($_POST["registrar"])){
    //mysqli_real_escape_string, funcion que no permite o evita inyecciones SQL por medio de formularios.
    $nombre = mysqli_real_escape_string($con,$_POST['full-name']);
    $usuario = mysqli_real_escape_string($con,$_POST['username']);
    $password = mysqli_real_escape_string($con,$_POST['password']);
    $password_encriptada = sha1($password);//encriptamos la variable
    $sqluser = "SELECT username FROM users WHERE usuario = '$usuario'";//seleccionamos todos los campos que tenemos en nuestra tabla usuarios.
    $resultadouser = $con-> query($sqluser);
    $filas = $resultadouser;//funcion para contar los registros.
    if($filas > 0 ){//verificamos si el usuario ya existe. si existe nos redirecciona a nuestro index.php
        echo "<script>
        alert('El usuario ya existe'); 
        windows.location = 'inicio_sesion.php' 
        </script>";
    }else{//si no existe hace la insercion
        //omsertar informacion, ojo debemos insertar la contra encriptada
        $sqlusuario = "INSERT INTO users(name,username,password,user_level) VALUES('$nombre', '$usuario', '$password_encriptada', '3')";
        $resultadousuario = $con->query($sqlusuario);
        if($resultadousuario > 0 ){
            echo "<script> alert('Registro exitoso');
            windows.location = 'inicio_sesion.php'
            </script>";
        }else{
            echo "<script> 
            alert('Error al ingresar el registro');
            windows.location = 'sing_up.php'
            </script>";
        }
        
    }
}
?>
  <!--<?php// echo display_msg($msg); ?>-->
<header>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!--===============================================================================================-->  
  <link rel="icon" type="image/png" href="libs/images/icons/favicon.ico"/>
  <!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="libs/vendor/bootstrap/css/bootstrap.min.css">
  <!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="libs/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
  <!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="libs/fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
  <!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="libs/vendor/animate/animate.css">
  <!--===============================================================================================-->  
  <link rel="stylesheet" type="text/css" href="libs/vendor/css-hamburgers/hamburgers.min.css">
  <!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="libs/vendor/animsition/css/animsition.min.css">
  <!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="libs/vendor/select2/select2.min.css">
  <!--===============================================================================================-->  
  <link rel="stylesheet" type="text/css" href="libs/vendor/daterangepicker/daterangepicker.css">
  <!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="libs/css/util.css">
  <link rel="stylesheet" type="text/css" href="libs/css/main_login.css">
  <!--===============================================================================================-->
  <title>Registrarse</title>
</header>
<div class="limiter">
  <div class="container-login100">
    <div class="wrap-login100">
      <form class="login100-form validate-form" action="<?php $_SERVER["PHP_SELF"]; ?>" method="post">
        <span class="login100-form-title p-b-34">
          Registrarse
        </span>
       <!-- <?php //echo display_msg($msg); ?>-->
        <div class="wrap-input100 rs1-wrap-input100 validate-input m-b-20" data-validate="Type user name">
          <input id="first-name" class="input100" type="text" name="full-name" placeholder="Nombre completo">
          <span class="focus-input100"></span>
        </div>

        <div class="wrap-input100 rs1-wrap-input100 validate-input m-b-20" data-validate="Type user name">
          <input id="first-name" class="input100" type="text" name="username" placeholder="Nombre de usuario">
          <span class="focus-input100"></span>
        </div>

        <div class="wrap-input100 rs2-wrap-input100 validate-input m-b-20" data-validate="Type password">
          <input class="input100" type="password" name ="password" placeholder="Contraseña">
          <span class="focus-input100"></span>
        </div>

        <div class="wrap-input100 rs2-wrap-input100 validate-input m-b-20" data-validate="Type password">
          <input class="input100" type="password" name ="cpassword" placeholder="Confirmar contraseña">
          <span class="focus-input100"></span>
        </div>

        <div class="container-login100-form-btn">
          <button class="login100-form-btn" id="registrar" name="registrar">
            Registrarse
          </button>
        </div>

        <div class="w-full text-center p-t-27 p-b-239">
          <span class="txt1">
            Olvidaste
          </span>

          <a href="#" class="txt2">
            Nombre de usuario / Contraseña?
          </a>
        </div>

        <div class="w-full text-center">
          <a href="inicio_sesion.php" class="txt3">
            Inicio de sesion
          </a>
        </div>
      </form>

      <div class="login100-more" style="background-image: url('libs/images/auto-3298890_1280.jpg');"></div>
    </div>
  </div>
</div>
<div id="dropDownSelect1"></div>

<!--===============================================================================================-->
<script src="libs/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
<script src="libs/vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
<script src="libs/vendor/bootstrap/js/popper.js"></script>
<script src="libs/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
<script src="libs/vendor/select2/select2.min.js"></script>
<script>
  $(".selection-2").select2({
    minimumResultsForSearch: 20,
    dropdownParent: $('#dropDownSelect1')
  });
</script>
<!--===============================================================================================-->
<script src="libs/vendor/daterangepicker/moment.min.js"></script>
<script src="libs/vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
<script src="libs/vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
<script src="libs/js/main_login.js"></script>
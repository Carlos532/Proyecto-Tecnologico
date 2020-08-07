<!--------------------------- CODIGO PHP --------------------------------------------------------->
<?php
ob_start();
  require_once('includes/load.php');//INCLUYE LA PAGINA LOAD
  if($session->isUserLoggedIn(true)) { redirect('inicio.php', false);}//VERIFICA SI LA SESION EXISTE
  ?>
  <?php include_once('layouts/header.php');//INCLUYE EL INICIO DE PAGINA  ?>

  <!------------------------------------ CODIGO PHP ------------------------------------->
  
  <!------------------------ INICIO CUERPO HTML --------------------------------------------------->
  <!DOCTYPE html>
  <html>
  <head>
    <title>Inicio de sesion</title>
    <!-- <link rel="stylesheet" type="text/css" href="libs/css/estilo_login.css">-->
    <link rel="shortcut icon" href="libs/images/Logo.jpeg" type="image/x-icon">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
    <!--<link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:wght@300&display=swap" rel="stylesheet">-->
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.7.2/css/all.min.css'>
    <link rel="stylesheet" href="libs/css/style.css">
    <script src="https://kit.fontawesome.com/a81368914c.js"></script>
  </head>
  <!-------------------------- INICIO BODY QUE CONTIENE TODO LO DEL LOGIN ----------------------------->
  <body>
      <div class="container" id="container">
        <div class="form-container sign-up-container">
          <form method="post" action="add_user_client.php">
            <h1>Create Account</h1>
            <div class="social-container">
              <a href="#" class="social"><i class="fab fa-facebook-f"></i></a>
              <a href="#" class="social"><i class="fab fa-google-plus-g"></i></a>
              <a href="#" class="social"><i class="fab fa-linkedin-in"></i></a>
            </div>
            <span>or use your email for registration</span>
            <input type="text" placeholder="Nombre completo" name="full-name" />
            <input type="text" placeholder="Nombre de usuario" name="username">
            <input type="password" placeholder="Contraseña" name ="password" />
            <div class="form-group">
              <label for="level">Rol de usuario</label>
                <select class="form-control" name="level">
                  <?php foreach ($groups as $group ):?>
                   <option value="<?php echo $group['group_level'];?>"><?php echo ucwords($group['group_name']);?></option>
                <?php endforeach;?>
                </select>
            </div>
            <button type="submit" name="add_user">Sign Up</button>
          </form>
        </div>


        <div class="form-container sign-in-container">
          <?php echo display_msg($msg); ?>
          <form method="post" action="auth.php">
            <h1>Sign in</h1>
            <div class="social-container">
              <a href="#" class="social"><i class="fab fa-facebook-f"></i></a>
              <a href="#" class="social"><i class="fab fa-google-plus-g"></i></a>
              <a href="#" class="social"><i class="fab fa-linkedin-in"></i></a>
            </div>
            <span>or use your account</span>
            <input type="text" name="username" placeholder="Nombre de Usuario" autocomplete="off" />
            <input type="password" name="password" placeholder="Password" autocomplete="off" />
            <a href="#">Forgot your password?</a>
            <button type="submit">Sign In</button>
          </form>
        </div>
        <div class="overlay-container">
          <div class="overlay">
            <div class="overlay-panel overlay-left">
              <h1>Welcome Back!</h1>
              <p>To keep connected with us please login with your personal info</p>
              <button class="ghost" id="signIn">Sign In</button>
            </div>
            <div class="overlay-panel overlay-right">
              <h1>Hello, Friend!</h1>
              <p>Enter your personal details and start journey with us</p>
              <button class="ghost" id="signUp">Sign Up</button>
            </div>
          </div>
        </div>
      </div>

      <script type="text/javascript">
        function Username(){
          Swal.fire({
            icon: 'error',
            title: 'Oops...',
            text: 'Something went wrong!',
            footer: '<a href>Why do I have this issue?</a>'
          })
        }
      </script>

      <script  src="libs/js/script.js"></script>
    </body>
    </html>

    <?//php include_once('layouts/footer.php'); ?>

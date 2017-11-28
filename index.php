<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
  <title>Promotoout</title>

  <!-- se incluyen librerìas CSS  -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <!-- se incluyen librerìas CSS  -->
  <link rel="shortcut icon" href="images/parallax1.png"/>
  <!-- Se importa JQuery -->
  <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <!-- Se importa JQuery -->
</head>
<body>
  
  <!--Incluimos el menù -->
  <?php include("menu.php"); ?>
  <!--Incluimos el menù -->
  
  <div class="section no-pad-bot hide-on-small-only" id="index-banner" style="background-image: url(images/parallax1.png); background-repeat: no-repeat; padding-bottom: 8%; max-width: 100%; max-height: 100%;">
    <div class="container">
      <br><br>
      <h1 class="header center blue-text" style="letter-spacing: 5px;">Bienvenido a <b>PromoToout</b></h1>
      <div class="row center">
        <h5 class="header col s12 light">Una Página web, un Directorio Digital</h5>
      </div>
      <div class="row center">
        <a href="#section1" id="download-button" class="btn-large waves-effect waves-light green accent-3"><i class="material-icons" style="vertical-align: middle;">chevron_right</i>Comencemos</a>
      </div>
      <br><br>
    </div>
  </div>

  <div class="section no-pad-bot hide-on-large-only hide-on-med-only " id="index-banner">
    <div class="container">
      <br><br>
      <h2 class="header center blue-text">Bienvenido a <b>PromoToout</b></h2>
      <div class="row center">
        <h5 class="header col s12 light">Una Página web, un Directorio Digital</h5>
      </div>
      <div class="row center">
        <a href="#section1" id="download-button" class="btn-large waves-effect waves-light green accent-3 js-scroll-trigger"><i class="material-icons" style="vertical-align: middle;">chevron_right</i>Comencemos</a>
      </div>
      <br><br>
    </div>
  </div>

  <div class="container" id="section1">
    <div class="section">

      <div class="row">
        <div class="col s12 center">
          <h3><i class="mdi-content-send brown-text"></i></h3>
          <h4 class="teal-text">¿Qué es PromoToout?</h4><br>
          <p class="left-align light flow-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam scelerisque id nunc nec volutpat. Etiam pellentesque tristique arcu, non consequat magna fermentum ac. Cras ut ultricies eros. Maecenas eros justo, ullamcorper a sapien id, viverra ultrices eros. Morbi sem neque, posuere et pretium eget, bibendum sollicitudin lacus. Aliquam eleifend sollicitudin diam, eu mattis nisl maximus sed. Nulla imperdiet semper molestie. Morbi massa odio, condimentum sed ipsum ac, gravida ultrices erat. Nullam eget dignissim mauris, non tristique erat. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae;</p>
        </div>
      </div>

    </div>
  </div>

  <div class="container">
    <div class="section" id="iconsection">

      <!--   Icon Section   -->
      <div class="row">
        <div class="col s12 m4">
          <div class="icon-block">
            <h2 class="center light-blue-text"><i class="material-icons">flash_on</i></h2>
            <h5 class="center">Speeds up development</h5>

            <p class="light">We did most of the heavy lifting for you to provide a default stylings that incorporate our custom components. Additionally, we refined animations and transitions to provide a smoother experience for developers.</p>
          </div>
        </div>

        <div class="col s12 m4">
          <div class="icon-block">
            <h2 class="center light-blue-text"><i class="material-icons">group</i></h2>
            <h5 class="center">User Experience Focused</h5>

            <p class="light">By utilizing elements and principles of Material Design, we were able to create a framework that incorporates components and animations that provide more feedback to users. Additionally, a single underlying responsive system across all platforms allow for a more unified user experience.</p>
          </div>
        </div>

        <div class="col s12 m4">
          <div class="icon-block">
            <h2 class="center light-blue-text"><i class="material-icons">settings</i></h2>
            <h5 class="center">Easy to work with</h5>

            <p class="light">We have provided detailed documentation as well as specific code examples to help new users get started. We are also always open to feedback and can answer any questions a user may have about Materialize.</p>
          </div>
        </div>
      </div>

    </div>
    <br><br>
  </div>

<div class="container">
  <div id="contactForm" class="grey lighten-5" style="border-radius: 5px;">
    <div class="row">
      <div class="col s12">
        <div class="row">
          <div class="input-field col s6">
            <input type="text" placeholder="Nombre" id="formName" class="validate">
            <label for="formName">Nombre</label>
          </div>
          <div class="input-field col s6">
            <input type="email" placeholder="Email" id="formEmail" class="validate">
            <label for="formEmail">Email</label>
          </div>
          <div class="input-field col s6">
            <input type="text" placeholder="Teléfono" id="formPhone" class="">
            <label for="formPhone">Teléfono</label>
          </div>
          <div class="col s6 center-align">
            <button class="btn waves-effect waves-light" id="button1" style="margin-top: 12px;" type="submit" name="action" onclick="fntSaludo();">Submit
              <i class="material-icons right">send</i>
            </button>
          </div>

        </div>
      </div>
    </div>
  </div>
</div>

  <footer class="page-footer indigo">
    <div class="container">
      <div class="row">
        <div class="col l6 s12">
          <h5 class="white-text">Company Bio</h5>
          <p class="grey-text text-lighten-4">We are a team of college students working on this project like it's our full time job. Any amount would help support and continue development on this project and is greatly appreciated.</p>


        </div>
        <div class="col l3 s12">
          <h5 class="white-text">Settings</h5>
          <ul>
            <li><a class="white-text" href="#!">Link 1</a></li>
            <li><a class="white-text" href="#!">Link 2</a></li>
          </ul>
        </div>
        <div class="col l3 s12">
          <h5 class="white-text">Connect</h5>
          <ul>
            <li><a class="white-text" href="#!">Link 1</a></li>
            <li><a class="white-text" href="#!">Link 2</a></li>
          </ul>
        </div>
      </div>
    </div>
    <div class="footer-copyright">
      <div class="container">
      Made by <a class="orange-text text-lighten-3" href="http://materializecss.com">Materialize</a>
      </div>
    </div>
  </footer>


  <!--  Scripts-->
  <script src="js/materialize.js"></script>
  <script src="js/init.js"></script>
  <script>
    $("document").ready(function(){
      $("#button1").click(function fntSaludo(){
        alert("¡Hola Mundo!");
      });
    });

    /*function testScroll(ev){
      if(window.pageYOffset>400)alert('User has scrolled at least 400 px!');
      }
    window.onscroll=testScroll*/

  </script>


  </body>
</html>

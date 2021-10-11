<!DOCTYPE html>
<html lang="en">
    <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Ultra Music Festival</title>
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/fontawesome.min.css">
        <link rel="stylesheet" href="css/style.css">
        <link href="style.css" rel="stylesheet"/>
        <style>
          .fondo{background-color: rgba(0, 0, 0, 0.620);
                  height: 360px;
                  width: 320px;
                  padding: 5px 0px;
                  margin: 2px 0px 0px;
                  }
          .lateral{position: relative;
                  left: 75px;
                	border-radius: 8px}
          .shopBtn {
                    min-height: 34px;
                    font-size: 14px;
                    font-weight: bold;
                    line-height: 34px;
                    text-align: center;
                    color: #fff;
                    border-radius: 2px;
                    background: #1a8699;
                    display: inline-block;
                    padding: 0 12px;
                    border: 0;
                    
                }
      </style>
    </head>
    <body>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
        <a class="navbar-brand"><img src="assets/Logo_of_Ultra_Music_Festival.png" height="65" width="300" alt="#" /></a>
        </nav>
        <header id="home">
          <div class="content">
            <div class="d-flex align-items-center flex-column justify-content-center">
                <div  class="fondo" >
                  <form method="POST" class="form-horizontal" action="">
                    <h2>Registrate!</h2>
                      <div class="form-group"> 
                        <label for="input" class="col-sm-3 control-label ">Nombre</label>
                        <input type="name" name="nombre" placeholder="Ingrese un Nombre" >
                      </div>
                      <div class="form-group">
                        <label for="input" class="col-sm-3 control-label">Apellido</label>
                        <input type="name" name="apellido" placeholder="Ingrese un Apellido" >
                      </div>
                      <div class="form-group">
                        <label for="input" class="col-sm-3 control-label">Correo</label>
                        <input type="correo" placeholder="Ingrese su Correo" name="correo" >
                      </div>
                      <div class="form-group">
                        <label for="input" class="col-sm-3 control-label">Telef.</label>
                        <input type="telefono" placeholder="Ingrese su Número"  name="telefono">
                      </div>
                      <div class="form-group">
                        <input type="submit" name="submit" value="Registrarse" class="shopBtn"/>
                        <!--<button name="submit" type="submit" class="shopBtn">Registrarse</button>                              -->
                     </div>
                  </form>
                  <?php
                   if(isset($_POST['submit'])){
                     require("registro.php");
                   }
                  ?>
                </div>
            </div>
          </div> 
           <div>
            <img src="assets/ultra4.jpg">
           </div>
      </div>
    </header>
        <script src="js/jquery-3.3.1.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script>
            $(function () {
                
                'use strict';
                
                var winH = $(window).height();
                
                $('header, .slide').height(winH);
                
                $('.navbar a.search-link').on('click', function () {
                    $(this).siblings('form').fadeToggle();
                });
                
                $('.navbar ul.navbar-nav li a, footer ul.main-list li a').on('click', function (e) {
                    
                    var getAttr = $(this).attr('href');
                    
                    e.preventDefault();
                    $('html').animate({scrollTop: $(getAttr).offset().top}, 1000);
                });
            });
        </script>
    </body>
</html>
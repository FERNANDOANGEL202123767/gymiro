<?php
require '../../include/db_conn.php';
page_protect();
?>


<!DOCTYPE html>
<html lang="es">
<head>

    <title>Iron Gym | Reiniciiar</title>
     <link rel="stylesheet" href="../../css/style.css"  id="style-resource-5">
    <script type="text/javascript" src="../../js/Script.js"></script>
    <link rel="stylesheet" href="../../css/dashMain.css">
    <link rel="stylesheet" type="text/css" href="../../css/entypo.css">
	<link href="a1style.css" rel="stylesheet" type="text/css">
	<style>
    	.page-container .sidebar-menu #main-menu li#adminprofile > a {
    	background-color: #2b303a;
    	color: #ffffff;
		}
         </style>

<style>#boxx
	{
		width:220px;
	}</style>

</head>
    <body class="page-body  page-fade" onload="collapseSidebar()" style="background-color: #ff0000;">

    	<div class="page-container sidebar-collapsed" id="navbarcollapse">	
	
		<div class="sidebar-menu">
	
			<header class="logo-env">
			
			<!-- logo -->
			<div class="logo">
				<a href="main.php">
					<img src="../../images/iron.png" alt="" width="192" height="80" />
				</a>
			</div>
			
					<!-- icono de colapso del logotipo -->
					<div class="sidebar-collapse" onclick="collapseSidebar()">
				<a href="#" class="sidebar-collapse-icon with-animation">
					<!-- agregue la clase "con animación" si desea que la barra lateral 
					tenga animación durante la transición de expandir/contraer -->
					<i class="entypo-menu"></i>
				</a>
			</div>
							
			
		
			</header>
    		<?php include('nav.php'); ?>
    	</div>

    		<div class="main-content">
		
				<div class="row">
					
					<!-- Información de perfil y notificaciones -->
					<div class="col-md-6 col-sm-8 clearfix">	
							
					</div>
					
					
					<!-- Enlaces sin procesar -->
					<div class="col-md-6 col-sm-4 clearfix hidden-xs">
						
						<ul class="list-inline links-list pull-right">

						<li>Bienvenido <?php echo $_SESSION['nombre_usuario']; ?> 
							</li>								
						
							<li>
								<a href="cerrar sesión.php">
									Cerrar Sesión <i class="entypo-logout right"></i>
								</a>
							</li>
						</ul>
						
					</div>
					
				</div>

		<h3>Cambiar Contraseña</h3>

		<hr />

		
		
		
		
		
			<div class="a1-container a1-small a1-padding-32" style="margin-top:2px; margin-bottom:2px;">
        <div class="a1-card-8 a1-light-gray" style="width:500px; margin:0 auto;">
		<div class="a1-container a1-dark-gray a1-center">
        	<h6>CAMBIAR CONTRASEÑA</h6>
        </div>
       <form id="form1" name="form1" action="change_s_pwd.php" enctype="multipart/form-data" method="POST" class="a1-container" >
         <table width="100%" border="0" align="center">
         <tr>
           <td height="35"><table width="100%" border="0" align="center">
           	 <tr>
           	   <td height="35">ID:</td>
           	   <td height="35"><input type="text" id="boxx" name="login_id" readonly value="<?php echo $_SESSION['nombre_completo']; ?>"  required/></td>
         	   </tr>
			   
			   <tr>
               <td height="35">CLAVE DE INICIO DE SESIÓN:</td>
               <td height="35"><input type="text" id="boxx" name="login_key"  class="form-control"  data-rule-required="true" placeholder="Tu clave secreta"></td>
             </tr>
			 <tr>
           	   <td height="35">Contraseña:</td>
           	   <td height="35"><input type="text" name="pwfield" id="boxx" class="form-control"  data-rule-required="true" data-rule-minlength="6" placeholder="Tu nueva contraseña"></td>
         	   </tr>
             
             <tr>
			  <tr>
           	   <td height="35">Confirmar Contraseña:</td>
           	   <td height="35"><input type="text" name="confirmfield" id="boxx" class="form-control"  data-rule-equalto="#pwfield" data-rule-required="true" data-rule-minlength="6" placeholder="Confirma tu nueva contraseña"></td>
         	   </tr>
             
             <tr>
             <tr>
               <td height="35"></td>
               <td height="35"><a href="more-userprofile.php" class="a1-btn a1-blue">Enviar</a><!--<input class="a1-btn a1-blue" type="submit" name="submit" id="submit" value="SUBMIT" >-->
                 <input class="a1-btn a1-blue" type="reset" name="reset" id="reset" value="Reiniciar"></td>
             </tr>
           </table></td>
         </tr>
         </table>
       </form>
    </div>
    </div>   
		
		
		
		
		
		
		
			<?php include('pie_pagina.php'); ?>
    	</div>

    </body>
</html>



﻿<?php
require '../../include/db_conn.php';
page_protect();
?>

<!DOCTYPE html>
<html lang="en">
<head>

    <title>Iron Gym | Miembro por año</title>
     <link rel="stylesheet" href="../../css/style.css"  id="style-resource-5">
    <script type="text/javascript" src="../../js/Script.js"></script>
    <link rel="stylesheet" href="../../css/dashMain.css">
    <link rel="stylesheet" type="text/css" href="../../css/entypo.css">
	<link href="a1style.css" rel="stylesheet" type="text/css">
     <style>
    	.page-container .sidebar-menu #main-menu li#overviewhassubopen > a {
    	background-color: #2b303a;
    	color: #ffffff;
		}

    </style>

</head>
    <body class="page-body  page-fade" onload="collapseSidebar();showMember();"style="background-color: #ff0000;">

    	<div class="page-container sidebar-collapsed" id="navbarcollapse">	
	
		<div class="sidebar-menu">
	
			<header class="logo-env">
			
			<!-- logo -->
			<div class="logo">
				<a href="main.php">
					<img src="../../images/iron.png" alt="" width="192" height="80" />
				</a>
			</div>
			
					<!-- logo collapse icon -->
					<div class="sidebar-collapse" onclick="collapseSidebar()">
				<a href="#" class="sidebar-collapse-icon with-animation"><!-- add class "with-animation" if you want sidebar to have animation during expanding/collapsing transition -->
					<i class="entypo-menu"></i>
				</a>
			</div>
							
			
		
			</header>
    		<?php include('nav.php'); ?>
    	</div>

    		<div class="main-content">
		
				<div class="row">
					
					<!-- Profile Info and Notifications -->
					<div class="col-md-6 col-sm-8 clearfix">	
							
					</div>
					
					
					<!-- Raw Links -->
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

		<h2>Miembro por año</h2>

		<hr />

	<form>
		<?php
		// set start and end year range
		$yearArray = range(2000, date('Y'));
		?>
		<!-- displaying the dropdown list -->
		<select name="year" id="syear">
		    <option value="0">Select Year</option>
		    <?php
		    foreach ($yearArray as $year) {
		        // if you want to select a particular year
		        $selected = ($year == date('Y')) ? 'selected' : '';
		        echo '<option '.$selected.' value="'.$year.'">'.$year.'</option>';
		    }
		    ?>
		</select>
	<input type="button" class="a1-btn a1-blue"  style="margin-bottom:5px;" name="search" onclick="showMember();" value="Buscar">

	</form>

	<table id="meyear" border=1>
	
	</table>


<script>

  function showMember(){
  	var year=document.getElementById("syear");
  	var iyear=year.selectedIndex;
  	var ynumber=year.options[iyear].value;
  	if(ynumber=="0"){
      document.getElementById("meyear").innerHTML="";
      return;
  	}
  	else{
  		if(window.XMLHttpRequest){
  			xmlhttp=new XMLHttpRequest();
  		}
  		xmlhttp.onreadystatechange=function(){
  			if(this.readyState==4 && this.status ==200){
  				document.getElementById("meyear").innerHTML=this.responseText;
  			}
  		};
  		xmlhttp.open("GET","over_month.php?mm=0&flag=1&yy="+ynumber,true);
  		xmlhttp.send();
  	}

  }

</script>

<?php include('pie_pagina.php'); ?>

   	</div>

    </body>
</html>

		 
		<?php include "nav.php"?>

		<!-- header-starts -->	

		<div class="sticky-header header-section" style="background-color: #0652DD; border-bottom: 1px solid #000;">
			
			<div class="header-left">
				
				<!--toggle button start-->
				<button id="showLeftPush"><i class="fa fa-bars"></i></button>

					
				<!--toggle button end-->

				<!---------------   Notificaciones Menu de Inicio  --------------->
				<div class="profile_details_left">

					<ul class="nofitications-dropdown">

						<!----<li class="dropdown head-dpdn">

							<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-envelope"></i>
							<ul class="dropdown-menu">
								<li><a href="#">
								   <div class="user_img"><img src="images/3.jpg" alt=""></div>
								  
								   <div class="clearfix"></div>	
								</a></li>
								<li><a href="#">
								   <div class="user_img"><img src="images/2.jpg" alt=""></div>
								   <div class="notification_desc">
									<p>Lorem ipsum dolor amet </p>
									<p><span>1 hour ago</span></p>
									</div>
								   <div class="clearfix"></div>	
								</a></li>
								<li>
									<div class="notification_bottom">
										<a href="#">See all messages</a>
									</div> 
								</li>
							</ul>
						</li>--->
						<!---------------------------   Notificaciones  2 ----------------------------->
						<!--<li class="dropdown head-dpdn">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-bell"></i></a>
							<ul class="dropdown-menu">
								
								<li><a href="#">
								   <div class="user_img"><img src="images/2.jpg" alt=""></div>
								   <div class="notification_desc">
									<p>Lorem ipsum dolor amet </p>
									<p><span>1 hour ago</span></p>
									</div>
								   <div class="clearfix"></div>	
								</a></li>
								 <li>
									<div class="notification_bottom">
										<a href="#">See all notifications</a>
									</div> 
								</li>
							</ul>
						</li>-->	
						<!-----------------------------  Notificaciones 3 --------------------------------->
						<!--- <li class="dropdown head-dpdn">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-tasks"></i></a>
							<ul class="dropdown-menu">
								
								<li><a href="#">
									<div class="task-info">
										<span class="task-desc">Database update</span><span class="percentage">40%</span>
										<div class="clearfix"></div>	
									</div>
									<div class="progress progress-striped active">
										<div class="bar yellow" style="width:40%;"></div>
									</div>
								</a></li>
								<li>
									<div class="notification_bottom">
										<a href="#">See all pending tasks</a>
									</div> 
								</li>
							</ul>
						</li>--->	
					</ul>
					<div class="clearfix"> </div>
				</div>
				<!--Final del Menu de Notificaciones -->
				<div class="clearfix"> </div>
			</div>
				
			<div class="header-right">
				<!------------------------ Buscador ---------------------->
			<!--<div class="search-box">
					<form class="input">
						<input class="sb-search-input input__field--madoka" placeholder="Search..." type="search" id="input-31" />
						<label class="input__label" for="input-31">
							<svg class="graphic" width="100%" height="100%" viewBox="0 0 404 77" preserveAspectRatio="none">
								<path d="m0,0l404,0l0,77l-404,0l0,-77z"/>
							</svg>
						</label>
					</form>
				</div>---->

				<!----------- --- Apartado de Menu Perfil ------------------------------> 
				<div class="profile_details">	
					<ul>
						<li class="dropdown profile_details_drop">
				
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">

								<div class="profile_img">	
									<span class="prfil-img">
										<?php echo fechaC();?> 
									</span> 
									<div class="user-name">

										<p>Duver Insignares</p>
										<span>Administrator</span>
									</div>
									<i class="fa fa-angle-down lnr"></i>
									<i class="fa fa-angle-up lnr"></i>
									<div class="clearfix"></div>	
								</div>	
							</a>
							<!---------------------- Apartado del Perfil ----------------------->
							<ul class="dropdown-menu drp-mnu">
								<li> <a href="cambiar.html"><i class="fa fa-cog"></i> Configuraciones</a> </li>
								<li> <a href="#"><i class="fa fa-user"></i> Mi cuenta</a> </li> 
								<li> <a href="#"><i class="fa fa-suitcase"></i> Perfil</a> </li> 
								<li> <a href="#" data-toggle="modal" data-target="#logoutModal"><i class="fas fa-sign-out-alt"></i> Cerrar Sesión</a> 
								</li>
							</ul>
						</li>
					</ul>
				</div>
			<div class="clearfix"> </div>
		 </div>
	<div class="clearfix"> </div>
		<!----------------------    Final del Menu de Perfil ------------------------>		
	</div>



	<!----------------------------  Menú de Contenido ------------------------------->
<div id="page-wrapper">
	<div class="main-page">
		<div class="row-one widgettable">
			<div class="col-md-7 content-top-2 card">
				<div class="agileinfo-cdr">
					<div class="card-header">
                        <h3>Weekly Sales</h3>
                    </div>
					<div id="Linegraph" style="width: 98%; height: 350px">
				    </div>
				</div>
				</div>
			<div class="col-md-3 stat">
				<div class="content-top-1">
				<div class="col-md-6 top-content">
					<h5>Sales</h5>
					<label>1283+</label>
				</div>
				<div class="col-md-6 top-content1">	   
					<div id="demo-pie-1" class="pie-title-center" data-percent="45"> <span class="pie-value"></span> </div>
				</div>
				 <div class="clearfix"> </div>
				</div>
				<div class="content-top-1">
				<div class="col-md-6 top-content">
					<h5>Reviews</h5>
					<label>2262+</label>
				</div>
				<div class="col-md-6 top-content1">	   
					<div id="demo-pie-2" class="pie-title-center" data-percent="75"> <span class="pie-value"></span> </div>
				</div>
				 <div class="clearfix"> </div>
				</div>
				<div class="content-top-1">
				<div class="col-md-6 top-content">
					<h5>Visitors</h5>
					<label>12589+</label>
				</div>
				<div class="col-md-6 top-content1">	   
					<div id="demo-pie-3" class="pie-title-center" data-percent="90"> <span class="pie-value"></span> </div>
				</div>
				 <div class="clearfix"> </div>
				</div>
			</div>
			<div class="col-md-2 stat">
				<div class="content-top">
					<div class="top-content facebook">
						<a href="#"><i class="fa fa-facebook"></i></a>
					</div>
					<ul class="info">
						<li class="col-md-6"><b>1,296</b><p>Friends</p></li>
						<li class="col-md-6"><b>647</b><p>Likes</p></li>
						<div class="clearfix"></div>
					</ul>
				</div>
				<div class="content-top">
					<div class="top-content twitter">
						<a href="#"><i class="fa fa-twitter"></i></a>
					</div>
					<ul class="info">
						<li class="col-md-6"><b>1,997</b><p>Followers</p></li>
						<li class="col-md-6"><b>389</b><p>Tweets</p></li>
						<div class="clearfix"></div>
					</ul>
				</div>
				<div class="content-top">
					<div class="top-content google-plus">
						<a href="#"><i class="fa fa-google-plus"></i></a>
					</div>
					<ul class="info">
						<li class="col-md-6"><b>1,216</b><p>Followers</p></li>
						<li class="col-md-6"><b>321</b><p>shares</p></li>
						<div class="clearfix"></div>
					</ul>
				</div>
			</div>
			<div class="clearfix"> </div>
		</div>

		<div class="grids widget-shadow">
					<div class="form-group">
						<div class="row">
							<div class="col-md-12">
								<div class="col-md-6">
									<input type="text" class="form-control1" placeholder="Nombre">	
								</div>	
								<div class="col-md-6">
									<input type="text" class="form-control1">
								</div>	
							</div>
							<div class="clearfix"> </div>
						</div>
					</div>
					<div class="form-group">
						<div class="row">
							<div class="col-md-2 grid_box1">
								<input type="text" class="form-control1" placeholder="Apellido">
							</div>
							<div class="col-md-10">
								<input type="text" class="form-control1" placeholder="">
							</div>
							<div class="clearfix"> </div>
						</div>
					</div>
			</div>
<div>	
		<!--------------------------- Final del Menu Contenido -------------------------->


	<!---------------------  Ventana Modal     ------------------------------------>
	<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel"><i class="fas fa-exclamation-circle"></i>  Realmente deseas salir?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">Seleccione aceptar para poder salir</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancelar</button>
          <a class="btn btn-primary" href="../login.html">Salir</a>
        </div>
      </div>
    </div>
  </div>

  <!-----------------------  Final Ventana Modal --------------------------->
	<!--footer-->
	<div class="footer">
	   <p>&copy; 2020 Hecho por Duver Insignares. Todos los Derechos Reservados </p>		
	</div>
    <!--//footer-->
	</div>
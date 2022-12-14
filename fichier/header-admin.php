<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../bootstrap-4.5.0-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
    <script src="../bootstrap-4.5.0-dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
    <div class="card-header bg-dark">
       <div class="d-flex justify-content-between">
            <div class="d-flex">
                <img class="" src="../images/brand-1/logo.svg" alt="" style="width:50px; height:50px"/>
                <h2 class="text-white ">HITech.NET</h2>
                <h2 class="text-secondary ">Gestion des produits</h2>
            </div>   
            <div class="btn-group" style="margin-right: 60px;">
                <img src="../images/product-1/desc-2.jpg" alt="" style="border-radius:50%;width:50px;height:50px;">
                <!-- <button type="button" class="btn btn-danger">Action</button> -->
                <button type="button" class="btn btn-dark dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <span class="text-white">Bob</span>
                </button>
                <div class="dropdown-menu">
                  <a class="dropdown-item" href="#">Profil</a>
                  <a class="dropdown-item" href="#">Deconnexion</a>
                </div>
            </div>
       </div>  
    </div>
   <div class="row" style="margin-right: 0;">
        <div class="col-3">
            <header style="background-color: #dee2e6;">
                <nav class="navbar-nav nav flex-column  nav-pills" style="padding-top:20px;padding-left: 20px;">
					<ul class="list-unstyled">
						<li >
							<a href="#"  class="navbar-brand text-dark">
								<i class="bi bi-house-door-fill"></i>
								Accueil
							</a>
                            <ul class="list-unstyled">
								<li style="margin-block: 8px;">
									<a href="#">Tableau de bord</a>				
								</li>								
							</ul>
						</li>
					</ul>
                    <ul class="list-unstyled">
						<li>
							<a href="#" class="navbar-brand text-dark" style="margin-block: 10px;">
								<i class="bi bi-globe2"></i>
								Site web
							</a>
                            <ul class="list-unstyled">
								<li style="margin-block: 8px;">
									<a href="#"  >Gestion des rubriques</a>				
								</li>
                                <li style="margin-block: 8px;">
									<a href="#">Gestion des actualités</a>				
								</li>								
							</ul>
						</li>
					</ul>
					<ul class="list-unstyled">
						<li>
							<a href="#" class="navbar-brand text-dark" style="margin-block: 10px;">
								<i class="bi bi-shop"></i>
								Boutiques
							</a>
							<ul class="list-unstyled">
								<li style="margin-block: 8px;">
									<a href="#" >Gestion des rayons</a>				
								</li>
                                <li style="margin-block: 8px;">
									<a class="nav-link active" href="#">Gestion des Produits</a>				
								</li>
                                <li style="margin-block: 8px;">
									<a href="#">Gestion des commandes</a>				
								</li>									
							</ul>
						</li>
                    </ul>
                    <ul class="list-unstyled">
						<li>
							<a href="#" class="navbar-brand text-dark" style="margin-block: 10px;">
								<i class="bi bi-gear-fill"></i>
									Paramètres
							</a>
							<ul class="list-unstyled">
								<li style="margin-block: 8px;">
									<a href="#">Gestion des utilisateurs</a>				
								</li>
								<li style="margin-block: 8px;">
									<a href="#">Gestion des rôles</a>				
								</li>
                                <li style="margin-block: 8px;">
									<a href="#">Préférences</a>				
								</li>
							</ul>
						</li>						
					</ul>					
				</nav>
            </header>
        </div>
       
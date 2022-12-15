<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./bootstrap-4.5.0-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
    <script src="./bootstrap-4.5.0-dist/js/bootstrap.bundle.min.js"></script>
		<style>
			.big-header {
				display:none;
			}
			@media  (max-width: 960px) {
				.large-header {
					display:none;
				}
				.big-header {
					display:block;
			}
			}
		</style>
</head>
<body>
	<header class="big-header">
		<div class=" bg-dark">
			<nav class="navbar navbar-dark d-flex justify-content-between">
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
				</button>
				<div class="d-flex align-items-center" style>
					<a class="nav-link d-flex" href="">
						<img src="./images/brand-1/logo.svg" alt="admin profil" style="width:50px; height:50px"/>
						<h1 class="text-white" > HITech.NET<h1>
					</a>
				</div> 
			</nav>
			<div class="collapse" id="navbarToggleExternalContent">
				<div class="bg-dark p-4">
					<h2 class="text-secondary ">Gestion des produits</h2>
					<div class="btn-group" style="margin-right: 60px;">
						<img src="./images/product-1/desc-2.jpg" alt="" style="border-radius:50%;width:50px;height:50px;">
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
			
		</div>
	</header>
    <header class="large-header">
       
		<div class="card-header bg-dark">
			<div class="d-flex justify-content-between">
				<div class="d-flex align-items-center ">
					<a class="nav-link d-flex" href="">
						<img class="" src="../images/brand-1/logo.svg" alt="" style="width:50px; height:50px"/>
						<h1 class="text-white" > HITech.NET<h1>
					</a>
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
    </header>

    <main style ="padding-inline:10px">
        <div class="card-fluid">
            <div class="row">
                <div class="col-3 bg-light">
                    <nav class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                        <ul class="list-unstyled">
                            <li >
                                <a href="#"  class="navbar-brand text-dark">
                                    <i class="bi bi-house-door-fill"></i>
                                    Accueil
                                </a>
                                <ul class="list-unstyled">
                                    <li style="margin-block: 8px;">
										<a class="nav-link" id="v-pills-ds-tab" data-toggle="pill" href="#v-pills-ds" role="tab" aria-controls="v-pills-ds" aria-selected="true" style="padding-inline:10px;">Gestion des Ps</a>
                                        <!-- <a href="#"  class="nav-link" style="padding-inline:10px;">Tableau de bord</a>				 -->
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
                                        <a href="#"  class="nav-link" style="padding-inline:10px;" >Gestion des rubriques</a>				
                                    </li>
                                    <li style="margin-block: 8px;">
                                        <a href="#"  class="nav-link" style="padding-inline:10px;">Gestion des actualités</a>				
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
                                        <a href="#"  class="nav-link" style="padding-inline:10px;">Gestion des rayons</a>				
                                    </li>
                                    <li style="margin-block: 8px;">
                                        <a class="nav-link" id="v-pills-products-tab" data-toggle="pill" href="#v-pills-products" role="tab" aria-controls="v-pills-products" aria-selected="true" style="padding-inline:10px;">Gestion des Produits</a>								
                                    </li>
                                    <li style="margin-block: 8px;">
										<a class="nav-link" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="true" style="padding-inline:10px;">Gestion des Ps</a>
                                        <!-- <a href="#" class="nav-link" style="padding-inline:10px;">Gestion des commandes</a>				 -->
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
                                        <a href="#"  class="nav-link" style="padding-inline:10px;">Gestion des utilisateurs</a>				
                                    </li>
                                    <li style="margin-block: 8px;">
                                        <a href="#"  class="nav-link" style="padding-inline:10px;">Gestion des rôles</a>				
                                    </li>
                                    <li style="margin-block: 8px;">
                                        <a href="#"  class="nav-link" style="padding-inline:10px;">Préférences</a>				
                                    </li>
                                </ul>
                            </li>						
                        </ul>					
                    </nav>
                </div>
                <div class="col-9" style="padding-top:20px;padding-right:40px">
                    
                    <div class="tab-content" id="v-pills-tabContent" style="padding-top:20px">

                        <div class="tab-pane fade show active" id="v-pills-products" role="tabpanel" aria-labelledby="v-pills-products-tab">
                            <div class="d-flex justify-content-between">
                                <div>
                                    <form class="form-inline my-2 my-lg-0" action="/action_page.php">
                                        <input class="form-control mr-sm-2" type="text" placeholder="Search">
                                        <button class="btn btn-success" type="submit">Rechercher</button>
                                    </form> 
                                </div>
                                
                                <div>
                                    <button type="button" class="btn btn-primary "  data-toggle="modal" data-target="#myModal">
                                    <i class="bi bi-plus"></i>
                                    <a href="./product-empty.php" class="text-white" style="text-decoration:none"> Ajouter un produit</a>
                                    </button>
                                </div>     
                            </div>
                            <div class="table-responsive">
                                <table  class="table table-bordered table-striped" style="width:100%">
                                    <thead class="thead-dark">
                                        <tr>
                                            <th style="text-align:center;">Statut</th>
                                            <th style="text-align:center;">Boutique </th>
                                            <th style="text-align:center;">Rayons</th>
                                            <th style="text-align:center;">Produits</th>
                                            <th style="text-align:center;">Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="text-success">En boutique</td>
                                            <td>Péripheriques & composants</td>
                                            <td>Ecrans d'ordinateur</td>
                                            <td>AOC 24B1XHS </td>
                                            <td>
                                                <button class="btn btn-light border-danger text-danger">
                                                    <i class="bi bi-archive-fill"></i>
                                                    Retirer
                                                </button>
                                                <button class="btn btn-light border-dark text-secondary">
                                                    <i class="bi bi-pencil"></i>
                                                    Modifier
                                                </button>
                                                <button class="btn btn-light border-dark text-dark">
                                                    <i class="bi bi-tags"></i>
                                                    Caractéristiques
                                                </button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-success">En boutique</td>
                                            <td>Péripheriques & composants</td>
                                            <td>Ecrans d'ordinateur</td>
                                            <td>AOC 24B1XHS </td>
                                            <td>
                                                <button class="btn btn-light border-danger text-danger">
                                                    <i class="bi bi-archive-fill"></i>
                                                    Retirer
                                                </button>
                                                <button class="btn btn-light border-dark text-secondary">
                                                    <i class="bi bi-pencil"></i>
                                                    Modifier
                                                </button>
                                                <button class="btn btn-light border-dark text-dark">
                                                    <i class="bi bi-tags"></i>
                                                    Caractéristiques
                                                </button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-danger">Retiré</td>
                                            <td>Péripheriques & composants</td>
                                            <td>Ecrans d'ordinateur</td>
                                            <td>AOC 24B1XHS </td>
                                            <td>
                                                <button class="btn btn-light border-success text-success">
                                                    <i class="bi bi-check-square-fill"></i>
                                                    Remettre
                                                </button>
                                                <button class="btn btn-light border-dark text-secondary">
                                                    <i class="bi bi-pencil"></i>
                                                    Modifier
                                                </button>
                                                <button class="btn btn-light border-dark text-dark">
                                                    <i class="bi bi-tags"></i>
                                                    Caractéristiques
                                                </button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>En attente</td>
                                            <td>Péripheriques & composants</td>
                                            <td>Ecrans d'ordinateur</td>
                                            <td>AOC 24B1XHS </td>
                                            <td>
                                                <button class="btn btn-light border-success text-success">Mettre en boutique</button>
                                                <button class="btn btn-light border-dark text-secondary">
                                                    <i class="bi bi-pencil"></i>
                                                    Modifier
                                                </button>
                                                <button class="btn btn-light border-dark text-dark">
                                                    <i class="bi bi-tags"></i>
                                                    Caractéristiques
                                                </button>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>   
                                
                            </div>
                            <nav aria-label="Page navigation example">
                                <ul class="pagination justify-content-center">
                                    <li class="page-item disabled">
                                        <a class="page-link" href="#" tabindex="-1" aria-disabled="true">
                                            <i class="bi bi-chevron-double-left"></i>
                                        </a>
                                    </li>
                                    <li class="page-item active"><a class="page-link" href="#">1</a></li>
                                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                                    <li class="page-item">
                                        <a class="page-link" href="#">
                                            <i class="bi bi-chevron-double-right"></i>
                                        </a>
                                    </li>
                                </ul>
                            </nav>
                        </div>

                        <!-- footer -->
                    </div>
                </div>
            </div>
        </div>
    </main>
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
</head>
<body>
    <header>
        <div >
            <div class="collapse" id="navbarToggleExternalContent">
              <div class="bg-dark p-4">
                <h5 class="text-white h4">Collapsed content</h5>
                <span class="text-muted">Toggleable via the navbar brand.</span>
              </div>
            </div>
            <nav class="navbar navbar-dark bg-dark">
              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
            </nav>
        </div>
    </header>

    <main>
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
                                        <a class="nav-link active" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="true">Gestion des Produits</a>								
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
                </div>

                <div class="col-9" style="padding-top:20px;padding-right:40px">
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
                    <div class="tab-content" id="v-pills-tabContent" style="padding-top:20px">
                        <div class="table-responsive tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
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
                                        <span aria-hidden="true">&laquo;</span>
                                    </a>
                                </li>
                                <li class="page-item active"><a class="page-link" href="#">1</a></li>
                                <li class="page-item"><a class="page-link" href="#">2</a></li>
                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                <li class="page-item">
                                <a class="page-link" href="#"><span aria-hidden="true">&raquo;</span></a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </main>
    
</body>
</html>
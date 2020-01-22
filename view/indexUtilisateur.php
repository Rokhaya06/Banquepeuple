<!-- 
<form method="POST" action="/BanqueDuPeuple/controller/userController.php" id="nouveauUtilisateur">
    <div class="jumbotron">
        <legend class="text-center" ; style="color: orangered;">AJOUT UTILISATEUR</legend>
        <table class="table table-borderless col-sm-8 offset-sm-2">
            <tr class="text-center bg-secondary text-white">
                <td class="formul_tab">
                    <input type="text" placeholder="NOM" name="nom" id="nom" class="champsNewC"/>
                </td>
                <td class="formul_tab">
                    <input type="text" placeholder="PRENOM" name="prenom" id="prenom" class="champsNewC"/>
                </td>
            </tr>
            <tr class="text-center bg-secondary text-white">
                <td class="formul_tab">
                    <input type="text" placeholder="LOGIN" name="login" id="login" class="champsNewC" required/>
                </td>
                <td class="formul_tab">
                    <input type="password" placeholder="MOT DE PASSE" name="mdp" id="mdp" class="champsNewC" required/>
                </td>
            </tr>
            <tr class="text-center bg-secondary text-white">
                <td colspan="2" class="formul_tab">
                    <select class="champsNewC" name="profil">
                        <option selected>admin</option>
                        <option>Gestionnaire de comptes</option>
                        <option>caissier</option>
                    </select>
                </td>
            </tr>
        </table>
    </div>
    <div class="aligner" style="width: 10%; margin-left: 800px;"><input type="submit" class="btn btn-block btn-primary" name="ajoutCompte" value="Valider" ></div>
</form> -->
<!-- ================================================== -->
<div class="app-page-title">
                            <div class="page-title-wrapper">
                                <div class="page-title-heading">
                                    <div class="page-title-icon">
                                        <i class="pe-7s-add-user icon-gradient bg-mean-fruit">
                                        </i>
                                    </div>
                                    <div>CREER UN NOUVEL UTILISATEUR
                                        <div class="page-title-subheading">Les utilisateurs se connecte à l'application pour y effectuer différentes tâches.
                                        </div>
                                    </div>
                                </div>
                                <div class="page-title-actions">
                                    <button type="button" data-toggle="tooltip" title="" data-placement="bottom" class="btn-shadow mr-3 btn btn-dark" data-original-title="Example Tooltip">
                                        <i class="fa fa-star"></i>
                                    </button>
                                    <div class="d-inline-block dropdown">
                                        <button type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="btn-shadow dropdown-toggle btn btn-info">
                                            <span class="btn-icon-wrapper pr-2 opacity-7">
                                                <i class="fa fa-business-time fa-w-20"></i>
                                            </span>
                                            Buttons
                                        </button>
                                        <div tabindex="-1" role="menu" aria-hidden="true" class="dropdown-menu dropdown-menu-right">
                                            <ul class="nav flex-column">
                                                <li class="nav-item">
                                                    <a href="javascript:void(0);" class="nav-link">
                                                        <i class="nav-link-icon lnr-inbox"></i>
                                                        <span>
                                                            Inbox
                                                        </span>
                                                        <div class="ml-auto badge badge-pill badge-secondary">86</div>
                                                    </a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="javascript:void(0);" class="nav-link">
                                                        <i class="nav-link-icon lnr-book"></i>
                                                        <span>
                                                            Book
                                                        </span>
                                                        <div class="ml-auto badge badge-pill badge-danger">5</div>
                                                    </a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="javascript:void(0);" class="nav-link">
                                                        <i class="nav-link-icon lnr-picture"></i>
                                                        <span>
                                                            Picture
                                                        </span>
                                                    </a>
                                                </li>
                                                <li class="nav-item">
                                                    <a disabled="" href="javascript:void(0);" class="nav-link disabled">
                                                        <i class="nav-link-icon lnr-file-empty"></i>
                                                        <span>
                                                            File Disabled
                                                        </span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>    </div>
                        </div>
<!-- ================================================== -->
<div class="mb-3 card text-white card-body bg-primary">
    <h5 class="text-white card-title">AJOUT UTILISATEUR</h5>
    <div class="dropdown-divider mb-3"></div>
    <form class="needs-validation" method="POST" action="/BanqueDuPeuple/controller/userController.php" id="nouveauUtilisateur" novalidate>
        <div class="form-row">
            <div class="col-md-6 mb-3 pr-4">
                <label for="nom">NOM DE L'UTILISATEUR</label>
                <div class="input-group">
                    <div class="input-group-prepend"><span class="input-group-text"><i class="far fa-id-card"></i></span></div>
                    <input type="text" name="nom" id="nom" placeholder="Entrez le Nom du user" class="form-control" required/>
                    <div class="invalid-feedback">
                        Please provide a valid Number.
                    </div>
                </div>
            </div>
            <div class="col-md-6 mb-3">
                <label for="prenom">PRENOM DE L'UTILISATEUR</label>
                <div class="input-group">
                    <div class="input-group-prepend"><span class="input-group-text"><i class="far fa-id-card"></i></span></div>
                    <input type="text" name="prenom" id="prenom" placeholder="Entrez le Prenom du user" class="form-control" required/>
                    <div class="invalid-feedback">
                        Please provide a valid Number.
                    </div>
                </div>
            </div>
        </div>
        <div class="form-row">
            <div class="col-md-6 mb-3 pr-4">
                <label for="nom">LOGIN DE L'UTILISATEUR<</label>
                <div class="input-group">
                    <div class="input-group-prepend"><span class="input-group-text"><i class="far fa-id-card"></i></span></div>
                    <input type="text" name="login" id="login" placeholder="Entrez le Login du user" class="form-control" required/>
                    <div class="invalid-feedback">
                        Please provide a valid Number.
                    </div>
                </div>
            </div>
            <div class="col-md-6 mb-3">
                <label for="prenom">PASSWORD DE L'UTILISATEUR</label>
                <div class="input-group">
                    <div class="input-group-prepend"><span class="input-group-text"><i class="far fa-id-card"></i></span></div>
                    <input type="text" name="mdp" id="mdp" placeholder="Entrez le Mot de Passe du user" class="form-control" required/>
                    <div class="invalid-feedback">
                        Please provide a valid Number.
                    </div>
                </div>
            </div>
        </div>
        <div class="form-row text-center">
            <div class="text-center d-inline-block w-100">
                <div class="position-relative form-group text-center">
                    <label for="exampleCustomSelect" class="">PROFIL DE L'UTILISATEUR</label>
                    <select type="select" id="exampleCustomSelect" name="profil" class="custom-select">
                        <option selected>admin</option>
                        <option>Gestionnaire de comptes</option>
                        <option>caissier</option>
                    </select>
                </div>
            </div>
        </div>
        <div class="dropdown-divider mt-3 mb-4"></div>
        <div class="text-center">
            <button class="btn btn-success mb-0" name="ajoutCompte" type="submit">VALIDER</button>
        </div>
    </form>
</div>
<script>
    // Example starter JavaScript for disabling form submissions if there are invalid fields
    (function() {
        'use strict';
        window.addEventListener('load', function() {
            // Fetch all the forms we want to apply custom Bootstrap validation styles to
            var forms = document.getElementsByClassName('needs-validation');
            // Loop over them and prevent submission
            var validation = Array.prototype.filter.call(forms, function(form) {
                form.addEventListener('submit', function(event) {
                    if (form.checkValidity() === false) {
                        event.preventDefault();
                        event.stopPropagation();
                    }
                    form.classList.add('was-validated');
                }, false);
            });
        }, false);
    })();
</script>
<!-- ================================================== -->
<!-- 
<form method="POST" action="/BanqueDuPeuple/controller/compteController.php" id="nouveauCompte">
    <div class="jumbotron">
        <legend class="text-center" style="color: orangered;">INFOS CLIENT</legend>
        <table class="table table-borderless col-sm-8 offset-sm-2">
            <tr class="text-center bg-secondary text-white">
                <td class="formul_tab"><input type="text" placeholder="NUMERO CNI" name="cni" id="cni" class="champsNewC" /></td>
                <td class="formul_tab"><input type="text" placeholder="NOM" name="nom" id="nom" class="champsNewC" /></td>
            </tr>
            <tr class="text-center bg-secondary text-white">
                <td class="formul_tab"><input type="text" placeholder="PRENOM" name="prenom" id="prenom" class="champsNewC" /></td>
                <td class="formul_tab"><input type="text" placeholder="ADRESSE" name="adresse" id="adresse" class="champsNewC" /></td>
            </tr>
            <tr class="text-center bg-secondary text-white">
                <td colspan="2" class="formul_tab"><input type="text" placeholder="TELEPHONE" name="tel" id="tel" class="champsNewC" /></td>
            </tr>
        </table>
    </div>
    <div class="jumbotron">
        <legend class="text-center" style="color: orangered;">INFOS COMPTE</legend>
        <table class="table table-borderless col-sm-8 offset-sm-2">
            <tr class="text-center bg-secondary text-white">
                <td class="formul_tab"><input class="champsNewC" type="text" name="numero" id="numero" value="<?= $numero ?>" readonly/></td>
                <td class="formul_tab"><input class="champsNewC" type="number" min="500" name="solde" id="solde" ></td>
            </tr>
        </table>
    </div>
    <br><br>
    <div class="form-group" style="width: 20%; margin-left: 450px; margin-top: -60px; " >
        <input type="submit" class="btn btn-block btn-primary"  name="ajoutCompte" value="Valider" >
    </div>
</form> -->
<!-- =============== -->
<div class="main-card mb-3 card">
    <div class="card-body">
        <h5 class="card-title">Enregistrer un Nouveau Client</h5>
        <div class="m-3 dropdown-divider"></div>
        <h4 class="mb-3 badge badge-pill badge-primary align-center">INFOS CLIENT</h4>
        <form class="needs-validation" method="POST" action="/BanqueDuPeuple/controller/compteController.php" id="nouveauCompte" novalidate>
            <div class="form-row">
                <div class="col-md-4 mb-3">
                    <label for="validationCustom01"> N° CNI</label>
                    <input type="number" class="form-control" id="validationCustom01" placeholder="Entrer le CNI du Client" name="cni" required>
                    <div class="valid-feedback">
                        Looks good!
                    </div>
                </div>
                <div class="col-md-4 mb-3">
                    <label for="validationCustom02">NOM DU CLIENT</label>
                    <input type="text" class="form-control" id="validationCustom02" placeholder="Entrer le NOM du Client" name="nom" required>
                    <div class="valid-feedback">
                        Looks good!
                    </div>
                </div>
                <div class="col-md-4 mb-3">
                    <label for="validationCustomUsername">PRENOM DU CLIENT</label>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="inputGroupPrepend"><i class="fas fa-user"></i></span>
                        </div>
                        <input type="text" class="form-control" id="validationCustomUsername" placeholder="Entrer le NOM du Client" name="prenom" aria-describedby="inputGroupPrepend" required>
                        <div class="invalid-feedback">
                            Please choose a Name.
                        </div>
                    </div>
                </div>
            </div>
            <div class="form-row">
                <div class="col-md-6 mb-3">
                    <label for="validationCustom03">ADRESSE DU CLIENT</label>
                    <input type="text" class="form-control" id="validationCustom03" name="adresse" placeholder="Entrer l'adresse du Client" required>
                    <div class="invalid-feedback">
                        Please provide a valid Adresse.
                    </div>
                </div>
                <div class="col-md-6 mb-3">
                    <label for="validationCustom04">TELEPHONE DU CLIENT</label>
                    <input type="tel" class="form-control" id="validationCustom04" name="tel" placeholder="Entrer le Telephone du Client" required>
                    <div class="invalid-feedback">
                        Please provide a valid Téléphone.
                    </div>
                </div>
            </div>
            <div class="mb-3 card text-white card-body bg-primary">
                <h5 class="text-white card-title">INFOS COMPTE</h5>
                <div class="form-row">
                <div class="col-md-6 mb-3">
                    <label for="validationCustom03">NUMERO DU COMPTE</label>
                    <input type="text" name="numero" id="numero" value="<?= $numero ?>" readonly class="form-control">
                    <div class="invalid-feedback">
                        Please provide a valid Number.
                    </div>
                </div>
                <div class="col-md-6 mb-3">
                    <label for="validationCustom04">SOLDE DU COMPTE</label>
                    <input type="number" class="form-control" min="500" name="solde" id="solde" placeholder="Entrer le Solde du Compte" required>
                    <div class="invalid-feedback">
                        Please provide a valid Téléphone.
                    </div>
                </div>
            </div>
            </div>
            <button class="btn btn-primary" name="ajoutCompte" type="submit">VALIDER</button>
        </form>

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
    </div>
</div>
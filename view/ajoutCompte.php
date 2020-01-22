<?php
    require_once '../model/modelCompte.php';

    $numeroCompte = genererNumero();

    if (!isset($_GET['cin'])){
        header('location:/BanqueDuPeuple/view/indexFinance.php?view=client');
    }
    $cin = $_GET['cin'];
    $idClient = $_GET['idClient'];
?>



<!-- ================================== -->
<div class="main-card mb-3 card">
    <div class="card-body">
        <h5 class="card-title">Créer un Nouveau Compte</h5>
        <div class="m-3 dropdown-divider"></div>
        <h4 class="mb-3 badge badge-pill badge-primary align-center">CREATION</h4>
        <div class="container">
            <div class="jumbotron">
                <h5 class="display-4">CIN CLIENT (<?= $cin ?>)</h5>
                <div class="col-sm-4 offset-sm-8">
                    <form method="POST" action="/BanqueDuPeuple/controller/compteController.php">
                        <input type="hidden" value="<?= $idClient ?>" name="idClient">
                        <div class="form-group">
                            <label class="col-form-label-sm">NUMERO COMPTE</label>
                            <input value="<?= $numeroCompte ?>" name="numero" type="text" class="form-control text-center" readonly>
                        </div>
                        <div class="form-group">
                            <label class="col-form-label-sm">MONTANT INITIAL</label>
                            <input name="montant" min="500" type="number" class="form-control">
                        </div>
                        <div class="form-group">
                            <input type="submit" class="btn btn-block btn-primary" value="AjouterCompte" name="ajouterCompte2">
                        </div>
                    </form>
                </div>
            </div>
        </div>


    </div>
</div>
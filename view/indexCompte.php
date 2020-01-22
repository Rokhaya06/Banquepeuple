<?php
    //Recupere les comptes
    $listComptes = listeComptes();
    //var_dump($listComptes[0]);
?>

<div class="main-card mb-3 card">
<div class="card-body"><h5 class="card-title">Liste des Comptes</h5>
<div class="table-responsive">    
    <table id="listCompte" class="mb-0 table table-hover">
        <tr>
            <th>NUMERO</th>
            <th>DATE CREATION</th>
            <th>SOLDE</th>
            <th>Prenom & Nom Client </th>
            <th class="text-center" id="A">
                <a class="btn btn-sm btn-outline-primary" href="/BanqueDuPeuple/view/switcher.php?view=nouveauCompte">Nouveau Client</a>
            </th>
        </tr>
        <?php
            foreach ($listComptes as $c){
                if ($c['etat'] == 0){ //User bloqué
                    $couleur = "bg-danger";
                    $activer="";
                    $bloquer="disabled";
                }
                else{//User débloqué
                    $couleur = "";
                    $bloquer = "";
                    $activer = "disabled";
                }
        ?>
            <tr class="<?= $couleur ?>">
                <td> <?= $c['numero'] ?> </td>
                <td> <?= $c['dateCreation'] ?> </td>
                <td> <?= $c['solde'] ?> </td>
                <td> <?= ucfirst($c['prenom']) .' '. strtoupper($c['nom']) ?> </td>
                <td class="text-center">
                    <a href="/BanqueDuPeuple/controller/compteController.php?action=bloquer&idCompte=<?= $c['id'] ?>" class="btn btn-sm btn-outline-danger <?= $bloquer ?>">Bloquer</a>
                    <a href="/BanqueDuPeuple/controller/compteController.php?action=activer&idCompte=<?= $c['id'] ?>" class="btn btn-sm btn-outline-success <?= $activer ?>">Activer</a>
                </td>
            </tr>
        <?php } ?>
    </table>
</div>
</div>
</div>

<script src="/BanqueDuPeuple/public/js/scriptCompte.js"></script>

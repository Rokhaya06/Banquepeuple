<?php
require_once '../model/modelClient.php';

$listClients = listeClients();
?>

<div class="main-card mb-3 card">
<div class="card-body"><h5 class="card-title">Liste des Clients</h5>
<div class="table-responsive">    
        <table class="table table-hover table-bordered">
            <tr>
                <th>CNI</th>
                <th>NOM</th>
                <th>PRENOM</th>
                <th>TELEPHONE</th>
                <th>ADRESSE</th>
                <th>ACTIONS</th>
            </tr>
            <?php
            foreach ($listClients as $c){
                ?>
                <tr>
                    <td> <?=$c['cni'] ?> </td>
                    <td> <?=$c['nom'] ?> </td>
                    <td> <?=$c['prenom'] ?> </td>
                    <td> <?=$c['tel'] ?> </td>
                    <td> <?=$c['adresse'] ?> </td>
                    <td>
                        <a class="btn btn-sm btn-outline-primary" href="/BanqueDuPeuple/view/switcher.php?view=ajoutCompte&cin=<?=$c['cni'] ?>&idClient=<?= $c['id'] ?>">
                        Ajout Compte</a>
                    </td>
                </tr>
            <?php } ?>
        </table>
</div>
</div>
</div>
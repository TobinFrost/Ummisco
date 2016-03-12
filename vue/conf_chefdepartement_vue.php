<?php
//require_once ('../lib/autoload2.inc.php');
?>
<table class="table">
<tr>
<th>Nom</th>
<th>Prenom</th>
<th>Matricule</th>
<th>Département</th>
<th>Téléphone</th>
<th>Mail</th>
<th></th>
<th></th>
</tr>
<tr>
<?php


while ($donne = $data->fetch()) {

//	$dep = new Departement($donne['agent_iddept']);
	$cf->count();
	echo "<tr>";
	echo "<td>".$donne['agent_nom']."</td>";
	echo "<td>".$donne['agent_prenom']."</td>";
	echo "<td>".$donne['agent_matricule']."</td>";
	echo "<td>".$cf->getLibelleDepartement($donne['agent_iddept'])."</td>";
	echo "<td>".$donne['agent_tel']."</td>";
	echo "<td>".$donne['agent_mail']."</td>";
	echo '<td> <a href="#myModalSub'.$donne["agent_id"].'" role="button" class="btn btn-danger" data-toggle="modal">Supprimer <i class="icon-trash"></i> </a> </td>';
	echo '<td> <a href="#myModalMod'.$donne["agent_id"].'" role="button" class="btn btn-success" data-toggle="modal">Modifier <i class="icon-wrench"></i></a> </td>';

	echo '<div id="myModalSub'.$donne["agent_id"].'" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">X</button>
    <h3 id="myModalLabel">Attention</h3>
  </div>
  <div class="modal-body">
    <p>Voulez vous vraiment supprimer <b> '.$donne["agent_prenom"].' '.$donne["agent_nom"].' </b></p>
  </div>
  <div class="modal-footer">
    <button class="btn" data-dismiss="modal" aria-hidden="true">Annuler</button>
    <a href="chefdepartement.php?deleteid='.$donne["agent_id"].'" class="btn btn-primary">Supprimer</a>
  </div>
</div>';

	echo '<div id="myModalMod'.$donne["agent_id"].'" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">X</button>
    <h3 id="myModalLabel">Modification</h3>
  </div>
    <form action="chefdepartement.php" method="POST">
  <div class="modal-body">


  <fieldset>
    <legend>Modification</legend>
    <label>Nom</label>
    <input name="agent_nom" type="text" value="'.$donne["agent_nom"].'">
    <label>Prenom</label>
    <input name="agent_prenom" type="text" value="'.$donne["agent_prenom"].'">
    <label>Matricule</label>
    <input name="agent_matricule" type="text" value="'.$donne["agent_matricule"].'">
    <label>Téléphone</label>
    <input name="agent_tel" type="text" value="'.$donne["agent_tel"].'">
    <label>Mail</label>
    <input name="agent_mail" type="text" value="'.$donne["agent_mail"].'">
    <input name="agent_id" type="hidden" value="'.$donne["agent_id"].'">

  </fieldset>



  </div>
  <div class="modal-footer">
    <button class="btn" data-dismiss="modal" aria-hidden="true">Annuler</button>
    <button type="submit" class="btn btn-primary">Modifier</button>
  </div>
 </form>

</div>';

}


?>
  </tr>
</table>
<?php
//require_once ('../lib/autoload2.inc.php');
?>
<table class="table">
<tr>
<th>Code</th>
<th>Libelle</th>

<th></th>
<th></th>
</tr>
<tr>
<?php


while ($donne = $data->fetch()) {

//	$dep = new Departement($donne['dpt_iddept']);

	echo "<tr>";
	echo "<td>".$donne['dpt_code']."</td>";
	echo "<td>".$donne['dpt_libelle']."</td>";
	
	echo '<td> <a href="#myModalSub'.$donne["dpt_id"].'" role="button" class="btn btn-danger" data-toggle="modal">Supprimer <i class="icon-trash"></i> </a> </td>';
	echo '<td> <a href="#myModalMod'.$donne["dpt_id"].'" role="button" class="btn btn-success" data-toggle="modal">Modifier <i class="icon-wrench"></i></a> </td>';

	echo '<div id="myModalSub'.$donne["dpt_id"].'" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">X</button>
    <h3 id="myModalLabel">Attention</h3>
  </div>
  <div class="modal-body">
    <p>Voulez vous vraiment supprimer <b> '.$donne["dpt_libelle"].' '.$donne["dpt_code"].' </b></p>
  </div>
  <div class="modal-footer">
    <button class="btn" data-dismiss="modal" aria-hidden="true">Annuler</button>
    <a href="departement.php?deleteid='.$donne["dpt_id"].'" class="btn btn-primary">Supprimer</a>
  </div>
</div>';

	echo '<div id="myModalMod'.$donne["dpt_id"].'" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">X</button>
    <h3 id="myModalLabel">Modification</h3>
  </div>
    <form action="departement.php" method="POST">
  <div class="modal-body">


  <fieldset>
    <legend>Modification</legend>
    <label>Code</label>
    <input name="dpt_code" type="text" value="'.$donne["dpt_code"].'">
    <label>libelle</label>
    <input name="dpt_libelle" type="text" value="'.$donne["dpt_libelle"].'">
    		
    <input name="dpt_id" type="hidden" value="'.$donne["dpt_id"].'">

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
<?php
//require_once ('../lib/autoload2.inc.php');
?>
<table class="table">
<tr>
<th>Code</th>
<th>Minima</th>
<th>Durée</th>

<th></th>
<th></th>
</tr>
<tr>
<?php


while ($donne = $data->fetch()) {

//	$dep = new Departement($donne['lvl_iddept']);

	echo "<tr>";
	echo "<td>".$donne['lvl_code']."</td>";
	echo "<td>".$donne['lvl_minima']."</td>";
	echo "<td>".$donne['lvl_duration']."</td>";
	
	echo '<td> <a href="#myModalSub'.$donne["lvl_id"].'" role="button" class="btn btn-danger" data-toggle="modal">Supprimer <i class="icon-trash"></i> </a> </td>';
	echo '<td> <a href="#myModalMod'.$donne["lvl_id"].'" role="button" class="btn btn-success" data-toggle="modal">Modifier <i class="icon-wrench"></i></a> </td>';

	echo '<div id="myModalSub'.$donne["lvl_id"].'" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">X</button>
    <h3 id="myModalLabel">Attention</h3>
  </div>
  <div class="modal-body">
    <p>Voulez vous vraiment supprimer <b> '.$donne["lvl_code"].' </b></p>
  </div>
  <div class="modal-footer">
    <button class="btn" data-dismiss="modal" aria-hidden="true">Annuler</button>
    <a href="niveau.php?deleteid='.$donne["lvl_id"].'" class="btn btn-primary">Supprimer</a>
  </div>
</div>';

	echo '<div id="myModalMod'.$donne["lvl_id"].'" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">X</button>
    <h3 id="myModalLabel">Modification</h3>
  </div>
    <form action="niveau.php" method="POST">
  <div class="modal-body">


  <fieldset>
    <legend>Modification</legend>
    <label>Code</label>
    <input name="lvl_code" type="text" value="'.$donne["lvl_code"].'">
    <label>Minima</label>
    <input name="lvl_minima" type="text" value="'.$donne["lvl_minima"].'">
    <label>Durée</label>
    <input name="lvl_duration" type="text" value="'.$donne["lvl_duration"].'">
    		
    <input name="lvl_id" type="hidden" value="'.$donne["lvl_id"].'">

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
<center><a href="#myModalAdd" role="button" class="btn btn-primary" data-toggle="modal">Ajouter <i class="icon-plus-sign"></i></a></center>
<div id="myModalAdd" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">X</button>
    <h3 id="myModalLabel">Ajouter</h3>
  </div>
  <form action="niveau.php?add=ok" method="POST">
  <div class="modal-body">

 
  <fieldset>
    <legend>Ajout</legend>
    <label>Code</label>
    <input name="lvl_code" type="text" placeholder="Code">
    <label>Minima</label>
    <input name="lvl_minima" type="text" placeholder="ex:Bac+2">
    <label>Durée</label>
    <input name="lvl_duration"type="number">
    
  </fieldset>



  </div>
  <div class="modal-footer">
    <button class="btn" data-dismiss="modal" aria-hidden="true">Annuler</button>
    <button type="submit" class="btn btn-primary">Ajouter</button>
  </div>
 </form> 
</div>

<?php
include '../MonFrameWork.php';
?>
<form action="../controller/CompleteFile_controller.class.php" method="POST">

<div class="tabbable"> <!-- Only required for left/right tabs -->
		<ul class="nav nav-tabs">
		<li class="active"><a href="#tab1" data-toggle="tab">Information Personnel</a></li>
			<li class=""><a href="#tab2" data-toggle="tab">Niveau Scolaire</a></li>
			<li class=""><a href="#tab3" data-toggle="tab">Nationalité</a></li>
			<li><a href="#tab4" data-toggle="tab">Documents Justificatifs</a></li>
			<li><a href="#tab5" data-toggle="tab">Validation</a></li>
		</ul>
	<div class="tab-content">
    	
    	<div class="tab-pane active" id="tab1">
    	<label class="control-label" > Nom :</label>
    	<input type="text" value="<?php echo $cand->__get("cdt_nom"); ?>">
    	<label class="control-label" > Prénom :</label>
    	<input type="text" value="<?php echo $cand->__get("cdt_prenom"); ?>">
    	</div>
    	
	    <div class="tab-pane" id="tab2">
	      	<h4>Indiquer votre niveau Scolaire</h4>
	      	
	<input name="idCandidat" value=<?php echo $_SESSION["id"]; ?> type="hidden">
	
			<select name="idNiveau">
							      	
	      	<?php $nv = new Niveau();

//	      		print_r($nv->listAll()->fetchAll());
	      		
	      		$rep = $nv->listAll();
	      	
	      		while ($donne = $rep->fetch()) {
					
					echo "<option  value=".$donne["nv_id"].">".$donne["nv_libelle"]."</option>";
				}
	      	?>
	      	
	      	</select>
	      	
	    </div>
	    
	    <div class="tab-pane" id="tab3">
	      	<h4>Indiquer votre Nationalité</h4>
	      	
	      	<select name="idCountrie">
							      	
	      	<?php $countrie = new Countrie();

//	      		print_r($nv->listAll()->fetchAll());
	      		
	      		$rep = $countrie->listAll();
	      	
	      		while ($donne = $rep->fetch()) {
					
					echo "<option  value=".$donne["id"].">".$donne["name_fr"]."</option>";
				}
	      	?>
	      	
	      	</select>
	      	
	      	
	    </div>
	    
	    <div class="tab-pane" id="tab4">
	      	<h4>Indiquer Les Documents Justificatifs</h4>
	      	<div class="form-group">
	      		<label class="control-label" > Documents Justificatifs du BAC :</label>
                 <input name="justifBac" class="form-control" type="file">
            </div>
            
            <div class="form-group">
	      		<label class="control-label" >Documents Justificatifs du BAC+3 :</label>
                 <input name="justifBac3" class="form-control" type="file">
            </div>
            
	    </div>
	    
	    <div class="tab-pane" id="tab5">
	    <table class="table">
	    <tbody>
	    	<tr><td>Information Personnelle : </td> <td> <button type="button" class="btn btn-warning"><i class="icon-cog"></i> Modifier</button> <button type="button" class="btn btn-primary"><i class="icon-ok"> Valider</i></button></td>  </tr>
	    	<tr><td>Cursus Scolaire : </td> <td> <button type="button" class="btn btn-warning"><i class="icon-cog"></i> Modifier</button> <button type="button" class="btn btn-primary"><i class="icon-ok"></i> Valider</button></td>  </tr>
	    	<tr></tr>
	    </tbody>
	    </table>
	    </div>
	    
     </div>
     
</div>

	
	<button class="btn btn-primary" type="submit">Enregister</button>
	      	
</form>

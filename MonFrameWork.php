
<?php 

 function SetAccordeonQuater($Structure,$Description,$Tab,$specialite)
{
  
   $lien = str_ireplace(' ', '', $Structure);
   $lien = str_ireplace("'", '', $lien);
   $urlLien =str_ireplace(' ', '%20', utf8_encode($Structure));
  
echo '
                  <div class="accordion-group">
                    <div class="accordion-heading">
                      <a class="accordion-toggle" data-toggle="collapse" data-parent="#Accord_Departement" href="#Ac'.$lien.'">'
                        .utf8_encode($Structure).' 
                      </a>
                    </div>
                    <div id="Ac'.$lien.'" class="accordion-body collapse" >
                      <div class="accordion-inner">
                        <!-- Debut  Table des formations -->
                    
          <table class="table table-hover table-condensed">
<!--            <caption> <h3>'.utf8_encode($Structure).' </h3> </caption> -->
            <thead>
            <tr>
              <th>'.$Description.' '.utf8_encode($Structure).' </th>
              
              <th></th>
              
            </tr>
            </thead>
              <tbody>
              		  	
              		
';


// A prevoir pour les fili�res	
	
if(isset($Tab[0]))
for ($i=0; $i <count($Tab[0]) ; $i++) {
//	for($y=0;$y <count($Tab[$i]);$y++){
		
	 
  # code...
echo '
  		
        
    	
    		<!-- Here begin the formation information -->
  		
            <tr>
  		
  				<td>'.utf8_encode($Tab[0][$i]).'</td> <!-- Libelle formation -->
  						
  
    <div class="tab-pane active" id="tab1">
  		
              
              <td>	<button class="btn btn-primary" data-toggle="modal" href="#Abonner'.$lien.''.$i.'" title="Abonnement"> <i class="icon-info-sign" ></i> </button>
              <td>	<button class="btn btn-info" data-toggle="modal" href="#Info'.$lien.''.$i.'" title="Consulter"> <i class="icon-search" ></i> </button>
              <!-- Here  the formation information finish -->
      </div>
    
  
   <div id="Info'.$lien.''.$i.'" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">X</button>
    <h4 id="myModalLabel">'.utf8_encode($Tab[0][$i]).'</h4>
  </div>
  <form action="../controller/addFormation_controller.class.php" method="POST">
  <div class="modal-body">

   	<table class="table table-hover">
    	
	  <tr>
	  	<td>  <strong> Type de la formation : </strong> '.$Tab[1][$i].' </td> 
	  </tr>
	  <tr>
	    <td>  <strong> Durée de la formation : </strong> '.$Tab[2][$i].' an(s) </td> 
	  </tr>
	  <tr>
	    <td> <strong> Niveau requis : </strong> '.$Tab[3][$i].' </td>
	  </tr>
    		
</table>
    
    

  </div>
	   </form>
  <div class="modal-footer">
    <button class="btn btn-primary" data-dismiss="modal" aria-hidden="true">Ok</button>
    
  </div>
 
</div>
	    		
	  

	   <div id="Abonner'.$lien.''.$i.'" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">X</button>
    <h3 id="myModalLabel">Abonnement </h3>
  </div>
  <form action="../controller/Abonnement_Controller.class.php" method="POST">
  <div class="modal-body">
	<p class="lead">	Abonnez-vous pour avoir les dernières informations concernant la formation '.utf8_encode($Tab[0][$i]).' </p> <br/>
    <label for="form_txt_nom">Nom :</label> <input name="form_txt_nom" type="text" id="form_txt_nom">
	<label for="form_txt_prenom">Prénom :</label> <input name="form_txt_prenom" type="text" id="form_txt_prenom">
    <label for="form_txt_email">Email :</label> <input name="form_txt_email" type="text" id="form_txt_email">
    <label for="form_txt_telephone">Téléphone :</label> <input name="form_txt_telephone" type="tel" id="form_txt_telephone">
   	<input name="form_txt_spec" id="form_txt_spec" type="hidden" value="'.$specialite.'_'.$Tab[4][$i].'">
   	
    
    <p>
  		<small> PS: Vous recevrez un mail aprés validation du formulaire.</small>
	</p>

  </div>
   	
  <div class="modal-footer">
   	<button class="btn" data-dismiss="modal" aria-hidden="true">Annuler</button>
    <button  type="submit" class="btn btn-primary">Valider</button>
   	
    </form>
   			
  </div>
 
</div>
	    		
	    		
	    		
	    		
              		  </td>
            </tr>
	   
	    		
	     		       
';
//	} // fin For $y
   } // fin For $i

    echo '
    	
</tbody>
            </table>

            <!-- Fin  Table des formations -->


                      </div>
                    </div>
                  </div>

    ';
} // Fin Fonction SetAccordeon
 ?>



<?php 

 function SetAccordeonTer($Structure,$Description,$Tab)
{
  
   $lien = str_ireplace(' ', '', $Structure);
   $lien = str_ireplace("'", '', $lien);
   $urlLien =str_ireplace(' ', '%20', utf8_encode($Structure));
  
echo '
                  <div class="accordion-group">
                    <div class="accordion-heading">
                      <a class="accordion-toggle" data-toggle="collapse" data-parent="#Accord_Departement" href="#Ac'.$lien.'">'
                        .($Structure).' 
                      </a>
                    </div>
                    <div id="Ac'.$lien.'" class="accordion-body collapse" >
                      <div class="accordion-inner">
                        <!-- Debut  Table des formations -->
                    
          <table class="table table-hover table-condensed">
<!--            <caption> <h3>'.($Structure).' </h3> </caption> -->
            <thead>
            <tr>
              <th>'.$Description.' '.($Structure).' </th>
              
              <th></th>
              
            </tr>
            </thead>
              <tbody>
              		  	
              		
';


// A prevoir pour les fili�res	
	
if(isset($Tab[0]))
for ($i=0; $i <count($Tab[0]) ; $i++) {
//	for($y=0;$y <count($Tab[$i]);$y++){
		
	 
  # code...
echo '
  		
        
    	
    		<!-- Here begin the formation information -->
  		
            <tr>
  		
  				<td>'.($Tab[0][$i]).'</td> <!-- Libelle formation -->
  						
  
    <div class="tab-pane active" id="tab1">
  		
              
              <td>	<button class="btn btn-primary" data-toggle="modal" href="#Ajouter'.$lien.''.$i.'" title="Ajouter"> <i class="icon-plus" ></i> </button>
              <td>	<button class="btn btn-info" data-toggle="modal" href="#Info'.$lien.''.$i.'" title="Consulter"> <i class="icon-search" ></i> </button>
              <!-- Here  the formation information finish -->
      </div>
    
  
   <div id="Info'.$lien.''.$i.'" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">X</button>
    <h3 id="myModalLabel">'.utf8_encode($Tab[0][$i]).'</h3>
  </div>
  <form action="../controller/addFormation_controller.class.php" method="POST">
  <div class="modal-body">

   	<table class="table table-hover">
    	
	  <tr>
	  	<td>  <strong> Type de la formation : </strong> '.$Tab[1][$i].' </td> 
	  </tr>
	  <tr>
	    <td>  <strong> Durée de la formation : </strong> '.$Tab[2][$i].' an(s) </td> 
	  </tr>
	  <tr>
	    <td> <strong> Niveau requis : </strong> '.$Tab[3][$i].' </td>
	  </tr>
    		
</table>
    
    

  </div>
  <div class="modal-footer">
    <button class="btn btn-primary" data-dismiss="modal" aria-hidden="true">Ok</button>
    
  </div>
 
</div>
              		  </td>
            </tr>
	   
	    		
	     		       
';
//	} // fin For $y
   } // fin For $i

    echo '
    	
</tbody>
            </table>

            <!-- Fin  Table des formations -->


                      </div>
                    </div>
                  </div>

    ';
} // Fin Fonction SetAccordeon
 ?>



<?php 

 function SetAccordeon($Structure,$Description,$Tab)
{
  
   $lien = str_ireplace(' ', '', $Structure);
   $lien = str_ireplace("'", '', $lien);
   $urlLien =str_ireplace(' ', '%20', $Structure);
  
echo '
                  <div class="accordion-group">
                    <div class="accordion-heading">
                      <a class="accordion-toggle" data-toggle="collapse" data-parent="#Accord_Departement" href="#Ac'.$lien.'">'
                        .$Structure.' 
                      </a>
                    </div>
                    <div id="Ac'.$lien.'" class="accordion-body collapse" >
                      <div class="accordion-inner">
                        <!-- Debut  Table des formations -->
                    
          <table class="table table-hover table-condensed">
            <caption> <h3>'.$Structure.' </h3> </caption>
            <thead>
            <tr>
              <th>'.$Description.' '.$Structure.' </th>
              
              <th></th>
              
            </tr>
            </thead>
              <tbody>
';

for ($i=0; $i <count($Tab) ; $i++) { 
  # code...
echo '
            <tr>
              <td>'.($Tab[$i]).'</td>
              <td>	<button class="btn btn-info" data-toggle="modal" href="#Ajouter'.$lien.''.$i.'" title="Choisir"> <i class="icon-plus" ></i> </button>
   <div id="Ajouter'.$lien.''.$i.'" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">X</button>
    <h3 id="myModalLabel">Choix Formation</h3>
  </div>
  <form action="../controller/addFormation_controller.class.php" method="POST">
  <div class="modal-body">

   	<p>	
    Voulez vous choisir la formation <h4> '.$Tab[$i].' </h4> Définitivement ?
    </p>

    <input type="hidden" name="idCandidat" value='.$_SESSION["id"].' />	
    <input type="hidden" name="LibelleDepartment" value='.$urlLien.' />
    <input type="hidden" name="refFormation" value='.$i.' />

  </div>
  <div class="modal-footer">
    <button class="btn" data-dismiss="modal" aria-hidden="true">Annuler</button>
    <button type="submit" class="btn btn-primary">Choisir</button>
  </div>
 </form> 
</div>
              		  <a class="btn btn-warning"  href="fiche.php?dept='.$urlLien.'&form='.$i.'" title="Consulter"> <i class="icon-search" ></i> </a></td>
            </tr>              
';
    } // fin For
    echo '

</tbody>
            </table>

            <!-- Fin  Table des formations -->


                      </div>
                    </div>
                  </div>

    ';
} // Fin Fonction SetAccordeon
 ?>

<?php 

 function SetAccordeonBis($Structure,$Description,$Tab)
{
  
   $lien = str_ireplace(' ', '', $Structure);
   $lien = str_ireplace("'", '', $lien);
  
echo '
                  <div class="accordion-group">
                    <div class="accordion-heading">
                      <a class="accordion-toggle" data-toggle="collapse" data-parent="#Accord_Departement" href="#Ac'.$lien.'">'
                        .$Structure.' 
                      </a>
                    </div>
                    <div id="Ac'.$lien.'" class="accordion-body collapse" >
                      <div class="accordion-inner">
                        <!-- Debut  Table des formations -->
                    
          <table class="table table-hover table-condensed">
            <caption> <h3>'.$Structure.' </h3> </caption>
            <thead>
            <tr>
              <th>'.$Description.' '.$Structure.' </th>
              
              <th></th>
              
            </tr>
            </thead>
              <tbody>
';

for ($i=0; $i <count($Tab) ; $i++) { 
  # code...
echo '
            <tr>
              <td>'.($Tab[$i]).'</td>
              <td> <button class="btn btn-warning" data-toggle="modal" href="#Consulter'.$Structure.'" title="Consulter"> <i class="icon-search" ></i> </button></td>
            </tr>              
';
    } // fin For
    echo '

</tbody>
            </table>

            <!-- Fin  Table des formations -->


                      </div>
                    </div>
                  </div>

    ';
} // Fin Fonction SetAccordeon
 ?>





 <?php
  /////////////////// FONCTION SETMODAL /////////////////////

function SetModal($Chaine,$Option,$Item)
{
  if ($Option =="Ajouter") {
    
  echo '
          <div class="modal hide fade" role="dialog" id="nv'.$Chaine.'" aria-labelledby="nv'.$Chaine.'Label" aria-hidden="true">
          <div class="modal-header">
            <button class="close" data-dismiss="modal">&times;</button>
            <h3 id="nv'.$Chaine.'Label">Nouveau '.$Chaine.'</h3>
          </div>
          

        <div class="modal-body">
                
              <form class="form-horizontal">
                  <div class="control-group">
                  <label class="control-label" for="Nom'.$Chaine.'"> '.$Chaine.'</label>
                  <div class="controls">
                  <input type="text" id="Nom'.$Chaine.'" size="12" placeholder="'.$Chaine.'">
                  </div>
                  </div>
                  
                  
                  

                  
          </div>

          <div class="modal-footer">
            <button class="btn" data-dismiss="modal" aria-hidden="true">Annuler</button>
            <button type="submit" class="btn btn-primary" data-dismiss="modal">Creer</button>
    
          </form>
          </div>
        
      

    </div> <!-- Fin Modal nv'.$Chaine.' -->


  ';
  }elseif ($Option =="Update") {

    echo '
        <!-- Début Modal Mis à jour  -->

<div class="modal hide fade" role="dialog" id="Update'.$Chaine.'" aria-labelledby="Update'.$Chaine.'Label" aria-hidden="true">
          <div class="modal-header">
            <button class="close" data-dismiss="modal">&times;</button>
            <h3 id="Update'.$Chaine.'Label">Mise à jour '.$Chaine.'</h3>
          </div>
          

        <div class="modal-body">
                
              <form class="form-horizontal">
                  <div class="control-group">
                  <label class="control-label" for="NvNom'.$Chaine.'"> '.$Chaine.'</label>
                  <div class="controls">
                  <input type="text" id="NvNomFormation" size="12" placeholder="Nouveau Nom '.$Chaine.'">
                  </div>
                  </div>
                  <div class="control-group">
                  <label class="control-label" for="NvItem'.$Chaine.'">Option '.$Chaine.'</label>
                  <div class="controls">
                  
                  <select id="NvItem'.$Chaine.'" >';

                    for ($i=0; $i <count($Item) ; $i++) { 
                     echo '<option value="'.($Item[$i]).'">'.($Item[$i]).'</option>';                    
                  }

echo '                  </select>
                  </div>
                  </div>
                  
                  

                  
          </div>

          <div class="modal-footer">
            <button class="btn" data-dismiss="modal" aria-hidden="true">Annuler</button>
            <button type="submit" class="btn btn-primary" data-dismiss="modal">Mettre à jour</button>
    
          </form>
          </div>
        
      

    </div><!-- Fin Modal Mis à jour  -->


    ';
    
  }elseif ($Option =="Supprimer") {
    echo '
          <div class="modal hide fade" role="dialog" id="Delete'.$Chaine.'" aria-labelledby="Delete'.$Chaine.'Label" aria-hidden="true">
          <div class="modal-header">
            <button class="close" data-dismiss="modal">&times;</button>
            <h3 id="Delete'.$Chaine.'Label">Supprimer '.$Chaine.'</h3>
          </div>
          

        <div class="modal-body">
                
              <form class="form-horizontal">
                  
                  <div class="control-group">
                  <label class="control-label" for="Deleted'.$Chaine.'">'.$Chaine.'</label>
                  <div class="controls">
                  
                  <select id="Deleted'.$Chaine.'" >';

                    for ($i=0; $i <count($Item) ; $i++) { 
                     echo '<option value="'.($Item[$i]).'">'.($Item[$i]).'</option>';                    
                  }

echo '                  </select>
                  </div>
                  </div>
                  
                  

                  
          </div>

          <div class="modal-footer">
            <button class="btn" data-dismiss="modal" aria-hidden="true">Annuler</button>
            <button type="submit" class="btn btn-danger" data-dismiss="modal">Supprimer</button>
    
          </form>
          </div>
        
      

    </div><!-- Fin Modal Suppression Département  -->
    ';
  }   // Fin If
} // fin Fonction SetModal




  ?>

  <?php

    /////////////////// FONCTION SETMODALBUTTON /////////////////////

  function SetModalButton($Chaine,$Option)
  {
    if ($Option == "Ajouter") {
      echo ' <button class="btn btn-primary " data-toggle="modal" href="#nv'.$Chaine.'" title="Ajouter '.$Chaine.'"> <i class="icon-plus"></i> '.$Option.'  </button> ';
    }elseif ($Option == "Supprimer") {
      echo ' <button class="btn btn-danger" data-toggle="modal" href="#Delete'.$Chaine.'" title="Supprimer '.$Chaine.'"> <i class="icon-trash"></i> '.$Option.'  </button> ';
    }elseif ($Option == "Update") {
      echo ' <button class="btn btn-warning" data-toggle="modal" href="#Update'.$Chaine.'" title="Modifier '.$Chaine.'"> <i class="icon-pencil"></i> Modifier  </button> ';
    }
  }
	
  /////////////////// FONCTION SETROW /////////////////////
  
  function SetRow($tab1=null, $tab2=null, $tab3=null, $tab4=null, $tab5=null, $tab6=null){
	
	for ($i=0; $i <count($tab1) ; $i++) {
	echo "<tr class=''>"."<td>".($tab1[$i])."</td>"."<td>".($tab2[$i])."</td>"."<td width='12%'>".($tab3[$i])."</td>"."<td>".($tab4[$i])."</td>"."<td width='15%'>".($tab5[$i])."</td>"."<td>".($tab6[$i])."</td></tr>";
	}
	
  /////////////////// FONCTION BIGSETROW /////////////////////
  
  function BigSetRows(array $tab1){
	
	for ($i=0; $i <count($tab1) ; $i++) {
	echo "<tr class=''>"."<td>".($tab1[$i][0])."</td>"."<td>".($tab1[$i][1])."</td>"."<td width='12%'>".($tab1[$i][2])."</td>"."<td>".($tab1[$i][3])."</td>"."<td width='15%'>".($tab1[$i][4])."</td>"."<td>".($tab1[$i][5])."</td>"."<td>".($tab1[$i][6])."</td></tr>";
	}
		
	}
}  
  
   ?>
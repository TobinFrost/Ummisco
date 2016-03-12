<?php
include '../MonFrameWork.php';
?>
    	<!-- Debut  Accordion -->

                <div class="accordion" id="Accord_Departement">

                    <!-- Config  Accordion -->
                    <?php 
                    for ($i=0; $i <count($deptLibelle) ; $i++) { 
                      SetAccordeon(($deptLibelle[$i]),"Liste des Formations  ",$deptFormLibelle[$i]);
                    }
                      
                     ?>
   
                </div>
                  
          <!-- Fin  Accordion -->
    		

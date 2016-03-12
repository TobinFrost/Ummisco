<?php
	$nb = 10;
	$page = 0;
	$a = new Agent();
	if(isset($_GET["page"])){
		$debut = $_GET["page"];
		$page = $debut;
			
			if($page == 1){
				$line = 1;
				if($page == 0){
					$line = 1;
				}
			}else{
				$inter = $debut-1;
				$line = $inter*10;
			}
		
//		$statement = "SELECT * FROM oeuvre limit ".$line.",".$nb;
			$condition = "f.frm_typeid = t.type_id and f.frm_level_id = l.lvl_id limit ".$line.",".$nb;
//		$statement = "SELECT * FROM oeuvre limit ".$debut.",10";
	}else{
//		$statement = "SELECT * FROM oeuvre limit 1,".$nb;
		$condition = "f.frm_typeid = t.type_id and f.frm_level_id = l.lvl_id limit 1,".$nb;
	}
	
	$table = "dpp_formation f,dpp_typeformation t,dpp_level l";
	
	$select = "frm_libelle,type_libelle,lvl_duration,lvl_minima";
	
	$rep = $a->UniversalRequest($condition, $table,$select);
	
	$ligne = ceil($rep->rowCount()/$nb);
?>

 <table class="table table-striped">
	 	<tr>
	 		<th>Formations</th>
	 		<th>Prise en charge</th>
	 		<th>Durée</th>
	 		<th>Prérequis</th>
	 	</tr>
	 	
	 	<?php while ($donne = $rep->fetch()) { 
	 	echo "<tr>";	
	 	echo "<td>".$donne['frm_libelle']."</td>"; 
	 	echo "<td>".$donne['type_libelle']."</td>";
	 	echo "<td>".$donne['lvl_duration']."</td>";
	 	echo "<td>".$donne['lvl_minima']."</td>";
	 	echo "</tr>";
	 	}?>
	 	</tr>
	 
	 </table>
	 
	 <center>
		<?php
		
		$table = "dpp_formation";
		
		$select = "*";
		
		$condition = "1";
		
		$rep = $a->UniversalRequest($condition, $table,$select);
		
		$ligne = ceil($rep->rowCount()/$nb);
		
	 	$prec = $page -1;
		$suiv = $page +1;
		if($page > 1)echo " <a href='exo2.php?page=".$prec."' class='btn' ><i class='icon-chevron-left'></i></a> ";
		
		for ($i = 1; $i <$ligne; $i++) {
			$y=$i+1;
			echo "<a href='formation.php?page=".$i."' class='btn' >".$i."</i></a>";
		}
		if($page < $nb){echo " <a href='formation.php?page=".$suiv."' class='btn' ><i class='icon-chevron-right'></i></a>";}
		?>
		</center>
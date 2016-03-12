<?php
session_start();
require_once 'Document.class.php';
require_once ('../lib/autoload2.inc.php');

if(isset($_GET['id'])){
	$_SESSION["id"]=$_GET['id'];
	if(isset($_GET['level'])){
		$level = $_GET['level'];
		if($_GET['level']== 1){ // Administrateur
			$a = new Administrateur($_GET['id']);
			
			$_SESSION["nom"]="Administrateur";
			$nom = "Administrateur";
			$user = "Page Administrateur";
			$_SESSION["user"]="Page Administrateur";
		}else{
			if($_GET['level']== 2){ // Agent
				$a = new Agent($_GET['id']);
				$nom = $a->__get("agent_nom");
				$user = "Page Agent";
			}else{
				if($_GET['level']== 3){
					$a = new Candidat($_GET['id']);
					$nom = $a->__get("cdt_nom");
					$user = "Page Candidat";
					$_SESSION["statusFormationCandidat"] = $a->__get("cdt_id_formation");
					
					
				}
			}
		}
	}// fin test level

	
	
	$_SESSION["user"]=$user;
	
	$_SESSION["nom"]=$nom;
	
	$_SESSION["level"]=$level;
	
	
	header("Location: acceuil.php");
}else{
	if(isset($_SESSION['id'])){
		
	}else{
		header("Location: ../index.php");

		
	}
}

$Calendrier = "/* initialize the calendar
        -----------------------------------------------------------------*/

        $('#calendrier').fullCalendar({
            header: {
                left: 'prev,next today',
                center: 'title',
                right: 'month,agendaWeek,agendaDay'
            },
            editable: true,
            lang:'fr',
            events:[
        
            ]
      
            ,
            droppable: true, // this allows things to be dropped onto the calendar !!!
            drop: function(date) { // this function is called when something is dropped

                // retrieve the dropped element's stored Event Object
                var originalEventObject = $(this).data('eventObject');

                // we need to copy it, so that multiple events don't have a reference to the same object
                var copiedEventObject = $.extend({}, originalEventObject);

                // assign it the date that was reported
                copiedEventObject.start = date;

                // render the event on the calendar
                // the last `true` argument determines if the event 'sticks' (http://arshaw.com/fullcalendar/docs/event_rendering/renderEvent/)
                $('#calendrier').fullCalendar('renderEvent', copiedEventObject, true);

                // is the 'remove after drop' checkbox checked?
                if ($('#drop-remove').is(':checked')) {
                    // if so, remove the element from the 'Draggable Events' list
                    $(this).remove();
                }

            }
        });";



$doc = new Document($_SESSION["user"],$Calendrier,"../MonCss/fullcalendar.css","../MonJs/MaConfigurationCalendrier.js","");

$doc->begin();
$doc->userLevel=$_SESSION["level"];
$doc->header($_SESSION["nom"]);

$doc->beginRow();
include_once ('../Calendrier.php');
$doc->endBigSection();
$doc->endRow();

$doc->embedScript("../MonJs/moment.min.js");
$doc->embedScript("../MonJs/jquery.min.js");
$doc->embedScript("../MonJs/jquery-ui.custom.min.js");
$doc->embedScript("../MonJs/fullcalendar.js");
$doc->embedScript("../MonJs/lang-all.js");
$doc->embedScript("../MonJs/MaConfigurationCalendrier.js");
$doc->embedScript("../MonJs/jquery.metisMenu.js");
$doc->embedScript("../MonJs/MonJs.js");
$doc->beginScript();

echo $Calendrier;

$doc->endScript();


$doc->end();
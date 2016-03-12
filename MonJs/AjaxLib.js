/**
 * 
 */

function loadProfessor(idMat) {
	$.post("load.php",{idMatiere:""+idMat},function(data){
		$("#Professor").html(data);
	});
}

function loadMatiere(idProf) {
	$.post("load.php",{idAgent:""+idProf},function(data){
			$("#Matiere").html(data);
	});
}
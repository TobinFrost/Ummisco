/**
 * Autocomplete Functions
 * @author Tobin Frost
 * @version 1.0
 */


var specialty;

function autocomp(){
	
	var length_minimal = 0;
	var letters = $("#specialite").val();
	if(letters.length > 0){
		$.ajax({
			
			url : '../controller/Autocomplete_controller.class.php',
			type : 'POST',
			data : {keyword:letters},
			success : function(data){
					$("#formation_list").show();
					$("#formation_list").html(data);
					
			}
			
			
			
		});
	}else{
		$("#formation_list").hide();
		$("#Accord_Departement").hide();
	}
}

function set_formation(formation,unknown){
	$("#specialite").val(formation);
	$("#formation_list").hide();
	$("#unknown").val(unknown);
}

function search_formation(){
	var spec = $("#specialite").val();
	var unknown = $("#unknown").val();
	specialty = spec;
	
	
	//alert(spec);
	if(spec.length > 0 ){
		$.ajax({
			
			url : 'guide.php',
			type : 'POST',
			data : {specialite:spec,unknown:unknown},
			success : function(data){
				$("#Accord_Departement").show();
					//$("#formation_list").html(data);
					$("#Accord_Departement").html(data);
					//alert(specialty);
					//$("#form_txt_spec").val(specialty);
			}
			
			
			
		});
	}
}
Morris.Bar({
  element: 'hero-bar',
  data: [
  <?php for ($i = 0; $i < count($frmStat); $i++) {
  	echo("{x:'".$frmStat[$i]['frm_code']."',y:".$frmStat[$i]['compte']."},");
  	
  } ?>
  ],
  xkey: 'x',
  ykeys: ['y'],
  labels: ['Candidats']
}).on('click', function(i, row){
  console.log(i, row);
});

Morris.Bar({
  element: 'hero-bar2',
  data: [
  <?php for ($i = 0; $i < count($frmPaysStat); $i++) {
  	echo("{x:'".$frmPaysStat[$i]['nom']."',y:".$frmPaysStat[$i]['compte']."},");
  	
  } ?>
  ],
  xkey: 'x',
  ykeys: ['y'],
  labels: ['Nationalité']
}).on('click', function(i, row){
  console.log(i, row);
});


Morris.Bar({
  element: 'hero-bar3',
  data: [
  <?php for ($i = 0; $i < count($frmNiveauStat); $i++) {
  	echo("{x:'".$frmNiveauStat[$i]['niveau']."',y:".$frmNiveauStat[$i]['compte']."},");
  	
  } ?>
  ],
  xkey: 'x',
  ykeys: ['y'],
  labels: ['Nationalité']
}).on('click', function(i, row){
  console.log(i, row);
});

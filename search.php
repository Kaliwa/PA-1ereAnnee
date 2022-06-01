<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>
	<div class="form-group">
		<input class="form-control" id="search" type="text" name="search" placeholder="Recherche">
	</div>
	<div style="margin-top: 20px;">
		<div id="result-search" ></div>
	</div>


	<script>
		$(document).ready(function(){
			$('#search').keyup(function(){
				$('#result-search').html('');
				let info = $(this).val();
				//console.log(info);
				if(info != ""){
					$.ajax({
						type:"GET",
						url:"fonctions/recherche.php",
						data:'info=' + encodeURIComponent(info),
						success: function(data){
							if(data != ""){
								$('#result-search').append(data);
							}else{
								document.getElementById('result-search').innerHTML ="<div style='font-size:20px;text-align:center;margin-top:10px;'>Aucune info</div>"
							}
						}
						
					});
				}
			})
		});
	</script>
</body>
</html>
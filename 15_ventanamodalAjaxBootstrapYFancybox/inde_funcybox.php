<!-- -->
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Ventana Modal Bootstrap</title>
	<link rel="stylesheet" href="public/css/bootstrap.min.css">
	<link rel="stylesheet" href="public/css/funcybox/jquery.fancybox.css">
</head>
<body>
<!-- Modal -->
<div id="modal">
</div>
<!-- End Modal -->
	<div class="container">
		<div class="panel panel-primary">
		  <div class="panel-heading">
		    <h3 class="panel-title">Ventana Modal con FuncyBox</h3>
		  </div><!-- End panel-heading -->
		  <div class="panel-body">

		    <ul>
		    	<li>					
				<img src="public/images/rana.jpg" width="100px" height="100px">
		    	<a href="javascript:void(0);"></a>
		    	</li>

		    	<li><a href="javascript:void(0);" onclick="carga_ajax('12','modal','ajax_1.php');">Con Ajax</a></li>
		    	
		    </ul>
		  </div><!-- End panel-body -->
		</div><!-- End panel -->
	</div><!-- End Container -->
	
	<script src="public/js/jquery.js"></script>
	<script src="public/js/bootstrap.min.js"></script>
	<script src="public/js/funciones.js"></script>
</body>
</html>
<!-- -->
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Ventana Modal Bootstrap</title>
	<link rel="stylesheet" href="public/css/bootstrap.min.css">
</head>
<body>
<!-- Modal -->
<div class="modal fade" id="modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Modal Normal</h4>
      </div>
      <div class="modal-body">
        Texto #manosenelcodigo Normal
      </div>
      <div class="modal-footer">
		<h4>Pie de Pagina</h4>
      </div>
    </div>
  </div>  
</div>
<!-- End Modal -->
	<div class="container">
		<div class="panel panel-primary">
		  <div class="panel-heading">
		    <h3 class="panel-title">Ventana Modal con Bootstrap</h3>
		  </div><!-- End panel-heading -->
		  <div class="panel-body">
		    <ul>
		    	<li><a href="javascript:void(0);" data-toggle="modal" data-target="#modal">Normal</a></li>

		    	<li><a href="javascript:void(0);" data-toggle="modal" data-target="#modal" onclick="carga_ajax('12','modal','ajax_1.php');">Con Ajax</a></li>
		    	
		    </ul>
		  </div><!-- End panel-body -->
		</div><!-- End panel -->
	</div><!-- End Container -->
	
	<script src="public/js/jquery.js"></script>
	<script src="public/js/bootstrap.min.js"></script>
	<script src="public/js/funciones.js"></script>
</body>
</html>
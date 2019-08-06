<?php /* Template Name: Cust Form */?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
	<title></title>
</head>
<body>
	<form action="" method="POST" >
    <label>First Name:</label>
    <input type="text" name="fnames">
    <label>Last Name:</label>
   	<input type="text" name="lnames">
    <button type="button"  data-toggle="modal" data-target="#myModal__">Preview</button>
</form>





</body>

<div id="myModal__" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Preview</h4>
      </div>
      <div class="modal-body">
      	<?php 
print_r($_POST);
die();
      	$f_name = $_POST['fnames'];
      	$l_name = $_POST['lnames'];

      	?>
        <p>Fname: <?php echo $l_name; ?></p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button id="btn-export" class="btn btn-default" onclick="downloadDoc();">Download</button>
      </div>
    </div>

  </div>
</div>
</html>



 <button id="btn-export" class="btn btn-default" onclick="downloadDoc();">Download</button>
</body>

    <div id="source-html">
            
           
    </div>
<?php /* Template Name: Cust Form_ */?>
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
    <input type="text" name="fn" id="fn">
    <label>Last Name:</label>
   	<input type="text" name="ln" id="ln">
    <input type="button" name="btn" value="Submit" id="submit" data-toggle="modal" data-target="#confirm-submit" class="btn btn-default" >

</form>




</body>

<div class="modal fade" id="confirm-submit"  role="dialog" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
    <div id="source-html">
            <div class="modal-header">
                Preview
            </div>
            <div class="modal-body">
 
                <table class="table">
                    <tr>
                        <th>First Name</th>
                        <td id="fname"></td>
                    </tr>
                    <tr>
                        <th>Last Name</th>
                        <td id="lname"></td>
                    </tr>
                </table>

            </div>
</div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                <button id="btn-export" class="btn btn-default" onclick="downloadDoc();">Download</button>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">



     $('#submit').click(function() {
     $('#fname').html($('#fn').val());
     $('#lname').html($('#ln').val());
     });


/*Function to download Doc File*/

    function downloadDoc(){
       var header = "<html xmlns:o='urn:schemas-microsoft-com:office:office' "+
            "xmlns:w='urn:schemas-microsoft-com:office:word' "+
            "xmlns='http://www.w3.org/TR/REC-html40'>"+
            "<head><meta charset='utf-8'></head><body>";
       var footer = "</body></html>";
       var sourceHTML = header+document.getElementById("source-html").innerHTML+footer;
       var source = 'data:application/vnd.ms-word;charset=utf-8,' + encodeURIComponent(sourceHTML);
       var fileDownload = document.createElement("a");
       document.body.appendChild(fileDownload);
       fileDownload.href = source;
       fileDownload.download = 'document.doc';
       fileDownload.click();
       document.body.removeChild(fileDownload);
    }

/*End of exportHtml function*/
  </script>
</html>
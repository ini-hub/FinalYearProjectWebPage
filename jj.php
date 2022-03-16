<?php 
  $mysql_hostname = "localhost";
  $mysql_user = "root";
  $mysql_password = "";
  $mysql_database = "loan";
  $connect = mysql_connect($mysql_hostname, $mysql_user, $mysql_password) 
  or die("Something went wrong...");
  mysql_select_db($mysql_database, $connect) or die("Something went wrong...");


  if(isset($_POST['submit']))   
  {   
    $datess = $_POST['datess'];
    $control = $_POST['control'];  
    $payee = $_POST['payee'];                            
      if(!empty($datess) && !empty($control) && !empty($payee))
          {
                  mysql_query("INSERT INTO `sales`(`datess`, `control`, `payee`)
                   VALUES ('$datess', '$control', '$payee')");
          }
        else
          {
            //   echo "<script type='text/javascript'>alert('Please Dont Leave Blank Field.')</script>";
    
          }    
    }

    ?>

<html>
<body>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
</head>
  
  
<center>            

                    <form action="" method="post">
    <label>
      Date
      <input type="text" name="datess">
    </label>
    <label>
      Control Number
      <input type="number" name="control">
    </label>

   <label>
      Payee
      <input type="text" name="payee">
    </label>
   
</form>
  <!-- Trigger the modal with a button -->
 <div class="usman"> <button type="submit" name="btn_submit" class="btn btn-info" data-toggle="modal" data-target="#myModal" tabindex="14"><strong>Confirm</strong></button>
 
</div>

  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Confirmation</h5> 
        </div>
        <div class="modal-body"> 
       <h4><font color="red"> Are you sure ? </font></h4>
       
        </div>
        <div class="modal-footer">
          <button type="submit" name="submit" class="btn btn-success"  data-dismiss="modal">Save</button>
        </div>
      </div>
      
    </div>
  </div>
</div>
</body>
</html>
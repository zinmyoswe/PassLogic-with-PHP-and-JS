<?php

  include('config.php');

?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>Hello, world!</title>
    <style>
    
    </style>
  </head>
  <body>

  <div class="container mt-4">
  <div class="row">
  
    <div class="col-lg-3">
    <h5>PartA</h5>
   
<form action="#" method="post" enctype="multipart/form-data">
    <table class="table table-striped">
  <thead>
    <tr>
      <input type="hidden" name="login_id" value="123">
     
      <?php
      include('config.php');
      $sql = "select * from play limit 0,4";
      $run = mysqli_query($mysqli,$sql);
      while($row = mysqli_fetch_assoc($run)):

    ?>
    <td>
     <div class="custom-control custom-checkbox">
        <input type="checkbox" name="check_list[]" value="<?php echo $row['name'] ?>" class="custom-control-input" id="customCheck<?php echo $row['name'] ?>">
        <label class="custom-control-label" for="customCheck<?php echo $row['name'] ?>">
        <?php echo(rand(1,9)); ?></label>
        </div>
        </td>
        <?php endwhile; ?>
    </tr>
  </thead>
  <tbody>
    <tr>
    <?php
      include('config.php');
      $sql = "select * from play limit 4,4";
      $run = mysqli_query($mysqli,$sql);
      while($row = mysqli_fetch_assoc($run)):

    ?>

    <td>
     <div class="custom-control custom-checkbox">
        <input type="checkbox" name="check_list[]" value="<?php echo $row['name'] ?>" class="custom-control-input" id="customCheck<?php echo $row['name'] ?>">
        <label class="custom-control-label" for="customCheck<?php echo $row['name'] ?>">
        <?php echo(rand(1,9)); ?></label>
        </div>
        </td>
        <?php endwhile; ?>
    </tr>

    <tr>
    <?php
      include('config.php');
      $sql = "select * from play limit 8,4";
      $run = mysqli_query($mysqli,$sql);
      while($row = mysqli_fetch_assoc($run)):

    ?>

    <td>
     <div class="custom-control custom-checkbox">
        <input type="checkbox" name="check_list[]" value="<?php echo $row['name'] ?>" class="custom-control-input" id="customCheck<?php echo $row['name'] ?>">
        <label class="custom-control-label" for="customCheck<?php echo $row['name'] ?>">
        <?php echo(rand(1,9)); ?></label>
        </div>
        </td>
        <?php endwhile; ?>
    </tr>

    <tr>
    <?php
      include('config.php');
      $sql = "select * from play limit 12,4";
      $run = mysqli_query($mysqli,$sql);
      while($row = mysqli_fetch_assoc($run)):

    ?>

    <td>
     <div class="custom-control custom-checkbox">
        <input type="checkbox" name="check_list[]" value="<?php echo $row['name'] ?>" class="custom-control-input" id="customCheck<?php echo $row['name'] ?>">
        <label class="custom-control-label" for="customCheck<?php echo $row['name'] ?>">
        <?php echo(rand(1,9)); ?></label>
        </div>
        </td>
        <?php endwhile; ?>
    </tr>

   
  </tbody>
</table>
<input type="submit" name="submit" value="Submit" class="btn btn-outline-primary"/>
</form>
<?php  
if(isset($_POST['submit']))  
{  
    if(!empty($_POST['check_list'])) {
$checkbox1=$_POST['check_list']; 
$login_id = $_POST['login_id']; 
$chk="";  
foreach($checkbox1 as $chk1)  
   {  
      $chk .= $chk1.",";  
   }  
$in_ch=mysqli_query($mysqli,"insert into assign1(login_id,assign) values ('$login_id','$chk')");  
if($in_ch==1)  
   {  
      echo'<script>alert("Inserted Successfully")</script>';  
   } 
    
else  
   {  
      echo'<script>alert("Failed To Insert")</script>';  
   }  
}

   else{
    echo '
    <div class="alert alert-warning alert-dismissible fade show" role="alert">
  <strong>Warning!</strong> Please Select Atleast One Option..
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
    ';
    }
}  
?> 
    </div>
    </div>
  </div>


  <section>
    <div class="container mt-2">
      <div class="row">
        <div class="col-lg-12">

        <form class="form-inline">
  <div class="form-group mb-2">
    <label>Password : </label>
    
  </div>
  <div class="form-group mx-sm-3 mb-2">
    <label for="inputPassword2" class="sr-only">Password</label>
    <input type="password" class="form-control" id="inputPassword2" placeholder="Password">
  </div>
  <button type="submit" class="btn btn-primary mb-2 " style="margin-right: 0.2rem">Ok</button>
  <button type="submit" class="btn btn-outline-primary mb-2">Cancel</button>
</form>

        </div>
      </div>
    </div>
  </section>


  <section>

  <?php
    include('config.php');
    $results = array();
    $sql = "select * from assign1 where id='3'";
    
    $run = mysqli_query($mysqli,$sql);
    
    
      while($row = mysqli_fetch_assoc($run)) {
        $results[] = explode(',', $row['assign']);    
        
?>
    
      
<p><?php print_r($results) ?></p>



<?php echo $results[0][0]."".$results[0][1] ."".$results[0][2]?>

      <?php } ?>



  </section>
  

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>


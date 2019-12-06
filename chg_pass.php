<?php include("confs/config.php"); ?>
<!DOCTYPE html>
<html>
<head>
<title>PassLogic Login</title>
<meta charset="utf-8">
<meta name="copyright" content="Secured by PassLogic">
<meta name="viewport" content="width=device-width,user-scalable=no">
<link rel="stylesheet" href="files/html5reset-1.6.1.css" type="text/css">
<link rel="stylesheet" href="files/common.css" type="text/css">
<link rel="stylesheet" media="screen and (min-width: 641px)" href="files/pc.css">
<link rel="stylesheet" media="screen and (max-width: 640px) and (min-width: 0px)" href="files/sp.css">
<link rel="stylesheet" type="text/css" href="files/style.css">

<!--[if IE9 ]>
<link rel="stylesheet" media="screen,print" href="files/ie9.css?ent-2.0.0" type="text/css">
<![endif]-->

<script src="files/jquery.js" type="text/javascript"></script>
<script src="files/base.js" type="text/javascript"></script>
<script src="files/passlogy_demo.js" type="text/javascript"></script>


<!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Abel|Lato|Open+Sans&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

</head>
<style>
 
</style>
<body>



<div id="contents">

<h4>Change Password</h4>

<table id="randamNumbar">
<tr>
<td id="randamNumbarTableLeft">
  <table class="randamNumbarWidth">
  <tr>
    <?php
      include('confs/config.php');
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
      include('confs/config.php');
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
      include('confs/config.php');
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

    <tr>
    <?php
      include('confs/config.php');
      $sql = "select * from play limit 16,4";
      $run = mysqli_query($mysqli,$sql);
      while($row = mysqli_fetch_assoc($run)):

    ?>

    <td>
     <div class="custom-control custom-checkbox">
        <input type="checkbox" name="check_list[]" value="<?php echo $row['name'] ?>" class="custom-control-input" id="customCheck<?php echo $row['name'] ?>">
        <label class="custom-control-label " for="customCheck<?php echo $row['name'] ?>">
        <?php echo(rand(1,9)); ?></label>
        </div>
        </td>
        <?php endwhile; ?>
    </tr>
  </table>
</td>

<style type="text/css" media="screen">

</style>
<td id="randamNumbarTableCenter">
  <table class="randamNumbarWidth">
  <tr>
  <td><div class="randamNumberBoxRadius"><p id="16">
    16
  </p></div></td>
  <td><div class="randamNumberBoxRadius"><p id="17">17</p></div></td>
  <td><div class="randamNumberBoxRadius"><p id="18">18</p></div></td>
  <td><div class="randamNumberBoxRadius"><p id="19">19</p></div></td>
  </tr>
  <tr>
  <td><div class="randamNumberBoxRadius"><p id="20">20</p></div></td>
  <td><div class="randamNumberBoxRadius"><p id="21">21</p></div></td>
  <td><div class="randamNumberBoxRadius"><p id="22">22</p></div></td>
  <td><div class="randamNumberBoxRadius"><p id="23">23</p></div></td>
  </tr>
  <tr>
  <td><div class="randamNumberBoxRadius"><p id="24">24</p></div></td>
  <td><div class="randamNumberBoxRadius"><p id="25">25</p></div></td>
  <td><div class="randamNumberBoxRadius"><p id="26">26</p></div></td>
  <td><div class="randamNumberBoxRadius"><p id="27">27</p></div></td>
  </tr>
  <tr>
  <td><div class="randamNumberBoxRadius"><p id="28">28</p></div></td>
  <td><div class="randamNumberBoxRadius"><p id="29">29</p></div></td>
  <td><div class="randamNumberBoxRadius"><p id="30">30</p></div></td>
  <td><div class="randamNumberBoxRadius"><p id="31">31</p></div></td>
  </tr>
  </table>
</td>
<td id="randamNumbarTableRight">
  <table class="randamNumbarWidth">
  <tr>
  <td><div class="randamNumberBoxRadius"><p id="32">32</p></div></td>
  <td><div class="randamNumberBoxRadius"><p id="33">33</p></div></td>
  <td><div class="randamNumberBoxRadius"><p id="34">34</p></div></td>
  <td><div class="randamNumberBoxRadius"><p id="35">35</p></div></td>
  </tr>
  <tr>
  <td><div class="randamNumberBoxRadius"><p id="36">36</p></div></td>
  <td><div class="randamNumberBoxRadius"><p id="37">37</p></div></td>
  <td><div class="randamNumberBoxRadius"><p id="38">38</p></div></td>
  <td><div class="randamNumberBoxRadius"><p id="39">39</p></div></td>
  </tr>
  <tr>
  <td><div class="randamNumberBoxRadius"><p id="40">40</p></div></td>
  <td><div class="randamNumberBoxRadius"><p id="41">41</p></div></td>
  <td><div class="randamNumberBoxRadius"><p id="42">42</p></div></td>
  <td><div class="randamNumberBoxRadius"><p id="43">43</p></div></td>
  </tr>
  <tr>
  <td><div class="randamNumberBoxRadius"><p id="44">44</p></div></td>
  <td><div class="randamNumberBoxRadius"><p id="45">45</p></div></td>
  <td><div class="randamNumberBoxRadius"><p id="46">46</p></div></td>
  <td><div class="randamNumberBoxRadius"><p id="47">47</p></div></td>
  </tr>
  </table>
</td>
</tr>
<tr>
<td colspan="3"><div class="secured">Developed By <a href="https://github.com/zinmyoswe"><i class="fab fa-github"></i> ZINMYOSWE</a></div></td>
</tr>
</table>


<div id="formArea">
  <p class="passwordText">Enter your password.</p>
  <div id="info" style="color:red;"></div>
  <div id="formBox" class="clearfix">
    <div class="formBoxFloat"><input type="text" class="form-control" name="password" id="password" value="" autocomplete="off" onkeydown="if(event.keyCode == 13){login();}"></div>
    <div class="formBoxFloat"><button type="submit" class="btn btn-dark" onkeydown="if(event.keyCode == 13){login();}" onclick="login();" style="margin-left: 0.3rem;">Login</button></div>
  </div>
</div>





</div>

<div id="footer">
  <p class="copyrights">ZINMYOSWE @2019</p>
</div>


</body>
</html>

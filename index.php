<!DOCTYPE html>
<html>
  <head>
    <!-- Material Design Lite -->
    <script src="https://code.getmdl.io/1.3.0/material.min.js"></script>
    <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.indigo-pink.min.css">
    <!-- Material Design icon font -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
  </head>
<body  style="background-color:#E4E5E7">
<style>
body {
  padding: 20px;
  background: #fafafa;
  position: relative;
}
</style>
</head>
<body>


<?php
$url= 'http://stuxapitest.herokuapp.com/api/';
$options = array(
  'http' => array(
    'header'  => array(
                   'name: '.$_GET['name'],
                 ),
    'method'  => 'GET',
  ),
);
$context = stream_context_create($options);
$output = file_get_contents($url, false,$context);

$arr = json_decode($output,true);


?>

<center>
    <table class="mdl-data-table mdl-js-data-table mdl-shadow--3dp">
      <thead>
        <tr>
        <th>ID</th>
          <th class="mdl-data-table__cell--non-numeric">Service</th>
          <th>Phone No</th>
          <th>Date</th>
        </tr>
      </thead>
      <?php
    for($x=0;$x<count($arr);$x++)
    {
                ?>
      <tbody>
      
        <tr>
          <td ><center><?php echo $arr[$x]['id']; ?></center></td>
          <td><center><?php echo $arr[$x]['service']; ?></center></td>
          <td><center><?php echo $arr[$x]['ph_no']; ?></center></td>
          <td><center><?php echo $arr[$x]['date']; ?></center></td>
        </tr>
      </tbody>
        <?php
    
               }
                 ?>
    </table>




<!--
<table style="width:100%">
  <tr>
    <th>ID</th>
    <th>NAME</th> 
    <th>PHONE_NO</th>
    <th>STATUS</th>
  </tr>
    
	<br>
        <?php
	for($x=0;$x<count($arr);$x++)
	{
                ?>
	<tr>
         <td><?php echo $arr[$x]['id']; ?>
	
   	<td><?php echo $arr[$x]['name']; ?>
	<td><?php echo $arr[$x]['ph_no']; ?>
	<td><?php echo $arr[$x]['stats']; ?>
	</tr>
         <?php
	
               }
                 ?>
    
    <br>
</table>
-->
</body>
</html>

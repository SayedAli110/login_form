<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>CodePen - Task manager UI</title>
  <link rel="stylesheet" href="assets/style/style.css">
  <link rel="stylesheet" href="assets/fonts/css/all.css">
</head>
<body>
<!-- partial:index.partial.html -->
<div class="page">
  <div class="pageHeader">
    <div class="title">Dashboard</div>
    <div class="userPanel">
      <a href="" style="text-decoration:none;"><i class="fa fa-sign-out-alt"></i></a>
      <span class="username"></span>
    </div>
  </div>
</div>
<div style="height: 100px;"></div>
<?php
if(!empty($user)){
  echo "<h1> welcome ".$user->fullname."</h1>";
}
?>
<!-- partial -->
  </body>
</html>

<!DOCTYPE html>
<html>
<link rel="stylesheet" type="text/css" href="css/main.css">
<head>

<?php
$dir = "media/bg/";
$images = glob($dir."*.jpg");
$bg = $images[mt_rand(0, count($images) - 1)];
?>

<style>
body {
  background-color:black;
}
.center {
  display: block;
  margin-left: auto;
  margin-right: auto;
  color:black;
  /*width: 50%;*/
}
#bg {
    background-image:url("<?php echo $bg ;?>");
    background-size:500px;
    background-color:black;
}
</style>
</head>
<body>
	 <div class="dropdown">
		 <button class="dropbtn">>></button>
  <div class="dropdown-content">
    <a href="gallery">gallery</a>
    <a href="quote">quote</a>
    <a href="deadlabels">Dead Labels</a>
    <a href="glitch">glitch</a>
    <a href="doors">doors</a>
  </div>
</div>
<div><img src="<?php echo $bg ;?>" width="55%" class="center"/></div>
</body>
</html>

<!DOCTYPE html>
<html>
<meta charset=utf-8>
<meta name="viewport" content="width=device-width, initial-scale=1" />
<link rel="stylesheet" type="text/css" href="css/qts.css">
<style>
#instructions {
	position: absolute;
	left: 300px;
	top: 50px;
	color: pink;
	font-size: 26px;
	text-shadow: -1px 0 black, 0 1px black, 1px 0 black, 0 -1px black;
}
#slider {
     font-size: 26px;
     position: relative;
     top: 250px;
     width: 70%;
     margin: 0 auto;
    /*background-color:#99d6ff;*/
}
#bottombar {
    position: fixed;
    z-index: 100;
    bottom: 0;
    left: 0;
    width: 100%;
    color:white;
    padding:10px;
    display: inline;
}
#but {
    background:none;
    border:none;
    margin:0;
    padding:0;
    cursor: pointer;
	color: white;
}
</style>
<head>
<script>
		<?php
			function randlist($filename) {
				$lines = file($filename) ;
				shuffle($lines) ;
				return $lines ;
			}
			$rqt = randlist("media/qts.txt") ;
        ?>
    var js_rqt = <?php echo json_encode($rqt); ?>; 
</script>
</head>
<body>
    <div class="navbar">
	    <div class="dropdown">
	        <button class="dropbtn">^ 
                <i class="fa fa-caret-down"></i>
            </button>
            <div class="dropdown-content">
                <a href="/">home</a>
                <a href="gallery">gallery</a>
                <a href="quote">quote</a>
            </div>
        </div> 
    </div>
	<div><p id="quote"></p>
	</div>
	<div>
        <p id="slider"></p>
	</div>

<script src="js/qts.js">
</script>
<div id="bottombar">
<button id="but" onclick="prev()">prev</button>
<button id="but" onclick="next()">next</button>
</div>
</body>
</html>

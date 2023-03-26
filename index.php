<!DOCTYPE html>
<html>
<head>

<meta name="viewport" content="width=device-width, initial-scale=1">
<script src="/js/imgs_array.js"></script>
<style>

body {
  background-color:black;
  font-family: "Lato", sans-serif;
}

.sidenav {
  height: 100%;
  width: 260px;
  position: fixed;
  z-index: 1;
  top: 0;
  left: 0;
  background-color: black;
  overflow-x: hidden;
  padding-top: 20px;
}

.sidenav a {
  padding: 6px 8px 6px 16px;
  text-decoration: none;
  font-size: 25px;
  color: #818181;
  display: block;
}

.sidenav a:hover {
  color: #f1f1f1;
}

.main {
  margin-left: 160px; /* Same as the width of the sidenav */
  font-size: 28px; /* Increased text to enable scrolling */
  padding: 0px 10px;
}

#bg {
  width:55%;
}

@media screen and (max-height: 450px) {
  .sidenav {padding-top: 15px;}
  .sidenav a {font-size: 18px;}
}

@media only screen and (max-device-width: 480px) {
  .sidenav {
  height:100%;
  width:160px;
  }
}
</style>
</head>
<body onload=def()>

<div class="sidenav">
  <a href="/">/</a>
  <a href="/deadlabels">dead labels</a>
  <a href="/doors">doors</a>
</div>

<div class="main">

<h2>Sidebar</h2>
<div><img id="bg" src= width="55%"/></div>
</div>
   
</body>
</html> 


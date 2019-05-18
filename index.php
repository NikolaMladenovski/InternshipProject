
<?php include('header.php'); ?>
<html>
<title>ВЕБ АПЛИКАЦИЈА ЗА ОБЈАВУВАЊЕ РЕЗУЛТАТИ</title>
<meta charset="UTF-8">

<body id="myPage">


<!-- Navbar -->
<div class="w3-top">
  <div class="w3-bar w3-theme w3-top w3-left-align w3-large">
    <a class="w3-bar-item w3-button w3-right w3-hide-large w3-hover-white w3-large w3-theme-l1" href="javascript:void(0)" onclick="w3_open()"><i class="fa fa-bars"></i></a>
	<a href="login.php" class="w3-bar-item w3-button w3-hide-small w3-hide-medium w3-hover-white">Најави се</a>
  </div>
</div>

<!-- Sidebar -->
<nav class="w3-sidebar w3-bar-block w3-collapse w3-large w3-theme-l5 w3-animate-left" style="z-index:3;width:250px;margin-top:0px;" id="mySidebar">
  <a href="javascript:void(0)" onclick="w3_close()" class="w3-right w3-xlarge w3-padding-large w3-hover-black w3-hide-large" title="Close Menu">
    <i class="fa fa-remove"></i>
  </a>
  <h4 class="w3-bar-item"><b>Мени</b></h4>
  <a class="w3-bar-item w3-button w3-hover-black" href="index.php">Почетна</a>
  <a class="w3-bar-item w3-button w3-hover-black" href="rezultati.php">Резултати</a>
</nav>



<div style="position: relative; margin: 43px 100px;">
    <a id="portal-logo" href="http://feit.ukim.edu.mk">
    <img src="http://feit.ukim.edu.mk/logoSchools.gif"></a>
</div>


<div style="position: relative; margin: 70px 520px;">
<h1 class="sansserif"><b>ФЕИТ ТЕСТОВИ</b></h1>;
<img src="download.png" alt="testovi" style="width:304px;height:228px;">
</div>


<!--
<div class="w3-row">
<div class="w3-third" style="text-align:center">

  
</div>
<div class="w3-third" style="text-align:center">
<div style="margin:0 auto;width:50%" class="jquery-calendar"></div>
</div>
</div>
</br>
-->



</body>
</html>
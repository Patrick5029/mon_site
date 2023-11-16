
<style>


.topnav {
  overflow: hidden;
  background-color: #000080;
}

.topnav a {
  float: left;
  display: block;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

.topnav a:hover {
  background-color: #0066ff;
  color: black;
}

.topnav a.active {
  background-color: #0066ff;
  color: white;
}

.topnav .icon {
  display: none;
}

@media screen and (max-width: 600px) {
  .topnav a:not(:first-child) {display: none;}
  .topnav a.icon {
    float: right;
    display: block;
  }
}

@media screen and (max-width: 600px) {
  .topnav.responsive {position: relative;}
  .topnav.responsive .icon {
    position: absolute;
    right: 0;
    top: 0;
  }
  .topnav.responsive a {
    float: none;
    display: block;
    text-align: left;
  }
}
</style>
<script>
function myFunction() {
  var x = document.getElementById("myTopnav");
  if (x.className === "topnav") {
    x.className += " responsive";
  } else {
    x.className = "topnav";
  }
}
</script>
<nav>

<div class="topnav" id="myTopnav">
	<a href="index.php"><i class="fa fa-fw fa-home"></i> Accueil</a>
  	<a href="#"><i class="fa fa-fw fa-user"></i> Login</a>
  	<a href="#"><i class="fa fa-sign-in" aria-hidden="true"></i> Adhérer</a>
  	<a href="#news"><i class="fa fa-newspaper-o" aria-hidden="true"></i> Actualités </a>
  	<a href="#"><i class="fa fa-fw fa-envelope"></i> Contacts</a> 	  
	<a style="float:right" href="#about"><i class="fa fa-question-circle" aria-hidden="true"></i> A propos</a>
 	<a href="javascript:void(0);" class="icon" onclick="myFunction()"><i class="fa fa-bars"></i></a>
</div>





</nav>



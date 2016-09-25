<?php $curpage = basename ($_SERVER['PHP_SELF']);
?>

<!-- The basename() function returns the filename from a path -->
<div id='cssmenu'>
<ul>
<li <?php if($curpage == 'index.php') {echo 'class="active"'; } ?>><a href="index.php" >Home</a></li>
<li <?php if($curpage == 'purpose.php') {echo 'class="active"'; } ?>><a href="purpose.php" >Purpose</a></li>
<li <?php if($curpage == 'about-us.php') {echo 'class="active"'; } ?>><a href="about-us.php" >About Us</a></li>



</ul>
</div>
<!-- using the curpage variable, i can tell the code to establish an active class on the menu for whichever current page 
which will then echo out the active class-->
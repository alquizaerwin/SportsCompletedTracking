<?php
$page_title = htmlspecialchars('Navbar Toggler');
echo "<title>".$page_title."</title>";
?>
<?php include_once "header.php"; ?>
<section class="app header-fixed sidebar-fixed aside-menu-fixed sidebar-lg-show shadow-lg">
<nav class="navbar navbar-expand-xl navbar fixed-top shadow-lg">
  <button class="navbar-toggler" class="navbar-toggler-icon" type="button" data-toggle="collapse" data-target="#navbarsList01" aria-controls="navbarsList01" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
<a class="navbar-brand" href="#">Baller ID Apps</a>
  <div class="collapse navbar-collapse" id="navbarsList01">
   <ul class="navbar-nav mr-auto">
      <li class="nav-item text-center mt-1" style="background-color: #4285f4; border-radius: 5px;"><a href="#" class="nav-link">Games</a></li>
      <li class="nav-item text-center mt-1" style="background-color: #fafafa; border-radius: 5x;"><a href="#" class="nav-link">Teams</a></li>
      <li class="nav-item text-center mt-1" style="background-color: #db4437; border-radius: 5px;"><a href="#" class="nav-link">Players</a></li>
      <li class="nav-item text-center mt-1" style="background-color: #f4b400; border-radius: 5px;"><a href="#" class="nav-link">Login</a></li>      
   </ul>
  </div>
</nav>
</section>
<?php include_once "footer.php"; ?>
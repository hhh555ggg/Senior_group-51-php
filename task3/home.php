<?php
$pageName = 'home ';
include "layouts/header.php" ;
include "data.php";
?>




  <h1> Home </h1>
  <p> welcome in Home page </p>





<?php foreach($users as $user):?>
<div class="card" style="width: 18rem;background-color:<?=$user['clr'];?>;">
  <div class="card-body">
    <h5 class="card-title"><?= $user['name']?></h5>
    <h6 class="card-subtitle mb-2 text-body-secondary<?= $user['age']?> </h6>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="card-link">Card link</a>
    <a href="#" class="card-link">Another link</a>
   
  </div>
</div>
<?php endforeach;?>
</body>
</html>

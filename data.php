<?php

  require ("function.php");

  //lisame kontrolli, kas on kasutaja sisse loginud. kui ei ole, siis
  //suunata login lehele

//kas ?logout on aadressireal

if (!isset ($_GET["logout"])) {
  session_destroy();

  header ("Location: login4_tund.php");
}


?>

<h1> Data </h1>

<p>Tere tulemast! <?=$_SESSION ["email"];?> </p>

<a href = "?logout=1"> Logi välja    </a>

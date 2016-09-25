<?php 
$directory="./"; 
foreach (glob($directory.'*') as $file) { 
echo "File: <a href=\"".$directory.$file."\">".$file."</a><br />Ultima modifica: ".  date( "F d Y h:i:s", getlastmod() ). "<br /> Dimensione: ".filesize($directory.$file)."<br /><br />"; 
} 
?>
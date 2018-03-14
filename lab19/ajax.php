<?php
$pattern=strtolower($_GET['pattern']);
$words=array("Taladro", "Destornillador", "Martillo", "Segueta", "Serrucho", "Alicate", "Pinzas", "Llave Allen");
$response="";
$size=0;
for($i=0; $i<count($words); $i++)
{
   $pos=stripos(strtolower($words[$i]),$pattern);
   if(!($pos===false))
   {
     $size++;
     $word=$words[$i];
     $response.="<option value=\"$word\">$word</option>";
   }
}
if($size>0)
  echo "<select class='form-control' id=\"list\" size=$size onclick=\"selectValue()\">$response</select>";
?>

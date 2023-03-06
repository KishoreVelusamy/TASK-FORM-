<?php

$alpha=array("IT"=>"30K","CORE"=>"10K","SALES"=>"20K","BUSINESS"=>"40K");
$beta=array("IT"=>"50K","BUSINESS"=>"NP");

array_splice($alpha,0,2,$beta);
print_r($alpha);


?>
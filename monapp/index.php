<?php 
require_once "vendor/autoload.php";

//require_once "classses/personne.php";
//autre solution :
/*spl_autoload_register(function($name){
    require_once "classses/$name.php"; 
});
$personne= new person("manel",220);
$personne->afficher();
*/
new App\article\image;
new App\produit\image;
use Carbon\Carbon;
printf("Right now is %s", Carbon::now()->toDateTimeString());
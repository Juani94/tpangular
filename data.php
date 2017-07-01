<?php
header("Access-Control-Allow-Origin: *");
$data = array(array(
	"foto"=>"MAXIMUS" ,
	"titulo"=>"Maximus Festival" ,
	"banda"=>"varios",
	"tipo"=>"Festival",
	"lugar"=>"Tecnopolis",
	"fecha"=>"20/05/2018",
	"descripcion"=>("Festival de bandas de metal en argentina" )
), array(
	"foto"=>"tarja-turunen" ,
	"titulo"=>"Tarja en argentina",
	"banda"=>"Tarja Turunen",
	"tipo"=>"Concierto",
	"lugar"=>"Luna Park",
	"fecha"=>"25/11/2017",
	"descripcion"=>"askdfhkasdjfhk dsfkh asdklf askldklasdlfhklasdj"
));
print_r(json_encode($data));
?>

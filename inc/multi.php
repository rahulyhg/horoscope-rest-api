<?php 
$signs [] = [
    'title' => 'Väduren',
    'start' => '0321',
    'end' => '0419',
];

$signs [] = [
    'title' => 'Oxen',
    'start' => '0420',
    'end' => '0520',
];

$signs [] = [
    'title' => 'Tvillingen',
    'start' => '0521',
    'end' => '0621',
];

$signs [] = [
    'title' => 'Kräftan',
    'start' => '0622',
    'end' => '0722',
]; 

$signs [] = [
    'title' => 'Lejonet',
    'start' => '0723',
    'end' => '0822',
];

$signs [] = [
    'title' => 'Jungfrun',
    'start' => '0823',
    'end' => '0922',
];

$signs [] = [
    'title' => 'Vågen',
    'start' => '0923',
    'end' => '1022',
];

$signs [] = [
    'title' => 'Skorpionen',
    'start' => '1023',
    'end' => '1121',
];

$signs [] = [
    'title' => 'Skytten',
    'start' => '1122',
    'end' => '1221',
];

$signs [] = [
    'title' => 'Stenbocken',
    'start' => '1222',
    'end' => '0119',
];

$signs [] = [
    'title' => 'Vattumannen',
    'start' => '0120',
    'end' => '0218',
];

$signs [] = [
    'title' => 'Fiskarna',
    'start' => '0219',
    'end' => '0320',
];

function getSign($signs, $date, $fourLastNr){
    foreach($signs as $sign){
        if($fourLastNr >= $sign['start'] && $fourLastNr <= $sign['end']){
           $horoscope = $sign['title'];
            
           return $horoscope;
           
        } 
    }  
}

?>
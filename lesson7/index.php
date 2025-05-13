<?php


$arrays = [
    [1 , 2 , 3],
    [1 , 2 , 3],
    [1 , 2 , 3],
];

for ($i = 1; $i < 4; $i++) {
    for($j = 1; $j < 4; $j++){
        echo "Array: $i  Element: $j  <br>";
    }
}


$grades = array(
    "Math"      =>"2",
    "Art"       =>"5",
    "History"   =>"4",
    "Music"     =>"4"
);


echo "<br>";
echo "Lisi has" . $garde['Math'] ." in math";
echo "<br>";
echo "Lisi has" . $garde['Art'] ." in math";
echo "<br>";
echo "Lisi has" . $garde['History'] ." in math";
echo "<br>";
echo "Lisi has" . $garde['Music'] ." in math";
echo "<br>";


$numbers = [1,2,3,4,5,6,7];

foreach($grades  as $key  =>  $value){
    echo "lisi has" . $value . " " . $key . "<br>";
}
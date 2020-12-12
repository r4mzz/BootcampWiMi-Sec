<?php 
//menampilkan output 
echo "ini data";

//looping data
//for
for ($i=0; $i < 10; $i++) { 
    echo "$i<br>";
}
//while
$a = 0;
while ($a <= 10) {
    echo "$a<br>";
}
//foreach 
$data = array("anggur", "pepaya", "durian", "melon", "semangka");
foreach($data as $loop){
    echo "$loop<br>";
}

//pengkondisian 
$data = array("anggur", "pepaya", "durian", "melon", "semangka");
if($data[2] == "mangga"){
    echo "1. ya benar itu mangga";
}elseif($data[2] == "pepaya"){
    echo "2. ya benar itu pepaya";
}else{
    echo "tidak ditemukan";
}


?>
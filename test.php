<pre>
<?php
include 'libs/load.php';
// print("server\n");
// print_r($_SERVER);
// print("GET\n");
// print_r($_GET);
// print("POST\n");
// print_r($_POST);
// print("FILE\n");
// print_r($_FILESf);

// if(signup("ragunath", "password", "ragu@gmail.com", "1222332"))
// {
//     echo "Success";
// }
// else{
//     echo "FAIL";
// }

$mic1 = new Mic("Roda");
$mic2 = new Mic("HyperX");


// print($mic1->color);


// $mic1->light = "red";
$mic1->setLight("green");

// print($mic1->light);


$mic1->setModel("hyper cast");
print("\n".$mic1->getModelproxy());


print("\n".$mic1->getbrand());
print("\n".$mic2->getbrand());

?>
 </pre>
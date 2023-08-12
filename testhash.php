<?php

// $pass = isset($_GET['pass']) ? $_GET['pass'] : "Randompassword";

// print(md5($pass));


// $data = "ragunath";

// foreach(hash_algos() as $v){
//     $r = hash($v,$data,false);
//     printf("%-12s %3d %s\n", $v, strlen($r), $r);
// }

$options = [
    'cost' => 9,
];
echo password_hash("rasmuslerdorf", PASSWORD_BCRYPT, $options)."\n";
$c = password_hash("rasmuslerdorf", PASSWORD_BCRYPT, $options);
if(password_verify("rasmuslerdorf",$c))
{
    print("Password correct\n");
}
else{
    print("Wrong Password\n");
}

<pre>
<?php
include 'libs/load.php';
print("server\n");
print_r($_SERVER);
print("GET\n");
print_r($_GET);
print("POST\n");
print_r($_POST);
print("FILE\n");
print_r($_FILES);

print("SESSION\n");
print_r($_SESSION);

if(isset($_GET['clear']))
{
    printf("Clearing....\n");
    Session::unset();
}

if (Session::isset('a')) {
    printf("A already exists...Value:".Session::get('a')."\n");
}else{
    Session::set('a',time());
    printf("Assigning new value...Value:".Session::get('a')."\n");;
}
if(isset($_GET['destroy']))
{
    printf("Destroying...\n");
    Session::destroy();
}
?>
</pre>
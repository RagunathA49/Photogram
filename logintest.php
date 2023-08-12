<?php
include 'libs/load.php';

$user = "fobo1";
$pass = "fobo1";
$result = null;
if(isset($_GET['logout']))
{
    Session::destroy();
    die("Session Destroyed, <a href='logintest.php'>Login </a>");
    
}
if(Session::get('is_loggedin'))
{
    $username = Session::get('session_username');
    $userobj=new User($username);
    print("Welcome back ".$userobj->getFirstname().$userobj->getLastname());
    $userobj->setBio("Making new things....");
    print("<br>".$userobj->getBio());
}else
{
    print("No Session Found.trying to login now <br>");
    $result = User::login($user, $pass);
    if($result){
        $userobj= new User($user);
        echo "Login Success".$userobj->getUsername();
        Session::set('is_loggedin',true);
        Session::set('session_username', $result);
    }
    else{
        echo "Login Failed <br>";
    }
}
echo <<<EOL
<br><br><a href="logintest.php?logout">Logout</a>
EOL;
?>
<br>


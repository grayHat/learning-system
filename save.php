<?PHP
require_once("./include/membersite_config.php");
if(!$fgmembersite->CheckLogin())
{
    $fgmembersite->RedirectToURL("index.php");
    exit;
}
$username= $_POST['username'];
$name= $_POST['name'];
$email= $_POST['email'];
if($fgmembersite->ChangeSettings($username, $name, $email))
{
     $fgmembersite->RedirectToURL("changed-set.php");
}

?>
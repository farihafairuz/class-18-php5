<?php
require_once 'vendor/autoload.php';
use App\classes\FullName;
//echo '<pre/>';
//print_r($_GET);
/* if we pass a value that will be checked by the isset function*/
//echo '<pre>';
//print_r($_POST);
if (isset($_GET['pages']))
{
    if ($_GET['pages']== 'full-name')
    {
        include 'pages/full-name.php';
    }
}
elseif ( isset($_POST['btn']))
{
    $fullName= new FullName($_POST);
    $result= $fullName->getFullName();
    include 'pages/full-name.php';


}


<?php 

include('include/config.php'); 

if(isset($_POST['action']) && $_POST['action']=='Login')
{
	$admin->login();
}

if(isset($_POST['action']) && $_POST['action']=='AddCarAccessories')
{
	$admin->AddCarAccessories();
}

if(isset($_POST['action']) && $_POST['action']=='UpdateCarAccessories')
{
	$admin->UpdateCarAccessories();
}

if(isset($_POST['action']) && $_POST['action']=='AddAccessories')
{
	$admin->AddAccessories();
}

if(isset($_POST['action']) && $_POST['action']=='UpdateAccessories')
{
	$admin->UpdateAccessories();
}

if(isset($_POST['action']) && $_POST['action']=='AddPromise')
{
	$admin->AddPromise();
}

if(isset($_POST['action']) && $_POST['action']=='UpdatePromise')
{
	$admin->UpdatePromise();
}

if(isset($_POST['action']) && $_POST['action']=='DeletePromiseImage')
{
	$admin->DeletePromiseImage();
}

if(isset($_POST['action']) && $_POST['action']=='DeleteAccessoryImage')
{
	$admin->DeleteAccessoryImage();
}





?>
<?php
include('include/config.php');

if(isset($_POST['action']) && $_POST['action']=='booknow')
{
	$admin->booknow();
}
if(isset($_POST['action']) && $_POST['action']=='testdrive')
{
	$admin->testdrive();
}
if(isset($_POST['action']) && $_POST['action']=='roadside')
{
	$admin->roadside();
}
if(isset($_POST['action']) && $_POST['action']=='enquire_now')
{
	$admin->enquire_now();
}

?>
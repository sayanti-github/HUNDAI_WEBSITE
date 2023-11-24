<?php

class admin extends DB{
	
	
	function login()
	{
		$email = $this->escape($_POST['email']);
		$password  = $this->escape($_POST['password']);
		$page = $this->escape($_POST['page']);
		$select = "select * from `hy_admin` where `email`='".$email."' AND `password`='".md5($password)."'";
		$rows = $this->num_rows($select);
		if($rows>0)
		{
			$fetch = $this->get_row($select);
			$_SESSION['console'] = $fetch;
			$this->locate('index');
		}else{
			$_SESSION['error'] = "Invalid Credentials";
			$this->locate($page);
		}
	}
	
	function locate($page)
	{
		header('location:'.$page);
		die;
	}
	
	
	function is_login()
	{
		if(isset($_SESSION['console']))
		{
			$this->locate('index');
		}
	}
	
	function is_not_login()
	{
		if(!isset($_SESSION['console']))
		{
			$this->locate('login');
		}
	}
	
	function logout()
	{
		unset($_SESSION['console']);
		$this->locate('login');
	}
	
	function get_single_result($table,$id,$value,$page)
	{
		$select = $this->get_row("Select * from `$table` where `$id`='".$value."'");
		if(is_array($select) && !empty($select)){
		return $select;
		}else{
			$_SESSION['error'] = "Not Found";
			$this->locate($page);	
		}
	}
	
	function get_single_field($field,$table,$id,$value)
	{
		$select = $this->get_row("Select `$field` from `$table` where `$id`='".$value."'");
		return $select[$field];
	}
	
	function AddCarAccessories()
	{
		$title = $this->escape($_POST['title']);
		$page  = $this->escape($_POST['page']);
		$file  = $_FILES['file']['name'];
		if($title=='')
		{
			$_SESSION['error'] = "Please Enter Title";
			$this->locate($page);
		}
		if($file=='')
		{
			$_SESSION['error'] = "Please Select Photo";
			$this->locate($page);
		}
		
		$target_dir = "../uploads/";
		$target_file = $target_dir . basename($_FILES["file"]["name"]);
		$uploadOk = 1;
		$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
		$array = array('png','jpg','jpeg');
		
		if(!in_array($imageFileType,$array))
		{
			$_SESSION['error'] = "Please Select Valid Photo";
			$this->locate($page);
		}
		move_uploaded_file($_FILES['file']['tmp_name'],$target_file);
		
		$insert = $this->insert("Insert Into `hy_accessories_cars` SET `car_name`='".$title."',`image`='".$file."',`added_date`='".date('Y-m-d H:i:s')."'");
		if($insert)
		{
			$_SESSION['success'] = "Added Successfully";
			$this->locate($page);
		}
	}
	
	
	function UpdateCarAccessories()
	{
		$title = $this->escape($_POST['title']);
		$page  = $this->escape($_POST['page']);
		$file  = $_FILES['file']['name'];
		if($title=='')
		{
			$_SESSION['error'] = "Please Enter Title";
			$this->locate($page);
		}
		if($file!='')
		{
		$target_dir = "../uploads/";
		$target_file = $target_dir . basename($_FILES["file"]["name"]);
		$uploadOk = 1;
		$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
		$array = array('png','jpg','jpeg');
		
		if(!in_array($imageFileType,$array))
		{
			$_SESSION['error'] = "Please Select Valid Photo";
			$this->locate($page);
		}
		move_uploaded_file($_FILES['file']['tmp_name'],$target_file);
		}else{
			$file = $_POST['filename'];
		}
		$update = $this->update("update `hy_accessories_cars` SET `car_name`='".$title."',`image`='".$file."',`updated_date`='".date('Y-m-d H:i:s')."'");
		if($update)
		{
			$_SESSION['success'] = "Updated Successfully";
			$this->locate($page);
		}
	}
	
	
	function AddAccessories()
	{
		$title = $this->escape($_POST['title']);
		$car_id = $this->escape($_POST['car_id']);
		$type = $this->escape($_POST['type']);
		$page  = $this->escape($_POST['page']);
		$price  = $this->escape($_POST['price']);
		$description  = $this->escape($_POST['description']);
		$file  = $_FILES['file']['name'];
		if($title=='')
		{
			$_SESSION['error'] = "Please Enter Title";
			$this->locate($page);
		}
		if($file=='')
		{
			$_SESSION['error'] = "Please Select Photo";
			$this->locate($page);
		}
		
		$target_dir = "../uploads/accessories/";
		$target_file = $target_dir . basename($_FILES["file"]["name"]);
		$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
		$array = array('png','jpg','jpeg');
		
		if(!in_array($imageFileType,$array))
		{
			$_SESSION['error'] = "Please Select Valid Photo";
			$this->locate($page);
		}
		move_uploaded_file($_FILES['file']['tmp_name'],$target_file);
		
		$insert = $this->insert("Insert Into `hy_accessories_list` SET `title`='".$title."',`image`='".$file."',`description`='".$description."',`price`='".$price."',`car_id`='".$car_id."',`type`='".$type."',`added_date`='".date('Y-m-d H:i:s')."'");
		$last_id = $this->lastid();
		if(is_array($_FILES["files"]["name"]) && !empty($_FILES["files"]["name"])){
		$target_dir = "../uploads/accessories/";
		foreach($_FILES["files"]["name"] as $key=>$value){
				$image = $_FILES["files"]["name"][$key];
		$target_file = $target_dir . basename($_FILES["files"]["name"][$key]);
		
		$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
		$array = array('png','jpg','jpeg');
		
		if(in_array($imageFileType,$array))
		{
			move_uploaded_file($_FILES['files']['tmp_name'][$key],$target_file);
			$this->insert("Insert Into `hy_accessories_images` SET `accessory_id`='".$last_id."',`image`='".$image."',`added_date`='".date('Y-m-d H:i:s')."'");
		}
		
		}
		}
		if($insert)
		{
			$_SESSION['success'] = "Added Successfully";
			$this->locate($page);
		}
	}
	
	
	function UpdateAccessories()
	{
		$title = $this->escape($_POST['title']);
		$id  = $this->escape($_POST['id']);
		$type = $this->escape($_POST['type']);
		$page  = $this->escape($_POST['page']);
		$price  = $this->escape($_POST['price']);
		$description  = $this->escape($_POST['description']);
		$file  = $_FILES['file']['name'];
		if($title=='')
		{
			$_SESSION['error'] = "Please Enter Title";
			$this->locate($page);
		}
		if($file!='')
		{
		$target_dir = "../uploads/accessories/";
		$target_file = $target_dir . basename($_FILES["file"]["name"]);
		$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
		$array = array('png','jpg','jpeg');
		
		if(!in_array($imageFileType,$array))
		{
			$_SESSION['error'] = "Please Select Valid Photo";
			$this->locate($page);
		}
		move_uploaded_file($_FILES['file']['tmp_name'],$target_file);
		}else{
			$file = $this->escape($_POST['filename']);
		}
		$insert = $this->update("Update `hy_accessories_list` SET `title`='".$title."',`description`='".$description."',`price`='".$price."',`image`='".$file."',`type`='".$type."',`updated_date`='".date('Y-m-d H:i:s')."' where `id`='".$id."'");
		if(is_array($_FILES["files"]["name"]) && !empty($_FILES["files"]["name"])){
		$target_dir = "../uploads/accessories/";
		foreach($_FILES["files"]["name"] as $key=>$value){
				$image = $_FILES["files"]["name"][$key];
		$target_file = $target_dir . basename($_FILES["files"]["name"][$key]);
		
		$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
		$array = array('png','jpg','jpeg');
		
		if(in_array($imageFileType,$array))
		{
			move_uploaded_file($_FILES['files']['tmp_name'][$key],$target_file);
			$this->insert("Insert Into `hy_accessories_images` SET `accessory_id`='".$id."',`image`='".$image."',`added_date`='".date('Y-m-d H:i:s')."'");
		}
		
		}
		}
		if($insert)
		{
			$_SESSION['success'] = "Updated Successfully";
			$this->locate($page);
		}
	}
	
	function AddPromise()
	{
		$title = $this->escape($_POST['title']);
		$price = $this->escape($_POST['price']);
		$manufacture = $this->escape($_POST['manufacture']);
		$owner = $this->escape($_POST['owner']);
		$color = $this->escape($_POST['color']);
		$kms = $this->escape($_POST['kms']);
		$page  = $this->escape($_POST['page']);
		$location  = $this->escape($_POST['location']);
		$file  = count($_FILES['file']['name']);
		
		if($title=='')
		{
			$_SESSION['error'] = "Please Enter Title";
			$this->locate($page);
		}
		if($price=='')
		{
			$_SESSION['error'] = "Please Enter Price";
			$this->locate($page);
		}
		if($manufacture=='')
		{
			$_SESSION['error'] = "Please Enter Manufacture";
			$this->locate($page);
		}
		if($owner=='')
		{
			$_SESSION['error'] = "Please Enter Owner Field";
			$this->locate($page);
		}
		
		if($file==0)
		{
			$_SESSION['error'] = "Please Select Photos";
			$this->locate($page);
		}
		
		$target_dir = "../promise/";
		$insert = $this->insert("Insert Into `hy_promise` SET `title`='".$title."',`owner`='".$owner."',`price`='".$price."',`kms`='".$kms."',`color`='".$color."',`manufacture`='".$manufacture."',`location`='".$location."',`added_date`='".date('Y-m-d H:i:s')."'");
		if($insert)
		{
			$last_id = $this->lastid();
			foreach($_FILES["file"]["name"] as $key=>$value){
				$image = $_FILES["file"]["name"][$key];
		$target_file = $target_dir . basename($_FILES["file"]["name"][$key]);
		
		$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
		$array = array('png','jpg','jpeg');
		
		if(in_array($imageFileType,$array))
		{
			move_uploaded_file($_FILES['file']['tmp_name'][$key],$target_file);
			$this->insert("Insert Into `hy_promise_image` SET `promise_id`='".$last_id."',`image`='".$image."',`added_date`='".date('Y-m-d H:i:s')."'");
		}
		
		}
			$_SESSION['success'] = "Added Successfully";
			$this->locate($page);
		}
	}
	
	function UpdatePromise()
	{
		$id = $this->escape($_POST['id']);
		$title = $this->escape($_POST['title']);
		$price = $this->escape($_POST['price']);
		$location = $this->escape($_POST['location']);
		$manufacture = $this->escape($_POST['manufacture']);
		$owner = $this->escape($_POST['owner']);
		$color = $this->escape($_POST['color']);
		$kms = $this->escape($_POST['kms']);
		$page  = $this->escape($_POST['page']);
		$file  = count($_FILES['file']['name']);
		
		if($title=='')
		{
			$_SESSION['error'] = "Please Enter Title";
			$this->locate($page);
		}
		if($price=='')
		{
			$_SESSION['error'] = "Please Enter Price";
			$this->locate($page);
		}
		if($manufacture=='')
		{
			$_SESSION['error'] = "Please Enter Manufacture";
			$this->locate($page);
		}
		if($owner=='')
		{
			$_SESSION['error'] = "Please Enter Owner Field";
			$this->locate($page);
		}
		
		
		
		$target_dir = "../promise/";
		$insert = $this->update("update `hy_promise` SET `title`='".$title."',`owner`='".$owner."',`price`='".$price."',`kms`='".$kms."',`color`='".$color."',`manufacture`='".$manufacture."',`location`='".$location."',`updated_date`='".date('Y-m-d H:i:s')."' where `id`='".$id."'");
		if($insert)
		{
			$last_id = $id;
			foreach($_FILES["file"]["name"] as $key=>$value){
				$image = $_FILES["file"]["name"][$key];
		$target_file = $target_dir . basename($_FILES["file"]["name"][$key]);
		
		$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
		$array = array('png','jpg','jpeg');
		
		if(in_array($imageFileType,$array))
		{
			move_uploaded_file($_FILES['file']['tmp_name'][$key],$target_file);
			$this->insert("Insert Into `hy_promise_image` SET `promise_id`='".$last_id."',`image`='".$image."',`added_date`='".date('Y-m-d H:i:s')."'");
		}
		
		}
			$_SESSION['success'] = "Updated Successfully";
			$this->locate($page);
		}
	}
	
	function DeletePromiseImage()
	{
		$id = $_POST['id'];
		$this->delete("delete from `hy_promise_image` where `id`='".$id."'");
		$_SESSION['success'] = "Deleted Successfully";
	}
	
	function DeleteAccessoryImage()
	{
		$id = $_POST['id'];
		$this->delete("delete from `hy_accessories_images` where `id`='".$id."'");
		$_SESSION['success'] = "Deleted Successfully";
	}
	
	
}

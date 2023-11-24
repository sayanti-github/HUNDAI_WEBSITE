function deleteimage(id)
{
	var check = confirm("Want to delete it!");
	if(check==true)
	{
		$.ajax({
			url:'process.php',
			data:'id='+id+'&action=DeletePromiseImage',
			type:'POST',
			success:function(resp){
				window.location.reload();
			}
		});
	}
}
function deleteaccessoryimage(id)
{
	var check = confirm("Want to delete it!");
	if(check==true)
	{
		$.ajax({
			url:'process.php',
			data:'id='+id+'&action=DeleteAccessoryImage',
			type:'POST',
			success:function(resp){
				window.location.reload();
			}
		});
	}
}
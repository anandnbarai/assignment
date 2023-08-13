Q-1 Create API for Registration & Login Page. 

Ans:
    API for Registration
    
	$register= $this->select
	("users",array("email"=>$_REQUEST['email']));
	echo json_encode($register);

		<script>

		function check(e)
		{
		     $.ajax({
			type:"post",data:{"email":e.value},
			url:"the path of the api",
			success:function(response)
			{
				console.log(response);
				objectdata = JSON.parse(response)
				console.log(objectdata.code);	
			}
			})
		}
		</script>

		
	API for Login
	
	$login= $this->insert("users");
	echo json_encode($login);


Q-2  Create Web Service for your MVC Project.
        Create API for Image Uploading. 

Ans:
		API for Image Uploading
	
	$imageupload= $this->insert("image");
	echo json_encode($imageupload);


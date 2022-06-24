<!DOCTYPE html>
<html>
  <head>
    <title></title>

    <style>
      * {
      box-sizing: border-box;
      }
      body {
      display: flex;
      justify-content: center;
      align-items: center;
      padding: 20px;
      }
      h1 {
      margin-top: 0;
      color:#ffbf00;
      font-weight: 500;
      }
      form {
      position: relative;
      width: 40%;
      border-radius: 25px;
      }
      button {
      width: 100%;
      padding: 18px;
      margin-top: 22px;
      border-radius: 22px;
      border: none;
      border-bottom: 4px solid #000000;
      background: #ffbf00;
      font-size: 16px;
      font-weight: 400;
      color: #EFFBEF;
      }
      .form-inner-part input,
      .form-inner-part textarea {
      display: circle;
      width: 100%;
      padding: 20px;
      margin-bottom: 10px;
      border: none;
      border-radius: 22px;
      background: #d0dfe8;
      }
      }
    </style>
  </head>
  <body>
    <form >
      <div class="form-inner-part">
        <h1>Sign up</h1>
        <input type="name" placeholder="Name">
        <input type="email" placeholder="Email">
       
        <input type="pass" placeholder="Password" id="password" >
        <button type="submit" href="/">Submit</button>
      </div>
    </form>
  </body>
  <?php
  $host ="localhost";
$name="root";
$pass="";
$dbname="test";
$con = mysqli_connect($host,$name,$pass) or die ('Unable to connect Database');
mysqli_select_db($con,$dbname);
if(isset($_POST['signup'])){
	
	$name = $_POST['name'];
	$email = $_POST['email'];
	$pass = $_POST['pass'];
	
	
	
	if($pass==$cpass){
		
		$query= "select*from user where email='$email'";
		$query_run= mysqli_query($con,$query);
		if($query_run){
			
			if(mysqli_num_rows($query_run) >0){
				
				echo "
		<script>
		alert('User ALready Registered ');
		window.location.href='login.php';
		</script>
		";
				
				
			}else{
				
	$insertion= "insert into user values('$name','$email','$pass')";
	
	           
				$insertion_run = mysqli_query($con,$insertion);
				
				if($insertion_run ){
					
					echo "
		<script>
		alert('Registration Successful ');
		window.location.href='signup.php';
		</script>
		";
					
				}else{
					
						echo "
		<script>
		alert('Registration Failed  ');
		window.location.href='signup.php';
		</script>
		";
				}
				
				
			}
			
			
			
		}else{
			echo "
		<script>
		alert('Database Problem');
		window.location.href='signup.php';
		</script>
		";
			
		}
		
		
	}
	
	
}
else{
	
	
}


?>
  
  
</html>

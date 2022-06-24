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
        <h1>Login</h1>
        <input type="email" placeholder="Email">
        <input type="pass" placeholder="Password">
        <button type="submit" href="/">Login</button>
      </div>
    </form>
  </body>
  <?php

    if(isset($_POST['login'])){
		
		$email= $_POST['email'];
		$pass=$_POST['pass'];
		
		$check = "select*from user where email='$email' AND password ='$pass'";
		$check_work= mysqli_query($con,$check);
		
		if($check_work){
			if(mysqli_num_rows($check_work) > 0 ){
				
				echo"
				<script>
				alert('You are Successfully  Logged in');
				window.location.href='login.php';
				</script>
				";
				
			}else{
				
				echo"
				<script>
				alert('Password or Email not Found ');
				window.location.href('signup.php');
				</script>
				";
			}
			
			
		}else{
			
			
				echo"
				<script>
				alert('Database Error  ');
				window.location.href('signup.php');
				</script>
				";
		}
		
		
		
	}else{
		
		
	}





?>
</html>

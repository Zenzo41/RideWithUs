
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Customer Login</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <script >
    function preventBack(){window.history.forward()};
    window.onunload=function(){null};
  </script>
</head>
<body>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="mainpage.php">RideWithUs</a>
    </div>
    <ul class="nav navbar-nav">
      <li ><a href="homepage.php">Home</a></li>
      <li class="active"><a href="customerlogin.php">Customer</a></li>
      <li ><a href="AboutUs.php">About Us</a></li>
      <li><a href="customerlogin.php">Purchase</a></li>
     
    </ul>
  </div>
</nav>

        <style>
            
            input[type="text"],input[type="password"],input[type=number],input[type=email]{
              background:transparent;
                
            }
            body
            {
               background-color: black;
                background-size:cover;  
                color:beige;
                

            }
            .customerID,.fullname,.username,.password,.confirm_password,.email,.contact_number,.buttons{
                max-width: 40%;
                border-radius: 20%;
             margin:auto;
           
            padding-left:1%;
            }

            
        </style>

        
        </div>
        <style>
      
        
        </style>
            </p>
            
<form method="post" action="">

  <div class="form-group">
  
	
	<div class="username">
    <h1 font-size:10PX ><br/>Customer Login</H1><br/><br/>
    <label> Customer Username :</label>
    <input type="text" class="form-control" name="username" value="" placeholder="Username">
    </div>
	<br />
	<div class="password">
    <label>Password</label>
    <input type="password" class="form-control" name="password" value="" placeholder="******">
    <br /><br />
    </div>

            <div class="buttons">
            <input type="submit" class="form-control" name="login" value="Login"><br />
            <input type="reset" class="form-control"  name="reset" value="Reset"><br />
            Are you new? <a href="create.php"><u>Sign up!</u></a>
            
            </div>
         </form>
		 </div>
         </body>
</html>



    
</body>
</html>
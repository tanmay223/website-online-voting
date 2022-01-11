<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

<style>
body {font-family: Arial, Helvetica, sans-serif;}
form {border: 3px solid #f1f1f1;}

input[type=text], input[type=password] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}

button {
  background-color: #04AA6D;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
}

button:hover {
  opacity: 0.8;
}

.cancelbtn {
  width: auto;
  padding: 10px 18px;
  background-color: #f44336;
}

.imgcontainer {
  text-align: center;
  margin: 24px 0 12px 0;
}

img.avatar {
  width: 40%;
  border-radius: 50%;
}

.container {
  padding: 16px;
}

span.psw {
  float: right;
  padding-top: 16px;
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
  span.psw {
     display: block;
     float: none;
  }
  .cancelbtn {
     width: 100%;
  }
}
</style>
</head>
<body>

<div class="container">

<div id="loginSection">
<h1 style="text-align: center;"><b>Online Voting System</b></h1><hr>
<h6 style="text-align: center;">(Kindly login to cast your vote)</h6>
<form action="api/login.php" method="post">
  <div class="imgcontainer">
    <img src="https://www.certifiedfinancialguardian.com/images/blog-wp-login.png" alt="Avatar" class="avatar">
  </div>

  <div class="container">
    <label for="mob"><h5><b>Number</b></h5></label><br>
    <input type="text" placeholder="Enter Mobile" name="mob" required>
    <br><br>
    <label for="pass"><h5><b>Password</b></h5></label>
    <input type="password" placeholder="Enter Password" name="pass" required><br><br>
     <select name="role" style="width: 15%; border: 2px solid black">
                        <option value="1">Voter</option>
                        <!--<option value="2">Group</option>-->
                    </select><br><br>   
    <button id="loginbtn" type="submit" name="loginbtn">Login</button>
    <label>
      <input type="checkbox" checked="checked" name="remember"> Remember me
    </label>
  </div>

  <div class="container" style="background-color:#f1f1f1">
    <button type="button" class="cancelbtn">Cancel</button>
    <span class="psw">New User? <a href="routes/register.php">Register here</a></span>
  </div>
</form>
</div>

</div>

</body>
</html>

<?php
// Initialize the session
session_start();
 
// Check if the user is already logged in, if yes then redirect him to welcome page
if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
    header("location: login.php");
    exit;
}
 
// Include config file

$conn=mysqli_connect("localhost","root","","traveldana")


 
// Define variables and initialize with empty values
$username = $password = "";
$username_err = $password_err = $login_err = "";
 
// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
 
    // Check if username is empty
    if(empty(trim($_POST["username"]))){
        $username_err = "Please enter username.";
    } else{
        $username = trim($_POST["username"]);
    }
    
    // Check if password is empty
    if(empty(trim($_POST["password"]))){
        $password_err = "Please enter your password.";
    } else{
        $password = trim($_POST["password"]);
    }
    
    // Validate credentials
    if(empty($username_err) && empty($password_err)){
        // Prepare a select statement
        $sql = "SELECT id, username, password FROM users WHERE username = ?";
        
        if($stmt = mysqli_prepare($link, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "s", $param_username);
            
            // Set parameters
            $param_username = $username;
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                // Store result
                mysqli_stmt_store_result($stmt);
                
                // Check if username exists, if yes then verify password
                if(mysqli_stmt_num_rows($stmt) == 1){                    
                    // Bind result variables
                    mysqli_stmt_bind_result($stmt, $id, $username, $hashed_password);
                    if(mysqli_stmt_fetch($stmt)){
                        if(password_verify($password, $hashed_password)){
                            // Password is correct, so start a new session
                            session_start();
                            
                            // Store data in session variables
                            $_SESSION["loggedin"] = true;
                            $_SESSION["id"] = $id;
                            $_SESSION["username"] = $username;                            
                            
                            // Redirect user to welcome page
                            header("location: index.php");
                        } else{
                            // Password is not valid, display a generic error message
                            $login_err = "Invalid username or password.";
                        }
                    }
                } else{
                    // Username doesn't exist, display a generic error message
                    $login_err = "Invalid username or password.";
                }
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }

            // Close statement
            mysqli_stmt_close($stmt);
        }
    }
    
    // Close connection
    mysqli_close($link);
}
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="/PHP_PROJECT/login.css">
    <script src="https://kit.fontawesome.com/11a9c95312.js" crossorigin="anonymous"></script>
    <style>
        body{ font: 14px sans-serif; }
        
    </style>
</head>
<body>
    
    <div class="wrapper">
        <div class="photo-login">
        <h1 class="text-title-2">Login Page</h1>
        <div id="text-title-3"> <span style="color: #2F98B9;">Home</span> <samp style="color: aliceblue;">/Login Page</samp></div>
        <img class="first-photo"src="https://cdn.sgtiepthi.vn/wp-content/uploads/2022/04/Da-Nang-ve-dem-03.jpg" alt="">
        </div>
        <div id="frm">
        <h1>LOGIN</h1>  
        <p>Welcome to Starttravel. Your informations will be secured carefully. 
            Please fill informations fully. Contact us if you get any problems.</p>

        <?php 
        if(!empty($login_err)){
            echo '<div class="alert alert-danger">' . $login_err . '</div>';
        }        
        ?>

        
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            <div class="form-group">
            <div class="input-group">
                <span class="input-group-text">
                <i class="fa-solid fa-user"></i>
                </span>
                    <input type="text" name="username" class="form-control" placeholder="User Name"  <?php echo (!empty($username_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $username; ?>">
                    <span class="invalid-feedback"><?php echo $username_err; ?></span>
            </div>
            </div>    
            <div class="form-group">
                <div class="input-group">
                <span class="input-group-text">
                <i class="fa-solid fa-lock"></i>
               </span>
                <input type="password" name="password" class="form-control" placeholder="Password" <?php echo (!empty($password_err)) ? 'is-invalid' : ''; ?>">
                <span class="invalid-feedback"><?php echo $password_err; ?></span>
                </div>
            </div>
            <div class="checkbox">
              <label><input type="checkbox" class="check-box"> Remember me</label>
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-primary" value="LOGIN">
            </div>
            <p class="text-title4">New Here ? <a href="Register.php">Sign up now</a></p>
            <a href="#" class="text-title-7">Forgot Password ?</a>

        </form>
        </div>
        
    </div>
    
    <div class="hill">
     <img class="second-photo"src="https://phongnhaexplorer.com/wp-content/uploads/2021/08/du-lich-phu-quoc-e.jpg" alt="">
     <div id="text-title-6"><span style="color:#2F98B9"> TRAVEL</span><span style="color:#FAA61A">DANA</a> </span></div>
    </div>
</body>
</html>
<?php
// Include config file
require_once "config.php";
 
// Define variables and initialize with empty values
$username = $password = $confirm_password = $email = $phone_number = $college_school_name = $state = $city = "";
$username_err = $password_err = $confirm_password_err = $email_err = $phone_number_err = $college_school_name_err = $state_err = $city_err = "";
 
// Processing form data when form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
 
    // Validate username
    if (empty(trim($_POST["username"]))) {
        $username_err = "Please enter a username.";
    } else {
        // Prepare a select statement
        $sql = "SELECT id FROM users WHERE username = ?";
        
        if ($stmt = mysqli_prepare($link, $sql)) {
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "s", $param_username);
            
            // Set parameters
            $param_username = trim($_POST["username"]);
            
            // Attempt to execute the prepared statement
            if (mysqli_stmt_execute($stmt)) {
                /* store result */
                mysqli_stmt_store_result($stmt);
                
                if (mysqli_stmt_num_rows($stmt) == 1) {
                    $username_err = "This username is already taken.";
                } else {
                    $username = trim($_POST["username"]);
                }
            } else {
                echo "Oops! Something went wrong. Please try again later.";
            }

            // Close statement
            mysqli_stmt_close($stmt);
        }
    }

    // Validate email
    if (empty(trim($_POST["email"]))) {
        $email_err = "Please enter an email.";
    } else {
        $email = trim($_POST["email"]);
    }

    // Validate phone number
    if (empty(trim($_POST["phone_number"]))) {
        $phone_number_err = "Please enter a phone number.";
    } else {
        $phone_number = trim($_POST["phone_number"]);
    }

    // Validate College/School Name
    if (empty(trim($_POST["college_school_name"]))) {
        $college_school_name_err = "Please enter the name of your College or School.";
    } else {
        $college_school_name = trim($_POST["college_school_name"]);
    }

    // Validate State
    if (empty(trim($_POST["state"]))) {
        $state_err = "Please enter your state.";
    } else {
        $state = trim($_POST["state"]);
    }

    // Validate City
    if (empty(trim($_POST["city"]))) {
        $city_err = "Please enter your city.";
    } else {
        $city = trim($_POST["city"]);
    }
    
    // Validate password
    if (empty(trim($_POST["password"]))) {
        $password_err = "Please enter a password.";     
    } elseif (strlen(trim($_POST["password"])) < 6) {
        $password_err = "Password must have at least 6 characters.";
    } else {
        $password = trim($_POST["password"]);
    }
    
    // Validate confirm password
    if (empty(trim($_POST["confirm_password"]))) {
        $confirm_password_err = "Please confirm password.";     
    } else {
        $confirm_password = trim($_POST["confirm_password"]);
        if (empty($password_err) && ($password != $confirm_password)) {
            $confirm_password_err = "Password did not match.";
        }
    }
    
    // Check input errors before inserting into the database
    if (empty($username_err) && empty($password_err) && empty($confirm_password_err) && empty($email_err) && empty($phone_number_err) && empty($college_school_name_err) && empty($state_err) && empty($city_err)) {
        
        // Prepare an insert statement
        $sql = "INSERT INTO users (username, email, phone_number, password, college_school_name, state, city) VALUES (?, ?, ?, ?, ?, ?, ?)";
         
        if ($stmt = mysqli_prepare($link, $sql)) {
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "sssssss", $param_username, $param_email, $param_phone_number, $param_password, $param_college_school_name, $param_state, $param_city);
            
            // Set parameters
            $param_username = $username;
            $param_email = $email;
            $param_phone_number = $phone_number;
            $param_password = password_hash($password, PASSWORD_DEFAULT); // Creates a password hash
            $param_college_school_name = $college_school_name;
            $param_state = $state;
            $param_city = $city;
            
            // Attempt to execute the prepared statement
            if (mysqli_stmt_execute($stmt)) {
                // Redirect to the login page
                header("location: log.php");
            } else {
                echo "Something went wrong. Please try again later.";
            }

            // Close statement
            mysqli_stmt_close($stmt);
        }
    }
    
    // Close the database connection
    mysqli_close($link);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <style type="text/css">
        body { font: 14px sans-serif; }
        .wrapper { width: 350px; padding: 20px; margin: 0 auto; }
        .form-group { margin-bottom: 20px; }
        label { display: block; font-weight: bold; }
        input[type="text"],
        input[type="email"],
        input[type="password"] {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
        .help-block { color: #ff0000; }
        .btn-primary { background-color: #007bff; border: none; }
        .btn-primary:hover { background-color: #0056b3; }
        .btn-default { background-color: #ccc; border: none; }
        .btn-default:hover { background-color: #999; }
    </style>
</head>
<body>
    <div class="wrapper">
        <h2>Sign Up</h2>
        <p>Please fill out this form to create an account.</p>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            <div class="form-group <?php echo (!empty($username_err)) ? 'has-error' : ''; ?>">
                <label>Username</label>
                <input type="text" name="username" class="form-control" value="<?php echo $username; ?>">
                <span class="help-block"><?php echo $username_err; ?></span>
            </div>    

            <!-- New Fields -->
            <div class="form-group <?php echo (!empty($college_school_name_err)) ? 'has-error' : ''; ?>">
                <label>College/School Name</label>
                <input type="text" name="college_school_name" class="form-control" value="<?php echo $college_school_name; ?>">
                <span class="help-block"><?php echo $college_school_name_err; ?></span>
            </div>

            <div class="form-group <?php echo (!empty($state_err)) ? 'has-error' : ''; ?>">
                <label>State</label>
                <input type="text" name="state" class="form-control" value="<?php echo $state; ?>">
                <span class="help-block"><?php echo $state_err; ?></span>
            </div>

            <div class="form-group <?php echo (!empty($city_err)) ? 'has-error' : ''; ?>">
                <label>City</label>
                <input type="text" name="city" class="form-control" value="<?php echo $city; ?>">
                <span class="help-block"><?php echo $city_err; ?></span>
            </div>
            <!-- End of New Fields -->

            <div class="form-group <?php echo (!empty($email_err)) ? 'has-error' : ''; ?>">
                <label>Email</label>
                <input type="email" name="email" class="form-control" value="<?php echo $email; ?>">
                <span class="help-block"><?php echo $email_err; ?></span>
            </div>
            <div class="form-group <?php echo (!empty($phone_number_err)) ? 'has-error' : ''; ?>">
                <label>Phone Number</label>
                <input type="text" name="phone_number" class="form-control" value="<?php echo $phone_number; ?>">
                <span class="help-block"><?php echo $phone_number_err; ?></span>
            </div>
            <div class="form-group <?php echo (!empty($password_err)) ? 'has-error' : ''; ?>">
                <label>Password</label>
                <input type="password" name="password" class="form-control" value="<?php echo $password; ?>">
                <span class="help-block"><?php echo $password_err; ?></span>
            </div>
            <div class="form-group <?php echo (!empty($confirm_password_err)) ? 'has-error' : ''; ?>">
                <label>Confirm Password</label>
                <input type="password" name="confirm_password" class="form-control" value="<?php echo $confirm_password; ?>">
                <span class="help-block"><?php echo $confirm_password_err; ?></span>
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-primary" value="Submit">
                <input type="reset" class="btn btn-default" value="Reset">
            </div>
            <p>Already have an account? <a href="log.php">Login here</a>.</p>
        </form>
    </div>    
</body>
</html>

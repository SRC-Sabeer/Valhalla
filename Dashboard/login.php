<?php
include("./common/head.php");

// Assuming you have a utilities/connection.php file for database connection
include("../utilities/connection.php");

// Function to sanitize user input
function sanitizeInput($input)
{
    return htmlspecialchars(stripslashes(trim($input)));
}

// Function to redirect the user to a specific page
function redirectTo($page)
{
    header("Location: $page");
    exit;
}

// Function to perform user authentication
function authenticateUser($username, $password, $con)
{
    // Add your authentication logic here (e.g., query the database)
    // Replace the example query with your actual query
    $query = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";
    $result = $con->query($query);

    if ($result->num_rows > 0) {
        return true; // Authentication successful
    } else {
        return false; // Authentication failed
    }
}

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = sanitizeInput($_POST["username"]);
    $password = sanitizeInput($_POST["pass"]);

    // Check if the username and password are not empty
    if (!empty($username) && !empty($password)) {
        // Authenticate the user
        if (authenticateUser($username, $password, $con)) {
            // Authentication successful, redirect to a dashboard or home page
            // Replace 'dashboard.php' with the actual page where the user should be redirected after login
            redirectTo('dashboard.php');
        } else {
            $errorMessage = "Invalid username or password. Please try again.";
        }
    } else {
        $errorMessage = "Please enter both username and password.";
    }
}
?>

<div class="limiter">
    <div class="container-login100 page-background">
        <div class="wrap-login100">
            <form class="login100-form validate-form" method="post" action="">
                <span class="login100-form-logo"><img alt="" src="assets/img/taxi.png"></span><span class="login100-form-title p-b-34 p-t-27">Log in</span>
                <?php
                if (isset($errorMessage)) {
                    echo '<div class="alert alert-danger" role="alert">' . $errorMessage . '</div>';
                }
                ?>
                <div class="wrap-input100 validate-input" data-validate="Enter username">
                    <input class="input100" type="text" name="username" placeholder="Username" value="<?php echo isset($username) ? $username : ''; ?>"><span class="focus-input100" data-placeholder=""></span>
                </div>
                <div class="wrap-input100 validate-input" data-validate="Enter password">
                    <input class="input100" type="password" name="pass" placeholder="Password"><span class="focus-input100" data-placeholder=""></span>
                </div>
                <div class="contact100-form-checkbox">
                    <input class="input-checkbox100" id="ckb1" type="checkbox" name="remember-me"> <label class="label-checkbox100" for="ckb1">Remember me</label>
                </div>
                <div class="container-login100-form-btn">
                    <button class="login100-form-btn">Login</button>
                </div>
                <div class="text-center p-t-50">
                    <a class="txt1" href="forgot_password.php">Forgot Password?</a>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- start js include path -->
<script src="assets/plugins/jquery/jquery.min.js"></script><!-- bootstrap -->
<script src="https://cdn.bootcdn.net/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.min.js"></script>
<script src="assets/js/pages/extra_pages/login.js"></script><!-- end js include path -->
</body>
</html>

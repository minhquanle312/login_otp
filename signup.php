<?php
include_once 'header.php'
?>

<section class="signup-form">
    <h2>Sign Up</h2>
    <form action="includes/signup.inc.php" method="POST">
        <input type="text" name="name" placeholder="Full name">
        <input type="text" name="email" placeholder="Email">
        <input type="text" name="userUid" placeholder="Username">
        <input type="password" name="password" placeholder="Password">
        <input type="password" name="passwordRepeat" placeholder="Repeat password">
        <button type="submit" name="submit">Sign up</button>
    </form>
    <?php
    if (isset($_GET["error"])) {
        if ($_GET["error"] == "emptyinput") {
            echo "<p>Fill in all fields</p>";
        } else if ($_GET["error"] == "invalidUsername") {
            echo "<p>Your username is invalid</p>";
        } else if ($_GET["error"] == "invalidEmail") {
            echo "<p>Your email is invalid</p>";
        } else if ($_GET["error"] == "passwordsDontMatch") {
            echo "<p>Psswords don't match</p>";
        }
        // There are some problem with this message
        else if ($_GET["error"] == "stmtFailedSignup") {
            echo "<p>Something went wrong, try again</p>";
        } else if ($_GET["error"] == "usernameTaken") {
            echo "<p>Username already taken</p>";
        } else if ($_GET["error"] == "none") {
            echo "<p>You have signed up</p>";
        }
    }
    ?>
</section>

<?php
include_once 'footer.php'
?>
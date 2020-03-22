<?php
include_once 'header.php';
?>
<style>
.signup-form {
    width: 60%;
    margin: 0 auto;
    background-color: rgba(60, 126, 180, 0.452);
    padding: 15px;
    border-radius: 20px;
    margin-top: 40px;
}

.signup-form input {
    width: 80%;
    margin: 0 auto;
    padding: 10px;
    background-color: rgb(255, 255, 255);
    margin-bottom: 40px;
    border-radius: 8px;
    margin-top: 40px;
    display: flex;
    flex-wrap: wrap;
    align-content: center;
    border: none;
    font-size: 30px;
}

button {
    display: flex;
    flex-wrap: wrap;
    align-content: center;
    width: 30%;
    height: 60px;
    margin: 0 auto;
    font-size: 40px;
    border: 0;
    border-radius: 20px;
    margin-bottom: 10px;
    font-weight: 600;
    color: #373737;
    box-shadow: 0px 0px 4px rgb(31, 37, 59);
    padding-left: 13px;
}
</style>

<section class="main-container">
    <div class="main-wrapper">
        <h2>Let's Get Started</h2>
        <form class="signup-form" action="./includes/signup.inc.php" method="POST">
            <input type="text" name="first" placeholder="First Name">
            <input type="text" name="last" placeholder="Last Name">
            <input type="text" name="email" placeholder="E-Mail">
            <input type="text" name="uid" placeholder="Username">
            <input type="password" name="pwd" placeholder=" Password">
            <button type="submit" name="submit">Sign Up!</button>
        </form>
</section>
</body>
<?php
include_once 'footer.php';
?>
<?php
include_once 'header.php';
?>

<section class="main-container">
    <div class="main-wrapper">
        <h2>Welcome!</h2>

        <?php 

        if(isset($_SESSION['u_id'])){
            echo ' <div class="homepage">
            <br><br>

            <p style="font-size:50px;">You have</br>  successfully logged in.</p> 
            
            <img style=" width: 300px; height: 300px;" src="./img/thumb.png"/>
            </div>

        </div>';

        } else {
            echo ' <div class="homepage">
            <br><br>

            <p>Thanks for visiting my PHP/ </br> and MSQL driven login system project! </br>
                Designed to demonstrate my ability to use: </br>
                <span style="font-weight: 600; font-size: 40px;">HTML, CSS, PHP</span> & <span
                    style="font-weight: 600; font-size: 40px;">MySQL</span></br> In a fashion
                that is
                functional,
                secure and hopefully... Somewhat aestheticaly pleasing.</br>
                To begin, create an account using the <span style="color: black; text-decoration: underline;
  text-decoration-color: red;">Sign up</span></br>
                link that can be found at the top. </br>
                Otherwise, simply log in using the relevant credentials.</P </div>
        </div>';
        }

        ?>

</section>
</body>

<?php
include_once 'footer.php';
?>
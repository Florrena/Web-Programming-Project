<?php 
$title = 'Sign up';
include 'header.php'; ?>


<div class="body-container">

<!-- Body text -->

<div class="login-container">
    <div class="space">

    </div>

    <div class="center-2">
            <form action="#" method="post" class="loginform">
            <h4>CREATE ACCOUNT</h4>
            <div class="input-box">
                <input type="text" class="input-field"  placeholder="Username" autocomplete="off" required>
            </div>
            <div class="input-box">
                <input type="text" class="input-field" id="fname" placeholder="Full Name" autocomplete="off" required>
            </div>
            <div class="input-box">
                <input type="email" id="email" class="input-field" placeholder="Email" pattern=".+@example\.com" required >
            </div>
            <div class="input-box">
                <input type="password" class="input-field" placeholder="Password" autocomplete="off" required>
            </div>
            <div class="input-box">
                <input type="password" class="input-field" placeholder="Confirm Password" autocomplete="off" required>
            </div>
            <div class="input-submit">
                <button class="submit-btn" id="submit">SIGN UP</button>
            </div>
            <div class="sign-up-link">
                <p>Already have an account? <a href="login.php">Log In</a></p>
            </div>
        </form>
        
    </div>
</div>
</div>


<?php include 'footer.php'; ?>
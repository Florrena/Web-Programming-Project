<?php 
$title = 'Contact';
include 'header.php'; ?>

<!-- Banner image -->
<div class="contact-banner-container">
        <img src="images/contact-cat.png" alt="banner" draggable="false">
    </div>

<!-- Contact body container -->
    <div class="text-container">

<!-- Contact form container and form heading -->
        <div class="form-container">
                <div class="form-header">
                <h1>Fill up the form </h1>
                <img class="catpaw" src="images/paw.webp"></div>

<!-- Contact form -->
            <form>
            <div>
                <label>First name: </label><br>
                <input type="Name"> 
            </div>
            <div>
                <label>E-mail:</label><br>
                <input type="email">
            </div>
            <div>
                <label>Phone number:</label><br>
                <input type="phonenumber">
            </div>
            <div>
                <label>Inquiry:</label><br>
                <textarea type="inquiry"></textarea>
            </div><br>
            <button>Submit</button>
            </form>
        </div>

<!-- Contact body text  -->
        <div class="contact-article">
                <br><p>Have a question about adoption, need assistance, or just want to share your latest cat tales? We're all ears! The Silicate Adoption team is here to help and eager to connect with fellow cat enthusiasts.
                    <br><br>You can find us at:<br>
                    Cat street 31<br>
                    Helsinki 2137<br>
                    Finland<br>
                    +358 44 561 439
                    <br><br>Connect with us on social media for the latest updates and heartwarming stories:    
                    <br><br> Instagram: @SilicateAdoption<br>
                    Twitter: @SilicateAdopt<br>
                    Facebook: /SilicateAdoption<br>
                    Pinterest: /SilicateAdoption<br>
                    <br><br>Join the conversation, share the love, and let's make the world a cozier place, one paw at a time!
                    <br><br>Have something specific in mind? Our custom contact form is designed with your convenience in mind. Share your adoption inquiries, tell us about the cat you'd like to put up for adoption, or simply drop us a line with your feline stories and questions.<br>
                    Fill out our custom contact form below with the details that matter to you, and let the magic of communication unfold.
                </p>
        </div>
    </div>
<?php include 'footer.php'; ?>
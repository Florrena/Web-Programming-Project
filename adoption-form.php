<?php 
$title = 'Adoption Form';
include 'header.php'; ?>

    <div class="cat-header">
        <img src="images/paw.webp">
        <h1>Find Your Feline Friend: Begin Your Adoption Journey Today</h1>
        <img src="images/paw.webp">
    </div>

    <div class="adoption-container">
        <div class="center">
            <form action="#" method="POST" class="adoption-form">
                <h4>ADOPTION FORM</h4>
                <div class="input-box">
                    <input type="text" class="input-field" id="fname" name="fname" placeholder="Full Name" required>
                </div>
                <div class="input-box">
                    <input type="text" class="input-field" id="email" name="email" placeholder="Email" required>
                </div>
                <div class="input-box">
                    <input type="tel" class="input-field" id="phone" name="phone" placeholder="Phone" required>
                </div>
                <div class="input-box">
                    <textarea class="input-field" id="address" name="address" rows="4" placeholder="Address" required></textarea>
                </div>
                <div class="input-box">
                    <input type="number" class="input-field" id="age" name="age" placeholder="Age" required>
                </div>
                <div class="input-box">
                    <input type="text" class="input-field" id="occupation" name="occupation" placeholder="Occupation" required>
                </div>
                <div class="input-box">
                    <label for="experience">Experience with cats:</label>
                    <select id="experience" name="experience" class="input-field" required>
                        <option class ="option" value="beginner">Beginner</option>
                        <option class ="option" value="intermediate">Intermediate</option>
                        <option class ="option" value="experienced">Experienced</option>
                    </select>
                </div>
                <div class="input-box">
                    <label for="homeType">Home Type:</label><br>
                    <select id="homeType" name="homeType" class="input-field" required>
                        <option class ="option" value="house">House</option>
                        <option class ="option" value="apartment">Apartment</option>
                    </select>
                </div>
                <div class="input-box">
                    <label for="adoptionReason">Reasons for Adoption:</label>
                    <select id="adoptionReason" name="adoptionReason" class="input-field" required>
                        <option class ="option" value="companionship">Companionship</option>
                        <option class ="option" value="familyPet">Family Pet</option>
                        <option class ="option" value="emotionalSupport">Emotional Support</option>
                        <option class ="option" value="other">Other (Specify in comments)</option>
                    </select>
                </div>
                <div class="input-box">
                    <label for="additionalComments">Additional Comments:</label>
                    <textarea id="additionalComments" name="additionalComments" class="input-field" rows="4"></textarea>
                </div>
                <div class="input-submit">
                    <button class=" submit-btn" type="submit">Submit</button>
                </div>
            </form>
        </div>
    </div>
    
<?php include 'footer.php' ?>
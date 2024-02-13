<?php 
$title = 'Adopt';
include 'header.php'; ?>

<div class="cat-header">
        <img src="images/paw.webp">
        <h1>Find a Loving Home for Your Furry Friend!</h1>
        <img src="images/paw.webp">
    </div>

<div class="adoption-container">
        <div class="center">
            <form action="#" method="POST" class="adoption-form">
                <h4>ADOPT OUT</h4>
                <div class="input-box">
                    <input type="text" class="input-field" id="catname" name="catname" placeholder="Cat Name" required>
                </div>
                <div class="input-box">
                    <input type="text" class="input-field" id="fname" name="fname" placeholder="Full Name" required>
                </div>
                <div class="input-box">
                <input type="email" id="email" class="input-field" placeholder="Email" required><br>
                <span id="emailError" class="error"></span>
                </div>
                <div class="input-box">
                    <input type="tel" class="input-field" id="phone" name="phone" placeholder="Phone" required><br>
                    <span id="phoneError" class="error"></span>
                </div>
                <div class="input-box">
                    <textarea class="input-field" id="address" name="address" rows="4" placeholder="Address" required></textarea>
                </div>
                <div class="input-box">
                    <input type="number" class="input-field" id="age" name="age" placeholder="Age" required>
                </div>
                <div class="input-box">
                    <label for="catadoptionReason">Reasons for your decision:</label>
                    <select id="catadoptionReason" name="catadoptionReason" class="input-field" required>
                        <option class ="option" value="allergy">Allergy</option>
                        <option class ="option" value="Healthissues">Health Issues</option>
                        <option class ="option" value="finances">Financial Constraints</option>
                        <option class ="option" value="behavior">Behavioral Issues</option>
                        <option class ="option" value="personal">Personal Issues</option>
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
<script src="validation.js"></script>
<?php include 'footer.php'; ?>
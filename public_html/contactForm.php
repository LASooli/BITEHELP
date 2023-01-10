<div id="contactSection">
    <div id="contactInfo">
        <h2>CONTACT US</h2>
        <p style="padding-bottom: 20px">bitehelpdirect@gmail.com</p>
        <div><a href="https://www.facebook.com" target="_blank"><img src="images/facebookIcon.png" alt="Facebook Icon" style="width:27.2px;height:18.5px"></a><a href="https://www.instagram.com" ><img src="images/instagramIcon.png" style="width:20px;height:20px"></a></div>
    </div>
    <div id="contactMessage">
        <form id="contactForm" action="receiveContactMessage.php" method="post">
<p class="required">
                <label for='Name' id='label_Name' class='contactFormLabel'>Name</label>
                <input type='text' name='Name' id='Name' placeholder="Enter your name" class='contactFormInput  half-width-input' required>
</p><p class="required">
                <label for='Email' id='label_Email' class='contactFormLabel'>Email</label>
                <input type='email' name='Email' id='Email' placeholder="Enter your email" class='contactFormInput half-width-input' required>
            </p><p>
                <label for='Phone' id='label_Phone' class='contactFormLabel'>Phone</label>
                <input type='tel' name='Phone' id='Phone' placeholder="Enter your phone number" class='contactFormInput half-width-input'>
            </p><p>
                <label for='Address' id='label_Address' class='contactFormLabel'>Address</label>
                <input type='text' name='Address' id='Address' placeholder="Enter your address" class='contactFormInput half-width-input'>
            </p><p class="full-width">
                <label for='Subject' id='label_Subject' class='contactFormLabel'>Subject</label>
                <input type='text' name='Subject' id='Subject' placeholder="Type the subject" class='contactFormInput full-width-input'>
            </p><p class="full-width">
                <label for='Message' id='label_Message' class='contactFormLabel'>Message</label>
                <textarea name="Message" id="Message" cols="50" rows="5" placeholder="Type your message here..." class="contactFormInput"></textarea>
            </p>
            <input type="submit" value="Submit" id="submit" class="full-width-input full-width">
        </form>
    </div>
</div>
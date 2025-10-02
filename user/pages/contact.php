<section class="contact-section">
    <div class="contact-container">
        <h1>Get In Touch</h1>
        <p class="section-description">Feel free to reach out for collaborations or just a friendly hello</p>
        
        <?php
        // Display success message
        if (isset($_GET['success'])) {
            echo '<div class="alert alert-success">Thank you! Your message has been sent successfully.</div>';
        }
        // Display error messages
        if (isset($_GET['error'])) {
            $error = $_GET['error'];
            if ($error == 'invalid_email') {
                echo '<div class="alert alert-error">Please enter a valid email address.</div>';
            } else if ($error == 'database') {
                echo '<div class="alert alert-error">Sorry, there was an error sending your message. Please try again.</div>';
            }
        }
        ?>
        
        <div class="contact-content">
            <div class="contact-form">
                <h2>Send Me a Message</h2>
                <form action="process-contact.php" method="POST">
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" id="name" name="name" required>
                    </div>
                    
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" id="email" name="email" required>
                    </div>
                    
                    <div class="form-group">
                        <label for="subject">Subject</label>
                        <input type="text" id="subject" name="subject" required>
                    </div>
                    
                    <div class="form-group">
                        <label for="message">Message</label>
                        <textarea id="message" name="message" rows="5" required></textarea>
                    </div>
                    
                    <button type="submit" class="submit-button">Send Message</button>
                </form>
            </div>
            
            <div class="contact-info">
                <h2>Contact Information</h2>
                <div class="info-item">
                    <h3>Email</h3>
                    <p>your.email@example.com</p>
                </div>
                <div class="info-item">
                    <h3>Phone</h3>
                    <p>+1 (123) 456-7890</p>
                </div>
                <div class="info-item">
                    <h3>Location</h3>
                    <p>City, Country</p>
                </div>
                <div class="info-item">
                    <h3>Social Media</h3>
                    <div class="social-links">
                        <a href="#">LinkedIn</a>
                        <a href="#">GitHub</a>
                        <a href="#">Twitter</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

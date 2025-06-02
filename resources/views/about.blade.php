<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us - The MuscleStation</title>
    <link rel="stylesheet" href="contact.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/style1.css') }}">
    
    <style>
        /* Styled Popup */
        .popup {
            position: fixed;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            background:black;
            color:white;
            padding: 15px 30px;
            border-radius: 10px;
            text-align: center;
            box-shadow: 0px 0px 15px rgba(0, 0, 0, 0.3);
            z-index: 1000;
            opacity: 0;
            visibility: hidden;
            transition: opacity 0.5s ease-in-out, visibility 0.5s ease-in-out;
        }

        /* Show popup */
        .popup.show {
            opacity: 1;
            visibility: visible;
        }
    </style>
</head>
<body>
 
    <!-- Contact Section -->
    <br>
   <h2 class="page-heading">Contact & Your Queries</h2>

    <div class="product-grid">
    <section class="contact">
        <div class="container">
            <div class="contact-wrapper">
              
                <!-- Contact Details -->
                <div class="contact-info">
                    <h2>📍 Our Location</h2>
                    <p>Pimple Saudaghar, Pune, India</p>
                    <h2>📞 Call Us</h2>
                    <p>+91 98765 43210,+919011794579</p>
                    <h2>📧 Email Us</h2>
                    <p>support@CodexCafe.com</p>
                    
                  <!-- Social Media Links with Icons -->
                  <h2>🌐 Follow Us</h2>
                  <div class="social-links">
                      <a href="https://www.facebook.com" target="_blank" style="color: #1877F2;">
                          <i class="fab fa-facebook"></i> Facebook
                      </a>  
                      <a href="https://www.instagram.com" target="_blank" style="color: #E4405F;">
                          <i class="fab fa-instagram"></i> Instagram
                      </a>  
                      <a href="https://twitter.com" target="_blank" style="color: #1DA1F2;">
                          <i class="fab fa-twitter"></i> Twitter
                      </a>  
                      <a href="https://www.youtube.com" target="_blank" style="color: #FF0000;">
                          <i class="fab fa-youtube"></i> YouTube
                      </a>
                  </div>
                  
                  

                </div>

                <!-- Contact Form -->
                <div class="contact-form">
                    <h2>✉️ Your Queries are welcome </h2>
                    <form id="contactForm" action="submit_form.php" method="POST">
                        <label for="name">Full Name</label>
                        <input type="text" id="name" placeholder="Enter your full name" required>

                        <label for="email">Email Address</label>
                        <input type="email" id="email" placeholder="Enter your email" required>

                        <label for="message">Your Message</label>
                        <textarea id="message" placeholder="Write your message here..." required></textarea>

                        <button type="submit">Send Message</button>
                    </form>
                </div>

            </div>
        </div>
    </section>

    <!-- Google Maps -->
    <section class="map">
        <h2>📍 Find Us Here</h2>
        <div class="map-container">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3151.8354345096675!2d144.95592831566826!3d-37.81720974201454!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6ad65d5df1a2c9e5%3A0x5045675218cce8b!2sGym!5e0!3m2!1sen!2sin!4v1642531628180!5m2!1sen!2sin" width="100%" height="300" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
        </div>
    </section>

    <!-- Footer -->
    <footer>
        <p>&copy; 2025 CodexCafe. All rights reserved.</p>
    </footer>

    <!-- Popup Message -->
    <div id="popup" class="popup">Thanks for your feedback! We will surely look into it.</div>

    <!-- JavaScript for Form Submission Popup -->
    <script>
        document.addEventListener("DOMContentLoaded", function () {
            document.getElementById("contactForm").addEventListener("submit", function (event) {
                event.preventDefault(); // Prevent actual form submission
                
                let popup = document.getElementById("popup");

                // Show the popup
                popup.classList.add("show");

                // Hide popup after 3 seconds
                setTimeout(() => {
                    popup.classList.remove("show");
                }, 3000);

                this.reset(); // Clear the form after submission
            });
        });
    </script>

</body>
</html>

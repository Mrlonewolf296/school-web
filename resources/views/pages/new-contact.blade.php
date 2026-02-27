<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us - ImaniCredit</title>
    <link rel="stylesheet" href="/static/css/contact.css">
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar">
        <div class="logo">
            <img src="/static/images/logo.png" alt="Imani Credit Logo">
        </div>
        <ul class="navbar-links">
            <li><a href="/">Home</a></li>
            <li><a href="{{ url_for('about') }}">About Us</a></li>
            <li><a href="{{ url_for('faq') }}">FAQs</a></li>
            <li><a href="{{ url_for('contact') }}" class="active">Contact</a></li>
        </ul>
 {% if 'user_id' not in session %}

  <a href="{{ url_for('signup') }}" class="btn-primary">Sign up</a>
  <a href="{{ url_for('login') }}" class="sign-in-btn">Sign In</a>

{% else %}

  <span class="welcome-text">Hi, {{ session['firstname'] }}</span>
  <a href="{{ url_for('logout') }}" class="sign-in-btn">Logout</a>

{% endif %}
    </nav>

    <!-- Hero Section -->
    <section class="hero">
        <h1>Get in Touch</h1>
        <p>We're here to help! Reach out to us with any questions about our loan services or your application.</p>
    </section>

    <!-- Main Content -->
    <div class="container">
        <div class="contact-grid">
            <!-- Contact Form -->
            <div class="contact-form-section">
                <h2>Send Us a Message</h2>
                <div class="success-message" id="successMessage">
                    Thank you! Your message has been sent successfully. We'll get back to you soon.
                </div>
                <form id="contactForm">
                    <div class="form-group">
                        <label for="name">Full Name *</label>
                        <input type="text" id="name" name="name" required>
                        <div class="error-message">Please enter your full name</div>
                    </div>

                    <div class="form-group">
                        <label for="email">Email Address *</label>
                        <input type="email" id="email" name="email" required>
                        <div class="error-message">Please enter a valid email address</div>
                    </div>

                    <div class="form-group">
                        <label for="phone">Phone Number</label>
                        <input type="tel" id="phone" name="phone">
                        <div class="error-message">Please enter a valid phone number</div>
                    </div>

                    <div class="form-group">
                        <label for="subject">Subject *</label>
                        <input type="text" id="subject" name="subject" required>
                        <div class="error-message">Please enter a subject</div>
                    </div>

                    <div class="form-group">
                        <label for="message">Message *</label>
                        <textarea id="message" name="message" required></textarea>
                        <div class="error-message">Please enter your message</div>
                    </div>

                    <button type="submit" class="submit-btn">Send Message</button>
                </form>
            </div>

            <!-- Contact Information -->
            <div class="contact-info-section">
                <h2>Contact Information</h2>

                <div class="contact-card">
                    <div class="contact-card-icon">📧</div>
                    <h3>Email Us</h3>
                    <p><a href="mailto:support@imanicredit.com">support@imanicredit.com</a></p>
                    <p style="font-size: 12px; margin-top: 5px;">We respond within 24 hours</p>
                </div>

                <div class="contact-card">
                    <div class="contact-card-icon">📞</div>
                    <h3>Call Us</h3>
                    <p><a href="tel:+254712345678">+254 (712) 345-678</a></p>
                    <p style="font-size: 12px; margin-top: 5px;">Monday - Friday, 9 AM - 6 PM</p>
                </div>

                <div class="contact-card">
                    <div class="contact-card-icon">📍</div>
                    <h3>Visit Us</h3>
                    <p>Imperial House, Nairobi<br>Kenya</p>
                    <p style="font-size: 12px; margin-top: 5px;">Head Office</p>
                </div>

                <div class="office-hours">
                    <h4>Office Hours</h4>
                    <ul class="hours-list">
                        <li>
                            <span>Monday - Friday</span>
                            <span>9:00 AM - 6:00 PM</span>
                        </li>
                        <li>
                            <span>Saturday</span>
                            <span>10:00 AM - 4:00 PM</span>
                        </li>
                        <li>
                            <span>Sunday</span>
                            <span>Closed</span>
                        </li>
                        <li>
                            <span>Public Holidays</span>
                            <span>Closed</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <!-- Map Section -->
    <section class="map-section">
        <h2>Find Our Location</h2>
        <div class="map-container">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3988.797048153066!2d36.82194!3d-1.28637!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x182f1a4d8d8d8d8d%3A0x0!2sImperial%20House%2C%20Nairobi!5e0!3m2!1sen!2ske!4v1234567890" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </section>

    <!-- Social Section -->
    <section class="social-section">
        <h2>Follow Us</h2>
        <div class="social-links">
            <a href="https://facebook.com/imanicredit" class="social-link" title="Facebook">f</a>
            <a href="https://twitter.com/imanicredit" class="social-link" title="Twitter">𝕏</a>
            <a href="https://instagram.com/imanicredit" class="social-link" title="Instagram">📷</a>
            <a href="https://linkedin.com/company/imanicredit" class="social-link" title="LinkedIn">in</a>
        </div>
    </section>

    <!-- Footer -->
    <footer class="footer">
        <p>&copy; 2024 ImaniCredit. All rights reserved. | <a href="#">Privacy Policy</a> | <a href="#">Terms of Service</a></p>
    </footer>

    <script>
        // Form Validation
        const contactForm = document.getElementById('contactForm');
        const successMessage = document.getElementById('successMessage');

        function validateEmail(email) {
            const emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            return emailPattern.test(email);
        }

        function validatePhone(phone) {
            if (!phone) return true; // Phone is optional
            const phonePattern = /^[\d\s\-\+\(\)]{10,}$/;
            return phonePattern.test(phone);
        }

        function validateForm() {
            let isValid = true;
            const formGroups = contactForm.querySelectorAll('.form-group');

            formGroups.forEach(group => {
                group.classList.remove('error');
                const input = group.querySelector('input, textarea');
                const fieldName = input.name;

                if (fieldName === 'name' && !input.value.trim()) {
                    group.classList.add('error');
                    isValid = false;
                }

                if (fieldName === 'email') {
                    if (!input.value.trim() || !validateEmail(input.value)) {
                        group.classList.add('error');
                        isValid = false;
                    }
                }

                if (fieldName === 'phone' && !validatePhone(input.value)) {
                    group.classList.add('error');
                    isValid = false;
                }

                if (fieldName === 'subject' && !input.value.trim()) {
                    group.classList.add('error');
                    isValid = false;
                }

                if (fieldName === 'message' && !input.value.trim()) {
                    group.classList.add('error');
                    isValid = false;
                }
            });

            return isValid;
        }

        contactForm.addEventListener('submit', function (e) {
            e.preventDefault();

            if (validateForm()) {
                // Simulate form submission
                console.log('[v0] Form submitted:', {
                    name: document.getElementById('name').value,
                    email: document.getElementById('email').value,
                    phone: document.getElementById('phone').value,
                    subject: document.getElementById('subject').value,
                    message: document.getElementById('message').value
                });

                // Show success message
                successMessage.classList.add('show');

                // Reset form
                contactForm.reset();

                // Hide success message after 5 seconds
                setTimeout(() => {
                    successMessage.classList.remove('show');
                }, 5000);
            }
        });

        // Real-time validation
        contactForm.querySelectorAll('input, textarea').forEach(field => {
            field.addEventListener('blur', function () {
                const group = this.parentElement;
                group.classList.remove('error');

                if (this.name === 'name' && !this.value.trim()) {
                    group.classList.add('error');
                }

                if (this.name === 'email') {
                    if (!this.value.trim() || !validateEmail(this.value)) {
                        group.classList.add('error');
                    }
                }

                if (this.name === 'phone' && this.value && !validatePhone(this.value)) {
                    group.classList.add('error');
                }

                if (this.name === 'subject' && !this.value.trim()) {
                    group.classList.add('error');
                }

                if (this.name === 'message' && !this.value.trim()) {
                    group.classList.add('error');
                }
            });
        });
    </script>
</body>
</html>

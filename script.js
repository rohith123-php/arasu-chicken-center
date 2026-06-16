document.addEventListener('DOMContentLoaded', () => {
    // Mobile Navigation Toggle
    const mobileToggle = document.querySelector('.mobile-toggle');
    const navLinks = document.querySelector('.nav-links');
    if (mobileToggle) {
        mobileToggle.addEventListener('click', () => {
            navLinks.classList.toggle('active');
            
            // Animate hamburger icon (optional enhancement)
            const spans = mobileToggle.querySelectorAll('span');
            if (navLinks.classList.contains('active')) {
                spans[0].style.transform = 'rotate(45deg) translate(5px, 5px)';
                spans[1].style.opacity = '0';
                spans[2].style.transform = 'rotate(-45deg) translate(7px, -6px)';
            } else {
                spans[0].style.transform = 'none';
                spans[1].style.opacity = '1';
                spans[2].style.transform = 'none';
            }
        });
    }
    // Smooth Scrolling for anchor links
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function (e) {
            e.preventDefault();
            navLinks.classList.remove('active'); // Close mobile menu if open
            
            // Reset hamburger
            if (mobileToggle) {
                const spans = mobileToggle.querySelectorAll('span');
                spans[0].style.transform = 'none';
                spans[1].style.opacity = '1';
                spans[2].style.transform = 'none';
            }
            document.querySelector(this.getAttribute('href')).scrollIntoView({
                behavior: 'smooth'
            });
        });
    });
    // Form Validation and AJAX Submission
    const inquiryForm = document.getElementById('inquiryForm');
    const responseDiv = document.getElementById('form-response');
    if (inquiryForm) {
        inquiryForm.addEventListener('submit', async (e) => {
            e.preventDefault(); // Prevent standard submission
            // Basic validation
            const name = document.getElementById('name').value.trim();
            const phone = document.getElementById('phone').value.trim();
            const message = document.getElementById('message').value.trim();
            if (!name || !phone || !message) {
                responseDiv.className = 'form-response error';
                responseDiv.innerText = 'Please fill out all fields.';
                return;
            }
            // Submit via Fetch API
            const formData = new FormData(inquiryForm);
            
            try {
                const submitBtn = inquiryForm.querySelector('button[type="submit"]');
                const originalText = submitBtn.innerText;
                submitBtn.innerText = 'Sending...';
                submitBtn.disabled = true;
                const response = await fetch('process_contact.php', {
                    method: 'POST',
                    body: formData
                });
                const result = await response.json();
                if (result.success) {
                    responseDiv.className = 'form-response success';
                    responseDiv.innerText = result.message;
                    inquiryForm.reset();
                } else {
                    responseDiv.className = 'form-response error';
                    responseDiv.innerText = result.message || 'An error occurred.';
                }
                submitBtn.innerText = originalText;
                submitBtn.disabled = false;
            } catch (error) {
                console.error('Error submitting form:', error);
                responseDiv.className = 'form-response error';
                responseDiv.innerText = 'Failed to connect to the server. Please try again later.';
            }
        });
    }
});

<footer>
    <div class="footer-content">
        <p>&copy; 2024 Your Company Name. All rights reserved.</p>
        <div class="social-links">
            <a href="https://www.facebook.com/yourprofile" target="_blank" aria-label="Facebook">
                <img src="https://upload.wikimedia.org/wikipedia/commons/c/cd/Facebook_logo_%28square%29.png" alt="Facebook Icon">
            </a>
            <a href="https://wa.me/yourphonenumber" target="_blank" aria-label="WhatsApp">
                <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/6/6b/WhatsApp.svg/2044px-WhatsApp.svg.png" alt="WhatsApp Icon">
            </a>
            <!-- Add more social icons as needed -->
        </div>
    </div>
</footer>

<style>
    footer {
        background-color: #333;
        color: #fff;
        text-align: center;
        padding: 20px;
    }

    .footer-content {
        max-width: 1200px;
        margin: 0 auto;
    }

    .social-links {
        margin-top: 10px;
        display: flex;
        justify-content: center; /* Center align social icons */
        flex-wrap: wrap; /* Wraps icons to the next line if necessary */
    }

    .social-links a {
        margin: 0 15px; /* Increased margin for better spacing */
    }

    .social-links img {
        width: 30px; /* Adjust size as needed */
        height: auto;
        transition: transform 0.2s; /* Smooth scaling effect */
    }

    .social-links img:hover {
        transform: scale(1.1); /* Slightly scale up on hover */
    }

    @media (max-width: 600px) {
        footer {
            padding: 15px; /* Adjust padding for smaller screens */
        }

        .social-links a {
            margin: 0 5px; /* Reduce margin on smaller screens */
        }
    }
</style>

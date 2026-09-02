<?php
// inc/header.php
?>

<header>
    <div class="header-container">
        <div class="logo">
            <a href="index.php">
                <img src="img/palmpay.webp" alt="Task Tube Logo">
            </a>
        </div>
        <div class="header-actions">
            <!-- Header App Download Icon -->
            <a href="#" id="header-download-btn" class="header-download-icon" title="Download App">
                <i class="fas fa-download"></i>
            </a>
            <button id="hamburger-menu" data-toggle="ham-navigation" class="hamburger-menu-button">
                <span></span>
            </button>
        </div>
    </div>
</header>

<!-- App Download Popup Modal -->
<div id="app-download-modal" class="download-modal-overlay">
    <div class="download-modal-content">
        <h3>Get the TaskTube App!</h3>
        <p>Enjoy a faster, smoother experience and start earning directly from your Android device.</p>
        <div class="download-modal-actions">
            <a href="https://raw.githubusercontent.com/Xantech007/cashtube-clone-xo-je/main/TaskTube.apk" class="btn-download" id="confirm-download">Download App</a>
            <button type="button" class="btn-close-modal" id="close-download-modal">Later</button>
        </div>
    </div>
</div>

<!-- Notification Popup -->
<div id="notification-container">
    <div id="notification-popup" class="notification-popup">
        <div id="notification-content" class="notification-content">
            <i class="fas fa-dollar-sign"></i>
            <p id="notification-message"></p>
        </div>
    </div>
</div>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

<style>
    header {
        position: fixed;
        top: 0;
        left: 0;
        right: 0;
        width: 100%;
        background: #fff;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        padding: 15px 20px;
        z-index: 1000;
    }

    .header-container {
        max-width: 1200px;
        margin: 0 auto;
        display: flex;
        justify-content: space-between;
        align-items: center;
    }

    .logo img {
        height: 50px;
        border-radius: 50%;
    }

    .logo a {
        display: inline-block;
        text-decoration: none;
    }

    .header-actions {
        display: flex;
        align-items: center;
        gap: 15px;
    }

    .header-download-icon {
        width: 40px;
        height: 40px;
        background: #f0ebff;
        color: #6e44ff;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        text-decoration: none;
        font-size: 16px;
        transition: all 0.3s ease;
    }

    .header-download-icon:hover {
        background: #6e44ff;
        color: #fff;
    }

    .hamburger-menu-button {
        width: 40px;
        height: 40px;
        background: #6e44ff;
        border: 3px solid #fff;
        border-radius: 50%;
        cursor: pointer;
        position: relative;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .hamburger-menu-button span {
        width: 20px;
        height: 2px;
        background: #fff;
        position: absolute;
        transition: all 0.3s ease;
    }

    .hamburger-menu-button span::before,
    .hamburger-menu-button span::after {
        content: '';
        width: 20px;
        height: 2px;
        background: #fff;
        position: absolute;
        transition: all 0.3s ease;
    }

    .hamburger-menu-button span::before {
        transform: translateY(-6px);
    }

    .hamburger-menu-button span::after {
        transform: translateY(6px);
    }

    .hamburger-menu-button-close span {
        background: transparent;
    }

    .hamburger-menu-button-close span::before {
        transform: translateY(0) rotate(45deg);
    }

    .hamburger-menu-button-close span::after {
        transform: translateY(0) rotate(-45deg);
    }

    /* App Download Modal Styling */
    .download-modal-overlay {
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: rgba(0, 0, 0, 0.6);
        display: flex;
        align-items: center;
        justify-content: center;
        z-index: 2000;
        opacity: 0;
        visibility: hidden;
        transition: all 0.3s ease;
    }

    .download-modal-overlay.show-modal {
        opacity: 1;
        visibility: visible;
    }

    .download-modal-content {
        background: #fff;
        padding: 30px 25px;
        border-radius: 16px;
        max-width: 380px;
        width: 90%;
        text-align: center;
        box-shadow: 0 10px 25px rgba(0,0,0,0.2);
        transform: scale(0.9);
        transition: transform 0.3s ease;
    }

    .download-modal-overlay.show-modal .download-modal-content {
        transform: scale(1);
    }

    .download-modal-content h3 {
        margin-bottom: 12px;
        color: #333;
        font-size: 22px;
    }

    .download-modal-content p {
        color: #666;
        font-size: 14px;
        line-height: 1.5;
        margin-bottom: 20px;
    }

    .download-modal-actions {
        display: flex;
        flex-direction: column;
        gap: 10px;
    }

    .btn-download {
        background: #28a745;
        color: #fff;
        padding: 12px;
        border-radius: 8px;
        text-decoration: none;
        font-weight: 600;
        transition: background 0.2s;
    }

    .btn-download:hover {
        background: #218838;
    }

    .btn-close-modal {
        background: transparent;
        border: none;
        color: #888;
        padding: 8px;
        cursor: pointer;
        font-size: 14px;
        font-weight: 500;
    }

    .btn-close-modal:hover {
        color: #333;
    }

    .notification-popup {
        position: fixed;
        top: 20px;
        right: 20px;
        background: linear-gradient(135deg, #28a745, #20c997);
        border-radius: 12px;
        box-shadow: 0 6px 12px rgba(0, 0, 0, 0.3);
        padding: 15px 20px;
        max-width: 320px;
        width: 100%;
        opacity: 0;
        visibility: hidden;
        transform: translateY(-20px);
        transition: all 0.4s ease;
        z-index: 1001;
        display: flex;
        align-items: center;
        color: #fff;
    }

    .notification-popup.notification-show {
        opacity: 1;
        visibility: visible;
        transform: translateY(0);
    }

    .notification-content {
        font-size: 15px;
        font-weight: 500;
        display: flex;
        align-items: center;
    }

    .notification-content i {
        margin-right: 10px;
        font-size: 20px;
    }

    @media (max-width: 768px) {
        .notification-popup {
            right: 10px;
            max-width: 90%;
        }
    }
</style>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
<script>
    // Hamburger Menu
    const button = document.getElementById('hamburger-menu');
    button.addEventListener('click', function() {
        const span = button.getElementsByTagName('span')[0];
        span.classList.toggle('hamburger-menu-button-close');
        document.getElementById('ham-navigation').classList.toggle('on');
    });

    $('.menu li a').on('click', function() {
        $('#hamburger-menu').click();
    });

    // App Download Popup Logic (Shows automatically if not shown before, and via header icon)
    document.addEventListener("DOMContentLoaded", function() {
        const modal = document.getElementById('app-download-modal');
        const closeBtn = document.getElementById('close-download-modal');
        const confirmBtn = document.getElementById('confirm-download');
        const headerDownloadBtn = document.getElementById('header-download-btn');

        // Check if the prompt has been shown before in localStorage
        if (!localStorage.getItem('tasktube_app_prompt_shown')) {
            // Slight delay before popping up for better user experience
            setTimeout(() => {
                modal.classList.add('show-modal');
            }, 2000);
        }

        // Open modal explicitly when header download icon is clicked
        headerDownloadBtn.addEventListener('click', function(e) {
            e.preventDefault();
            modal.classList.add('show-modal');
        });

        function dismissModal() {
            modal.classList.remove('show-modal');
            // Save to localStorage so it won't auto-pop up again
            localStorage.setItem('tasktube_app_prompt_shown', 'true');
        }

        closeBtn.addEventListener('click', dismissModal);
        confirmBtn.addEventListener('click', dismissModal);
        
        // Also close if user clicks outside the modal content box
        modal.addEventListener('click', function(e) {
            e.target === modal && dismissModal();
        });
    });

    // Notification Logic
    const notificationQueue = [];
    let isNotificationShowing = false;
    const delay = 7000;
    const messages = [
        "@Alex earned $150.00 from video ads! 19min ago",
        "@Jame earned $50.00 from video ads! 20min ago",
        "@Gloria earned $200.00 from video ads! 53min ago",
        "@Sophie earned $75.00 from video ads! 1hr ago",
        "@Mark earned $120.00 from video ads! 2hrs ago"
    ];

    function showNotification(message) {
        const messageElement = document.getElementById("notification-message");
        messageElement.textContent = message;

        notificationQueue.push(message);
        if (!isNotificationShowing) {
            showNextNotification();
        }
    }

    function showNextNotification() {
        if (notificationQueue.length === 0) {
            isNotificationShowing = false;
            return;
        }

        const message = notificationQueue.shift();
        const notificationPopup = document.getElementById("notification-popup");
        const messageElement = document.getElementById("notification-message");
        messageElement.textContent = message;

        notificationPopup.classList.add("notification-show");
        isNotificationShowing = true;

        setTimeout(() => {
            notificationPopup.classList.remove("notification-show");
            isNotificationShowing = false;
            setTimeout(showNextNotification, 500);
        }, 4000);
    }

    messages.forEach((message, i) => {
        setTimeout(() => showNotification(message), (i + 1) * delay);
    });
</script>

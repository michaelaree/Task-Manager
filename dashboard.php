<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Dashboard</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f8f9fa;
        }

        header {
            background-color: #044f69;
            color: #fff;
            padding: 10px 0;
            text-align: center;
        }

        nav ul {
            list-style-type: none;
            margin: 0;
            padding: 0;
        }

        nav ul li {
            display: inline;
            margin-right: 20px;
        }

        nav ul li a {
            color: #fff;
            text-decoration: none;
            font-weight: bold;
            font-size: 18px;
        }

        .dashboard-container {
            max-width: 800px;
            margin: 0 auto;
            padding: 30px;
            background-color: #044f69;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
            border-radius: 10px;
            margin-top: 30px;
            color: white;
            font-size: 16px;
        
        }

        .welcome-message {
            text-align: center;
            margin-bottom: 30px;
        }

        

        .profile-section {
            text-align: center;
            margin-bottom: 30px;
        }

        .profile-section img {
            width: 150px;
            height: 150px;
            border-radius: 50%;
            object-fit: cover;
            margin-bottom: 20px;
        }

        .profile-section h2 {
            margin: 10px 0;
            font-size: 24px;
            
        }

        .profile-section p {
            color: #666;
            margin-bottom: 20px;
        }

        .action-buttons {
            text-align: center;
            margin-bottom: 30px;
        }

        .action-buttons a {
            display: inline-block;
            margin: 0 10px;
            padding: 10px 20px;
            background-color: #007bff;
            color: #fff;
            text-decoration: none;
            border-radius: 5px;
            transition: background-color 0.3s ease;
        }

        .action-buttons a:hover {
            background-color: #0056b3;
        }

        .logout-button {
            display: block;
            margin: 0 auto;
            text-align: center;
            background-color: #dc3545;
            color: #fff;
            text-decoration: none;
            padding: 10px 20px;
            border-radius: 5px;
            transition: background-color 0.3s ease;
            width: 150px;
        }

        .logout-button:hover {
            background-color: #bd2130;
        }

        .section-heading {
            font-size: 24px;
            margin-bottom: 15px;
        }

        .notifications,
        .data-visualization,
        .support-section {
            margin-bottom: 30px;
        }

        .support-section a {
            color: #007bff;
        }
        .hero .welcome-section {
        background-color: #044f69;
        color: #fff;
        text-align: center;
        padding: 50px 0;
    }


    /* .welcome-section {
            padding: 50px 30px;
            text-align: center;
        } */

        .hero .welcome-text {
            font-size: 30px;
            margin-bottom: 60px;
        }

        .cta-buttons {
            margin-top: 30px;
        }

        .cta-buttons li {
            display: inline;
            margin-right: 15px;
        }

        .cta-buttons a {
            background-color: black;
            color: white;
            text-decoration: none;
            font-weight: bold;
            font-size: 30px;
            padding: 10px 20px;
            border-radius: 5px;
            transition: background-color 0.3s ease;
        }

        .cta-buttons a:hover {
            background-color:black;
        }

    </style>
</head>

<body>
<div class="hero">
<div class="welcome-section">
        <h1 class="welcome-text">Welcome to Our Dashboard</h1>
        <p>Explore and manage the  dashboard</p>
        <div class="cta-buttons">
        <li><a href="home.php">Home</a></li>
                <li><a href="about.php">About Us</a></li>
        </div>
    </div>
    </div>
    <!-- <header>
        <nav>
            <ul>
                <li><a href="home.php">Home</a></li>
                <li><a href="about.php">About Us</a></li>
            </ul>
        </nav>
    </header> -->

   

    <div class="dashboard-container">
    <div class="welcome-message">
        <!-- <h1>Welcome to dashboard!</h1>
        <p>Explore and manage your dashboard.</p> -->
    </div>

    <!-- <div class="section-heading">Quick Links</div>
    <div class="quick-links">
        <a href="my-profile.html">My Profile</a>
        <a href="my-orders.html">My Orders</a>
        <a href="my-tasks.html">My Tasks</a>
        <a href="settings.html">Settings</a>
    </div> -->

    <div class="section-heading">Latest Activity</div>
    <div class="latest-activity">
        <!-- Display user's latest activity or updates here -->
        <ul>
            <li>15/10/2020: You have a new message from [Sender].</li>
            <li>16/10/2020: Your order #12345 has been shipped.</li>
            <li>17/10/2020: Task "Complete Project Proposal" is due today.</li>
        </ul>
    </div>

    <div class="section-heading">Upcoming Events</div>
    <div class="upcoming-events">
        <!-- Display upcoming events or appointments here -->
        <ul>
            <li>09/10/2020: Webinar on Technology Trends</li>
            <li>21/10/2020: Team Building Event</li>
            <li>24/10/2020: Product Launch Conference</li>
        </ul>
    </div>

    <div class="section-heading">Recommended Content</div>
    <div class="recommended-content">
        <!-- Display recommended articles, products, or content here -->
        <ul>
            <li>10 Tips for Productivity</li>
            <li>Explore our New Products</li>
            <li>How to Master Time Management</li>
        </ul>
    </div>

    <div class="section-heading">Account Details</div>
    <div class="account-details">
        <p>Account Type: Lobali</p>
        <p>Membership Status: [Membership Status]</p>
        <p>Expiration Date: 15/10/2024</p>
    </div>

    <!-- <div class="section-heading">Need Help?</div>
    <div class="support-section">
        <p>If you have any questions, <a href="contact-support.html">contact support</a>.</p>
    </div> -->

    <a href="index.php" class="logout-button">Logout</a>

</div>

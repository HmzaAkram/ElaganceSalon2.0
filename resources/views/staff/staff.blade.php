<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Elegance Men Hair Salon | Barber Panel</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link rel="stylesheet" href="styles.css">
    <style>
        /* General Reset */
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Poppins', sans-serif;
}

/* Body Styling */

body {
        background-color: #1b1b1b !important; /* Dark background for a luxe feel */
        font-family: 'Roboto', sans-serif;
        color: #d1d5db;
        overflow-x: hidden;
        display: flex;
        min-height: 100vh;
    }
/* Sidebar */
.sidebar {
    width: 250px;
    height: 100vh;
    background: linear-gradient(135deg, #151515, #333333);
    color: white;
    padding: 20px;
    display: flex;
    flex-direction: column;
    justify-content: space-between;
    box-shadow: 4px 0 10px rgba(0, 0, 0, 0.5); /* Subtle shadow for depth */
    position: fixed;
    z-index: 2;
    animation: slideIn 1s ease-in-out;
}

@keyframes slideIn {
    from {
        transform: translateX(-100%);
    }
    to {
        transform: translateX(0);
    }
}
.sidebar:hover{
    background-color: #34495e; /* Slightly lighter on hover */
}
.sidebar .logo {
    font-size: 24px;
    font-weight: bold;
    color: #c0a16b;
    text-align: center;
}

.sidebar .logo-icon {
    color: #c0a16b;
    margin-right: 5px;
    animation: spin 2s linear infinite;
}

@keyframes spin {
    0% {
        transform: rotate(0);
    }
    100% {
        transform: rotate(360deg);
    }
}

.sidebar .menu {
    list-style: none;
}

.sidebar .menu li {
    margin: 20px 0;
    animation: fadeIn 1.5s ease-in-out;
}

.sidebar .menu li a {
    text-decoration: none;
    color: white;
    font-size: 18px;
    padding: 10px;
    display: flex;
    align-items: center;
    border-radius: 5px;
    transition: background-color 0.3s, transform 0.3s;
}

.sidebar .menu li a:hover,
.sidebar .menu li a.active {
    background-color: #c0a16b;
    color: #333333;
    transform: scale(1.05);
}

/* Main Content */
.main {
    margin-left: 250px;
    flex-grow: 1;
    padding: 20px;
    color: white;
}

/* Navbar */
.navbar {
    background: linear-gradient(135deg, #c0a16b, #fcb045);
    padding: 15px 20px;
    border-radius: 10px;
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin-bottom: 20px;
    animation: fadeDown 1s ease-in-out;
}

@keyframes fadeDown {
    from {
        transform: translateY(-100%);
        opacity: 0;
    }
    to {
        transform: translateY(0);
        opacity: 1;
    }
}

.navbar .welcome {
    font-size: 18px;
    color: #333333;
}

.navbar .logout-btn {
    background: #333333;
    color: #c0a16b;
    border: none;
    padding: 10px 20px;
    border-radius: 5px;
    cursor: pointer;
    font-size: 16px;
    transition: transform 0.3s, background-color 0.3s;
}

.navbar .logout-btn:hover {
    background: #ffd700;
    color: #333333;
    transform: scale(1.1);
}

/* Dashboard Cards */
.stats {
    display: flex;
    gap: 20px;
    animation: fadeUp 1.5s ease-in-out;
}

@keyframes fadeUp {
    from {
        transform: translateY(50%);
        opacity: 0;
    }
    to {
        transform: translateY(0);
        opacity: 1;
    }
}

.card {
    background: linear-gradient(135deg, #252525, #404040);
    color: white;
    flex: 1;
    padding: 20px;
    border-radius: 10px;
    text-align: center;
    transition: transform 0.3s, box-shadow 0.3s;
    position: relative;
    overflow: hidden;
}

.card:hover {
    transform: scale(1.05);
    box-shadow: 0px 10px 15px rgba(0, 0, 0, 0.5);
}

.card::before {
    content: '';
    position: absolute;
    top: -50%;
    left: -50%;
    width: 200%;
    height: 200%;
    background: radial-gradient(circle, rgba(255, 255, 255, 0.1), transparent);
    transform: rotate(45deg);
    animation: glow 4s linear infinite;
}

@keyframes glow {
    0% {
        transform: translate(-50%, -50%) rotate(0deg);
    }
    100% {
        transform: translate(-50%, -50%) rotate(360deg);
    }
}

.card-content i {
    font-size: 40px;
    margin-bottom: 10px;
    color: ##c0a16b;
}

.card-content h3 {
    font-size: 36px;
    margin-bottom: 10px;
}

.card-content p {
    font-size: 16px;
    color: #c0a16b;
}
/* Profile Section */
.profile {
    background: linear-gradient(135deg, #252535, #1e1e2f);
    padding: 30px;
    border-radius: 15px;
    box-shadow: 0px 5px 15px rgba(0, 0, 0, 0.5);
    animation: fadeInProfile 1.5s ease-in-out;
}

@keyframes fadeInProfile {
    from {
        opacity: 0;
        transform: translateY(30px);
    }
    to {
        opacity: 1;
        transform: translateY(0);
    }
}

.section-title {
    font-size: 24px;
    font-weight: bold;
    text-align: center;
    color: #c0a16b;
    margin-bottom: 20px;
    text-shadow: 0px 2px 4px rgba(0, 0, 0, 0.7);
}

/* Profile Form */
.profile-form {
    display: flex;
    flex-direction: column;
    gap: 20px;
}

.form-group {
    position: relative;
    display: flex;
    flex-direction: column;
    gap: 8px;
}

.form-group label {
    font-size: 16px;
    font-weight: bold;
    color: #c0a16b;
    display: flex;
    align-items: center;
    gap: 5px;
    text-shadow: 0px 1px 2px rgba(0, 0, 0, 0.7);
}

.animated-input {
    background: #333333;
    border: none;
    border-radius: 5px;
    color: white;
    font-size: 16px;
    padding: 10px 15px;
    outline: none;
    position: relative;
    transition: box-shadow 0.3s, transform 0.3s;
}

.animated-input:focus {
    box-shadow: 0px 0px 8px #c0a16b;
    transform: scale(1.05);
}

.input-focus {
    position: absolute;
    bottom: -5px;
    left: 0;
    width: 0%;
    height: 3px;
    background: #c0a16b;
    transition: width 0.4s ease-in-out;
}

.animated-input:focus + .input-focus {
    width: 100%;
}

/* Save Button */
.save-btn {
    background: linear-gradient(135deg, #c0a16b, #fcb045);
    border: none;
    padding: 12px 20px;
    color: #333333;
    font-size: 16px;
    font-weight: bold;
    text-transform: uppercase;
    border-radius: 50px;
    cursor: pointer;
    display: flex;
    align-items: center;
    justify-content: center;
    gap: 8px;
    transition: transform 0.3s, box-shadow 0.3s;
    text-shadow: 0px 2px 4px rgba(255, 255, 255, 0.3);
}

.save-btn i {
    font-size: 18px;
    color: #333333;
}

.save-btn:hover {
    transform: scale(1.1);
    box-shadow: 0px 8px 15px rgba(0, 0, 0, 0.3);
    background: linear-gradient(135deg, #fcb045, #ffd700);
}

    </style>
</head>
<body>
    <!-- Sidebar -->
  <!-- Sidebar -->
<div class="sidebar">
    <h2 class="logo">
        <span class="logo-icon"><i class="fa fa-cut"></i></span> Elegance <span>Salon</span>
    </h2>
    <ul class="menu">
        <li><a href="/barber/dashboard" class="active"><i class="fa fa-dashboard"></i> Dashboard</a></li>
        <li><a href="/barber/appointments"><i class="fa fa-calendar-check"></i> Appointments</a></li>
        <li><a href="/barber/edit-appointments"><i class="fa fa-edit"></i> Edit Appointments</a></li>
        <li><a href="/barber/clients"><i class="fa fa-users"></i> Clients</a></li>
        <li><a href="/barber/services"><i class="fa fa-list"></i> Services</a></li>
        <li><a href="/barber/profile"><i class="fa fa-user"></i> Profile</a></li>
        <li><a href="/logout"><i class="fa fa-sign-out-alt"></i> Logout</a></li>
    </ul>
</div>


    <!-- Main Content -->
    <div class="main">
        <!-- Navbar -->
        <nav class="navbar">
            <div class="navbar-content">
                <span class="welcome">Welcome, Barber <strong>John Doe</strong></span>
                <button class="logout-btn" onclick="logout()">Logout</button>
            </div>
        </nav>

        <!-- Dashboard Section -->
        <section class="dashboard">
            <h1>Dashboard</h1>
            <div class="stats">
                <div class="card">
                    <div class="card-content">
                        <i class="fa fa-calendar-day"></i>
                        <h3>5</h3>
                        <p>Upcoming Appointments</p>
                    </div>
                </div>
                <div class="card">
                    <div class="card-content">
                        <i class="fa fa-check-circle"></i>
                        <h3>20</h3>
                        <p>Completed Appointments</p>
                    </div>
                </div>
                <div class="card">
                    <div class="card-content">
                        <i class="fa fa-clock"></i>
                        <h3>12:00 PM</h3>
                        <p>Next Appointment</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Profile Section -->
        <section class="profile">
            <h2 class="section-title">My Profile</h2>
            <form class="profile-form">
                <!-- Name Field -->
                <div class="form-group">
                    <label for="name">
                        <i class="fa fa-user"></i> Full Name
                    </label>
                    <input type="text" id="name" placeholder="John Doe" class="animated-input">
                    <span class="input-focus"></span>
                </div>

                <!-- Email Field -->
                <div class="form-group">
                    <label for="email">
                        <i class="fa fa-envelope"></i> Email Address
                    </label>
                    <input type="email" id="email" placeholder="john@example.com" class="animated-input">
                    <span class="input-focus"></span>
                </div>

                <!-- Save Changes Button -->
                <button type="button" class="save-btn" onclick="saveChanges()">
                    <i class="fa fa-save"></i> Save Changes
                </button>
            </form>
        </section>

        <script>
            function saveChanges() {
                alert("Your changes have been saved successfully!");
            }
        </script>

    </div>

    <script>
        function logout() {
            alert("Logged out successfully!");
        }
    </script>
</body>
</html>

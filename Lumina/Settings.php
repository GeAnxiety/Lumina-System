<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Sharp" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,1,0" />
    <link rel="stylesheet" href="Home.css">
    <title>
        Lumina | Home
    </title>
</head>
<body>
    <div class="container">
        <!-- Sidebar Section -->
        <aside>
            <div class="toggle">
                <div class="logo">
                    <img src="assets/Logo.png">
                    <h2>Lum<span class="danger">ina</span></h2>
                </div>
            </div>

            <div class="sidebar">
                <a href="Dashboard.php">
                    <span class="material-icons-sharp">
                        dashboard
                    </span>
                    <h3> Dashboard </h3>
                </a>
                <a href="Encoding.php">
                    <span class="material-icons-sharp">
                        receipt_long
                    </span>
                    <h3> Encoding </h3>
                </a>
                <a href="Inventory.php">
                    <span class="material-icons-sharp">
                        inventory
                    </span>
                    <h3> Inventory </h3>
                </a>
                <a href="Settings.php" class="active">
                    <span class="material-icons-sharp">
                        settings
                    </span>
                    <h3>Settings</h3>
                </a>
                <a href="Login.php">
                    <span class="material-icons-sharp">
                        logout
                    </span>
                    <h3>Logout</h3>
                </a>
            </div>
        </aside>
        <!-- End of Sidebar Section -->

        <!-- Main Content -->
        <main>
            <div class="new-users">
            <h2> Profile Settings </h2>
                <div class="user-list">
                    <div class="user">
                        <img src="assets/Logo.png">
                        <h2> Light of the World </h2>
                        <p> Commonwealth </p>
                    </div>
                </div>
            </div>

            <div class="recent-orders">
                <table>
                    <thead>
                        <tr>
                            <th> Username </th>
                            <th> Lightcom12</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th> Password </th>
                            <th> Jireh030712</th>
                        </tr>
                    </tbody>
                    <tbody>
                        <tr>
                            <th> Email Address </th>
                            <th> lightcommonwealth3@gmail.com </th>
                        </tr>
                    </tbody>
                </table>
            </div>
        </main>
        <!-- End of Main Content -->

        <!-- Right Section -->
        <div class="right-section">
            <div class="nav">
                <div class="profile">
                    <div class="info">
                        <p>Hey, <b>Lumina</b></p>
                        <small class="text-muted">Admin</small>
                    </div>
                    <div class="profile-photo">
                        <img src="assets/Logo.png">
                    </div>
                </div>

            </div>
            <!-- End of Nav -->

            <div class="user-profile">
                <div class="logo">
                    <img src="assets/BigLogo.JPG">
                    <h2> Lumina </h2>
                    <p> Inventory System </p>
                </div>
            </div>

            <div class="reminders">
                <div class="header">
                    <h2>Reminders</h2>
                    <span class="material-icons-sharp">
                        notifications_none
                    </span>
                </div>

                <div class="notification">
                    <div class="icon">
                        <span class="material-symbols-outlined">
                            notifications
                        </span>
                    </div>
                    <div class="content">
                        <div class="info">
                            <h3> Morning Service </h3>
                            <small class="text_muted">
                                09:00 AM - 12:00 PM
                            </small>
                        </div>
                        <span class="material-icons-sharp">
                            more_vert
                        </span>
                    </div>
                </div>

                <div class="notification">
                    <div class="icon">
                        <span class="material-symbols-outlined">
                            notifications
                        </span>
                    </div>
                    <div class="content">
                        <div class="info">
                            <h3> Afternoon Service </h3>
                            <small class="text_muted">
                                03:00 AM - 05:00 PM
                            </small>
                        </div>
                        <span class="material-icons-sharp">
                            more_vert
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="Home.js"></script>
</body>
</html>
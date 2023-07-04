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
                <a href="Dashboard.php" class="active">
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
                <a href="Settings.php">
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
            <h1> Dashboard </h1>
            <!-- Analyses -->
            <div class="analyse">
                <div class="sales">
                    <div class="status">
                        <div class="info">
                            <h3> Total Collection </h3>
                            <h2> ₱ 1,400.00 </h2>
                        </div>
                        <div class="progresss">
                            <svg>
                                <circle cx="43" cy="40" r="35"></circle>
                            </svg>
                            <div class="percentage">
                                <p>+81%</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="visits">
                    <div class="status">
                        <div class="info">
                            <h3> Total Expenses </h3>
                            <h2> ₱ 5,400.00 </h2>
                        </div>
                        <div class="progresss">
                            <svg>
                                <circle cx="40" cy="40" r="35"></circle>
                            </svg>
                            <div class="percentage">
                                <p>-48%</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="searches">
                    <div class="status">
                        <div class="info">
                            <h3> Total Deposit </h3>
                            <h2> ₱ 400.00 </h2>
                        </div>
                        <div class="progresss">
                            <svg>
                                <circle cx="43" cy="40" r="35"></circle>
                            </svg>
                            <div class="percentage">
                                <p>+21%</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End of Analyses -->

            <!-- New Users Section -->
            <div class="new-users">
                <h2> Users </h2>
                <div class="user-list">
                    <div class="user">
                        <img src="assets/Woman.gif">
                        <h2> Linsette </h2>
                        <p> Admin </p>
                    </div>
                    <div class="user">
                        <img src="assets/Man.gif">
                        <h2> Michael </h2>
                        <p> Auditor </p>
                    </div>
                </div>
            </div>
            <!-- End of New Users Section -->
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
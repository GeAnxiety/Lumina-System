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
                <a href="Encoding.php" class="active">
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
            <div class="recent-orders">
                <h2> Encoding </h2>
                <table>
                    <thead>
                        <tr>
                            <th> Tithes for the Tithes </th>
                            <th> Welfare Fund </th>
                            <th> Lovegift for Sr. Pastor </th>
                            <th> Savings </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td> <!-- Input field for Tithes -->
                            <input type="text" id="T2Input" placeholder="Enter Value" style="text-align: center;">
                            </td>
                            <td> <!-- Input field for Welfare Fund -->
                            <input type="text" id="WFInput" placeholder="Enter Value" style="text-align: center;">
                            </td>
                            <td> <!-- Input field for Lovegifts for Sr. Pastor -->
                            <input type="text" id="LSPInput" placeholder="Enter Value" style="text-align: center;">
                            </td>
                            <td> <!-- Input field for Savings -->
                            <input type="text" id="SInput" placeholder="Enter Value" style="text-align: center;">
                            </td>
                        </tr>
                    </tbody>
                    <tbody></tbody>
                    <thead>
                        <tr>
                            
                        </tr>
                    </thead>
                    <thead>
                        <tr>
                            <th> Lovegift for Speaker </th>
                            <th> Food </th>
                            <th> Scholarship </th>
                            <th> Worship Ministry </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td> <!-- Input field for Tithes -->
                            <input type="text" id="LSInput" placeholder="Enter Value" style="text-align: center;">
                            </td>
                            <td> <!-- Input field for Welfare Fund -->
                            <input type="text" id="FInput" placeholder="Enter Value" style="text-align: center;">
                            </td>
                            <td> <!-- Input field for Lovegifts for Sr. Pastor -->
                            <input type="text" id="SSInput" placeholder="Enter Value" style="text-align: center;">
                            </td>
                            <td> <!-- Input field for Savings -->
                            <input type="text" id="WMInput" placeholder="Enter Value" style="text-align: center;">
                            </td>
                        </tr>
                    </tbody>
                    <tbody></tbody>
                    <thead>
                        <tr>
                            
                        </tr>
                    </thead>
                    <thead>
                        <tr>
                            <th> Production Ministry </th>
                            <th> Dance Ministry </th>
                            <th> Kids Ministry </th>
                            <th> Mission Ministry </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td> <!-- Input field for Tithes -->
                            <input type="text" id="PMInput" placeholder="Enter Value" style="text-align: center;">
                            </td>
                            <td> <!-- Input field for Welfare Fund -->
                            <input type="text" id="DMInput" placeholder="Enter Value" style="text-align: center;">
                            </td>
                            <td> <!-- Input field for Lovegifts for Sr. Pastor -->
                            <input type="text" id="KMInput" placeholder="Enter Value" style="text-align: center;">
                            </td>
                            <td> <!-- Input field for Savings -->
                            <input type="text" id="MMInput" placeholder="Enter Value" style="text-align: center;">
                            </td>
                        </tr>
                    </tbody>
                    <tbody></tbody>
                    <thead>
                        <tr>
                            
                        </tr>
                    </thead>
                    <thead>
                        <tr>
                            <th> Maintenance Ministry </th>
                            <th> Ushering Ministry </th>
                            <th> Pastoral </th>
                            <th> Finance </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td> <!-- Input field for Tithes -->
                            <input type="text" id="MTMInput" placeholder="Enter Value" style="text-align: center;">
                            </td>
                            <td> <!-- Input field for Welfare Fund -->
                            <input type="text" id="UMInput" placeholder="Enter Value" style="text-align: center;">
                            </td>
                            <td> <!-- Input field for Lovegifts for Sr. Pastor -->
                            <input type="text" id="PTLInput" placeholder="Enter Value" style="text-align: center;">
                            </td>
                            <td> <!-- Input field for Savings -->
                            <input type="text" id="FNInput" placeholder="Enter Value" style="text-align: center;">
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <div class="recent-orders">
                <h2> Other Expenses </h2>
                <table>
                    <thead>
                        <tr>
                            <td>
                            <input type="text" id="Others1" placeholder="Enter Value" value="Savings" style="text-align: center; border-radius: 5px; margin: 10px;">
                            <input type="text" id="Others2" placeholder="Enter Value" value="Offering" style="text-align: center; border-radius: 5px; margin: 10px;">
                            <input type="text" id="Others3" placeholder="Enter Value" value="Events Funds" style="text-align: center; border-radius: 5px; margin: 10px;">
                            <input type="text" id="Others4" placeholder="Enter Value" value="Mineral Water" style="text-align: center; border-radius: 5px; margin: 10px;">
                            </td>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                                <input type="text" id="OthersInput1" placeholder="Enter Value" style="text-align: center; border: 1px solid #ccc; border-radius: 5px; margin: 10px;">
                                <input type="text" id="OthersInput2" placeholder="Enter Value" style="text-align: center; border: 1px solid #ccc; border-radius: 5px; margin: 10px;">
                                <input type="text" id="OthersInput3" placeholder="Enter Value" style="text-align: center; border: 1px solid #ccc; border-radius: 5px; margin: 10px;">
                                <input type="text" id="OthersInput4" placeholder="Enter Value" style="text-align: center; border: 1px solid #ccc; border-radius: 5px; margin: 10px;">
                            </td>
                        </tr>
                    </tbody>
                    <thead>
                        <tr>
                            <td>
                                <input type="text" id="Others5" style="text-align: center; border: 1px solid #ccc; border-radius: 5px; margin: 10px;">
                                <input type="text" id="Others6" style="text-align: center; border: 1px solid #ccc; border-radius: 5px; margin: 10px;">
                                <input type="text" id="Others7" style="text-align: center; border: 1px solid #ccc; border-radius: 5px; margin: 10px;">
                                <input type="text" id="Others8" style="text-align: center; border: 1px solid #ccc; border-radius: 5px; margin: 10px;">
                            </td>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                                <input type="text" id="OthersInput5" placeholder="Enter Value" style="text-align: center; border: 1px solid #ccc; border-radius: 5px; margin: 10px;">
                                <input type="text" id="OthersInput6" placeholder="Enter Value" style="text-align: center; border: 1px solid #ccc; border-radius: 5px; margin: 10px;">
                                <input type="text" id="OthersInput7" placeholder="Enter Value" style="text-align: center; border: 1px solid #ccc; border-radius: 5px; margin: 10px;">
                                <input type="text" id="OthersInput8" placeholder="Enter Value" style="text-align: center; border: 1px solid #ccc; border-radius: 5px; margin: 10px;">
                            </td>
                        </tr>
                    </tbody>
                    <thead>
                        <tr>
                            <td>
                                <input type="text" id="Others9" style="text-align: center; border: 1px solid #ccc; border-radius: 5px; margin: 10px;">
                                <input type="text" id="Others10" style="text-align: center; border: 1px solid #ccc; border-radius: 5px; margin: 10px;">
                                <input type="text" id="Others11" style="text-align: center; border: 1px solid #ccc; border-radius: 5px; margin: 10px;">
                                <input type="text" id="Others12" style="text-align: center; border: 1px solid #ccc; border-radius: 5px; margin: 10px;">
                            </td>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                                <input type="text" id="OthersInput9" placeholder="Enter Value" style="text-align: center; border: 1px solid #ccc; border-radius: 5px; margin: 10px;">
                                <input type="text" id="OthersInput10" placeholder="Enter Value" style="text-align: center; border: 1px solid #ccc; border-radius: 5px; margin: 10px;">
                                <input type="text" id="OthersInput11" placeholder="Enter Value" style="text-align: center; border: 1px solid #ccc; border-radius: 5px; margin: 10px;">
                                <input type="text" id="OthersInput12" placeholder="Enter Value" style="text-align: center; border: 1px solid #ccc; border-radius: 5px; margin: 10px;">
                            </td>
                        </tr>
                    </tbody>
                    <thead>
                        <tr>
                            <td>
                                <button onclick="displayValues()" style="color: white; cursor: pointer; margin: 10px; padding: 10px 20px; height: 8.2rem; width: 10rem; text-align: center; border-radius: 5px; background-color: transparent;"> 
                                <img src="assets/Adds.gif" alt="Button Image" style="height: 100px; width: 100px;">
                                ADD
                                </button>

                                <button id="clearButton" style="color: white; cursor: pointer; margin: 10px; padding: 10px 20px; height: 8.2rem; width: 10rem; text-align: center; border-radius: 5px; background-color: transparent;"> 
                                <img src="assets/Clears.gif" alt="Button Image" style="height: 100px; width: 100px;">
                                CLEAR ALL
                                </button>
                            </td>
                        </tr>
                    </thead>
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
    <script src="Encoding.js"></script>
</body>
</html>
<header class="d-flex site-header">
    <nav class="d-flex inline algn-cnte nav-container">
        <!-- Logo -->
        <div class="logo font algn-cnte">
            <h1>Logo</h1>
        </div>

        <!-- Navigation Menu -->
        <div class="menu font d-flex inline">
            <ul>
                <li><a href="home.php">Home</a></li>
                <li><a href="tips.php">Tips</a></li>
                <li><a href="SocialApps.php">Social Apps</a></li>

                <!-- Dropdown -->
                <li class="dropdown">
                    <a href="#">Help ▾</a>
                    <div class="dropdown-content d-flex">
                       <ul class="drp-content">
                        <li><a href="#">As a Parent</a></li>
                        <li><a href="#">As Student</a></li>
                    </ul> 
                    </div>
                    
                </li>

                <li><a href="contact.php">Contact</a></li>
            </ul>
        </div>

        <!-- Search and Icons -->
        <div class="serch-bar algn-cnte">
            <form action="#" method="get" class="font search-form">
                <input type="text" placeholder="Search..." name="search">
                <button type="submit"><i class="fa-solid fa-magnifying-glass"></i></button>
                <button type="button"><i class="fa-solid fa-bell"></i></button>
                <button type="button"><i class="fa-solid fa-user"></i></button>
                <a href="../control/logout.php"><i class="fa-solid fa-right-from-bracket logout-icon"></i></a>
            </form>
        </div>

        <!-- Burger Icon (for mobile) -->
        <div class="burger">
            <span></span><span></span><span></span>
        </div>
    </nav>
</header>

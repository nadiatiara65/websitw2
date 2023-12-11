<div class="container" id="navbar">
        <div class="nav_section">
            <div class="navbar navbar-expand-lg navbar-light">
                <a href="#" class="navbar-brand text-white">
                    PORTOFOLIO<span>NADIA</span>!
                </a>
                <button class="navbar-toggler" style="border: none;" type="button" data-toggle="collapse"
                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <i class="fa fa-bars text-white"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarsupportedcontent">
                    <ul class="navbar-nav ml-auto">
                    <?php if(checkLogin()): ?>
                        <li class="nav-item active">
                            <a class="nav-link" href="#home" style="color: #f87652 !important;">Home</a>
                        </li>
                        <li class="nav-item active">
                            <a class="nav-link " href="bukutamu.php">Bukutamu</a>
                        </li>
                        <li class="nav-item active">
                            <a class="nav-link" href="manajemen-users.php">Users</a>
                        </li>
                        <li class="nav-item active">
                            <a class="nav-link" href="manajemen-profile.php">Profiles</a>
                        </li>
                        <li class="nav-item active">
                            <a class="nav-link" href="logout.php">logout</a>
                        </li>
                        <?php endif; ?>
                    </ul>
                </div>
            </div>
        </div>
    </div>

<nav class="navbar navbar-expand-lg bg-body-tertiary" data-bs-theme="dark">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">Welcome Admin</a>
           <!-- Toggler for mobile view -->
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="./homepage.php">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="./edit_profile_a.php">Edit profile</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Admin options
                </a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="leave_applications.php">Leave applications</a></li>
                  <li><a class="dropdown-item" href="myteam.php">My Team</a></li>
                  <li><a class="dropdown-item" href="complaints.php">Complaints</a></li>
                  <li><hr class="dropdown-divider"></li>
                  <li><a class="dropdown-item" href="../Login_page.php">Logout</a></li>
                </ul>
              </li>
              <li class="nav-item">
                <a class="nav-link disabled" aria-disabled="true">Announcements</a>
              </li>
            </ul>
            <form id="searchForm" class="d-flex" role="search" method="get">
              <input name="search_query" id="searchQuery" class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
              <button onclick="searchRedirect()" class="btn btn-outline-success" >Search</button>
            </form>
            </div>
        </div>
      </nav>
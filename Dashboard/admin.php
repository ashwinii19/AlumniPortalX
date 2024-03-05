<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <title>Admin Dashboard</title>
  <link rel="stylesheet" href="style1.css" />
  <!-- Font Awesome Cdn Link -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"/>
</head>
<body>
  <div class="container">
    <nav>
      <ul>
        <li><a href="#" class="logo">
          <img src="img/logo.png" alt="">
        </a></li>
                <li>
                  <form action="search.php" method='POST'>

            <button type='submit' name='submit'><i class="fas fa-search"></i></button>
             <input type="text" placeholder="Search.." id='address' name='address'>
         </a></li>        
        <li><a href="admin.php">
          <i class="fas fa-home"></i>
          <span class="nav-item">Home</span>
        </a></li>

        <li><a href="add-alumni.php">
            <i class="fas fa-user-plus"></i>
            <span class="nav-item">Add Alumni</span>
          </a></li>
        <li><a href="friends.php">
            <i class="fas fa-address-card"></i>
            <span class="nav-item">Manage Alumni</span>
          </a></li>
        <li><a href="add-event.html">
          <i class="fas fa-calendar-day"></i>
          <span class="nav-item">Add Event</span>
        </a></li>
        <li><a href="event.php">
          <i class="fas fa-tasks"></i>
          <span class="nav-item">Manage Events</span>
        </a></li>
       
        <li><a href="add-staff.php">
          <i class="fas fa-users"></i>
          <span class="nav-item"> Add Staff</span>
        </a></li>
        <li><a href="staff.php">
          <i class="fas fa-users"></i>
          <span class="nav-item">Manage Staff</span>
        </a></li>
        <li><a href="feedback-list.php">
          <i class="fas fa-comment"></i>
          <span class="nav-item">Feedbacks</span>
        </a></li>
        <li><a href="../index.html" class="logout">
          <i class="fas fa-sign-out-alt"></i>
          <span class="nav-item">Log out</span>
        </a></li>
      </ul>
    </nav>

    <section class="main">
      <div class="main-top">
        <h1>Admin Dashboard</h1>
        <i class="fas fa-user-cog"></i>
      </div>
      <div class="main-skills">
        <div class="card">
          <i class="fas fa-user-graduate"></i>
          <h3>Alumni</h3>
          <button>More</button>
        </div>
        <div class="card">
          <i class="fas fa-calendar-check"></i>
          <h3>Events</h3>
          <button href="event.html">more</button>
        </div>
        <div class="card">
          <i class="fas fa-money-check-alt"></i>
          <h3>Donation</h3>
          <button>more</button>
        </div>
      
      </div>
      <div class="course-box">

  </div>

      </section>
    </section>
  </div>
</body>
</html>

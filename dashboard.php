<?php
session_start();  // Start the session

 //Check if the user is logged in (i.e., if the session has 'first_name' and 'last_name')
if (!isset($_SESSION['first_name']) || !isset($_SESSION['last_name'])) {
    // If not logged in, redirect to the login page or show an error
    header("Location: login.php");
    exit();
}

// Retrieve the user's first and last name from the session
$first_name = $_SESSION['first_name'];
$last_name = $_SESSION['last_name'];
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet" />
  <link rel="stylesheet" href="style.css" />
  <title>Dashboard</title>
</head>

<body>
  <!-- Sidebar and Content Wrapper -->
  <div class="dashboard-page">
    <!-- Sidebar (unchanged) -->
    <div class="sidebar">
      <a href="#" class="logo">
        <i class="bx bx-code-alt"></i>
        <div class="logo-name"><span>On_</span>A.ment</div>
      </a>
      <ul class="side-menu">
        <li class="active">
          <a href="dashboard.php"><i class="bx bxs-dashboard"></i>Dashboard</a>
        </li>
        <li>
          <a href="request.php"><i class="bx bx-store-alt"></i>Request</a>
        </li>
        <li>
          <a href="index.php"><i class="bx bx-analyse"></i>Appointment</a>
        </li>
        <li><a href="registrar.php"><i class="bx bx-group"></i>Registrar</a> </li>
      </ul>
      <ul class="side-menu">
        <li>
          <a href="logout.php" class="logout">
            <i class="bx bx-log-out-circle"></i>
            Logout
          </a>
        </li>
      </ul>
    </div>

    <!-- Content Section -->
    <div class="content">
      <nav>
        <i class="bx bx-menu"></i>
        <input type="checkbox" id="theme-toggle" hidden />
        <label for="theme-toggle" class="theme-toggle"></label>
      </nav>

      <!-- Dashboard Main Content -->
      <main>
        <!-- Header Section -->
        <div class="header">
          <h1>Welcome to Your Dashboard, <?php echo htmlspecialchars($first_name) . ' ' . htmlspecialchars($last_name); ?>!</h1>
        </div>

        <!-- User Info Section -->
        <div class="user-info">
          <div class="user-card">
            <h3><?php echo htmlspecialchars($first_name) . ' ' . htmlspecialchars($last_name); ?></h3>
            <p>Student</p>
          </div>
        </div>

        <!-- Key Stats Section -->
        <section class="stats">
          <div class="stat-card">
            <h4>Total Requests</h4>
            <p>0</p>
          </div>
          <div class="stat-card">
            <h4>Pending Approval</h4>
            <p>0</p>
          </div>
          <div class="stat-card">
            <h4>Completed Requests</h4>
            <p>0</p>
          </div>
          <div class="stat-card">
            <h4>Upcoming Appointments</h4>
            <p>0</p>
          </div>
        </section>

        <!-- Request Analytics Chart (if needed) -->
        <div class="chart-container">
          <h3>Request Analytics</h3>
          <canvas id="requestChart"></canvas>
        </div>
      </main>
    </div>
  </div>
  <style>

    .user-info {
      display: flex;
      justify-content: center;
      margin-top: 30px;
    }

    .user-card {
      background: var(--light);
      padding: 20px;
      border-radius: 10px;
      box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
      text-align: center;
    }

    .user-card img {
      width: 100px;
      height: 100px;
      border-radius: 50%;
      margin-bottom: 10px;
    }

    .user-card h3 {
      font-size: 1.5rem;
    }

    .user-card p {
      font-size: 1rem;
      color: var(--dark-grey);
    }

    .stats {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(240px, 1fr));
      gap: 20px;
      margin-top: 30px;
    }

    .stat-card {
      background: var(--light);
      padding: 20px;
      border-radius: 10px;
      text-align: center;
      box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    }

    .stat-card h4 {
      font-size: 1.2rem;
      color: var(--dark);
    }

    .stat-card p {
      font-size: 2rem;
      font-weight: 600;
    }

    .chart-container {
      background: var(--light);
      padding: 20px;
      border-radius: 10px;
      box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
      margin-top: 30px;
    }

    .chart-container h3 {
      font-size: 1.5rem;
      color: var(--dark);
    }

    /* Responsive Styles */
    @media (max-width: 768px) {
      .content {
        margin-left: 0;
        width: 100%;
      }
    }
  </style>

  <script src="script.js"></script>
</body>

</html>

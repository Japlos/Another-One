<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Certificate of Registration</title>
  <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet" />
  <link rel="stylesheet" href="style.css">
  <script>
    document.addEventListener("DOMContentLoaded", function () {
      document.querySelector('.submit-btn').addEventListener('click', function (event) {
        event.preventDefault(); // Prevent the default form submission behavior

        // Gather form data
        const formData = {
          name: document.getElementById('name').value,
          studentNumber: document.getElementById('student-number').value,
          appointmentDate: document.getElementById('appointment-date').value
        };

        // Populate confirmation modal
        const confirmationDetails = document.getElementById('confirmation-details');
        const confirmationHTML = `
          <p><strong>Name:</strong> ${formData.name}</p>
          <p><strong>Student Number:</strong> ${formData.studentNumber}</p>
          <p><strong>Preferred Appointment Date:</strong> ${formData.appointmentDate}</p>
          <i>Please bring your class cards. <br>(1st and 2nd Semester)</i>
        `;
        confirmationDetails.innerHTML = confirmationHTML;

        // Show modal
        document.getElementById('confirmation-modal').style.display = 'flex';

        // Handle Edit action
        document.getElementById('edit-btn').addEventListener('click', function () {
          document.getElementById('confirmation-modal').style.display = 'none';
        });

        // Handle Submit action
        document.getElementById('submit-btn').addEventListener('click', function () {
          alert('Form submitted!');
          document.getElementById('confirmation-modal').style.display = 'none';
        });
      });
    });
  </script>
</head>

<body>
  <div class="sidebar">
    <a href="#" class="logo">
      <i class="bx bx-code-alt"></i>
      <div class="logo-name"><span>On_</span>A.ment</div>
    </a>
    <ul class="side-menu">
      <li>
        <a href="dashboard.php"><i class="bx bxs-dashboard"></i>Dashboard</a>
      </li>
      <li class="active">
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

  <div class="form-container">
    <h1>Certificate of Registration Form</h1>
    <form>
      <div class="form-row">
        <div class="form-group">
          <label for="name">Name:</label>
          <input type="text" id="name" name="name" required>
        </div>
        <div class="form-group">
          <label for="student-number">Student Number:</label>
          <input type="text" id="student-number" name="student-number" required>
        </div>
      </div>
      <div class="form-row">
        <div class="form-group">
          <label for="appointment-date">Preferred Appointment Date:</label>
          <input type="date" id="appointment-date" name="appointment-date" required>
        </div>
      </div>
      <button type="submit" class="submit-btn">Submit</button>
    </form>
  </div>

  <!-- Confirmation Modal -->
  <div id="confirmation-modal" style="display: none; position: fixed; top: 0; left: 0; width: 100%; height: 100%; background: rgba(0, 0, 0, 0.5); justify-content: center; align-items: center;">
    <div style="background: white; padding: 20px; border-radius: 10px; width: 90%; max-width: 400px; text-align: center;">
      <h2>Confirmation</h2>
      <div id="confirmation-details"></div>
      <div style="margin-top: 20px;">
        <button id="edit-btn" style="background: #f5f5f5; border: 1px solid #ccc; padding: 10px 20px; margin-right: 10px; cursor: pointer;">Edit</button>
        <button id="submit-btn" style="background: #d32f2f; color: white; border: none; padding: 10px 20px; cursor: pointer;">Submit</button>
      </div>
    </div>
  </div>

  <style>
    @import url("https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&display=swap");

    :root {
      --light: #f6f6f9;
      --primary: #1976d2;
      --grey: #eee;
      --dark: #363949;
      --danger: #d32f2f;
    }

    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      font-family: "Poppins", sans-serif;
    }

    body {
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
      background: var(--grey);
    }

    .form-container {
      background: var(--light);
      padding: 30px;
      border-radius: 15px;
      box-shadow: 0 8px 20px rgba(0, 0, 0, 0.1);
      width: 100%;
      max-width: 400px;
      text-align: center;
    }

    h1 {
      margin-bottom: 20px;
      color: var(--danger);
    }

    .form-row {
      display: flex;
      flex-direction: column;
      gap: 20px;
      margin-bottom: 20px;
    }

    .form-group label {
      display: block;
      font-weight: 500;
      color: var(--dark);
      margin-bottom: 8px;
    }

    .form-group input {
      width: 100%;
      padding: 10px;
      font-size: 16px;
      border: 1px solid var(--grey);
      border-radius: 5px;
    }

    .form-group input:focus {
      outline: none;
      border-color: var(--primary);
    }

    .submit-btn {
      background: var(--danger);
      color: #fff;
      border: none;
      padding: 12px;
      width: 100%;
      font-size: 16px;
      font-weight: 600;
      border-radius: 5px;
      cursor: pointer;
      transition: background 0.3s ease;
    }

    .submit-btn:hover {
      background: #b71c1c;
    }

    @media screen and (max-width: 768px) {
      .form-container {
        padding: 20px;
      }
    }
  </style>
</body>

</html>

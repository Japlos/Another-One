<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link
    href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css"
    rel="stylesheet" />
  <link rel="stylesheet" href="index.css" />
  <title>Welcome to On_A.ment</title>
</head>

<body>
  <div class="container">
    <div class="forms-container">
      <div class="login-signup">
        <!--Log In-->
        <form action="studentdashboard.html" class="sign-in-form">
          <h2 class="title">Log In</h2>
          <div class="input-field">
            <i class="bx bxs-user"></i>
            <input
              type="text"
              placeholder="Student Number"
              pattern="[0-4]{5}-[0-9]{2}-[0-9]{4}"
              required />
          </div>
          <div class="input-field">
            <i class="bx bxs-lock"></i>
            <input
              type="password"
              placeholder="Password"
              id="password"
              minlength="7"
              maxlength="14"
              required />
            <img
              src="assets/hide.png"
              alt="Toggle Password Visibility"
              id="hide" />
          </div>
          <a href="admindashboard.html">Hey</a>
          <input type="submit" value="Continue" class="btn solid" />
        </form>

        <!--Sign Up-->
        <form action="signup.php" method="POST" class="sign-up-form">
          <h2 class="title">Sign up</h2>
          <div class="input-field">
            <i class="bx bxs-user"></i>
            <input
              type="text"
              name="student_number"
              placeholder="Student Number"
              pattern="[0-4]{5}-[0-9]{2}-[0-9]{4}" />
          </div>
          <div class="input-field">
            <i class="bx bxs-user-detail"></i>
            <input type="text" name="first_name" placeholder="First Name" required />
          </div>
          <div class="input-field">
            <i class="bx bxs-user-detail"></i>
            <input type="text" name="last_name" placeholder="Last Name" required />
          </div>
          <div class="input-field">
            <i class="bx bxs-graduation"></i>
            <select id="courses" title="course" name="course" required>
              <option value="" disabled selected>Course</option>
              <option value="BSCS">
                Bachelor of Science in Computer Science (BSCS)
              </option>
              <option value="ACT">
                Associate in Computer Technology(ACT)
              </option>
              <option value="BSBA">
                Bachelor of Science in Business Administration (BSBA)
              </option>
              <option value="BACOMM">
                Bachelor of Arts in Communication (BACOMM)
              </option>
              <option value="BSCRIM">
                Bachelor of Science in Criminology (BSCRIM)
              </option>
              <option value="BSED">
                Bachelor of Secondary Education (BSED)
              </option>
              <option value="BEED">
                Bachelor of Elementary Education (BEED)
              </option>
              <option value="BPED">
                Bachelor of Physical Education (BPED)
              </option>
              <option value="BSN">Bachelor of Science in Nursing(BSN)</option>
            </select>
          </div>

          <div class="input-field">
            <i class="bx bxs-envelope"></i>
            <input type="email" name="email" placeholder="Email" required />
          </div>
          <div class="input-field">
            <i class="bx bxs-lock"></i>
            <input
              type="password"
              name="password"
              placeholder="Password"
              id="passwordsignup"
              minlength="7"
              maxlength="14"
              required />
            <img
              src="assets/hide.png"
              alt="Toggle Password Visibility"
              id="hidesignup" />
          </div>

          <a href="index.php">
            <input type="submit" class="btn" id="signup" value="Sign up"/>
          </a>
        </form>
      </div>
    </div>

    <div class="panels-container">
      <div class="panel left-panel">
        <div class="content">
          <h1>On_<span>A.ment</span></h1>
          <p>Don't have an account yet? Join us!</p>
          <button class="btn transparent" id="sign-up-btn">Sign up</button>
        </div>
      </div>
      <div class="panel right-panel">
        <div class="content">
          <h1>On_<span>A.ment</span></h1>
          <p>Already had an account? Log in now!</p>
          <button class="btn transparent" id="sign-in-btn">Log in</button>
        </div>
      </div>
    </div>
  </div>

  <script src="index.js"></script>
</body>

</html>
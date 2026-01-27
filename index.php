<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Srinivasu Challapalli | Portfolio</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

  <style>
    body {
      margin: 0;
      font-family: 'Segoe UI', sans-serif;
      background:
        linear-gradient(rgba(0,0,0,0.65), rgba(0,0,0,0.85)),
        url("https://wall.alphacoders.com/big.php?i=592074");
      background-size: cover;
      background-position: center;
      background-attachment: fixed;
      color: #ffffff;
      scroll-behavior: smooth;
    }

    .navbar {
      background: rgba(0,0,0,0.8);
      backdrop-filter: blur(10px);
    }

    .navbar-brand {
      font-size: 1.6rem;
      font-weight: 700;
      letter-spacing: 1px;
    }

    .nav-link {
      font-size: 1.1rem;
      margin-left: 15px;
    }

    .hero {
      min-height: 100vh;
      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: center;
      text-align: center;
      padding: 20px;
    }

    .hero h1 {
      font-size: 3.8rem;
      font-weight: 800;
      text-shadow: 0 0 30px cyan;
    }

    .hero p {
      font-size: 1.6rem;
      margin-top: 15px;
      opacity: 0.9;
    }

    .hero .btn {
      margin-top: 30px;
      padding: 14px 36px;
      font-size: 1.2rem;
      border-radius: 40px;
    }

    section {
      padding: 90px 20px;
    }

    section h2 {
      text-align: center;
      font-size: 2.8rem;
      font-weight: 700;
      margin-bottom: 50px;
    }

    .card-custom {
      background: rgba(0,0,0,0.7);
      border-radius: 18px;
      padding: 30px;
      transition: 0.4s;
    }

    .card-custom:hover {
      transform: translateY(-10px);
      box-shadow: 0 0 35px rgba(0,255,255,0.35);
    }

    .skill {
      font-size: 1.3rem;
      font-weight: 600;
      text-align: center;
    }

    input {
      background: #111 !important;
      border: 1px solid #555 !important;
      color: #fff !important;
    }

    footer {
      background: #000;
      text-align: center;
      padding: 25px;
      font-size: 1rem;
      opacity: 0.85;
    }
  </style>
</head>

<body>

<!-- NAVBAR -->
<nav class="navbar navbar-expand-lg navbar-dark fixed-top">
  <div class="container">
    <a class="navbar-brand" href="#">Itsmypage</a>
    <button class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#nav">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="nav">
      <ul class="navbar-nav ms-auto align-items-center">
        <li class="nav-item"><a class="nav-link" href="#about">About</a></li>
        <li class="nav-item"><a class="nav-link" href="#skills">Skills</a></li>
        <li class="nav-item"><a class="nav-link" href="#projects">Projects</a></li>
        <li class="nav-item">
          <button class="btn btn-success ms-3" data-bs-toggle="modal" data-bs-target="#loginModal">
            Make a Deal
          </button>
        </li>
      </ul>
    </div>
  </div>
</nav>

<!-- HERO -->
<div class="hero">
  <h1>Hi, I'm Srinivasu Challapalli</h1>
  <p>AI • Web Developer • Data Analyst • Educator</p>
  <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#loginModal">
    Client Login
  </button>
</div>

<!-- ABOUT -->
<section id="about">
  <div class="container">
    <h2>About Me</h2>
    <p class="text-center fs-4">
      Assistant Professor at RGUKT AP IIIT, former Intel Graduate Technical Trainee,
      freelance web developer delivering AI, analytics, and modern web solutions.
    </p>
  </div>
</section>

<!-- SKILLS -->
<section id="skills">
  <div class="container">
    <h2>Skills</h2>
    <div class="row g-4">
      <div class="col-md-3"><div class="card-custom skill">HTML • CSS • JavaScript</div></div>
      <div class="col-md-3"><div class="card-custom skill">AI & Machine Learning</div></div>
      <div class="col-md-3"><div class="card-custom skill">Power BI & Analytics</div></div>
      <div class="col-md-3"><div class="card-custom skill">Blockchain (Corda)</div></div>
    </div>
  </div>
</section>

<!-- PROJECTS -->
<section id="projects">
  <div class="container">
    <h2>Projects</h2>
    <div class="row g-4">
      <div class="col-md-4"><div class="card-custom">Blockchain Crowdsourcing System</div></div>
      <div class="col-md-4"><div class="card-custom">Movie Recommendation System</div></div>
      <div class="col-md-4"><div class="card-custom">Freelance LMS Website</div></div>
    </div>
  </div>
</section>

<!-- FOOTER -->
<footer>
  © 2026 Srinivasu Challapalli • Let’s build something amazing
</footer>

<!-- REGISTER MODAL -->
<div class="modal fade" id="registerModal">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content bg-dark text-light">
      <div class="modal-header">
        <h5 class="modal-title">Client Registration</h5>
        <button class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
      </div>
      <div class="modal-body">
        <form id="registerForm">
          <input name="name" class="form-control mb-3" placeholder="Full Name" required>
          <input name="email" class="form-control mb-3" placeholder="Email" required>
          <input name="password" type="password" class="form-control mb-3" placeholder="Password" required>
          <button type="button" class="btn btn-success w-100" onclick="registerUser()">Register</button>
        </form>
        <div class="text-center mt-3">
          <small>Already registered?
            <a href="#" class="text-info" onclick="backToLogin()">Login here</a>
          </small>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- LOGIN MODAL -->
<div class="modal fade" id="loginModal">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content bg-dark text-light">
      <div class="modal-header">
        <h5 class="modal-title">Client Login</h5>
        <button class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
      </div>
      <div class="modal-body">
        <form id="loginForm">
          <input name="email" class="form-control mb-3" placeholder="Email" required>
          <input name="password" type="password" class="form-control mb-3" placeholder="Password" required>
          <button type="button" class="btn btn-primary w-100 mb-3" onclick="loginUser()">Login</button>
        </form>
        <div class="text-center">
          <small>Not registered?
            <a href="#" class="text-info" onclick="openRegister()">Create an account</a>
          </small>
        </div>
      </div>
    </div>
  </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

<script>
const loginModal = new bootstrap.Modal(document.getElementById('loginModal'));
const registerModal = new bootstrap.Modal(document.getElementById('registerModal'));

function openRegister() {
  loginModal.hide();
  setTimeout(() => registerModal.show(), 400);
}

function backToLogin() {
  registerModal.hide();
  setTimeout(() => loginModal.show(), 400);
}

function registerUser() {
  fetch("backend/register.php", {
    method: "POST",
    body: new FormData(document.getElementById("registerForm"))
  })
  .then(res => res.text())
  .then(data => {
    if (data === "success") {
      alert("✅ Registration successful. Please login.");
      backToLogin();
    } else if (data === "exists") {
      alert("⚠ Email already registered");
    }
  });
}

function loginUser() {
  fetch("backend/login.php", {
    method: "POST",
    body: new FormData(document.getElementById("loginForm"))
  })
  .then(res => res.text())
  .then(data => {
    if (data === "success") {
      window.location.href = "deal.php";
    } else {
      alert("❌ Invalid login credentials");
    }
  });
}
</script>

</body>
</html>

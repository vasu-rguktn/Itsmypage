<?php
session_start();
if (!isset($_SESSION['user_id'])) {
  header("Location: index.php");
  exit;
}
?>
<!DOCTYPE html>
<html>
<head>
  <title>Make a Deal</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-dark text-light">

<div class="container mt-5">
  <h2>Welcome, <?php echo $_SESSION['user_name']; ?> 👋</h2>
  <p>Describe your project requirement</p>

  <form>
    <textarea class="form-control mb-3" rows="5" placeholder="Project details"></textarea>
    <button class="btn btn-success">Submit</button>
  </form>

  <a href="logout.php" class="btn btn-danger mt-3">Logout</a>
</div>

</body>
</html>

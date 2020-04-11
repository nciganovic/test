<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">Shop</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    <div class="navbar-nav">
      <a class="nav-item nav-link active" href="index.php">Home</a>
      <?php if(isset($_SESSION["role"])): ?>
      <a class="nav-item nav-link active" href="dashboard.php">Admin</a>
      <a class="nav-item nav-link active" href="logout.php">Logout</a>
      <?php else: ?>
      <a class="nav-item nav-link active" href="login.php">Login</a>
      <?php endif ?>
      <a class="nav-item nav-link active" href="testDocs.pdf">Documentation</a>
    </div>
  </div>
</nav>
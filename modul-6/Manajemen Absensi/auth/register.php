<?php
require '../config/db.php';

$error = "";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];

    $check = $pdo->prepare("SELECT * FROM users WHERE username = ?");
    $check->execute([$username]);
    if ($check->rowCount() > 0) {
        $error = "Username sudah terdaftar.";
    } else {
        $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
        $stmt = $pdo->prepare("INSERT INTO users (username, password) VALUES (?, ?)");
        $stmt->execute([$username, $password]);
        header("Location: login.php");
        exit();
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Register</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <style>
    body {
      background: linear-gradient(135deg,rgb(31, 112, 203),rgb(169, 195, 248));
    }
  </style>
</head>
<body class="flex items-center justify-center min-h-screen">

  <form method="POST" class="bg-white/5 backdrop-blur-md p-8 rounded-2xl shadow-xl w-full max-w-sm text-white border border-white/30 transition hover:scale-105 duration-300 ease-in-out">
    <h2 class="text-3xl font-bold mb-6 text-center drop-shadow">Register</h2>

    <?php if ($error) { ?>
      <p class="text-red-200 bg-red-500/30 px-4 py-2 rounded mb-4 text-sm"><?php echo $error; ?></p>
    <?php } ?>

    <div class="mb-4">
      <label class="block text-sm font-semibold">Username</label>
      <input type="text" name="username" placeholder="Username" class="w-full px-3 py-2 mt-1 bg-white/20 backdrop-blur-md border border-white/30 rounded placeholder-white/70 text-white focus:outline-none focus:ring-2 focus:ring-white" required>
    </div>

    <div class="mb-4">
      <label class="block text-sm font-semibold">Password</label>
      <input type="password" name="password" placeholder="*******" class="w-full px-3 py-2 mt-1 bg-white/20 backdrop-blur-md border border-white/30 rounded placeholder-white/70 text-white focus:outline-none focus:ring-2 focus:ring-white" required>
    </div>

    <button type="submit" class="w-full bg-white/30 hover:bg-white/50 text-white font-semibold px-3 py-2 mt-2 rounded transition duration-300">
      Daftar
    </button>

    <p class="mt-4 text-center text-sm text-white/80">
      Sudah punya akun?
      <a href="login.php" class="text-white underline hover:text-white/90">Masuk di sini</a>
    </p>
  </form>

</body>
</html>

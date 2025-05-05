<?php
session_start();
require 'function.php';
?>

<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tanya & Jawab | Tanya Si Kakek</title>
  
  <?php if (isset($_SESSION['username'])): ?>
    <link rel="stylesheet" href="tanya-jawab-style.css"> <!-- login -->
  <?php else: ?>
    <link rel="stylesheet" href="q&a-styles.css"> <!-- non-login -->
  <?php endif; ?>
  
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
  <script src="https://unpkg.com/@phosphor-icons/web"></script>
</head>

<body>
  <?php 
  if($_SESSION['log'] = 'True'){
    header("qna-login-view.php");
  } else {
    header('qna-nonlogin-view.php');
   } ?>
</body>
</html>

<?php 
    require 'database.php';
    session_start();

    if (!empty($_POST['email'])&&!empty($_POST['email'])) {
        $records = $conn->prepare('SELECT id, email, password FROM users WHERE email=:email');
        $records->bindParam(':email', $_POST['email']);
        $records->execute();
        $result = $records->fetch(PDO::FETCH_ASSOC);

        $message = '';
        if (count($result)>0&&password_verify($_POST['password'], $result['password'])) {
            $_SESSION['user_id'] = $result['id'];
            header('Location: /php-login');
        }else{
            $message = 'Sorry, this credentials do not match';
        }
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300&family=Roboto:wght@100&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
    <h1>Login</h1>
    <span>or <a href="signup.php">Signup</a></span>
    <?php if (!empty($message)): ?>
        <p> <?= $message?>  </p>
     <?php endif; ?>

    <form action="login.php" method="post"></form>
    <input type="text" name="email" placeholder="Enter your email">
    <input type="password" name="password" placeholder="Enter your password">
    <input type="submit" value="Send">
</body>
</html>
<?php

require __DIR__ . '/../src/bootstrap.php';
?>

<?php view('header', ['title' => 'Login']) ?>
<main>
    <form action="login.php" method="post">
        <h1>Login</h1>
        <div>
            <label for="username">Username:</label>
            <input type="text" name="username" id="username">
        </div>

        <div>
            <label for="password">Password:</label>
            <input type="password" name="password" id="password">
        </div>

        <section>
            <button type="submit">Login</button>
            <a href="register.php">Register</a>
        </section>
    </form>
</main>
<<<<<<< HEAD
<?php view('footer') ?>  "kavya sri"
=======
<?php view('footer') ?>
<!DOCTYPE html>
<html>
<body>

<h1>My first PHP page</h1>

<?php
echo "Hello World!";
?>

</body>
</html>
>>>>>>> 35db56024a5f77ac82feab1675831dba8853d851

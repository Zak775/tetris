<?php
include "parts/header.php";
include "configs/db.php";

// Проверяем был ли отправлен пост запрос
if (isset($_POST["email"]) && isset($_POST["password"])
    && $_POST["email"] != "" && $_POST["password"] != "") {

    $sql = "INSERT INTO `users` (`username`, `email`, `password`) VALUES ('" . $_POST['username'] . "', '" . $_POST['email'] . "', '" . $_POST['password'] . "')";

    mysqli_query($conn, $sql);
    header("location: /");
}
?>

<div id="register">
    <h3>Зарегистрироваться</h3>
    <form action="register.php" method="POST">
        <p>Введите ваше имя:</br>
            <input type="text" name="username">
        </p>
        <p>Введите ваш email:</br>
            <input type="text" name="email">
        </p>
        <p>Введите ваш пароль:</br>
            <input type="password" name="password">
        </p>
        <button type="submit" class="btn btn-success">Зарегистрироваться</button>
    </form>
    <br>
    <a href="login.php" class="btn btn-success">Вернуться на логин</a>
</div>

<?php
include "parts/footer.php";
?>
<script type="text/javascript">
    backgroundImageRegister();
</script>

<?php
include "parts/header.php";
include "configs/db.php";

if (isset($_POST["email"]) && isset($_POST["password"])
    && $_POST["email"] != "" && $_POST["password"] != "") {
    //Вставить в таблицу "название таблицы" ()
    $sql = "SELECT * FROM `users` WHERE `email` LIKE '" . $_POST["email"] . "' AND `password` 
    LIKE '" . $_POST["password"] . "'";

    $result = mysqli_query($conn, $sql);
    $col_username = mysqli_num_rows($result);

    if ($col_username == 1) {
        $username = mysqli_fetch_assoc($result);
        setcookie("username", $username["id"], time() + 1000);
        header("location: /");
    } else {
        echo "<h2>Логин или пароль введены не верно!</h2>";
    }
}
?>

<div id="login">
    <h2>Войти</h2>
    <form action="login.php" method="POST">
        <p>
            Введите ваш email:<br/>
            <input type="text" name="email">
        </p>
        <p>
            Введите ваш пароль:<br/>
            <input type="password" name="password">
        </p>
        <button type="submit" class="btn btn-success">Войти</button>
    </form>
    <br/>
    <a href="register.php" class="btn btn-success">Зарегистрироваться</a>
</div>

<?php
include "parts/footer.php";
?>
<script type="text/javascript">
    backgroundImageLogin();
</script>

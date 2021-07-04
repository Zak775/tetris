<?php
$count = 0;
if (isset($_COOKIE["username"])) {
    $sql = "SELECT * FROM `users` WHERE id=" . $_COOKIE["username"];
    $result = mysqli_query($conn, $sql);
    $username = mysqli_fetch_assoc($result);
}
if (!isset($_COOKIE["username"])) {
    header("location: /login.php");
}
function test() {
    echo "test";
}
?>

<div id="field">
    <div class="main"></div>
    <div id="menu">
        <span class="text_d7">Tetris</span>
        <button type="button" id="menu_button" class="btn btn-outline-dark"><a href="exit_login.php">Exit</a></button>
        <button type="button" id="menu_button" class="btn btn-outline-dark"><a href="#" id="open_top10">Top-10</a></button>
        <button type="button" id="menu_button" class="btn btn-outline-dark"><a href="#">Settings</a></button>
    </div>
    <div class="button">
        <button type="button" class="btn btn-outline-success btn-sm text_d7-sm" id="start">Start</button>
        <button type="button" class="btn btn-outline-dark btn-sm text_d7-sm" id="pause">Pause</button>
    </div>
    <div id="stats">
        <div>Level: <span id="level" class="text_d7">0</span></div>
        <div>Score: <span id="score" class="text_d7"><?php echo "$count"; ?></span></div>
        <div>Player: <span class="text_d7"><?php echo $username["username"]; ?></span></div>
    </div>
    <div id="game-over">Game over
        <?php
        echo "$count";
        if (isset($_POST["email"]) && isset($_POST["password"])
            && $_POST["email"] != "" && $_POST["password"] != "") {

            $sql = "INSERT INTO `users` (`username`, `email`, `password`) VALUES ('" . $_POST['username'] . "', '" . $_POST['email'] . "', '" . $_POST['password'] . "')";

            mysqli_query($conn, $sql);
            header("location: /");
        }


//        $sql = "INSERT INTO `score` (`id`, `user_id`, `count`) VALUES (NULL, \'5\', \'500\')";
        ?>


    </div>
    <div id="next-figure"></div>

<?php
	include "modules/top-10.php";
?>

</div>
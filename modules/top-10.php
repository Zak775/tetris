<?php
include "parts/header.php";
include "configs/db.php";

?>

<!-- Модальное окно с рекордами -->
<div class="modal" id="top-10_modal">
	<div type="button" class="btn btn-outline-dark btn-sm close">X</div>
	<div class="content">
		<ol>
			<?php
            $sql = "SELECT username, count FROM users, score WHERE users.id = score.user_id ORDER BY count DESC LIMIT 10";
            $result = mysqli_query($conn, $sql);
            $col_users = mysqli_num_rows($result);

				$i = 0;
				while ($i < $col_users) {
					$user = mysqli_fetch_assoc($result);
        
					?>
					<li>
						<span><?php echo $user["username"]?>: <?php echo $user["count"];?></span>
					</li>
					<?php
					$i = $i + 1;
				}
			?>
		</ol>
	</div>
</div>
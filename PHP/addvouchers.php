<!DOCTYPE html>
<html lang="en">
  <?php include "./head.html" ?>
  <body>

	<?php 
		if (isset($_GET["action"]) && $_GET["action"] == "error" && $_GET["msg"]=="rollexist"){
			echo "<script type='text/javascript'>alert('Roll number exists in database');</script>";
		}
		else if (isset($_GET["action"]) && $_GET["action"] == "error" && $_GET["msg"]=="nodata"){
			echo "<script type='text/javascript'>alert('no vouchers inputted');</script>";
		}
	?>

    <div class="container-fluid">
	<div class="row">
		<?php include "./TopMenu.php"; ?>
		<div class="col-md-12 pt-3">
			<form action="/action.php" method="POST">
				<div class="form-group">
					<label for="Roll_Number">
						Roll #
					</label>
					<input type="text" class="form-control w-25" id="Roll_Number" name="Roll_Number" required>
				</div>
				<div class="form-group">
                    <label for="List">Voucher list separated by newline</label>
                    <textarea class="form-control w-50" id="List" rows="5" name="List" required></textarea>
                </div>
				<button type="submit" class="btn btn-primary">
					Submit
				</button>
			</form>
		</div>
	</div>
</div>

    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/scripts.js"></script>
  </body>
</html>
<!DOCTYPE html>
<html lang="en">
  <?php include "./head.html" ?>
  <body>

    <div class="container-fluid">
	<div class="row">
		<?php include "./TopMenu.php"; ?>
	</div>
	<div class="row">
		<div class="col-md-5 pl-5 pt-3 table-responsive">
      <!--Table-->
      <table id="tablePreview"  class="table table-sm table-striped table-hover">
      <!--Table head-->
        <thead>
          <tr>
            <th class="text-center">Roll #</th>
            <th>Vouchers left</th>
          </tr>
        </thead>
        <!--Table head-->
        <!--Table body-->
        <tbody>
          <?php
            if (file_exists("./data/vouchers.json") && filesize("./data/vouchers.json") > 0){
              $json = json_decode(file_get_contents("./data/vouchers.json"), true);
              
              foreach ($json as $key => $value){
                echo '<tr>';
                echo '<th scope="row" class="text-center"><a href="/vouchers.php?Rollno='.$key.'">'.$key.' </a></th>';
                echo '<td>'.count($value).' vouchers left</td>';
                echo '</tr>';
              }
            }
          ?>
        </tbody>
        <!--Table body-->
      </table>
      <!--Table-->
		</div>
	</div>
</div>

    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/scripts.js"></script>
  </body>
</html>

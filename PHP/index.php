<!DOCTYPE html>
<html lang="en">
  <?php include "./head.html" ?>
  <body>

    <div class="container-fluid">
	<div class="row">
		<?php include "./TopMenu.php"; ?>
	</div>
	<div class="row">
		<div class="col-md-4">
		</div>
		<div class="col-md-4 pt-4">
			<div class="page-header">
				<h1 class="text-center">
                    
                    <small>Voucher code:</small>
                    </br>
                    <?php  
                        if (file_exists("./data/vouchers.json") && filesize("./data/vouchers.json") > 0){
                            $rollarray = json_decode(file_get_contents("./data/vouchers.json"), true);
                            
                            if ($rollarray != null && count($rollarray)){
                                $firstarray = reset($rollarray);
                                echo reset($firstarray);
                                $key = key($rollarray);
                                unset($rollarray[$key][key($rollarray[$key])]);
                                $vouchersLeft = count($rollarray[$key]);

                                if(!$vouchersLeft){
                                    unset($rollarray[$key]);
                                }
                                file_put_contents("./data/vouchers.json", json_encode($rollarray));
                            }
                        }
                    ?>
                    
                </h1>
                
                <?php 
                    if(isset($key)){
                        echo "<h5 class='text-center'>using roll# ".$key." having ".$vouchersLeft." vouchers left. </h5>";  
                    }
                    else{
                        echo "<h5 class='text-center'>no vouchers left.</h5>";  
                    }
                ?>
			</div>
		</div>
		<div class="col-md-4">
		</div>
	</div>
</div>

    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/scripts.js"></script>
  </body>
</html>
<!DOCTYPE html>
<html lang="en">
    <?php include "./head.html" ?>
    <body>

        <div class="container-fluid">
        <div class="row">
            <?php include "./TopMenu.php"; ?>
        </div>
        <div class="col-md-5 pl-5 pt-3 table-responsive row">
            <!--Table-->
            <table id="tablePreview"  class="table table-sm table-striped table-hover">
            <!--Table head-->
            <thead>
                <tr>
                <th>Vouchers</th>
                </tr>
            </thead>
            <!--Table head-->
            <!--Table body-->
            <tbody>
                <?php
                    if(isset($_GET["Rollno"])){
                        $rollno = $_GET["Rollno"];
                        if (file_exists("./data/vouchers.json") && filesize("./data/vouchers.json") > 0){
                            $json = json_decode(file_get_contents("./data/vouchers.json"), true);
                            
                            foreach ($json[$rollno] as $value){
                            echo '<tr>';
                            echo '<td>'.$value.'</td>';
                            echo '</tr>';
                            }
                        }
                    }
                ?>
            </tbody>
            <!--Table body-->
            </table>
            <!--Table-->
        </div>
        <script src="js/jquery.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/scripts.js"></script>
    </body>
</html>

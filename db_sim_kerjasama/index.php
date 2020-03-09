<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Dashboard</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.js"></script>
    <style type="text/css">
        .wrapper{
            width: 650px;
            margin: 0 auto;
        }
        .page-header h2{
            margin-top: 0;
        }
        table tr td:last-child a{
            margin-right: 15px;
        }
    </style>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/bootstrap.css">
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="datepicker/bootstrap-datepicker.js"></script>
    <link rel="stylesheet" href="datepicker/datepicker.css">
    <script>
        $(function () {
        $('#datepicker').datepicker({
        autoclose: true
    });
    });
    </script>
    <script type="text/javascript">
        $(document).ready(function(){
            $('[data-toggle="tooltip"]').tooltip();
        });
    </script>
</head>
<body>
    <div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="page-header clearfix">
                        <h2 class="pull-left">Input data kerjasama</h2>
                        <a href="create.php" class="btn btn-success pull-right">Tambah Baru</a>
                    </div>
                    <?php
                    // Include config file
                    require_once "config.php";

                    // Attempt select query execution
                    $sql = "SELECT * FROM tb_mou_tr_kerjasama";
                    if($result = mysqli_query($link, $sql)){
                        if(mysqli_num_rows($result) > 0){
                            echo "<table class='table table-bordered table-striped'>";
                                echo "<thead>";
                                    echo "<tr>";
                                        echo "<th>#</th>";
                                        echo "<th>kodekerjasama</th>";
                                        echo "<th>deskripsi</th>";
                                        echo "<th>tanggalmulai</th>";
                                        echo "<th>tanggalselesai</th>";
                                        echo "<th>namalembaga</th>";
                                        echo "<th>perwakilanlembaga</th>";
                                        echo "<th>uploadberkas</th>";
                                        echo "<th>jenisberkas</th>";
                                        echo "<th>statuskerjasama</th>";
                                        echo "<th>pengaturan</th>";
                                    echo "</tr>";
                                echo "</thead>";
                                echo "<tbody>";
                                while($row = mysqli_fetch_array($result)){
                                    echo "<tr>";
                                        echo "<td>" . $row['kode kerjasama'] . "</td>";
                                        echo "<td>" . $row['deskripsi'] . "</td>";
                                        echo "<td>" . $row['tanggal mulai'] . "</td>";
                                        echo "<td>" . $row['tanggal selesai'] . "</td>";
                                        echo "<td>" . $row['nama lembaga'] . "</td>";
                                        echo "<td>" . $row['perwakilan lembaga'] . "</td>";
                                        echo "<td>" . $row['upload berkas'] . "</td>";
                                        echo "<td>" . $row['jenis berkas'] . "</td>";
                                        echo "<td>" . $row['status kerjasama'] . "</td>";
                                    
                                        echo "<td>";
                                            echo "<a href='read.php?id=". $row['id'] ."' title='View Record' data-toggle='tooltip'><span class='glyphicon glyphicon-eye-open'></span></a>";
                                            echo "<a href='update.php?id=". $row['id'] ."' title='Update Record' data-toggle='tooltip'><span class='glyphicon glyphicon-pencil'></span></a>";
                                            echo "<a href='delete.php?id=". $row['id'] ."' title='Delete Record' data-toggle='tooltip'><span class='glyphicon glyphicon-trash'></span></a>";
                                        echo "</td>";
                                    echo "</tr>";
                                }
                                echo "</tbody>";
                            echo "</table>";
                            // Free result set
                            mysqli_free_result($result);
                        } else{
                            echo "<p class='lead'><em>No records were found.</em></p>";
                        }
                    } else{
                        echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
                    }

                    // Close connection
                    mysqli_close($link);
                    ?>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
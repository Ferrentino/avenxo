<?php
// Include config file
require_once "config.php";

// Define variables and initialize with empty values
$kodekerjasama = $deskripsi = $tanggalmulai = $tanggalselesai = $namalembaga = $perwakilanlembaga = $uploadberkas = $jenisberkas = $statuskerjasama = "";
$kodekerjasama_err = $deskripsi_err = $tanggalmulai_err = $tanggalselesai_err = $namalembaga_err = $perwakilanlembaga_err = $uploadberkas_err = $jenisberkas_err = $statuskerjasama_err = "";

// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
    // Validate name
     $input_kodekerjasama = trim($_POST["kodekerjasama"]);
    if(empty($input_kodekerjasama)){
        $kodekerjasama_err = "Please enter an deskripsi.";
    } else{
        $kodekerjasama = $input_kodekerjasama;
    }

    // Validate address
    $input_deskripsi = trim($_POST["deskripsi"]);
    if(empty($input_deskripsi)){
        $deskripsi_err = "Please enter an deskripsi.";
    } else{
        $deskripsi = $input_deskripsi;
    }

    $input_tanggalmulai = trim($_POST["tanggalmulai"]);
    if(empty($input_tanggalmulai)){
        $tanggalmulai_err = "Please enter an deskripsi.";
    } else{
        $tanggalmulai = $input_tanggalmulai;
    }

    $input_tanggalselesai = trim($_POST["tanggalselesai"]);
    if(empty($input_tanggalselesai)){
        $tanggalselesai_err = "Please enter an deskripsi.";
    } else{
        $tanggalselesai = $input_tanggalselesai;
    }


    // Check input errors before inserting in database
    if(empty($name_err) && empty($address_err) && empty($salary_err)){
        // Prepare an insert statement
        $sql = "INSERT INTO employees (name, address, salary) VALUES (?, ?, ?)";

        if($stmt = mysqli_prepare($link, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "sss", $param_name, $param_address, $param_salary);

            // Set parameters
            $param_name = $name;
            $param_address = $address;
            $param_salary = $salary;

            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                // Records created successfully. Redirect to landing page
                header("location: index.php");
                exit();
            } else{
                echo "Something went wrong. Please try again later.";
            }
        }

        // Close statement
        mysqli_stmt_close($stmt);
    }

    // Close connection
    mysqli_close($link);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Create Record</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <style type="text/css">
        .wrapper{
            width: 500px;
            margin: 0 auto;
        }
    </style>
</head>
<body>
    <div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="page-header">
                        <h1>Input Data Kerjasama</h1>
                    </div>
                    
                    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                        <div class="form-group <?php echo (!empty($name_err)) ? 'has-error' : ''; ?>">
                            <label>Kode Kerjasama</label>
                            <input type="text" name="name" class="form-control" value="<?php echo $kodekerjasama; ?>">
                            <span class="help-block"><?php echo $kodekerjasama_err;?></span>
                        </div>
                        <div class="form-group <?php echo (!empty($address_err)) ? 'has-error' : ''; ?>">
                            <label>Deskripsi</label>
                            <textarea name="deskripsi" class="form-control"><?php echo $deskripsi; ?></textarea>
                            <span class="help-block"><?php echo $deskripsi_err;?></span>
                        </div>
                        <div class="form-group <?php echo (!empty($salary_err)) ? 'has-error' : ''; ?>">
                            <label>Tanggal mulai</label>
                            <input type="date" name="tanggalmulai" id="tanggalmulai" class="form-control" value="<?php echo $tanggalmulai; ?>">
                            <span class="help-block"><?php echo $tanggalmulai_err;?></span>
                        </div>
                        <div class="form-group <?php echo (!empty($salary_err)) ? 'has-error' : ''; ?>">
                            <label>Tanggal selesai</label>
                            <input type="date" name="tanggalselesai" class="form-control" value="<?php echo $tanggalselesai; ?>">
                            <span class="help-block"><?php echo $tanggalselesai_err;?></span>
                        </div>
                        <div class="form-group <?php echo (!empty($salary_err)) ? 'has-error' : ''; ?>">
                            <label>Nama lembaga</label>
                            <input type="text" name="namalembaga" class="form-control" value="<?php echo $namalembaga; ?>">
                            <span class="help-block"><?php echo $namalembaga_err;?></span>
                        </div>
                        <div class="form-group <?php echo (!empty($salary_err)) ? 'has-error' : ''; ?>">
                            <label>perwakilan lembaga</label>
                            <input type="text" name="perwakilanlembaga" class="form-control" value="<?php echo $perwakilanlembaga; ?>">
                            <span class="help-block"><?php echo $perwakilanlembaga_err;?></span>
                        </div>
                        <form action ="upload_file.php" metode="post" enctype="multipart/form-data">
                            <label for="file"> Upload berkas </label>
                            <input type="file" name="file" id="file" />
                            <br />
                         
                        </form>
                        <div class="form-group <?php echo (!empty($salary_err)) ? 'has-error' : ''; ?>">
                            <label>jenis berkas</label>
                            <input type="text" name="jenisberkas" class="form-control" value="<?php echo $jenisberkas; ?>">
                            <span class="help-block"><?php echo $jenisberkas_err;?></span>
                        </div>
                        <div class="form-group <?php echo (!empty($salary_err)) ? 'has-error' : ''; ?>">
                            <label>status kerjasama</label>
                            <input type="text" name="statuskerjasama" class="form-control" value="<?php echo $statuskerjasama; ?>">
                            <span class="help-block"><?php echo $statuskerjasama_err;?></span>
                        </div>
                        <input type="submit" class="btn btn-primary" value="Simpan">
                        <a href="index.php" class="btn btn-default">Batal</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
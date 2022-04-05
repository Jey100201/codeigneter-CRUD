<!DOCTYPE html>
<html lang="en">
<head>
<meta http-equiv="Content-type" content="IE=edge">
    <meta name="viewport" content="text/html">
    <title>CodeIgneter</title>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>bootstrap/bootstrap/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h1 class="page-header text-center">Belajar Framework CI [UNIGA]</h1>
        <div class="row">
            <div class="col-sm-4 col-sm-offset-4">
                <h3>Edit Form<span class="pull-right"><a href="<?php echo base_url(); ?>" class="btn btn-primary"><span class="glyphicon glyphicon-arrow-left"></span>Back</a></span></h3>
                <hr>
                <?php extract($user); ?>
                <form method="POST" action="<?php echo base_url(); ?>index.php/user/update/<?php echo $id; ?>">
                <div class="form-group">
                    <label>Nama:</label>
                    <input type="text" class="form-control" value="<?php echo $nama; ?>" name="nama">
                </div>
                <div class="form-group">
                    <label>NIM:</label>
                    <input type="text" class="form-control" value="<?php echo $nim; ?>" name="nim">
                </div>
                <div class="form-group">
                    <label>jurusan:</label>
                    <input type="text" class="form-control" value="<?php echo $jurusan; ?>" name="jurusan">
                </div>
                <div class="form-group">
                    <label>Email:</label>
                    <input type="text" class="form-control" value="<?php echo $email; ?>" name="email">
                </div>
                <div class="form-group">
                    <label>Password:</label>
                    <input type="text" class="form-control" value="<?php echo $password; ?>" name="password">
                </div><br>
                <button type="submit" class="btn btn-success"><span class="glyphicon glyphicon-check"></span> Update</button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta http-equiv="Content-type" content="IE=edge">
    <meta name="viewport" content="text/html">
    <title>CodeIgneter</title>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>bootstrap/bootstrap/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h1 class="page-header text-center">Belajar Framework CI [UNIGA]</h1>
            <div class="row">
                <div class="col-sm-8 col-sm-offset-2"><a href="<?php echo base_url(); ?>index.php/user/add_user" class="btn btn-primary"><span class="glyphicon glyphicon-plus"></span>Add New</a>
            <br></br>
            <table class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nama</th>
                        <th>NIM</th>
                        <th>JURUSAN</th>
                        <th>E-MAIL</th>
                        <th>PASSWORD</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                    foreach($user as $user){
                    ?>
                    <tr>
                        <td><?php echo $user->id; ?></td>
                        <td><?php echo $user->nama; ?></td>
                        <td><?php echo $user->nim; ?></td>
                        <td><?php echo $user->jurusan; ?></td>
                        <td><?php echo $user->email; ?></td>
                        <td><?php echo $user->password; ?></td>
                        <td><a href="<?php echo base_url(); ?>index.php/user/edit/<?php echo $user->id; ?>" class="btn btn-success"><span class="glyphicon glyphicon-edit"></span> Edit</a> || <a href="<?php echo base_url(); ?>index.php/user/delete/<?php echo $user->id; ?>" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span> Delete</a></td>
                    </tr>
                    <?php 
                    }
                    ?>
                </tbody>
            </table>
            </div>
        </div>
    </div>
</body>
</html>
<?php
  include "./env/db.php";
  $allData = "SELECT * FROM test  ORDER BY id DESC";
  $fatechedData = mysqli_query($conn,$allData);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<!-- NAV  -->
<nav class="navbar navbar-expand-lg bg-body-tertiary shadow">
  <div class="container">
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav m-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">All-Post</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?= "./addPost.php" ?>">Add Post</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
<!-- NAV END -->



<!-- FATCH DATA -->
<section class="mt-5">
    <div class="container">
        <div class="row">
            <div class="col-6 mx-auto card shadow p-3">
                <div class="card-header">
                    <h5>All Post's</h5>
                </div>

                <div class="card-body">
                    <table class="table table-responsive table-hover table-striped">
                        <tr>
                            <td>#</td>
                            <td>Name</td>
                            <td>Action</td>
                        </tr>

                        <?php
                            foreach($fatechedData as $key => $data){
                                ?>
                                   <tr>
                                       <td><?= ++$key; ?></td>
                                       <td><?= $data['name'] ?></td>
                                       <td>
                                          <div class="btn-group">
                                             <a href="./edit.php?editId=<?= $data['id'] ?>" class="btn btn-primary btn-sm">Edit</a>
                                             <a href="./controller/delete.php?deleteId=<?= $data['id'] ?>" class="btn btn-danger btn-sm">Delete</a>
                                          </div>
                                       </td>
                                   </tr>
                                <?php
                            }

                        ?>
                    </table>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- FATCH DATA END -->


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
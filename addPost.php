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
<nav class="navbar navbar-expand-lg bg-info shadow">
  <div class="container">
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <h4 class="text-center d-block">Add Post</h4>
    </div>
  </div>
</nav>
<!-- NAV END -->


<!-- form -->
<section class="mt-5">
    <div class="contaner">
        <div class="row ">
            <div class="col-lg-5 mx-auto card shadow p-5">
                <form action="./controller/add.php" method="post">

                <label for="name">Name</label>
                <input type="text" class="form-control mb-2" placeholder="name" id="name" name="name">
                <button name="add-btn" class="btn btn-primary w-100 mt-2" type="submit">Submit</button>


                </form>
            </div>
        </div>
    </div>
</section>
<!-- form end -->

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
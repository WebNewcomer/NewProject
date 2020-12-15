<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <title>Successful authorization</title>
</head>
<body>
<div class="container">
    <div class="row">
        <div class="alert alert-success mx-auto text-center" role="alert">
            <h4 class="alert-heading">Welcome <?=$_SESSION['authorization']?>! </h4>
            <p>You are successfully logged in</p>
            <hr>
            <a href="home.php">
                <button type="button" class="btn btn-outline-secondary">Home</button>
            </a>
            <a href="logout.php">
                <button type="button" class="btn btn-outline-secondary">Log out</button>
            </a>
        </div>
    </div>
</div>
</body>
</html>
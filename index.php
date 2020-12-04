<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <title>FormTask</title>
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col">
            <form action="formHandler.php" method="post">
                <div class="form-group">
                    <label for="exampleInputEmail1">Email address</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                           name="email">
                    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone
                        else.</small>
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input type="password" class="form-control" id="exampleInputPassword1" name="password">
                </div>
                <div class="form-group">
                    <label for="firstName">First Name</label>
                    <input type="text" class="form-control" id="firstName" name="firstName">
                </div>
                <div class="form-group">
                    <label for="lastName">Last Name</label>
                    <input type="text" class="form-control" id="lastName" name="lastName">
                </div>
                <div class="form-group">
                    <label for="City">City</label>
                    <input type="text" class="form-control" id="City" name="city">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <?php if (!empty($result)): ?>
                <p>Sent data is:</p>
                <?php foreach ($result as $item => $value): ?>
                    <?= $item ?> : <?= $value ?>
                    <br>
                <?php endforeach; ?>
            <?php else :?>
            <p>Fill the fields above and click the SUBMIT button</p>
            <?php endif; ?>
        </div>
    </div>
</div>
</body>
</html>
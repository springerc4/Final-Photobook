<?php
    require_once('json_util.php');
    $new_array = convertToPhp('class.json');
    $duplicate = $new_array[rand(0,3)];
    $new_array[count($new_array)] = $duplicate;
    convertToJson($new_array, 'class.json');
?>
<!-- Display "user created" message to the user -->
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <title>User Created</title>
  </head>
  <body>
    <div class="card" style="width: 18rem; margin-left: 40%; margin-top: 5%;">
        <img src="https://st2.depositphotos.com/5383370/10880/v/450/depositphotos_108806350-stock-illustration-happy-businessman-winks-and-hand.jpg" class="card-img-top" alt="Man approves with thumbs up">
        <div class="card-body">
            <h5 class="card-title">Success!</h5>
            <p class="card-text">A new user has been successfully added to the roster. Happy coding!</p>
            <a href="index.php" class="btn btn-primary">Return Home</a>
        </div>
    </div> 

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-W8fXfP3gkOKtndU4JGtKDvXbO53Wy8SZCQHczT5FMiiqmQfUpWbYdTil/SxwZgAN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.min.js" integrity="sha384-skAcpIdS7UcVUC05LJ9Dxay8AXcDYfBJqt1CJ85S/CFujBsIzCIv+l9liuYLaMQ/" crossorigin="anonymous"></script>
  </body>
</html>
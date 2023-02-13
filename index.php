<?php
require_once "./Interface/ICalculate.php";	
require_once "./Geometry/Shape.php";
require_once "./Geometry/Square.php";
require_once "./Geometry/Rectangle.php";
require_once "./Geometry/Triangle.php";
require_once "./Geometry/Parallelogram.php";

$result = "";
$area = 0;
$perimeter = 0;
$name_class = "";
if (isset($_POST["checkClass"])) {
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $name_class = validate_input($_POST["name_class"]);
        if (class_exists($name_class)) {
            $result = "Class $name_class is exist";
        } else {
            $result = "Not found";
        }
    }
}
// echo "<br>";
// var_dump($name_class);
function validate_input($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    $data = strtolower($data);
    return $data;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</head>

<body>
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6">
                <h1>Form search Class</h1>
                <form method="post" action="">
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Class Name</label>
                        <input type="text" class="form-control" name="name_class" id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div>
                    <button type="submit" class="btn btn-primary" name="checkClass">Submit</button>
                </form>
            </div>
            <div class="col-md-3"></div>
        </div>
        <div class="row mt-5">
            <div class="col-md-3"></div>
            <div class="col-md-6">
                <h1>
                    Result:
                    <?php
                    echo $result;
                    echo '<br>';
                    if (class_exists($name_class)) {
                        echo '<a class="btn btn-info" href="./calculate2.php?class=' . $name_class . '">Calculate </a>';
                    }
                    ?>
                </h1>
            </div>
            <div class="col-md-3"></div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
</body>

</html>
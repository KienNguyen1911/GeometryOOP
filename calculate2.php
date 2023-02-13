<?php
require_once "./Interface/ICalculate.php";
require "./Geometry/Shape.php";
require "./Geometry/Square.php";
require "./Geometry/Rectangle.php";
require "./Geometry/Triangle.php";
require "./Geometry/Parallelogram.php";


$class = $_GET["class"];
$name_class = $class;
$area = 0;
$perimeter = 0;
$error = "";
$check = "";
if (isset($_POST["calculate"])) {
    // convert $post to string
    unset($_POST["calculate"]);
    $_POST["name"] = $class;
    $obj = new $class($_POST);
    $check = $obj->checkShape();
    if ($check == "") {
        $area = $obj->calculateArea();
        $perimeter = $obj->calculatePerimeter();
    } else {
        $error = $check;
    }
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
    <div class="container">
        <div class="row mt-5">
            <div class="col-md-3"></div>
            <div class="col-md-6">
                <div class="title" style="display: flex; justify-content: space-between; align-items: center;">
                    <h1>Form calculate
                        <?php echo $name_class ?>
                    </h1>
                    <a href="./index.php" class="btn btn-primary">Back</a>
                </div>
                <?php
                // ==============Square================
                if ($name_class == "square") {
                    // show form 
                ?>
                    <form action="<?php htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Side</label>
                            <input type="number" min="1" class="form-control" name="side" id="exampleInputEmail1" aria-describedby="emailHelp" required>
                        </div>
                        <button type="submit" class="btn btn-primary" name="calculate">Submit</button>
                    </form>
                <?php

                    echo "Area: " . $area;
                    echo "<br>";
                    echo "Perimeter: " . $perimeter;
                }
                // ==============Triangle================
                elseif ($name_class == "triangle") {
                ?>
                    <form action="<?php htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">First Side</label>
                            <input type="number" min="1" class="form-control" name="sideOne" id="exampleInputEmail1" aria-describedby="emailHelp" required>
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Second of Side</label>
                            <input type="number" min="1" class="form-control" name="sideTwo" id="exampleInputEmail1" aria-describedby="emailHelp" required>
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Third of Side</label>
                            <input type="number" min="1" class="form-control" name="sideThree" id="exampleInputEmail1" aria-describedby="emailHelp" required>
                        </div>
                        <button type="submit" class="btn btn-primary" name="calculate">Submit</button>
                    </form>
                <?php
                    echo "Area: " . $area;
                    echo "<br>";
                    echo "Perimeter: " . $perimeter;
                    echo "<br>";
                    echo $error;
                }
                // ==============Rectangle================
                elseif ($name_class == "rectangle") {
                ?>
                    <form action="<?php htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Width</label>
                            <input type="number" min="1" class="form-control" name="width" id="exampleInputEmail1" aria-describedby="emailHelp" required>
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Height</label>
                            <input type="number" min="1" class="form-control" name="height" id="exampleInputEmail1" aria-describedby="emailHelp" required>
                        </div>
                        <button type="submit" class="btn btn-primary" name="calculate">Submit</button>
                    </form>
                <?php
                    echo "Area: " . $area;
                    echo "<br>";
                    echo "Perimeter: " . $perimeter;
                }
                // ==============Parallelogram================
                elseif ($name_class == "parallelogram") {
                ?>
                    <form action="<?php htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Width</label>
                            <input type="number" min="1" class="form-control" name="width" id="exampleInputEmail1" aria-describedby="emailHelp" required>
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Side</label>
                            <input type="number" min="1" class="form-control" name="side" id="exampleInputEmail1" aria-describedby="emailHelp" required>
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Height</label>
                            <input type="number" min="1" class="form-control" name="height" id="exampleInputEmail1" aria-describedby="emailHelp" required>
                        </div>
                        <button type="submit" class="btn btn-primary" name="calculate">Submit</button>
                    </form>
                <?php
                    echo "Area: " . $area;
                    echo "<br>";
                    echo "Perimeter: " . $perimeter;
                    echo "<br>";
                    echo $error;
                } else {
                    echo "Not found";
                }
                ?>

            </div>
            <div class="col-md-3"></div>
        </div>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
</body>

</html>
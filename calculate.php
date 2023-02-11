<?php
require_once "./Interface/ICalculate.php";
require "./Model/Shape.php";
require "./Model/Square.php";
require "./Model/Rectangle.php";
require "./Model/Triangle.php";
require "./Model/Parallelogram.php";


$class = $_GET["class"];
$name_class = $class;
$area = 0;
$perimeter = 0;
$error = "";
if (isset($_POST["calculateSquare"])) {
    $side = $_POST["side"];
    $square = new Square("Square", $side);
    $area = $square->calculateArea();
    $perimeter = $square->calculatePerimeter();
}

if (isset($_POST["calculateTriangle"])) {
    $side1 = $_POST["side1"];
    $side2 = $_POST["side2"];
    $side3 = $_POST["side3"];
    $triangle = new Triangle("Triangle", $side1, $side2, $side3);
    $area = $triangle->calculateArea();
    $perimeter = $triangle->calculatePerimeter();
}

if (isset($_POST["calculateRectangle"])) {
    $height = $_POST["height"];
    $width = $_POST["width"];
    $rectangle = new Rectangle("Rectangle", $height, $width);
    $area = $rectangle->calculateArea();
    $perimeter = $rectangle->calculatePerimeter();
}

if (isset($_POST["calculateParallelogram"])) {
    $height = $_POST["height"];
    $width = $_POST["width"];
    $side = $_POST["side"];
    if ($width > $height || $side > $height) {
        $parallelogram = new Parallelogram("Parallelogram", $height, $width, $side);
        $area = $parallelogram->calculateArea();
        $perimeter = $parallelogram->calculatePerimeter();
    } else {
        $error = "Height must be less than width or side";
        // return;
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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
        crossorigin="anonymous"></script>
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
                            <input type="number" class="form-control" name="side" id="exampleInputEmail1"
                                aria-describedby="emailHelp" required>
                        </div>
                        <button type="submit" class="btn btn-primary" name="calculateSquare">Submit</button>
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
                            <input type="number" class="form-control" name="side1" id="exampleInputEmail1"
                                aria-describedby="emailHelp" required>
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Second of Side</label>
                            <input type="number" class="form-control" name="side2" id="exampleInputEmail1"
                                aria-describedby="emailHelp" required>
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Third of Side</label>
                            <input type="number" class="form-control" name="side3" id="exampleInputEmail1"
                                aria-describedby="emailHelp" required>
                        </div>
                        <button type="submit" class="btn btn-primary" name="calculateTriangle">Submit</button>
                    </form>
                    <?php
                    echo "Area: " . $area;
                    echo "<br>";
                    echo "Perimeter: " . $perimeter;
                }
                // ==============Rectangle================
                elseif ($name_class == "rectangle") {
                    ?>
                    <form action="<?php htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Width</label>
                            <input type="number" class="form-control" name="width" id="exampleInputEmail1"
                                aria-describedby="emailHelp" required>
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Height</label>
                            <input type="number" class="form-control" name="height" id="exampleInputEmail1"
                                aria-describedby="emailHelp" required>
                        </div>
                        <button type="submit" class="btn btn-primary" name="calculateRectangle">Submit</button>
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
                            <input type="number" class="form-control" name="width" id="exampleInputEmail1"
                                aria-describedby="emailHelp" required>
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Side</label>
                            <input type="number" class="form-control" name="side" id="exampleInputEmail1"
                                aria-describedby="emailHelp" required>
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Height</label>
                            <input type="number" class="form-control" name="height" id="exampleInputEmail1"
                                aria-describedby="emailHelp" required>
                        </div>
                        <button type="submit" class="btn btn-primary" name="calculateParallelogram">Submit</button>
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

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
        integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js"
        integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V"
        crossorigin="anonymous"></script>
</body>

</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css"/>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
    <title>Document</title>
    <?php
        $name = "Keith Aquino";
        $age = 15;
        $message;
        $color;

        if ($age >= 18 and $age <= 60){
            $message = "You are allowed to drink!";
            $color = "text-success";
        } elseif ($age < 18) {
            $message = "You are too young to drink!";
            $color = "text-danger";
        } else {
            $message = "You are too old to drink!";
            $color = "text-warning";
        }

        $drinks = ["Cosmopolitan", "Valentino". "Tequila Sunrise", "Screwdriver", "Margarita"];
        $finger_foods = ["Flower pork poppers", "Nachos", "Pork sisig", "Fried moringa bread"];
        $mains = [
            ["Steak taretare", 3000], 
            ["A5 Wagyu", 25000], 
            ["Tuyosilog", 50, 
                ["small", "medium", "large"]
            ], 
            ["Salmon steak", 500]
        ];
        $finger_foods_count = count($finger_foods);
    ?>
</head>
<body>
    <?php
        echo $mains[0][0];
        echo "<br>";
        echo $mains[0][1];
        echo "<br>";
        echo $mains[2][0];
        echo "<br>";
        echo $mains[2][2][1];
    ?>
    <h1>About</h1>
    <strong>Welcome, <?php echo $name ?></strong><br>
    <p class="<?php echo $color ?>"><?php echo $message ?></p>
    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Modi sequi dolor laboriosam ea nam porro illum illo odit itaque doloremque obcaecati est, corporis mollitia fugit aperiam ab voluptatem rem nostrum.</p>
    <h2>Drinks</h2>
    <ul>
    <?php
        foreach($drinks as $drink){
            echo "<li>" . $drink . "</li>";
        }
    ?>
    </ul>
    <table class="table">
        <tr>
            <th>Finger Food</th>
        </tr>
        <?php 
            foreach($finger_foods as $ff){
                echo "<tr><td>" . $ff . "</td></tr>";
            }
        ?>
    </table>
    <h2>Meals</h2>
    <div class="container">
        <div class="row">
            <?php
                foreach ($mains as $m){
                    echo '<div class="col-lg-3">
                            <div class="card">
                            <div class="card-body">
                            <h1 class="card-title">' . $m[0] . '</h1>
                            <p>Price: ' . $m[1] . '</p>
                            <a href="shop.html" class="btn btn-primary">Order</a>
                            </div>
                        </div>
                    </div>';
                }
            ?>
        </div>
    </div>
    <?php
        echo strlen("Hello world!");
        echo "<br>";
        echo str_word_count("Keith Aquino");
        echo "<br>";
        echo strrev("Keith");
        echo "<br>";
        echo strpos("Hello world!", "w");
        echo "<br>";
        echo str_replace("world", "Keith", "Hello world!");
    ?>
</body>
</html>
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
        $supplies_office = ["marker pen", "sharpener", "stapler", "post-it note"];
        $supplies_pen = ["Parker", "HBW", "Panda", "Faber Castell", "Pilot"];

        function display_supply($supplies){
            echo "<table class='table'>";
            echo "<tr>";
            echo "<th>Supplies</th>";
            echo "</tr>";
            foreach($supplies as $s){
                echo "<tr><td>" . $s . "</td></tr>";
            }
            echo "</table>";
        }
    ?>
</head>
<body>
    <h1>Office Supplies</h1>
    <?php
        display_supply($supplies_office);
    ?>
    <h2>Available pens</h2>
    <?php
        display_supply($supplies_pen);
    ?>
</body>
</html>
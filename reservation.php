<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css"/>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
    <title>Room Reservation - Bear Hotel</title>
    <?php
    //these are the available rooms (name, price, rooms available)
        $available_rooms = array(
            array("Economic", "805", "56"),
            array("Premium", "1060", "35"),
            array("Deluxe", "1160", "23"),
            array("Executive", "1260", "12"),
            array("Regency", "1460", "7"));
        $breakfast = array(
            "Bacon and Egg",
            "Tocilog",
            "Beef pares",
            "Mami"
        );
        $drink = array(
            "Chocolate",
            "Coffee",
            "Iced tea",
            "Water"
        );
    ?>
</head>
<body>
    <div class="container">
        <h1>Room Reservation - Bear Hotel</h1>
        <img src="https://www.peninsula.com/-/media/homepage---andy/exterior-2_1920.jpg" alt="the peninsula building" width="500px">
        <form>
            <label>First name:</label><br>
            <input class="form-control" type="text" placeholder="Juan">
            <label>Last name:</label><br>
            <input class="form-control" type="text" placeholder="De La Cruz">
            <label>Email address:</label><br>
            <input class="form-control" type="text" placeholder="jdc1994@gmail.com">
            <label>Number of guests:</label><br>
            <input class="form-control" type="number">
            <label>Available rooms:</label><br>
            <select class="form-select">
                <option disabled selected>Select an available room</option>
                <?php
                    foreach($available_rooms as $ar){
                        echo '<option>' . $ar[0] . '- ₱' . $ar[1] . ' (' . $ar[2] . ' available rooms)</option>';
                    }
                ?>
            </select>
            <label>FREE breakfast:</label><br>
            <?php
                foreach($breakfast as $b){
                    echo '<input type="checkbox" class="form-check-input">
                    <label>' . $b . '</label><br>';
                }
            ?>
            <label>FREE drinks:</label><br>
            <?php
                foreach($drink as $d){
                    echo '<input type="radio" class="form-check-input" name="drink" value="' . $d . '">
                    <label>' . $d . '</label><br>';
                }
            ?>
            <label>Terms of Service</label><br>
            <input type="checkbox" class="form-check-input">
            <label>I agree to the terms of service of Bear Hotel</label><br>
            <button class="btn btn-primary">Submit</button>
        </form>
    </div>
</body>
</html>
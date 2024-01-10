<?php
    class Attraction {
        private $name;
        public $location;
        public $cost;

        function __construct($n, $l, $c){
            $this->name = $n;
            $this->location = $l;
            $this->cost = $c;
        }

        function set_name($n){
            $this->name = $n;
            echo "Name has been updated to " . $this->name;
            echo "<br>";    
        }

        function get_name(){
            return $this->name;
        }

        static function greet(){
            echo "Welcome to the Netherlands!";
        }

        function check_cost($cash) {
            if ($cash > $this->cost){
                echo " " . $this->name . " is within your budget!";
                echo "<br>";
            }else{
                echo "Insufficient funds!";
                echo "<br>";
            }
        }
    }

    final class Park extends Attraction {
        public $playground;

        function __construct($n, $l, $c, $pg){
            parent::__construct($n, $l, $c);
            $this->playground = $pg;
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css"/>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
    <title>Document</title>
</head>
<body>
    <h1>Travel</h1>
    <?php
        $pocket_money = 4000;

        $attractions = [];

        Attraction::greet();
        $attractions[0] = new Attraction("Van Gogh Museum", "Amsterdam", 1221);
        $attractions[0]->check_cost($pocket_money);

        $attractions[1] = new Park("Het Nationale Park", "Amsterdam", 2449, false);
        if ($attractions[1]->playground == false){
            echo $attractions[1]->get_name() . " does not have a playground!<br>";
        }
        $attractions[1]->greet();

        // $attractions[0] = new Attraction();
        // $attractions[0]->set_name("Van Gogh Museum");
        // $attractions[0]->location = "Amsterdam";
        // $attractions[0]->cost = 1221;
        // $attractions[0]->check_cost($pocket_money);

        // $attractions[1] = new Attraction();
        // $attractions[1]->set_name("ARTIS");
        // $attractions[1]->location = "Amsterdam";
        // $attractions[1]->cost = 940;
        // $attractions[1]->check_cost($pocket_money);
    ?>
</body>
</html>
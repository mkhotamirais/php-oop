<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>overriding</title>
</head>

<body>
    <h1>overriding</h1>
    <p>overriding merupakan kemampuan untuk menimpa method / property / constructor yang ada di parent class</p>

    <h3>Override constructor</h3>
    <?php
    class Ortu
    {
        public $name, $age = 20;

        public function __construct($name = "default name", $age = 0)
        {
            $this->name = $name;
            $this->age = $age;
        }
    }

    class Anak extends Ortu
    {
        public $nationality;
        public function __construct($name, $age, $nationality)
        {
            parent::__construct($name, $age);
            $this->nationality = $nationality;
        }
    }

    $anak1 = new Anak("ahmad", 10, "indonesia");
    echo "Name $anak1->name and age $anak1->age and nationality $anak1->nationality";

    ?>
</body>

</html>
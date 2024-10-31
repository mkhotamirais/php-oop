<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>getter dan setter</title>
</head>

<body>
    <h1>getter dan setter</h1>
    <p>Sebaiknya property itu visibilitynya jangan diatur public tapi protected atau private. Adapun untuk mengaksesnya bisa dengan getter dan setter, sehingga bisa menambah validasi juga.</p>

    <?php
    class GetSet
    {
        private $name, $age;

        public function __construct($name = "default name", $age = 0)
        {
            $this->name = $name;
            $this->age = $age;
        }

        public function getName()
        {
            return $this->name;
        }

        public function setName($name)
        {
            $this->name = $name;
        }
    }

    $person = new GetSet("John", 30);
    echo "Name: " . $person->getName() . "<br />";
    $person->setName("Mary");
    echo "Name: " . $person->getName() . "<br />";
    ?>
</body>

</html>
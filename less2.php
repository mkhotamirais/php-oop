<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>constructor & object type</title>
</head>

<body>
    <h1>Constructor & object type</h1>

    <h3>Constructor</h3>
    <p>Constructor adalah fungsi yang dijalankan ketika object dibuat, default value propertynya pindah ke parameter constructor</p>
    <?php
    class Obj2
    {
        public $name, $price;
        public function __construct($name = "default name", $price = 1000)
        {
            $this->name = $name;
            $this->price = $price;
        }
        public function callProduct()
        {
            return "Product name $this->name and price $this->price";
        }
    }

    $product1 = new Obj2("Laptop", 5000000);
    $product2 = new Obj2("Smartphone");
    echo $product1->callProduct();
    echo "<br>";
    echo $product2->callProduct();
    echo "<br>";

    ?>

    <h3>Object Type</h3>

    <?php
    class Person
    {
        public $id, $name, $age;
        public function __construct($id = 0, $name = "default name", $age = 0)
        {
            $this->id = $id;
            $this->name = $name;
            $this->age = $age;
        }
    }

    class callPerson
    {
        public function panggilOrang(Person $person)
        {
            return "Person id $person->id and name $person->name and age $person->age";
        }
    }

    $person1 = new Person(1, "ahmad", 10);

    $callPerson1 = new callPerson();
    echo $callPerson1->panggilOrang($person1);
    echo "<br>";

    $callPerson2 = new callPerson();
    echo $callPerson2->panggilOrang(new Person(2, "budi", 20));
    ?>


</body>

</html>
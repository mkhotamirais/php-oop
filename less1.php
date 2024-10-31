<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Less1</title>
</head>

<body>
    <h1>Konsep dasar</h1>
    <h3>Class and Object</h3>
    <p><b>Class</b> adalah template untuk membuat object, <b>Object</b> adalah instance dari class, <b>Property</b> adalah variabel dari object, property dapat diatur default. <b>Method</b> adalah fungsi dari object</p>

    <?php
    class Obj1
    {
        // PROPERTY

        // public $id;
        // public $name;
        // or you can write like this
        public $id = 1, $name = "default name";

        // METHOD
        public function callName($name)
        {
            return "hello $name, product name is $this->name";
        }
    }

    $product = new Obj1();
    $product->id = 1;
    $product->name = "Laptop";

    echo "Product id $product->id and name $product->name";
    echo "<br />";
    echo $product->callName("John");

    ?>

</body>

</html>
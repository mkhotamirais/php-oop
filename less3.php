<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>inheritance</title>
</head>

<body>
    <h1>inheritance</h1>
    <p>inheritance is a mechanism that allows you to create a new class from an existing class</p>
    <?php
    class Product
    {
        public $id, $name;
        public function __construct($id = 0, $name = "default name")
        {
            $this->id = $id;
            $this->name = $name;
        }
    }

    class Buku extends Product
    {
        public $jumlahHal = "80";
    }

    class Laptop extends Product
    {
        public $ram = "8GB";
    }

    $buku1 = new Buku(1, "buku cerita");
    echo "Buku id $buku1->id and name $buku1->name and jumlah $buku1->jumlahHal";
    echo "<br />";

    $laptop1 = new Laptop(1, "laptop asus");
    echo "Laptop id $laptop1->id and name $laptop1->name and ram $laptop1->ram";
    echo "<br />";

    ?>
</body>

</html>
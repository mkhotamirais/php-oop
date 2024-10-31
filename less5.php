<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>visibility</title>
</head>

<body>
    <h1>visibility</h1>
    <p>visibility adalah property yang digunakan untuk mengatur apakah property tersebut dapat diakses atau tidak. Terdapat 3 jenisnya: public, protected, private. Public bisa diakses dimanapun. Protected hanya bisa diakses di class itu sendiri dan turunannya. Private hanya bisa diakses di class itu sendiri</p>

    <?php
    class Orang
    {
        public $publicName;
        protected $protectedName;
        private $privateName;

        public function __construct($publicName = "public name", $protectedName = "protected name", $privateName = "private name")
        {
            $this->publicName = $publicName;
            $this->protectedName = $protectedName;
            $this->privateName = $privateName;
        }

        public function getProtectedName()
        {
            return $this->protectedName;
        }

        public function getPrivateName()
        {
            return $this->privateName;
        }
    }

    class ChildOrang extends Orang
    {
        public function getProtectedNameFromChild()
        {
            return $this->protectedName;
        }

        // public function getPrivateNameFromChild()
        // {
        //     return $this->privateName;
        // }
    }


    $orang = new Orang("ahmad", "budi", "cindy");
    $childOrang = new ChildOrang();

    echo $orang->publicName;
    echo "<br />";
    // echo $orang->protectedName ?? "cannot access protected";
    // echo $orang->privateName ?? "cannot access private";

    echo $orang->getProtectedName();
    echo "<br />";
    echo $childOrang->getProtectedNameFromChild();
    echo "<br />";
    // echo $childOrang->getPrivateNameFromChild(); ?? "cannot access private";

    echo $orang->getPrivateName();
    ?>

</body>

</html>
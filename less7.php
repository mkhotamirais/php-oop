<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>static keyword</title>
</head>

<body>
    <h1>static keyword</h1>
    <p>kita bisa akses property dan method dalam class tanpa instansiasi dengan static keyword. Member terkait dengan class bukan dengan object. Nilai static akan selalu tetapi meski object di-instansiasi berulang kali. Membuat kode jadi procedural. Biasanya digunakan untuk membuat fungsi bantuan/helper atau di class-class utility pada framework.</p>

    <?php

    // Contoh perubahan nilai tanpa static keyword
    class ContohNoStatic
    {
        public $number = 1;
        public function increaseNum()
        {
            return "Number is " . $this->number++ . "<br />";
        }
    }

    $obj1 = new ContohNoStatic();
    echo $obj1->increaseNum();
    echo $obj1->increaseNum();
    echo $obj1->increaseNum();
    $obj2 = new ContohNoStatic();
    echo $obj2->increaseNum();
    echo $obj2->increaseNum();
    echo $obj2->increaseNum();


    // Contoh perubahan nilai dengan static keyword
    class ContohStatic
    {
        public static $number = 1;
        public static function incNumber()
        {
            return "hello " . self::$number++ . "<br />";
        }
    }

    echo ContohStatic::$number;
    echo "<br />";
    echo ContohStatic::incNumber();

    $static1 = new ContohStatic();
    echo $static1->incNumber();
    echo $static1->incNumber();
    $static2 = new ContohStatic();
    echo $static2->incNumber();
    echo $static2->incNumber();
    echo $static2->incNumber();



    ?>
</body>

</html>
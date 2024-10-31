<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Constants</title>
</head>

<body>
    <h1>Constants</h1>

    <h3>Declare constants outside class</h3>
    <p>Bisa dilakukan dengan cara define dan const</p>
    <?php
    define("NAME1", "John");
    const NAME2 = "Doe";
    echo NAME1;
    echo "<br />";
    echo NAME2;
    ?>

    <h3>Declare constants inside class</h3>
    <p>Constants di dalam class terikat langsung dengan class</p>
    <?php
    class Less8
    {
        const NAME = "Siti";
    }
    echo Less8::NAME;
    ?>

    <h3>Magic constants</h3>
    <p>line, file, dir; function, class, trait, method, namespace</p>
    <?= __LINE__; ?><br>
    <?= __FILE__; ?><br>
    <?= __DIR__; ?><br>
    <?php
    function cobaFunction()
    {
        echo __FUNCTION__;
    }
    cobaFunction();
    ?>
</body>

</html>
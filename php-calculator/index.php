<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Calculator</title>
</head>
<body>
    <form action="index.php" method="GET">
        <input type="text" name="number_1" placeholder="Masukkan Angka 1">
        <select name="operator" id="operator">
            <option value="plus">+</option>
            <option value="minus">-</option>
            <option value="divide">/</option>
            <option value="multiply">x</option>
        </select>
        <input type="text" name="number_2" placeholder="Masukkan Angka 2">
        <input type="submit" value="Calculate">
    </form>
    <?php
        if(!empty($_GET['number_1'])){
            $result = 0;
            switch ($_GET['operator']) {
                case 'plus':
                    $result = $_GET['number_1'] + $_GET['number_2'];
                    break;
                case 'minus':
                    $result = $_GET['number_1'] - $_GET['number_2'];
                    break;
                case 'divide':
                    $result = $_GET['number_1'] / $_GET['number_2'];
                    break;
                case 'multiply':
                    $result = $_GET['number_1'] * $_GET['number_2'];
                    break;
                default:
                    echo 'Something went wrong';
                    break;
            }
            echo "The result is $result" ;
        }
    ?>
</body>
</html>
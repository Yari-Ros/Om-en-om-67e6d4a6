<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        td {
            height: 55px;
            width: 55px;
            padding: 0px;
        }
        table {
            border: black 0.5px solid;
        }
        .black {
            background-color: black;
            border: black 5px solid;
        }
    </style>
</head>
<body>
    <table>
        <tbody>
            <?php 
                for ($b=0; $b < 8; $b++) { 
                    echo "<tr>";
                    for ($w=0;$w < 8; $w++) {
                        if (($w % 2 == 0 && $b % 2 == 1) || $w % 2 == 1 && $b % 2 == 0){
                            echo "<td class='black'></td>";
                        } else {
                            echo "<td>";
                        }
                    }
                    echo "</tr>";
                }
            ?>
        </tbody>
    </table>
</body>
</html>
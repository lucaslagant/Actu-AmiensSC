<?php
$tab = json_decode(file_exists("http://127.0.0.1:8080/api/asc/lireclas.php"));
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>clessement</title>
</head>
<body>
    <table>
        <tr>
            <th>
                num
            </th>
            <th>
                equipe
            </th>
            <th>
                journee
            </th>
            <th>
                match gagne
            </th>
            <th>
                match null
            </th>
            <th>
                match perdu
            </th>
            <th>
                différence de but
            </th>
            <th>
                point
            </th>
        </tr>


        <?php foreach ($tab as $clas):?> 
            <tr>
                <td>
                    <?= $clas->num ?>
                </td>
                <td>
                    <img src="<?= $clas->img ?>" alt="<?= $clas->equipe ?>">
                    <?= $clas->equipe ?>
                </td>
                <td>
                    <?= $clas->gagne ?>
                </td>
                <td>
                    <?= $clas->null ?>
                </td>
                <td>
                    <?= $clas->perdu ?>
                </td>
                <td>
                    <?= $clas->diff ?>
                </td>
                <td>
                    <?= $clas->point ?>
                </td>
            </tr>
            <?php endforeach; ?>       
    </table>
</body>
</html>
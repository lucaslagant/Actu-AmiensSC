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
    <script src="https://cdn.tailwindcss.com"></script>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <title>clessement</title>
</head>
<body>
    <nav class="flex items-center justify-between flex-wrap bg-rose-200 p-10">
        <div class="flex items-center flex-shrink-0 text-rose-800 mr-6">
            <a href="Index.php"><span class="font-bold text-xl tracking-tight">Logo</span></a>
        </div>

        <div class="lg:flex lg:items-center lg:w-auto">
            <div>
                <button class="block text-xl text-rose-100 inline-block mt-0 hover:text-white bg-rose-800 hover:bg-rose-700 px-5 py-2 rounded-full" id="burger"><i class='bx bx-menu'></i></button>
            </div>
            <div id="sidemenu" class="invisible"><?php include('Page_Navbar.php'); ?></div>
        </div>
    </nav>
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
    <?php include('Footer.php'); ?>
    <script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>
</body>
</html>
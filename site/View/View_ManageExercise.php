<?php

/**
 * Created by PhpStorm.
 * User: Cyril Goldenschue
 * Date: 29/09/2020
 */

/*

*/




?>

<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
        <title>New Exercise</title>
        <Link href="../Assets/css/styleDash.css" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
        <script src="https://kit.fontawesome.com/bf0671b196.js" crossorigin="anonymous"></script>
    </head>

    <body>
        <header class="heading dashbord">
            <section class="container">
                <a href="../index.php?Page=Accueil">
                    <img  class="miniLogo" src="../Assets/img/logo.png">
                </a>
            </section>
        </header>


        <main class="container">

            <div class="tableManage">
                <div class="column">
                    <h1>Building</h1>
                    <table class="table">
                        <tr><th>Title</th></tr>
                        <?php
                        while($Building=$ExerciseBuilding->fetch()){
                            //0 = id; 1 = Title
                            ?>
                            <tr>
                                <td><?= $Building["Title"] ?></td>
                                <td>
                                    <a title="Manage fields" href="?id=<?= $Building["id"] ?>&Page=FieldsEdit"><i class="fa fa-edit"></i></a>
                                    <a data-confirm="Are you sure?" title="Destroy" rel="nofollow" data-method="delete" href="/exercises/<?= $Building["id"] ?>"><i class="fa fa-trash"></i></a>
                                </td>
                            </tr>
                        <?php } ?>
                    </table>
                </div>
                <div class="column">
                    <h1>Answering</h1>
                    <table class="table">
                        <tr><th>Title</th></tr>
                        <?php
                        while($Answering=$ExerciseAnswering->fetch()){
                            //0 = id; 1 = Title
                            ?>
                            <tr>
                                <td><?= $Answering["Title"] ?></td>
                                <td>
                                    <a title="Manage fields" href="/exercises/<?= $Answering["id"] ?>/fields"><i class="fa fa-edit"></i></a>
                                    <a data-confirm="Are you sure?" title="Destroy" rel="nofollow" data-method="delete" href="/exercises/209"><i class="fa fa-trash"></i></a>
                                </td>
                            </tr>
                        <?php } ?>
                    </table>
                </div>
                <div class="column">
                    <h1>Closed</h1>
                    <table class="table">
                        <tr><th>Title</th></tr>
                        <?php
                        while($Closed=$ExerciseClosed->fetch()){
                        //0 = id; 1 = Title
                        ?>
                        <tr>
                            <td><?= $Closed["Title"] ?></td>
                            <td>
                                <a title="Manage fields" href="/exercises/209/fields"><i class="fa fa-edit"></i></a>
                                <a data-confirm="Are you sure?" title="Destroy" rel="nofollow" data-method="delete" href="/exercises/209"><i class="fa fa-trash"></i></a>
                            </td>
                        </tr>
                        <?php } ?>
                    </table>
                </div>
            </div>
        </main>
    </body>
</html>
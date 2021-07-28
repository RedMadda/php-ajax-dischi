<!-- Prima Milestone: Stampiamo i dischi solo con l’utilizzo di PHP, che stampa direttamente i dischi in pagina: al caricamento della pagina ci saranno tutti i dischi. -->
<?php 
// echo getcwd();
include __DIR__ . "/db/db_dischi.php";


?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- bootstrap cdn -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- my style sheet  -->
    <link rel="stylesheet" href="css/style.css">
    <!-- font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Gowun+Batang:wght@400;700&display=swap" rel="stylesheet">

    <title>Php dischi</title>
</head>
<body>
    <!-- beginn. header -->
    <header class="container-fluid d-flex align-items-center">
        <a href="#">
            <img class="logo-spot" src="img/Spotify.png" alt="Spotify Logo">
        </a>
    </header>
    <!-- /header -->
    
    <!-- beginn. main -->
    <div class="bck-wrapper">
        <main>
            <div class="container d-flex">

            <!-- row that contains "dischi" -->
            <div class="row flex-wrap justify-content-around mt-5 pt-5">
                <?php
                foreach($dischi as $disco): ?>
                <!-- sections with "disco" => tipo card -->
                    <section class="disco p-4 mb-5 justify-content-center">
                        <!-- title -->
                        <a class="hover-grey" href="#">
                            <?php if((strlen($disco["title"])) > 17){?>
                                <h6 class="title text-white text-center">
                                    <?= $disco["title"]  ?>
                                </h6>
                            <?php } else{ ?>
                                <h5 class="title text-white text-center">
                                    <?= $disco["title"]  ?>
                                </h5>
                            <?php }; ?>
                        </a>   
                        <!-- cover img -->
                        <a href="#">
                            <img class="cover pe-3" src="<?= $disco["poster"]; ?>" alt="Cover dell'album">
                        </a>
                        <!-- infos -->
                        <a class="hover-grey" href="#">
                            <p class="text-center pt-3">
                                <small class="text-white text-center">
                                    <?= $disco["author"];?> | <?= $disco["genre"];?> | <?=  $disco   ["year"]; ?>
                                </small>
                            </p>
                        </a>
                        
                    </section>
                <?php endforeach; ?>
                <!-- /section with "disco" -->
                </div>
                <!-- /row that contains "dischi" -->
            </div>
            <!-- /container -->
        </main>
    </div>
    <!-- /bck-wrapper of main -->
</body>
</html>


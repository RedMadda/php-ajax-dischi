<!-- Attraverso l’utilizzo di axios: al caricamento della pagina axios chiederà, attraverso una chiamata api, i dischi a php e li stamperà attraverso vue. -->


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- axios -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.21.1/axios.min.js" integrity="sha512-bZS47S7sPOxkjU/4Bt0zrhEtWx0y0CRkhEp8IckzK+ltifIIE9EMIMTuT/mEzoIMewUINruDBIR/jJnbguonqQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
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
    <div id="app">
        <!-- beginn. header -->
        <header class="container-fluid d-flex align-items-center justify-content-evenly">
            <a href="#">
                <img class="logo-spot" src="img/Spotify.png" alt="Spotify Logo">
            </a>
            <!-- select -->
            <div id="v-model-select" class="select-genre">
                <select v-model="selected">
                    <option disabled value="">Choose a genre</option>
                    <option v-for="genreOptions"></option>
                </select>
                <!-- <span>Selected: {{ selected }}</span> -->
            </div>
        </header>
        <!-- /header -->
        <!-- beginn. main -->
        <div class="bck-wrapper">
            <main>
                <div class="container d-flex">

                <!-- row that contains "dischi" -->
                <div class="row flex-wrap justify-content-around mt-5 pt-5">

                    <!-- sections with "disco" => tipo card -->
                        <section class="disco p-4 mb-5 justify-content-center" v-for="disco in dischi">
                            <!-- title -->
                            <a class="hover-grey" href="#">
                                <h6 class="title text-white text-center">
                                    {{disco.title}}
                                </h6>            
                            </a>   
                            <!-- cover img -->
                            <a href="#">
                                <img class="cover pe-3" :src="disco.poster" :alt="disco.title + 'cover'">
                            </a>
                            <!-- infos:author -->
                            <a class="hover-grey" href="#">
                                <p class="text-center text-white pt-3 pb-1">
                                    {{disco.author}}
                                </p>
                            </a>
                            <!-- infos:year -->
                            <a class="hover-grey" href="#">
                                <p class="text-center text-white pt-2 pb-1">
                                    {{disco.year}}
                                </p>
                            </a>
                            
                        </section>
                    <!-- /section with "disco" -->
                    </div>
                    <!-- /row that contains "dischi" -->
                </div>
                <!-- /container -->
            </main>
        </div>
        <!-- /bck-wrapper of main -->
        <!-- / main -->
    </div>

    <script src="https://cdn.jsdelivr.net/npm/vue@2/dist/vue.js"></script>
    <script src="js/script.js"></script>
   
</body>
</html>


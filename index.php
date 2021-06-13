<!DOCTYPE html>
<?php
    $nomejogador = "";
    if(isset($_POST["nomejogador"])){
        $nomejogador = $_POST["nomejogador"];
    }
?>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>General</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <link rel="shortcut icon" href="fav/favicon.ico">
</head>
<body>
    <nav class="navbar sticky-top navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <img src="img/asonlogo.png" alt="" width="50" class="d-inline-block align-top">
            </a>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="https://store.steampowered.com/app/1255980/Portal_Reloaded/" target="_blank">Portal Reloaded</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="https://www.half-life.com/pt-br/episode1" target="_blank">Half-Life 2: Episode One</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="https://pt.wikipedia.org/wiki/Defense_of_the_Ancients" target="_blank">Defense of the Ancients (Dota)</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div id="body">
        <?php
        echo "<br>
            <header>
                <h2 class='text-light'>General</h2>
            </header>
            <br>
            <h4 class='text-light'> Para iniciar a partida, preencha o campo abaixo. </h4>";
        ?>
        <form method="post">
            <p>
            <br>
            <div class="form-floating">
                <input type="text" class="form-control" name="nomejogador" id="nomejogador" value="<?php if(isset($_POST["nomejogador"])){ echo $nomejogador; } ?>"
                placeholder="nomejogador"><br>
                <label for="nomejogador">Nome do Jogador</label>
            </div>
            <br>
            <div class="d-grid gap-2">
                <button type="submit" class="btn btn-danger btn-lg">Rolar os Dados</button>
            </div>
            </p>
            <br>
        </form>
        <center>
            <h4 class="text-light">
                <?php
                    if($nomejogador != ""){
                        $vetorjogador = array();
                        for($i = 0; $i < 5; $i ++){
                            $vetorjogador[$i] = rand(1,6);
                            for($i2 = 1; $i2 <= 6; $i2 ++){
                                if($vetorjogador[$i] == $i2){
                                    echo "<img src='img/dados/dado$i2.svg' title='$i2' width='70'> ";
                                }
                            }
                        }
                        echo "</center>";
                        $vetorcomputador = array();
                        for($i = 0; $i < 5; $i ++){
                            $vetorcomputador[$i] = rand(1,6);
                        }

                    }
                ?>
            </h4>
    </div>
    <br><br><br><br><br><br>
    <br><br><br><br><br><br><br>
    <br><br><br><br><br><br><br>
    <footer class="footer mt-auto py-3 bg-dark">
        <center>
            <div class="container">
                <span class="text-light">© 2021 pedrosc</span>
            </div>
        </center>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
</body>
</html>
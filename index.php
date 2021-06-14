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
                        echo "$nomejogador: <br>
                        <br>";
                        $vetorjogador = array();
                        for($i = 0; $i < 5; $i ++){
                            $vetorjogador[$i] = rand(1,6);
                            for($i2 = 1; $i2 <= 6; $i2 ++){
                                if($vetorjogador[$i] == $i2){
                                    echo "<img src='img/dados/dado$i2.svg' title='$i2' width='70'> ";
                                }
                            }
                        }
                        echo "<br>
                        <br>
                        Computador: <br>
                        <br>";
                        $vetorcomputador = array();
                        for($i = 0; $i < 5; $i ++){
                            $vetorcomputador[$i] = rand(1,6);
                            for($i2 = 1; $i2 <= 6; $i2 ++){
                                if($vetorcomputador[$i] == $i2){
                                    echo "<img src='img/dados/dado$i2.svg' title='$i2' width='70'> ";
                                }
                            }
                        }
                        echo "</center>";
                        $jjogadad1 = 0;
                        $jjogadad2 = 0;
                        $jjogadad3 = 0;
                        $jjogadad4 = 0;
                        $jjogadad5 = 0;
                        $jjogadad6 = 0;
                        $jrandom = 0;
                        for($i = 0; $i < 5; $i ++){
                            if($vetorjogador[$i] == 1){
                                $jjogadad1 ++;
                            } else if($vetorjogador[$i] == 2){
                                $jjogadad2 = $jjogadad2 + 2;
                            } else if($vetorjogador[$i] == 3){
                                $jjogadad3 = $jjogadad3 + 3;
                            } else if($vetorjogador[$i] == 4){
                                $jjogadad4 = $jjogadad4 + 4;
                            } else if($vetorjogador[$i] == 5){
                                $jjogadad5 = $jjogadad5 + 5;
                            } else if($vetorjogador[$i] == 6){
                                $jjogadad6 = $jjogadad6 + 6;
                            }
                            $jrandom = $jrandom + $vetorjogador[$i];
                        }
                        $jpar = 0;
                        for($i = 1; $i <= 6; $i ++){
                            for($i2 = 0; $i2 < 5; $i2 ++){
                                if($vetorjogador[$i2] == $i){
                                    $jpar ++;
                                }
                            }
                            if($jpar == 2){
                                break;
                            } else{
                                $jpar = 0;
                            }
                        }
                        $jtrinca = 0;
                        for($i = 1; $i <= 6; $i ++){
                            for($i2 = 0; $i2 < 5; $i2 ++){
                                if($vetorjogador[$i2] == $i){
                                    $jtrinca ++;
                                }
                            }
                            if($jtrinca == 3){
                                break;
                            } else{
                                $jtrinca = 0;
                            }
                        }
                        $jquadra = 0;
                        for($i = 1; $i <= 6; $i ++){
                            for($i2 = 0; $i2 < 5; $i2 ++){
                                if($vetorjogador[$i2] == $i){
                                    $jquadra ++;
                                }
                            }
                            if($jquadra == 4){
                                break;
                            } else{
                                $jquadra = 0;
                            }
                        }
                        $jgeneral = 0;
                        for($i = 1; $i <= 6; $i ++){
                            for($i2 = 0; $i2 < 5; $i2 ++){
                                if($vetorjogador[$i2] == $i){
                                    $jgeneral ++;
                                }
                            }
                            if($jgeneral == 5){
                                break;
                            } else{
                                $jgeneral = 0;
                            }
                        }
                        $jalta = 0;
                        $jbaixa = 0;
                        for($i = 0; $i < 5; $i ++){
                            for($i2 = 0; $i2 < 5; $i2 ++){
                                if($vetorjogador[$i] != 1 && $vetorjogador[$i2] != 1 && $vetorjogador[$i] != $vetorjogador[$i2]){
                                    $jalta ++;
                                }
                                if($vetorjogador[$i] != 6 && $vetorjogador[$i2] != 6 && $vetorjogador[$i] != $vetorjogador[$i2]){
                                    $jbaixa ++;
                                }
                            }
                        }
                        if($jjogadad1 <= 1){
                            $jjogadad1 = 0;
                        }
                        if($jjogadad2 <= 2){
                            $jjogadad2 = 0;
                        }
                        if($jjogadad3 <= 3){
                            $jjogadad3 = 0;
                        }
                        if($jjogadad4 <= 4){
                            $jjogadad4 = 0;
                        }
                        if($jjogadad5 <= 5){
                            $jjogadad5 = 0;
                        }
                        if($jjogadad6 <= 6){
                            $jjogadad6 = 0;
                        }
                        if($jpar == 2 && $jtrinca == 3){
                            $jfh = 25;
                        } else{
                            $jfh = 0;
                        }
                        if($jtrinca == 3){
                            $jtrinca = 20;
                        }
                        if($jquadra == 4){
                            $jquadra = 30;
                        }
                        if($jgeneral == 5){
                            $jgeneral = 50;
                        }
                        if($jalta == 20){
                            $jalta = 30;
                        } else{
                            $jalta = 0;
                        }
                        if($jbaixa == 20){
                            $jbaixa = 40;
                        } else{
                            $jbaixa = 0;
                        }
                        $jtotal = $jjogadad1 + $jjogadad2 + $jjogadad3 + $jjogadad4 + $jjogadad5 + $jjogadad6 + $jtrinca + $jquadra + $jfh + $jalta + $jbaixa + $jgeneral + $jrandom;
                        $cjogadad1 = 0;
                        $cjogadad2 = 0;
                        $cjogadad3 = 0;
                        $cjogadad4 = 0;
                        $cjogadad5 = 0;
                        $cjogadad6 = 0;
                        $crandom = 0;
                        for($i = 0; $i < 5; $i ++){
                            if($vetorcomputador[$i] == 1){
                                $cjogadad1 ++;
                            } else if($vetorcomputador[$i] == 2){
                                $cjogadad2 = $cjogadad2 + 2;
                            } else if($vetorcomputador[$i] == 3){
                                $cjogadad3 = $cjogadad3 + 3;
                            } else if($vetorcomputador[$i] == 4){
                                $cjogadad4 = $cjogadad4 + 4;
                            } else if($vetorcomputador[$i] == 5){
                                $cjogadad5 = $cjogadad5 + 5;
                            } else if($vetorcomputador[$i] == 6){
                                $cjogadad6 = $cjogadad6 + 6;
                            }
                            $crandom = $crandom + $vetorcomputador[$i];
                        }
                        $cpar = 0;
                        for($i = 1; $i <= 6; $i ++){
                            for($i2 = 0; $i2 < 5; $i2 ++){
                                if($vetorcomputador[$i2] == $i){
                                    $cpar ++;
                                }
                            }
                            if($cpar == 2){
                                break;
                            } else{
                                $cpar = 0;
                            }
                        }
                        $ctrinca = 0;
                        for($i = 1; $i <= 6; $i ++){
                            for($i2 = 0; $i2 < 5; $i2 ++){
                                if($vetorcomputador[$i2] == $i){
                                    $ctrinca ++;
                                }
                            }
                            if($ctrinca == 3){
                                break;
                            } else{
                                $ctrinca = 0;
                            }
                        }
                        $cquadra = 0;
                        for($i = 1; $i <= 6; $i ++){
                            for($i2 = 0; $i2 < 5; $i2 ++){
                                if($vetorcomputador[$i2] == $i){
                                    $cquadra ++;
                                }
                            }
                            if($cquadra == 4){
                                break;
                            } else{
                                $cquadra = 0;
                            }
                        }
                        $cgeneral = 0;
                        for($i = 1; $i <= 6; $i ++){
                            for($i2 = 0; $i2 < 5; $i2 ++){
                                if($vetorcomputador[$i2] == $i){
                                    $cgeneral ++;
                                }
                            }
                            if($cgeneral == 5){
                                break;
                            } else{
                                $cgeneral = 0;
                            }
                        }
                        $calta = 0;
                        $cbaixa = 0;
                        for($i = 0; $i < 5; $i ++){
                            for($i2 = 0; $i2 < 5; $i2 ++){
                                if($vetorcomputador[$i] != 1 && $vetorcomputador[$i2] != 1 && $vetorcomputador[$i] != $vetorcomputador[$i2]){
                                    $calta ++;
                                }
                                if($vetorcomputador[$i] != 6 && $vetorcomputador[$i2] != 6 && $vetorcomputador[$i] != $vetorcomputador[$i2]){
                                    $cbaixa ++;
                                }
                            }
                        }
                        if($cjogadad1 <= 1){
                            $cjogadad1 = 0;
                        }
                        if($cjogadad2 <= 2){
                            $cjogadad2 = 0;
                        }
                        if($cjogadad3 <= 3){
                            $cjogadad3 = 0;
                        }
                        if($cjogadad4 <= 4){
                            $cjogadad4 = 0;
                        }
                        if($cjogadad5 <= 5){
                            $cjogadad5 = 0;
                        }
                        if($cjogadad6 <= 6){
                            $cjogadad6 = 0;
                        }
                        if($cpar == 2 && $ctrinca == 3){
                            $cfh = 25;
                        } else{
                            $cfh = 0;
                        }
                        if($ctrinca == 3){
                            $ctrinca = 20;
                        }
                        if($cquadra == 4){
                            $cquadra = 30;
                        }
                        if($cgeneral == 5){
                            $cgeneral = 50;
                        }
                        if($calta == 20){
                            $calta = 30;
                        } else{
                            $calta = 0;
                        }
                        if($cbaixa == 20){
                            $cbaixa = 40;
                        } else{
                            $cbaixa = 0;
                        }
                        $ctotal = $cjogadad1 + $cjogadad2 + $cjogadad3 + $cjogadad4 + $cjogadad5 + $cjogadad6 + $ctrinca + $cquadra + $cfh + $calta + $cbaixa + $cgeneral + $crandom;
                        echo "<br><br>
                        <h4 class='text-light'>
                            <table class='table table-dark table-hover'>
                                <tr>
                                    <th>$nomejogador</th>
                                    <th></th>
                                    <th>Computador</th>
                                </tr>
                                <tr>
                                    <td>$jjogadad1</td>
                                    <td>Jogada de 1</td>
                                    <td>$cjogadad1</td>
                                </tr>
                                <tr>
                                    <td>$jjogadad2</td>
                                    <td>Jogada de 2</td>
                                    <td>$cjogadad2</td>
                                </tr>
                                <tr>
                                    <td>$jjogadad3</td>
                                    <td>Jogada de 3</td>
                                    <td>$cjogadad3</td>
                                </tr>
                                <tr>
                                    <td>$jjogadad4</td>
                                    <td>Jogada de 4</td>
                                    <td>$cjogadad4</td>
                                </tr>
                                <tr>
                                    <td>$jjogadad5</td>
                                    <td>Jogada de 5</td>
                                    <td>$cjogadad5</td>
                                </tr>
                                <tr>
                                    <td>$jjogadad6</td>
                                    <td>Jogada de 6</td>
                                    <td>$cjogadad6</td>
                                </tr>
                                <tr>
                                    <td>$jtrinca</td>
                                    <td>Trinca</td>
                                    <td>$ctrinca</td>
                                </tr>
                                <tr>
                                    <td>$jquadra</td>
                                    <td>Quadra</td>
                                    <td>$cquadra</td>
                                </tr>
                                <tr>
                                    <td>$jfh</td>
                                    <td><i>Full House</i></td>
                                    <td>$cfh</td>
                                </tr>
                                <tr>
                                    <td>$jalta</td>
                                    <td>Sequência Alta</td>
                                    <td>$calta</td>
                                </tr>
                                <tr>
                                    <td>$jbaixa</td>
                                    <td>Sequência Baixa</td>
                                    <td>$cbaixa</td>
                                </tr>
                                <tr>
                                    <td>$jgeneral</td>
                                    <td>General</td>
                                    <td>$cgeneral</td>
                                </tr>
                                <tr>
                                    <td>$jrandom</td>
                                    <td>Jogada Aleatória</td>
                                    <td>$crandom</td>
                                </tr>
                                <tr>
                                    <td>$jtotal</td>
                                    <td>Total</td>
                                    <td>$ctotal</td>
                                </tr>
                            </table>";
                        if($jtotal > $ctotal){
                            echo "<br>
                            <center>
                                <h1>
                                    Vencedor: $nomejogador
                                </h1>
                            </center>";
                        } else if($jtotal < $ctotal){
                            echo "<br>
                            <center>
                                <h1>
                                    Vencedor: Computador
                                </h1>
                            </center>";
                        }
                        if($jtotal == $ctotal){
                            echo "<br>
                            <center>
                                <h1>
                                    Empate
                                </h1>
                            </center>";
                        }
                    }
                ?>
            </h4>
    </div>
    <br><br><br><br><br><br>
    <br><br><br><br><br><br><br>
    <br><br><br><br><br><br><br>
    <footer class="footer mt-auto py-3 bg-dark">
        <div id="body">
            <center>
            <div class="container">
                <span class="text-light">© 2021 pedrosc</span>
            </div>
            </center>
        </div>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
</body>
</html>
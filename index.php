<?php
session_start();
?>
<html>
    <head>
        <script src="//code.jquery.com/jquery-1.11.0.min.js"></script>
        <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
        <link href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css" rel="stylesheet">

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link rel="stylesheet" href="css/PrenotazioneRegistrazione.css">
        <meta name="viewport" content="width=device-width,initial-sclae=1.0">

    </head>

    <style>
        .custom-file-input::-webkit-file-upload-button {
            visibility: hidden;
        }
        .custom-file-input::before {
            content: 'Carica';
            display: inline-block;
            background: -webkit-linear-gradient(top, #f9f9f9, #e3e3e3);
            border: 1px solid #999;
            border-radius: 3px;
            padding: 5px 8px;
            outline: none;
            white-space: nowrap;
            -webkit-user-select: none;
            cursor: pointer;
            text-shadow: 1px 1px #fff;
            font-weight: 700;
            font-size: 10pt;
        }
        .custom-file-input:hover::before {
            border-color: black;
        }
        .custom-file-input:active::before {
            background: -webkit-linear-gradient(top, #e3e3e3, #f9f9f9);
        }
        #my_file {
            display: none;
        }
        #get_file {
            background: #f9f9f9;
            border: 1px solid #88c;
            padding: 10px;
            border-radius: 5px;
            margin: 10px;
            cursor: pointer;
        }
        #customfileupload
        {
            display: inline;
            background-color: #fff;
            font-size: 14px;
            padding: 10px 30px 10px 10px;
            width: 250px;
            border: 1px solid #999;
            box-shadow: inset 1px 1px 5px #ccc;
            -webkit-box-shadow: inset 1px 1px 5px #ccc;
            -moz-box-shadow: inset 0px 0px 4px #ccc;
            -ms-box-shadow: inset 0px 0px 4px #ccc;
            -o-box-shadow: inset 0px 0px 4px #ccc;
            z-index: 1;
            white-space: nowrap;
            overflow: hidden;
            text-overflow: ellipsis;
        }


        .panel{
            margin-bottom:2%;
        }
        #registrazione{
            background-color:DodgerBlue;
            border-radius:5px 5px 5px 5px;
            height:150px;
            min-width:150px;
        }
        #registrazione1{
            height:75px;
        }
        .btn-lg {
            padding: 10px 16px;
            font-size: 18px;
            line-height: 1.33;
            border-radius: 6px;
            width: 100%;
            background-color: DodgerBlue;
        }
        #link{
            height:30% + 100px;
        }#link2{
            height:50% + 100px;
        }
        #foot{
            width: 100%;
        }
        p {
            display: block;
            color:gray;
            -webkit-margin-before: 1em;
            -webkit-margin-after: 1em;
            -webkit-margin-start: 0px;
            -webkit-margin-end: 0px;
        }
        #bar{
            color:white;
        }
    </style>
    <body>

        <div class="jumbotron text-center" >
            <h1 align="center"> La Mucca</h1>
        </div>


        <div class="col-md-8 panel panel-default">

            <div class="form-group">
                <h3 align='center'>Inserimento Partite</h3>
            </div>

            <div class="panel-body text-center">

                <div class="panel-default col-md-6">1 vs 1
                    <div style="background-image: url('img/biglia.png'); background-size: 100%; height:30%" id="div1vs1">
                        <select style="margin-top: 5%" id="player1Game2">
                            <?php
                            require_once("ConnessioneDb.php");
                            require_once("Players.php");
                            $db = new ConnessioneDb();

                            $players = new Players($db);
                            $numPlayers = count($players->players);
                            for ($i = 0; $i < $numPlayers; $i++) {
                                echo "<option value='" . $players->players[$i]->id . "'><a style='color: blue'>" . $players->players[$i]->name . "</a></option>";
                            }

                            $date = date("Y-m-d");
                            ?>
                        </select>

                        <br>
                        <input style="color: blue; width: 13%; margin-top: 2%; font-weight: bold; text-align: center" type="number" placeholder="Blu" id="result1Game2"></input><br>
                        <button style="margin-top: 2%" onclick="checkGame2()">Conferma</button><br>
                        <input style="color: red; width: 13%; margin-top: 2%; font-weight: bold; text-align: center" type="number" placeholder="Rossi" id="result2Game2"></input><br>
                        <select style="margin-top: 2%" id="player2Game2">
                            <?php
                            for ($i = 0; $i < $numPlayers; $i++) {
                                echo "<option value='" . $players->players[$i]->id . "'><a style='color: blue'>" . $players->players[$i]->name . "</a></option>";
                            }
                            ?>
                        </select>
                    </div>

                </div>

                <div  class="panel-default col-md-6"> 2 vs 2
                    <div style="background-image: url('img/biglia.png'); background-size: 100%; height:30%" id="div2vs2">
                        <div class="col-md-4">
                            <select style="margin-top: 20%" id="player1Game4">
                                <?php
                                for ($i = 0; $i < $numPlayers; $i++) {
                                    echo "<option value='" . $players->players[$i]->id . "'><a style='color: blue'>" . $players->players[$i]->name . "</a></option>";
                                }
                                ?>
                            </select>
                            <br>
                            <select style="margin-top: 115%" id="player3Game4">
                                <?php
                                for ($i = 0; $i < $numPlayers; $i++) {
                                    echo "<option value='" . $players->players[$i]->id . "'><a style='color: red'>" . $players->players[$i]->name . "</a></option>";
                                }
                                ?>
                            </select>
                        </div>
                        <div class="col-md-4">
                            <input style="color: blue; width: 50%; font-weight: bold; text-align: center; margin-top: 20%" type="number" min="0" placeholder="Blu"><br>
                            <button style="margin-top: 35%">Conferma</button><br>
                            <input style="color: red; width: 50%; font-weight: bold; text-align: center; margin-top: 40%" type="number" min="0" placeholder="Rossi">
                        </div>
                        <div class="col-md-4">	
                            <select style="margin-top: 20%" id="player4Game4">
                                <?php
                                for ($i = 0; $i < $numPlayers; $i++) {
                                    echo "<option value='" . $players->players[$i]->id . "'><a style='color: red'>" . $players->players[$i]->name . "</a></option>";
                                }
                                ?>
                            </select>		
                            <br>
                            <select style="margin-top: 115%" id="player2Game4">
                                <?php
                                for ($i = 0; $i < $numPlayers; $i++) {
                                    echo "<option value='" . $players->players[$i]->id . "'><a style='color: blue'>" . $players->players[$i]->name . "</a></option>";
                                }
                                ?>
                            </select>
                        </div>
                    </div>
                </div>


            </div>
            <div class="panel-body text-center">
                <div  class=" panel panel-default" >
                    <div class="form-group">
                        <h3 align='center'>Ultime Partite</h3>
                    </div>
                    <div class = "panel-body" >
                        <table class="table table-bordered">
                            <tr><td >Nome</td><td>Vittorie</td></tr>
                            <?php
                            require_once('ConnessioneDb.php');
                            require_once('Games2.php');
                            require_once('Games4.php');

                            $games2 = new Games2($db);
                            for ($i = 0; $i < count($players->players); $i++) {
                                $classifica[$players->players[$i]->name] = 0;
                            }

                            for ($i = 0; $i < count($games2->games2); $i++) {
                                if ($games2->games2[$i]->result1 > $games2->games2[$i]->result2) {
                                    $classifica[$games2->games2[$i]->player1->name] ++;
                                } else {
                                    $classifica[$games2->games2[$i]->player2->name] ++;
                                }
                            }
                            ?>
                        </table>
                    </div>
                </div>
                <div>
                    <div class="form-group">
                        <h3 align='center'>Classifiche</h3>
                    </div>
                    <div class = "panel panel-default col-md-4">
                        <div class = "form-group">
                            <h3 align = "center">1 vs 1</h3>
                        </div>
                        <div class = "panel-body" >
                            <div>
                                <table class="table table-bordered">
                                    <tr><td >Nome</td><td>Vittorie</td></tr>
                                    <?php
                                    require_once('ConnessioneDb.php');
                                    require_once('Games2.php');
                                    require_once('Players.php');

                                    $games2 = new Games2($db);
                                    for ($i = 0; $i < count($players->players); $i++) {
                                        $classifica[$players->players[$i]->name] = 0;
                                    }

                                    for ($i = 0; $i < count($games2->games2); $i++) {
                                        if ($games2->games2[$i]->result1 > $games2->games2[$i]->result2) {
                                            $classifica[$games2->games2[$i]->player1->name] ++;
                                        } else {
                                            $classifica[$games2->games2[$i]->player2->name] ++;
                                        }
                                    }

                                    arsort($classifica);


                                    foreach ($classifica as $key => $value) {
                                        echo "<tr><td>" . $key . "</td>";
                                        echo "<td>$value</td>";


                                        echo "</tr>";
                                    }

                                    echo "</table>";
                                    ?>
                                </table>
                            </div>
                        </div>
                    </div>

                    <div class = "panel panel-default col-md-4">
                        <div class = "form-group">
                            <h3 align = "center">2 vs 2 </h3>
                            <h5 align = "center">Solo </h5>
                        </div>
                        <div class = "panel-body" >
                            <div>
                                <table class="table table-bordered">
                                    <tr><td >Nome</td><td>Vittorie</td></tr>
                                    <?php
                                    require_once('ConnessioneDb.php');
                                    require_once('Games4.php');
                                    require_once('Players.php');

                                    $games4 = new Games4($db);

                                    for ($i = 0; $i < count($players->players); $i++) {
                                        $classifica2[$players->players[$i]->name] = 0;
                                    }

                                    for ($i = 0; $i < count($games4->games4); $i++) {
                                        if ($games4->games4[$i]->result1 > $games4->games4[$i]->result2) {
                                            $classifica2[$games4->games4[$i]->player1->name] ++;
                                            $classifica2[$games4->games4[$i]->player2->name] ++;
                                        } else {
                                            $classifica2[$games4->games4[$i]->player3->name] ++;
                                            $classifica2[$games4->games4[$i]->player4->name] ++;
                                        }
                                    }

                                    arsort($classifica2);


                                    foreach ($classifica2 as $key => $value) {
                                        echo "<tr><td>" . $key . "</td>";
                                        echo "<td>$value</td>";
                                        echo "</tr>";
                                    }

                                    echo "</table>";
                                    ?>
                                </table>
                            </div>
                        </div>
                    </div>

                    <div class = "panel panel-default col-md-4">
                        <div class = "form-group col-md-12">
                            <h3 align = "center">2 vs 2</h3>
                            <h5 align = "center">Duo </h5>

                        </div>
                        <div class = "panel">
                            <div>
                                <table class="table table-bordered">
                                    <tr><td >Nome</td><td>Vittorie</td></tr>
                                    <?php
                                    require_once('ConnessioneDb.php');
                                    require_once('Games4.php');
                                    require_once('Players.php');

//                                    for ($i = 0; $i < count($players->players); $i++) {
//                                        $classifica[$players->players[$i]->name] = 0;
//                                    }

                                    for ($i = 0; $i < count($games4->games4); $i++) {
                                        if ($games4->games4[$i]->result1 > $games4->games4[$i]->result2) {
                                            if (isset($classifica4[$games4->games4[$i]->player1->name . "-" . $games4->games4[$i]->player2->name])) {
                                                $classifica4[$games4->games4[$i]->player1->name . "-" . $games4->games4[$i]->player2->name] ++;
                                            } else {
                                                $classifica4[$games4->games4[$i]->player1->name . "-" . $games4->games4[$i]->player2->name] = 1;
                                            }
                                        } else {
                                            if (isset($classifica4[$games4->games4[$i]->player3->name . "-" . $games4->games4[$i]->player4->name])) {
                                                $classifica4[$games4->games4[$i]->player3->name . "-" . $games4->games4[$i]->player4->name] ++;
                                            } else {
                                                $classifica4[$games4->games4[$i]->player3->name . "-" . $games4->games4[$i]->player4->name] = 1;
                                            }
                                        }
                                    }

                                    arsort($classifica);
                                    $perpagina = 20;


                                    $paginamax = count($classifica) / 20;

                                    if (isset($_GET["cls4"])) {
                                        $_SESSION["cls4"] = $_GET["cls4"];
                                    } else {
                                        $_SESSION["cls4"] = 1;
                                    }

                                    $max = $_SESSION["cls4"] * $perpagina;

                                    $min = $_SESSION["cls4"] * $perpagina - $perpagina;

                                    foreach ($classifica4 as $key => $value) {
                                        if ($i < $max && $i > $min) {
                                            echo "<tr><td>" . $key . "</td>";
                                            echo "<td>$value</td>";
                                            echo "</tr>";
                                            $i++;
                                        }
                                    }

                                    echo "</table>";
                                    ?>
                                </table>
                                <div id='cls4warp'>
                                    <?php
                                    if ($_SESSION['cls4'] > 1) {
                                        echo "<a href=\"index.php?cls4=" . ($_SESSION['cls4'] - 1) . " \"> <span  class=\"glyphicon glyphicon-chevron-left\" aria-hidden=\"true\"></span></a>";
                                    }
                                    if ($_SESSION['cls4'] < $paginamax) {
                                        //echo "<span class=\"glyphicon glyphicon-chevron-left\" aria-hidden=\"true\"></span>";
                                        echo "<a href=\"index.php?cls4=" . ($_SESSION['cls4'] + 1) . " \" > <span  class=\"glyphicon glyphicon-chevron-right\" aria-hidden=\"true\"></span></a>";
                                    }

// echo "<a href=\"index.php?cls4=" . ($_SESSION['cls4'] + 1) . " \"> <span class=\"glyphicon glyphicon-chevron-right\" aria-hidden=\"true\"></span></a>";
                                    ?>
                                </div>
                            </div>
                        </div>
                    </div>



                </div>
            </div>

        </div>
        <div class="col-md-4">
            <div>
                <div class="panel panel-default">
                    <div class="form-group">
                        NOME UTENTE E ROBE
                    </div>
                    <div id="login" class="panel-body">

                        LISTA DI PRENOTAZIONI E 

                    </div>
                </div>
            </div>
            <div>
                <div class="panel panel-default"  id="link">
                    <div class="form-group">
                        <h3 align='center'>Prossime date Esami</h3>
                    </div>
                    <div class="panel-body">
                        <table class="table table-bordered">
                            <tr><td style="color:gray">Data</td><td style="color:gray">Dalle</td><td style="color:gray">Alle</td></tr>
                            LISTA DATE PRENOTAZIONI
                        </table>

                        <form action="prenotazione.php" method="post">
                            BOTTOni
                        </form>
                    </div>
                </div>
            </div>

            <?php
            if (isset($_SESSION['user'])) {
                echo '<div class="panel panel-default"  id="link2">
                <div class="form-group">
                    <h3 align="center">Carica File</h3>
                </div>
                <div class="panel-body">
                    <p align="center" style="color:grey">Selezionare il/i tipi di file che si è caricato:<p>
                    <form name="carica" action="caricaFile.php" method="post" enctype="multipart/form-data">
                        <div class="checkbox-inline col-md-offset-4">
                        <div class="form-group">
                            <input name="pdfskillcard"  class="form-check-input" type="checkbox" value="1" >
                            <label  class="form-check-label" for="defaultCheck7">
                                Pdf skillcard
                            </label>
                        </div>
                        
                        <div class="form-group">
                            <input name="bollettinoskillcard" class="form-check-input" type="checkbox" value="1" id="bollettinoskillcard">
                            <label  class="form-check-label" for="defaultCheck7">
                                Bollettino skillcard
                            </label>
                        </div>
                        
                         <div class="form-group">
                            <input name="pdfprenotazione" onchange="myFunction()" class="form-check-input" type="checkbox" value="1" id="pdfprenotazione">
                            <label  class="form-check-label" for="defaultCheck7">
                                Pdf prenotazione
                            </label>
                        </div> 
                        
                        <div class="form-group">
                            <input name="bollettinoprenotazione" onchange="myFunction()" class="form-check-input" type="checkbox" value="1" id="bollettinoprenotazione">
                            <label  class="form-check-label" for="defaultCheck7">
                                Bollettino prenotazione 
                            </label>
                        </div>  
                        
                                                    
                        <div class="form-group">
                            <input name="pdfaica"  class="form-check-input" type="checkbox" value="1" id="pdfaica">
                            <label  class="form-check-label" for="defaultCheck7">
                                Pdf aica
                            </label>
                        </div>   
                        <div class="form-group">
                            <input name="pdfupdate" onchange="myFunction()" class="form-check-input" type="checkbox" value="1" id="pdfupdate">
                            <label  class="form-check-label" for="defaultCheck7">
                                Pdf update 
                            </label>
                        </div>
                        </div>                           
                        
                        
                        <p align="center">Seleziona i file da caricare:</p>
                        <input accept="image/*" name="pdfs" type="file" class="custom-file-input" required>
                        <br>
                        <input type="submit" name="carica" value="Carica" class="btn btn-info btn-lg">
                        <div id="clicco"></div>


                        
                        
                        </form> 
                        </div>
                        
                        </div>
                        ';
            }
            ?>
        </div>

        <script>
            function updateDiv()
            {
            document.getElementById("buttons").innerHTML = document.getElementById("buttons").innerHTML;
            document.getElementById("login").innerHTML = document.getElementById("login").innerHTML;
            }
            src = "https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"
                    src = "https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"
                    type = "text/javascript" src = "bootstrap-table.js"

                    document.getElementById('get_file').onclick = function () {
            document.getElementById('my_file').click();
            };
            $('input[type=file]').change(function (e) {
            $('#customfileupload').html($(this).val());
            });
            var html = '<br><div class="form-row"><div class="col-md-10"><label for="scuola">Seleziona per quale prenotazione</label><select name="prenotazioni" class="form-control" id="prenotazioni"> ' + '<?php echo $reggia; ?>' + '</select></div></div>';
            function myFunction() {
            if (document.getElementById("pdfprenotazione").checked == false && document.getElementById("pdfupdate").checked == false && document.getElementById("bollettinoprenotazione").checked == false) {
            document.getElementById("clicco").innerHTML = "";
            } else {
            document.getElementById("clicco").innerHTML = html;
            }


            }

            function close() {
            document.getElementById("alert").innerHTML = "";
            }

            function cancella() {
            document.getElementById("clicco").innerHTML = "";
            }
        </script>
        <div class="col-md-12">                                 
            <footer class="container text-center" id="foot" >                                         
                <p>                            
                    <br/><strong>MODENA, Cognento(MO), La Polly</strong>                              
                    <br/>                   credits to Pino & Tacco                             
                    <br/>                       Contact us to          
                    <br/>                    pino@tuoppadre.com - pino@tuoppadre.com -<a href="https://www.tuoppadre.com">tuoppadre.com</a>                                           
                </p>                                 
            </footer>     
        </div>
    </body>
    <script>
        function checkGame2(){
        var idPlayer1 = $("#player1Game2").val();
        var idPlayer2 = $("#player2Game2").val();
        var result1 = $("#result1Game2").val();
        var result2 = $("#result2Game2").val();
        if ((result1 >= (result2 + 2) || result2 >= (result1 + 2)) && (result1 == 10 || result2 == 10)){
        insertGame(result1, result2, idPlayer1, idPlayer2);
        } else{
        return false;
        }
        }



        function insertGame2(result1, result2, idPlayer1, idPlayer2) {
        var date = <?php echo Date("Y-m-d"); ?>;
        $.ajax({
        type: "POST",
                url: 'php/addGame2.php',
                data: {
                date: date,
                        result1: result1,
                        result2: result2,
                        idPlayer1: idPlayer1,
                        idPlayer2: idPlayer2
                }
        success: function (data) {
        alert("tutto è andato ok (forse)");
        }
        });
        }
    </script>
</html>

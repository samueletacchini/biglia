<?php
session_start();
?>
<html>
    <head>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

        <script type="text/javascript" src="https://code.jquery.com/jquery-1.11.3.min.js"></script>
        <script src="http://code.jquery.com/ui/1.9.2/jquery-ui.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/js/bootstrap-datepicker.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/css/bootstrap-datepicker3.css"/>

        <!-- 
        VIOLA BELLO UN TOT #782ecc
        CHE CAZZO MADONNA BELLISSIMA
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
          <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
          <script src="//code.jquery.com/jquery-1.11.0.min.js"></script>
  
  
          <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
          <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>F
  
        -->

        <link rel="stylesheet" href="css/PrenotazioneRegistrazione.css">
        <meta name="viewport" content="width=device-width,initial-sclae=1.0">

    </head>

    <style>
        .trattino1 { display: inline; } 
        /* Smartphone Portrait and Landscape */ 
        @media only screen 
        and (min-device-width : 320px) 
        and (max-device-width : 480px){ 
            .trattino1 { display: none;}
        }        

        .trattino2 {display: none;} 
        /* Smartphone Portrait and Landscape */ 
        @media only screen 
        and (min-device-width : 320px) 
        and (max-device-width : 480px){ 
            .trattino2 {display: inline;}
        }


        .bgg{
            /* The image used */
            background-image: url("img/biglia.png");


            /* Full height */
            /* height: 32%;*/
            /* opacity: 0.5; */

            /* Center and scale the image nicely */
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
        }


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
            <h1 align="center">Mucca & Polly</h1>
        </div>

        <div class="col-md-8 panel-default">

            <div class="panel-body text-center">
                <div class="form-group panel-default panel">
                    <h3 align='center'>Inserimento Partite</h3>
                </div>
                <div class=" panel-default form-group col-md-6">
                    <div class=" panel-default panel form-group">
                        <h4 align='center'>1 vs 1</h4>
                    </div>
                    <div id="div1vs1">
                        <table id="ins1"  class=" text-center table table-borderless ">
                            <tr style="background: #1e90ff"><td class="col-md-4">
                                    <select class="form-control" id="player1Game2">
                                        <?php
                                        require_once("ConnessioneDb.php");
                                        require_once("Players.php");
                                        $db = new ConnessioneDb();
                                        $date = date("Y-m-d");

                                        $players = new Players($db);
                                        $numPlayers = count($players->players);
                                        for ($i = 0; $i < $numPlayers; $i++) {
                                            if ($i == 0) {
                                                echo "<option selected value='" . $players->players[$i]->id . "'><a style='color: blue'>" . $players->players[$i]->name . "</a></option>";
                                            } else {
                                                echo "<option value='" . $players->players[$i]->id . "'><a style='color: blue'>" . $players->players[$i]->name . "</a></option>";
                                            }
                                        }
                                        ?>
                                    </select>
                                </td>
                                <td class="col-md-3">
                                    <!-- style="color: blue; width: 13%; margin-top: 2%; font-weight: bold; text-align: center"-->
                                    <input class="form-control" type="number" id="result1Game2" value="0">
                                </td>
                                <td class="col-md-3">
                                    <input class="form-control" type="number" id="defResult1Game2"  value="0">
                                </td>
                                <td class="col-md-2">

                                    <div class="form-group"> <!-- Date input -->
                                        <input class="form-control" id="date" name="date"  type="text" value="<?php echo $date ?>"/>
                                    </div>

                                    <script type="text/javascript">
                                        $(document).ready(function () {
                                            var date_input = $('input[name="date"]'); //our date input has the name "date"
                                            var container = $('.bootstrap-iso form').length > 0 ? $('.bootstrap-iso form').parent() : "body";
                                            var options = {
                                                format: 'yyyy-mm-dd',
                                                container: container,
                                                todayHighlight: true,
                                                autoclose: true,
                                            };
                                            date_input.datepicker(options);
                                        })
                                    </script>       

                                </td>
                            </tr>
                            <tr style="font-size:16px;">
                                <td class="col-md-4"><b>Players</b></td>
                                <td class="col-md-3"><b>Punti</b></td>
                                <td class="col-md-3"><b>Sfida</b></td>
                                <td class="col-md-2"><b>Data</b></td>
                            </tr>
                            <tr style="background: red">
                                <td  class="col-md-4">
                                    <select class="form-control"  id="player2Game2">
                                        <?php
                                        for ($i = 0; $i < $numPlayers; $i++) {
                                            if ($i == 1) {
                                                echo "<option selected value='" . $players->players[$i]->id . "'><a style='color: blue'>" . $players->players[$i]->name . "</a></option>";
                                            } else {
                                                echo "<option value='" . $players->players[$i]->id . "'><a style='color: blue'>" . $players->players[$i]->name . "</a></option>";
                                            }
                                        }
                                        ?>
                                    </select>
                                </td>
                                <td class="col-md-3"><input class="form-control" type="number" id="result2Game2" value="0"></td>
                                <td class="col-md-3"><input class="form-control" id="defResult2Game2" type="number" value="0"></td>
                                <td class="col-md-2"> <button class="form-control btn" style="background-color: #ffffff; color: red"  id="submitGame2"><span class="glyphicon glyphicon-ok" aria-hidden="true"></span></button> </td>
                            </tr>



                            <!-- style="color: red; width: 13%; margin-top: 2%; font-weight: bold; text-align: center" -->



                        </table>
                    </div>
                </div>
                <div class=" panel-default form-group col-md-6">
                    <div class=" panel-default panel form-group">
                        <h4 align='center'>2 vs 2</h4>
                    </div>
                    <!-- style="background-image: url('img/biglia.png'); background-size: 100%; height:30%" -->
                    <div class=" bg panel-default form-group " id="div1vs1">
                        <table id="ins1"  class=" text-center table table-borderless ">
                            <tr style="background: #1e90ff"><td class="col-md-3">
                                    <select class="form-control"  id="player2Game4">
                                        <?php
                                        for ($i = 0; $i < $numPlayers; $i++) {
                                            if ($i == 0) {
                                                echo "<option selected value='" . $players->players[$i]->id . "'><a style='color: blue'>" . $players->players[$i]->name . "</a></option>";
                                            } else {
                                                echo "<option value='" . $players->players[$i]->id . "'><a style='color: blue'>" . $players->players[$i]->name . "</a></option>";
                                            }
                                        }
                                        ?>
                                    </select>
                                </td>
                                <td class="col-md-3">
                                    <select class="form-control"  id="player1Game4">
                                        <?php
                                        for ($i = 0; $i < $numPlayers; $i++) {
                                            if ($i == 1) {
                                                echo "<option selected value='" . $players->players[$i]->id . "'><a style='color: blue'>" . $players->players[$i]->name . "</a></option>";
                                            } else {
                                                echo "<option value='" . $players->players[$i]->id . "'><a style='color: blue'>" . $players->players[$i]->name . "</a></option>";
                                            }
                                        }
                                        ?>
                                    </select>
                                </td>
                                <td class="col-md-2">
                                    <!-- style="color: blue; width: 13%; margin-top: 2%; font-weight: bold; text-align: center"-->
                                    <input class="form-control" type="number" id="result1Game4">
                                </td>
                                <td class="col-md-2">
                                    <input class="form-control" type="number" id="defResult1Game4" value="0">
                                </td>
                                <td class="col-md-2">
                                    <!-- <input class="form-control" id="dateGame2" type="date" value="<?php echo $date ?>">  -->
                                    <input size="10" type="text" value="<?php echo $date ?>" readonly class=" form-control form_datetime">


                                </td>
                            </tr>
                            <tr style="font-size:16px;">
                                <td class="col-md-3"><b>Difensori</b></td>
                                <td class="col-md-3"><b>Attaccanti</b></td>
                                <td class="col-md-2"><b>Punti</b></td>
                                <td class="col-md-2"><b>Sfida</b></td>
                                <td class="col-md-2"><b>Data</b></td>
                            </tr>
                            <tr  style="background: red">    
                                <td class="col-md-3">
                                    <select class="form-control"  id="player4Game4">
                                        <?php
                                        for ($i = 0; $i < $numPlayers; $i++) {
                                            if ($i == 2) {
                                                echo "<option selected value='" . $players->players[$i]->id . "'><a style='color: blue'>" . $players->players[$i]->name . "</a></option>";
                                            } else {
                                                echo "<option value='" . $players->players[$i]->id . "'><a style='color: blue'>" . $players->players[$i]->name . "</a></option>";
                                            }
                                        }
                                        ?>
                                    </select>
                                </td>
                                <td class="col-md-3">
                                    <select class="form-control" id="player3Game4">
                                        <?php
                                        for ($i = 0; $i < $numPlayers; $i++) {
                                            if ($i == 3) {
                                                echo "<option selected value='" . $players->players[$i]->id . "'><a style='color: blue'>" . $players->players[$i]->name . "</a></option>";
                                            } else {
                                                echo "<option value='" . $players->players[$i]->id . "'><a style='color: blue'>" . $players->players[$i]->name . "</a></option>";
                                            }
                                        }
                                        ?>
                                    </select>
                                </td>
                                <td class="col-md-2"><input class="form-control" type="number" id="result2Game4"></td>
                                <td class="col-md-2"><input class="form-control" id="defResult2Game4" type="number" value="0"></td>
                                <td class="col-md-2"> <button class="form-control btn" style="background-color: white; color: red"  id="submitGame2"><span class="glyphicon glyphicon-ok" aria-hidden="true"></span></button></td>
                            </tr>



                            <!-- style="color: red; width: 13%; margin-top: 2%; font-weight: bold; text-align: center" -->



                        </table>
                    </div>
                </div>
                <!--                <div  class="panel-default col-md-6">
                                    <div class=" panel-default panel form-group">
                                        <h4 align='center'>2 vs 2</h4>
                                    </div>
                                    <div style="background-image: url('img/biglia.png'); background-size: 100%; height:30%" id="div2vs2">
                                        <div class="col-md-4">
                                            <select style="margin-top: 20%" id="player1Game4">  ATTACCANTE SQUADRA 1 
                <?php
                for ($i = 0; $i < $numPlayers; $i++) {
                    echo "<option value='" . $players->players[$i]->id . "'><a style='color: blue'>" . $players->players[$i]->name . "</a></option>";
                }
                ?>
                                            </select>
                                            <br>
                                            <select style="margin-top: 115%" id="player4Game4">  DIFENSORE SQUADRA 2 
                <?php
                for ($i = 0; $i < $numPlayers; $i++) {
                    echo "<option value='" . $players->players[$i]->id . "'><a style='color: red'>" . $players->players[$i]->name . "</a></option>";
                }
                ?>
                                            </select>
                                            <input id="defResult1Game4" type="number" value="0">
                                        </div>
                                        <div class="col-md-4">
                                            <input style="color: blue; width: 50%; font-weight: bold; text-align: center; margin-top: 20%" type="number" min="0" placeholder="Blu"><br>
                                            <button style="margin-top: 35%">Conferma</button><input id="dateGame4" type="date" value="<?php $date ?>"><br>
                                            <input style="color: red; width: 50%; font-weight: bold; text-align: center; margin-top: 40%" type="number" min="0" placeholder="Rossi">
                                        </div>
                                        <div class="col-md-4">	
                                            <select style="margin-top: 20%" id="player2Game4">  DIFENSORE SQUADRA 1 
                <?php
                for ($i = 0; $i < $numPlayers; $i++) {
                    echo "<option value='" . $players->players[$i]->id . "'><a style='color: red'>" . $players->players[$i]->name . "</a></option>";
                }
                ?>
                                            </select>		
                                            <br>
                                            <select style="margin-top: 115%" id="player3Game4">  ATTACCANTE SQUADRA 2 
                <?php
                for ($i = 0; $i < $numPlayers; $i++) {
                    echo "<option value='" . $players->players[$i]->id . "'><a style='color: blue'>" . $players->players[$i]->name . "</a></option>";
                }
                ?>
                                            </select>
                                            <input id="defResult2Game4" type="number" value="0">
                                        </div>
                                    </div>
                                </div>-->
            </div>
            <div class="panel-body text-center">
                <div  class="" >
                    <div class = "panel-body" >
                        <div  class=" panel-default panel form-group">
                            <h3 align='center'  >Ultime Partite</h3>
                        </div>
                    </div>
                    <div class = "" >
                        <div class = " panel-default col-md-5 " >
                            <div class=" panel-default panel form-group">
                                <h4 align='center'>1 vs 1</h4>
                            </div>
                            <div>
                                <table  class=" text-center table table-bordered">
                                    <tr><td>Giorni fa</td><td>Blu</td><td>Score</td><td>Rossi</td></tr>
                                    <?php
                                    require_once("ConnessioneDb.php");
                                    require_once("Players.php");
                                    $db = new ConnessioneDb();
                                    $date = date("Y-m-d");
                                    require_once('Games2.php');
                                    require_once('Games4.php');

                                    $games2 = new Games2($db);
                                    $games4 = new Games4($db);

                                    $oggi = new DateTime($date);

                                    for ($i = count($games2->games2) - 1; $i > count($games2->games2) - 4; $i--) {

                                        $diff = new DateTime($games2->games2[$i]->date);
                                        $data = $diff->diff($oggi);
                                        if ($data->format('%a') == 0) {
                                            echo "<tr><td>Oggi</td>";
                                        } else {
                                            echo "<tr><td>" . $data->format('%a') . "</td>";
                                        }

                                        if ($games2->games2[$i]->result1 > $games2->games2[$i]->result2) {
                                            if (true) {
                                                
                                            }
                                            echo "<td><b>{$games2->games2[$i]->player1->name}</b></td>";
                                            echo "<td><b>({$games2->games2[$i]->defResult1}) {$games2->games2[$i]->result1}</b>  - {$games2->games2[$i]->result2} ({$games2->games2[$i]->defResult2})</td>";
                                            echo "<td>{$games2->games2[$i]->player2->name}</td>";
                                        } else {
                                            echo "<td>{$games2->games2[$i]->player1->name}</td>";
                                            echo "<td>({$games2->games2[$i]->defResult1}) {$games2->games2[$i]->result1}  - <b>{$games2->games2[$i]->result2} ({$games2->games2[$i]->defResult2})</b></td>";
                                            echo "<td><b>{$games2->games2[$i]->player2->name}</b></td>";
                                        }
                                        echo "</tr>";
                                    }
                                    ?>
                                </table>
                            </div>
                        </div>

                        <div class = " panel-default col-md-7" >
                            <div class=" panel-default panel form-group">
                                <h4 align='center'>2 vs 2</h4>
                            </div>
                            <div>
                                <table  class=" text-center table table-bordered">
                                    <tr><td>Giorni fa</td><td>Blu</td><td>Score</td><td>Rossi</td></tr>
                                    <?php
                                    for ($i = count($games4->games4) - 1; $i > count($games4->games4) - 4; $i--) {

                                        $diff = new DateTime($games4->games4[$i]->date);
                                        $data = $diff->diff($oggi);
                                        if ($data->format('%a') == 0) {
                                            echo "<tr><td>Oggi</td>";
                                        } else {
                                            echo "<tr><td>" . $data->format('%a') . "</td>";
                                        }

                                        //echo "<td>{$games4->games4[$i]->player1->name}</td>";
                                        // echo "<td>{$games4->games4[$i]->player2->name}</td>";


                                        if ($games4->games4[$i]->result1 > $games4->games4[$i]->result2) {
                                            echo "<td><b> " . $games4->games4[$i]->player2->name . "<a1 class='trattino1'> - </a1><br class='trattino2'>" . $games4->games4[$i]->player1->name . "</b></td>";
                                            echo "<td><b>({$games4->games4[$i]->defResult1}) {$games4->games4[$i]->result1}</b>  - {$games4->games4[$i]->result2} ({$games4->games4[$i]->defResult2})</td>";
                                            echo "<td>" . $games4->games4[$i]->player4->name . " <a1 class='trattino1'> - </a1><br class='trattino2'> " . $games4->games4[$i]->player3->name . "</td>";
                                        } else {
                                            echo "<td>" . $games4->games4[$i]->player2->name . " <a1 class='trattino1'> - </a1><br class='trattino2'> " . $games4->games4[$i]->player1->name . "</td>";
                                            echo "<td>({$games4->games4[$i]->defResult1}) {$games4->games4[$i]->result1}  - <b> {$games4->games4[$i]->result2} ({$games4->games4[$i]->defResult2})</b></td>";
                                            echo "<td><b>" . $games4->games4[$i]->player4->name . " <a1 class='trattino1'> - </a1><br class='trattino2'> " . $games4->games4[$i]->player3->name . "</b></td>";
                                        }
                                        echo "</tr>";
                                    }


//$final = array_msort($classifica, array('date' => SORT_DESC, 'id' => SORT_DESC));
                                    ?>
                                </table>
                            </div>
                        </div>


                    </div>
                </div>
                <div>
                    <div class="form-group">
                        <h3 align='center'>Classifiche</h3>
                    </div>
                    <div class = "panel panel-default panel-body col-md-4">
                        <div class = " panel panel-default  form-group">
                            <h3 align = "center">1 vs 1</h3>
                            <h5 align = "center">Solo </h5>

                        </div>
                        <table class=" text-center table table-hover">
                            <tr><td>#</td><td></td><td>Player</td><td>Vittorie</td></tr>
                            <?php
                            require_once('ConnessioneDb.php');
                            require_once('Games2.php');
                            require_once('Players.php');

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
                            $i = 1;
                            foreach ($classifica as $key => $value) {
                                switch ($i) {
                                    case $value:
                                    case 1:
                                        //echo "<tr bgcolor='#C98910'><td>$i</td>";
                                        echo '<tr bgcolor="#CFB53B"><td>' . $i . ' </td>';
                                        echo "<td>🏆</td>";
                                        echo "<td> $key</td>";

                                        break;
                                    case 2:
                                        echo '<tr bgcolor="#A8A8A8"><td>' . $i . ' </td>';
                                        echo "<td>🏆</td>";
                                        echo "<td> $key</td>";


                                        break;
                                    case 3:
                                        echo '<tr bgcolor="#965A38"><td>' . $i . ' </td>';
                                        echo "<td>🏆</td>";
                                        echo "<td> $key</td>";
                                        break;
                                    default:
                                        echo "<tr><td>$i</td>";
                                        echo "<td></td>";
                                        echo "<td>$key</td>";

                                        break;
                                }

                                //echo "<td>$key</td>";
                                echo "<td>$value</td>";
                                echo "</tr>";
                                $i++;
                            }

                            echo "</table>";
                            ?>
                        </table>
                    </div>

                    <div class = "panel panel-default panel-body col-md-4">
                        <div class = " panel panel-default form-group">
                            <h3 align = "center">2 vs 2 </h3>
                            <h5 align = "center">Solo </h5>
                        </div>
                        <table class=" text-center  table table-hover">
                            <tr><td>#</td><td></td><td>Player</td><td>Vittorie</td></tr>
                            <?php
                            require_once('ConnessioneDb.php');
                            require_once('Games4.php');
                            require_once('Players.php');


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

                            $i = 1;
                            foreach ($classifica2 as $key => $value) {
                                switch ($i) {
                                    case $value:
                                    case 1:
                                        //echo "<tr bgcolor='#C98910'><td>$i</td>";
                                        echo "<tr bgcolor='#CFB53B'><td>$i</td>";
                                        echo "<td>🏆</td>";
                                        echo "<td> $key</td>";
                                        break;
                                    case 2:
                                        echo "<tr bgcolor='#A8A8A8'><td>$i</td>";
                                        echo "<td>🏆</td>";
                                        echo "<td> $key</td>";
                                        // echo "<tr bgcolor='#E6E8FA'><td>$i</td>";
                                        break;
                                    case 3:
                                        echo "<tr bgcolor='#965A38'><td>$i</td>";
                                        echo "<td>🏆</td>";
                                        echo "<td> $key</td>";
                                        //echo "<tr bgcolor='#8C7853'><td>$i</td>";
                                        break;
                                    default:
                                        echo "<tr><td>$i</td>";
                                        echo "<td></td>";
                                        echo "<td>$key</td>";
                                        break;
                                }
                                // echo "<tr><td>$i</td>";
                                // echo "<td>$key</td>";
                                echo "<td>$value</td>";
                                echo "</tr>";
                                $i++;
                            }

                            echo "</table>";
                            ?>
                        </table>
                    </div>

                    <div class = "panel panel-default panel-body col-md-4">
                        <div class = " panel panel-default  form-group">
                            <h3 align = "center">2 vs 2</h3>
                            <h5 align = "center">Duo </h5>
                        </div>
                        <table class=" text-center  table table-hover">
                            <tr><td>#</td><td></td><td>Player</td><td>Vittorie</td></tr>
                            <?php
                            require_once('ConnessioneDb.php');
                            require_once('Games4.php');
                            require_once('Players.php');

//                                    for ($i = 0; $i < count($players->players); $i++) {
//                                        $classifica[$players->players[$i]->name] = 0;
//                                    }

                            for ($i = 0; $i < count($games4->games4); $i++) {
                                if ($games4->games4[$i]->result1 > $games4->games4[$i]->result2) {
                                    if (isset($classifica4[$games4->games4[$i]->player2->name . "-" . $games4->games4[$i]->player1->name])) {
                                        $classifica4[$games4->games4[$i]->player2->name . "-" . $games4->games4[$i]->player1->name] ++;
                                    } else {
                                        $classifica4[$games4->games4[$i]->player2->name . "-" . $games4->games4[$i]->player1->name] = 1;
                                    }
                                } else {
                                    if (isset($classifica4[$games4->games4[$i]->player4->name . "-" . $games4->games4[$i]->player3->name])) {
                                        $classifica4[$games4->games4[$i]->player4->name . "-" . $games4->games4[$i]->player3->name] ++;
                                    } else {
                                        $classifica4[$games4->games4[$i]->player4->name . "-" . $games4->games4[$i]->player3->name] = 1;
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

                            $ii = 1;
                            foreach ($classifica4 as $key => $value) {
                                if ($i < $max && $i > $min) {
                                    switch ($ii) {
                                        case $value:
                                        case 1:
                                            //echo "<tr bgcolor='#C98910'><td>$i</td>";
                                            echo "<tr bgcolor='#CFB53B'><td>$ii</td>";
                                            echo "<td>🏆</td>";
                                            echo "<td> $key</td>";
                                            break;
                                        case 2:
                                            echo "<tr bgcolor='#A8A8A8'><td>$ii</td>";
                                            echo "<td>🏆</td>";
                                            echo "<td> $key</td>";
                                            // echo "<tr bgcolor='#E6E8FA'><td>$i</td>";
                                            break;
                                        case 3:
                                            echo "<tr bgcolor='#965A38'><td>$ii</td>";
                                            echo "<td>🏆</td>";
                                            echo "<td> $key</td>";
                                            //echo "<tr bgcolor='#8C7853'><td>$i</td>";
                                            break;
                                        default:
                                            echo "<tr><td>$ii</td>";
                                            echo "<td></td>";
                                            echo "<td>$key</td>";
                                            break;
                                    }
                                    //   echo "<tr><td>$ii</td>";
                                    //echo "<td>$key</td>";
                                    // echo '<td> <div class = "col-md-5" > ' . explode("-", $key)[0] . '  </div><div class = "col-md-2" > - </div><div class = "col-md-5" > ' . explode("-", $key)[1] . '  </div></td>';
                                    echo "<td>$value</td>";

                                    echo "</tr>";
                                    $ii++;
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
                            ?>  
                        </div>

                    </div>



                </div>
            </div>

        </div>
        <div class="col-md-4">
            <div>
                <div class="panel panel-default">
                    <div class="text-center form-group">
                        <h2>WIP</h2>
                    </div>
                    <div id="login" class="panel-body">


                        <?php
                        for ($i = 0; $i < 700; $i++) {
                            echo "WIP ";
                        }
                        ?>



                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-12">                                 
            <footer class="container text-center" id="foot" >                                         
                <p>                            
                    <br/><strong>MODENA, Cognento(MO), La Polly</strong>                              
                    <br/>                   credits to Pino & Tacco                             
                    <br/>                       Contact us to          
                    <br/>                    pino@tuoppadre.com - tacco@tuoppadre.com - <a href="https://www.tuoppadre.com">tuoppadre.com</a>                                           
                </p>                                 
            </footer>     
        </div>
    </body>
    <script>
        $("#submitGame2").click(function () {
            var date = $("#dateGame2").val();
            var result1 = parseInt($("#result1Game2").val());
            var result2 = parseInt($("#result2Game2").val());
            var defResult1 = parseInt($("#defResult1Game2").val());
            var defResult2 = parseInt($("#defResult2Game2").val());
            var idPlayer1 = parseInt($("#player1Game2").val());
            var idPlayer2 = parseInt($("#player2Game2").val());

            if ((result1 > (result2 + 1) || result2 > (result1 + 1)) && (result1 >= 10 || result2 >= 10)) {
                if (idPlayer1 != idPlayer2) {
                    insertGame2(date, result1, result2, defResult1, defResult2, idPlayer1, idPlayer2);
                }
            }
        });

        function insertGame2(date, result1, result2, defResult1, defResult2, idPlayer1, idPlayer2) {
            $.ajax({
                type: "POST",
                url: 'addGame2.php',
                data: {
                    date: date,
                    result1: result1,
                    result2: result2,
                    defResult1: defResult1,
                    defResult2: defResult2,
                    idPlayer1: idPlayer1,
                    idPlayer2: idPlayer2
                },
                success: function (data) {
                    $("#dateGame2").val("<?php $date ?>");
                    $("#result1Game2").val("0");
                    $("#result2Game2").val("0");
                    $("#defResult1Game2").val("0");
                    $("#defResult2Game2").val("0");
                    $("#player1Game2").val($("#player1Game2 option:first").val());
                    $("#player2Game2").val($("#player2Game2 option:second").val());
                },
                error: function (xhr, ajaxOptions, thrownError) {
                    alert(xhr.responseText);
                    alert(thrownError);

                }
            });
        }

        $("#submitGame4").click(function () {
            var date = $("#dateGame4").val();
            var result1 = parseInt($("#result1Game4").val());
            var result2 = parseInt($("#result2Game4").val());
            var defResult1 = parseInt($("#defResult1Game4").val());
            var defResult2 = parseInt($("#defResult2Game4").val());
            var idPlayer1 = parseInt($("#player1Game4").val());
            var idPlayer2 = parseInt($("#player2Game4").val());
            var idPlayer3 = parseInt($("#player3Game4").val());
            var idPlayer4 = parseInt($("#player4Game4").val());

            if ((result1 > (result2 + 1) || result2 > (result1 + 1)) && (result1 >= 10 || result2 >= 10)) {
                if (idPlayer1 != idPlayer2) {
                    insertGame4(date, result1, result2, defResult1, defResult2, idPlayer1, idPlayer2, idPlayer3, idPlayer4);
                }
            }
        });


        function insertGame4(date, result1, result2, defResult1, defResult2, idPlayer1, idPlayer2, idPlayer3, idPlayer4) {
            $.ajax({
                type: "POST",
                url: 'addGame4.php',

                data: {
                    date: date,
                    result1: result1,
                    result2: result2,
                    defResult1: defResult1,
                    defResult2: defResult2,
                    idPlayer1: idPlayer1,
                    idPlayer2: idPlayer2,
                    idPlayer3: idPlayer3,
                    idPlayer4: idPlayer4
                },
                success: function (data) {
                    alert(data);

                    $("#dateGame4").val("<?php $date ?>");
                    $("#result1Game4").val("0");
                    $("#result2Game4").val("0");
                    $("#defResult1Game4").val("0");
                    $("#defResult2Game4").val("0");
                    $("#player1Game4").val($("#player1Game4 option:first").val());
                    $("#player2Game4").val($("#player2Game4 option:second").val());
                    $("#player3Game4").val($("#player3Game4 option:third").val());
                    $("#player4Game4").val($("#player4Game4 option:fourth").val());
                },
                error: function (xhr, ajaxOptions, thrownError) {
                    alert(xhr.responseText);
                    alert(thrownError);

                }
            });
        }
    </script>
</html>

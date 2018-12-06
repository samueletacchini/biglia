<?php
if (!isset($_SESSION)) {
    session_start();
}
?>
<html>
    <head>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

        <script type="text/javascript" src="https://code.jquery.com/jquery-1.11.3.min.js"></script>
        <script src="http://code.jquery.com/ui/1.9.2/jquery-ui.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/js/bootstrap-datepicker.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/css/bootstrap-datepicker3.css"/>


        <link rel="stylesheet" href="css/PrenotazioneRegistrazione.css">
        <meta name="viewport" content="width=device-width,initial-sclae=1.0">

    </head>

    <style>
        .divlike{
            height: 28px;
            text-align: center;
        }

        @font-face {
            font-family: 'grinchedregular';
            src: url('css/fonts/grinchedregular-webfont.woff2') format('woff2'),
                url('css/fonts/grinchedregular-webfont.woff') format('woff');
            font-weight: normal;
            font-style: normal;

        }
        .title{
            font-size: 550%;
            font-family: 'grinchedregular';
        }

        .jumbotron{
            border-style: solid;
            border-color: #ae1f1b;
            border-width: 10px;
            color: #ae1f1b;
            background-color: #FEFE9a;
        }



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

        <div class="jumbotron  " >

            <div class="title" id="title" align="center">Mucca & Polly</div>
            <div id="popu" class="col-md-4 col-md-offset-4">
                <h5 class=" " align="center">

                    <?php
                    require_once "Comments.php";
                    require_once("ConnessioneDb.php");

                    $db = new ConnessioneDb();
                    $commenti = new Comments($db);


                    $popu = $commenti->getPopuComment();
                    echo '"' . $popu->text . '"';
                    ?>
                </h5>

                <div style='text-align: right;'>
                    <b> <i> -<?php echo $popu->author; ?> </i></b>
                </div>
            </div>

        </div>
        <div id="newalert">

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
                            <tr>
                                <td style="background: #1e90ff" class="col-md-4">
                                    <select class="form-control" id="player1Game2">
                                        <?php
                                        require_once("Players.php");

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
                                <td style="background: #1e90ff" class="col-md-3">
                                    <input class="form-control" type="number" id="result1Game2" value="0">
                                </td>
                                <td style="background: #1e90ff" class="col-md-3">
                                    <input class="form-control" type="number" id="defResult1Game2"  value="0">
                                </td>
                                <td style="background: #d9d9d9" class="col-md-2">
                                    <div class="form-group"> <!-- Date input -->
                                        <input class="form-control" id="dateGame2" name="date"  type="text" value="<?php echo $date ?>"/>
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
                                <td style="background: #d9d9d9" class="col-md-2"><b>Data</b></td>
                            </tr>
                            <tr>
                                <td style="background: red" class="col-md-4">
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
                                <td style="background: red" class="col-md-3"><input class="form-control" type="number" id="result2Game2" value="0"></td>
                                <td style="background: red" class="col-md-3"><input class="form-control" id="defResult2Game2" type="number" value="0"></td>
                                <td style="background: #d9d9d9" class="col-md-2"> <button class="form-control btn" style="background-color: #ffffff; color: #000000"  id="submitGame2"><span class="glyphicon glyphicon-ok" aria-hidden="true"></span></button> </td>
                            </tr>






                        </table>
                    </div>
                </div>
                <div class=" panel-default form-group col-md-6">
                    <div class=" panel-default panel form-group">
                        <h4 align='center'>2 vs 2</h4>
                    </div>
                    <div class=" bg panel-default form-group " id="div1vs1">
                        <table id="ins1"  class=" text-center table table-borderless ">
                            <tr>
                                <td style="background: #1e90ff" class="col-md-3">
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
                                <td style="background: #1e90ff" class="col-md-3">
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
                                <td style="background: #1e90ff" class="col-md-2">
                                    <input class="form-control" type="number" id="result1Game4">
                                </td>
                                <td style="background: #1e90ff" class="col-md-2">
                                    <input class="form-control" type="number" id="defResult1Game4" value="0">
                                </td>
                                <td style="background: #d9d9d9" class="col-md-2">
                                    <div class="form-group"> <!-- Date input -->
                                        <input class="form-control" id="dateGame4" name="date"  type="text" value="<?php echo $date ?>"/>
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
                                <td class="col-md-3"><b>Difensori</b></td>
                                <td class="col-md-3"><b>Attaccanti</b></td>
                                <td class="col-md-2"><b>Punti</b></td>
                                <td class="col-md-2"><b>Sfida</b></td>
                                <td style="background: #d9d9d9" class="col-md-2"><b>Data</b></td>
                            </tr>
                            <tr>    
                                <td style="background: red" class="col-md-3">
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
                                <td style="background: red" class="col-md-3">
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

                                <td style="background: red" class="col-md-2"><input class="form-control" type="number" id="result2Game4"></td>
                                <td style="background: red" class="col-md-2"><input class="form-control" id="defResult2Game4" type="number" value="0"></td>
                                <td style="background: #d9d9d9" class="col-md-2"> <button class="form-control btn" style="background-color: white; color: #000000"  id="submitGame4"><span class="glyphicon glyphicon-ok" aria-hidden="true"></span></button></td>
                            </tr>






                        </table>
                    </div>
                </div>
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
                            $c = 1;
                            foreach ($classifica as $key => $value) {
                                switch ($c) {
                                    case $value:
                                    case 1:
                                        //echo "<tr bgcolor='#C98910'><td>$i</td>";
                                        echo '<tr bgcolor="#CFB53B"><td>' . $c . ' </td>';
                                        echo "<td>🏆</td>";
                                        echo "<td> $key</td>";
                                        break;
                                    case 2:
                                        echo '<tr bgcolor="#A8A8A8"><td>' . $c . ' </td>';
                                        echo "<td>🏆</td>";
                                        echo "<td> $key</td>";
                                        break;
                                    case 3:
                                        echo '<tr bgcolor="#965A38"><td>' . $c . ' </td>';
                                        echo "<td>🏆</td>";
                                        echo "<td> $key</td>";
                                        break;
                                    default:
                                        echo "<tr><td>$c</td>";
                                        echo "<td></td>";
                                        echo "<td>$key</td>";
                                        break;
                                }

                                //echo "<td>$key</td>";
                                echo "<td>$value</td>";
                                echo "</tr>";
                                $c++;
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
                                    case 1:
                                        //echo "<tr bgcolor='#C98910'><td>$i</td>";
                                        echo "<tr bgcolor='#CFB53B'><td>$i</td>";
                                        echo "<td>🏆</td>";
                                        echo "<td> $key </td>";
                                        break;
                                    case 2:
                                        echo "<tr bgcolor='#A8A8A8'><td>$i</td>";
                                        echo "<td>🏆</td>";
                                        echo "<td>a $key </td>";
                                        // echo "<tr bgcolor='#E6E8FA'><td>$i</td>";
                                        break;
                                    case 3:
                                        echo "<tr bgcolor='#965A38'><td>$i</td>";
                                        echo "<td>🏆</td>";
                                        echo "<td> $key </td>";
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

                            arsort($classifica4);
                            $perpagina = 20;


                            $paginamax = count($classifica4) / 20;

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
            <div class="panel panel-default">
                <div class=" text-center form-group">
                    <h2>Lascia una <i>Quote</i> </h2>
                </div>
                <div  class="panel-body">
                    <div class="panel col-md-8">
                        <input class="form-control" tabindex="1" id="author" name="author"  type="text" maxlength="15" placeholder="autore"/>
                    </div>
                    <div class="panel col-md-4">
                        <button class="form-control btn" tabindex="3" style=" background-color: #FEFE9a;; "  id="submitComment"><span style="color: #ae1f1b;; " class="glyphicon glyphicon-ok" ></span></button>
                    </div>

                    <div class=" panel col-md-12">
                        <textarea class="form-control" tabindex="2" id="text" name="text" type="text" maxlength="300" rows="4" cols="50" placeholder="testo" ></textarea>
                    </div>

                    <div class=" panel col-md-12">
                        <div   class=" text-center form-group">
                            <h3><i>Quote</i> Più Popu </h3>
                        </div>
                        <div id ="quote">

                            <?php
                            $dim = count($commenti->comments);
                            for ($i = 0; $i < $dim; $i++) {
                                //* (($dim - 1 - $i) * 0.1)
                                $classComm[$commenti->comments[$i]->id] = $commenti->comments[$i]->likes;
                            }

                            arsort($classComm);
                            $i = 0;
                            foreach ($classComm as $key => $value) {
                                //  echo "id:".$key . "   -   likes:" . $value;
                                //   echo "<br>";

                                if ($i < 5) {
                                    $comm = $commenti->getComment($key);


                                    echo '<div><div style = "font-size:20px;"><table class = "table">';
                                    echo '<tr><td  class = " divlike panel panel-default col-md-2"><b>#' . ($i + 1) . '</b></td>';
                                    if (isset($_SESSION["like{$comm->id}"]) && $_SESSION["like{$comm->id}"] == 1) {
                                        echo '<td  class = "divlike panel panel-default  col-md-2"><a id="' . $comm->id . '" onclick="addLike(' . $comm->id . ')"><span style="color:blue; margin-top: px;" class = "  glyphicon glyphicon-thumbs-up" ></span></a></td>';
                                    } else {
                                        echo '<td  class = "divlike panel panel-default  col-md-2"><a id="' . $comm->id . '" onclick="addLike(' . $comm->id . ')"><span style="color:#606770; margin-top: px;" class = "  glyphicon glyphicon-thumbs-up" ></span></a></td>';
                                    }
                                    echo '<td class = "divlike panel panel-default col-md-2">' . $comm->likes . '</td>';
                                    echo '<td class = "divlike panel panel-default col-md-6">' . $comm->author . '</td></tr>';
                                    echo '<tr><td class = " panel panel-body panel-default " colspan="4">' . $comm->text . '</td></tr>';
                                    echo '</table></div></div>';




                                    
                                }
                                $i++;
                            }
                            ?>
                        </div>
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

        function addLike(id) {
            $.ajax({
                type: "POST",
                url: 'addLike.php',
                data: {
                    id: id
                }
                ,
                success: function (data) {
                    $("#quote").html(data);

                },
                error: function (xhr, ajaxOptions, thrownError) {
                    $("#newalert").html('<div id="alert" class="alert alert-danger alert-dismissible col-md-10 col-md-offset-1">Si è rotto qualcosa: <strong>ERRORE!</strong><a onclick="close()" class="close" data-dismiss="alert" aria-label="close">&times;</a></div>');
                    alert(xhr.responseText);
                    alert(thrownError);
                }
            });
        }



        function close() {
            document.getElementById("alert").innerHTML = "";
        }


        $("#submitComment").click(function () {
            var author = $("#author").val();
            var text = $("#text").val();
            if (author != "" && text != "") {
                insertComment(author, text);
            }
        });



        function updateComments() {
            var a = '';
            alert(a);
            return a;
        }

        function insertComment(author, text) {
            $.ajax({
                type: "POST",
                url: 'addComment.php',
                data: {
                    author: author,
                    text: text

                }
                ,
                success: function (data) {
                    //alert(data);
                    $("#newalert").html('<div id="alert" class=" alert alert-success alert-dismissible col-md-10 col-md-offset-1">Quote pubblicata!<a onclick="close()" class="close" data-dismiss="alert" aria-label="close">&times;</a></div>');
                    $("#author").val("");
                    $("#text").val("");
                    //var b = updateComments();
                    $("#quote").html(data);
                },
                error: function (xhr, ajaxOptions, thrownError) {
                    $("#newalert").html('<div id="alert" class="alert alert-danger alert-dismissible col-md-10 col-md-offset-1">la pubblicazione della quote ha avuto un <strong>ERRORE!</strong><a onclick="close()" class="close" data-dismiss="alert" aria-label="close">&times;</a></div>');
                    alert(xhr.responseText);
                    alert(thrownError);
                }
            });
        }

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
                    //alert(data);
                    $("#dateGame2").val("<?php $date ?>");
                    $("#result1Game2").val("0");
                    $("#result2Game2").val("0");
                    $("#defResult1Game2").val("0");
                    $("#defResult2Game2").val("0");
                    $("#player1Game2").val($("#player1Game2 option:first").val());
                    $("#player2Game2").val($("#player2Game2 option:second").val());
                    $("#newalert").html('<div id="alert" class=" alert alert-success alert-dismissible col-md-10 col-md-offset-1">Partita inserita!<a onclick="close()" class="close" data-dismiss="alert" aria-label="close">&times;</a></div>');
                },
                error: function (xhr, ajaxOptions, thrownError) {
                    $("#newalert").html('<div id="alert" class="alert alert-danger alert-dismissible col-md-10 col-md-offset-1">L` inserimento della partita ha avuto  <strong>ERRORE!</strong><a onclick="close()" class="close" data-dismiss="alert" aria-label="close">&times;</a></div>');
                    // alert(xhr.responseText);
                    // alert(thrownError);
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

                if (idPlayer1 != idPlayer2 && idPlayer1 != idPlayer3 && idPlayer1 != idPlayer4 && idPlayer2 != idPlayer3 && idPlayer2 != idPlayer4 && idPlayer3 != idPlayer4) {
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
                    //alert(data);
                    $("#dateGame4").val("<?php $date ?>");
                    $("#result1Game4").val("0");
                    $("#result2Game4").val("0");
                    $("#defResult1Game4").val("0");
                    $("#defResult2Game4").val("0");
                    $("#player1Game4").val($("#player1Game4 option:first").val());
                    $("#player2Game4").val($("#player2Game4 option:second").val());
                    $("#player3Game4").val($("#player3Game4 option:third").val());
                    $("#player4Game4").val($("#player4Game4 option:fourth").val());
                    $("#newalert").html('<div id="alert" class=" alert alert-success alert-dismissible col-md-10 col-md-offset-1">Partita inserita!<a onclick="close()" class="close" data-dismiss="alert" aria-label="close">&times;</a></div>');
                },
                error: function (xhr, ajaxOptions, thrownError) {
                    $("#newalert").html('<div id="alert" class="alert alert-danger alert-dismissible col-md-10 col-md-offset-1">L` inserimento della partita ha avuto  <strong>ERRORE!</strong><a onclick="close()" class="close" data-dismiss="alert" aria-label="close">&times;</a></div>');
                    //alert(xhr.responseText);
                    //   alert(thrownError);
                }
            });
        }
    </script>
</html>

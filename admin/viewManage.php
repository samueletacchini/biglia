
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

        @font-face {
            font-family: 'grinchedregular';
            src: url('../css/fonts/grinchedregular-webfont.woff2') format('woff2'),
                url('../css/fonts/grinchedregular-webfont.woff') format('woff');
            font-weight: normal;
            font-style: normal;
        }

        .title{
            font-size: 550%;
            font-family: 'grinchedregular';
        }
    </style>

    <script>

        function modifica(id, mod) {
            $.ajax({
                type: "POST",
                url: 'printGame4.php',
                data: {
                    id: id
                    modifica: mod
                }
                ,
                success: function (data) {
                    
                    $("#game4").html("PORCODDIO");
                },
                error: function (xhr, ajaxOptions, thrownError) {
                    alert(xhr.responseText);
                    alert(thrownError);
                }
            });



        }

    </script>

    <body>
        <div class="jumbotron " >
            <div class="title" id="title" align="center">Mucca & Polly</div>
            <div id="popu" class="col-md-4 col-md-offset-4">
                <h4 align="center">
                    Admin Page
                </h4>
            </div>
        </div>
        <div class="col-md-4 panel-default">
            <div class=" panel-default panel form-group">
                <h4 align='center'>2 vs 2</h4>
            </div>
            <div id="game4">
                <table  class=" text-center table table-bordered">
                    <tr><td>Modifica</td><td>Data</td><td>Blu</td><td>Score</td><td>Rossi</td></tr>
                    <?php
                    session_start();
                    require_once("../ConnessioneDb.php");
                    require_once('../Games2.php');
                    require_once('../Games4.php');
                    $db = new ConnessioneDb();
                    $games2 = new Games2($db);
                    $games4 = new Games4($db);




                    for ($i = count($games4->games4) - 1; $i > count($games4->games4) - 4; $i--) {

                        echo '<tr><td><button class="form-control" style="background-color: #FEFE9a; color: #ae1f1b" onclick="modifica(' . $i . ',1)">Modifica</button></td>';

                        echo "<td>" . $games4->games4[$i]->date . "</td>";

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
        <div class="col-md-4 panel-default">
            altro
        </div>
        <div class="col-md-4 panel-default">
            altro
        </div>
        <?php ?>



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
</html>
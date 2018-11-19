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
    </style>
    <style>
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


        <div class="col-md-8">

            <div class="panel panel-default">
                <div class="form-group">
                    <h3 align='center'>Inserimento Partite</h3>
                </div>
                <div class="panel-body text-center">
                    <div  class="  panel-default col-md-6">
                        iteInserimento PartiteInserimento PartiteInserimento PartiteInserimento PartiteInserimento Partite
                        Inserimento PartiteInserimento PartiteInserimento PartiteInserimento PartiteInserimento PartiteInserimento Partite
                        Inserimento PartiteInserimento PartiteInserimento PartiteInserimento PartiteInserimento PartiteInserimento Partite
                        Inserimento PartiteInserimento PartiteInserimento PartiteInserimento PartiteInserimento Pa
                    </div>
                    
                    <div  class="  panel-default col-md-6">Inserimento PartiteInserimento PartiteInserimento PartiteInserimento PartiteInserimento PartiteInserimento Partite
                        Inserimento PartiteInserimento PartiteInserimento PartiteInserimento PartiteInserimento PartiteInserimento Partite
                        Inserimento PartiteInserimento PartiteInserimento PartiteInserimento PartiteInserimento PartiteInserimento Partite
                        Inserimento PartiteInserimento PartiteInserimento PartiteInserimento PartiteInserimento PartiteInserimento Partite
                        Inserimento PartiteInserimento PartiteInserimento PartiteInserimento PartiteInserimento PartiteInserimento Partite
                        Inserimento PartiteInserimento PartiteInserimento PartiteInserimento PartiteInserimento PartiteInserimento Partite
                    </div>
                </div>
            </div>
            <div class = "panel panel-default col-md-6">
                <div class = "form-group">
                    <h3 align = "center">Classifica 1 vs 1</h3>
                </div>
                <div class = "panel-body" >
                    <div>
                        <b style="color:gray; font-size:125%;"> PDF : </b>
                        <p style="color:gray"> - PDF Update</p>
                        <p style="color:gray"> - PDF SkillCard</p>
                        <p style="color:gray"> - PDF Aica</p>
                    </div>
                    <div style="margin-top:5%">
                        <b style="color:gray; font-size:125%;"> Tabella User : </b>
                        <p style="color:gray"> - Tabella riassuntiva delle prenotazioni a gli esami.</p>
                        <p style="color:gray"> - Nella voce "Bolletino" :</p>
                        <ul>
                            <li style="color:gray">
                                <p style="color:gray">Se contrassegnato da <span style="color:#ff0000; font-size:150%;" class="glyphicon glyphicon-remove-sign"></span>  il PDF del <b>Bollettino</b> non è presente.</p>
                            </li>
                            <li style="color:gray">
                                <p style="color:gray">Se contrassegnato da <span style="color:#ffcc00; font-size:150%;" class="glyphicon glyphicon-exclamation-sign"></span>  il PDF del <b>Bollettino</b> è presente, ma ancora da approvare.</p>
                            </li>
                            <li style="color:gray">
                                <p style="color:gray">Se contrassegnato da <span style="color:#33cc33; font-size:150%;" class="glyphicon glyphicon-ok-sign"></span>  il PDF del <b>Bollettino</b> è stato approvato.</p>
                            </li>
                        </ul>
                        <p style="color:gray"> - Nella voce "Pdf" :</p>
                        <ul>
                            <li style="color:gray">
                                <p style="color:gray">Se contrassegnato da <span style="color:#ff0000; font-size:150%;" class="glyphicon glyphicon-remove-sign"></span>  il PDF della <b>Prenotazione</b> non è presente.</p>
                            </li>
                            <li style="color:gray">
                                <p style="color:gray">Se contrassegnato da <span style="color:#ffcc00; font-size:150%;" class="glyphicon glyphicon-exclamation-sign"></span>  il PDF della <b>Prenotazione</b> è presente, ma ancora da approvare.</p>
                            </li>
                            <li style="color:gray">
                                <p style="color:gray">Se contrassegnato da <span style="color:#33cc33; font-size:150%;" class="glyphicon glyphicon-ok-sign"></span>  il PDF della <b>Penotazione</b> è stato approvato.</p>
                            </li>
                        </ul>
                    </div>

                    <div style="margin-top:5%">
                        <b style="color:gray; font-size:125%;"> Prossime date esami: </b>
                        <p style="color:gray"> - Illustrazione delle eventuali date future disponibili per la prenotazione di un esame</l>.</p>
                    </div>
                    <div style="margin-top:5%">
                        <b style="color:gray; font-size:125%;"> Carica file: </b>
                        <p style="color:gray"> - Pannello destinato al caricamneto del PDF <b>"Bollettino"</b> e il PDF della <b>"Prenotazione"</b>.</p>
                    </div>
                </div>
            </div><div class = "panel panel-default col-md-6">
                <div class = "form-group">
                    <h3 align = "center">Classifica 2 vs 2</h3>
                </div>
                <div class = "panel-body" >
                    <div>
                        <b style="color:gray; font-size:125%;"> PDF : </b>
                        <p style="color:gray"> - PDF Update</p>
                        <p style="color:gray"> - PDF SkillCard</p>
                        <p style="color:gray"> - PDF Aica</p>
                    </div>
                    <div style="margin-top:5%">
                        <b style="color:gray; font-size:125%;"> Tabella User : </b>
                        <p style="color:gray"> - Tabella riassuntiva delle prenotazioni a gli esami.</p>
                        <p style="color:gray"> - Nella voce "Bolletino" :</p>
                        <ul>
                            <li style="color:gray">
                                <p style="color:gray">Se contrassegnato da <span style="color:#ff0000; font-size:150%;" class="glyphicon glyphicon-remove-sign"></span>  il PDF del <b>Bollettino</b> non è presente.</p>
                            </li>
                            <li style="color:gray">
                                <p style="color:gray">Se contrassegnato da <span style="color:#ffcc00; font-size:150%;" class="glyphicon glyphicon-exclamation-sign"></span>  il PDF del <b>Bollettino</b> è presente, ma ancora da approvare.</p>
                            </li>
                            <li style="color:gray">
                                <p style="color:gray">Se contrassegnato da <span style="color:#33cc33; font-size:150%;" class="glyphicon glyphicon-ok-sign"></span>  il PDF del <b>Bollettino</b> è stato approvato.</p>
                            </li>
                        </ul>
                        <p style="color:gray"> - Nella voce "Pdf" :</p>
                        <ul>
                            <li style="color:gray">
                                <p style="color:gray">Se contrassegnato da <span style="color:#ff0000; font-size:150%;" class="glyphicon glyphicon-remove-sign"></span>  il PDF della <b>Prenotazione</b> non è presente.</p>
                            </li>
                            <li style="color:gray">
                                <p style="color:gray">Se contrassegnato da <span style="color:#ffcc00; font-size:150%;" class="glyphicon glyphicon-exclamation-sign"></span>  il PDF della <b>Prenotazione</b> è presente, ma ancora da approvare.</p>
                            </li>
                            <li style="color:gray">
                                <p style="color:gray">Se contrassegnato da <span style="color:#33cc33; font-size:150%;" class="glyphicon glyphicon-ok-sign"></span>  il PDF della <b>Penotazione</b> è stato approvato.</p>
                            </li>
                        </ul>
                    </div>

                    <div style="margin-top:5%">
                        <b style="color:gray; font-size:125%;"> Prossime date esami: </b>
                        <p style="color:gray"> - Illustrazione delle eventuali date future disponibili per la prenotazione di un esame</l>.</p>
                    </div>
                    <div style="margin-top:5%">
                        <b style="color:gray; font-size:125%;"> Carica file: </b>
                        <p style="color:gray"> - Pannello destinato al caricamneto del PDF <b>"Bollettino"</b> e il PDF della <b>"Prenotazione"</b>.</p>
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
        if (!isset($_SESSION['user'])) {
            echo '<div class="panel panel-default" style="height:20% width:5%;"><iframe style="max-width:100%;min-width:100%;" height="400" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2838.5097460187676!2d10.88803611520416!3d44.64793607909977!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x477fef95e7474705%3A0xe65e79e7b059ecb4!2sIstituto+di+Istruzione+Superiore+F.Corni%2C+sede+Vinci!5e0!3m2!1sit!2sit!4v1525778801134" frameborder="0" style="border:0" allowfullscreen></iframe></div>';
        }
        ?>
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
</script>
<script>
            document.getElementById('get_file').onclick = function () {
    document.getElementById('my_file').click();
    };
    $('input[type=file]').change(function (e) {
    $('#customfileupload').html($(this).val());
    });</script>



<script>
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
    function login() {
    var user = document.getElementById('username').value;
    var pass = document.getElementById('password').value;
    $.ajax({
    type: "POST",
            url: 'php/login.php',
            data: {
            username: user,
                    password: pass
            }
    success: function (data) {
    if (data === 'Login') {
    window.location.replace('/Uida/pagine/home.php');
    } else {
    alert('Credenziali invalide!');
    }
    }
    });
    }
</script>
</html>

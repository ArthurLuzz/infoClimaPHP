<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>Informaçâo do clima AVL</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <script src="https://code.jquery.com/jquery-3.4.1.min.js"integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="crossorigin="anonymous"></script>

        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

        <script src="js/clima.js"></script>
        
        <meta NAME="DESCRIPTION" CONTENT="Site de informações climáticas de Brusque-SC. Desenvolvido por Arthur Vinicius da Luz."/>
        <meta NAME="ABSTRACT" CONTENT="Informações Climátivas"/>
        <meta name="keywords" content="Clima, Informações, Climático, temperatura, umidade, temperatura em Brusque, 
              tempo em Brusque, clima Brusque, umidade em Brusque, tempo para Brusque, tempo para Santa Catarina, 
              Informação do tempo para Brusque, O municipio, jornal hoje, brusque, Brusque clima, tempo para brusque hoje,
              Arthur Vinicius da Luz, AVL"/>
        
        <meta NAME="title" CONTENT="Informaçâo do clima AVL" />
        <meta NAME="identifier-url" content="https://arthur-clima.herokuapp.com" />
        <meta NAME="author" content="Arthur Vinicius da Luz" />
        <meta NAME="ROBOTS" CONTENT="All" />
        <meta NAME="RATING" CONTENT="general" />
        <meta NAME="DISTRIBUTION" CONTENT="global" />
        <meta NAME="LANGUAGE" CONTENT="pt-br" />
        <meta name="content-language" content="portuguese" />
        <meta name="doc-class" content="Completed" /> 
        <meta name="reply-to" content="arthur_luz@estudante.sc.senai.br"/>
        
        <meta property="og:url" content="https://arthur-clima.herokuapp.com" />
        <meta property="og:locale" content="pt_BR" />
        <meta property="og:type" content="website" />
        <meta property="og:site_name" content="Informaçâo do clima AVL" />
        <meta property="og:title" content="Informaçâo do clima AVL" />
        <meta property="og:description" content="Site de informações climáticas de Brusque-SC. Desenvolvido por Arthur Vinicius da Luz." />
        <meta property="og:image" content="https://arthur-clima.herokuapp.com/img/climaFrente.jpg" />
        <meta property="og:image:width" content="400" />
        <meta property="og:image:height" content="120" />
        <meta property="fb:app_id" content="" />
        
    </head>
    <body>
        <div class="row">
            <div class="col-md-12">
                <div class="jumbotron"  >
                    <h1 class="alert alert-primary" > Tempo para Brusque-SC | <span id="temperatura"></span> </h1>
                    <p>
                        <span id="situacao"> </span>
                        <img src="img/icones/02d.png"/>
                    </p>


                    <div class="container">
                        <div class="row">
                            <div class="col-6">

                                <h5> 
                                    <center>
                                    <p class="alert alert-warning" > 
                                        Temperatura Máxima <span id="temperaturaMax"></span> 

                                        <span id="situacao2"> </span>
                                        <img src="img/icones/tempMax.jpg" width="60"/>
                                    </p>
                                    </center>
                                </h5>

                            </div>





                            <div class="col-md-6" >

                                <h5>
                                    <center>
                                    <p class="alert alert-info" >
                                        Temperatura Mínima <span id="temperaturaMin"></span> 

                                        <span id="situacao3"> </span>
                                        <img src="img/icones/tempMin.jpg" width="60"/>
                                    </p>
                                    </center>
                                </h5>
                            </div>
                        </div>


                    </div>


                    <div class="container">
                        <div class="row">
                            <div class="col-md-4" >

                                <center>
                                <p class="alert alert-dark" > 
                                    Umidade do Ar: <span id="umidade"></span> 

                                    <span id="situacao4"> </span>
                                    <img src="img/icones/umidade1.jpg" width="60"/>
                                </p>
                                 </center> 
                            </div>







                            <div class="col-md-4">

                                 <center>
                                <p class="alert alert-dark" > 
                                    Pressão do Ar: <span id="pressao"></span> 

                                    <span id="situacao5"> </span>
                                    <img src="img/icones/pressao1.jpg" width="60"/>
                                </p>
                                </center>

                            </div>

                            <div class="col-md-4" >

                                </center>
                                <p class="alert alert-dark" >
                                    Velocidade do Vento: <span id="vento"></span> 

                                    <span id="situacao6"> </span>
                                    <img src="img/icones/velocidade.png" width="60"/>
                                </p>
                                </center>

                            </div>
                            
                            
                             <div class="col-md-6" >

                                <center>
                                <p class="alert alert-dark" >
                                    Amanhecer: <span id="amanhecer"></span> 

                                    <span id="situacao6"> </span>
                                    <img src="img/icones/amanhecer2.png" width="60"/>
                                </p>
                                </center>

                            </div>
                            
                            
                             <div class="col-md-6" >

                                <center>
                                <p class="alert alert-dark" >
                                    Por do Sol: <span id="porDosol"></span> 

                                    <span id="situacao6"> </span>
                                    <img src="img/icones/porDoSol.png" width="60"/>
                                </p>
                                </center>

                            </div>
                        </div>   


                    </div>

                </div>
            </div>
        </div>
    </body>
</html>

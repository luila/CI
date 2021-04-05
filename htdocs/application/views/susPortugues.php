<?php include "language.php"?>
<head>
<style type="text/css">
        
        *{
            margin:0; /*Defin a a separacao das colunas aqui*/
            padding:0;
        }

        .linha{
            padding:0;
            clear:both;
        }

        .coluna{    
            /* height:25px; */
            border: none;
            width:100;      
            float:left;
            font-size: 13px;
        }
    </style>
</head>

<body>
    <main>                      
        <form id='susPortuguesForm' method='post' action="<?php echo site_url('Main/submitSusPortugues')?>"  class='section'>
            <div class="section no-pad-bot" id="index-banner">
                <div class="container">
                    <div class="row center">
                        <div class="col s12 m10 offset-m1 bottom-line">
                            <h3 class="header"><?php echo $lang['susPortugues'];?></h3>
                        </div>                       

                        <!-- pergunta 1 -->
                        <div class="col s12 m12 l12">
                            <div class="card"> 
                                <div class="card-image">

                                    <div class="card-content">
                                        <p style="font-weight: bold"><?php echo $lang['susLibras1'];?></p>
                                    </div>
                                    
                                    
                                    <div class="container">                            
                                        <div class="row center">
                                            <div class="grid-container">

                                                
                                                <div class="linha">
                                                    
                                                    <div class="linha" style="height:50px">
                                                        <div class="coluna"> Discordo completamente</div>
                                                        <div class="coluna"> Discordo parcialmente</div>
                                                        <div class="coluna"> Neutro</div>
                                                        <div class="coluna"> Concordo parcialmente</div>
                                                        <div class="coluna"> Concordo completamente</div>
                                                    </div>
                                                    <div class="linha" style="height:50px">
                                                        <div class="coluna"> 
                                                            <p>
                                                                <label>
                                                                    <input class="with-gap" name="q1" type="radio" value="1" required="required"/>  
                                                                    <span></span>
                                                                </label>
                                                            </p>
                                                        </div>
                                                        <div class="coluna"> 
                                                            <p>
                                                                <label>
                                                                    <input class="with-gap" name="q1" type="radio" value="2" required="required"/>  
                                                                    <span></span>
                                                                </label>
                                                            </p>
                                                        </div>
                                                        <div class="coluna"> 
                                                            <p>
                                                                <label>
                                                                    <input class="with-gap" name="q1" type="radio" value="3" required="required"/>  
                                                                    <span></span>
                                                                </label>
                                                            </p>
                                                        </div>
                                                        <div class="coluna"> 
                                                            <p>
                                                                <label>
                                                                    <input class="with-gap" name="q1" type="radio" value="4" required="required"/>  
                                                                    <span></span>
                                                                </label>
                                                            </p>
                                                        </div>
                                                        <div class="coluna"> 
                                                            <p>
                                                                <label>
                                                                    <input class="with-gap" name="q1" type="radio" value="5" required="required"/>  
                                                                    <span></span>
                                                                </label>
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>                  
                                </div>
                            </div>
                        </div>

                        <!-- pergunta 2 -->
                        <div class="col s12 m12 l12">
                            <div class="card"> 
                                <div class="card-image">

                                    <div class="card-content">
                                        <p style="font-weight: bold"><?php echo $lang['susLibras2'];?></p>
                                    </div>
                                    
                                    
                                    <div class="container">                            
                                        <div class="row center">
                                            <div class="grid-container">

                                                
                                                <div class="linha">
                                                    
                                                    <div class="linha" style="height:50px">
                                                        <div class="coluna"> Discordo completamente</div>
                                                        <div class="coluna"> Discordo parcialmente</div>
                                                        <div class="coluna"> Neutro</div>
                                                        <div class="coluna"> Concordo parcialmente</div>
                                                        <div class="coluna"> Concordo completamente</div>
                                                    </div>
                                                    <div class="linha" style="height:50px">
                                                        <div class="coluna"> 
                                                            <p>
                                                                <label>
                                                                    <input class="with-gap" name="q2" type="radio" value="1" required="required"/>  
                                                                    <span></span>
                                                                </label>
                                                            </p>
                                                        </div>
                                                        <div class="coluna"> 
                                                            <p>
                                                                <label>
                                                                    <input class="with-gap" name="q2" type="radio" value="2" required="required"/>  
                                                                    <span></span>
                                                                </label>
                                                            </p>
                                                        </div>
                                                        <div class="coluna"> 
                                                            <p>
                                                                <label>
                                                                    <input class="with-gap" name="q2" type="radio" value="3" required="required"/>  
                                                                    <span></span>
                                                                </label>
                                                            </p>
                                                        </div>
                                                        <div class="coluna"> 
                                                            <p>
                                                                <label>
                                                                    <input class="with-gap" name="q2" type="radio" value="4" required="required"/>  
                                                                    <span></span>
                                                                </label>
                                                            </p>
                                                        </div>
                                                        <div class="coluna"> 
                                                            <p>
                                                                <label>
                                                                    <input class="with-gap" name="q2" type="radio" value="5" required="required"/>  
                                                                    <span></span>
                                                                </label>
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>                  
                                </div>
                            </div>
                        </div>

                        <!-- pergunta 3 -->
                        <div class="col s12 m12 l12">
                            <div class="card"> 
                                <div class="card-image">

                                    <div class="card-content">
                                        <p style="font-weight: bold"><?php echo $lang['susLibras3'];?></p>
                                    </div>
                                    
                                    
                                    <div class="container">                            
                                        <div class="row center">
                                            <div class="grid-container">

                                                
                                                <div class="linha">
                                                    
                                                    <div class="linha" style="height:50px">
                                                        <div class="coluna"> Discordo completamente</div>
                                                        <div class="coluna"> Discordo parcialmente</div>
                                                        <div class="coluna"> Neutro</div>
                                                        <div class="coluna"> Concordo parcialmente</div>
                                                        <div class="coluna"> Concordo completamente</div>
                                                    </div>
                                                    <div class="linha" style="height:50px">
                                                        <div class="coluna"> 
                                                            <p>
                                                                <label>
                                                                    <input class="with-gap" name="q3" type="radio" value="1" required="required"/>  
                                                                    <span></span>
                                                                </label>
                                                            </p>
                                                        </div>
                                                        <div class="coluna"> 
                                                            <p>
                                                                <label>
                                                                    <input class="with-gap" name="q3" type="radio" value="2" required="required"/>  
                                                                    <span></span>
                                                                </label>
                                                            </p>
                                                        </div>
                                                        <div class="coluna"> 
                                                            <p>
                                                                <label>
                                                                    <input class="with-gap" name="q3" type="radio" value="3" required="required"/>  
                                                                    <span></span>
                                                                </label>
                                                            </p>
                                                        </div>
                                                        <div class="coluna"> 
                                                            <p>
                                                                <label>
                                                                    <input class="with-gap" name="q3" type="radio" value="4" required="required"/>  
                                                                    <span></span>
                                                                </label>
                                                            </p>
                                                        </div>
                                                        <div class="coluna"> 
                                                            <p>
                                                                <label>
                                                                    <input class="with-gap" name="q3" type="radio" value="5" required="required"/>  
                                                                    <span></span>
                                                                </label>
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>                  
                                </div>
                            </div>
                        </div>

                        <!-- pergunta 4 -->
                        <div class="col s12 m12 l12">
                            <div class="card"> 
                                <div class="card-image">

                                    <div class="card-content">
                                        <p style="font-weight: bold"><?php echo $lang['susLibras4'];?></p>
                                    </div>
                                    
                                    
                                    <div class="container">                            
                                        <div class="row center">
                                            <div class="grid-container">

                                                
                                                <div class="linha">
                                                    
                                                    <div class="linha" style="height:50px">
                                                        <div class="coluna"> Discordo completamente</div>
                                                        <div class="coluna"> Discordo parcialmente</div>
                                                        <div class="coluna"> Neutro</div>
                                                        <div class="coluna"> Concordo parcialmente</div>
                                                        <div class="coluna"> Concordo completamente</div>
                                                    </div>
                                                    <div class="linha" style="height:50px">
                                                        <div class="coluna"> 
                                                            <p>
                                                                <label>
                                                                    <input class="with-gap" name="q4" type="radio" value="1" required="required"/>  
                                                                    <span></span>
                                                                </label>
                                                            </p>
                                                        </div>
                                                        <div class="coluna"> 
                                                            <p>
                                                                <label>
                                                                    <input class="with-gap" name="q4" type="radio" value="2" required="required"/>  
                                                                    <span></span>
                                                                </label>
                                                            </p>
                                                        </div>
                                                        <div class="coluna"> 
                                                            <p>
                                                                <label>
                                                                    <input class="with-gap" name="q4" type="radio" value="3" required="required"/>  
                                                                    <span></span>
                                                                </label>
                                                            </p>
                                                        </div>
                                                        <div class="coluna"> 
                                                            <p>
                                                                <label>
                                                                    <input class="with-gap" name="q4" type="radio" value="4" required="required"/>  
                                                                    <span></span>
                                                                </label>
                                                            </p>
                                                        </div>
                                                        <div class="coluna"> 
                                                            <p>
                                                                <label>
                                                                    <input class="with-gap" name="q4" type="radio" value="5" required="required"/>  
                                                                    <span></span>
                                                                </label>
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>                  
                                </div>
                            </div>
                        </div>

                        <!-- pergunta 5 -->
                        <div class="col s12 m12 l12">
                            <div class="card"> 
                                <div class="card-image">

                                    <div class="card-content">
                                        <p style="font-weight: bold"><?php echo $lang['susLibras5'];?></p>
                                    </div>
                                    
                                    
                                    <div class="container">                            
                                        <div class="row center">
                                            <div class="grid-container">

                                                
                                                <div class="linha">
                                                    
                                                    <div class="linha" style="height:50px">
                                                        <div class="coluna"> Discordo completamente</div>
                                                        <div class="coluna"> Discordo parcialmente</div>
                                                        <div class="coluna"> Neutro</div>
                                                        <div class="coluna"> Concordo parcialmente</div>
                                                        <div class="coluna"> Concordo completamente</div>
                                                    </div>
                                                    <div class="linha" style="height:50px">
                                                        <div class="coluna"> 
                                                            <p>
                                                                <label>
                                                                    <input class="with-gap" name="q5" type="radio" value="1" required="required"/>  
                                                                    <span></span>
                                                                </label>
                                                            </p>
                                                        </div>
                                                        <div class="coluna"> 
                                                            <p>
                                                                <label>
                                                                    <input class="with-gap" name="q5" type="radio" value="2" required="required"/>  
                                                                    <span></span>
                                                                </label>
                                                            </p>
                                                        </div>
                                                        <div class="coluna"> 
                                                            <p>
                                                                <label>
                                                                    <input class="with-gap" name="q5" type="radio" value="3" required="required"/>  
                                                                    <span></span>
                                                                </label>
                                                            </p>
                                                        </div>
                                                        <div class="coluna"> 
                                                            <p>
                                                                <label>
                                                                    <input class="with-gap" name="q5" type="radio" value="4" required="required"/>  
                                                                    <span></span>
                                                                </label>
                                                            </p>
                                                        </div>
                                                        <div class="coluna"> 
                                                            <p>
                                                                <label>
                                                                    <input class="with-gap" name="q5" type="radio" value="5" required="required"/>  
                                                                    <span></span>
                                                                </label>
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>                  
                                </div>
                            </div>
                        </div>

                        <!-- pergunta 6 -->
                        <div class="col s12 m12 l12">
                            <div class="card"> 
                                <div class="card-image">

                                    <div class="card-content">
                                        <p style="font-weight: bold"><?php echo $lang['susLibras6'];?></p>
                                    </div>
                                    
                                    
                                    <div class="container">                            
                                        <div class="row center">
                                            <div class="grid-container">

                                                
                                                <div class="linha">
                                                    
                                                    <div class="linha" style="height:50px">
                                                        <div class="coluna"> Discordo completamente</div>
                                                        <div class="coluna"> Discordo parcialmente</div>
                                                        <div class="coluna"> Neutro</div>
                                                        <div class="coluna"> Concordo parcialmente</div>
                                                        <div class="coluna"> Concordo completamente</div>
                                                    </div>
                                                    <div class="linha" style="height:50px">
                                                        <div class="coluna"> 
                                                            <p>
                                                                <label>
                                                                    <input class="with-gap" name="q6" type="radio" value="1" required="required"/>  
                                                                    <span></span>
                                                                </label>
                                                            </p>
                                                        </div>
                                                        <div class="coluna"> 
                                                            <p>
                                                                <label>
                                                                    <input class="with-gap" name="q6" type="radio" value="2" required="required"/>  
                                                                    <span></span>
                                                                </label>
                                                            </p>
                                                        </div>
                                                        <div class="coluna"> 
                                                            <p>
                                                                <label>
                                                                    <input class="with-gap" name="q6" type="radio" value="3" required="required"/>  
                                                                    <span></span>
                                                                </label>
                                                            </p>
                                                        </div>
                                                        <div class="coluna"> 
                                                            <p>
                                                                <label>
                                                                    <input class="with-gap" name="q6" type="radio" value="4" required="required"/>  
                                                                    <span></span>
                                                                </label>
                                                            </p>
                                                        </div>
                                                        <div class="coluna"> 
                                                            <p>
                                                                <label>
                                                                    <input class="with-gap" name="q6" type="radio" value="5" required="required"/>  
                                                                    <span></span>
                                                                </label>
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>                  
                                </div>
                            </div>
                        </div>

                        <!-- pergunta 7 -->
                        <div class="col s12 m12 l12">
                            <div class="card"> 
                                <div class="card-image">

                                    <div class="card-content">
                                        <p style="font-weight: bold"><?php echo $lang['susLibras7'];?></p>
                                    </div>
                                    
                                    
                                    <div class="container">                            
                                        <div class="row center">
                                            <div class="grid-container">

                                                
                                                <div class="linha">
                                                    
                                                    <div class="linha" style="height:50px">
                                                        <div class="coluna"> Discordo completamente</div>
                                                        <div class="coluna"> Discordo parcialmente</div>
                                                        <div class="coluna"> Neutro</div>
                                                        <div class="coluna"> Concordo parcialmente</div>
                                                        <div class="coluna"> Concordo completamente</div>
                                                    </div>
                                                    <div class="linha" style="height:50px">
                                                        <div class="coluna"> 
                                                            <p>
                                                                <label>
                                                                    <input class="with-gap" name="q7" type="radio" value="1" required="required"/>  
                                                                    <span></span>
                                                                </label>
                                                            </p>
                                                        </div>
                                                        <div class="coluna"> 
                                                            <p>
                                                                <label>
                                                                    <input class="with-gap" name="q7" type="radio" value="2" required="required"/>  
                                                                    <span></span>
                                                                </label>
                                                            </p>
                                                        </div>
                                                        <div class="coluna"> 
                                                            <p>
                                                                <label>
                                                                    <input class="with-gap" name="q7" type="radio" value="3" required="required"/>  
                                                                    <span></span>
                                                                </label>
                                                            </p>
                                                        </div>
                                                        <div class="coluna"> 
                                                            <p>
                                                                <label>
                                                                    <input class="with-gap" name="q7" type="radio" value="4" required="required"/>  
                                                                    <span></span>
                                                                </label>
                                                            </p>
                                                        </div>
                                                        <div class="coluna"> 
                                                            <p>
                                                                <label>
                                                                    <input class="with-gap" name="q7" type="radio" value="5" required="required"/>  
                                                                    <span></span>
                                                                </label>
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>                  
                                </div>
                            </div>
                        </div>

                        <!-- pergunta 8 -->
                        <div class="col s12 m12 l12">
                            <div class="card"> 
                                <div class="card-image">

                                    <div class="card-content">
                                        <p style="font-weight: bold"><?php echo $lang['susLibras8'];?></p>
                                    </div>
                                    
                                    
                                    <div class="container">                            
                                        <div class="row center">
                                            <div class="grid-container">

                                                
                                                <div class="linha">
                                                    
                                                    <div class="linha" style="height:50px">
                                                        <div class="coluna"> Discordo completamente</div>
                                                        <div class="coluna"> Discordo parcialmente</div>
                                                        <div class="coluna"> Neutro</div>
                                                        <div class="coluna"> Concordo parcialmente</div>
                                                        <div class="coluna"> Concordo completamente</div>
                                                    </div>
                                                    <div class="linha" style="height:50px">
                                                        <div class="coluna"> 
                                                            <p>
                                                                <label>
                                                                    <input class="with-gap" name="q8" type="radio" value="1" required="required"/>  
                                                                    <span></span>
                                                                </label>
                                                            </p>
                                                        </div>
                                                        <div class="coluna"> 
                                                            <p>
                                                                <label>
                                                                    <input class="with-gap" name="q8" type="radio" value="2" required="required"/>  
                                                                    <span></span>
                                                                </label>
                                                            </p>
                                                        </div>
                                                        <div class="coluna"> 
                                                            <p>
                                                                <label>
                                                                    <input class="with-gap" name="q8" type="radio" value="3" required="required"/>  
                                                                    <span></span>
                                                                </label>
                                                            </p>
                                                        </div>
                                                        <div class="coluna"> 
                                                            <p>
                                                                <label>
                                                                    <input class="with-gap" name="q8" type="radio" value="4" required="required"/>  
                                                                    <span></span>
                                                                </label>
                                                            </p>
                                                        </div>
                                                        <div class="coluna"> 
                                                            <p>
                                                                <label>
                                                                    <input class="with-gap" name="q8" type="radio" value="5" required="required"/>  
                                                                    <span></span>
                                                                </label>
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>                  
                                </div>
                            </div>
                        </div>
                        
                        <!-- pergunta 9 -->
                        <div class="col s12 m12 l12">
                            <div class="card"> 
                                <div class="card-image">

                                    <div class="card-content">
                                        <p style="font-weight: bold"><?php echo $lang['susLibras9'];?></p>
                                    </div>
                                    
                                    
                                    <div class="container">                            
                                        <div class="row center">
                                            <div class="grid-container">

                                                
                                                <div class="linha">
                                                    
                                                    <div class="linha" style="height:50px">
                                                        <div class="coluna"> Discordo completamente</div>
                                                        <div class="coluna"> Discordo parcialmente</div>
                                                        <div class="coluna"> Neutro</div>
                                                        <div class="coluna"> Concordo parcialmente</div>
                                                        <div class="coluna"> Concordo completamente</div>
                                                    </div>
                                                    <div class="linha" style="height:50px">
                                                        <div class="coluna"> 
                                                            <p>
                                                                <label>
                                                                    <input class="with-gap" name="q9" type="radio" value="1" required="required"/>  
                                                                    <span></span>
                                                                </label>
                                                            </p>
                                                        </div>
                                                        <div class="coluna"> 
                                                            <p>
                                                                <label>
                                                                    <input class="with-gap" name="q9" type="radio" value="2" required="required"/>  
                                                                    <span></span>
                                                                </label>
                                                            </p>
                                                        </div>
                                                        <div class="coluna"> 
                                                            <p>
                                                                <label>
                                                                    <input class="with-gap" name="q9" type="radio" value="3" required="required"/>  
                                                                    <span></span>
                                                                </label>
                                                            </p>
                                                        </div>
                                                        <div class="coluna"> 
                                                            <p>
                                                                <label>
                                                                    <input class="with-gap" name="q9" type="radio" value="4" required="required"/>  
                                                                    <span></span>
                                                                </label>
                                                            </p>
                                                        </div>
                                                        <div class="coluna"> 
                                                            <p>
                                                                <label>
                                                                    <input class="with-gap" name="q9" type="radio" value="5" required="required"/>  
                                                                    <span></span>
                                                                </label>
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>                  
                                </div>
                            </div>
                        </div>

                        <!-- pergunta 10 -->
                        <div class="col s12 m12 l12">
                            <div class="card"> 
                                <div class="card-image">

                                    <div class="card-content">
                                        <p style="font-weight: bold"><?php echo $lang['susLibras10'];?></p>
                                    </div>
                                    
                                    
                                    <div class="container">                            
                                        <div class="row center">
                                            <div class="grid-container">

                                                
                                                <div class="linha">
                                                    
                                                    <div class="linha" style="height:50px">
                                                        <div class="coluna"> Discordo completamente</div>
                                                        <div class="coluna"> Discordo parcialmente</div>
                                                        <div class="coluna"> Neutro</div>
                                                        <div class="coluna"> Concordo parcialmente</div>
                                                        <div class="coluna"> Concordo completamente</div>
                                                    </div>
                                                    <div class="linha" style="height:50px">
                                                        <div class="coluna"> 
                                                            <p>
                                                                <label>
                                                                    <input class="with-gap" name="q10" type="radio" value="1" required="required"/>  
                                                                    <span></span>
                                                                </label>
                                                            </p>
                                                        </div>
                                                        <div class="coluna"> 
                                                            <p>
                                                                <label>
                                                                    <input class="with-gap" name="q10" type="radio" value="2" required="required"/>  
                                                                    <span></span>
                                                                </label>
                                                            </p>
                                                        </div>
                                                        <div class="coluna"> 
                                                            <p>
                                                                <label>
                                                                    <input class="with-gap" name="q10" type="radio" value="3" required="required"/>  
                                                                    <span></span>
                                                                </label>
                                                            </p>
                                                        </div>
                                                        <div class="coluna"> 
                                                            <p>
                                                                <label>
                                                                    <input class="with-gap" name="q1" type="radio" value="4" required="required"/>  
                                                                    <span></span>
                                                                </label>
                                                            </p>
                                                        </div>
                                                        <div class="coluna"> 
                                                            <p>
                                                                <label>
                                                                    <input class="with-gap" name="q10" type="radio" value="5" required="required"/>  
                                                                    <span></span>
                                                                </label>
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>                  
                                </div>
                            </div>
                        </div>

                        <div class="row center">
                            <div class="input-field col s12">    
                                <!--
                                <a href="<?php echo site_url('Main/Navigation?lang=' . $_SESSION['lang'])?>" class="modal-action modal-close btn grey darken-1 right">
                                    <?php echo $lang['back'];?>
                                </a> -->
                                <button type="submit" value="save" class="btn btn-primary center"><?php echo $lang['save'];?></button>
                                <!-- <a href="<?php echo site_url('Main/Navigation?lang=' . $_SESSION['lang'])?> -->
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </form>        

    </main>

</body>

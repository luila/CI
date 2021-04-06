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



        @media screen and (max-width: 600px) 
        {
            .grid-container 
            {
                display: grid;
                grid-template-columns: 1fr 1fr 1fr;
                /* grid-template-rows: 1fr 1fr 1fr 1fr 1fr; */
                row-gap: 10px;
                background-color: #2196F3;
                /* padding: 10px; */
                font-size: 13px;
                width:100;
                height: 100px;        

            }            
        }
       
    </style>

</head>

<body>
    <main>                        

        
        <form id='susLibrasForm' method='post' action="<?php echo site_url('Main/submitSusLibras')?>"  class='section'>
            <div class="section no-pad-bot" id="index-banner">
                <div class="container">
                    <div class="row center">
                        <div class="col s12 m10 offset-m1 bottom-line">
                            <h3 class="header"><?php echo $lang['susLibras'];?></h3>
                        </div>

                        <!-- pergunta 1 -->
                        <div class="col s12 m12 l12">
                            <div class="card"> 
                                <!-- <div class="card-image"> -->
                                    <!-- <div class="video-container">        -->
            
                                        <video  width = "300" height = "200" controls autoplay>
                                            <source src=<?php echo $lang['video-sus_pergunta1m'];?> type = "video/mp4" />
                                        </video>
                                        
                                        <!-- <iframe width="853" height="480" src=<?php echo $lang['video-sus_pergunta1'];?> frameborder="0" allowfullscreen></iframe> -->
                                    <!-- </div> -->

                                    <div class="card-content">
                                        <p><?php echo $lang['susLibras1'];?></p>
                                        <p style="font-size:10px"><?php echo $lang['susGlosa1'];?></p>
                                    </div>
                                    
                                    
                                    <div class="container">                            
                                        <div class="row center">
                                            <div class="grid-container">

                                                
                                                <div class="linha">
                                                    <div class="coluna">
                                                        <!--<video class="responsive-video" width = "88" height = "113" controls autoplay loop> -->
                                                        <video class="responsive-video" width = "88" height = "113" controls autoplay loop>
                                                            <source src=<?php echo $lang['video-sus_escala1'];?> type = "video/mp4" />
                                                        </video>
                                                    </div>
                                                    <div class="coluna">
                                                        <video class="responsive-video" width = "88" height = "113" controls autoplay loop>
                                                            <source src=<?php echo $lang['video-sus_escala2'];?> type = "video/mp4" />
                                                        </video>
                                                    </div>
                                                    <div class="coluna">
                                                        <video class="responsive-video" width = "88" height = "113" controls autoplay loop>
                                                            <source src=<?php echo $lang['video-sus_escala3'];?> type = "video/mp4" />
                                                        </video>
                                                    </div>
                                                    <div class="coluna">
                                                        <video class="responsive-video" width = "88" height = "113" controls autoplay loop>
                                                            <source src=<?php echo $lang['video-sus_escala1'];?> type = "video/mp4" />
                                                        </video>
                                                    </div>
                                                    <div class="coluna">
                                                        <video class="responsive-video" width = "88" height = "113" controls autoplay loop>
                                                            <source src=<?php echo $lang['video-sus_escala1'];?> type = "video/mp4" />
                                                        </video>
                                                    </div>
                                                </div>
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
                                                                <input class="with-gap" name="sus_libras_pergunta1" type="radio" value="1" required="required"/>  
                                                                <span></span>
                                                            </label>
                                                        </p>
                                                    </div>
                                                    <div class="coluna"> 
                                                        <p>
                                                            <label>
                                                                <input class="with-gap" name="sus_libras_pergunta1" type="radio" value="2" required="required"/>  
                                                                <span></span>
                                                            </label>
                                                        </p>
                                                    </div>
                                                    <div class="coluna"> 
                                                        <p>
                                                            <label>
                                                                <input class="with-gap" name="sus_libras_pergunta1" type="radio" value="3" required="required"/>  
                                                                <span></span>
                                                            </label>
                                                        </p>
                                                    </div>
                                                    <div class="coluna"> 
                                                        <p>
                                                            <label>
                                                                <input class="with-gap" name="sus_libras_pergunta1" type="radio" value="4" required="required"/>  
                                                                <span></span>
                                                            </label>
                                                        </p>
                                                    </div>
                                                    <div class="coluna"> 
                                                        <p>
                                                            <label>
                                                                <input class="with-gap" name="sus_libras_pergunta1" type="radio" value="5" required="required"/>  
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
                        <!-- </div> -->

                        <!-- pergunta 1 -->
                        <div class="col s12 m12 l12">
                            <div class="card"> 
                                <div class="card-image">
                                    <div class="video-container">

                                        <!--
                                        Tela menor
                                        <video  width = "300" height = "200" controls autoplay>
                                            <source src=<?php echo $lang['video-sus_pergunta1'];?> type = "video/mp4" />
                                        </video>
                                        -->
                                        <iframe width="853" height="480" src=<?php echo $lang['video-sus_pergunta1'];?> frameborder="0" allowfullscreen></iframe> 
                                    </div> 

                                    <div class="card-content">
                                        <p><?php echo $lang['susLibras1'];?></p>
                                        <p style="font-size:10px"><?php echo $lang['susGlosa1'];?></p>
                                    </div>
                                    
                                    
                                    <div class="container">                            
                                        <div class="row center">
                                            <div class="grid-container">

                                                
                                                <div class="linha">
                                                    <div class="coluna">
                                                        <!--<video class="responsive-video" width = "88" height = "113" controls autoplay loop> -->
                                                        <video class="responsive-video" width = "88" height = "113" controls autoplay loop>
                                                            <source src=<?php echo $lang['video-sus_escala1'];?> type = "video/mp4" />
                                                        </video>
                                                    </div>
                                                    <div class="coluna">
                                                        <video class="responsive-video" width = "88" height = "113" controls autoplay loop>
                                                            <source src=<?php echo $lang['video-sus_escala2'];?> type = "video/mp4" />
                                                        </video>
                                                    </div>
                                                    <div class="coluna">
                                                        <video class="responsive-video" width = "88" height = "113" controls autoplay loop>
                                                            <source src=<?php echo $lang['video-sus_escala3'];?> type = "video/mp4" />
                                                        </video>
                                                    </div>
                                                    <div class="coluna">
                                                        <video class="responsive-video" width = "88" height = "113" controls autoplay loop>
                                                            <source src=<?php echo $lang['video-sus_escala1'];?> type = "video/mp4" />
                                                        </video>
                                                    </div>
                                                    <div class="coluna">
                                                        <video class="responsive-video" width = "88" height = "113" controls autoplay loop>
                                                            <source src=<?php echo $lang['video-sus_escala1'];?> type = "video/mp4" />
                                                        </video>
                                                    </div>
                                                </div>
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
                                                                <input class="with-gap" name="sus_libras_pergunta1" type="radio" value="1" required="required"/>  
                                                                <span></span>
                                                            </label>
                                                        </p>
                                                    </div>
                                                    <div class="coluna"> 
                                                        <p>
                                                            <label>
                                                                <input class="with-gap" name="sus_libras_pergunta1" type="radio" value="2" required="required"/>  
                                                                <span></span>
                                                            </label>
                                                        </p>
                                                    </div>
                                                    <div class="coluna"> 
                                                        <p>
                                                            <label>
                                                                <input class="with-gap" name="sus_libras_pergunta1" type="radio" value="3" required="required"/>  
                                                                <span></span>
                                                            </label>
                                                        </p>
                                                    </div>
                                                    <div class="coluna"> 
                                                        <p>
                                                            <label>
                                                                <input class="with-gap" name="sus_libras_pergunta1" type="radio" value="4" required="required"/>  
                                                                <span></span>
                                                            </label>
                                                        </p>
                                                    </div>
                                                    <div class="coluna"> 
                                                        <p>
                                                            <label>
                                                                <input class="with-gap" name="sus_libras_pergunta1" type="radio" value="5" required="required"/>  
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

                        <!-- pergunta 2 -->
                        <div class="col s12 m12 l12">
                            <div class="card"> 
                                <div class="card-image">
                                    <div class="video-container">

                                        <!--
                                        Tela menor
                                        <video  width = "300" height = "200" controls autoplay>
                                            <source src=<?php echo $lang['video-sus_pergunta1'];?> type = "video/mp4" />
                                        </video>
                                        -->
                                        <iframe width="853" height="480" src=<?php echo $lang['video-sus_pergunta2'];?> frameborder="0" allowfullscreen></iframe> 
                                    </div> 

                                    <div class="card-content">
                                        <p><?php echo $lang['susLibras2'];?></p>
                                        <p style="font-size:10px"><?php echo $lang['susGlosa2'];?></p>
                                    </div>
                                    
                                    
                                    <div class="container">                            
                                        <div class="row center">
                                            <div class="grid-container">

                                                
                                                <div class="linha">
                                                    <div class="coluna">
                                                        <!--<video class="responsive-video" width = "88" height = "113" controls autoplay loop> -->
                                                        <video class="responsive-video" width = "88" height = "113" controls autoplay loop>
                                                            <source src=<?php echo $lang['video-sus_escala1'];?> type = "video/mp4" />
                                                        </video>
                                                    </div>
                                                    <div class="coluna">
                                                        <video class="responsive-video" width = "88" height = "113" controls autoplay loop>
                                                            <source src=<?php echo $lang['video-sus_escala2'];?> type = "video/mp4" />
                                                        </video>
                                                    </div>
                                                    <div class="coluna">
                                                        <video class="responsive-video" width = "88" height = "113" controls autoplay loop>
                                                            <source src=<?php echo $lang['video-sus_escala3'];?> type = "video/mp4" />
                                                        </video>
                                                    </div>
                                                    <div class="coluna">
                                                        <video class="responsive-video" width = "88" height = "113" controls autoplay loop>
                                                            <source src=<?php echo $lang['video-sus_escala1'];?> type = "video/mp4" />
                                                        </video>
                                                    </div>
                                                    <div class="coluna">
                                                        <video class="responsive-video" width = "88" height = "113" controls autoplay loop>
                                                            <source src=<?php echo $lang['video-sus_escala1'];?> type = "video/mp4" />
                                                        </video>
                                                    </div>
                                                </div>
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
                                                                <input class="with-gap" name="sus_libras_pergunta1" type="radio" value="1" required="required"/>  
                                                                <span></span>
                                                            </label>
                                                        </p>
                                                    </div>
                                                    <div class="coluna"> 
                                                        <p>
                                                            <label>
                                                                <input class="with-gap" name="sus_libras_pergunta1" type="radio" value="2" required="required"/>  
                                                                <span></span>
                                                            </label>
                                                        </p>
                                                    </div>
                                                    <div class="coluna"> 
                                                        <p>
                                                            <label>
                                                                <input class="with-gap" name="sus_libras_pergunta1" type="radio" value="3" required="required"/>  
                                                                <span></span>
                                                            </label>
                                                        </p>
                                                    </div>
                                                    <div class="coluna"> 
                                                        <p>
                                                            <label>
                                                                <input class="with-gap" name="sus_libras_pergunta1" type="radio" value="4" required="required"/>  
                                                                <span></span>
                                                            </label>
                                                        </p>
                                                    </div>
                                                    <div class="coluna"> 
                                                        <p>
                                                            <label>
                                                                <input class="with-gap" name="sus_libras_pergunta1" type="radio" value="5" required="required"/>  
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

                        <!-- pergunta 3 -->
                        <div class="col s12 m12 l12">
                            <div class="card"> 
                                <div class="card-image">
                                    <div class="video-container">

                                        <!--
                                        Tela menor
                                        <video  width = "300" height = "200" controls autoplay>
                                            <source src=<?php echo $lang['video-sus_pergunta1'];?> type = "video/mp4" />
                                        </video>
                                        -->
                                        <iframe width="853" height="480" src=<?php echo $lang['video-sus_pergunta3'];?> frameborder="0" allowfullscreen></iframe> 
                                    </div> 

                                    <div class="card-content">
                                        <p><?php echo $lang['susLibras3'];?></p>
                                        <p style="font-size:10px"><?php echo $lang['susGlosa3'];?></p>
                                    </div>
                                    
                                    
                                    <div class="container">                            
                                        <div class="row center">
                                            <div class="grid-container">

                                                
                                                <div class="linha">
                                                    <div class="coluna">
                                                        <!--<video class="responsive-video" width = "88" height = "113" controls autoplay loop> -->
                                                        <video class="responsive-video" width = "88" height = "113" controls autoplay loop>
                                                            <source src=<?php echo $lang['video-sus_escala1'];?> type = "video/mp4" />
                                                        </video>
                                                    </div>
                                                    <div class="coluna">
                                                        <video class="responsive-video" width = "88" height = "113" controls autoplay loop>
                                                            <source src=<?php echo $lang['video-sus_escala2'];?> type = "video/mp4" />
                                                        </video>
                                                    </div>
                                                    <div class="coluna">
                                                        <video class="responsive-video" width = "88" height = "113" controls autoplay loop>
                                                            <source src=<?php echo $lang['video-sus_escala3'];?> type = "video/mp4" />
                                                        </video>
                                                    </div>
                                                    <div class="coluna">
                                                        <video class="responsive-video" width = "88" height = "113" controls autoplay loop>
                                                            <source src=<?php echo $lang['video-sus_escala1'];?> type = "video/mp4" />
                                                        </video>
                                                    </div>
                                                    <div class="coluna">
                                                        <video class="responsive-video" width = "88" height = "113" controls autoplay loop>
                                                            <source src=<?php echo $lang['video-sus_escala1'];?> type = "video/mp4" />
                                                        </video>
                                                    </div>
                                                </div>
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
                                                                <input class="with-gap" name="sus_libras_pergunta1" type="radio" value="1" required="required"/>  
                                                                <span></span>
                                                            </label>
                                                        </p>
                                                    </div>
                                                    <div class="coluna"> 
                                                        <p>
                                                            <label>
                                                                <input class="with-gap" name="sus_libras_pergunta1" type="radio" value="2" required="required"/>  
                                                                <span></span>
                                                            </label>
                                                        </p>
                                                    </div>
                                                    <div class="coluna"> 
                                                        <p>
                                                            <label>
                                                                <input class="with-gap" name="sus_libras_pergunta1" type="radio" value="3" required="required"/>  
                                                                <span></span>
                                                            </label>
                                                        </p>
                                                    </div>
                                                    <div class="coluna"> 
                                                        <p>
                                                            <label>
                                                                <input class="with-gap" name="sus_libras_pergunta1" type="radio" value="4" required="required"/>  
                                                                <span></span>
                                                            </label>
                                                        </p>
                                                    </div>
                                                    <div class="coluna"> 
                                                        <p>
                                                            <label>
                                                                <input class="with-gap" name="sus_libras_pergunta1" type="radio" value="5" required="required"/>  
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

                        <!-- pergunta 4 -->
                        <div class="col s12 m12 l12">
                            <div class="card"> 
                                <div class="card-image">
                                    <div class="video-container">

                                        <!--
                                        Tela menor
                                        <video  width = "300" height = "200" controls autoplay>
                                            <source src=<?php echo $lang['video-sus_pergunta1'];?> type = "video/mp4" />
                                        </video>
                                        -->
                                        <iframe width="853" height="480" src=<?php echo $lang['video-sus_pergunta4'];?> frameborder="0" allowfullscreen></iframe> 
                                    </div> 

                                    <div class="card-content">
                                        <p><?php echo $lang['susLibras4'];?></p>
                                        <p style="font-size:10px"><?php echo $lang['susGlosa4'];?></p>
                                    </div>
                                    
                                    
                                    <div class="container">                            
                                        <div class="row center">
                                            <div class="grid-container">

                                                
                                                <div class="linha">
                                                    <div class="coluna">
                                                        <!--<video class="responsive-video" width = "88" height = "113" controls autoplay loop> -->
                                                        <video class="responsive-video" width = "88" height = "113" controls autoplay loop>
                                                            <source src=<?php echo $lang['video-sus_escala1'];?> type = "video/mp4" />
                                                        </video>
                                                    </div>
                                                    <div class="coluna">
                                                        <video class="responsive-video" width = "88" height = "113" controls autoplay loop>
                                                            <source src=<?php echo $lang['video-sus_escala2'];?> type = "video/mp4" />
                                                        </video>
                                                    </div>
                                                    <div class="coluna">
                                                        <video class="responsive-video" width = "88" height = "113" controls autoplay loop>
                                                            <source src=<?php echo $lang['video-sus_escala3'];?> type = "video/mp4" />
                                                        </video>
                                                    </div>
                                                    <div class="coluna">
                                                        <video class="responsive-video" width = "88" height = "113" controls autoplay loop>
                                                            <source src=<?php echo $lang['video-sus_escala1'];?> type = "video/mp4" />
                                                        </video>
                                                    </div>
                                                    <div class="coluna">
                                                        <video class="responsive-video" width = "88" height = "113" controls autoplay loop>
                                                            <source src=<?php echo $lang['video-sus_escala1'];?> type = "video/mp4" />
                                                        </video>
                                                    </div>
                                                </div>
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
                                                                <input class="with-gap" name="sus_libras_pergunta1" type="radio" value="1" required="required"/>  
                                                                <span></span>
                                                            </label>
                                                        </p>
                                                    </div>
                                                    <div class="coluna"> 
                                                        <p>
                                                            <label>
                                                                <input class="with-gap" name="sus_libras_pergunta1" type="radio" value="2" required="required"/>  
                                                                <span></span>
                                                            </label>
                                                        </p>
                                                    </div>
                                                    <div class="coluna"> 
                                                        <p>
                                                            <label>
                                                                <input class="with-gap" name="sus_libras_pergunta1" type="radio" value="3" required="required"/>  
                                                                <span></span>
                                                            </label>
                                                        </p>
                                                    </div>
                                                    <div class="coluna"> 
                                                        <p>
                                                            <label>
                                                                <input class="with-gap" name="sus_libras_pergunta1" type="radio" value="4" required="required"/>  
                                                                <span></span>
                                                            </label>
                                                        </p>
                                                    </div>
                                                    <div class="coluna"> 
                                                        <p>
                                                            <label>
                                                                <input class="with-gap" name="sus_libras_pergunta1" type="radio" value="5" required="required"/>  
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

                        <!-- pergunta 5 -->
                        <div class="col s12 m12 l12">
                            <div class="card"> 
                                <div class="card-image">
                                    <div class="video-container">

                                        <!--
                                        Tela menor
                                        <video  width = "300" height = "200" controls autoplay>
                                            <source src=<?php echo $lang['video-sus_pergunta1'];?> type = "video/mp4" />
                                        </video>
                                        -->
                                        <iframe width="853" height="480" src=<?php echo $lang['video-sus_pergunta5'];?> frameborder="0" allowfullscreen></iframe> 
                                    </div> 

                                    <div class="card-content">
                                        <p><?php echo $lang['susLibras5'];?></p>
                                        <p style="font-size:10px"><?php echo $lang['susGlosa5'];?></p>
                                    </div>
                                    
                                    
                                    <div class="container">                            
                                        <div class="row center">
                                            <div class="grid-container">

                                                
                                                <div class="linha">
                                                    <div class="coluna">
                                                        <!--<video class="responsive-video" width = "88" height = "113" controls autoplay loop> -->
                                                        <video class="responsive-video" width = "88" height = "113" controls autoplay loop>
                                                            <source src=<?php echo $lang['video-sus_escala1'];?> type = "video/mp4" />
                                                        </video>
                                                    </div>
                                                    <div class="coluna">
                                                        <video class="responsive-video" width = "88" height = "113" controls autoplay loop>
                                                            <source src=<?php echo $lang['video-sus_escala2'];?> type = "video/mp4" />
                                                        </video>
                                                    </div>
                                                    <div class="coluna">
                                                        <video class="responsive-video" width = "88" height = "113" controls autoplay loop>
                                                            <source src=<?php echo $lang['video-sus_escala3'];?> type = "video/mp4" />
                                                        </video>
                                                    </div>
                                                    <div class="coluna">
                                                        <video class="responsive-video" width = "88" height = "113" controls autoplay loop>
                                                            <source src=<?php echo $lang['video-sus_escala1'];?> type = "video/mp4" />
                                                        </video>
                                                    </div>
                                                    <div class="coluna">
                                                        <video class="responsive-video" width = "88" height = "113" controls autoplay loop>
                                                            <source src=<?php echo $lang['video-sus_escala1'];?> type = "video/mp4" />
                                                        </video>
                                                    </div>
                                                </div>
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
                                                                <input class="with-gap" name="sus_libras_pergunta1" type="radio" value="1" required="required"/>  
                                                                <span></span>
                                                            </label>
                                                        </p>
                                                    </div>
                                                    <div class="coluna"> 
                                                        <p>
                                                            <label>
                                                                <input class="with-gap" name="sus_libras_pergunta1" type="radio" value="2" required="required"/>  
                                                                <span></span>
                                                            </label>
                                                        </p>
                                                    </div>
                                                    <div class="coluna"> 
                                                        <p>
                                                            <label>
                                                                <input class="with-gap" name="sus_libras_pergunta1" type="radio" value="3" required="required"/>  
                                                                <span></span>
                                                            </label>
                                                        </p>
                                                    </div>
                                                    <div class="coluna"> 
                                                        <p>
                                                            <label>
                                                                <input class="with-gap" name="sus_libras_pergunta1" type="radio" value="4" required="required"/>  
                                                                <span></span>
                                                            </label>
                                                        </p>
                                                    </div>
                                                    <div class="coluna"> 
                                                        <p>
                                                            <label>
                                                                <input class="with-gap" name="sus_libras_pergunta1" type="radio" value="5" required="required"/>  
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

                        <!-- pergunta 6 -->
                        <div class="col s12 m12 l12">
                            <div class="card"> 
                                <div class="card-image">
                                    <div class="video-container">

                                        <!--
                                        Tela menor
                                        <video  width = "300" height = "200" controls autoplay>
                                            <source src=<?php echo $lang['video-sus_pergunta1'];?> type = "video/mp4" />
                                        </video>
                                        -->
                                        <iframe width="853" height="480" src=<?php echo $lang['video-sus_pergunta6'];?> frameborder="0" allowfullscreen></iframe> 
                                    </div> 

                                    <div class="card-content">
                                        <p><?php echo $lang['susLibras6'];?></p>
                                        <p style="font-size:10px"><?php echo $lang['susGlosa6'];?></p>
                                    </div>
                                    
                                    
                                    <div class="container">                            
                                        <div class="row center">
                                            <div class="grid-container">

                                                
                                                <div class="linha">
                                                    <div class="coluna">
                                                        <!--<video class="responsive-video" width = "88" height = "113" controls autoplay loop> -->
                                                        <video class="responsive-video" width = "88" height = "113" controls autoplay loop>
                                                            <source src=<?php echo $lang['video-sus_escala1'];?> type = "video/mp4" />
                                                        </video>
                                                    </div>
                                                    <div class="coluna">
                                                        <video class="responsive-video" width = "88" height = "113" controls autoplay loop>
                                                            <source src=<?php echo $lang['video-sus_escala2'];?> type = "video/mp4" />
                                                        </video>
                                                    </div>
                                                    <div class="coluna">
                                                        <video class="responsive-video" width = "88" height = "113" controls autoplay loop>
                                                            <source src=<?php echo $lang['video-sus_escala3'];?> type = "video/mp4" />
                                                        </video>
                                                    </div>
                                                    <div class="coluna">
                                                        <video class="responsive-video" width = "88" height = "113" controls autoplay loop>
                                                            <source src=<?php echo $lang['video-sus_escala1'];?> type = "video/mp4" />
                                                        </video>
                                                    </div>
                                                    <div class="coluna">
                                                        <video class="responsive-video" width = "88" height = "113" controls autoplay loop>
                                                            <source src=<?php echo $lang['video-sus_escala1'];?> type = "video/mp4" />
                                                        </video>
                                                    </div>
                                                </div>
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
                                                                <input class="with-gap" name="sus_libras_pergunta1" type="radio" value="1" required="required"/>  
                                                                <span></span>
                                                            </label>
                                                        </p>
                                                    </div>
                                                    <div class="coluna"> 
                                                        <p>
                                                            <label>
                                                                <input class="with-gap" name="sus_libras_pergunta1" type="radio" value="2" required="required"/>  
                                                                <span></span>
                                                            </label>
                                                        </p>
                                                    </div>
                                                    <div class="coluna"> 
                                                        <p>
                                                            <label>
                                                                <input class="with-gap" name="sus_libras_pergunta1" type="radio" value="3" required="required"/>  
                                                                <span></span>
                                                            </label>
                                                        </p>
                                                    </div>
                                                    <div class="coluna"> 
                                                        <p>
                                                            <label>
                                                                <input class="with-gap" name="sus_libras_pergunta1" type="radio" value="4" required="required"/>  
                                                                <span></span>
                                                            </label>
                                                        </p>
                                                    </div>
                                                    <div class="coluna"> 
                                                        <p>
                                                            <label>
                                                                <input class="with-gap" name="sus_libras_pergunta1" type="radio" value="5" required="required"/>  
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

                        <!-- pergunta 7 -->
                        <div class="col s12 m12 l12">
                            <div class="card"> 
                                <div class="card-image">
                                    <div class="video-container">

                                        <!--
                                        Tela menor
                                        <video  width = "300" height = "200" controls autoplay>
                                            <source src=<?php echo $lang['video-sus_pergunta1'];?> type = "video/mp4" />
                                        </video>
                                        -->
                                        <iframe width="853" height="480" src=<?php echo $lang['video-sus_pergunta7'];?> frameborder="0" allowfullscreen></iframe> 
                                    </div> 

                                    <div class="card-content">
                                        <p><?php echo $lang['susLibras7'];?></p>
                                        <p style="font-size:10px"><?php echo $lang['susGlosa7'];?></p>
                                    </div>
                                    
                                    
                                    <div class="container">                            
                                        <div class="row center">
                                            <div class="grid-container">

                                                
                                                <div class="linha">
                                                    <div class="coluna">
                                                        <!--<video class="responsive-video" width = "88" height = "113" controls autoplay loop> -->
                                                        <video class="responsive-video" width = "88" height = "113" controls autoplay loop>
                                                            <source src=<?php echo $lang['video-sus_escala1'];?> type = "video/mp4" />
                                                        </video>
                                                    </div>
                                                    <div class="coluna">
                                                        <video class="responsive-video" width = "88" height = "113" controls autoplay loop>
                                                            <source src=<?php echo $lang['video-sus_escala2'];?> type = "video/mp4" />
                                                        </video>
                                                    </div>
                                                    <div class="coluna">
                                                        <video class="responsive-video" width = "88" height = "113" controls autoplay loop>
                                                            <source src=<?php echo $lang['video-sus_escala3'];?> type = "video/mp4" />
                                                        </video>
                                                    </div>
                                                    <div class="coluna">
                                                        <video class="responsive-video" width = "88" height = "113" controls autoplay loop>
                                                            <source src=<?php echo $lang['video-sus_escala1'];?> type = "video/mp4" />
                                                        </video>
                                                    </div>
                                                    <div class="coluna">
                                                        <video class="responsive-video" width = "88" height = "113" controls autoplay loop>
                                                            <source src=<?php echo $lang['video-sus_escala1'];?> type = "video/mp4" />
                                                        </video>
                                                    </div>
                                                </div>
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
                                                                <input class="with-gap" name="sus_libras_pergunta1" type="radio" value="1" required="required"/>  
                                                                <span></span>
                                                            </label>
                                                        </p>
                                                    </div>
                                                    <div class="coluna"> 
                                                        <p>
                                                            <label>
                                                                <input class="with-gap" name="sus_libras_pergunta1" type="radio" value="2" required="required"/>  
                                                                <span></span>
                                                            </label>
                                                        </p>
                                                    </div>
                                                    <div class="coluna"> 
                                                        <p>
                                                            <label>
                                                                <input class="with-gap" name="sus_libras_pergunta1" type="radio" value="3" required="required"/>  
                                                                <span></span>
                                                            </label>
                                                        </p>
                                                    </div>
                                                    <div class="coluna"> 
                                                        <p>
                                                            <label>
                                                                <input class="with-gap" name="sus_libras_pergunta1" type="radio" value="4" required="required"/>  
                                                                <span></span>
                                                            </label>
                                                        </p>
                                                    </div>
                                                    <div class="coluna"> 
                                                        <p>
                                                            <label>
                                                                <input class="with-gap" name="sus_libras_pergunta1" type="radio" value="5" required="required"/>  
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

                        <!-- pergunta 8 -->
                        <div class="col s12 m12 l12">
                            <div class="card"> 
                                <div class="card-image">
                                    <div class="video-container">

                                        <!--
                                        Tela menor
                                        <video  width = "300" height = "200" controls autoplay>
                                            <source src=<?php echo $lang['video-sus_pergunta1'];?> type = "video/mp4" />
                                        </video>
                                        -->
                                        <iframe width="853" height="480" src=<?php echo $lang['video-sus_pergunta8'];?> frameborder="0" allowfullscreen></iframe> 
                                    </div> 

                                    <div class="card-content">
                                        <p><?php echo $lang['susLibras8'];?></p>
                                        <p style="font-size:10px"><?php echo $lang['susGlosa8'];?></p>
                                    </div>
                                    
                                    
                                    <div class="container">                            
                                        <div class="row center">
                                            <div class="grid-container">

                                                
                                                <div class="linha">
                                                    <div class="coluna">
                                                        <!--<video class="responsive-video" width = "88" height = "113" controls autoplay loop> -->
                                                        <video class="responsive-video" width = "88" height = "113" controls autoplay loop>
                                                            <source src=<?php echo $lang['video-sus_escala1'];?> type = "video/mp4" />
                                                        </video>
                                                    </div>
                                                    <div class="coluna">
                                                        <video class="responsive-video" width = "88" height = "113" controls autoplay loop>
                                                            <source src=<?php echo $lang['video-sus_escala2'];?> type = "video/mp4" />
                                                        </video>
                                                    </div>
                                                    <div class="coluna">
                                                        <video class="responsive-video" width = "88" height = "113" controls autoplay loop>
                                                            <source src=<?php echo $lang['video-sus_escala3'];?> type = "video/mp4" />
                                                        </video>
                                                    </div>
                                                    <div class="coluna">
                                                        <video class="responsive-video" width = "88" height = "113" controls autoplay loop>
                                                            <source src=<?php echo $lang['video-sus_escala1'];?> type = "video/mp4" />
                                                        </video>
                                                    </div>
                                                    <div class="coluna">
                                                        <video class="responsive-video" width = "88" height = "113" controls autoplay loop>
                                                            <source src=<?php echo $lang['video-sus_escala1'];?> type = "video/mp4" />
                                                        </video>
                                                    </div>
                                                </div>
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
                                                                <input class="with-gap" name="sus_libras_pergunta1" type="radio" value="1" required="required"/>  
                                                                <span></span>
                                                            </label>
                                                        </p>
                                                    </div>
                                                    <div class="coluna"> 
                                                        <p>
                                                            <label>
                                                                <input class="with-gap" name="sus_libras_pergunta1" type="radio" value="2" required="required"/>  
                                                                <span></span>
                                                            </label>
                                                        </p>
                                                    </div>
                                                    <div class="coluna"> 
                                                        <p>
                                                            <label>
                                                                <input class="with-gap" name="sus_libras_pergunta1" type="radio" value="3" required="required"/>  
                                                                <span></span>
                                                            </label>
                                                        </p>
                                                    </div>
                                                    <div class="coluna"> 
                                                        <p>
                                                            <label>
                                                                <input class="with-gap" name="sus_libras_pergunta1" type="radio" value="4" required="required"/>  
                                                                <span></span>
                                                            </label>
                                                        </p>
                                                    </div>
                                                    <div class="coluna"> 
                                                        <p>
                                                            <label>
                                                                <input class="with-gap" name="sus_libras_pergunta1" type="radio" value="5" required="required"/>  
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

                        <!-- pergunta 9 -->
                        <div class="col s12 m12 l12">
                            <div class="card"> 
                                <div class="card-image">
                                    <div class="video-container">

                                        <!--
                                        Tela menor
                                        <video  width = "300" height = "200" controls autoplay>
                                            <source src=<?php echo $lang['video-sus_pergunta1'];?> type = "video/mp4" />
                                        </video>
                                        -->
                                        <iframe width="853" height="480" src=<?php echo $lang['video-sus_pergunta9'];?> frameborder="0" allowfullscreen></iframe> 
                                    </div> 

                                    <div class="card-content">
                                        <p><?php echo $lang['susLibras9'];?></p>
                                        <p style="font-size:10px"><?php echo $lang['susGlosa9'];?></p>
                                    </div>
                                    
                                    
                                    <div class="container">                            
                                        <div class="row center">
                                            <div class="grid-container">

                                                
                                                <div class="linha">
                                                    <div class="coluna">
                                                        <!--<video class="responsive-video" width = "88" height = "113" controls autoplay loop> -->
                                                        <video class="responsive-video" width = "88" height = "113" controls autoplay loop>
                                                            <source src=<?php echo $lang['video-sus_escala1'];?> type = "video/mp4" />
                                                        </video>
                                                    </div>
                                                    <div class="coluna">
                                                        <video class="responsive-video" width = "88" height = "113" controls autoplay loop>
                                                            <source src=<?php echo $lang['video-sus_escala2'];?> type = "video/mp4" />
                                                        </video>
                                                    </div>
                                                    <div class="coluna">
                                                        <video class="responsive-video" width = "88" height = "113" controls autoplay loop>
                                                            <source src=<?php echo $lang['video-sus_escala3'];?> type = "video/mp4" />
                                                        </video>
                                                    </div>
                                                    <div class="coluna">
                                                        <video class="responsive-video" width = "88" height = "113" controls autoplay loop>
                                                            <source src=<?php echo $lang['video-sus_escala1'];?> type = "video/mp4" />
                                                        </video>
                                                    </div>
                                                    <div class="coluna">
                                                        <video class="responsive-video" width = "88" height = "113" controls autoplay loop>
                                                            <source src=<?php echo $lang['video-sus_escala1'];?> type = "video/mp4" />
                                                        </video>
                                                    </div>
                                                </div>
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
                                                                <input class="with-gap" name="sus_libras_pergunta1" type="radio" value="1" required="required"/>  
                                                                <span></span>
                                                            </label>
                                                        </p>
                                                    </div>
                                                    <div class="coluna"> 
                                                        <p>
                                                            <label>
                                                                <input class="with-gap" name="sus_libras_pergunta1" type="radio" value="2" required="required"/>  
                                                                <span></span>
                                                            </label>
                                                        </p>
                                                    </div>
                                                    <div class="coluna"> 
                                                        <p>
                                                            <label>
                                                                <input class="with-gap" name="sus_libras_pergunta1" type="radio" value="3" required="required"/>  
                                                                <span></span>
                                                            </label>
                                                        </p>
                                                    </div>
                                                    <div class="coluna"> 
                                                        <p>
                                                            <label>
                                                                <input class="with-gap" name="sus_libras_pergunta1" type="radio" value="4" required="required"/>  
                                                                <span></span>
                                                            </label>
                                                        </p>
                                                    </div>
                                                    <div class="coluna"> 
                                                        <p>
                                                            <label>
                                                                <input class="with-gap" name="sus_libras_pergunta1" type="radio" value="5" required="required"/>  
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
                        
                        <!-- pergunta 10 -->
                        <div class="col s12 m12 l12">
                            <div class="card"> 
                                <div class="card-image">
                                    <div class="video-container">

                                        <!--
                                        Tela menor
                                        <video  width = "300" height = "200" controls autoplay>
                                            <source src=<?php echo $lang['video-sus_pergunta10'];?> type = "video/mp4" />
                                        </video>
                                        -->
                                        <iframe width="853" height="480" src=<?php echo $lang['video-sus_pergunta10'];?> frameborder="0" allowfullscreen></iframe> 
                                    </div> 

                                    <div class="card-content">
                                        <p><?php echo $lang['susLibras10'];?></p>
                                        <p style="font-size:10px"><?php echo $lang['susGlosa10'];?></p>
                                    </div>
                                    
                                    
                                    <div class="container">                            
                                        <div class="row center">
                                            <div class="grid-container">

                                                
                                                <div class="linha">
                                                    <div class="coluna">
                                                        <!--<video class="responsive-video" width = "88" height = "113" controls autoplay loop> -->
                                                        <video class="responsive-video" width = "88" height = "113" controls autoplay loop>
                                                            <source src=<?php echo $lang['video-sus_escala1'];?> type = "video/mp4" />
                                                        </video>
                                                    </div>
                                                    <div class="coluna">
                                                        <video class="responsive-video" width = "88" height = "113" controls autoplay loop>
                                                            <source src=<?php echo $lang['video-sus_escala2'];?> type = "video/mp4" />
                                                        </video>
                                                    </div>
                                                    <div class="coluna">
                                                        <video class="responsive-video" width = "88" height = "113" controls autoplay loop>
                                                            <source src=<?php echo $lang['video-sus_escala3'];?> type = "video/mp4" />
                                                        </video>
                                                    </div>
                                                    <div class="coluna">
                                                        <video class="responsive-video" width = "88" height = "113" controls autoplay loop>
                                                            <source src=<?php echo $lang['video-sus_escala1'];?> type = "video/mp4" />
                                                        </video>
                                                    </div>
                                                    <div class="coluna">
                                                        <video class="responsive-video" width = "88" height = "113" controls autoplay loop>
                                                            <source src=<?php echo $lang['video-sus_escala1'];?> type = "video/mp4" />
                                                        </video>
                                                    </div>
                                                </div>
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
                                                                <input class="with-gap" name="sus_libras_pergunta1" type="radio" value="1" required="required"/>  
                                                                <span></span>
                                                            </label>
                                                        </p>
                                                    </div>
                                                    <div class="coluna"> 
                                                        <p>
                                                            <label>
                                                                <input class="with-gap" name="sus_libras_pergunta1" type="radio" value="2" required="required"/>  
                                                                <span></span>
                                                            </label>
                                                        </p>
                                                    </div>
                                                    <div class="coluna"> 
                                                        <p>
                                                            <label>
                                                                <input class="with-gap" name="sus_libras_pergunta1" type="radio" value="3" required="required"/>  
                                                                <span></span>
                                                            </label>
                                                        </p>
                                                    </div>
                                                    <div class="coluna"> 
                                                        <p>
                                                            <label>
                                                                <input class="with-gap" name="sus_libras_pergunta1" type="radio" value="4" required="required"/>  
                                                                <span></span>
                                                            </label>
                                                        </p>
                                                    </div>
                                                    <div class="coluna"> 
                                                        <p>
                                                            <label>
                                                                <input class="with-gap" name="sus_libras_pergunta1" type="radio" value="5" required="required"/>  
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
                </div>
            </div>
        </form>        

    </main>

</body>

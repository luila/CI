<?php include "language.php"?>
    <body>
        <main>
            <div class="section no-pad-bot" id="index-banner">
                <div class="container">
                    <div class="row center">
                        <div class="col s12 m10 offset-m1 bottom-line">
                            <h1 class="header"><?php echo $lang['questionnaire'];?></h1>
                        </div>

                        <!-- Primeiro quadro - Nome-->

                        <div class="col s12">          
                            <div class="card" style="width: 45rem;">
                                <div class="card-image">
                                    <div class="video-container">
                                        <!-- <iframe width="853" height="480" src=<?php echo $lang['video-solicitar-interprete'];?> frameborder="0" allowfullscreen></iframe> -->
                                        <iframe width="853" height="480" src="//www.youtube.com/embed/Q8TXgCzxEnw?rel=0" frameborder="0" allowfullscreen></iframe>
                                    </div>    
                                </div>
                                <div class="card-content">
                                    <p><?php echo $lang['registerName'];?></p>
                                </div>                

                                <div class="row">
                                    <?php echo validation_errors('<div class="card-panel red lighten-5">','</div>'); ?>
                                    <div class="row">
                                        <div class="input-field col s11">
                                        <i class="mdi-action-account-circle prefix"></i>            
                                        <input id="name" name="name" type="text" class="validate" data-length="100" maxlength="100">
                                        <!-- label for="name"><?php echo $lang['name'];?></label> -->
                                    </div>
                                </div>

                                <div class="card-action">
                                    <!-- <a href="<?php echo site_url('Main/event?lang=' . $_SESSION['lang'])?>" class="waves-effect waves-light btn-small indigo modal-trigger"><?php echo $lang['registerEvent'];?></a> -->
                                    <a href="<?php echo site_url('Main/replyquestionnaire?lang=' . $_SESSION['lang'])?>" class="waves-effect waves-light btn-small indigo modal-trigger"><?php echo $lang['saveAge'];?></a>
                                </div> 
                            </div>
                        </div> 
                        <br/>

                        <!-- Segundo quadro - Idade -->

                        <div class="col s12 m12 offset-m-1">          
                            <div class="card">
                                <div class="card-image">
                                    <div class="video-container">
                                        <!-- <iframe width="853" height="480" src=<?php echo $lang['video-solicitar-interprete'];?> frameborder="0" allowfullscreen></iframe> -->
                                        <iframe width="853" height="480" src="//www.youtube.com/embed/Q8TXgCzxEnw?rel=0" frameborder="0" allowfullscreen></iframe>
                                    </div>    
                                </div>                            

                                <div class="row">
                                    </br>
                                    </br>
                                    </br>
                                    <div class="input-field col s12">
                                        <select>
                                            <option value="" disabled selected>Clique e informe sua idade.</option>
                                            <option value="18">18</option>
                                            <option value="19">19</option>
                                            <option value="20">20</option>
                                            <option value="21">21</option>
                                            <option value="22">22</option>
                                            <option value="23">23</option>
                                            <option value="24">24</option>
                                            <option value="25">25</option>
                                            <option value="26">26</option>
                                            <option value="27">27</option>
                                            <option value="28">28</option>
                                            <option value="29">29</option>
                                            <option value="30">30</option>
                                            <option value="31">31</option>
                                            <option value="32">32</option>
                                            <option value="33">33</option>
                                            <option value="34">34</option> 
                                            <option value="35">35</option>
                                            <option value="36">36</option>
                                            <option value="37">37</option>
                                            <option value="38">38</option>
                                            <option value="39">39</option>
                                            <option value="40">40</option>
                                            <option value="41">41</option>
                                            <option value="42">42</option>
                                            <option value="43">43</option>
                                            <option value="44">44</option>
                                            <option value="45">45</option>
                                            <option value="46">46</option>
                                            <option value="47">47</option> 
                                            <option value="48">48</option>
                                            <option value="49">49</option>
                                            <option value="50">50</option>
                                            <option value="51">51</option>
                                            <option value="52">52</option>
                                            <option value="53">53</option>
                                            <option value="54">54</option>
                                            <option value="55">55</option>
                                            <option value="56">56</option>
                                            <option value="57">57</option>
                                            <option value="58">58</option>
                                            <option value="59">59</option>
                                            <option value="60">60</option>
                                            <option value="61">61</option>
                                            <option value="62">62</option>
                                            <option value="63">63</option>
                                            <option value="64">64</option>
                                            <option value="65">65</option>
                                            <option value="66">66</option> 
                                            <option value="67">67</option>
                                            <option value="68">68</option>
                                            <option value="69">69</option>
                                            <option value="70">70</option>
                                            <option value="71">71</option>
                                            <option value="72">72</option>
                                            <option value="73">73</option>
                                            <option value="74">74</option>
                                            <option value="75">75</option>
                                            <option value="76">76</option>
                                            <option value="77">77</option>
                                            <option value="78">78</option>
                                            <option value="79">79</option>
                                            <option value="80">80</option>
                                            <option value="81">81</option>
                                            <option value="82">82</option>
                                            <option value="83">83</option>
                                            <option value="84">84</option>
                                            <option value="85">85</option>
                                            <option value="86">86</option>
                                            <option value="87">87</option>
                                            <option value="88">88</option>
                                            <option value="89">89</option>
                                            <option value="90">90</option>
                                            <option value="91">91</option>
                                            <option value="92">92</option>
                                            <option value="93">93</option>
                                            <option value="94">94</option>
                                            <option value="95">95</option>
                                            <option value="96">96</option>
                                            <option value="97">97</option>
                                            <option value="98">98</option>
                                            <option value="99">99</option>
                                            <option value="100">100</option>                                       
                                        </select>
                                        <!-- <label>Materialize Select</label> -->
                                    </div>
                                </div>

                                <div class="card-action">
                                    <!-- <a href="<?php echo site_url('Main/event?lang=' . $_SESSION['lang'])?>" class="waves-effect waves-light btn-small indigo modal-trigger"><?php echo $lang['registerEvent'];?></a> -->
                                    <a href="<?php echo site_url('Main/replyquestionnaire?lang=' . $_SESSION['lang'])?>" class="waves-effect waves-light btn-small indigo modal-trigger"><?php echo $lang['saveAge'];?></a>
                                </div> 
                            </div>
                        </div> 

                        <!-- Terceiro quadro - Cidade -->

                        <div class="col s12 ">          
                            <div class="card">
                                <div class="card-image">
                                    <div class="video-container">
                                        <!-- <iframe width="853" height="480" src=<?php echo $lang['video-solicitar-interprete'];?> frameborder="0" allowfullscreen></iframe> -->
                                        <iframe width="853" height="480" src="//www.youtube.com/embed/Q8TXgCzxEnw?rel=0" frameborder="0" allowfullscreen></iframe>
                                    </div>    
                                </div>

                                <div class="card-content">
                                    <p><?php echo $lang['registerCity'];?></p>
                                </div> 

                                <div class="row">    
                                    <?php echo validation_errors('<div class="card-panel red lighten-5">','</div>'); ?>
                                    <div class="row">
                                        <div class="input-field col s11">
                                        <i class="mdi-action-account-circle prefix"></i>            
                                        <input id="cidade" name="cidade" type="text" class="validate" data-length="50" maxlength="50">
                                        <!-- label for="name"><?php echo $lang['cidade'];?></label> -->
                                    </div>
                                </div>

                                <div class="card-action">
                                    <!-- <a href="<?php echo site_url('Main/event?lang=' . $_SESSION['lang'])?>" class="waves-effect waves-light btn-small indigo modal-trigger"><?php echo $lang['registerEvent'];?></a> -->
                                    <a href="<?php echo site_url('Main/replyquestionnaire?lang=' . $_SESSION['lang'])?>" class="waves-effect waves-light btn-small indigo modal-trigger"><?php echo $lang['saveAge'];?></a>
                                </div>                          
                            </div> 
                        </div>  

                        <!-- Quarto quadro - Estado -->

                        <div class="col-md-4">          
                            <div class="card center" style="width:670px">
                                <div class="card-image">
                                    <div class="video-container">
                                        <!-- <iframe width="853" height="480" src=<?php echo $lang['video-solicitar-interprete'];?> frameborder="0" allowfullscreen></iframe> -->
                                        <iframe width="853" height="480" src="//www.youtube.com/embed/Q8TXgCzxEnw?rel=0" frameborder="0" allowfullscreen></iframe>
                                    </div>    
                                </div>                            

                                <div class="row">
                                    </br>
                                    </br>
                                    </br>
                                    <div class="input-field col s12">
                                        <select>
                                            <option value="" disabled selected>Clique e selecione o estado onde você mora.</option>
                                            <option value="1">AC</option>
                                            <option value="2">AL</option>
                                            <option value="3">AP</option>
                                            <option value="4">AM</option>
                                            <option value="6">BA</option>
                                            <option value="7">CE</option>
                                            <option value="8">DF</option>
                                            <option value="9">ES</option>
                                            <option value="10">GO</option>
                                            <option value="11">MA</option>
                                            <option value="12">MT</option>
                                            <option value="13">MS</option>
                                            <option value="14">MG</option>
                                            <option value="15">PA</option>
                                            <option value="16">PB</option>
                                            <option value="17">PR</option>
                                            <option value="18">PE</option> 
                                            <option value="19">PI</option>
                                            <option value="20">RJ</option>
                                            <option value="21">RN</option>
                                            <option value="22">RS</option>
                                            <option value="23">RO</option>
                                            <option value="24">RR</option>
                                            <option value="25">SC</option>
                                            <option value="26">SP</option>
                                            <option value="27">SE</option>
                                            <option value="28">TO</option>                                        
                                        </select>
                                    </div>
                                </div>

                                <div class="card-action">
                                    <a href="<?php echo site_url('Main/replyquestionnaire?lang=' . $_SESSION['lang'])?>" class="waves-effect waves-light btn-small indigo modal-trigger"><?php echo $lang['saveAge'];?></a>
                                </div> 
                            </div>
                        </div>  

                        <!-- Quinto quadro - Sexo -->

                        <div class="col s12">          
                            <div class="card">
                                <div class="card-image">
                                    <div class="video-container">
                                        <!-- <iframe width="853" height="480" src=<?php echo $lang['video-solicitar-interprete'];?> frameborder="0" allowfullscreen></iframe> -->
                                        <iframe width="853" height="480" src="//www.youtube.com/embed/Q8TXgCzxEnw?rel=0" frameborder="0" allowfullscreen></iframe>
                                    </div>    
                                </div>
                                <div class="card-content">
                                    <p><?php echo $lang['registerSex'];?></p>
                                </div>                

                                <div class="row">
                                    <div class="col s4"
                                            <form action="#">
                                                <p>
                                                    <label>
                                                        <input class="with-gap" name="group1" type="radio"  />  
                                                        <span>Masculino</span>
                                                    </label>
                                                </p>
                                                <p>
                                                    <label>
                                                        <input class="with-gap" name="group1" type="radio"  />
                                                        <span>Feminino</span>
                                                    </label>
                                                </p>
                                                <p>
                                                    <label>
                                                        <input class="with-gap" name="group1" type="radio"  />
                                                        <span>Prefiro não informar</span>
                                                    </label>
                                                </p>
                                            </form>
                                    </div>
                                </div>

                                <div class="card-action">
                                    <!-- <a href="<?php echo site_url('Main/event?lang=' . $_SESSION['lang'])?>" class="waves-effect waves-light btn-small indigo modal-trigger"><?php echo $lang['registerEvent'];?></a> -->
                                    <a href="<?php echo site_url('Main/replyquestionnaire?lang=' . $_SESSION['lang'])?>" class="waves-effect waves-light btn-small indigo modal-trigger"><?php echo $lang['saveAge'];?></a>
                                </div> 
                            </div>
                        </div> 
                        <br/>  

                        <!-- Sétimo quadro - Trabalho -->

                        <div class="col s12">          
                            <div class="card">
                                <div class="card-image">
                                    <div class="video-container">
                                        <!-- <iframe width="853" height="480" src=<?php echo $lang['video-solicitar-interprete'];?> frameborder="0" allowfullscreen></iframe> -->
                                        <iframe width="853" height="480" src="//www.youtube.com/embed/Q8TXgCzxEnw?rel=0" frameborder="0" allowfullscreen></iframe>
                                    </div>    
                                </div>
                                <div class="card-content">
                                    <p><?php echo $lang['registerWork'];?></p>
                                </div>                

                                <div class="row">
                                    <div class="col s4"
                                            <form action="#">
                                                <p>
                                                    <label>
                                                        <input class="with-gap" name="group1" type="radio"  />  
                                                        <span>Sim</span>
                                                    </label>
                                                </p>
                                                <p>
                                                    <label>
                                                        <input class="with-gap" name="group1" type="radio"  />
                                                        <span>Não</span>
                                                    </label>
                                                </p>
                                            </form>
                                    </div>
                                </div>

                                <div class="card-action">
                                    <!-- <a href="<?php echo site_url('Main/event?lang=' . $_SESSION['lang'])?>" class="waves-effect waves-light btn-small indigo modal-trigger"><?php echo $lang['registerEvent'];?></a> -->
                                    <a href="<?php echo site_url('Main/replyquestionnaire?lang=' . $_SESSION['lang'])?>" class="waves-effect waves-light btn-small indigo modal-trigger"><?php echo $lang['saveAge'];?></a>
                                </div> 
                            </div>
                        </div> 
                        <br/> 

                        <!-- Oitavo quadro - Salário -->

                        <div class="col s12">          
                            <div class="card">
                                <div class="card-image">
                                    <div class="video-container">
                                        <!-- <iframe width="853" height="480" src=<?php echo $lang['video-solicitar-interprete'];?> frameborder="0" allowfullscreen></iframe> -->
                                        <iframe width="853" height="480" src="//www.youtube.com/embed/Q8TXgCzxEnw?rel=0" frameborder="0" allowfullscreen></iframe>
                                    </div>    
                                </div>
                                <div class="card-content">
                                    <p><?php echo $lang['registerRent'];?></p>
                                </div>                

                                <div class="row">
                                    <div class="col s6"
                                            <form action="#">
                                                <p>
                                                    <label>
                                                        <input class="with-gap" name="group1" type="radio"  />  
                                                        <span>Sem renda</span>
                                                    </label>
                                                </p>
                                                <p>
                                                    <label>
                                                        <input class="with-gap" name="group1" type="radio"  />
                                                        <span>< R$ 800,00</span>
                                                    </label>
                                                </p>
                                                <p>
                                                    <label>
                                                        <input class="with-gap" name="group1" type="radio"  />
                                                        <span>Entre R$ 800,00 e 3.000,00 </span>
                                                    </label>
                                                </p>
                                                <p>
                                                    <label>
                                                        <input class="with-gap" name="group1" type="radio"  />
                                                        <span>> R$ 3.000,00</span>
                                                    </label>
                                                </p>
                                            </form>
                                    </div>
                                </div>

                                <div class="card-action">
                                    <!-- <a href="<?php echo site_url('Main/event?lang=' . $_SESSION['lang'])?>" class="waves-effect waves-light btn-small indigo modal-trigger"><?php echo $lang['registerEvent'];?></a> -->
                                    <a href="<?php echo site_url('Main/replyquestionnaire?lang=' . $_SESSION['lang'])?>" class="waves-effect waves-light btn-small indigo modal-trigger"><?php echo $lang['saveAge'];?></a>
                                </div> 
                            </div>
                        </div> 
                        <br/>

                        <!-- Nono quadro - Casamento -->

                        <div class="col s12">          
                            <div class="card">
                                <div class="card-image">
                                    <div class="video-container">
                                        <!-- <iframe width="853" height="480" src=<?php echo $lang['video-solicitar-interprete'];?> frameborder="0" allowfullscreen></iframe> -->
                                        <iframe width="853" height="480" src="//www.youtube.com/embed/Q8TXgCzxEnw?rel=0" frameborder="0" allowfullscreen></iframe>
                                    </div>    
                                </div>
                                <div class="card-content">
                                    <p><?php echo $lang['registerMarriage'];?></p>
                                </div>                

                                <div class="row">
                                    <div class="col s4"
                                            <form action="#">
                                                <p>
                                                    <label>
                                                        <input class="with-gap" name="group1" type="radio"  />  
                                                        <span>Sim</span>
                                                    </label>
                                                </p>
                                                <p>
                                                    <label>
                                                        <input class="with-gap" name="group1" type="radio"  />
                                                        <span>Não</span>
                                                    </label>
                                                </p>
                                            </form>
                                    </div>
                                </div>

                                <div class="card-action">
                                    <!-- <a href="<?php echo site_url('Main/event?lang=' . $_SESSION['lang'])?>" class="waves-effect waves-light btn-small indigo modal-trigger"><?php echo $lang['registerEvent'];?></a> -->
                                    <a href="<?php echo site_url('Main/replyquestionnaire?lang=' . $_SESSION['lang'])?>" class="waves-effect waves-light btn-small indigo modal-trigger"><?php echo $lang['saveAge'];?></a>
                                </div> 
                            </div>
                        </div> 
                        <br/> 

                        <!-- Décimo quadro - Filhos -->

                        <div class="col s12">          
                            <div class="card">
                                <div class="card-image">
                                    <div class="video-container">
                                        <!-- <iframe width="853" height="480" src=<?php echo $lang['video-solicitar-interprete'];?> frameborder="0" allowfullscreen></iframe> -->
                                        <iframe width="853" height="480" src="//www.youtube.com/embed/Q8TXgCzxEnw?rel=0" frameborder="0" allowfullscreen></iframe>
                                    </div>    
                                </div>
                                <div class="card-content">
                                    <p><?php echo $lang['registerChildren'];?></p>
                                </div>                

                                <div class="row">
                                    <div class="col s4"
                                        <form action="#">
                                            <p>
                                                <label>
                                                    <input class="with-gap" name="group1" type="radio"  />  
                                                    <span>Sim</span>
                                                </label>
                                            </p>
                                            <p>
                                                <label>
                                                    <input class="with-gap" name="group1" type="radio"  />
                                                    <span>Não</span>
                                                </label>
                                            </p>
                                        </form>
                                    </div>
                                </div>
								
								<div class="card-action">
										<!-- <a href="<?php echo site_url('Main/event?lang=' . $_SESSION['lang'])?>" class="waves-effect waves-light btn-small indigo modal-trigger"><?php echo $lang['registerEvent'];?></a> -->
										<a href="<?php echo site_url('Main/replyquestionnaire?lang=' . $_SESSION['lang'])?>" class="waves-effect waves-light btn-small indigo modal-trigger"><?php echo $lang['saveAge'];?></a>
									</div> 
								</div>
							</div>
						</div> 
						<br/>

                        <!-- Décimo primeiro quadro - Escolaridade -->

                        <div class="col s12">          
                            <div class="card">
                                <div class="card-image">
                                    <div class="video-container">
                                        <!-- <iframe width="853" height="480" src=<?php echo $lang['video-solicitar-interprete'];?> frameborder="0" allowfullscreen></iframe> -->
                                        <iframe width="853" height="480" src="//www.youtube.com/embed/Q8TXgCzxEnw?rel=0" frameborder="0" allowfullscreen></iframe>
                                    </div>    
                                </div>
                                <div class="card-content">
                                    <p><?php echo $lang['registerScholarity'];?></p>
                                </div>                

                                <div class="row">
                                    <div class="col s10"
                                        <form action="#">
                                            <p>
                                                <label>
                                                    <input class="with-gap" name="group1" type="radio"  />  
                                                    <span>Sem instrução (ou menos de 1 ano de estudo)</span>
                                                </label>
                                            </p>
                                            <p>
                                                <label>
                                                    <input class="with-gap" name="group1" type="radio"  />
                                                    <span>Ensino fundamental completo (entre 1 e 6 anos de estudo)</span>
                                                </label>
                                            </p>
											<p>
                                                <label>
                                                    <input class="with-gap" name="group1" type="radio"  />  
                                                    <span>Ensino Médio completo (entre 6 e 11 anos de estudo)</span>
                                                </label>
                                            </p>
                                            <p>
                                                <label>
                                                    <input class="with-gap" name="group1" type="radio"  />
                                                    <span>Ensino superior completo ou acima (12 ou mais anos de estudo)</span>
                                                </label>
                                            </p>
                                        </form>
                                    </div>
                                </div>
								
								<div class="card-action">
										<!-- <a href="<?php echo site_url('Main/event?lang=' . $_SESSION['lang'])?>" class="waves-effect waves-light btn-small indigo modal-trigger"><?php echo $lang['registerEvent'];?></a> -->
										<a href="<?php echo site_url('Main/replyquestionnaire?lang=' . $_SESSION['lang'])?>" class="waves-effect waves-light btn-small indigo modal-trigger"><?php echo $lang['saveAge'];?></a>
									</div> 
								</div>
							</div>
						</div> 
						<br/> 

                        <!-- 12º quadro - Surdez -->

                        <div class="col s12">          
                            <div class="card">
                                <div class="card-image">
                                    <div class="video-container">
                                        <!-- <iframe width="853" height="480" src=<?php echo $lang['video-solicitar-interprete'];?> frameborder="0" allowfullscreen></iframe> -->
                                        <iframe width="853" height="480" src="//www.youtube.com/embed/Q8TXgCzxEnw?rel=0" frameborder="0" allowfullscreen></iframe>
                                    </div>    
                                </div>
                                <div class="card-content">
                                    <p><?php echo $lang['registerDeafness'];?></p>
                                </div>                

                                <div class="row">
                                    <div class="col s4"
                                        <form action="#">
                                            <p>
                                                <label>
                                                    <input class="with-gap" name="group1" type="radio"  />  
                                                    <span>Surdo</span>
                                                </label>
                                            </p>
                                            <p>
                                                <label>
                                                    <input class="with-gap" name="group1" type="radio"  />
                                                    <span>Não surdo</span>
                                                </label>
                                            </p>
											
                                        </form>
                                    </div>
                                </div>
								
								<div class="card-action">
										<!-- <a href="<?php echo site_url('Main/event?lang=' . $_SESSION['lang'])?>" class="waves-effect waves-light btn-small indigo modal-trigger"><?php echo $lang['registerEvent'];?></a> -->
										<a href="<?php echo site_url('Main/replyquestionnaire?lang=' . $_SESSION['lang'])?>" class="waves-effect waves-light btn-small indigo modal-trigger"><?php echo $lang['saveAge'];?></a>
									</div> 
								</div>
							</div>
						</div> 
						<br/>

                        <!-- 13º quadro - Libras -->

                        <div class="col s12">          
                            <div class="card">
                                <div class="card-image">
                                    <div class="video-container">
                                        <!-- <iframe width="853" height="480" src=<?php echo $lang['video-solicitar-interprete'];?> frameborder="0" allowfullscreen></iframe> -->
                                        <iframe width="853" height="480" src="//www.youtube.com/embed/Q8TXgCzxEnw?rel=0" frameborder="0" allowfullscreen></iframe>
                                    </div>    
                                </div>                            

                                <div class="row">
                                    </br>
                                    </br>
                                    </br>
                                    <div class="input-field col s12">
                                        <select>
                                            <option value="" disabled selected>Desque qual idade você é sinalizante da Libras?</option>
											<option value="1">Não sou sinalizante da Libras.</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                            <option value="6">6</option>
                                            <option value="7">7</option>
                                            <option value="8">8</option>
                                            <option value="9">9</option>
                                            <option value="10">10</option>
                                            <option value="11">11</option>
                                            <option value="12">12</option>
                                            <option value="13">13</option>
                                            <option value="14">14</option>
                                            <option value="15">15</option>
                                            <option value="16">16</option>
                                            <option value="17">17</option>
                                            <option value="18">18</option>
                                            <option value="19">19</option>
                                            <option value="20">20</option>
                                            <option value="21">21</option>
                                            <option value="22">22</option>
                                            <option value="23">23</option>
                                            <option value="24">24</option>
                                            <option value="25">25</option>
                                            <option value="26">26</option>
                                            <option value="27">27</option>
                                            <option value="28">28</option>
                                            <option value="29">29</option>
                                            <option value="30">30</option>
                                            <option value="31">31</option>
                                            <option value="32">32</option>
                                            <option value="33">33</option>
                                            <option value="34">34</option> 
                                            <option value="35">35</option>
                                            <option value="36">36</option>
                                            <option value="37">37</option>
                                            <option value="38">38</option>
                                            <option value="39">39</option>
                                            <option value="40">40</option>
                                            <option value="41">41</option>
                                            <option value="42">42</option>
                                            <option value="43">43</option>
                                            <option value="44">44</option>
                                            <option value="45">45</option>
                                            <option value="46">46</option>
                                            <option value="47">47</option> 
                                            <option value="48">48</option>
                                            <option value="49">49</option>
                                            <option value="50">50</option>
                                            <option value="51">51</option>
                                            <option value="52">52</option>
                                            <option value="53">53</option>
                                            <option value="54">54</option>
                                            <option value="55">55</option>
                                            <option value="56">56</option>
                                            <option value="57">57</option>
                                            <option value="58">58</option>
                                            <option value="59">59</option>
                                            <option value="60">60</option>
                                            <option value="61">61</option>
                                            <option value="62">62</option>
                                            <option value="63">63</option>
                                            <option value="64">64</option>
                                            <option value="65">65</option>
                                            <option value="66">66</option> 
                                            <option value="67">67</option>
                                            <option value="68">68</option>
                                            <option value="69">69</option>
                                            <option value="70">70</option>
                                            <option value="71">71</option>
                                            <option value="72">72</option>
                                            <option value="73">73</option>
                                            <option value="74">74</option>
                                            <option value="75">75</option>
                                            <option value="76">76</option>
                                            <option value="77">77</option>
                                            <option value="78">78</option>
                                            <option value="79">79</option>
                                            <option value="80">80</option>
                                            <option value="81">81</option>
                                            <option value="82">82</option>
                                            <option value="83">83</option>
                                            <option value="84">84</option>
                                            <option value="85">85</option>
                                            <option value="86">86</option>
                                            <option value="87">87</option>
                                            <option value="88">88</option>
                                            <option value="89">89</option>
                                            <option value="90">90</option>
                                            <option value="91">91</option>
                                            <option value="92">92</option>
                                            <option value="93">93</option>
                                            <option value="94">94</option>
                                            <option value="95">95</option>
                                            <option value="96">96</option>
                                            <option value="97">97</option>
                                            <option value="98">98</option>
                                            <option value="99">99</option>
                                            <option value="100">100</option>                                       
                                        </select>
                                        <!-- <label>Materialize Select</label> -->
                                    </div>
                                </div>

                                <div class="card-action">
                                    <!-- <a href="<?php echo site_url('Main/event?lang=' . $_SESSION['lang'])?>" class="waves-effect waves-light btn-small indigo modal-trigger"><?php echo $lang['registerEvent'];?></a> -->
                                    <a href="<?php echo site_url('Main/replyquestionnaire?lang=' . $_SESSION['lang'])?>" class="waves-effect waves-light btn-small indigo modal-trigger"><?php echo $lang['saveAge'];?></a>
                                </div> 
                            </div>
                        </div>
                        <br/>

                        <!-- 14º quadro - Pais -->

                        <div class="col s12">          
                            <div class="card">
                                <div class="card-image">
                                    <div class="video-container">
                                        <!-- <iframe width="853" height="480" src=<?php echo $lang['video-solicitar-interprete'];?> frameborder="0" allowfullscreen></iframe> -->
                                        <iframe width="853" height="480" src="//www.youtube.com/embed/Q8TXgCzxEnw?rel=0" frameborder="0" allowfullscreen></iframe>
                                    </div>    
                                </div>
                                <div class="card-content">
                                    <p><?php echo $lang['registerParents'];?></p>
                                </div>                

                                <div class="row">
                                    <div class="col s4"
                                        <form action="#">
                                            <p>
                                                <label>
                                                    <input class="with-gap" name="group1" type="radio"  />  
                                                    <span>Sim</span>
                                                </label>
                                            </p>
                                            <p>
                                                <label>
                                                    <input class="with-gap" name="group1" type="radio"  />
                                                    <span>Não</span>
                                                </label>
                                            </p>
											
                                        </form>
                                    </div>
                                </div>
								
								<div class="card-action">
										<!-- <a href="<?php echo site_url('Main/event?lang=' . $_SESSION['lang'])?>" class="waves-effect waves-light btn-small indigo modal-trigger"><?php echo $lang['registerEvent'];?></a> -->
										<a href="<?php echo site_url('Main/replyquestionnaire?lang=' . $_SESSION['lang'])?>" class="waves-effect waves-light btn-small indigo modal-trigger"><?php echo $lang['saveAge'];?></a>
									</div> 
								</div>
							</div>
						</div> 
						<br/> 

                        <!-- 15º quadro - Pais -->

                        <div class="col s12">          
                            <div class="card">
                                <div class="card-image">
                                    <div class="video-container">
                                        <!-- <iframe width="853" height="480" src=<?php echo $lang['video-solicitar-interprete'];?> frameborder="0" allowfullscreen></iframe> -->
                                        <iframe width="853" height="480" src="//www.youtube.com/embed/Q8TXgCzxEnw?rel=0" frameborder="0" allowfullscreen></iframe>
                                    </div>    
                                </div>
                                <div class="card-content">
                                    <p><?php echo $lang['registerParentsDeafness'];?></p>
                                </div>                

                                <div class="row">
                                    <div class="col s4"
                                        <form action="#">
                                            <p>
                                                <label>
                                                    <input class="with-gap" name="group1" type="radio"  />  
                                                    <span>Sim</span>
                                                </label>
                                            </p>
                                            <p>
                                                <label>
                                                    <input class="with-gap" name="group1" type="radio"  />
                                                    <span>Não</span>
                                                </label>
                                            </p>
											
                                        </form>
                                    </div>
                                </div>
								
								<div class="card-action">
									<!-- <a href="<?php echo site_url('Main/event?lang=' . $_SESSION['lang'])?>" class="waves-effect waves-light btn-small indigo modal-trigger"><?php echo $lang['registerEvent'];?></a> -->
									<a href="<?php echo site_url('Main/replyquestionnaire?lang=' . $_SESSION['lang'])?>" class="waves-effect waves-light btn-small indigo modal-trigger"><?php echo $lang['saveAge'];?></a>
								
								</div>
							</div>
						</div> 
						<br/>







                    </div>   
                    
                </div>
            </div>
        </main>

    </body>

<?php include "language.php"?>
<body>
    <main>

        <div class="section no-pad-bot" id="index-banner">
            <div class="container">
                <div class="row center">
                    <div class="col s12 m10 offset-m1 bottom-line">
                        <h3 class="header"><?php echo $lang['questionnaire'];?></h3>
                    </div>

                    <!-- 1º quadro - Idade -->
                    <!-- div class="col s12 m12 offset-m-1"> -->
                    <div class="col s12">
                        <div class="card">
                            <div class="card-image">
                                <div class="video-container">
                                    <iframe width="853" height="480" src="//www.youtube.com/embed/Q8TXgCzxEnw?rel=0" frameborder="0" allowfullscreen></iframe>
                                </div>     
                                
                                <div class="card-content">
                                    <p><?php echo $lang['registerAge'];?></p>
                                </div>

                                <div class="container">
                                    <div class="row">
                                        </br></br>
                                        <div class="input-field col s12 m12 center-align">                                    
                                            <select>
                                                <option value="" disabled selected>Clique aqui</option>
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
                                            <!-- <label>Images in select</label>  -->
                                        </div>                                          
                                    </div> 
                                </div>                              
                                <div class="card-action">
                                    <!-- <a href="<?php echo site_url('Main/event?lang=' . $_SESSION['lang'])?>" class="waves-effect waves-light btn-small indigo modal-trigger"><?php echo $lang['registerEvent'];?></a> -->
                                    <a href="<?php echo site_url('Main/replyquestionnaire?lang=' . $_SESSION['lang'])?>" class="waves-effect waves-light btn-small indigo modal-trigger"><?php echo $lang['saveAge'];?></a>
                                </div>                
                            </div>                            
                        </div>                     
                    </div>   

                    <!-- 2º quadro - Cidade -->
                    <div class="col s12">
                        <div class="card">
                            <div class="card-image">
                                <div class="video-container">
                                    <iframe width="853" height="480" src="//www.youtube.com/embed/Q8TXgCzxEnw?rel=0" frameborder="0" allowfullscreen></iframe>
                                 </div>         

                                <div class="card-content">
                                    <p><?php echo $lang['registerCity'];?></p>
                                </div>
                                    
                                <div class="container">
                                    <div class="row">
                                        <div class="input-field col s12">
                                            <input id="cidade" type="text" class="validate">
                                            <label for="cidade">Cidade</label>
                                        </div>
                                    </div>
                                </div>                                   
                                <div class="card-action">
                                    <!-- <a href="<?php echo site_url('Main/event?lang=' . $_SESSION['lang'])?>" class="waves-effect waves-light btn-small indigo modal-trigger"><?php echo $lang['registerEvent'];?></a> -->
                                    <a href="<?php echo site_url('Main/replyquestionnaire?lang=' . $_SESSION['lang'])?>" class="waves-effect waves-light btn-small indigo modal-trigger"><?php echo $lang['saveAge'];?></a>
                                </div>                  
                            </div>
                        </div>
                    </div>

                    <!-- 3º quadro - Estado -->
                    <div class="col s12">
                        <div class="card">
                            <div class="card-image">
                                <div class="video-container">
                                    <iframe width="853" height="480" src="//www.youtube.com/embed/Q8TXgCzxEnw?rel=0" frameborder="0" allowfullscreen></iframe>
                                </div>    
                                
                                <div class="card-content">
                                    <p><?php echo $lang['registerState'];?></p>
                                </div>

                                <div class="container">
                                    <div class="row">
                                        </br></br>
                                        <div class="input-field col s12 m12 center-align">                                            
                                            <select>
                                                <option value="" disabled selected>Clique aqui</option>
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
                                </div>                              
                                <div class="card-action">
                                    <!-- <a href="<?php echo site_url('Main/event?lang=' . $_SESSION['lang'])?>" class="waves-effect waves-light btn-small indigo modal-trigger"><?php echo $lang['registerEvent'];?></a> -->
                                    <a href="<?php echo site_url('Main/replyquestionnaire?lang=' . $_SESSION['lang'])?>" class="waves-effect waves-light btn-small indigo modal-trigger"><?php echo $lang['saveAge'];?></a>
                                </div>             
                                
                            </div>
                        </div>  
                    </div>

                    <!-- 4º quadro - Sexo -->
                    <div class="col s12">
                        <div class="card">
                            <div class="card-image">
                                <div class="video-container">
                                    <iframe width="853" height="480" src="//www.youtube.com/embed/Q8TXgCzxEnw?rel=0" frameborder="0" allowfullscreen></iframe>
                                </div>                             

                                <div class="card-content">
									<p><?php echo $lang['registerSex'];?></p>
								</div>   

								<div class="container">
									<div class="row center">
                                        <!-- <div class="col s6 left-align offset-m3"> -->
										<div class="col s11 left-align offset-m1">
											<form action="#">   
												<p>
													<label>
														<input class="with-gap" name="group1" type="radio"  />  
														<span>1- Masculino</span>
													</label>
												</p>
												<p>
													<label>
														<input class="with-gap" name="group1" type="radio"  />
														<span>2- Feminino</span>
													</label>
												</p>
												<p>
													<label>
														<input class="with-gap" name="group1" type="radio"  />
														<span>3- Prefiro não informar</span>
													</label>
												</p>
											</form>
										</div>							
                                    </div>               
                                </div>
                                <div class="card-action">
                                    <!-- <a href="<?php echo site_url('Main/event?lang=' . $_SESSION['lang'])?>" class="waves-effect waves-light btn-small indigo modal-trigger"><?php echo $lang['registerEvent'];?></a> -->
                                    <a href="<?php echo site_url('Main/replyquestionnaire?lang=' . $_SESSION['lang'])?>" class="waves-effect waves-light btn-small indigo modal-trigger"><?php echo $lang['saveAge'];?></a>
                                </div> 
                            </div>
                        </div>  
                    </div>

                    <!-- 5º quadro - Trabalho-->
                    <div class="col s12">
                        <div class="card">
                            <div class="card-image">
                                <div class="video-container">
                                    <iframe width="853" height="480" src="//www.youtube.com/embed/Q8TXgCzxEnw?rel=0" frameborder="0" allowfullscreen></iframe>
                                </div>                             

                                <div class="card-content">
									<p><?php echo $lang['registerWork'];?></p>
								</div>   

								<div class="container">
									<div class="row center">
                                        <!-- <div class="col s6 left-align offset-m3"> -->
										<div class="col s11 left-align offset-m1">
											<form action="#">   
												<p>
													<label>
														<input class="with-gap" name="group1" type="radio"  />  
														<span>1- Sim</span>
													</label>
												</p>
												<p>
													<label>
														<input class="with-gap" name="group1" type="radio"  />
														<span>2- Não</span>
													</label>
												</p>											
											</form>
										</div>							
                                    </div>               
                                </div>
                                <div class="card-action">
                                    <!-- <a href="<?php echo site_url('Main/event?lang=' . $_SESSION['lang'])?>" class="waves-effect waves-light btn-small indigo modal-trigger"><?php echo $lang['registerEvent'];?></a> -->
                                    <a href="<?php echo site_url('Main/replyquestionnaire?lang=' . $_SESSION['lang'])?>" class="waves-effect waves-light btn-small indigo modal-trigger"><?php echo $lang['saveAge'];?></a>
                                </div> 
                            </div>
                        </div>  
                    </div>

                    <!-- 6º quadro - Salário-->
                    <div class="col s12">
                        <div class="card">
                            <div class="card-image">
                                <div class="video-container">
                                    <iframe width="853" height="480" src="//www.youtube.com/embed/Q8TXgCzxEnw?rel=0" frameborder="0" allowfullscreen></iframe>
                                </div>                             

                                <div class="card-content">
									<p><?php echo $lang['registerRent'];?></p>
								</div>   

								<div class="container">
									<div class="row center">
                                        <!-- <div class="col s6 left-align offset-m3"> -->
										<div class="col s11 left-align offset-m1">
											<form action="#">   
												<p>
													<label>
														<input class="with-gap" name="group1" type="radio"  />  
														<span>1- Sem Renda</span>
													</label>
												</p>
												<p>
													<label>
														<input class="with-gap" name="group1" type="radio"  />
														<span>2- < R$ 1.100,00</span>
													</label>
												</p>
                                                <p>
													<label>
														<input class="with-gap" name="group1" type="radio"  />
														<span>3- Entre R$ 1.100,00 e R$ 3.000,00</span>
													</label>
												</p>
                                                <p>
													<label>
														<input class="with-gap" name="group1" type="radio"  />
														<span>4- > R$ 3.000,00</span>
													</label>
												</p>											
											</form>
										</div>							
                                    </div>                                     
                                </div>
                                <div class="card-action">
                                    <!-- <a href="<?php echo site_url('Main/event?lang=' . $_SESSION['lang'])?>" class="waves-effect waves-light btn-small indigo modal-trigger"><?php echo $lang['registerEvent'];?></a> -->
                                    <a href="<?php echo site_url('Main/replyquestionnaire?lang=' . $_SESSION['lang'])?>" class="waves-effect waves-light btn-small indigo modal-trigger"><?php echo $lang['saveAge'];?></a>
                                </div>
                            </div>
                        </div>  
                    </div>

                    <!-- 7º quadro - Escolaridade-->
                    <div class="col s12">
                        <div class="card">
                            <div class="card-image">
                                <div class="video-container">
                                    <iframe width="853" height="480" src="//www.youtube.com/embed/Q8TXgCzxEnw?rel=0" frameborder="0" allowfullscreen></iframe>
                                </div>                             

                                <div class="card-content">
									<p><?php echo $lang['registerScholarity'];?></p>
								</div>   

								<div class="container">
									<div class="row center">
                                        <!-- <div class="col s6 left-align offset-m3"> -->
										<div class="col s11 left-align offset-m1">
											<form action="#">   
												<p>
													<label>
														<input class="with-gap" name="group1" type="radio"  />  
														<span>1- Sem instrução</span>
													</label>
												</p>
												<p>
													<label>
														<input class="with-gap" name="group1" type="radio"  />
														<span>2- Ensino Fundamental Inconpleto</span>
													</label>
												</p>
                                                <p>
													<label>
														<input class="with-gap" name="group1" type="radio"  />
														<span>3- Ensino Fundamental Completo</span>
													</label>
												</p>
                                                <p>
													<label>
														<input class="with-gap" name="group1" type="radio"  />
														<span>4- Ensino Médio Incompleto</span>
													</label>
												</p>
                                                <p>
													<label>
														<input class="with-gap" name="group1" type="radio"  />
														<span>5- Ensino Médio Completo</span>
													</label>
												</p>
                                                <p>
													<label>
														<input class="with-gap" name="group1" type="radio"  />
														<span>6- Ensino Superior Incompleto</span>
													</label>
												</p>	
                                                <p>
													<label>
														<input class="with-gap" name="group1" type="radio"  />
														<span>7- Ensino Superior Completo</span>
													</label>
												</p>	
                                                <p>
													<label>
														<input class="with-gap" name="group1" type="radio"  />
														<span>8- Pós-graduação</span>
													</label>
												</p>									
											</form>
										</div>							
                                    </div>                                     
                                </div>
                                <div class="card-action">
                                    <!-- <a href="<?php echo site_url('Main/event?lang=' . $_SESSION['lang'])?>" class="waves-effect waves-light btn-small indigo modal-trigger"><?php echo $lang['registerEvent'];?></a> -->
                                    <a href="<?php echo site_url('Main/replyquestionnaire?lang=' . $_SESSION['lang'])?>" class="waves-effect waves-light btn-small indigo modal-trigger"><?php echo $lang['saveAge'];?></a>
                                </div>
                            </div>
                        </div>  
                    </div>

                    <!-- 8º quadro - Surdez-->
                    <div class="col s12">
                        <div class="card">
                            <div class="card-image">
                                <div class="video-container">
                                    <iframe width="853" height="480" src="//www.youtube.com/embed/Q8TXgCzxEnw?rel=0" frameborder="0" allowfullscreen></iframe>
                                </div>                             

                                <div class="card-content">
									<p><?php echo $lang['registerDeafness'];?></p>
								</div>   

								<div class="container">
									<div class="row center">
                                        <!-- <div class="col s6 left-align offset-m3"> -->
										<div class="col s11 left-align offset-m1">
											<form action="#">   
												<p>
													<label>
														<input class="with-gap" name="group1" type="radio"  />  
														<span>1- Surdo</span>
													</label>
												</p>
												<p>
													<label>
														<input class="with-gap" name="group1" type="radio"  />
														<span>2- Não Surdo</span>
													</label>
												</p>											
											</form>
										</div>							
                                    </div>               
                                </div>
                                <div class="card-action">
                                    <!-- <a href="<?php echo site_url('Main/event?lang=' . $_SESSION['lang'])?>" class="waves-effect waves-light btn-small indigo modal-trigger"><?php echo $lang['registerEvent'];?></a> -->
                                    <a href="<?php echo site_url('Main/replyquestionnaire?lang=' . $_SESSION['lang'])?>" class="waves-effect waves-light btn-small indigo modal-trigger"><?php echo $lang['saveAge'];?></a>
                                </div> 
                            </div>
                        </div>  
                    </div>

                    <!-- 9º quadro - Fluência em Libras-->
                    <div class="col s12">
                        <div class="card">
                            <div class="card-image">
                                <div class="video-container">
                                    <iframe width="853" height="480" src="//www.youtube.com/embed/Q8TXgCzxEnw?rel=0" frameborder="0" allowfullscreen></iframe>
                                </div>                             

                                <div class="card-content">
									<p><?php echo $lang['registerFluency'];?></p>
								</div>   

								<div class="container">
									<div class="row center">
                                        <!-- <div class="col s6 left-align offset-m3"> -->
										<div class="col s11 left-align offset-m1">
											<form action="#">   
												<p>
													<label>
														<input class="with-gap" name="group1" type="radio"  />  
														<span>1- Sim</span>
													</label>
												</p>
												<p>
													<label>
														<input class="with-gap" name="group1" type="radio"  />
														<span>2- Não</span>
													</label>
												</p>											
											</form>
										</div>							
                                    </div>               
                                </div>
                                <div class="card-action">
                                    <!-- <a href="<?php echo site_url('Main/event?lang=' . $_SESSION['lang'])?>" class="waves-effect waves-light btn-small indigo modal-trigger"><?php echo $lang['registerEvent'];?></a> -->
                                    <a href="<?php echo site_url('Main/replyquestionnaire?lang=' . $_SESSION['lang'])?>" class="waves-effect waves-light btn-small indigo modal-trigger"><?php echo $lang['saveAge'];?></a>
                                </div> 
                            </div>
                        </div>  
                    </div>

                    <!-- 10º quadro - Idade -->
                    <!-- div class="col s12 m12 offset-m-1"> -->
                    <div class="col s12">
                        <div class="card">
                            <div class="card-image">
                                <div class="video-container">
                                    <iframe width="853" height="480" src="//www.youtube.com/embed/Q8TXgCzxEnw?rel=0" frameborder="0" allowfullscreen></iframe>
                                </div>     
                                
                                <div class="card-content">
                                    <p><?php echo $lang['registerLibras'];?></p>
                                </div>

                                <div class="container">
                                    <div class="row">
                                        </br></br>
                                        <div class="input-field col s12 m12 center-align">                                    
                                            <select>
                                                <option value="" disabled selected>Clique aqui</option>
                                                <option value="2">Não sou sinalizante da Libras.</option>
                                                <option value="3">2</option>
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
                                            <!-- <label>Images in select</label>  -->
                                        </div>                                          
                                    </div> 
                                </div>                              
                                <div class="card-action">
                                    <!-- <a href="<?php echo site_url('Main/event?lang=' . $_SESSION['lang'])?>" class="waves-effect waves-light btn-small indigo modal-trigger"><?php echo $lang['registerEvent'];?></a> -->
                                    <a href="<?php echo site_url('Main/replyquestionnaire?lang=' . $_SESSION['lang'])?>" class="waves-effect waves-light btn-small indigo modal-trigger"><?php echo $lang['saveAge'];?></a>
                                </div>                
                            </div>                            
                        </div>                     
                    </div>

                    <!-- 11º quadro - Casa-->
                    <div class="col s12">
                        <div class="card">
                            <div class="card-image">
                                <div class="video-container">
                                    <iframe width="853" height="480" src="//www.youtube.com/embed/Q8TXgCzxEnw?rel=0" frameborder="0" allowfullscreen></iframe>
                                </div>                             

                                <div class="card-content">
									<p><?php echo $lang['registerParents'];?></p>
								</div>   

								<div class="container">
									<div class="row center">
                                        <!-- <div class="col s6 left-align offset-m3"> -->
										<div class="col s11 left-align offset-m1">
											<form action="#">   
												<p>
													<label>
														<input class="with-gap" name="group1" type="radio"  />  
														<span>1- Sim</span>
													</label>
												</p>
												<p>
													<label>
														<input class="with-gap" name="group1" type="radio"  />
														<span>2- Não</span>
													</label>
												</p>											
											</form>
										</div>							
                                    </div>               
                                </div>
                                <div class="card-action">
                                    <!-- <a href="<?php echo site_url('Main/event?lang=' . $_SESSION['lang'])?>" class="waves-effect waves-light btn-small indigo modal-trigger"><?php echo $lang['registerEvent'];?></a> -->
                                    <a href="<?php echo site_url('Main/replyquestionnaire?lang=' . $_SESSION['lang'])?>" class="waves-effect waves-light btn-small indigo modal-trigger"><?php echo $lang['saveAge'];?></a>
                                </div> 
                            </div>
                        </div>  
                    </div>

                    <!-- 12º quadro - Pais surdos-->
                    <div class="col s12">
                        <div class="card">
                            <div class="card-image">
                                <div class="video-container">
                                    <iframe width="853" height="480" src="//www.youtube.com/embed/Q8TXgCzxEnw?rel=0" frameborder="0" allowfullscreen></iframe>
                                </div>                             

                                <div class="card-content">
									<p><?php echo $lang['registerParentsDeafness'];?></p>
								</div>   

								<div class="container">
									<div class="row center">
                                        <!-- <div class="col s6 left-align offset-m3"> -->
										<div class="col s11 left-align offset-m1">
											<form action="#">   
												<p>
													<label>
														<input class="with-gap" name="group1" type="radio"  />  
														<span>1- Sim</span>
													</label>
												</p>
												<p>
													<label>
														<input class="with-gap" name="group1" type="radio"  />
														<span>2- Não</span>
													</label>
												</p>											
											</form>
										</div>							
                                    </div>               
                                </div>
                                <div class="card-action">
                                    <!-- <a href="<?php echo site_url('Main/event?lang=' . $_SESSION['lang'])?>" class="waves-effect waves-light btn-small indigo modal-trigger"><?php echo $lang['registerEvent'];?></a> -->
                                    <a href="<?php echo site_url('Main/replyquestionnaire?lang=' . $_SESSION['lang'])?>" class="waves-effect waves-light btn-small indigo modal-trigger"><?php echo $lang['saveAge'];?></a>
                                </div> 
                            </div>
                        </div>  
                    </div>

                         

                </div>

            </div>
        </div>

    </main>

</body>
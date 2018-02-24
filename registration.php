<!-- Header 
=============================================== -->
<?php 
	include_once 'header.php';
 ?>

<section id="registration" class="parallax section" style=" background-image: url(http://themepush.com/demo/runcharity/assets/img/map.png);">
<div class="wrapsection">
	<div class="parallax-overlay" style="background-color: #1cbb9b;opacity:0.9;"></div>
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<!-- Title -->
                    <div class="maintitle">
                        <h3 class="section-title"><strong>Login or Register <span class="lighter">for #SERC2018</span></strong></h3> 
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nemo fuga laboriosam culpa sapiente officiis eligendi pariatur commodi vel dignissimos! Recusandae in consequatur quisquam fugiat officiis maiores quo doloribus accusamus autem.</p>
                        <p class="lead">
                            <span style="font-weight:bold; font-size:1em">Early Bird Registration $00: Date – Date, 2018</span>
                        <br/>Regular Registration $00: Date – Date, 2018                  
                        </p> 
                        	                    
                    </div> <!-- end of Title -->   								
			</div>
			
			<!-- form here -->
			<div class="row">
                <div class="col-md-6 col-md-offset-3">
                  <div class="panel panel-login">
                    <div class="panel-body">
                      <div class="row">
                        <div class="col-lg-12">
                            <!-- Login  form-->
                          <form id="login-form" action="#" method="post" role="form" style="display: block;">
                            <h2 style="color: black">LOGIN</h2>
                              <div class="form-group">
                                <input type="text" name="username" id="username" tabindex="1" class="form-control" placeholder="Username" value="">
                              </div>
                              <div class="form-group">
                                <input type="password" name="password" id="password" tabindex="2" class="form-control" placeholder="Password">
                              </div>
                              <!-- check box -->
                              <div class="col-xs-6 form-group pull-left checkbox">
                                <input id="checkbox1" type="checkbox" name="remember">
                                <label for="checkbox1" style="color:black">Remember Me</label>   
                              </div>
                              <div class="col-xs-6 form-group pull-right">     
                                    <input type="submit" name="login-submit" id="login-submit" tabindex="4" class="form-control btn btn-login" value="Log In">
                              </div>               
                          </form>
                          
                          <!-- Register form -->
                          <form id="register-form" action="#" method="post" role="form" style="display: none;">
                            <h2  style="color: black">REGISTER</h2>
                              <!-- first&last-->
                              <div class="row">
			    				<div class="col-sm-6 col-md-6">
			    					<div class="form-group">
			                            <input type="text" name="first_name" id="first_name" class="form-control input-sm" placeholder="First Name">
			    					</div>
			    				</div>
			    				<div class="col-sm-6 col-md-6">
			    					<div class="form-group">
			    						<input type="text" name="last_name" id="last_name" class="form-control input-sm" placeholder="Last Name">
			    					</div>
			    				</div>
			    			</div>
                           <!-- email & password -->
                              <div class="form-group">
                                <input type="email" name="email" id="email" tabindex="1" class="form-control" placeholder="Email Address" value="">
                              </div>
                              <div class="form-group">
                                <input type="password" name="password" id="password" tabindex="2" class="form-control" placeholder="Password">
                              </div>
                              <div class="form-group">
                                <input type="password" name="confirm-password" id="confirm-password" tabindex="2" class="form-control" placeholder="Confirm Password">
                              </div>
                            <!-- school -->
                            <div class="form-group">
                                <input type="text" name="school" id="school" class="form-control input-sm" placeholder="School Name">
			    	        </div>                                                    
                           <!-- major -->
                           <div class="form-group">
                               <input type="text" name="major" id="major" class="form-control input-sm" placeholder="Major">
                           </div>
                            <!-- school and grad -->
                           <div class="row">
                              <div class="col-sm-6 col-md-6">
                              <!-- year graduation? -->
                               <div class="form-group">
                                   <select class="form-control" name="" id="country">
                                       <option disabled selected value>Year</option>
                                       <option>1st</option>
                                       <option>2nd</option>
                                       <option>3rd</option>
                                       <option>4th</option>
                                       <option>5th and Above</option>
                                   </select>
                                 </div>
                              </div>
                              <div class="col-sm-6 col-md-6">
                                    <!-- undergrad/grad-->
                                    <div class="form-group">
                                    <!--<label style="color:black">Undergraduate/Grad?</label>-->
                                    <select class="form-control" name="" id="country">                                    
                                        <option>Undergraduate</option>
                                        <option>Graduate</option>
                                    </select>
                                   </div>
                               </div>
                              </div>
                              <!-- dietary restriction -->
                              <!-- register button-->
                              <div class="form-group">
                                <div class="row">
                                  <div class="col-sm-6 col-sm-offset-3">
                                    <input type="submit" name="register-submit" id="register-submit" tabindex="4" class="form-control btn btn-register" value="Register Now">
                                  </div>
                                </div>
                              </div>
                          </form>
                        </div>
                      </div>
                    </div>
                    <div class="panel-heading">
                      <div class="row">
                        <div class="col-xs-6 tabs">
                          <a href="#" class="active" id="login-form-link"><div class="login">LOGIN</div></a>
                        </div>
                        <div class="col-xs-6 tabs">
                          <a href="#" id="register-form-link"><div class="register">REGISTER</div></a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>            							
		</div>
	</div>
</div>
</section>


 <!-- Footer 
=============================================== -->
<?php 
	include_once 'footer.php';
 ?>
 


<!-- JS -->
<script>
    $(function() {
        $('#login-form-link').click(function(e) {
            $("#login-form").delay(100).fadeIn(100);
             $("#register-form").fadeOut(100);
            $('#register-form-link').removeClass('active');
            $(this).addClass('active');
            e.preventDefault();
        });
        $('#register-form-link').click(function(e) {
            $("#register-form").delay(100).fadeIn(100);
             $("#login-form").fadeOut(100);
            $('#login-form-link').removeClass('active');
            $(this).addClass('active');
            e.preventDefault();
        });
    
    });
</script>

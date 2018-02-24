<!-- Header 
=============================================== -->
<?php 
	include_once 'header.php';
 ?>
 
<!-- Page Content -->
<section id="resume" class="section">
<div class="wrapsection">
	<div class="container">
		<div class="row">
			<div class="col-md-12 col-sm-12">
				<div class="maintitle">
				<!-- Title -->
					<h3 class="section-title">Resumé <span class="wow bounceInRight" data-wow-duration="1.5s" data-wow-delay="0.2s">Submissions </span></h3>
					<p class="lead">
						Lorem ipsum dolor sit amet, consectetur adipisicing elit. Provident porro, vel quae ab quidem quas et modi inventore, voluptatem architecto deleniti dicta, dolore. 
					</p>
				</div>								
			</div>
			<div class="row">
			    <div class="col-md-6 col-md-offset-3" style="margin-bottom:-10em;">
                    <!-- First, Last, Email, School, Major, -->
                    <!-- code here -->
                    
			        <!-- Upfile Form starts here -->
					<div class="panel panel-default">
                        <div class="panel-heading"><strong>Upload files</strong> <small> </small></div>
                        <div class="panel-body">
                            <div class="input-group image-preview">
                                <input placeholder="" type="text" class="form-control image-preview-filename" disabled="disabled">
                                <!-- don't give a name === doesn't send on POST/GET --> 
                                <span class="input-group-btn"> 
                                <!-- image-preview-clear button -->
                                <button type="button" class="btn btn-default image-preview-clear" style="display:none;"> <span class="glyphicon glyphicon-remove"></span> Clear </button>
                                <!-- image-preview-input -->
                                <div class="btn btn-default image-preview-input" style="color:black"> <span class="glyphicon glyphicon-folder-open"></span> <span class="image-preview-input-title">Browse</span>
                                    <input type="file" accept="image/png, image/jpeg, image/gif" name="input-file-preview"/>
                                    <!-- rename it --> 
                                </div>
                                <button type="button" class="btn btn-labeled btn-primary"> <span class="btn-label"><i class="glyphicon glyphicon-upload"></i> </span>Upload</button>
                                </span> </div>
                                <!-- /input-group image-preview [TO HERE]--> 

                                <br />
                                <!-- Drop Zone -->
                                <div class="upload-drop-zone" id="drop-zone"> Or drag and drop files here </div>
                                <br />
                                <!-- Progress Bar -->
                                <div class="progress">
                                    <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;"> <span class="sr-only">60% Complete</span></div>
                                </div>                              
                        </div>
			        </div> <!-- form ends-->
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
 



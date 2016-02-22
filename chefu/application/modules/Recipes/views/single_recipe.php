<div style = "margin-top : 50px;">
    <span style = "background-image: url(<?php echo base_url(); ?>assets/img/banner2.png); margin-top:-20px;" class="bg-primary blogheader" id="">
        <div class="container">
            <div class="row">
		
                <div class="col-lg-12 text-center" style = "text-align: center;">
                   
                   
                    
                </div>
            </div>
        </div>
    </span>

    <span class="">
        <div class="container">
          <div class="row">
			  <div class = "col-lg-9">
                              
                                    <?php foreach($recipe_data->result() as $row){ ?>
                                        <h2 class = "text-center"><?php echo $row->recipeName; ?></h2>
                                        <hr>
                                        <h4 class = "text-center"><?php echo $row->recipeDescription; ?></h4>
                                        <h3 class = "text-center"><a href = "<?php echo base_url();?>Chef/dashboard">Chef </a></h3>
                                    <?php } ?>
					
					<h3>Ingredients</h3>
                                        <ol class="">
                                        <?php 
                                            
                                            foreach ($ing_data->result() as $row){ ?>
                                                <li><?php echo $row->ingredientName;?> , QTY : <?php echo $row->ingredientQty; ?> </li>
                                        <?php  }
                                        ?>
                                        </ol>
                                        
                                        
                                        
					<h3>Directions</h3>
                                        <ol>
                                        <?php 
                                            
                                            foreach ($step_data->result() as $row){ ?>
                                                <li><?php echo $row->stepDesc;?></li>
                                        <?php  }
                                        ?>
					</ol>			   
			   </div>
			   <div class = "col-lg-3 text-center">   <img class = " img-thumbnail" src="<?php echo base_url();?>assets/img/recipe.jpg"  alt=""></div>
		   </div>
		</div>
		        
		<div class = "container" style = "margin-bottom:100px;">
                        <a href = "<?php echo base_url();?>Chef/dashboard" class ="btn btn-default" style ="width: 100%" >Hire Chef For Consultancy</a>
                    </div>		
       
            
     
    </span>

    <span id="contact" style = "margin-top:20px">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 text-center">
                    
                    <h2 class="section-heading">Let's Get In Touch!</h2>
                    <hr class="primary">
                    <p>Ready to start your next project with us? That's great! Give us a call or send us an email and we will get back to you as soon as possible!</p>
                </div>
                <div class="col-lg-4 col-lg-offset-2 text-center">
                    <i class="fa fa-phone fa-3x wow bounceIn"></i>
                    <p>123-456-6789</p>
                </div>
                <div class="col-lg-4 text-center">
                    <i class="fa fa-envelope-o fa-3x wow bounceIn" data-wow-delay=".1s"></i>
                    <p><a href="mailto:your-email@your-domain.com">feedback@abc.com</a></p>
                </div>
            </div>
        </div>
    </span>
</div>    
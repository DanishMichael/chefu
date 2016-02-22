<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>We Are Chefu</title>
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/mix.css">
    <!-- Bootstrap Core CSS -->
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/bootstrap.min.css" type="text/css">

    <!-- Custom Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="<?php echo base_url();?>assets/font-awesome/css/font-awesome.min.css" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Great+Vibes' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Old+Standard+TT' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>'<link href='https://fonts.googleapis.com/css?family=Cabin+Sketch' rel='stylesheet' type='text/css'>

    <!-- Plugin CSS -->
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/animate.min.css" type="text/css">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/creative.css" type="text/css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/chef.css" type="text/css">
    
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/magnific-popup.css">
    <!--<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.5/css/materialize.min.css">-->

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->




</head>
<body onload="displaymain()">
    
        <?php 
            
        
            if($view_file != 'dashboard' && $view_file != 'maps_view' && $view_file != 'single_recipe' ) {  ?>
                <nav id="mainNav" class="navbar navbar-default navbar-fixed-top">
                    <div class="container-fluid">
                        <!-- Brand and toggle get grouped for better mobile display -->
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                            <a class="navbar-brand page-scroll" href="#page-top">We Are Chefu</a>
                        </div>

                        <!-- Collect the nav links, forms, and other content for toggling -->
                        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                            <ul class="nav navbar-nav navbar-right">
                                <li>
                                    <a class="" id="main"  onclick="showDiv(this.id)">Home</a>
                                </li>
                                <li>
                                    <a class="" id="about"  onclick="showDiv(this.id)">About</a>
                                </li>
                                <li>
                                    <a class="" id="features" onclick="showDiv(this.id)">Features</a>
                                </li>
                                <li>
                                    <a id= "cat" onclick="showDiv(this.id)" >Catagories</a>
                                </li>
                                <li>
                                    <a id= "chef" onclick="showDiv(this.id)">View Chef</a>
                                </li>
                                <li>
                                <a id= "book" onclick="showDiv(this.id)">Find A Chef</a>
                            </li>
                                <li>
                                <a id= "contact" onclick="showDiv(this.id)">Contact</a>
                            </li>
                            </ul>
                        </div>
                        <!-- /.navbar-collapse -->
                    </div>
                    <!-- /.container-fluid -->
                </nav>
                <header id="main_1" class="rock" style="background-image: url(<?php echo base_url(); ?>assets/img/spice2.png)">
                    <div class="header-content">
                        <div class=" col-lg-12 " >
                            <div class="ma-title-main text-color-light"style = "font-family: 'Great Vibes', cursive;">We are Chefu</div>
                            <hr>
                            <div class="ma-content text-color-light content-pad">Let the Hunger Games  Begin</div>


                            <a  id="chef_login" class="button orange" onclick="showDiv(this.id)">I am a Chef</a>

                             <a id ="learner" class="button orange" onclick="showDiv(this.id)" >I am a Learner</a>


                       </div>
                    </div>
                </header>
        <?php    }else{ ?>
                <nav id="mainNav" class="navbar navbar-default navbar-fixed-top">
                    <div class="container-fluid">
                        <!-- Brand and toggle get grouped for better mobile display -->
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                            <a class="navbar-brand" href="#page-top">We Are Chefu</a>
                        </div>

                        <!-- Collect the nav links, forms, and other content for toggling -->
                        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                            <ul class="nav navbar-nav navbar-right">
                                <li>
                                    <a  href = "<?php echo base_url(); ?>">Home</a>
                                </li>
                                <li>
                                    <a  href = "<?php echo base_url(); ?>">About</a>
                                </li>
                                <li>
                                    <a href = "<?php echo base_url(); ?>">Features</a>
                                </li>
                                <li>
                                    <a href = "<?php echo base_url(); ?>" >Catagories</a>
                                </li>
                                <li>
                                    <a href = "<?php echo base_url(); ?>">View Chef</a>
                                </li>
                                <li>
                                <a href = "<?php echo base_url(); ?>">Find A Chef</a>
                            </li>
                                <li>
                                <a href = "<?php echo base_url(); ?>">Contact</a>
                            </li>
                            </ul>
                        </div>
                        <!-- /.navbar-collapse -->
                    </div>
                    <!-- /.container-fluid -->
                </nav>
    
                
        <?php }
        ?>
            <?php
                if(!isset($view_file)){
                    $view_file = "";
                }
                if(!isset($module)){
                    $module = $this->uri->segment(1);
                }
                if(($view_file != "") && ($module != "")){
                $path = $module."/".$view_file;
                //die("<h1>".$path."</h1>");
                $this->load->view($path);
                }
        
            ?>
        
        <footer class="navbar navbar-default navbar-fixed-bottom down-nav" >
            <div class="container" style="padding-top:15px;;">
                <div class="col-md-6">
                    A project of DostTech
                 </div>

                <div class="col-md-6">



                </div>
            </div>
        </footer>
        
<!-- Bootstrap Core JavaScript -->
<script src="<?php echo base_url();?>assets/js/bootstrap.min.js"></script>

<!-- Plugin JavaScript -->
<script src="<?php echo base_url();?>assets/js/jquery.easing.min.js"></script>
<script src="<?php echo base_url();?>assets/js/jquery.fittext.js"></script>
<script src="<?php echo base_url();?>assets/js/wow.min.js"></script>
<!-- Custom Theme JavaScript -->
<script src="<?php echo base_url();?>assets/js/creative.js"></script>
<script src="<?php echo base_url();?>assets/js/material.js"></script>

<script>
    
 
</script>
        
</body>
</html>
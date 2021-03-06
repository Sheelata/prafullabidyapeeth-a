<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>Vision </title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta name="description" content="Your page description here" />
  <meta name="author" content="" />

  <!-- css -->
  <link href="https://fonts.googleapis.com/css?family=Handlee|Open+Sans:300,400,600,700,800" rel="stylesheet">
  <link href="css/bootstrap.css" rel="stylesheet" />
  <link href="css/bootstrap-responsive.css" rel="stylesheet" />
  <link href="css/flexslider.css" rel="stylesheet" />
  <link href="css/prettyPhoto.css" rel="stylesheet" />
  <link href="css/camera.css" rel="stylesheet" />
  <link href="css/jquery.bxslider.css" rel="stylesheet" />
  <link href="css/style.css" rel="stylesheet" />

  <!-- Theme skin -->
  <link href="color/default.css" rel="stylesheet" />

  <!-- Fav and touch icons -->
  <link rel="apple-touch-icon-precomposed" sizes="144x144" href="ico/apple-touch-icon-144-precomposed.png" />
  <link rel="apple-touch-icon-precomposed" sizes="114x114" href="ico/apple-touch-icon-114-precomposed.png" />
  <link rel="apple-touch-icon-precomposed" sizes="72x72" href="ico/apple-touch-icon-72-precomposed.png" />
  <link rel="apple-touch-icon-precomposed" href="ico/apple-touch-icon-57-precomposed.png" />
  <!--<link rel="shortcut icon" href="ico/favicon.png" />-->
<link rel="icon" href="admin/img/logo20.png">

  <!-- =======================================================
    Theme Name: Eterna
    Theme URL: https://bootstrapmade.com/eterna-free-multipurpose-bootstrap-template/
    Author: BootstrapMade.com
    Author URL: https://bootstrapmade.com
  ======================================================= -->
</head>

<body>

  <div id="wrapper">

    <!-- start header -->
    <?php include 'header.php';?>
    <!-- end header -->

     <?php  
        
                    include_once './Class/Database_class.php';
                    $databaseClass = new Database_class();  
                    $res=$databaseClass->get_infrastructure();
                    $row = mysqli_fetch_array($res);
        ?>
    
    <section id="inner-headline">
      <div class="container">
        <div class="row">
          <div class="span12">
            <div class="inner-heading">
              <ul class="breadcrumb">
                <li><a href="index.php">Home</a> <i class="icon-angle-right"></i></li> 
                <li class="active">Infrastructure</li>
              </ul>
              <h2>Infrastructure</h2>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section id="content">
      <div class="container">
        <div class="row">
          <div class="span6"> 
            <div class="blankline30"></div>
            
            <p class="aligncenter"><?php echo $row['school_building']; ?>  </p>
          </div> 
		  <div class="span6"> 
           <div class="row">
              <section id="projects">
                <ul id="thumbs" class="grid cs-style-4 portfolio">

                    
                    
                 
                  <!-- Item Project and Filter Name -->
                  <li class="item-thumbs span3 design" data-id="id-0" data-type="web">
                    <div class="item">
                      <figure>
                          <div><img src="admin/<?php echo $row['img1']; ?>" alt="" style="width: 150px; height: 150px;" /></div>
                        <figcaption>
                          <div>
                            <span>
                      <a href="admin/<?php echo $row['img1']; ?>" data-pretty="prettyPhoto[gallery1]" title="<?php echo $row['category']; ?>"><i class="icon-plus icon-circled icon-bglight icon-2x"></i></a>
                      </span>
                            <span>
                      <a href="#"><i class="icon-file icon-circled icon-bglight icon-2x"></i></a>
                      </span>
                          </div>
                        </figcaption>
                      </figure>
                    </div>
                  </li>
                  
                  
                  

                </ul>
              </section>

            </div>
          </div> 
        </div>
    </div>
    </section>
	 
	
	<section id="content">
      <div class="container">
        <div class="row">
          <div class="span6"> 
            <div class="blankline30"></div>
            
            <p class="aligncenter"><?php echo $row['shahid_minar']; ?>  </p>
          </div> 
		  <div class="span6"> 
           <div class="row">
              <section id="projects">
                <ul id="thumbs" class="grid cs-style-4 portfolio">

                    
                     
                  <!-- Item Project and Filter Name -->
                  <li class="item-thumbs span3 design" data-id="id-0" data-type="web">
                    <div class="item">
                      <figure>
                          <div><img src="admin/<?php echo $row['img3']; ?>" alt="" style="width: 150px; height: 150px;" /></div>
                        <figcaption>
                          <div>
                            <span>
                      <a href="admin/<?php echo $row['img3']; ?>" data-pretty="prettyPhoto[gallery1]" title="<?php echo $row['category']; ?>"><i class="icon-plus icon-circled icon-bglight icon-2x"></i></a>
                      </span>
                            <span>
                      <a href="#"><i class="icon-file icon-circled icon-bglight icon-2x"></i></a>
                      </span>
                          </div>
                        </figcaption>
                      </figure>
                    </div>
                  </li>
                  
              
                  

                </ul>
              </section>

            </div>
          </div> 
        </div>
    </div>
    </section>
	  
	
	<section id="content">
      <div class="container">
        <div class="row">
          <div class="span6"> 
            <div class="blankline30"></div>
            
            <p class="aligncenter"><?php echo $row['knowledge_corner']; ?>  </p>
          </div> 
		  <div class="span6"> 
           <div class="row">
              <section id="projects">
                <ul id="thumbs" class="grid cs-style-4 portfolio">

                    
                    
                  <!-- Item Project and Filter Name -->
                  <li class="item-thumbs span3 design" data-id="id-0" data-type="web">
                    <div class="item">
                      <figure>
                          <div><img src="admin/<?php echo $row['img5']; ?>" alt="" style="width: 150px; height: 150px;" /></div>
                        <figcaption>
                          <div>
                            <span>
                      <a href="admin/<?php echo $row['img5']; ?>" data-pretty="prettyPhoto[gallery1]" title="<?php echo $row['category']; ?>"><i class="icon-plus icon-circled icon-bglight icon-2x"></i></a>
                      </span>
                            <span>
                      <a href="#"><i class="icon-file icon-circled icon-bglight icon-2x"></i></a>
                      </span>
                          </div>
                        </figcaption>
                      </figure>
                    </div>
                  </li>
                  
                  
                  

                </ul>
              </section>

            </div>
          </div> 
        </div>
    </div>
    </section>
	
	 
	
	<section id="content">
      <div class="container">
        <div class="row">
          <div class="span6"> 
            <div class="blankline30"></div>
            
            <p class="aligncenter"><?php echo $row['flag_stage']; ?>  </p>
          </div> 
		  <div class="span6"> 
           <div class="row">
              <section id="projects">
                <ul id="thumbs" class="grid cs-style-4 portfolio">

                    
                     
                  <!-- Item Project and Filter Name -->
                  <li class="item-thumbs span3 design" data-id="id-0" data-type="web">
                    <div class="item">
                      <figure>
                          <div><img src="admin/<?php echo $row['img7']; ?>" alt="" style="width: 150px; height: 150px;" /></div>
                        <figcaption>
                          <div>
                            <span>
                      <a href="admin/<?php echo $row['img7']; ?>" data-pretty="prettyPhoto[gallery1]" title="<?php echo $row['category']; ?>"><i class="icon-plus icon-circled icon-bglight icon-2x"></i></a>
                      </span>
                            <span>
                      <a href="#"><i class="icon-file icon-circled icon-bglight icon-2x"></i></a>
                      </span>
                          </div>
                        </figcaption>
                      </figure>
                    </div>
                  </li>
                  
                
                  

                </ul>
              </section>

            </div>
          </div> 
        </div>
    </div>
    </section>
	
    

    <?php include 'footer.php';?>
  </div>
  <a href="#" class="scrollup"><i class="icon-angle-up icon-square icon-bglight icon-2x active"></i></a>

  <!-- javascript
    ================================================== -->
  <!-- Placed at the end of the document so the pages load faster -->
  <script src="js/jquery.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/bootstrap.js"></script>

  <script src="js/modernizr.custom.js"></script>
  <script src="js/toucheffects.js"></script>
  <script src="js/google-code-prettify/prettify.js"></script>
  <script src="js/jquery.bxslider.min.js"></script>
  <script src="js/camera/camera.js"></script>
  <script src="js/camera/setting.js"></script>

  <script src="js/jquery.prettyPhoto.js"></script>
  <script src="js/portfolio/jquery.quicksand.js"></script>
  <script src="js/portfolio/setting.js"></script>

  <script src="js/jquery.flexslider.js"></script>
  <script src="js/animate.js"></script>
  <script src="js/inview.js"></script>

  <!-- Template Custom JavaScript File -->
  <script src="js/custom.js"></script>

</body>
</html>

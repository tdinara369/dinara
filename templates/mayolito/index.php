 <?php
/****************************************************
#####################################################
##-------------------------------------------------##
##              MAYOLITO                           ##
##-------------------------------------------------##
## Copyright = globbersthemes.com- 2013            ##
## Date      = OCTOBRE 2013                        ##
## Author    = globbers                            ##
## Websites  = http://www.globbersthemes.com       ##
## version (joomla)                                ##
##                                                 ##
#####################################################
****************************************************/

// no direct access
defined('_JEXEC') or die('Restricted access');
JHtml::_('behavior.framework', true);


 $app = JFactory::getApplication();
 $templateparams     = $app->getTemplate(true)->params; 
 $csite_name	= $app->getCfg('sitename');

 ?>	

 <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">	   
 <html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php echo $this->language; ?>" lang="<?php echo $this->language; ?>" >	  
 <head>		    

 <jdoc:include type="head" /> 


    <?php  # main width#
    $mod_left = $this->countModules( 'position-5' );
    $mod_right = $this->countModules( 'position-7' );
    if ( $mod_left && $mod_right ) {
    $width = '';
    } elseif ( ($mod_left || $mod_right) ) {
    $width = '-mid';
    } else {
    $width = '-full';
    }
    ?>

 <link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/mayolito/css/tdefaut.css" type="text/css" media="all" />   
 <script type="text/javascript" src="templates/<?php echo $this->template ?>/js/jquery.js"></script>   	  
 <script type="text/javascript" src="templates/<?php echo $this->template ?>/js/superfish.js"></script>   
 <script type="text/javascript" src="templates/<?php echo $this->template ?>/js/hoverIntent.js"></script> 
 <script type="text/javascript" src="templates/<?php echo $this->template ?>/js/nivo.slider.js"></script>	 
 <script type="text/javascript" src="templates/<?php echo $this->template ?>/js/scroll.js"></script>  

 <link rel="icon" type="image/gif" href="<?php echo $this->baseurl; ?>/templates/<?php echo $this->template; ?>/favicon.gif" />	 
 <link href='http://fonts.googleapis.com/css?family=Lato:100,300,400,700,900,100italic,300italic,400italic,700italic,900italic' rel='stylesheet' type='text/css'>  
 <link href='http://fonts.googleapis.com/css?family=Oswald:100,300,400,700,900,100italic,300italic,400italic,700italic,900italic' rel='stylesheet' type='text/css'>
 <link href='http://fonts.googleapis.com/css?family=Pacifico:100,300,400,700,900,100italic,300italic,400italic,700italic,900italic' rel='stylesheet' type='text/css'>


 <script type="text/javascript">           
 var $j = jQuery.noConflict(); 	    
 $j(document).ready(function() {	    
 $j('.navigation ul').superfish({		
 delay:       800,                   
 animation:   {opacity:'show',height:'show'},  		
 speed:       'normal',                      
 autoArrows:  true,                         
 dropShadows: true                          
 });	   }); 	 
 </script>       


 <script type="text/javascript">      
 var $j = jQuery.noConflict();       
 jQuery(document).ready(function ($){   
 $j("#slider").nivoSlider(          
 {effect: "sliceUpDown",            
 slices: 15,           
 boxCols: 8,         
 boxRows: 4,         
 animSpeed: 1000,    
 pauseTime: 5000,   
 captionOpacity: 1      
 }); });          
 </script>			 

</head> 

<body>
<div id="topmenu">
    <div class="pagewidth">
        <div class="navigation">          	                     				                            
		    <jdoc:include type="modules" name="position-1" />                                               
	    </div>
    </div>
</div>
    <div id="subtop">
	    <div class="pagewidth">
		    <div id="sitename"> 				        
			    <a href="index.php"><img src="templates/<?php echo $this->template ?>/images/logo.png" width="430" height="79" alt="logotype" /></a>             
		    </div> 	
		
		    <div id="search">				    				                                           
				<jdoc:include type="modules" name="position-0" />  					                        
			</div>
        </div>		
    </div>
        <div class="pagewidth">
		    <?php $menu = JSite::getMenu(); ?>                
	        <?php $lang = JFactory::getLanguage(); ?>                
		    <?php if ($menu->getActive() == $menu->getDefault($lang->getTag())) { ?>                
		    <?php if ($this->params->get( 'slidedisable' )) : ?>   <?php include "slideshow.php"; ?><?php endif; ?>                
		    <?php } ?>
                <div id="main<?php echo $width; ?>">
	                <jdoc:include type="component"  />
                </div>
				    <div id="colonnewrap<?php echo $width; ?>">
                        <?php if ($this->countModules('position-5')) { ?>
	                        <div id="col1">
	                            <div class="element">			
	                                <jdoc:include type="modules" name="position-5" style="xhtml" />
	                            </div>
	                        </div>
	                    <?php } ?>
		
	                    <?php if ($this->countModules('position-7')) { ?>
	                        <div id="col2">
	                            <div class="element">			
	                                <jdoc:include type="modules" name="position-7" style="xhtml" />
	                            </div>
	                        </div>
	                    <?php } ?>
	                </div>
        </div>
            <div id="ft">
			<div class="pagewidth">
			   <div class="ftbl">
			        <?php echo date( 'Y' ); ?>&nbsp; <?php echo $csite_name; ?>&nbsp;&nbsp;<?php require("template.php"); ?>
                </div>
                    <div id="top">
                        <div class="top_button">
                            <a href="#" onclick="scrollToTop();return false;">
                            <img src="templates/<?php echo $this->template ?>/images/top.png" width="30" height="30" alt="top" /></a>
                        </div>
                    </div>
            </div>
            </div>			

</body> 
</html> 
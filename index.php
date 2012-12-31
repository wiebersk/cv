
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Kyle C. Wiebers Curriculum Vitae</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Curriculum Vitae for Kyle C. Wiebers">
    <meta name="author" content="Kyle Wiebers">

    <!-- Le styles -->
    <link href="../assets/css/bootstrap.css" rel="stylesheet">
    <style>
      body {
        padding-top: 60px; /* 60px to make the container go all the way to the bottom of the topbar */
      }
    </style>
    <link href="../assets/css/bootstrap-responsive.css" rel="stylesheet">

    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <!-- Le fav and touch icons -->
    <link rel="shortcut icon" href="../assets/ico/favicon.ico">
	<script type="text/javascript">

	  // var _gaq = _gaq || [];
	  // _gaq.push(['_setAccount', 'UA-9939917-3']);
	  // _gaq.push(['_setDomainName', 'philipithomas.com']);
	  // _gaq.push(['_trackPageview']);

	  // (function() {
	  //   var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
	  //   ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
	  //   var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
	  // })();

	</script>
  
  </head>

<body class="preview" data-spy="scroll" data-target=".subnav" data-offset="80">
<!--
    <div class="navbar navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container">
          <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            </a>
          <a class="brand" href="#">Curriculum Vitae</a>
          <div class="nav-collapse collapse">
            <ul class="nav">
              <li><a href="#about">About</a></li>
              <li><a href="#education">Education</a></li>
              <li><a href="#experience">Experience</a></li>
              <li><a href="#technical">Technical</a></li>
              <li><a href="#honors">Honors</a></li>
              
            </ul>
            <div class="nav-collapse collapse pull-right">
            <ul class="nav">
              <li><a href="http://philipithomas.com" target="_blank>">Homepage</a></li>
              <li class="dropdown ">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            Links <i class="caret"></i>
                            </a>

                   <ul class="dropdown-menu ">
                                <li><a href="http://linkedin.com/in/philiptihomas" target="_blank">LinkedIn</a></li>
                <li><a href="http://github.com/philipithomas" target="_blank">Github</a></li>
                <li><a href="http://twitter.com/philipithomas" target="_blank"><i class="icon-off"></i> Sign Out</a></li>
            </ul>
               </li>
              <li><a href="/resume.pdf">Download PDF</a></li>          
            </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
-->
    <div class="container">
	
	<header class="jumbotron">
		
    <div class="row">
	<div class="span12">
		<h3 style="text-align: center; text-style: italic">Curriculum Vitae for</h3>
		
      <h1 style="padding: 10px 0px; text-align: center; font-size: 60px; line-height: 70px; text-transform: lowercase">Kyle C. Wiebers</h1>
	<span class="" style="text-align: center;"> 
		<address>
		<a href="http://kyle.wiebe.rs" target="_blank">kyle.wiebe.rs</a><br />
		<a href="mailto:#">kyle@wiebe.rs</a><br />
		<a>+1.515.257.6830</a>
		</address>
	</span>
		</div>
    </div> 

	</header>

<section id="about">
      <div class="row">

      <div class="page-header">
 <h2>About</h2>
      </div>
          </div> 
          <div class="row">
      
 		<div class="span12"><p>
 			Kyle Wiebers is a graduate of <a href="http://www.iastate.edu">Iowa State University</a> with a major of Management Information Systems.  Kyle currently is a Solution Analyst with Kingland Systems specializing in Data Services for Financial Insitutions.  
 		</p>

 </div>
</div> 

      </section>

      <section id="education">
            <div class="row">

      <div class="page-header">
      <h2>Education</h2>
      </div>
    </div> <!-- end row -->
<?php
position("Iowa State University","Ames, IA","Bachelor of Science","5/12",'
<ul>
<li><span style="font-weight: bold">Major:</span> Management Information Systems</li>
<li><span style="font-weight: bold">Honors:</span>Above and Beyond Award Recepient - Vice President Student Affairs</li>
<li><span style="font-weight: bold">Relevant Coursework:</span></li>
//<li><span style="font-weight: bold">Senior Project:</span> Analysis of <a href="http://aisle411.com/">Aisle411</a> Usage Data <span style="font-style:italic">(In Progress)</span></li>
</ul>',"");
?>

      </section>
      
      
      
      <section id="experience">
            <div class="row">

      <div class="page-header">
      <h2>Professional and Leadership Experience </h2>
      </div>
    </div> <!-- end row -->
    <?php

    position("Kingland Systems","Ames, IA","Solution Analyst","8/11-Present",'
	<ul>
	<li></li>
	<li></li>
	</ul>','http://kingland.com');

	position("Kingland Systems","Ames, IA","Solution Analyst Intern","5/10-8/11",'
	<ul>
	<li></li>
	<li></li>
	</ul>','http://kingland.com');
	
	
	position("Iowa State University Memorial Union","Ames, IA","Information Systems Coordinator","1/09-8/10",'
	<ul>
	<li></li>
	<li></li>
	<li></li>
	</ul>',"http://mu.iastate.edu");
           ?>
    
    
      </section>
      
      <section id="technical">
            <div class="row">

      <div class="page-header">
      <h2>Technical</h2>
      </div>
    </div> <!-- end row -->
<div class="row">

	
	<div class="span8">
<?php
iprogram('IBM Information Server','55');
iprogram('Relational Databases','95');
iprogram('NoSQL Databases','55'); 
iprogram('Javascript','75');
iprogram('CSS','80');
iprogram('Node.js','80');
iprogram('Git','70');
iprogram('Ruby on Rails','80');
iprogram('PHP','75');
iprogram('Java','45');



?>
</div>
<div class="span4">
	<div class="well">
		<h4>Selected Projects</h4>
		<hr />
		<ul>
		<?php
			project('Ballychat','http://ballychat.jit.su','');
		?>
		</ul>
		<a class="pull-right btn btn-small btn-inverse" href="http://github.com/wiebersk">Github Profile <i class="icon-arrow-right icon-white"></i></a><br />
	</div>
</div>
</div>
      
      </section>
      
      
      <section id="honors">
            <div class="row">

      <div class="page-header">
      <h2>Honors and Skills</h2>
      </div>
    </div> <!-- end row -->
	<div class="row">
	<div class="span8">
	<?php
	
	// extra('Awards','
	// 	Eagle Scout<br />
	// 	Honorable Mention at 2012 Startup Weekend Columbia (<a href="http://killthelandline.com">Kill the Landline</a>)<br />
	// 	Semifinalist in <a href="http://studentstartupmadness.com">Student Startup Madness</a> (<a href="http://textreject.com">Text Reject</a>)<br />
	// 	Finalist in Spring 2011 Michigan Interactive Investments Competition');
	// extra('Language','Conversational Proficiency in Spanish');
	// extra('Organizations','The Engineers\' Club of St. Louis');
	// extra('Interests','Salsa Dancing<br /><a href="http://beer.philipithomas.com" target="_BLANK">Craft Beer</a><br />Coffee<br />Rock Climbing');
	
	?>
	</div>
	<div class="span4">
	<div class="well">
		<h4>Selected Press</h4>
		<hr />
		<ul>
		<!-- 	<li>St. Louis Business Journal: <a href="http://www.bizjournals.com/stlouis/blog/BizNext/2012/10/community-voices-philip-thomas-at.html?page=all">Philip Thomas at Startup Weekend </a></li>
				<li>Fox 2 Now: <a href="http://philipithomas.com/2012/07/food-truck-stl-on-fox-2-news-in-the-morning/">Live Interview with Food Truck Site Founder Philip I. Thomas </a></li>
				<li>Forbes: <a href="http://www.forbes.com/sites/kaipetainen/2011/11/11/washu-students-provide-teva-some-healthy-love/">WashU Students Provide Teva Some Healthy Love</a></li>
			<li>St. Louis Business Journal: <a href="http://www.bizjournals.com/stlouis/blog/BizNext/2012/09/wutevc-starts-venture-capital-lecture.html">wute.vc starts venture capital lecture series</a></li>
			<li>Fox 2 Now: <a href="http://philipithomas.com/2012/10/me-on-fox-2-news-for-text-reject/">Text Reject Founders Demonstrate Website Live on TV</a></li> -->
		</ul>
		<!-- <a class="pull-right btn btn-small btn-inverse" href="http://philipithomas.com/press">View Full Press <i class="icon-arrow-right icon-white"></I></a><br /> -->
	</div>
	</div>
	</div>


      </section>

      <footer style="padding-top: 20px;">
	<hr />
      <p style="text-align: center">&copy; <a href="http://kyle.wiebe.rs">Kyle C. Wiebers</a> 2012</p>
      </footer>      

    </div> <!-- /container -->

    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
    <script src="../assets/js/bootstrap.js"></script>

  </body>
</html>

<?php
// =========================================================
/* 

These are some functions to make uniform sections

*/

function position($company,$city,$job,$dates,$blob,$link) {
	/*
	This function is for use in the experience section. It unififes formatting for the various positions. 
	*/
	
	echo '
		<div class="row" style="padding: 35px 0 4px 0;">
			<div class="span8"><h4 style="margin: 0">'.$company;
				if (!empty($link)) {
					echo ' <a href="'.$link.'" target="_BLANK"><span class="badge">Website <i class="icon-arrow-right icon-white"></i></span></a>';
				}
			echo '</h4> 
			
			</div>	
			<div class="span4"><h4 class="pull-right hidden-phone" style="margin: 0">'.$city.'</h4>
			</div>
			
		</div> <!-- end row-->
			
		<div class="row">
			<div class="span6"><span style="font-style:italic; font-size: 15px;">'.$job.'</span></div>	
			<div class="span6">
			<span class="visible-phone label">'.$dates.'</span>
			<span class="hidden-phone pull-right" style="font-style:italic; font-size: 15px;" >'.$dates.'</span>
			
			</div>
		</div> <!-- end row-->
		';
		if (!empty($blob)) {
			echo '
			<div class="row" style="padding-top: 8px;"><div class="span12">'.$blob.'</div></div>';
			}	
			
}


function iprogram($language,$percent) {
	// Progress bars for technical section
	echo '
	<div class="row">
		<div class="span3"
		<p><h4 style="text-align: right" class="hidden-phone">'.$language.'</h4></p>
		<p><span class="badge visible-phone" style="text-align: center">'.$language.'</span></p>
		</div>
		<div class="span4">
	      <div class="progress" style="margin: 10px 0 10px 0; height: 22px;">
	        <div class="bar" style="width: '.$percent.'%;"></div>
	      </div>
	    </div>
		<div class="span1"></div>
	</div>
	';
	
}

function project($name,$look,$code) {
	// Makes lists for displaying projects
	echo '<li style="padding-top: 12px">';
	
	if (!empty($look)) {
		// link to look at completed project
		echo '<a href="'.$look.'" target="_BLANK" >'.$name.'</a>';
	}
	else {
		echo $name;
	}
	
	if (!empty($code)) {
		// link to look at completed project
		echo ' <a href="'.$code.'" target="_BLANK""><span class="badge badge-info">Code <i class="icon-arrow-right icon-white"></i></span></a>';
	}
	echo '</li>';
}

function extra($title,$blob) {
	echo '<div class="row" style="padding-top:30px">
				<div class="span3">
					<span class="pull-right hidden-phone"><strong>'.$title.'</strong></span>
					<span class="visible-phone badge">'.$title.'</span>
				</div>
				<div class="span5">
					'.$blob.'
				</div>
			</div>';
				
}
?>

<?php
// INSERT DATA HERE.

$member_data = [
	[
		"member" => "Andrew Morris",
		"title" => "Network Engineer",
	],
	[
		"member" => "Eric Turner",
		"title" => "put something"
	],
	[
		"member" => "Armani Cleopatrick",
		"title" => "Software Engineer"
	],
];

?>
<!DOCTYPE html>
<html lang="en"> 
<head>
    <title>Our amazing team</title>
    
    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Your name's resume">
    <meta name="author" content="Your name">    
    <link rel="shortcut icon" href="favicon.ico"> 
    
    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900" rel="stylesheet">
    
    <!-- FontAwesome JS-->
	<script defer src="assets/fontawesome/js/all.min.js"></script>
       
    <!-- Theme CSS -->  
    <link id="theme-style" rel="stylesheet" href="assets/css/pillar-1.css">


</head> 

<body>
    <article class="resume-wrapper text-center position-relative">
	    <div class="resume-wrapper-inner mx-auto text-start bg-white shadow-lg">
			<h1 class="py-4 text-center">OUR AMAZING TEAM</h1>
			<?php
				for ($i = 0; $i < count($member_data); $i++){
					$member = $member_data[$i];
					echo '<header class="resume-header pt-4 pt-md-0">
			    		<div class="row">
				    		<div class="col-block col-md-auto resume-picture-holder text-center text-md-start">
				        		<img class="picture" src="assets/images/' . $member['member'] . '.jpg" style="height: 200px; alt="">
				    	</div><!--//col-->
				    	<div class="col">
					    	<div class="row p-4 justify-content-center justify-content-md-between">
						    	<div class="primary-info col-auto">
							    	<h1 class="name mt-0 mb-1 text-white text-uppercase text-uppercase">' . $member['member'] . '</h1>
							    	<div class="title mb-3">' . $member['title'] . '</div>
									<a href="detail.php?index=' . $i . '" class="btn btn-secondary">See full profile</a>
						    	</div><!--//primary-info-->
						    	<div class="secondary-info col-auto mt-2">
						    	</div><!--//secondary-info-->
					   		</div><!--//row-->
					    
				    	</div><!--//col-->
			    	</div><!--//row-->
		    	</header>';
				}
			?>
		    
	    </div>
    </article> 

    
    <footer class="footer text-center pt-2 pb-5">
	    <!--/* This template is free as long as you keep the footer attribution link. If you'd like to use the template without the attribution link, you can buy the commercial license via our website: themes.3rdwavemedia.com Thank you for your support. :) */-->
        <small class="copyright">Designed with <span class="sr-only">love</span><i class="fas fa-heart"></i> by Your names</small>
    </footer>

    

</body>
</html> 


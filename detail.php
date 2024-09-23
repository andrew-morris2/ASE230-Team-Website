<?php
// INSERT DATA HERE.
$resume_data = [
	[
		"member" => "Andrew Morris",
		"title" => "Network Engineer",
		"summary" => "I am a current senior at Northern Kentucky University majoring in Cybersecurity. Throughout my time in university, I have acquired specific skills seen in cyber defense operations including utilization of various SIEM systems, implementation of diverse security controls, and proficiency in security best practices to enhance security. As a student, I have current professional experience in the IT industry as a help desk technician and system administrator for System Support Associates. I have put my knowledge acquired from various classes and projects into succesfully passing several certifications, including the CompTIA Security+ and seeking to apply acquired skills to enhance the overall security posture with a team of like-minded individuals.",
		"picture_height" => "150px",
		"contacts" => [
			"phone" => "8593079074",
			"email" => "andrew.morris0202@gmail.com",
			"linkedin" => "https://www.linkedin.com/in/andrew-morris", //placeholder link, this is what is shown on the resume page, yours will likely be too large as well
			"linkedin_link" => "https://www.linkedin.com/in/andrew-morris-b7856726a/", //this is the actual link to my linkedin since the original causes issues with formatting
			"github" => "https://github.com/andrew-morris02",
			"social" => "https://x.com/andrew_morris02"
		],

		"experience" => [
			[
				"job-title" => "Help Desk Technician/System Administrator",
				"company" => "System Support Associates",
				"date" => "May 2024 - Current",
				"description" => "Provide comprehensive IT support and system administration for a diverse range of clients, including government agencies, municipalities, healthcare organizations, non-profits, housing providers, law firms, and real estate firms. Manage and troubleshoot client networks, hardware, and software, ensuring optimal performance and security. Implement best practices in system configuration, user management, and incident resolution to meet the unique needs of each client.",
				"achievements_summary" => "As a member of a Managed Service Provider, our main focus is ensuring efficiency and uptime while fulfilling client needs.",
				"accomplishments" => [
					"Provided exceptional technical support to a wide range of clients, ensuring timely and effective resolution of IT issues and maintaining strong client relationships.",
					"Maintained 99.9% Server Uptime: Ensured high availability and reliability of client servers through proactive monitoring, timely updates, and preventive maintenance.",
					"Rapidly diagnosed and resolved critical IT incidents, minimizing downtime and ensuring swift recovery for client systems.",
					"Implemented security best practices to harden systems, reducing vulnerabilities and enhancing the security posture of client environments.",
					"Facilitated the construction of networks for new or existing clients through installation and configuration of networking devices onsite."
				],
				"technologies" => [
					"RMM Agents (Connectwise)",
					"Windows Active Directory/Azure",
					"Windows Powershell",
					"Cisco Meraki/Unifi Ubiquity",
					"VMWare",
					"Webroot"
				],
			],

			[
				"job-title" => "Debug Technician",
				"company" => "Jabil Inc.",
				"date" => "Sep 2023 - Dec 2023",
				"description" => "In summary, my role at Jabil involved a comprehensive approach to server debugging, from analyzing log files and troubleshooting using Linux tools to replacing faulty components and addressing issues mostly with PCIe. This required a keen eye for detail and a systematic approach to ensure servers met required standards for AWS.",
				"achievements_summary" => "As a Debug Technician, my role required an understanding of computer hardware and an ability to troubleshoot issues involving hardware components for AWS AI servers.",
				"accomplishments" => [
					"Worked with peers to come up with solutions to various problems and challenges that newer AWS AI server models would often come across.",
					"Played a significant role on a team of Debug Technicians accounting for nearly 70% of all passing tests for new AWS AI models.",
					"Analyzed log files meticulously to pinpoint points of failure among new test failures.",
					"Identified and resolved issues related to data and network switches that were causing testing failures, significantly increasing the number of servers successfully passing tests."
				],
				"technologies" => [
					"Linux CLI",
					"SSH",
					"PCIe",
					"Hardware Components",
					"Network/Data Switches",
					"Putty"
				],
			],

			[
				"job-title" => "Warehouse Selector",
				"company" => "Sygma",
				"date" => "May 2023 - Sep 2023",
				"description" => "As a warehouse selector at Sygma, I played a crucial role in the efficient operation of the company's warehouse and distribution center. My key responsibilities included the accurate and time selection of products for orders, ensuring our customers received their orders correctly and on time. This role required physical agility, attention to detail and strong organizational skills.",
				"achievements_summary" => "Sygma often recognized and rewarded those who excelled in their tasks. In my time at Sygma, I achieved many accomplishments including: ",
				"accomplishments" => [
					"Proposed locations for products throughout the warehouse that led to improvements in picking efficiency for warehouse selectors",
					"Maintained a minimum rate of 80 throughout my time as a selector, ensuring efficiency and ability to complete orders in a timely manner.",
					"Recognized as a top selector for the month of June picking over 1,000 products/day."
				],
				"technologies" => [
					"RFID Scanner",
					"Thin Client Terminal",
					"Pallet Jacks"
				],
			],
		],

		"skills" => [
			"main_skills" => [
				[
					"name" => "Python",
					"value" => 70
				],
				[
					"name" => "Routing and Switching",
					"value" => 60
				],
				[
					"name" => "HTML",
					"value" => 70
				],
				[
					"name" => "LAN/WAN Configuration",
					"value" => 65
				],
				[
					"name" => "Identity and Access Management",
					"value" => 68
				],
			],

			"other_skills" => [
				"Governance Risk and Compliance",
				"Azure AD Admin",
				"System Administration",
				"DHCP",
				"Vulnerability Management",
				"Secure Protocols",
				"Active Directory",
				"Windows Server",
				"Linux CLI"
			],
		],
		
		"education" => [
			[
				"degree" => "B.S Cybersecurity",
				"institution" => "Northern Kentucky University",
				"date" => "2020 - Current"
			],
			[
				"degree" => "CompTIA Security+ SYO-601",
				"institution" => "CompTIA",
				"date" => "March 21, 2024"
			],
			[
				"degree" => "MS-102 Administrator Expert",
				"institution" => "Microsoft",
				"date" => "July 14, 2024",
			],
		],
	

		"awards" => [
			[
				"award" => "Northern Kentucky Diversity Scholarship",
				"description" => "Scholarship awarded to those of diverse backgrounds and good academic standing."
			],
			[
				"award" => "A-B Honor Roll",
				"description" => "Achieved A's and B's for 3 consecutive semesters throughout collegiate career."
			],
		],

		"languages" => [
			[
				"language" => "English",
				"level" => "(Native)"
			],
			[
				"language" => "Spanish",
				"level" => "(Non-professional/Beginner)"
			],
		],

		"interests" => [
			"Exercise (Lifting)",
			"Sports",
			"Financing/Investing"
		],

		"projects" => [
			[
				"name" => "Project 1",
				"description" => "Risk management plan I wrote for CYS-310",
				"link" => "project1.pdf",
				"picture" => "risk.jpeg"
			],

			[
				"name" => "Project 2",
				"description" => "Final group project utilizing Python to perform a series of tasks",
				"link" => "project2.py",
				"picture" => "python.jpg"
			],
			[
				"name" => "Project 3",
				"description" => "New homepage I designed for System Support Associates",
				"link" => "project3/website.html",
				"picture" => "html.png"
			],
		],
	],

	[
		"member" => "Eric Turner",
		"title" => "Cyber Analyst",
		"summary" => "Current student at Northern Kentucky University. Studying Cybersecurity and plan on graduating December 2025. I enjoy hiking, watching sports, and spending time with family. Always looking to furhter my knowledge in cybersecurity and planning to obtain my first certification.",
		"picture_height" => "150px",
		"contacts" => [
			"phone" => "859446086-",
			"email" => "ericbennetturner@hotmail.com",
			"linkedin" => "https://www.linkedin.com/in/ericbennetturner/", //placeholder link, this is what is shown on the resume page, yours will likely be too large as well
			"linkedin_link" => "https://www.linkedin.com/in/ericbennetturner/", //this is the actual link to my linkedin since the original causes issues with formatting
			"github" => "https://github.com/e-turner1",
			"social" => "https://x.com/e_turner_10"
		],

		"experience" => [
			[
				"job-title" => "Warehouse Associate",
				"company" => "Amazon",
				"date" => "January 2023-August 2024",
				"description" => "Get customers orders ready to be sent out ensuring quality of the order, troubleshoot any issues that may arise with destination of package, collaborate and problem solve with a team to manage and finish workload.",
				"achievements_summary" => "As an employee of Amazon, our main priority was making sure customers orders were fulfilled and delivered on time while doing so in the safest way possible.",
				"accomplishments" => [
					"Was recognized multiple times as safety employee of the month.",
					"Building voted top 10 sortation center in the country.",
					"Recognized for having highest scan rate in the building in a week."
				],
				"technologies" => [
					"Windows Operating System",
					"Zebra Scanning Technology",
					"Webroot"
				],
			],

			[
				"job-title" => "Package Handler",
				"company" => "United Parcel Service",
				"date" => "August 2021-August 2022",
				"description" => "Loaded, unloaded, and scanned packages into trailers resulting in high productivity per hour, responsible for giving out breaks to the team and always ensuring appropriate coverage.",
				"achievements_summary" => "As a package handler at UPS, the work environment required a demand for hard work while being in unfavorable working conditions while ensuring that parcels were able to be delivered to their next destination.",
				"accomplishments" => [
					"Offered a position as a part-time supervisor along with a pay raise.",
					"Worked as a team to tackle workload and our department had the highest volume in the building.",
					"Recognized multiple times for practicing and following safety procedures."
				],
				"technologies" => [
					"Windows OS",
					"Zebra Technologies",
					"Printers"
				],
			],

			[
				"job-title" => "Floor Installer",
				"company" => "Faith Flooring",
				"date" => "March 2020 - Sep 2020",
				"description" => "Installed flooring, tore out carpet, vinyl, etc., sanded, and finished floors, shoe strip, and baseboards, gained expertise in installing and removing different kinds of flooring providing good quality.",
				"achievements_summary" => "As a floor installer, our priority was to ensure quality in our work to make customers satisfied with results",
				"accomplishments" => [
					"Received multiple five start ratings for work that I have helped accomplished",
					"Received multiple raises as a result of dependability, punctuality, and strong work ethic."
				],
				"technologies" => [
					"MacOS",
					"KrowID",
					"iOS"
				],
			],
		],

		"skills" => [
			"main_skills" => [
				[
					"name" => "Linux",
					"value" => 70
				],
				[
					"name" => "JavaScript",
					"value" => 55
				],
				[
					"name" => "HTML",
					"value" => 75
				],
				[
					"name" => "Python",
					"value" => 65
				],
				[
					"name" => "Identity and Access Management",
					"value" => 68
				],
			],

			"other_skills" => [
				"Java",
				"DevOps",
				"C++",
				"DHCP",
				"Vulnerability Management",
				"Secure Protocols",
				"Windows Powershell",
				"Balsamiq",
				"Linux CLI"
			],
		],
		
		"education" => [
			[
				"degree" => "B.S Cybersecurity",
				"institution" => "Northern Kentucky University",
				"date" => "2021 - Current"
			],

		],
	

		"awards" => [
			[
				"award" => "Northern Kentucky Diversity Scholarship",
				"description" => "Scholarship awarded to those of diverse backgrounds and good academic standing."
			],
			[
				"award" => "Founder's Scholarship",
				"description" => "Achieved by graduating high school with a 3.8 or higher GPA and maintaing a 3.0 cummulative GPA during collegiate career."
			],
		],

		"languages" => [
			[
				"language" => "English",
				"level" => "(Native)"
			],
			[
				"language" => "Spanish",
				"level" => "(Amateur)"
			],
		],

		"interests" => [
			"Hiking",
			"Sports",
			"Kayaking"
		],

		"projects" => [
			[
				"name" => "Project 1",
				"description" => "Brief description of Project 1",
				"link" => "eric_website.html",
				"picture" => "html.webp"
			],

			[
				"name" => "Project 2",
				"description" => "Brief description of Project 2",
				"link" => "Go to link",
				"picture" => "image11.webp"
			],
			[
				"name" => "Project 3",
				"description" => "Brief description of Project 3",
				"link" => "Go to link",
				"picture" => "04.webp"
			],
		],
	],
	
	[
		"member" => "Armani Cleopatrick",
		"title" => "Software engineer",
		"summary" => "Software Engineer at Mojang. University of Stanford Graduate. Looking to further knowledge by obtaining my Master's Degree at the University of Duke.",
		"picture_height" => "150px",
		"contacts" => [
			"phone" => "5137778892",
			"email" => "armanicleopatrickthefirst@yahoo.com",
			"linkedin" => "https://www.linkedin.com/in/", //placeholder link, this is what is shown on the resume page, yours will likely be too large as well
			"linkedin_link" => "https://www.linkedin.com/in/", //this is the actual link to my linkedin since the original causes issues with formatting
			"github" => "https://github.com/armani",
			"social" => "https://x.com/therealarmanicleo"
		],

		"experience" => [
			[
				"job-title" => "Senior Sofware Analyst",
				"company" => "Mojang",
				"date" => "April 2018-Current",
				"description" => "Create sofwatware for the video game Minecraft. Brainstorm new ideas and potential sofware concepts that can be implemented that will please consumers",
				"achievements_summary" => "During my time at Mojang, I have accomplished many feats and have received multiple awards including:",
				"accomplishments" => [
					"Mojang Programmer of the year.",
					"Helped develop new game patch that was implement and successful.",
					"Recently promoted to senior software analyst for dedication and creativity with programming skills."
				],
				"technologies" => [
					"Windows Operating System",
					"Powershell",
					"java",
					"git repositories"
				],
			],

			[
				"job-title" => "Sofware Engineer Intern",
				"company" => "Nike",
				"date" => "October 2016-March 2018",
				"description" => "Assigned to an e-commerce team and helped imrpove software using algorithms to match users to products.",
				"achievements_summary" => "Responsible for increase in sales for comapny through multiple accomploshments, such as:.",
				"accomplishments" => [
					"Presented software to CEO with other interns and received recognition for designs.",
					"Increased sales in shoe department by 12 percent by using algorithms to tailor customers to purchases that might interest them .",
					"Tested applications and solved issues, which reduced bugs by 4 percent."
				],
				"technologies" => [
					"Windows OS",
					"Python (Django)",
					"SQL"
				],
			],

			[
				"job-title" => "Apple Associate",
				"company" => "Apple",
				"date" => "July 2013-October 2016",
				"description" => "Provided customer service and information to customers looking to purchase apple products .",
				"achievements_summary" => "Being a salesman at apple taught me a lot of quality skills and developed me professionally. It was my first real job and prepared me for my future endeavors",
				"accomplishments" => [
					"Received the most commission and sold the most product in Januray of 2015, August 2015, and March 2016",
					"Recognized as employee of the month a total of 7 times during my time."
					
				],
				"technologies" => [
					"MacOS",
					"Scanning Technology",
					"iOS",
					"Bluetooth"
				],
			],
		],

		"skills" => [
			"main_skills" => [
				[
					"name" => "Python",
					"value" => 90
				],
				[
					"name" => "Java",
					"value" => 85
				],
				[
					"name" => "HTML/CSS/JSS",
					"value" => 95
				],
				[
					"name" => "Excel",
					"value" => 85
				],
				[
					"name" => "Identity and Access Management",
					"value" => 90
				],
			],

			"other_skills" => [
				"Java",
				"DevOps",
				"SQL",
				"C++",
				"DHCP",
				"Vulnerability Management",
				"Django",
				"Windows Powershell",
				"Balsamiq",
				"Linux CLI"
			],
		],
		
		"education" => [
			[
				"degree" => "M.S. Computer Science",
				"institution" => "University of Duke",
				"date" => "2022 - Current"
			],
			[
				"degree" => "B.S Applied Software Engineering",
				"institution" => "University of Stanford",
				"date" => "2012 - 2016"
			],

		],
	

		"awards" => [
			[
				"award" => "Cardinal Scholarship",
				"description" => "Scholarship awarded to those who obtain and hold a highschool GPA of 4.0, and college GPA of 3.85."
			],
			[
				"award" => "Stanford Diversity Scholarship",
				"description" => "Received by being from a diverse and cultural background while also maintaining a 3.35 GPA throughout collegiate career."
			],
		],

		"languages" => [
			[
				"language" => "English",
				"level" => "(Native)"
			],
			[
				"language" => "French",
				"level" => "(Fluent)"
			],
			[
				"language" => "Spanish",
				"level" => "(Expert)"
			],
		],

		"interests" => [
			"Gardening",
			"Quilting",
			"Gambling"
		],

		"projects" => [
			[
				"name" => "Project 1",
				"description" => "Brief description of Project 1",
				"link" => "GO to link",
				"picture" => ""
			],

			[
				"name" => "Project 2",
				"description" => "Brief description of Project 2",
				"link" => "Go to link",
				"picture" => ""
			],
			[
				"name" => "Project 3",
				"description" => "Brief description of Project 3",
				"link" => "Go to link",
				"picture" => ""
			],
		], 
	],
];
$index=$_GET['index'];
$resume_intro = $resume_data[$index];
$resume_contacts = $resume_intro['contacts'];
?>
<!DOCTYPE html>
<html lang="en"> 
<head>
    <title>Your name's Resume</title>
    
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
		<?php /* Only the following line changed from the file in the previous assignment */ ?>
		<div class="mb-4"><a href="index.php" class="btn btn-primary">Back to index</a></div>
	    <div class="resume-wrapper-inner mx-auto text-start bg-white shadow-lg">
		    <header class="resume-header pt-4 pt-md-0">
			    <div class="row">
				    <div class="col-block col-md-auto resume-picture-holder text-center text-md-start">
				        <img class="picture" style="max-height: 220px;" src="assets/images/<?=$resume_intro['member']?>.jpg" alt="">
				    </div><!--//col-->
				    <div class="col">
					    <div class="row p-4 justify-content-center justify-content-md-between">
						    <div class="primary-info col-auto">
							    <h1 class="name mt-0 mb-1 text-white text-uppercase text-uppercase"><?=$resume_intro['member']?></h1>
							    <div class="title mb-3"><?=$resume_intro['title']?></div>
							    <ul class="list-unstyled">
								    <li class="mb-2"><a class="text-link" href="#"><i class="far fa-envelope fa-fw me-2" data-fa-transform="grow-3"></i><?=$resume_contacts['email']?></a></li>
								    <li><a class="text-link" href="#"><i class="fas fa-mobile-alt fa-fw me-2" data-fa-transform="grow-6"></i><?=$resume_contacts['phone']?></a></li>
							    </ul>
						    </div><!--//primary-info-->
						    <div class="secondary-info col-auto mt-2">
							    <ul class="resume-social list-unstyled">
					                <li class="mb-3"><a class="text-link" href="<?=$resume_contacts['linkedin_link']?>"><span class="fa-container text-center me-2"><i class="fab fa-linkedin-in fa-fw"></i></span><?=$resume_contacts['linkedin']?></a></li>
					                <li class="mb-3"><a class="text-link" href="<?=$resume_contacts['github']?>"><span class="fa-container text-center me-2"><i class="fab fa-github-alt fa-fw"></i></span><?=$resume_contacts['github']?></a></li>
					                <li><a class="text-link" href="<?=$resume_contacts['social']?>"><span class="fa-container text-center me-2"><i class="fas fa-globe"></i></span><?=$resume_contacts['social']?></a></li>
							    </ul>
						    </div><!--//secondary-info-->
					    </div><!--//row-->
					    
				    </div><!--//col-->
			    </div><!--//row-->
		    </header>
		    <div class="resume-body p-5">
			    <section class="resume-section summary-section mb-5">
				    <h2 class="resume-section-title text-uppercase font-weight-bold pb-3 mb-3">Summary</h2>
				    <div class="resume-section-content">
					    <p class="mb-0"><?=$resume_intro['summary']?></p>
				    </div>
			    </section><!--//summary-section-->
			    <div class="row">
				    <div class="col-lg-9">
					    <section class="resume-section experience-section mb-5">
						    <h2 class="resume-section-title text-uppercase font-weight-bold pb-3 mb-3">Work Experience</h2>
						    <div class="resume-section-content">
							    <div class="resume-timeline position-relative">
								    <article class="resume-timeline-item position-relative pb-5">
									    <?php
										$member = $resume_data[$index];
										$member_jobs = $member['experience'];
										for ($i = 0; $i < count($member['experience']); $i++){
											$member_jobs = $member['experience'][$i];
											echo '
											<div class="resume-timeline-item-header mb-2">
												<div class="d-flex flex-column flex-md-row">
													<h3 class="resume-position-title font-weight-bold mb-1">' . $member_jobs['job-title'] . '</h3>
													<div class="resume-company-name ms-auto">' . $member_jobs['company'] . '</div>
												</div><!--//row-->
												<div class="resume-position-time">' . $member_jobs['date'] . '</div>
											</div><!--//resume-timeline-item-header-->
											<div class="resume-timeline-item-desc">
												<p>' . $member_jobs['description'] . '</p>
												<h4 class="resume-timeline-item-desc-heading font-weight-bold">Achievements:</h4>
												<p>' . $member_jobs['achievements_summary'] . '</p>
												<ul>';
												foreach ($member_jobs['accomplishments'] as $accomplishments){
													echo'
													<li>' . $accomplishments . '</li>
													';
												}
											echo '</ul>
												<h4 class="resume-timeline-item-desc-heading font-weight-bold">Technologies used:</h4>
												<ul class="list-inline">';
												foreach ($member_jobs['technologies'] as $technologies){
													echo'
													<li class="list-inline-item"><span class="badge bg-secondary badge-pill">' . $technologies . '</span></li>
												';
												}
											echo'
												</ul>
											</div><!--//resume-timeline-item-desc-->';
										}
										?>
								    </article><!--//resume-timeline-item-->
									

						    </div>
					    </section><!--//projects-section-->
				    </div>
				    <div class="col-lg-3">
					    <section class="resume-section skills-section mb-5">
						    <h2 class="resume-section-title text-uppercase font-weight-bold pb-3 mb-3">Skills &amp; Tools</h2>
						    <div class="resume-section-content">
						        <div class="resume-skill-item">
							        <ul class="list-unstyled mb-4">
										<?php
										for ($t = 0; $t < count($member['skills']['main_skills']); $t++){
										echo'
								        <li class="mb-2">
								            <div class="resume-skill-name">' . $member['skills']['main_skills'][$t]['name'] . '</div>
									        <div class="progress resume-progress">
											    <div class="progress-bar theme-progress-bar-dark" role="progressbar" style="width:' . $member['skills']['main_skills'][$t]['value'] . '%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
											</div>
								        </li>';
										}
										?>
							        </ul>
						        </div><!--//resume-skill-item-->
						        <div class="resume-skill-item">
						            <h4 class="resume-skills-cat font-weight-bold">Others</h4>
						            <ul class="list-inline">
										<?php
										for($i = 0; $i < count($member['skills']['other_skills']); $i++){
											echo'
										
							            <li class="list-inline-item"><span class="badge badge-light">' . $member['skills']['other_skills'][$i] . '</span></li>
										';
										}
									?>
						            </ul>
						        </div><!--//resume-skill-item-->
						    </div><!--resume-section-content-->
					    </section><!--//skills-section-->
					    <section class="resume-section education-section mb-5">
						    <h2 class="resume-section-title text-uppercase font-weight-bold pb-3 mb-3">Education</h2>
						    <div class="resume-section-content">
							    <ul class="list-unstyled">
									<?php
									for ($i = 0; $i < count($member['education']); $i++){
										echo'
									
								    <li class="mb-2">
								        <div class="resume-degree font-weight-bold">' . $member['education'][$i]['degree'] . '</div>
								        <div class="resume-degree-org">' . $member['education'][$i]['institution'] . '</div>
								        <div class="resume-degree-time">' . $member['education'][$i]['date'] . '</div>
								    </li>';
									}
									?>
							    </ul>
						    </div>
					    </section><!--//education-section-->
					    <section class="resume-section reference-section mb-5">
						    <h2 class="resume-section-title text-uppercase font-weight-bold pb-3 mb-3">Awards</h2>
						    <div class="resume-section-content">
							    <ul class="list-unstyled resume-awards-list">
									<?php
									for($i = 0; $i < count($member['awards']); $i++){
										echo'
									
								    <li class="mb-2 ps-4 position-relative">
								        <i class="resume-award-icon fas fa-trophy position-absolute" data-fa-transform="shrink-2"></i>
								        <div class="resume-award-name">' . $member['awards'][$i]['award'] . '</div>
								        <div class="resume-award-desc">' . $member['awards'][$i]['description'] . '</div>
								    </li>';
									}
									?>
							    </ul>
						    </div>
					    </section><!--//interests-section-->
					    <section class="resume-section language-section mb-5">
						    <h2 class="resume-section-title text-uppercase font-weight-bold pb-3 mb-3">Languages</h2>
						    <div class="resume-section-content">
							    <ul class="list-unstyled resume-lang-list">
									<?php
									for ($i = 0; $i < count($member['languages']); $i++){
										echo '
									
								    <li class="mb-2"><span class="resume-lang-name font-weight-bold">' . $member['languages'][$i]['language'] . '</span> <small class="text-muted font-weight-normal">' . $member['languages'][$i]['level'] . '</small></li>
									';
									}
									?>
							    </ul>
						    </div>
					    </section><!--//language-section-->
					    <section class="resume-section interests-section mb-5">
						    <h2 class="resume-section-title text-uppercase font-weight-bold pb-3 mb-3">Interests</h2>
						    <div class="resume-section-content">
							    <ul class="list-unstyled">
									<?php
										for ($i = 0; $i < count($member['interests']); $i++){
											echo '
										
								    <li class="mb-1">' . $member['interests'][$i] . '</li>';
									}
									?>
							    </ul>
						    </div>
					    </section><!--//interests-section-->
					    
				    </div>
			    </div><!--//row-->
				<section class="resume-section experience-section mb-5">
					<h2 class="resume-section-title text-uppercase font-weight-bold pb-3 mb-3">Projects</h2>
					<div class="row mt-4">
						<?php
						for ($i = 0; $i < count($member['projects']); $i++){
							echo '
						
						<div class="col-md-4">
							<div class="card">
								<img src="assets/images/' . $member['projects'][$i]['picture'] . '" style="max-height: 150px;" alt="Project 1" class="card-img-top">
								<div class="card-body">
									<h5 class="card-title">' . $member['projects'][$i]['name'] . '</h5>
									<p class="card-text">' . $member['projects'][$i]['description'] . '</p>
									<a href="assets/projects/' . $member['projects'][$i]['link'] . '">Go to link</a>
								</div>
							</div>
						</div>';
						}
					?>
					</div>
				</section><!--//projects-section-->
		    </div><!--//resume-body-->
		    
		    
	    </div>
    </article> 

    
    <footer class="footer text-center pt-2 pb-5">
	    <!--/* This template is free as long as you keep the footer attribution link. If you'd like to use the template without the attribution link, you can buy the commercial license via our website: themes.3rdwavemedia.com Thank you for your support. :) */-->
        <small class="copyright">Designed with <span class="sr-only">love</span><i class="fas fa-heart"></i> by <?=$resume_data[0]['member']?> and <?=$resume_data[1]['member']?></small>
    </footer>

    

</body>
</html> 


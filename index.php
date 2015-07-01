<!DOCTYPE html>
<html lang="en">
	<head>
		<title>ECVET-CMF</title>
		<meta charset="utf-8">
		<link rel="stylesheet" href="css/reset.css" type="text/css" media="all">
		<link rel="stylesheet" href="css/layout.css" type="text/css" media="all">
		<link rel="stylesheet" href="css/prettyPhoto.css" type="text/css" media="all">
		<link rel="stylesheet" href="css/style.css" type="text/css" media="all">
		<link type="text/css" rel="stylesheet" href="css/example.css">
        <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
		<script type="text/javascript" src="js/jquery-1.6.js" ></script>
		<script type="text/javascript" src="js/cufon-yui.js"></script>
		<script type="text/javascript" src="js/cufon-replace.js"></script>
  		<script type="text/javascript" src="js/Ubuntu_400.font.js"></script>
  		<script type="text/javascript" src="js/Ubuntu_700.font.js"></script>
		<script type="text/javascript" src="js/bgSlider.js" ></script>
		<script type="text/javascript" src="js/script.js" ></script>
		<script type="text/javascript" src="js/pages.js"></script>
		<script type="text/javascript" src="js/jquery.easing.1.3.js"></script>
		<script type="text/javascript" src="js/bg.js" ></script>
		<script type="text/javascript" src="js/tabs.js"></script>
		<script type="text/javascript" src="js/slider.js" ></script>
		<script language="JavaScript" src="js/gen_validatorv31.js" type="text/javascript"></script>
		<script type="text/javascript" src="js/jquery.prettyPhoto.js"></script>

	</head>

	<body id="page1">
											<?php 
												require_once('config.php'); 
												$id_post = "1";

											    $sql = mysql_query("SELECT * FROM comments WHERE id_post = '$id_post'") or die(mysql_error());
											    $commect_count = 0;
											    while($affcom = mysql_fetch_assoc($sql)){ 
											       
											    $commect_count = $commect_count +1;
											    
											};
		    

											    ?>
		<div class="spinner"></div>
			<div id="bgSlider"></div>
				<div class="extra">
					<div class="main">
						<div class="box">
<!-- header -->
					<header>
						<h1><a href="index.php#!/page_Home" id="logo"></a></h1>
						<nav>
							<ul id="menu">
								<li><a href="#!/page_Home" style="background:#244C98"><span></span><strong>ECVET-Home</strong></a></li>
								<li><a href="#!/actors" style="background:#D61740"><span></span><strong>ECVET-ACTORS</strong></a></li>
								<li><a href="#!/page_About" style="background:#F68712"><span></span><strong>ECVET-CMF</strong></a></li>
								<li><a href="#!/cmf-levels" style="background:#81AF29"><span></span><strong>CMF-LEVEL</strong></a></li>
								<li><a href="#!/page_who" style="background:#6AABC7"><span></span><strong>KEY-PROCESS</strong></a></li>
								<li><a href="#!/key-practices" style="background:#244C98"><span></span><strong>KEY-PRACTICES</strong></a></li>
							</ul>
						</nav>
					</header>
<!--content -->
					<article id="content">
						<div class="ic"></div>
						<ul>
							<li id="page_Home">
								<div class="box1">
									<div class="inner">
										<a href="#" class="close" data-type="close"><span></span></a>
										<div class="wrapper pad_bot1">
										<h1 class="hometitle"> Evcet-step Home</h1>
										<p class="hometxt">ECVET combines several technical components and processes into a <strong>methodological framework</strong> that forms the ECVET technical specifications.
										The general objectives of ECVET are targeted towards vocational training activities, facilitating transnational mobility and lifelong learning for all.
										<img alt="wordle" class="wordle" src="images/P7tzLr.png" />
										The main challenge for the introduction of a common methodological framework like ECVET in the European VET environment is the <strong>broad range of bodies</strong> involved with the different functions of qualifications systems. 
										Before we begin to describe the maturity framework for progressively introducing and achieving capability for supporting ECVET actions by any interested organisation, it is important to describe the main types of actors in the ECVET landscape.</p>

										</div>
									</div>
								</div>
							</li>



							<li id="actors">
								<div class="box1">
									<div class="inner">
										<a href="#" class="close" data-type="close"><span></span></a>
										<div class="wrapper tabs">
											<div class="col11">
												<div class="breadcrumb flat">
													<div class="nav">
													<a class="frist active"href="#vet">VET LEARNER</a>
													<a href="#hom" class="last">Home Institution</a>
													<a href="#host">Host Institution</a>
													</div>
												</div>
									     	</div>
<!-- ---------------------------------------------------------------------------------------------------------------------------------------------------------- -->
												<div class="tab-content" id="vet">
												<div class="imgtxt3">
													<h1 class="hometitle">VET Learner</h1>
													<p>Even though the scope of the ECVET Capability Maturity Framework does not directly targets individual learners, it is interesting to understand the main characteristics of the central player of ECVET, i.e. the VET Learner.
													A VET Learner in the context of ECVET is therefore an adult person who is interested in participating in vocational education training activities in order to achieve certain learning outcomes and acquire a certified set of competences and skills.
													The following paragraphs present the profile of an “ideal” ECVET learner (adapted from [15]).</p>
													<div id="flip">Requirements <img class="arrow" src="images/arrow.png" alt="arrow"></div>
													<div id="panel">
													<ul style="list-style-type:square; text-align:left">
													<li>Minimum training to ensure that full advantage of the experience is taken.</li>
													<li>Having the required documents:
													<ul style="list-style-type:circle;"><li>National Identity Card/Passport.</li>
													<li>European Health insurance.</li>
													<li>Medical certificate when required.</li>
													<li>Travel and liability insurance.</li>
													<li>Any authorisations required in the sending and host country.</li>
													</ul></li>
													<li>Sufficient knowledge of the working language.</li>
													<li>Legal minimum age for placements of the sending and host country.</li>
													</ul>
													</div>
													<div id="flipa">Responsibilities<img class="arrow2" src="images/arrow.png" alt="arrow"></div>
													<div id="panela">
													<ul style="list-style-type:square; text-align:left">
													<li>Take part in the mobility experience in an active and responsible way and do everything required at each stage of the project: preparation, implementation, evaluation and dissemination.</li>
													<li>During the placement the student is expected to:
													<ul style="list-style-type:circle;">
													<li>Comply with the agreed work plan.</li>
													<li>Accept the company’s general rules and any others that might be agreed.</li>
													<li>Respect safety procedures.</li>
													<li>Use technical terminology.</li>
													<li>Integrate in the work team.</li>
													<li>Look for quality in processes carry out and assigned tasks all within deadlines.</li>
													<li>Accept instructions received.</li>
													<li>Care for personal hygiene and appearance.</li>
													<li>Asses own work objectively and using critical thinking.</li>
													<li>Show initiative in problem solving.	</li>
													<li>Respect rules for using the facilities and equipment provided to him/her (accommodations, installations, machinery, etc.)</li>
													</ul></li>
													</ul>
													</div>
													</div>
<!-- ---------------------------------------------------------------------------------------------------------------------------------------------------------- -->
												</div>
												<div class="tab-content" id="hom">
												<div class="imgtxt3">
												<h1 class="hometitle">Home Institution</h1>
												<p>A “ECVET competent” organisation located in sending country, where trainees attend vocational training courses and which generates the demand for international, mobility-based VET. The home institution gathers demand for (mobility-based) VET and coordinates the mobility-based training on behalf of the learners. The following list presents the core requirements and responsibilities of the Home institution (adapted from [15])</p>
													<div id="flipb">Requirements<img class="arrow" src="images/arrow.png" alt="arrow"></div>
													<div id="panelb">
													<ul style="list-style-type:square; text-align:left">
													<li>ECVET Competent Organisation – sufficient process to facilitate ECVET actions.</li>
													<li>Support staff trained and competent.</li>
													<li>Tutors fully aware for the curriculum of the host institution and the academic / technical domain of the VET action.</li>
													</ul>
													</div>
													<div id="flipc">Responsibilities<img class="arrow2" src="images/arrow.png" alt="arrow"></div>
													<div id="panelc">
													<ul style="list-style-type:square; text-align:left">
													<li>Coordination of the whole mobility process.</li>
													<li>Describing the different activities that can be carried out and performed by the learner during the mobility-based VET.</li>
													<li>Facilitating the formulation and signature of the Learning Agreement.</li>
													<li>Arranging the insurance required for the mobility: travel, health, accident, etc.</li>
													<li>Providing the learner with basic instruction in technical vocabulary in the working language or host country language.</li>
													<li>Validating the agreed work plan.</li>
													<li>Responsible for evaluating and validating the results of the placement once completed.</li>
													<li>Raise awareness, promote and give information about mobility to the students.</li>
													<li>Dissemination of results of mobility experiences.</li>
													<li>A tutor from the home institution should always be available for the learner in case of need depending on the issues/problems faced by the learner during the placement abroad.</li>
													</ul>
													</div>
													</div>
													</div>
<!-- ---------------------------------------------------------------------------------------------------------------------------------------------------------- -->
												<div class="tab-content" id="host">
												<div class="imgtxt3">
												<h1 class="hometitle">Host Institution</h1>
													<p>An “ECVET competent” organisation that provides VET actions gathers the supply for placement from host workplaces in the host country and receives demand for VET placement from Home institutions.</p><br />
												<div id="flipd">Requirements<img class="arrow" src="images/arrow.png" alt="arrow"></div>
													<div id="paneld">
													<ul style="list-style-type:square; text-align:left">
													<li>ECVET Competent Organisation – sufficient process to facilitate ECVET actions.</li>
													<li>Support staff trained and competent.</li>
													<li>Tutors fully aware for the curriculum of the home institution and the academic / technical domain of the VET action.</li>
													</ul>
													</div>
												<div id="flipe">Responsibilities<img class="arrow2" src="images/arrow.png" alt="arrow"></div>
													<div id="panele">
													<ul style="list-style-type:square; text-align:left">
													<li>Coordination of the VET action.</li>
													<li>Describing the different activities that can be carried out and performed by the learner during the mobility-based VET.</li>
													<li>Facilitating the formulation and signature of the Learning Agreement.</li>
													<li>Validating the agreed work plan.</li>
													<li>Responsible for evaluating and validating the results of the placement once completed.</li>
													<li>Raise awareness, promote and give information about mobility to the students.</li>
													<li>FDissemination of results of mobility experiences.</li>
													</ul>
													</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</li>




<!-- ---------------------------------------------------------------------------------------------------------------------------------------------------------- -->
							<li id="page_About">
								<div class="box1">
									<div class="inner">
										<a href="#" class="close" data-type="close"><span></span></a>
										<h1 class="hometitle">Ecvet CMF</h1>
										<div class="wrapper" style="text-align:left">
											<p>ECVET Capability Maturity Framework (ECVET CMF) has been designed to allow VET related organisations and individual actors across Europe, to understand and reap the benefits of ECVET from their perspective as well as to track their performance and to assure and control the quality of the integration of the ECVET system into their existing processes and workflows.</p>
										</div>
										<h1 class="hometitle">ECVET CMF components</h1>
													<ul style="list-style-type:square; text-align:left">
													<li>The ECVET CMF is layered in <a href="#!/cmf-levels"><strong>five maturity levels</strong></a> that mark evolving capability of competent organisations in performing and participating in ECVET activities and programmes.</li>
													<li>Each maturity level is composed of several <a href="#!/page_who"><strong>key process areas.</strong></a></li>
													<li>Each key process area is organized into sections called common features.</li>
													<li>The common features specify the <a href="#!/key-practices"><strong>key practices</strong></a> that, when collectively addressed, accomplish the goals of the key process area.</li>
													</ul>
										<br />	 
											<div class="wrapper" style="text-align:left">
											<p class="color1 pad_bot2"><strong></strong></p>
											<p>ECVET CMF is an adaptation of the well-known Capability Maturity Model (CMM) which was originally applied to software development and has subsequently been developed into the Capability Maturity Model Integration (CMMI) and applied to other areas of business activity.
											</p>
											 <a href="#!/page_About_More" class="button1"><span></span><strong>Rationale for Capability Maturity Models</strong></a>
										</div>
									</div>
								</div>
							</li>













							<li id="cmf-levels">
								<div class="box1">
									<div class="inner">
										<a href="#" class="close" data-type="close"><span></span></a>
											<div class="wrapper tabs">
												<div class="col1">
													<div class="nav">
 														  <div class="menuholder">
     												  		 <ul class="menu slide">
        											   			 <li><a href="#general"class="violet">LEVELS</a></li>
         									   					 <li><a href="#level-1"class="red">Initial</a></li>
         											  			 <li><a href="#level-2"class="orange">Repeatable</a></li>
        								   						 <li><a href="#level-3"class="yellow">Defined</a></li>        								   		<li><a href="#level4"class="green">Managed</a></li>
        								   						 <li><a href="#level5"class="blue">Optimising</a></li>
      									 				 	</ul>    	
   													 	</div>
  												  </div>
									     	</div>
											<div class="col2 pad_left1">
												<div class="tab-content" id="general">
													<h1 class="leveltitle"> CMF-LEVELS </h1>
												<p class="imgtxt4" >As is the case with the original Capability Maturity Model (SW-CMM), the ECVET CMF is layered in five levels that mark evolving capability of competent organisations in performing and participating in ECVET activities and programmes. As defined in CMMI v1.2, a maturity level is a defined evolutionary plateau for organizational process improvement. Each maturity level matures an important subset of the organisation’s processes, preparing it to move to the next maturity level.
												</p>
												<img alt="5levels" class="imagebig" src="images/cmf-l.png" />

												</div>
												<div class="tab-content" id="level-1">
													<h1 class="leveltitle"> FIRST LEVEL - INITIAL </h1>

													<p class="leveltxt"> <strong>The overall process is characterized as ad hoc, and occasionally even chaotic. Few processes are defined, and success depends on individual effort. </strong></p>


													 <p class="leveltxt"> At the Initial Level of ECVET CMF, the organization typically does not provide a stable environment for developing and maintaining vocational training activities based on the ECVET framework. </p>

													 <p class="leveltxt">Success in Level 1 organisations depends on the competence and heroics of the people in the organisation and cannot be repeated unless the same competent individuals are assigned to the next training programme.</p>

													 <p class="leveltxt">Thus, at Level 1, capability is a characteristic of the individuals, not of the organisation.</p>
													 <p class="leveltxt"> <a href="#!/leveli1" class="button1"><span></span><strong>Read More</strong></a></p>

												</div>
												<div class="tab-content" id="level-2">
													<h1 class="lev2title"> SECOND LEVEL - REPEATABLE </h1>

													<p class="lev2txt"> <strong>Basic project management processes are established to track schedule, functionality, and quality of VET actions. </strong></p>


													 <p class="lev2txt"> At the Repeatable Level, policies for managing VET programmes and procedures to implement those policies are established. Planning and managing new programmes is based on experience with similar programmes.</p>

													 <p class="lev2txt">The ECVET process capability of Level 2 organisations can be summarized as <b>disciplined</b> because planning and tracking of each VET programme is stable and earlier successes can be repeated.</p>

													 <p class="lev2txt"> <a href="#!/leveli2" class="button2"><span></span><strong>Read More</strong></a></p>


												</div>
												<div class="tab-content" id="level-3">
													<h1 class="lev3title"> THIRD LEVEL - DEFINED </h1>

													<p class="lev3txt"> <strong>For each VET programme, the process for both management and training activities is documented, standardised, and integrated into a standard ECVET process for the organisation. </strong></p>


													 <p class="lev3txt"> At the Defined Level, the standard process for developing and implementing ECVET programmes across the organization is documented, including both training and management processes, and these processes are integrated into a coherent whole. </p>

													 <p class="lev3txt">The ECVET process capability of Level 3 organisations can be summarized as <strong>standard and consistent</strong>  because both training and management activities are stable and repeatable. This process capability is based on a common, organisation-wide understanding of the activities, roles, and responsibilities in a defined ECVET process.</p>

													 <p class="lev3txt"> <a href="#!/leveli3" class="button3"><span></span><strong>Read More</strong></a></p>


												</div>
												<div class="tab-content" id="level4">
													<h1 class="lev4title"> FOURTH LEVEL - MANAGED </h1>

													<p class="lev4txt"> <strong>Detailed measures of the ECVET process and VET quality are collected. Both the process and VET actions are quantitatively understood and controlled. </strong></p>


													 <p class="lev4txt"> At the Managed Level, the organisation sets quantitative quality goals for both training programmes and processes. Productivity and quality are measured for important ECVET process activities across all programmes as part of an organisational measurement framework. </p>

													 <p class="lev4txt">The ECVET process capability of Level 4 organizations can be summarized as being quantifiable and predictable because the process is measured and operates within measurable limits. This level of process capability allows an organization to predict trends in process and overall training quality within the quantitative bounds of these limits.</p>

													 <p class="lev4txt"> <a href="#!/leveli4" class="button4"><span></span><strong>Read More</strong></a></p>


												</div>
												<div class="tab-content" id="level5">
													<h1 class="lev5title"> FIFTH LEVEL - OPTIMIZING </h1>

													<p class="lev5txt"> <strong>Continuous process improvement is enabled by quantitative feedback from the process and from piloting innovative ideas and technologies. </strong></p>


													 <p class="lev5txt"> At the Optimising Level, the entire organization is focused on continuous process improvement. The organisation has the means to identify weaknesses and strengthen the process proactively, with the goal of preventing the occurrence of defects. </p>

													 <p class="lev5txt">The software process capability of Level 5 organisations can be characterized as continuously improving because Level 5 organisations are continuously striving to improve the range of their process capability, thereby improving the process performance of their ECVET programmes.</p>

													 <p class="lev5txt"> <a href="#!/leveli5" class="button5"><span></span><strong>Read More</strong></a></p>


												</div>
											</div>
										</div>
									</div>
								</div>
							</li>



													 











							<li id="page_who">
								<div class="box1">
									<div class="inner">
										<a href="#" class="close" data-type="close"><span></span></a>
										<div class="wrapper tabs">
											<div class="col11">
											<h1 class="hometitle">ECVET CMF Key Processes</h1>
												<p class="hometxt">Key process areas indicate where an organisation should focus on to improve its ECVET process and identify the issues that must be addressed to achieve a maturity level.</p>
												<p class="hometxt">The key process areas may be considered the requirements for achieving a maturity level. To achieve a maturity level, the key process areas for that level must be satisfied.</p>
												<p class="hometxt">The following table describes the identified key process areas for the ECVET capability maturity levels for competent organisations:</p>

												<h1 class="hometitle">Maturity level</h1>



												<div id="flipab"> 1. INITIAL LEVEL.<img class="arrow3" src="images/arrow.png" alt="arrow"></div>
												

												<div id="flipac"> 2. REPEATABLE LEVEL.<img class="arrow3" src="images/arrow.png" alt="arrow"></div>
												

												<div id="flipad"> 3. DEFINED LEVEL<img class="arrow3" src="images/arrow.png" alt="arrow"></div>
												

												<div id="flipae"> 4. MANAGED LEVEL<img class="arrow3" src="images/arrow.png" alt="arrow"></div>
												

												<div id="flipaw"> 5. OPTIMIZING LEVEL<img class="arrow3" src="images/arrow.png" alt="arrow"></div>

												<h1 class="hometitle">Key Process Area</h1>

												<div id="panelab"><h1 class="paneltitle">INITIAL LEVEL</h1></div>


												<div id="panelac"><h1 class="paneltitle">REPEATABLE LEVEL</h1><ul style="list-style-type:square; text-align:left;">
													<li>Electronic Document Management.</li>
													<li>Preparation of MoU.</li>
													<li>Definition of Learning Outcomes (LOs).</li>
													<li>Contract Management with Training Providersn.</li>
													<li>Documentation of validation metrics for training activities.</li>
													<li>Preparation of Learning Agreement.</li>
											</ul></div>


												<div id="panelad"><h1 class="paneltitle">Defined Level</h1><ul style="list-style-type:square; text-align:left">
													<li>Transparent assessment of acquisition of LOs</li>
													<li>Documentation of learning process in learner’s personal transcript</li>
													<li>ECVET training and awareness raising across organisation</li>
													<li>Integrated Data Collection and Management</li>
													<li>Reuse and comparison of LOs</li>
													<li>Definition of units of LOs</li>
													<li>Peer reviews</li>
											</ul></div>


												<div id="panelae"><h1 class="paneltitle">MANAGED LEVEL</h1><ul style="list-style-type:square; text-align:left">
													<li>Quantitative process management</li>
													<li>Training process quality management</li>
											</ul>

											</div>
												<div id="panelaw"><h1 class="paneltitle">OPTIMIZING LEVEL</h1><ul style="list-style-type:square; text-align:left">
													<li>Issues prevention</li>
													<li>Technology and standards change management</li>
													<li>Process change management</li>
											</ul></div>
											</div>
										</div>
									</div>
								</div>
							</li>	






							<li id="key-practices">
								<div class="box1">
									<div class="inner">
										<a href="#" class="close" data-type="close"><span></span></a>
											<div class="wrapper tabs">
												<div class="col11">
													<div class="nav">
 														  <div class="menuholder">
     												  		 <ul class="menu slide">
     												  		 	<li><a href="#levela1"class="red">General</a></li>
         											  			 <li><a href="#levela2"class="orange">Repeatable</a></li>
        								   						 <li><a href="#levela3"class="yellow">Defined</a></li>
        								   					     <li><a href="#levela4"class="green">Managed</a></li>
        								   						 <li><a href="#levela5"class="blue">Optimising</a></li>
      									 				 	</ul>    	
   													 	</div>
  												  </div>
									     	</div>

											<div class="col2 pad_left1">

											<div class="tab-content" id="levela1">
											<h1 class="leveltitle"> FAQ </h1>
											<?php 
											    $sql = mysql_query("SELECT * FROM comments ORDER BY id_post DESC LIMIT 2 ") or die(mysql_error());
											    
											    while($affcom = mysql_fetch_assoc($sql)){ 
											        $name = $affcom['name'];
											        $email = $affcom['email'];
											        $comment = $affcom['comment'];
											        $date = $affcom['date'];
											        $default = "mm";
											        $size = 35;
											        $grav_url = "http://www.gravatar.com/avatar/".md5(strtolower(trim($email)))."?d=".$default."&s=".$size;
											        

											    ?>
											    <div class="cmt-cnt">
											        <img src="<?php echo $grav_url; ?>" />
											        <div class="thecom">
											            <h5><?php echo $name; ?></h5><span data-utime="1371248446" class="com-dt"><?php echo $date; ?></span>
											            <br/>
											            <p class="hometxt">
											                <?php echo $comment; ?>
											            </p>
											        </div>
											    </div>
											    <?php 
											};


											    ?>




													<p class="lev2txt"> <a href="#!/comments" class="button1"><span></span><strong> view more <?php echo $commect_count?> comments</strong></a></p>
													<div class="form-style-2">
													<div class="form-style-2-heading">If you have more suggestion</div>
													<form method="post" name="myemailform" action="form-to-email.php">
													<label for="field1"><span>Name <span class="required">*</span></span><input type="text" class="input-field" name="name" value="" /></label>
													<label for="field2"><span>Email <span class="required">*</span></span><input type="text" class="input-field" name="email" value="" /></label>
													<label for="field4"><span>Topic</span><select name="field4" class="select-field">
													<option value="General Question">General</option>
													<option value="Actors">Actors</option>
													<option value="levels">Levels</option>
													<option value="key-process">Key Process</option>
													<option value="Key-Practices">Key Practices</option>
													</select></label>
													<label for="field5"><span>Message <span class="required">*</span></span><textarea name="message" class="textarea-field"></textarea></label>
													<label><span>&nbsp;</span><input class="styled-button-8" type="submit" name='submit' value="submit"/></label>
													</form>
													</div>


												
													
													
									
												</div>


												<div class="tab-content" id="levela2">
												<h1 class="lev2title">Goals of Level 2 – The Repeatable level</h1>
												<p class="imgtxt4" style="color:#F68712" >
												Level 2 contains a set of initial practices. To achieve level 2, these initial activities may be performed in an ad hoc manner, but they must be performed. If a competent organization were to start with no capability in managing ECVET, it should focus initially on implementing the Level 2 practices. <br />
												Thus, Level 2 is characterized by a single management practice:</p> <br />
												<div class="imgtxt5">
												<div id="flipaa"> 1. Initial practices are performed but may be ad hoc.<img class="arrow2" src="images/arrow.png" alt="arrow"></div>
												<div id="panelaa">In the context of this model, ad hoc (i.e., an ad hoc practice) refers to performing a practice in a manner that depends largely on the initiative and experience of an individual or team (and team leadership), without much in the way of organizational guidance in the form of a prescribed plan (verbal or written), policy, or training.</div> <br />
												</div>
												<p class="imgtxt4" style="color:#F68712" >
												The quality of the outcome may vary significantly depending on who performs the practice, when it is performed, and the context of the problem being addressed, the methods, tools, and techniques used, and the priority given a particular instance of the practice. With experienced and talented personnel, high-quality outcomes may be achieved even if practices are ad hoc. However, at this level, lessons learned are typically not captured at the organizational level, so approaches and outcomes are difficult to repeat or improve across the organization.
												</p>

												</div>



												<div class="tab-content" id="levela3">
												<h1 class="lev3title"> Goals of Level 3 – The Defined level</h1>
												<p class="imgtxt4" style="color:#81AF29">Four key practices are present at Level 3, which represent an initial level of institutionalization of the activities within a domain:</p>
												<div class="imgtxt5" >


												<div id="flipa1"> 1. Practices are documented.<img class="arrow2" src="images/arrow.png" alt="arrow"></div>
												<div id="panela1">The practices in the domain are being performed according to a documented plan. The focus here should be on planning to ensure that the practices are intentionally designed (or selected) to serve the organization.</div>

												<div id="flipa2"> 2. Stakeholders of the practice are identified and involved.<img class="arrow2" src="images/arrow.png" alt="arrow"></div>
												<div id="panela2">Stakeholders of practices are identified and involved in the performance of the practices. This could include stakeholders from within the function, from across the organization, or from outside the organization, depending on how the organization implemented the practice.</div>

												<div id="flipa3"> 3. Adequate resources are provided<img class="arrow2" src="images/arrow.png" alt="arrow"></div>
												<div id="panela3">to support the process (people, funding, and tools). Adequate resources are provided in the form of people, funding, and tools to ensure that the practices can be performed as intended. The performance of this practice can be evaluated by determining whether any desired practices have not been implemented due to a shortage of resources. If all desired practices have been implemented as intended by the organization, then adequate resources have been provided.</div>

												<div id="flipa4"> 4. Standards and/or guidelines have been identified<img class="arrow2" src="images/arrow.png" alt="arrow"></div>
												<div id="panela4">to guide the implementation of the practices. The organization identified some standards and/or guidelines to inform the implementation of practices in the domain. These may simply be the reference sources the organization consulted when developing the plan for performing the practices.</div>
												</div>

												</p>
												<p class="imgtxt4" style="color:#81AF29">
												Overall, the practices at Level 3 are more complete than at Level 2 and are no longer performed irregularly or are not ad hoc in their implementation. As a result, the organization’s performance of the practices is more stable. At Level 3, the organization can be more confident that the performance of the domain practices will be sustained over time.
												</p>
												 

												</div>








												<div class="tab-content" id="levela4">
												<h1 class="lev4title">Goals of Level 4 – The Managed level</h1>
												<p class="imgtxt4"  style="color:#D61740">At Level 4, the ECVET activities have been further institutionalized and are now being managed. Five key management practices support this progression:.<br />
												</p>
												<div class="imgtxt5" >
												<div id="flipaq"> 1. Activities are guided by policies<img class="arrow2" src="images/arrow.png" alt="arrow"></div>
												<div id="panelaq">Activities are guided by policies (or other organizational directives) and governance. Managed activities in a domain receive guidance from the organization in the form of organizational direction, as in policies and governance. Policies are an extension of the planning activities that are in place at MIL2.</div>
												<div id="flipar"> 3. Periodically Reviewed<img class="arrow2" src="images/arrow.png" alt="arrow"></div>
												<div id="panelar">Activities are periodically reviewed to ensure they conform to policy.</div>

												<div id="flipat"> 4. Responsibility and Authority<img class="arrow2" src="images/arrow.png" alt="arrow"></div>
												<div id="panelat">Responsibility and authority for performing the practices are assigned to personnel.</div>

												<div id="flipay"> 5. Skills and Knowledge<img class="arrow2" src="images/arrow.png" alt="arrow"></div>
												<div id="panelay">Personnel performing the practices have adequate skills and knowledge. The personnel assigned to perform the activities have adequate domain-specific skills and knowledge to perform their assignments.</div>
												</div>
												<br />
												<p class="imgtxt4" style="color:#D61740">
												At Level 4, the practices in a domain are further stabilized and are guided by high-level organizational directives, such as policy. As a result, the organization should have additional confidence in its ability to sustain the performance of the practices over time and across the organization.
												</p>
												</div>








												<div class="tab-content" id="levela5">
												<h1 class="lev5title">Goals of Level 5 – The Optimising level</h1>
												<p class="imgtxt4"  style="color:#6AABC7">Level 5 of the ECVET CMF, marking the highest capability maturity of a competent organisation in terms of ECVET activities, portrays the mastery of the organisation of all lower levels and associated key process areas and practices. Moreover, it is characterized by three key practices that mark this achievement:<br />
												</p>

												<div class="imgtxt5" >

												<div id="flipaf"> 1. Internal Evaluation<img class="arrow2" src="images/arrow.png" alt="arrow"></div>
												<div id="panelaf">Transcript of achievement and internal evaluation is performed and documented for each round of ECVET activities.</div>

												<div id="flipag"> 2. Change Management Practices<img class="arrow2" src="images/arrow.png" alt="arrow"></div>
												<div id="panelag">Change management practices are performed for all key process areas.</div>

												<div id="flipah"> 3. Issue Tracking Workflow<img class="arrow2" src="images/arrow.png" alt="arrow"></div>
												<div id="panelah">An elaborate issue tracking workflow is supported to detect / capture and manage the resolution of any issues and defects in the key process areas and practices and effectively achieve improvement over time</div>


												</div>
												<br />


												<p class="imgtxt4" style="color:#6AABC7">
												At Level 4, the practices in a domain are further stabilized and are guided by high-level organizational directives, such as policy. As a result, the organization should have additional confidence in its ability to sustain the performance of the practices over time and across the organization.
												</p>
												</div>


											</div>
										</div>
									</div>
								</div>

							</li>







<!-- ---------------------------------------------------------------------------------------------------------------------------------------------------------- -->
							
							<li id="leveli1">
								<div class="box1">
									<div class="inner">
										<a href="#" class="close" data-type="close"><span></span></a>
										<div class="wrapper pad_bot3">
											<h1 class="hometitle"> First Level - Initial</h1>
												<img alt="initial" class="image" src="images/initial.png" />
												<p class="imgtxt1" >The overall process is characterized as ad hoc, and occasionally even chaotic. Few processes are defined, and success depends on individual effort.
												In close resemblance to the description of the SW-CMM. 
												</p>
												<p class="hometxt">
												At the Initial Level of ECVET CMF, the organization typically does not provide a stable environment for developing and maintaining vocational training activities based on the ECVET framework. <br /><br />Such organisations frequently have difficulty making commitments that the staff can meet with an orderly process, resulting in a series of issues and, probably, crises. During a crisis, the ECVET programmes typically abandon planned procedures and revert to adhoc activities. Success depends entirely on having exceptional managers, trainers, support staff and, last but not least, self-determined learners. Occasionally, capable and forceful trainers and teams can withstand the pressures to take shortcuts in the training process; but when they leave the programme, their stabilizing influence leaves with them.<br /><br /> Even an otherwise strong training programme, cannot overcome the instability created by the absence of sound processes. In spite of this ad hoc, even chaotic, process, Level 1 organizations frequently develop training activities that work, even though they may be over the budget, out of schedule and uder-reported. Success in Level 1 organisations depends on the competence and heroics of the people in the organisation and cannot be repeated unless the same competent individuals are assigned to the next training programme. Thus, at Level 1, capability is a characteristic of the individuals, not of the organisation.
												</p>
											<p class="leveltxt2"> <a href="#!/cmf-levels" class="button1"><span></span><strong>Back To Levels</strong></a></p>

									</div>
								</div>
							</li>
<!-- ---------------------------------------------------------------------------------------------------------------------------------------------------------- -->

							<li id="leveli2">
								<div class="box1">
									<div class="inner">
										<a href="#" class="close" data-type="close"><span></span></a>
										<h1 class="lev2titledet"> Second-Level-Repeatable</h1>

												<img alt="repeatable" class="image" src="images/repeatable.png"/>
												<p class="imgtxt1" style="color:#F68712">Basic project management processes are established to track schedule, functionality, and quality of VET actions. The necessary process discipline is in place to repeat earlier successes on projects with similar applications.
												</p>
												<p class="lev2det" >At the Repeatable Level, policies for managing VET programmes and procedures to implement those policies are established. 
												Planning and managing new programmes is based on experience with similar programmes. Process capability is enhanced by establishing basic process management discipline on a programme by programme basis. An effective process can be characterized as one which is practiced, documented, enforced, trained, measured, and able to improve. <br /><br />
												VET programmes in Level 2 organisations have installed basic project management controls. Realistic commitments are based on the results observed on previous programmes and on the requirements of the current programme. The managers for a programme track performance of the trainee, the trainers, schedules, and functionality; problems in meeting commitments are identified when they arise. Expected learning outcomes and the training activities perform to satisfy them are baselined, and their integrity is controlled. The competent organisations overlook and manage their liaisons in real-work environments, where some training activities make take place.
												<br /> <br />
												Processes may differ between programmes in a Level 2 organisation. The organisational requirement for achieving Level 2 is that there are policies that guide the programmes in establishing the appropriate processes.
												The ECVET process capability of Level 2 organisations can be summarized as disciplined because planning and tracking of each VET programme is stable and earlier successes can be repeated. The overall ECVET programme and its associated training activities are under the effective control of a project management system, following realistic plans based on the performance of previous pogrammes.
												</p>
											<p class="leveltxt2"> <a href="#!/cmf-levels" class="button2"><span></span><strong>Back To Levels</strong></a></p>
									</div>
								</div>
							</li>

<!-- ---------------------------------------------------------------------------------------------------------------------------------------------------------- -->


							<li id="leveli3">
								<div class="box1">
									<div class="inner" style="overflow:scroll;height:800px;">
										<a href="#" class="close" data-type="close"><span></span></a>
										<h1 class="lev3titledet"> Third-Level-Defined</h1>
												<img alt="defined" class="image" src="images/defined.png" />
												<p class="imgtxt1" style="color:#81AF29">For each VET programme, the process for both management and training activities is documented, standardised, and integrated into a standard ECVET process for the organisation. All programmes use an approved, tailored version of this organisation-wide process for VET actions.
												</p>
												<p class="lev3tdet">
												At the Defined Level, the standard process for developing and implementing ECVET programmes across the organization is documented, including both training and management processes, and these processes are integrated into a coherent whole. This standard process is referred to throughout the ECVET CMF as the organisation-wide ECVET process.
												Processes established at Level 3 are used (and changed, as appropriate) to help the trainers, the  managers and support staff perform more effectively. The organisation exploits effective practices when standardizing its processes and there is a group that is responsible for the organisation's process documentation and tracking, e.g., an ECVET process group. An organization-wide training program is implemented to ensure that the staff, trainers and managers have the knowledge and skills required to fulfill their assigned roles.<br /><br />
												Projects tailor the organization's standard software process to develop their own defined software process, which accounts for the unique characteristics of the project. This tailored process is referred to in the CMM as the project's defined software process. A defined software process contains a coherent, integrated set of well-defined software engineering and management processes. A well-defined process can be characterized as including readiness criteria, inputs, standards and procedures for performing the work, verification mechanisms (such as peer reviews), outputs, and completion criteria. Because the software process is well defined, management has good insight into technical progress on all projects.<br /><br />
												The ECVET process capability of Level 3 organisations can be summarized as standard and consistent because both training and management activities are stable and repeatable. Within established training activites, cost, schedule, and functionality are under control, and overall training quality is tracked and reported. This process capability is based on a common, organisation-wide understanding of the activities, roles, and responsibilities in a defined ECVET process.
												</p>
											<p class="leveltxt2"> <a href="#!/cmf-levels" class="button3"><span></span><strong>Back To Levels</strong></a></p>
									</div>
								</div>
							</li>

<!-- ---------------------------------------------------------------------------------------------------------------------------------------------------------- -->


							<li id="leveli4">
								<div class="box1">
									<div class="inner">
										<a href="#" class="close" data-type="close"><span></span></a>
										<h1 class="lev4titledet"> Fourth-Level-Managed</h1>
												<img alt="managed" class="image" src="images/managed.png" />
												
												<p class="imgtxt1"  style="color:#D61740">Detailed measures of the ECVET process and VET quality are collected. Both the process and VET actions are quantitatively understood and controlled.<br />
												</p>
												<p class="lev4tdet">
												At the Managed Level, the organisation sets quantitative quality goals for both training programmes and processes. Productivity and quality are measured for important ECVET process activities across all programmes as part of an organisational measurement framework. An organization-wide ECVET programme database is used to collect and analyze the data available from the programmes' defined ECVET processes. ECVET processes are instrumented with well-defined and consistent measurements at Level 4. These measurements establish the quantitative foundation for evaluating the programmes' training processes and performance.<br /><br />
												Programmes achieve control over their training activities and processes by narrowing the variation in their process performance to fall within acceptable quantitative boundaries. Meaningful variations in process performance can be distinguished from random variation (noise), particularly within established training programmes. The risks involved in moving up the learning curve of a new application domain are known and carefully managed.<br /><br />
												The ECVET process capability of Level 4 organizations can be summarized as being quantifiable and predictable because the process is measured and operates within measurable limits. This level of process capability allows an organization to predict trends in process and overall training quality within the quantitative bounds of these limits. Because the process is both stable and measured, when some exceptional circumstance occurs, the “special cause” of the variation can be identified and addressed. When the known limits of the process are exceeded, action is taken to correct the situation. ECVET programmes are of predictably high quality.
												</p>
											<p class="leveltxt2"> <a href="#!/cmf-levels" class="button4"><span></span><strong>Back To Levels</strong></a></p>
									</div>
								</div>
							</li>
<!-- ---------------------------------------------------------------------------------------------------------------------------------------------------------- -->


							<li id="leveli5">
								<div class="box1">
									<div class="inner">
										<a href="#" class="close" data-type="close"><span></span></a>
										<h1 class="lev5titledet"> Last-Level-Optimizing</h1>
												<img alt="optimizing" class="image" src="images/optimizing.png" />
												
												<p class="imgtxt1"  style="color:#6AABC7">Continuous process improvement is enabled by quantitative feedback from the process and from piloting innovative ideas and technologies.
												</p>
												<p class="lev5tdet">
												At the Optimising Level, the entire organization is focused on continuous process improvement. The organisation has the means to identify weaknesses and strengthen the process proactively, with the goal of preventing the occurrence of defects. Data on the effectiveness of the ECVET process is used to perform cost-benefit analyses of new techniques, standards, and technologies and consult changes to the organisation-wide ECVET process. Innovations that exploit the best practices are identified and transferred throughout the organization.<br><br>
												All members of teams implementing ECVET programmes in Level 5 organisations analyse defects to determine their causes. Processes are evaluated to prevent known types of defects from recurring, and lessons learned are disseminated to other programmes. There is chronic waste, in the form of rework, in any system simply due to random variation. Waste is unacceptable; organised efforts to remove waste result in changing the system, i.e., improving the process by changing “common causes” of inefficiency to prevent the waste from occurring. While this is true of all the maturity levels, it is the focus of Level 5.<br><br>
												The software process capability of Level 5 organisations can be characterized as continuously improving because Level 5 organisations are continuously striving to improve the range of their process capability, thereby improving the process performance of their ECVET programmes. Improvement occurs both by incremental advancements in the existing process and by innovations using new training techniques, approaches, emerging technologies, standards and methods. Technology and process improvements are planned and managed as ordinary training activities.
												</p>
											<p class="leveltxt2"> <a href="#!/cmf-levels" class="button5"><span></span><strong>Back To Levels</strong></a></p>
									</div>
								</div>
							</li>


							





<!-- ---------------------------------------------------------------------------------------------------------------------------------------------------------- -->
							<li id="page_About_More">
								<div class="box1">
									<div class="inner">
										<a href="#" class="close" data-type="close"><span></span></a>
										<h1 class="hometitle">Rationale of Capability Maturity Frameworks</h1>
										<div class="wrapper" style="text-align:left">
											<p class="color1 pad_bot2"><strong></strong></p>
											<p>The Software Engineering Institute (SEI) a federally funded research and development center sponsored by the US Department of Defence and operated by Carnegie Mellon University, developed the original capability maturity model - SW-CMM, Capability Maturity Model for Software - in the early 1990s, which is still widely used today.
											Capability maturity models have gained widescale acceptance over the last decade. These models and their associated methods were originally applied to IT solutions, particularly software solutions, but a number of IT-related disciplines have developed capability maturity models to support process improvement in areas such as:</p>
										</div>
													<ul style="list-style-type:square; text-align:left">
													<li><strong>People</strong> – the P-CMM (People Capability Maturity Model), and the IDEAL Life Cycle Model for Improvement.</li>
													<li><strong>Systems Engineering</strong>– the SE-CMM (Systems Engineering Capability Maturity Model).</li>
													<li><strong>Software Acquisition</strong> – the SA-CMM (Software Acquisition Capability Maturity Model).</li>
													<li><strong>CMMI</strong> (Capability Maturity Model Integration).</li>
													</ul>
										<br />	 
											<div class="wrapper" style="text-align:left">
											<p class="color1 pad_bot2"><strong></strong></p>
											<p>The models have been adopted by large organizations, including the US Department of Commerce, the US DoD, the UK Government, and a number of large services organizations, to assess competencies. As an example of the trend towards increased interest in applying capability maturity model techniques to IT architecture, all US federal agencies are now expected to provide maturity models and ratings as part of their IT investment management and audit requirements. In particular, the US Department of Commerce (DoC) has developed an IT Architecture Capability Maturity Model (ACMM)2 to aid in conducting internal assessments. The ACMM provides a framework that represents the key components of a productive IT architecture process. The goal is to enhance the overall odds for success of IT architecture by identifying weak areas and providing a defined evolutionary path to improving the overall architecture process.
											The rationale of all of these models are to facilitate the introduction of a process improvement methodology, which aims to take projects, teams and organisations from the 1st “chaotic” or “initial” level, to a higher level, ideally but not necessarily level 5, "optimising".<br /> <br />Skipping levels is counter-productive because each level forms a necessary foundation from which to achieve the next level. The models identify the levels through which an organization must evolve to establish a culture of excellence in the related domain. Processes without the proper foundation fail at the very point they are needed most – under stress – and they provide no basis for future improvemen
											</p>
											<a href="#!/page_About" class="button1"><span></span><strong>back</strong></a>
										</div>
									</div>
								</div>
							</li>



							<li id="comments">
								<div class="box1">
									<div class="inner">
										<a href="#" class="close" data-type="close"><span></span></a>
										<h1 class="hometitle">General Comments</h1>
										
											<div class="cmt-container" >
											<a href="#rcom" class="button1"><span></span><strong>write new comment</strong></a>
											<a href="#!/key-practices" class="button1"><span></span><strong>back to key practices</strong></a><br><br><br>
											
											
											    <?php 
											    $sql = mysql_query("SELECT * FROM comments WHERE id_post = '$id_post'") or die(mysql_error());
											    
											    while($affcom = mysql_fetch_assoc($sql)){ 
											        $name = $affcom['name'];
											        $email = $affcom['email'];
											        $comment = $affcom['comment'];
											        $date = $affcom['date'];
											        $default = "mm";
											        $size = 35;
											        $grav_url = "http://www.gravatar.com/avatar/".md5(strtolower(trim($email)))."?d=".$default."&s=".$size;
											        

											    ?>
											    <div class="cmt-cnt">
											        <img src="<?php echo $grav_url; ?>" />
											        <div class="thecom">
											            <h5><?php echo $name; ?></h5><span data-utime="1371248446" class="com-dt"><?php echo $date; ?></span>
											            <br/>
											            <p class="hometxt">
											                <?php echo $comment; ?>
											            </p>
											        </div>
											    </div>
											    <?php 
											};?>


											    <div class="new-com-bt" id="rcom">
											        <span>Write a comment ...</span>
											    </div>
											    <div class="new-com-cnt">
											        <input type="text" id="name-com" name="name-com" value="" placeholder="Your name" />
											        <input type="mail" id="mail-com" name="mail-com" value="" placeholder="Your e-mail adress" />
											        <textarea class="the-new-com"></textarea>
											        <div class="bt-add-com">Post comment</div>
											        <div class="bt-cancel-com">Cancel</div>
											    </div>
											    <div class="clear"></div>
											</div>
									</div>
								</div>
							</li>


							


							


<!-- ---------------------------------------------------------------------------------------------------------------------------------------------------------- -->
						</ul>
					</article>
<!-- / content -->
				</div>
			</div>
			<div class="block"></div>
		</div>
		<div class="bg1">
			<div class="main">
<!-- footer -->
				<footer>
					<div class="bg_spinner"></div>
<!-- 					<ul class="pagination">
						<li class="current"><a href="images/plain-white-background-tumblr-elegant-free-wallpaper-ljlsydkr.jpg">1</a></li>
						<li><a href="images/bg_img2.jpg">2</a></li>
						<li><a href="images/bg_img3.jpg">3</a></li>
					</ul> -->
					<div class="col_1">
						<a href="index.php" id="footer_logo"></a>
					</div>

				</footer>
<!-- / footer-->
			</div>
		</div>
		<script type="text/javascript">
   $(function(){ 
        //alert(event.timeStamp);
        $('.new-com-bt').click(function(event){    
            $(this).hide();
            $('.new-com-cnt').show();
            $('#name-com').focus();
        });

        /* when start writing the comment activate the "add" button */
        $('.the-new-com').bind('input propertychange', function() {
           $(".bt-add-com").css({opacity:0.6});
           var checklength = $(this).val().length;
           if(checklength){ $(".bt-add-com").css({opacity:1}); }
        });

        /* on clic  on the cancel button */
        $('.bt-cancel-com').click(function(){
            $('.the-new-com').val('');
            $('.new-com-cnt').fadeOut('fast', function(){
                $('.new-com-bt').fadeIn('fast');
            });
        });

        // on post comment click 
        $('.bt-add-com').click(function(){
            var theCom = $('.the-new-com');
            var theName = $('#name-com');
            var theMail = $('#mail-com');

            if( !theCom.val()){ 
                alert('You need to write a comment!'); 
            }else{ 
                $.ajax({
                    type: "POST",
                    url: "ajax/add-comment.php",
                    data: 'act=add-com&id_post='+<?php echo $id_post; ?>+'&name='+theName.val()+'&email='+theMail.val()+'&comment='+theCom.val(),
                    success: function(html){
                        theCom.val('');
                        theMail.val('');
                        theName.val('');
                        $('.new-com-cnt').hide('fast', function(){
                            $('.new-com-bt').show('fast');
                            $('.new-com-bt').before(html);  
                        })
                    }  
                });
            }
        });

    });
</script>
<script language="JavaScript">
// Code for validating the form
// Visit http://www.javascript-coder.com/html-form/javascript-form-validation.phtml
// for details
var frmvalidator  = new Validator("myemailform");
frmvalidator.addValidation("name","req","Please provide your name"); 
frmvalidator.addValidation("email","req","Please provide your email"); 
frmvalidator.addValidation("email","email","Please enter a valid email address"); 
</script>

		<script type="text/javascript"> Cufon.now(); </script>
		<script>
		$(window).load(function() {
			$('.spinner').fadeOut();
			$('body').css({overflow:'inherit'})
		})
		</script>
	</body>
</html>
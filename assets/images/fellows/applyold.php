<?php session_start() ?>
<!DOCTYPE html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Exosphere</title>
    <link rel="shortcut icon" href="images/favicon.ico" />
    <link href='http://fonts.googleapis.com/css?family=Lato:300,400,700,900' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" type="text/css" href="styles/style.css" />
    <link rel="stylesheet" type="text/css" href="styles/apply.css" />
</head>

<body>
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
	<script src="scripts/form.js" type="text/javascript"></script>
	<script src="scripts/nav.js" type="text/javascript"></script>
	
	<header>
	    	<div id="logo"><a href="/"></a></div>
			<div id="social">
	        	<div class="socialButton facebook"><a class="button" href="http://facebook.com/exospherical" target="_blank"></a></div>
	            <div class="socialButton twitter"><a class="button" href="http://twitter.com/exosphereHQ" target="_blank"></a></div>
	        </div>
	        <nav>
	        	<div class="navButton bolder selected">APPLY</div>
	            <div class="navButton"><a href="team.php">Team</a></div>
	            
	        </nav>
	</header>
    
    <div id="wrapper">
    	<div id="head">
            <?php if(isset($_SESSION['sent'])) {
            	echo '<div id="confirmation">The application has been sent successfully!<br />You will receive a confirmation message. Thank you.</div>';
            	unset($_SESSION['sent']);
            } ?>
	      <h1>Apply to Exosphere</h1>
	      <h6>Fields marked with a <span>*</span> are required.</h6>    
        </div>
        <div id="leftColumn">
        	<div class="line">Name<span>*</span></div>
            <div class="line">E-mail<span>*</span></div>
            <div class="line">Phone Number<span>*</span></div>
            <div class="line">Gender<span>*</span></div>
            <div class="line">Birthdate<span>*</span></div>
            <div class="line">Nationality<span>*</span></div>
            <div class="line">Country of Residence<span>*</span></div>
            <div class="line">Website/Blog</div>
            <div class="line">Twitter</div>
            <div class="line">Myers-Briggs Type<span>*</span></div>
            <div class="line">Languages Spoken<span>*</span></div>
            
            <div class="tall">If you could create one project and work on it for the rest of your life, what would it be, and why?<span>*</span></div> 
            <div class="tall">If you were to assemble a “dream team” to join you in your project, who would you want on the team, and why?<span>*</span></div>
            <div class="tall">Who is your most admired influencer? How did that person help you?<span>*</span></div>
            <div class="tall">What do you believe you can contribute to the Exosphere community?<span>*</span></div>
            <div class="tall">Describe the most difficult or painful experience of your life. What did you learn from it? How did you persevere? Who helped you?<span>*</span></div>
            <div class="tall">It has been said that to succeed as an entrepreneur you must “eat glass and stare into the abyss.” What do you think of this?<span>*</span></div>
            <div class="tall">Evaluate the following quote: “It requires more than a day’s devotion to know and possess the value of a day.”<span>*</span></div>
            <div class="tall">What is your main motivation to be part of the Exosphere Bootcamp? What do you hope to gain, learn, and do while you are here?<span>*</span></div>
            <div class="tall">What else should we know about you?</div>
            <div class="tall">What are your current plans for once the boot camp is finished?</div>
	    <div class="tall">How did you hear about Exosphere?<span>*</span></div>
	    <div class="tall">If you have a promotional code, enter it here:</div>
            
        </div>
        <div id="rightColumn">
            <form action="form.php" method="post">
                <div class="line"><input type="text" name="name" size="40" /></div>
                <div class="line"><input type="email" name="email" size="30" /></div>
                <div class="line"><input type="tel" name="phone" /></div>
                <div class="line">
                	<input type="radio" name="gender" value="Female" /><label>Female</label>
                	<input type="radio" name="gender" value="Male" /><label>Male</label>
                </div>
                <div class="line">
                	<select name="birthmonth">
                	<option></option>
                        <option value="January"> January </option>
                        <option value="February"> February </option>
                        <option value="March"> March </option>
                        <option value="April"> April </option>
                        <option value="May"> May </option>
                        <option value="June"> June </option>
                        <option value="July"> July </option>
                        <option value="August"> August </option>
                        <option value="September"> September </option>
                        <option value="October"> October </option>
                        <option value="November"> November </option>
                        <option value="December"> December </option>
               	 	</select>
                    <select name="birthday">
                        <option></option>
                        <?php for($i = 1; $i <= 31; $i++) {
                        	echo '<option value="'.$i.'">'.$i.'</option>';
                        } ?>
                    </select>
                    <select name="birthyear">
                        <option></option>
                        <?php for($y = 2012; $y >= 1900; $y--) {
                        	echo '<option value="'.$y.'">'.$y.'</option>';
                        } ?>
                    </select>
                </div>
                <div class="line"><input type="text" name="nationality" /></div>
                <div class="line"><input type="text" name="country" /></div>
                <div class="line"><input type="text" name="website" size="45" optional="yes" /></div>
                <div class="line"><input type="text" name="twitter" size="16" optional="yes" /></div>
                <div class="line">
               		<select name="myersbriggs">
	                      <option value="">  </option>
	                      <option value="ISTJ"> ISTJ </option>
	                      <option value="ISFJ"> ISFJ </option>
	                      <option value="INFJ"> INFJ </option>
	                      <option value="INTJ"> INTJ </option>
	                      <option value="ISTP"> ISTP </option>
	                      <option value="ISFP"> ISFP </option>
	                      <option value="INFP"> INFP </option>
	                      <option value="INTP"> INTP </option>
	                      <option value="ESTP"> ESTP </option>
	                      <option value="ESFP"> ESFP </option>
	                      <option value="ENFP"> ENFP </option>
	                      <option value="ENTP"> ENTP </option>
	                      <option value="ESTJ"> ESTJ </option>
	                      <option value="ESFJ"> ESFJ </option>
	                      <option value="ENFJ"> ENFJ </option>
	                      <option value="ENTJ"> ENTJ </option>
                    </select>
                    <a href="http://bit.ly/RYWA9" target="_blank">Take the test here</a>
                </div>
                <div class="line"><input type="text" name="languages" size="40" /></div>
                <div class="tall"><textarea name="question1"></textarea></div>
                <div class="tall"><textarea name="question2"></textarea></div>
                <div class="tall"><textarea name="question3"></textarea></div>
                <div class="tall"><textarea name="question4"></textarea></div>
                <div class="tall"><textarea name="question5"></textarea></div>
                <div class="tall"><textarea name="question6"></textarea></div>
                <div class="tall"><textarea name="question7"></textarea></div>
                <div class="tall"><textarea name="question8"></textarea></div>
		<div class="tall"><textarea name="question10" optional="yes" ></textarea></div>
                <div class="tall"><textarea name="question11" optional="yes"></textarea></div>
		<div class="tall"><textarea name="question12"></textarea></div>
		<div class="tall"><textarea name="question13" size="10" optional="yes" ></textarea></div>
                
                <div class="line centered"><input class="send" type="submit" value="Send" /></div>
            </form>
        </div>
    </div>
    
    <footer>
    	<div id="logo"><a href="/"></a></div>
		<div id="social">
        	<div class="socialButton facebook"><a class="button" href="http://facebook.com/exospherical" target="_blank"></a></div>
            <div class="socialButton twitter"><a class="button" href="http://twitter.com/exosphereHQ" target="_blank"></a></div>
        </div>
        <nav>
        	<div class="navButton bolder selected">APPLY</div>
            	<div class="navButton"><a href="team.php">Team</a></div>
            	
        </nav>
    </footer>  
    <?php include('analytics.php'); ?>  
</body>

</html>

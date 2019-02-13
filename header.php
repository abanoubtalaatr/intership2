<!DOCTYPE html>
<html>
<head>
	<title></title>
     <link rel="stylesheet" type="text/css" href="bootstrap.min.css">

	<link rel="stylesheet" type="text/css" href="main_style_ar.css">
     <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">



</head>
<body>
	<div class="gain_navbar">
	<div class="gain_container">
		<div class="gain_brand"><h4><a href="/">gain experience</a></h4></div>
	    <div class="gain_aims">
			<ul class="unlist_style">
				<li><a href="/news">news</a> </li>
				<li><a href="/projects">projects </a></li>
				<li> <a href="about">about us</a></li>
				<li> <a href="contact">contact us</a></li>
				<li id = 'log_in'> join us</li> <!-- This li to click it to appear form -->
			</ul>
	    </div><!--  End class gain_aims -->
	</div><!--  End class gain_container -->
</div><!--  End class gain_navbar -->
<div class="form">
       <div class="contain-inst-form">
         
          <div class="instruction" style="position: relative;">
             <i class="fas fa-times-circle" id = 'close' style="position: absolute;  
               right: 0px;
               top: -19px;cursor: pointer;"></i>
               <p>after you sumbit in this form you will receive the test on your email and all details </p>
          </div>
               
          <div class="contain-form">
          
               <form action="post" id="sumbit_to_get_task">
                    <div class="contain-input">
                         <input type="text" name="first_name" placeholder="First name">
                    </div>

                    <div class="contain-input">
                         <input type="text" name="last_name" placeholder="Last Name">
                    </div>

                    <div class="contain-input">
                         <input type="email" name="email" placeholder="Email">
                    </div>
                    
               <div class="contain-select">
                    <label>choose your field</label>
                    <select name="your_field">
                         <option value="">here</option>
                         <option value="web design">web design </option>
                         <option value="web devolopment">web devolopment</option>
                         <option value="mobile devolopment"><ins>mobile</ins></option>
                    </select>
               </div>
                    <div class="contain-button">
                         <button  id ='join_submit'type="submit" name="submit">submit</button>
                    </div>
                    
               </form>
          </div> <!-- End class contain-form -->
       </div> <!-- End class contain-inst-form -->

</div> <!-- End class form  -->
 <div class="cover" id= 'cover'></div><!--  this class using to hidden contect of the page when the user click on join to focus only on the form  -->
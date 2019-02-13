<!-- here slider  -->
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="" alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="" alt="Third slide">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
<div class="staticties">
	<div class="gain_container">
		<h2>stactics</h2>
		<div class="info_teams">
		    <h2>about teams</h2>	
			<h3> Number of teams in the site is : <strong>30</strong></h3>
		</div><!--  End info team  -->


		<div class="info_project">
			<!-- number of project available now -->
			<h2>about project</h2>
			<div class="number_project">
				<h3>Number of project is : 3</h3>
			</div>
			<div class="name_of_project">
	          <h5> <strong>facebook</strong> number of teams work in it is 4</h5>
	          <h5> <strong>youtube</strong> number of teams work in it is 6</h5> 
	          <h5> <strong>amazon</strong> number of teams work in it is 8</h5> 
			</div>
		</div><!--  End info project -->

	</div><!--  End class gain_contaier -->
</div>  <!-- End class statics -->

<div class="posts xl-col-12 sm-colo-6">
	<div class="gain_container">

 <?php 
       $date = $this->data['posts'];
       $chunck = array_chunk($date, 2);
       for ($i=0; $i < count($chunck) ; $i++) { 
       	 echo "<div class='row'>";
       	  foreach ($chunck as $key => $value) {
       	  	   echo "<div class='item'>
						<h3>{$value[$key]['title']}</h3>
						<p>{$value[$key]['description']} </p>
		            </div>";
       	  }
       	  echo "</div>";
       }

      ?>



      <!--  <div class="row">

       	<div class="item">
			<h3>title of post</h3>
			<p>this for test only to appear </p>
		</div>

		<div class="item">
			<h3>title of post</h3>
			<p>this for test only to appear </p>
		</div>

       </div>


       <div class="row">

       	<div class="item">
			<h3>title of post</h3>
			<p>this for test only to appear </p>
		</div>

		<div class="item">
			<h3>title of post</h3>
			<p>this for test only to appear </p>
		</div>

       </div>
		


 -->	</div> <!--  End gain_container -->
</div> <!--  End posts  -->



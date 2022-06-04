<?php
	include_once "header.php";
	include_once "sidebar.php";


function post(){
 
  $tableName = $_GET['tableName']; 
  $id = $_GET['id']; 

  $mysqli = new mysqli('mysql.zzz.com.ua','loqemean2517','Lebedev2517','loqiemean');
  $content = $mysqli->query("SELECT * FROM `$tableName` WHERE  `id`= $id");
  $posts =  mysqli_fetch_all($content,MYSQLI_ASSOC);
  return $posts;
}

$posts = post();

?>



<main>
  <div class="container-fluid" id="main">

     	      <? foreach($posts as $post) : ?>


<div class="conteiner">
	<div class="row">
      <div class="col-12 ml-1" >
	<div id="carouselExampleIndicators" class="carousel slide" data-ride='carusrl'>

		 <!-- Навигация -->
		<ol class="carousel-indicators">
			<li class="active" data-target="#carouselExampleIndicators" data-slide-to="0"></li>
			<li  data-target="#carouselExampleIndicators" data-slide-to="1"></li>
			<li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
		</ol>

		 <!-- Картинки которые будут использоваться -->
		<div class="carousel-inner">
			<div class="carousel-item active">
				<img src="<?=$post['image1']?>" alt="" class="d-block w-100">
			</div>
			<div class="carousel-item">
				<img src="<?=$post['image2']?>"  alt="" class="d-block w-100">
			</div>
			<div class="carousel-item">
				<img src="<?=$post['image3']?>"   alt="" class="d-block w-100">
			</div>
		</div>

		<!-- стрелочки -->
		<a href="#carouselExampleIndicators" class="carousel-control-prev" role="button" data-slide="prev">
			<span class="carousel-control-prev-icon" aria-hidden="true"></span>
			<!-- для слюдей с плохим зрением -->
			<span class="sr-only">Previous</span>
		</a>
		<a href="#carouselExampleIndicators" class="carousel-control-next" role="button" data-slide="next">
			<span class="carousel-control-next-icon" aria-hidden="true"></span>
			<!-- для слюдей с плохим зрением -->
			<span class="sr-only">Next</span>
		</a>
			</div>
		</div>
	</div>
</div>



	  <div class="row no-gutters mt-4 pl-3" id="post">
			<div class="col-12 ml-sm-4 "><h1><?=$post['title']?></h1></div>
			<div class="col-12 ml-sm-4 "><h3><?=$post['price']?></h3></div>
			<div class="col-11 mt-2 pl-4 px-sm-5"><p><?=$post['text']?></p></div>
			<div class=" ml-sm-4 my-3 d-flex align-items-center justify-content-center" id="post_button"><a href="<?=$post['contact']?>" target="_blank">ПОЛНАЯ ИНФОРМАЦИЯ</a></div>

	<? endforeach; ?>
	  </div>


	</div>
</main>


<? include_once "footer.php"; ?>






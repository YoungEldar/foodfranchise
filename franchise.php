<?php
	include_once "header.php";
	include_once "sidebar.php";


function allFranchises(){
 
  $category = $_GET['category']; 
  $mysqli = new mysqli('mysql.zzz.com.ua','loqemean2517','Lebedev2517','loqiemean');
  $content = $mysqli->query("SELECT * FROM `$category`");
  $posts =  mysqli_fetch_all($content,MYSQLI_ASSOC);
  return $posts;
}

$posts = allFranchises();

?>

<div id="contact-form">
   <div class="contact-icon">
   	  <i class="fas fa-info-circle"></i>
      <div class="contact-cirle"></div> 
   </div>
   <div class="contact-information">
   	  <ul>
   	  	<li><i class="fas fa-phone"></i>+380950703058</li>
   	  	<li><i class="fas fa-envelope"></i>eldarlebedev@gmail.com</li>
   	  	<li><i class="fab fa-instagram"></i>@BigBabyTapy2.0</li>
   	  </ul>
   </div>
</div>


<main>
  <div class="container-fluid" id="main">
	  <div class="row no-gutters">
	      <? foreach($posts as $post) : ?>
	     	<div class="franchise-block col-12 col-sm-6 col-md-4 col-lg-3" >
			<img src="<?=$post['image1']?>" alt="" style="width: 130%;height: 100%;">
			<a href="post.php?id=<?=$post['id']?>&&tableName=<?=$post['category']?>">
				<div class="franchise-category">
				<h3><?=$post['title']?></h3>
				<h3 id="price"><?=$post['price']?></h3>
				
				<div class="circle d-flex  align-items-center justify-content-center"><i class="fas fa-arrow-right"></i></div>
			</div></a>
		</div>
	
	<? endforeach; ?>
	
	   </div>
	</div>
</main>


<? include_once "footer.php"; ?>


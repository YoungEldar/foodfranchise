<?php

include_once "header.php";
include_once "sidebar.php";

function blog_post(){
	$id = $_GET['id'];
	$mysqli = new mysqli('mysql.zzz.com.ua','loqemean2517','Lebedev2517','loqiemean');
	$content = $mysqli->query("SELECT * FROM `blog` WHERE `id` = $id");
	$posts = mysqli_fetch_all($content,MYSQLI_ASSOC);
	return $posts;
}
$posts = blog_post();


?>

<main >
	<div class="container-fluid" id="main" >
		<div class="row pl-2  justify-content-center">
			
			<? foreach ($posts as $post) : ?>
			<div class=" col-12 mt-2  d-flex px-0 justify-content-center" >
			
				<div class="blog-post">
						<h2 class="my-2 mx-4"><?=$post['title']?></h2>
						<img class="my-3  mx-0 w-100" src="<?=$post['image']?>" alt="">
						<p class="mx-4"><?=$post['text']?></p>
					
				</div>

			</div>	
		<? endforeach;?>
		</div>
	</div>
</main>


<?
include_once "footer.php";
?>
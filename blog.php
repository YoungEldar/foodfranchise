<?php

include_once "header.php";
include_once "sidebar.php";

function blog(){
	$mysqli = new mysqli('mysql.zzz.com.ua','loqemean2517','Lebedev2517','loqiemean');
	$content = $mysqli->query("SELECT * FROM `blog`");
	$posts = mysqli_fetch_all($content,MYSQLI_ASSOC);
	return $posts;
}
$posts = blog();

?>

<main >
	<div class="container-fluid" id="main" style="background-color:#b3b7b8;">
		<div class="row px-3 pb-2  justify-content-center">
			
			<? foreach ($posts as $post) : ?>
			<div class="col-6 col-md-4 col-lg-3 col-xl-2 mt-2 d-flex px-1 justify-content-center">
			
				<div class="blog">
					<a href="blog-post.php?id=<?=$post['id']?>">
						<img src="<?=$post['image']?>" alt="">
						<h2><?=$post['title']?></h2>
						<p><?=$post['text']?></p>
					</a>
				</div>

			</div>	
		<? endforeach;?>
		</div>
	</div>
</main>


<?
include_once "footer.php";
?>
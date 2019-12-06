
<div class="header-container">
	<?php include "pages/header.php" ?>
</div>
<?php 
	$_SESSION["page"] = "pages/login.php";
	
	if ( !empty($_SESSION["usuario"]) ){
		$_SESSION["page"] = "pages/users-list.php";
	}
	
	if ( empty($_SESSION["usuario"]) && !empty($_SESSION["new-user-error"]) ){
		$_SESSION["page"] = "pages/new-user-form.php";
	}else{
		if ( !empty($_SESSION["user-page"]) ){

			$_SESSION["page"] = "pages/".$_SESSION["user-page"].".php";
			$_SESSION["user-page"] = "";
		}else{
			if (!empty($_GET["user-page"])){
				$_SESSION["page"] = "pages/".$_GET["user-page"].".php";
			}
		}
	}

?>

<div class="main-container">
	<?php include $_SESSION["page"] ?>
</div>
<div class="footer-container">
	<?php include "pages/footer.php" ?>
</div>

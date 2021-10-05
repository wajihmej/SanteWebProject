<?PHP
include "../Controller/CategorieC.php";


$categorieC=new CategorieC();
if (isset($_POST["id"])){
	$categorieC->supprimerCategorie($_POST["id"]);
	header('Location: AfficherCategories.php');
}

?>
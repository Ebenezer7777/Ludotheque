<?php
include './dbconnection.php';
//function produit


	function get_pro(){
		global $connect;
		$get_pro=$connect->prepare("select * from games");
		$get_pro->execute(array());
		$dir_name=dirname(__FILE__)."../admin/image";
		
			while($row_pro=$get_pro->fetch()){
			echo "<div class='prod-box'>
						<img  src=";
						echo '"';
						echo "../admin/image";
						echo "/";
						echo $row_pro['img'];
						echo '"';
						echo ">
						<div class='prod-trans'>
							<div class='prod-feature'>";
								echo "<br><br><br><br><br><br><br><p>";
								echo $row_pro['name'];
								echo"</p><br>
								<p style='color:#fff;'>";
								echo "Retour :30 jours</p><br><br><br><br>
								<a href='./utilisateur_index.php?add_booking=";
								echo $row_pro['ID_Game'];
								echo "'><button>Commande</button></a>";
					echo "</div>
						</div>
					</div>
			";
			}
		
	}

//function search


function get_prod_search(){
	global $connect;
	if(isset($_GET['search'])){
		$searcharea=$_GET['searcharea'];
		$get_prod_search=$connect->query("select * from games where p_key_word like '$searcharea'");
		
		if($get_prod_search->rowcount() > 0){
			while($row_prod_search=$get_prod_search->fetch()){
			echo "<div class='prod-box'>
						<img src=";
						echo '"';
						echo "../admin/image";
						echo "/";
						echo $row_prod_search['img'];
						echo '"';
						echo ">
						<div class='prod-trans'>
							<div class='prod-feature'>";
								echo "<br><br><br><br><br><br><br><p>";
								echo $row_prod_search['NAME'];
								echo"</p><br>
								<p style='color:#fff;'>";
								echo "/30 jours</p><br><br><br><br>
								<a href='./utilisateur_index.php ?add_booking=";
								echo $row_prod_search['id'];
								echo "'><button>Commande</button></a>";
					echo "</div>
						</div>
					</div>
			";
			}
		}else{
			echo "<div class='c'>&nbsp;&nbsp;</div>
			<div class='error'><p style='color:#fff;font-weight:bold;text-align:center; width:1200px;'>Aucun jeu de se nom</p></div>";
		}
	}
}



//panier function

function booking(){
	global $connect;
	if(isset($_GET['add_booking'])){
		$pro_id=$_GET['add_booking'];
		$req=$connect->query("select * from games where ID_Game='$pro_id'");
		
		if($pro_id==0){
			echo "<script>alert('Le jeu n'est pas disponible pour le moment');</script>";
		}else{
			$get_booking=$connect->query("select * from booking where ID_Game='$pro_id'");
			
			
			if($get_booking->rowcount() < 0){
				echo "<script>alert('Le jeu n'est pas disponible pour le moment');</script>";
			}else{
				$a=2;
				$now = date('Y-m-d');
				$start_date = strtotime($now);
				$end_date = strtotime("+30 day", $start_date);
				$dateru=date('Y-m-d', $end_date);
				$insert_booking=$connect->query("insert into booking values('$a','$pro_id','$now','$dateru')");
				
			
				
					if(isset($run_i_booking)){
						echo "<script>alert('La commande a ete effectue avec succes');</script>";
						echo '<meta http-equiv="refresh" content="2; url=\'utilisateur_index.php.php\'">';
					}
			}
		}
	}
}

?>
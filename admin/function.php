<?php
	
	include './dbconnection.php';
//function produit

	function get_pro(){
		global $connect;
		$run_pro = $connect->query("select * from games");
		$dir_name=dirname(__FILE__)."../admin/image";
		
			while($row_pro=$run_pro->fetch(PDO::FETCH_ASSOC)){
			echo "<div class='prod-box'>
						<img src=";
						echo '"';
						echo "./image";
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
								echo "30 jours</p><br><br><br><br>
								";
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
						echo "image";
						echo "/";
						echo $row_prod_search['img'];
						echo '"';
						echo ">
						<div class='prod-trans'>
							<div class='prod-feature'>";
								echo "<br><br><br><br><br><br><br><p>";
								echo $row_prod_search['name'];
								echo"</p><br>
								<p style='color:#fff;'>";
								echo "30 jours</p><br><br><br><br>
								";
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


//function search supprimer


function get_prod_search_sup(){

	if(isset($_GET['search'])){
		global $connect;
		$searcharea=$_GET['searcharea'];
		$get_prod_search=$connect->query("select * from games where p_key_word like '$searcharea'");

		if($get_prod_search->rowcount() > 0){
			while($row_prod_search=$get_prod_search->fetch()){
			echo "<div class='prod-box'>
						<img src=";
						echo '"';
						echo "./image";
						echo "/";
						echo $row_prod_search['img'];
						echo '"';
						echo ">
						<div class='prod-trans'>
							<div class='prod-feature'>
								<a href='supprimer.php?delete=";
								echo $row_prod_search['id'];
								echo "'><img src='../images/Action.jpg' style='width:50px; height:50px;float: right;'></a>";
								echo "<br><br><br><br><br><br><br><p>";
								echo $row_prod_search['name'];
								echo"</p><br>
								<p style='color:#fff;'>";
								echo "30 jours</p>";
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


//function supprimer
function get_pro_sup(){
	global $connect;
		$get_pro_sup=$connect->prepare("select * from games");
		$get_pro_sup->execute(array());
		
			while($row_pro_sup=$get_pro_sup->fetch()){
			echo "<div class='prod-box'>
						<img src=";
						echo '"';
						echo "./image";
						echo "/";
						echo $row_pro_sup['img'];
						echo '"';
						echo ">
						<div class='prod-trans'>
							<div class='prod-feature'>
								<a href='supprimer.php?delete=";
								echo $row_pro_sup['ID_Game'];
								echo "'><img src='image/delete.png' style='width:50px; height:50px;float: right;'></a>";
								echo "<br><br><br><br><br><br><br><p>";
								echo $row_pro_sup['name'];
								echo"</p><br>
								<p style='color:#fff;'>";
								echo "30 jours</p>";
					echo "</div>
						</div>
					</div>
			";
			}
		
	}

	function get_prod_search_update(){

		if(isset($_GET['search'])){
			global $connect;
			$searcharea=$_GET['searcharea'];
			$get_prod_search=$connect->query("select * from games where p_key_word like '$searcharea'");
	
			if($get_prod_search->rowcount() > 0){
				while($row_prod_search=$get_prod_search->fetch()){
				echo "<div class='prod-box'>
							<img src=";
							echo '"';
							echo "image";
							echo "/";
							echo $row_prod_search['img'];
							echo '"';
							echo ">
							<div class='prod-trans'>
								<div class='prod-feature'>";
									echo "<br><br><br><br><br><br><br><p>";
									echo $row_prod_search['titre'];
									echo"</p><br>
									<p style='color:#fff;'>";
									echo "30 jours</p><br><br><br><br>";
									echo "<a href='mise-a-jour-jeu.php?update=";
									echo $row_prod_search['id'];
									echo "'><button>mise a jour</button></a>";
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
	//function update
function get_pro_update(){
	global $connect;
		$get_pro_up=$connect->prepare("select * from games");
		$get_pro_up->execute(array());
		
			while($row_pro_up=$get_pro_up->fetch()){
			echo "<div class='prod-box'>
						<img src=";
						echo '"';
						echo "image";
						echo "/";
						echo $row_pro_up['img'];
						echo '"';
						echo ">
						<div class='prod-trans'>
							<div class='prod-feature'>";
								echo "<br><br><br><br><br><br><br><p>";
								echo $row_pro_up['name'];
								echo"</p><br>
								<p style='color:#fff;'>"; 
								echo "30 jours</p><br><br><br><br>";
								echo "<a href='mise-a-jour-jeu.php?update=";
								echo $row_pro_up['ID_Game'];
								echo "'><button>mise a jour</button></a>";
					echo "</div>
						</div>
					</div>
			";
			}
		
	}

	
//panier function

function booking(){
	global $connect;
	if(isset($_GET['add_booking']) ){
		$pro_id=$_GET['add_booking'];
		$req=$connect->query("select * from games where id='$pro_id'");
		
		if($pro_id==0){
			echo "<script>alert('Le jeu nest pas disponible pour le moment');</script>";
		}else{
			$get_booking=$connect->query("select  COUNT(*) from booking where id='$pro_id'");
			
			
			if($get_booking  < 0){
				echo "<script>alert('Le jeu nest pas disponible pour le moment');</script>";
			}else{
				$nme=$connect->query("select * from member");
				$e=$nme->fetch();
				$a=$e['ID_Member'];
				$now = date('Y-m-d');
				$start_date = strtotime($now);
				$end_date = strtotime("+30 day", $start_date);
				$datera=date('Y-m-d', $end_date);
				$insert_booking=$connect->query("insert into booking values('$a','$pro_id','$now','$datera')");

				

					if(isset($run_i_booking)){
						echo "<script>alert('La commande a ete effectue avec succes');</script>";
						echo '<meta http-equiv="refresh" content="2; url=\'admin_index.php\'">';
					}
			}
		}
	}
}
?>
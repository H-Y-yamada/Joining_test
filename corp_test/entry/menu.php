<html>

<head>
	
	<title>MENU</title>
	<link rel="stylesheet" type="text/css" href="css/index.css" media="all">
	<script type="text/javascript" src="js/index.js"></script>
	
</head>

<body onload="GetQueryString()">

	<h2 id="uID"></h2>

	<?php 
		
		session_start();
		if(!empty($_GET['user'])){
			$_SESSION['user']=$_GET['user'];
//			$_SESSION['user_name']=$_GET['user_name'];
			$_SESSION['LastName']=$_GET['LastName'];
			$_SESSION['FirstName']=$_GET['FirstName'];
			setcookie("lastname", $_GET['LastName']);
			setcookie("firstname", $_GET['FirstName']);
			unset($_SESSION['q1']);
			unset($_SESSION['q2']);
			unset($_SESSION['q3']);
			unset($_SESSION['q4']);
		}
		
		$user=$_SESSION['user'];
		$user_name=$_SESSION['user_name'];
		echo "<a href=\"index.php\">端末選択画面へ戻る</a>";
		echo "<table class=\"menutb\">";
		echo "<tr>";
		echo "<td>";
		echo "<form action=\"q1.php\">";
		echo "<h3>四則演算</h3>";
		if(!empty($_SESSION['q1'])){
			$q1=$_SESSION['q1'];
			echo "<button type=\"submit\" id=\"bt1\" disabled class=\"menubt_pass\">受験終了</button>";
		}else{
			echo "<button type=\"submit\" id=\"bt1\" class=\"menubt\">受験する</button>";
		}
		echo "</form>";
		echo "</td>";
		echo "<td>";
		echo "<form action=\"q2.php\">";
		echo "<h3>暗号問題</h3>";
		
		if(!empty($_SESSION['q2'])){
			$q2=$_SESSION['q2'];
			echo "<button type=\"submit\" id=\"bt2\" disabled class=\"menubt_pass\">受験終了</button>";
		}else{
			echo "<button type=\"submit\" id=\"bt2\" class=\"menubt\">受験する</button>";
		}
		echo "</form>";
		echo "</td>";
		echo "</tr>";
/*		echo "<tr>";
		echo "<td>";
		echo "<form action=\"q3.php\">";
		echo "<h3>言語問題</h3>";
		
		if(!empty($_SESSION['q3'])){
			$q3=$_SESSION['q3'];
			echo "<button type=\"submit\" id=\"bt3\" disabled class=\"menubt_pass\">受験終了</button>";
		}else{
			echo "<button type=\"submit\" id=\"bt3\" class=\"menubt\">受験する</button>";
		}
		
		echo "</form>";
		echo "</td>";
*/		echo "<td>";
		echo "<form action=\"q4.php\">";
		echo "<h3>技術問題（※ エンジニアのみ）</h3>";
		
		if(!empty($_SESSION['q4'])){
			$q4=$_SESSION['q4'];
			echo "<button type=\"submit\" id=\"bt4\" disabled class=\"menubt_pass\">受験終了</button>";
		}else{
			echo "<button type=\"submit\" id=\"bt4\" class=\"menubt\">受験する</button>";
		}
		echo "</form>";
		echo "</td>";
		echo "</tr>";
		echo "</table>";
		
		


	?>
		
	
</body>
</html>
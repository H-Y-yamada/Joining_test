<html>

<head>
	
	<title>TEST</title>
	<link rel="stylesheet" type="text/css" href="css/index.css" media="all">
	<script type="text/javascript" src="js/index.js"></script>
	
</head>

<body onload="getFormsCnt()">
	
	<div id="header">
		<h1>入社テスト </h1>
	</div>
	
	<!--トップページ===================================================================== -->
	<form action="menu.php" >
		<div class="contents">	
			<p>
			受講者の氏名を入力してください。
			</p>
			<p>
				[苗字]<input type="text" id="LastName" name="LastName" value="">[名前]<input type="text" id="FirstName" name="FirstName" value="">
			</p>
			<p>係りの者より伝えられた端末番号を選択してください。</p>
			<p>
			<div class="radio-group clearfix">
				<input type="radio" id="radio_box1" name="user" value="1"><label for="radio_box1" onclick="">1</label>
				<input type="radio" id="radio_box2" name="user" value="2"><label for="radio_box2" onclick="">2</label>
				<input type="radio" id="radio_box3" name="user" value="3"><label for="radio_box3" onclick="">3</label>
				<input type="radio" id="radio_box4" name="user" value="4"><label for="radio_box4" onclick="">4</label>
				<input type="radio" id="radio_box5" name="user" value="5"><label for="radio_box5" onclick="">5</label>
				<input type="radio" id="radio_box6" name="user" value="6"><label for="radio_box6" onclick="">6</label>
				<input type="radio" id="radio_box7" name="user" value="7"><label for="radio_box7" onclick="">7</label>
				<input type="radio" id="radio_box8" name="user" value="8"><label for="radio_box8" onclick="">8</label>
				<input type="radio" id="radio_box9" name="user" value="9"><label for="radio_box9" onclick="">9</label>
				<input type="radio" id="radio_box10" name="user" value="10"><label for="radio_box10" onclick="">10</label>
			</div>
			</p>
			<br><br><br><br><br>
			<div class="center"><input type="button" id="next_bt" name="START" value="次へ" onclick="idchecked()"></div>
		</div>
		
	</form>
		
	
</body>
</html>
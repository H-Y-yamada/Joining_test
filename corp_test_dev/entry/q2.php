<html>

<head>
	<meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no">
	<title>暗号問題</title>
	<link rel="stylesheet" type="text/css" href="css/index.css" media="all">
	<script type="text/javascript" src="js/index.js"></script>
	
</head>

<body onload="getFormsCnt()">
	<div id="header">
		<h1>暗号問題</h1>
		<h2 id="limitTime">説明</h2>
		<div id="headbt">
			<button style="display:none" id="closebt" onclick="nextPage3()">回答を終了</button>
		</div>
	</div>

	<!--テスト２説明文==== -->
	<form>
		<div class="contents">
			<p>問題数：15問<br>
			制限時間：10分</p>
			<h3>●テスト内容の説明</h3>
			<p>このテストは、「2つの図形や文字の問に働く晴号の意味を推理する能力」を測定するものです。<br>
			下記の例のように2つの箱の問に円形の「暗号」があります。「暗号」の結果、左の図形は右の図形に変えられます。<br>
			元の図形と最後に得られた図形から、「暗号」の意味を解読します。</p>
			<img src="img/example.png">
			<p>(例1)の「暗号」の意味は、「図形の上下を逆さまにする」です。<br>
			(例2)の「暗号」の意味は、「黒い図形を白くする」です。</p>
			
			<p>なお、黒い矢印と白い矢印の2種類が使われている場合がありますが、違う色の矢印の方向には進めません。同じ色の矢印のみを進むことができます。<br>
			なお、実際の設問は、暗号図ひとつとそれに関連する設問3つがセットになっており、暗号図から暗号の意味を解読し、設問に答える形式です。各設問の空欄に当てはまるものを選択肢からひとつ選んでください。</p>
		 
			<h3>●注意</h3>
			<ul>
				<li>暗号は各セットの中でのみ共通の意昧をもちます。</li>
				<li>別のセットでは、暗号は違う意昧をもちます。</li>
				<li>同じセットの中で、異なる暗号が同じ意味をもつことはありません。</li>
				<li>なるべく上の問題から順に進めてください。あてずっぽうで多くの問題を回答した場合は減点となる場合があります。</li>
			</ul>
		
		</div>
		<div class="center"><input type="button" id="next_bt" name="START" value="START" onclick="nextPage()"></div>
	</form>
		
	<!--テスト２問題==== -->
	<form style="display:none">
		<div class="contents">
			<h3>[1]セット1</h3>
			<img src="img/1set_l.png">
			<div class="answer">
				<table width = "60%">
				 <tr>
				  <th width = "20%"><br></th>
				  <th width = "16%">A</th>
				  <th width = "16%">B</th>
				  <th width = "16%">C</th>
				  <th width = "16%">D</th>
				  <th width = "16%">E</th>
				 </tr>
				 <tr>
				  <th>問１の回答</th>
				  <td><input type="radio" name="q1" value="FALSE" checked="checked"></td>
				  <td><input type="radio" name="q1" value="TRUE"></td>
				  <td><input type="radio" name="q1" value="FALSE"></td>
				  <td><input type="radio" name="q1" value="FALSE"></td>
				  <td><input type="radio" name="q1" value="FALSE"></td>
				 </tr>
				 <tr >
				  <th>問２の回答</th>
				  <td><input type="radio" name="q2" value="FALSE"></td>
				  <td><input type="radio" name="q2" value="FALSE"></td>
				  <td><input type="radio" name="q2" value="FALSE"></td>
				  <td><input type="radio" name="q2" value="FALSE"></td>
				  <td><input type="radio" name="q2" value="TRUE"></td>
				 </tr>
				 <tr >
				  <th>問３の回答</th>
				  <td><input type="radio" name="q3" value="FALSE"></td>
				  <td><input type="radio" name="q3" value="FALSE"></td>
				  <td><input type="radio" name="q3" value="TRUE"></td>
				  <td><input type="radio" name="q3" value="FALSE"></td>
				  <td><input type="radio" name="q3" value="FALSE"></td>
				 </tr>
				</table>
			</div>
			<hr>
			<h3>[2]セット2</h3>
			<img src="img/2set_l.png">
			<div class="answer">
				<table width = "60%">
				 <tr>
				  <th width = "20%"><br></th>
				  <th width = "16%">A</th>
				  <th width = "16%">B</th>
				  <th width = "16%">C</th>
				  <th width = "16%">D</th>
				  <th width = "16%">E</th>
				 </tr>
				 <tr>
				  <th>問４の回答</th>
				  <td><input type="radio" name="q4" value="TRUE"></td>
				  <td><input type="radio" name="q4" value="FALSE"></td>
				  <td><input type="radio" name="q4" value="FALSE"></td>
				  <td><input type="radio" name="q4" value="FALSE"></td>
				  <td><input type="radio" name="q4" value="FALSE"></td>
				 </tr>
				 <tr >
				  <th>問５の回答</th>
				  <td><input type="radio" name="q5" value="FALSE"></td>
				  <td><input type="radio" name="q5" value="FALSE"></td>
				  <td><input type="radio" name="q5" value="FALSE"></td>
				  <td><input type="radio" name="q5" value="FALSE"></td>
				  <td><input type="radio" name="q5" value="TRUE"></td>
				 </tr>
				 <tr >
				  <th>問６の回答</th>
				  <td><input type="radio" name="q6" value="FALSE"></td>
				  <td><input type="radio" name="q6" value="FALSE"></td>
				  <td><input type="radio" name="q6" value="TRUE"></td>
				  <td><input type="radio" name="q6" value="FALSE"></td>
				  <td><input type="radio" name="q6" value="FALSE"></td>
				 </tr>
				</table>
			</div>
			<hr>
			<h3>[3]セット3</h3>
			<img src="img/3set_l.png">
			<div class="answer">
				<table width = "60%">
				 <tr>
				  <th width = "20%"><br></th>
				  <th width = "16%">A</th>
				  <th width = "16%">B</th>
				  <th width = "16%">C</th>
				  <th width = "16%">D</th>
				  <th width = "16%">E</th>
				 </tr>
				 <tr>
				  <th>問７の回答</td>
				  <td><input type="radio" name="q7" value="FALSE"></td>
				  <td><input type="radio" name="q7" value="FALSE"></td>
				  <td><input type="radio" name="q7" value="FALSE"></td>
				  <td><input type="radio" name="q7" value="FALSE"></td>
				  <td><input type="radio" name="q7" value="TRUE"></td>
				 </tr>
				 <tr >
				  <th>問８の回答</td>
				  <td><input type="radio" name="q8" value="TRUE"></td>
				  <td><input type="radio" name="q8" value="FALSE"></td>
				  <td><input type="radio" name="q8" value="FALSE"></td>
				  <td><input type="radio" name="q8" value="FALSE"></td>
				  <td><input type="radio" name="q8" value="FALSE"></td>
				 </tr>
				 <tr>
				  <th>問９の回答</td>
				  <td><input type="radio" name="q9" value="FALSE"></td>
				  <td><input type="radio" name="q9" value="FALSE"></td>
				  <td><input type="radio" name="q9" value="FALSE"></td>
				  <td><input type="radio" name="q9" value="TRUE"></td>
				  <td><input type="radio" name="q9" value="FALSE"></td>
				 </tr>
				</table>
			</div>
			<hr>
			<h3>[4]セット4</h3>
			<img src="img/4set_l.png">
			<div class="answer">
				<table width = "60%">
				 <tr>
				  <th width = "20%"><br></th>
				  <th width = "16%">A</th>
				  <th width = "16%">B</th>
				  <th width = "16%">C</th>
				  <th width = "16%">D</th>
				  <th width = "16%">E</th>
				 </tr>
				 <tr>
				  <th>問１０の回答</th>
				  <td><input type="radio" name="q10" value="FALSE"></td>
				  <td><input type="radio" name="q10" value="FALSE"></td>
				  <td><input type="radio" name="q10" value="FALSE"></td>
				  <td><input type="radio" name="q10" value="TRUE"></td>
				  <td><input type="radio" name="q10" value="FALSE"></td>
				 </tr>
				 <tr >
				  <th>問１１の回答</th>
				  <td><input type="radio" name="q11" value="FALSE"></td>
				  <td><input type="radio" name="q11" value="TRUE"></td>
				  <td><input type="radio" name="q11" value="FALSE"></td>
				  <td><input type="radio" name="q11" value="FALSE"></td>
				  <td><input type="radio" name="q11" value="FALSE"></td>
				 </tr>
				 <tr >
				  <th>問１２の回答</th>
				  <td><input type="radio" name="q12" value="TRUE"></td>
				  <td><input type="radio" name="q12" value="FALSE"></td>
				  <td><input type="radio" name="q12" value="FALSE"></td>
				  <td><input type="radio" name="q12" value="FALSE"></td>
				  <td><input type="radio" name="q12" value="FALSE"></td>
				 </tr>
				</table>
			</div>
			<hr>
			<h3>[5]セット5</h3>
			<img src="img/5set_l.png">
			<div class="answer">
				<table width = "60%">
				 <tr>
				  <th width = "20%"><br></th>
				  <th width = "16%">A</th>
				  <th width = "16%">B</th>
				  <th width = "16%">C</th>
				  <th width = "16%">D</th>
				  <th width = "16%">E</th>
				 </tr>
				 <tr>
				  <th>問１３の回答</th>
				  <td><input type="radio" name="q13" value="FALSE"></td>
				  <td><input type="radio" name="q13" value="FALSE"></td>
				  <td><input type="radio" name="q13" value="FALSE"></td>
				  <td><input type="radio" name="q13" value="FALSE"></td>
				  <td><input type="radio" name="q13" value="TRUE"></td>
				 </tr>
				 <tr >
				  <th>問１４の回答</th>
				  <td><input type="radio" name="q14" value="FALSE"></td>
				  <td><input type="radio" name="q14" value="FALSE"></td>
				  <td><input type="radio" name="q14" value="TRUE"></td>
				  <td><input type="radio" name="q14" value="FALSE"></td>
				  <td><input type="radio" name="q14" value="FALSE"></td>
				 </tr>
				 <tr >
				  <th>問１５の回答</th>
				  <td><input type="radio" name="q15" value="FALSE"></td>
				  <td><input type="radio" name="q15" value="FALSE"></td>
				  <td><input type="radio" name="q15" value="FALSE"></td>
				  <td><input type="radio" name="q15" value="TRUE"></td>
				  <td><input type="radio" name="q15" value="FALSE"></td>
				 </tr>
				</table>
			</div>
		</div>
	</form>
	
	<!--最終=========================================================================== -->
	<form name="f8" style="display:none" action="sendmail.php" method="post">
		<input type="hidden" name="userRadioButtonId">
		<input type="hidden" name="checkCnt">
		<input type="hidden" name="correctCnt">
		<input type="hidden" name="queCnt">
		<input type="hidden" name="answerList">
		<input type="hidden" name="q" value="q2">
	</form>
	</div>
</body>
</html>
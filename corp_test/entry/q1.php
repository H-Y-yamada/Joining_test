<html>

<head>
	
	<title>四則問題</title>
	<link rel="stylesheet" type="text/css" href="css/index.css" media="all">
	<script type="text/javascript" src="js/index.js"></script>
	
</head>

<body onload="getFormsCnt()">
	<div id="header">
		<h1>四則問題</h1>
		<h2 id="limitTime">説明</h2>
		<div id="headbt">
			<button style="display:none" id="closebt" onclick="nextPage3()">回答を終了</button>
		</div>
	</div>
	
	<!--テスト１説明文==== -->
	<form>
		<div class="contents">
			<p>問題数：40問<br>
			制限時間：6分</p>
			<h3>テスト内容の説明</h2>
			<p>「方程式の答えを速く正確に推測できるか」を測るテストです。<br>
			出題された問題の回答は自由ですが、先に進むほど問題の難易度は高くなります。<br>
			なお、このテストでは、計算用紙や電卓を使ってもかまいません。
			</p>
			<p>[？]に入る答えを選択してください。</p>
			<h3>注意</h2>
			<p>なるべく上の問題から順に進めてください。あてずっぽうで多くの問題を回答した場合は減点となる場合があります。</p>
			<p>このテストは全部で40問あります。</p>
		</div>
		<div class="center"><input type="button" id="next_bt" name="START" value="START" onclick="nextPage()"></div>
	</form>
	
	<!--テスト１問題==== -->
	<form style="display:none">
	<div class="contents">
		<h3>問題１</h3>
		<div class="question">[？]×8=37+19</div>
		<div class="answer">
			<label  onclick=""><input type="radio" id="radio_bt" name="q1" value="FALSE">5</label><br>
			<label  onclick=""><input type="radio" id="radio_bt" name="q1" value="TRUE">7</label><br>
			<label  onclick=""><input type="radio" id="radio_bt" name="q1" value="FALSE">9</label><br>
			<label  onclick=""><input type="radio" id="radio_bt" name="q1" value="FALSE">6</label><br>
			<label  onclick=""><input type="radio" id="radio_bt" name="q1" value="FALSE">10</label><br>
		</div>
		<h3>問題２</h3>
		<div class="question">0.008=[？]×0.0004</div>
		<div class="answer">
			<label  onclick=""><input type="radio" id="radio_bt" name="q2" value="FALSE">0.002</label><br>
			<label  onclick=""><input type="radio" id="radio_bt" name="q2" value="FALSE">0.2</label><br>
			<label  onclick=""><input type="radio" id="radio_bt" name="q2" value="FALSE">2</label><br>
			<label  onclick=""><input type="radio" id="radio_bt" name="q2" value="TRUE">20</label><br>
			<label  onclick=""><input type="radio" id="radio_bt" name="q2" value="FALSE">200</label><br>
		</div>
		<h3>問題３</h3>
		<div class="question">93-18=[？]-32</div>
		<div class="answer">
			<label  onclick=""><input type="radio" id="radio_bt" name="q3" value="FALSE">75</label><br>
			<label  onclick=""><input type="radio" id="radio_bt" name="q3" value="FALSE">43</label><br>
			<label  onclick=""><input type="radio" id="radio_bt" name="q3" value="TRUE">107</label><br>
			<label  onclick=""><input type="radio" id="radio_bt" name="q3" value="FALSE">133</label><br>
			<label  onclick=""><input type="radio" id="radio_bt" name="q3" value="FALSE">135</label><br>
		</div>
		<h3>問題４</h3>
		<div class="question">1/5+7/10=[？]</div>
		<div class="answer">
			<label  onclick=""><input type="radio" id="radio_bt" name="q4" value="FALSE">50%</label><br>
			<label  onclick=""><input type="radio" id="radio_bt" name="q4" value="FALSE">110%</label><br>
			<label  onclick=""><input type="radio" id="radio_bt" name="q4" value="FALSE">30%</label><br>
			<label  onclick=""><input type="radio" id="radio_bt" name="q4" value="FALSE">70%</label><br>
			<label  onclick=""><input type="radio" id="radio_bt" name="q4" value="TRUE">90%</label><br>
		</div>
		<h3>問題５</h3>
		<div class="question">3746-[？]=2982</div>
		<div class="answer">
			<label  onclick=""><input type="radio" id="radio_bt" name="q5" value="FALSE">964</label><br>
			<label  onclick=""><input type="radio" id="radio_bt" name="q5" value="FALSE">567</label><br>
			<label  onclick=""><input type="radio" id="radio_bt" name="q5" value="TRUE">764</label><br>
			<label  onclick=""><input type="radio" id="radio_bt" name="q5" value="FALSE">392</label><br>
			<label  onclick=""><input type="radio" id="radio_bt" name="q5" value="FALSE">738</label><br>
		</div>
		<h3>問題６</h3>
		<div class="question">18÷21=[？]÷7</div>
		<div class="answer">
			<label  onclick=""><input type="radio" id="radio_bt" name="q6" value="FALSE">9</label><br>
			<label  onclick=""><input type="radio" id="radio_bt" name="q6" value="FALSE">8</label><br>
			<label  onclick=""><input type="radio" id="radio_bt" name="q6" value="FALSE">7</label><br>
			<label  onclick=""><input type="radio" id="radio_bt" name="q6" value="TRUE">6</label><br>
			<label  onclick=""><input type="radio" id="radio_bt" name="q6" value="FALSE">5</label><br>
		</div>
		<h3>問題７</h3>
		<div class="question">[？]÷13+8=13</div>
		<div class="answer">
			<label  onclick=""><input type="radio" id="radio_bt" name="q7" value="FALSE">13</label><br>
			<label  onclick=""><input type="radio" id="radio_bt" name="q7" value="FALSE">8</label><br>
			<label  onclick=""><input type="radio" id="radio_bt" name="q7" value="FALSE">39</label><br>
			<label  onclick=""><input type="radio" id="radio_bt" name="q7" value="TRUE">65</label><br>
			<label  onclick=""><input type="radio" id="radio_bt" name="q7" value="FALSE">26</label><br>
		</div>
		<h3>問題８</h3>
		<div class="question">600-[？]×10=320</div>
		<div class="answer">
			<label  onclick=""><input type="radio" id="radio_bt" name="q8" value="FALSE">2.8</label><br>
			<label  onclick=""><input type="radio" id="radio_bt" name="q8" value="TRUE">28</label><br>
			<label  onclick=""><input type="radio" id="radio_bt" name="q8" value="FALSE">9</label><br>
			<label  onclick=""><input type="radio" id="radio_bt" name="q8" value="FALSE">32</label><br>
			<label  onclick=""><input type="radio" id="radio_bt" name="q8" value="FALSE">3.2</label><br>
		</div>
		<h3>問題９</h3>
		<div class="question">900の[？]%=153</div>
		<div class="answer">
			<label  onclick=""><input type="radio" id="radio_bt" name="q9" value="FALSE">23</label><br>
			<label  onclick=""><input type="radio" id="radio_bt" name="q9" value="FALSE">37</label><br>
			<label  onclick=""><input type="radio" id="radio_bt" name="q9" value="FALSE">29</label><br>
			<label  onclick=""><input type="radio" id="radio_bt" name="q9" value="TRUE">17</label><br>
			<label  onclick=""><input type="radio" id="radio_bt" name="q9" value="FALSE">13</label><br>
		</div>
		<h3>問題１０</h3>
		<div class="question">[？]×0.8=80÷1/4</div>
		<div class="answer">
			<label  onclick=""><input type="radio" id="radio_bt" name="q10" value="FALSE">40</label><br>
			<label  onclick=""><input type="radio" id="radio_bt" name="q10" value="FALSE">250</label><br>
			<label  onclick=""><input type="radio" id="radio_bt" name="q10" value="TRUE">400</label><br>
			<label  onclick=""><input type="radio" id="radio_bt" name="q10" value="FALSE">25</label><br>
			<label  onclick=""><input type="radio" id="radio_bt" name="q10" value="FALSE">4000</label><br>
		</div>
		<h3>問題１１</h3>
		<div class="question">0.2×[？]=0.8÷0.05</div>
		<div class="answer">
			<label  onclick=""><input type="radio" id="radio_bt" name="q11" value="TRUE">80</label><br>
			<label  onclick=""><input type="radio" id="radio_bt" name="q11" value="FALSE">16</label><br>
			<label  onclick=""><input type="radio" id="radio_bt" name="q11" value="FALSE">0.8</label><br>
			<label  onclick=""><input type="radio" id="radio_bt" name="q11" value="FALSE">160</label><br>
			<label  onclick=""><input type="radio" id="radio_bt" name="q11" value="FALSE">800</label><br>
		</div>
		<h3>問題１２</h3>
		<div class="question">3/2=3/4+[？]</div>
		<div class="answer">
			<label  onclick=""><input type="radio" id="radio_bt" name="q12" value="FALSE">1.25</label><br>
			<label  onclick=""><input type="radio" id="radio_bt" name="q12" value="TRUE">0.75</label><br>
			<label  onclick=""><input type="radio" id="radio_bt" name="q12" value="FALSE">0.25</label><br>
			<label  onclick=""><input type="radio" id="radio_bt" name="q12" value="FALSE">1</label><br>
			<label  onclick=""><input type="radio" id="radio_bt" name="q12" value="FALSE">0.5</label><br>
		</div>
		<h3>問題１３</h3>
		<div class="question">[？]÷10=0.03+0.001</div>
		<div class="answer">
			<label  onclick=""><input type="radio" id="radio_bt" name="q13" value="FALSE">0.00031</label><br>
			<label  onclick=""><input type="radio" id="radio_bt" name="q13" value="FALSE">0.031</label><br>
			<label  onclick=""><input type="radio" id="radio_bt" name="q13" value="TRUE">0.31</label><br>
			<label  onclick=""><input type="radio" id="radio_bt" name="q13" value="FALSE">3.1</label><br>
			<label  onclick=""><input type="radio" id="radio_bt" name="q13" value="FALSE">310</label><br>
		</div>
		<h3>問題１４</h3>
		<div class="question">9=([？]-36）÷3</div>
		<div class="answer">
			<label  onclick=""><input type="radio" id="radio_bt" name="q14" value="FALSE">36</label><br>
			<label  onclick=""><input type="radio" id="radio_bt" name="q14" value="FALSE">9</label><br>
			<label  onclick=""><input type="radio" id="radio_bt" name="q14" value="FALSE">27</label><br>
			<label  onclick=""><input type="radio" id="radio_bt" name="q14" value="FALSE">56</label><br>
			<label  onclick=""><input type="radio" id="radio_bt" name="q14" value="TRUE">63</label><br>
		</div>
		<h3>問題１５</h3>
		<div class="question">[？]×[？]＝676</div>
		<div class="answer">
			<label  onclick=""><input type="radio" id="radio_bt" name="q15" value="FALSE">16</label><br>
			<label  onclick=""><input type="radio" id="radio_bt" name="q15" value="TRUE">26</label><br>
			<label  onclick=""><input type="radio" id="radio_bt" name="q15" value="FALSE">36</label><br>
			<label  onclick=""><input type="radio" id="radio_bt" name="q15" value="FALSE">46</label><br>
			<label  onclick=""><input type="radio" id="radio_bt" name="q15" value="FALSE">56</label><br>
		</div>
		<h3>問題１６</h3>
		<div class="question">3.75+[？]=6</div>
		<div class="answer">
			<label  onclick=""><input type="radio" id="radio_bt" name="q16" value="FALSE">9/5</label><br>
			<label  onclick=""><input type="radio" id="radio_bt" name="q16" value="FALSE">7/4</label><br>
			<label  onclick=""><input type="radio" id="radio_bt" name="q16" value="FALSE">7/5</label><br>
			<label  onclick=""><input type="radio" id="radio_bt" name="q16" value="TRUE">9/4</label><br>
			<label  onclick=""><input type="radio" id="radio_bt" name="q16" value="FALSE">5/4</label><br>
		</div>
		<h3>問題１７</h3>
		<div class="question">3÷[？]=14÷0.875÷4</div>
		<div class="answer">
			<label  onclick=""><input type="radio" id="radio_bt" name="q17" value="FALSE">7.5</label><br>
			<label  onclick=""><input type="radio" id="radio_bt" name="q17" value="FALSE">1.3</label><br>
			<label  onclick=""><input type="radio" id="radio_bt" name="q17" value="TRUE">0.75</label><br>
			<label  onclick=""><input type="radio" id="radio_bt" name="q17" value="FALSE">13</label><br>
			<label  onclick=""><input type="radio" id="radio_bt" name="q17" value="FALSE">75</label><br>
		</div>
		<h3>問題１８</h3>
		<div class="question">3÷4＝1/4×[？]÷5</div>
		<div class="answer">
			<label  onclick=""><input type="radio" id="radio_bt" name="q18" value="FALSE">12</label><br>
			<label  onclick=""><input type="radio" id="radio_bt" name="q18" value="TRUE">15</label><br>
			<label  onclick=""><input type="radio" id="radio_bt" name="q18" value="FALSE">18</label><br>
			<label  onclick=""><input type="radio" id="radio_bt" name="q18" value="FALSE">21</label><br>
			<label  onclick=""><input type="radio" id="radio_bt" name="q18" value="FALSE">24</label><br>
		</div>
		<h3>問題１９</h3>
		<div class="question">36-18=0.5×[？]+2.5×[？] （[？] には同じ値が入る）</div>
		<div class="answer">
			<label  onclick=""><input type="radio" id="radio_bt" name="q19" value="TRUE">6</label><br>
			<label  onclick=""><input type="radio" id="radio_bt" name="q19" value="FALSE">18</label><br>
			<label  onclick=""><input type="radio" id="radio_bt" name="q19" value="FALSE">9</label><br>
			<label  onclick=""><input type="radio" id="radio_bt" name="q19" value="FALSE">3</label><br>
			<label  onclick=""><input type="radio" id="radio_bt" name="q19" value="FALSE">15</label><br>
		</div>
		<h3>問題２０</h3>
		<div class="question">6/5=8.4÷[？]</div>
		<div class="answer">
			<label  onclick=""><input type="radio" id="radio_bt" name="q20" value="FALSE">1.4</label><br>
			<label  onclick=""><input type="radio" id="radio_bt" name="q20" value="FALSE">9</label><br>
			<label  onclick=""><input type="radio" id="radio_bt" name="q20" value="FALSE">12</label><br>
			<label  onclick=""><input type="radio" id="radio_bt" name="q20" value="TRUE">7</label><br>
			<label  onclick=""><input type="radio" id="radio_bt" name="q20" value="FALSE">4</label><br>
		</div>
		<h3>問題２１</h3>
		<div class="question">740-[？]=340-(500-280)</div>
		<div class="answer">
			<label  onclick=""><input type="radio" id="radio_bt" name="q21" value="FALSE">380</label><br>
			<label  onclick=""><input type="radio" id="radio_bt" name="q21" value="TRUE">620</label><br>
			<label  onclick=""><input type="radio" id="radio_bt" name="q21" value="FALSE">460</label><br>
			<label  onclick=""><input type="radio" id="radio_bt" name="q21" value="FALSE">120</label><br>
			<label  onclick=""><input type="radio" id="radio_bt" name="q21" value="FALSE">580</label><br>
		</div>
		<h3>問題２２</h3>
		<div class="question">6÷27=1/2×[？]</div>
		<div class="answer">
			<label  onclick=""><input type="radio" id="radio_bt" name="q22" value="FALSE">5/6</label><br>
			<label  onclick=""><input type="radio" id="radio_bt" name="q22" value="FALSE">1/3</label><br>
			<label  onclick=""><input type="radio" id="radio_bt" name="q22" value="TRUE">4/9</label><br>
			<label  onclick=""><input type="radio" id="radio_bt" name="q22" value="FALSE">3/8</label><br>
			<label  onclick=""><input type="radio" id="radio_bt" name="q22" value="FALSE">3/7</label><br>
		</div>
		<h3>問題２３</h3>
		<div class="question">[？]+260=[？]×66 （[？]には同じ値が入る）</div>
		<div class="answer">
			<label  onclick=""><input type="radio" id="radio_bt" name="q23" value="FALSE">3</label><br>
			<label  onclick=""><input type="radio" id="radio_bt" name="q23" value="FALSE">9</label><br>
			<label  onclick=""><input type="radio" id="radio_bt" name="q23" value="TRUE">4</label><br>
			<label  onclick=""><input type="radio" id="radio_bt" name="q23" value="FALSE">7</label><br>
			<label  onclick=""><input type="radio" id="radio_bt" name="q23" value="FALSE">5</label><br>
		</div>
		<h3>問題２４</h3>
		<div class="question">16-9=35-[？]-17</div>
		<div class="answer">
			<label  onclick=""><input type="radio" id="radio_bt" name="q24" value="FALSE">7</label><br>
			<label  onclick=""><input type="radio" id="radio_bt" name="q24" value="FALSE">18</label><br>
			<label  onclick=""><input type="radio" id="radio_bt" name="q24" value="FALSE">25</label><br>
			<label  onclick=""><input type="radio" id="radio_bt" name="q24" value="TRUE">11</label><br>
			<label  onclick=""><input type="radio" id="radio_bt" name="q24" value="FALSE">29</label><br>
		</div>
		<h3>問題２５</h3>
		<div class="question">1÷8+1/8=1/16÷[？]</div>
		<div class="answer">
			<label  onclick=""><input type="radio" id="radio_bt" name="q25" value="FALSE">5/16</label><br>
			<label  onclick=""><input type="radio" id="radio_bt" name="q25" value="FALSE">1/2</label><br>
			<label  onclick=""><input type="radio" id="radio_bt" name="q25" value="TRUE">1/4</label><br>
			<label  onclick=""><input type="radio" id="radio_bt" name="q25" value="FALSE">2</label><br>
			<label  onclick=""><input type="radio" id="radio_bt" name="q25" value="FALSE">4</label><br>
		</div>
		<h3>問題２６</h3>
		<div class="question">13-56÷[？]=6</div>
		<div class="answer">
			<label  onclick=""><input type="radio" id="radio_bt" name="q26" value="FALSE">6</label><br>
			<label  onclick=""><input type="radio" id="radio_bt" name="q26" value="FALSE">10</label><br>
			<label  onclick=""><input type="radio" id="radio_bt" name="q26" value="FALSE">7</label><br>
			<label  onclick=""><input type="radio" id="radio_bt" name="q26" value="FALSE">12</label><br>
			<label  onclick=""><input type="radio" id="radio_bt" name="q26" value="TRUE">8</label><br>
		</div>
		<h3>問題２７</h3>
		<div class="question">(31-24）×（[？]-3）=98 </div>
		<div class="answer">
			<label  onclick=""><input type="radio" id="radio_bt" name="q27" value="TRUE">17</label><br>
			<label  onclick=""><input type="radio" id="radio_bt" name="q27" value="FALSE">11</label><br>
			<label  onclick=""><input type="radio" id="radio_bt" name="q27" value="FALSE">14</label><br>
			<label  onclick=""><input type="radio" id="radio_bt" name="q27" value="FALSE">24</label><br>
			<label  onclick=""><input type="radio" id="radio_bt" name="q27" value="FALSE">21</label><br>
		</div>
		<h3>問題２８</h3>
		<div class="question">76+43×2+6=12×[？]</div>
		<div class="answer">
			<label  onclick=""><input type="radio" id="radio_bt" name="q28" value="FALSE">7</label><br>
			<label  onclick=""><input type="radio" id="radio_bt" name="q28" value="FALSE">9</label><br>
			<label  onclick=""><input type="radio" id="radio_bt" name="q28" value="TRUE">14</label><br>
			<label  onclick=""><input type="radio" id="radio_bt" name="q28" value="FALSE">16</label><br>
			<label  onclick=""><input type="radio" id="radio_bt" name="q28" value="FALSE">12</label><br>
		</div>
		<h3>問題２９</h3>
		<div class="question">9/20=2.7÷[？]</div>
		<div class="answer">
			<label  onclick=""><input type="radio" id="radio_bt" name="q29" value="FALSE">13</label><br>
			<label  onclick=""><input type="radio" id="radio_bt" name="q29" value="TRUE">6</label><br>
			<label  onclick=""><input type="radio" id="radio_bt" name="q29" value="FALSE">0.4</label><br>
			<label  onclick=""><input type="radio" id="radio_bt" name="q29" value="FALSE">9</label><br>
			<label  onclick=""><input type="radio" id="radio_bt" name="q29" value="FALSE">14</label><br>
		</div>
		<h3>問題３０</h3>
		<div class="question">8÷0.2=80×[？]÷3.2</div>
		<div class="answer">
			<label  onclick=""><input type="radio" id="radio_bt" name="q30" value="FALSE">0.16</label><br>
			<label  onclick=""><input type="radio" id="radio_bt" name="q30" value="FALSE">0.625</label><br>
			<label  onclick=""><input type="radio" id="radio_bt" name="q30" value="FALSE">4</label><br>
			<label  onclick=""><input type="radio" id="radio_bt" name="q30" value="TRUE">1.6</label><br>
			<label  onclick=""><input type="radio" id="radio_bt" name="q30" value="FALSE">6.25</label><br>
		</div>
		<h3>問題３１</h3>
		<div class="question">2.8×[？]=1/5+9/25</div>
		<div class="answer">
			<label  onclick=""><input type="radio" id="radio_bt" name="q31" value="FALSE">32%</label><br>
			<label  onclick=""><input type="radio" id="radio_bt" name="q31" value="TRUE">20%</label><br>
			<label  onclick=""><input type="radio" id="radio_bt" name="q31" value="FALSE">56%</label><br>
			<label  onclick=""><input type="radio" id="radio_bt" name="q31" value="FALSE">28%</label><br>
			<label  onclick=""><input type="radio" id="radio_bt" name="q31" value="FALSE">36%</label><br>
		</div>
		<h3>問題３２</h3>
		<div class="question">8×[？]÷5=2.4×2÷2.5</div>
		<div class="answer">
			<label  onclick=""><input type="radio" id="radio_bt" name="q32" value="FALSE">10/9</label><br>
			<label  onclick=""><input type="radio" id="radio_bt" name="q32" value="FALSE">8/7</label><br>
			<label  onclick=""><input type="radio" id="radio_bt" name="q32" value="TRUE">6/5</label><br>
			<label  onclick=""><input type="radio" id="radio_bt" name="q32" value="FALSE">12/11</label><br>
			<label  onclick=""><input type="radio" id="radio_bt" name="q32" value="FALSE">13/10</label><br>
		</div>
		<h3>問題３３</h3>
		<div class="question">7-（3+[？]）＝-（9-2）</div>
		<div class="answer">
			<label  onclick=""><input type="radio" id="radio_bt" name="q33" value="FALSE">17</label><br>
			<label  onclick=""><input type="radio" id="radio_bt" name="q33" value="FALSE">9</label><br>
			<label  onclick=""><input type="radio" id="radio_bt" name="q33" value="FALSE">7</label><br>
			<label  onclick=""><input type="radio" id="radio_bt" name="q33" value="FALSE">14</label><br>
			<label  onclick=""><input type="radio" id="radio_bt" name="q33" value="TRUE">11</label><br>
		</div>
		<h3>問題３４</h3>
		<div class="question">0.6÷[？]=12×1/5</div>
		<div class="answer">
			<label  onclick=""><input type="radio" id="radio_bt" name="q34" value="FALSE">1/100</label><br>
			<label  onclick=""><input type="radio" id="radio_bt" name="q34" value="FALSE">1/20</label><br>
			<label  onclick=""><input type="radio" id="radio_bt" name="q34" value="FALSE">10</label><br>
			<label  onclick=""><input type="radio" id="radio_bt" name="q34" value="TRUE">1/4</label><br>
			<label  onclick=""><input type="radio" id="radio_bt" name="q34" value="FALSE">4</label><br>
		</div>
		<h3>問題３５</h3>
		<div class="question">1.25+0.15=7×8×[？]</div>
		<div class="answer">
			<label  onclick=""><input type="radio" id="radio_bt" name="q35" value="FALSE">12%</label><br>
			<label  onclick=""><input type="radio" id="radio_bt" name="q35" value="FALSE">4%</label><br>
			<label  onclick=""><input type="radio" id="radio_bt" name="q35" value="TRUE">2.5%</label><br>
			<label  onclick=""><input type="radio" id="radio_bt" name="q35" value="FALSE">40%</label><br>
			<label  onclick=""><input type="radio" id="radio_bt" name="q35" value="FALSE">25%</label><br>
		</div>
		<h3>問題３６</h3>
		<div class="question">7=[？]÷5/8</div>
		<div class="answer">
			<label  onclick=""><input type="radio" id="radio_bt" name="q36" value="FALSE">7.272</label><br>
			<label  onclick=""><input type="radio" id="radio_bt" name="q36" value="TRUE">4.375</label><br>
			<label  onclick=""><input type="radio" id="radio_bt" name="q36" value="FALSE">11.2</label><br>
			<label  onclick=""><input type="radio" id="radio_bt" name="q36" value="FALSE">3.615</label><br>
			<label  onclick=""><input type="radio" id="radio_bt" name="q36" value="FALSE">5.65</label><br>
		</div>
		<h3>問題３７</h3>
		<div class="question">3.6÷[？]=9</div>
		<div class="answer">
			<label  onclick=""><input type="radio" id="radio_bt" name="q37" value="FALSE">4/5</label><br>
			<label  onclick=""><input type="radio" id="radio_bt" name="q37" value="FALSE">9/4</label><br>
			<label  onclick=""><input type="radio" id="radio_bt" name="q37" value="TRUE">2/5</label><br>
			<label  onclick=""><input type="radio" id="radio_bt" name="q37" value="FALSE">5/4</label><br>
			<label  onclick=""><input type="radio" id="radio_bt" name="q37" value="FALSE">5/2</label><br>
		</div>
		<h3>問題３８</h3>
		<div class="question">7/4+1/8=[？]×5/4</div>
		<div class="answer">
			<label  onclick=""><input type="radio" id="radio_bt" name="q38" value="FALSE">5/8</label><br>
			<label  onclick=""><input type="radio" id="radio_bt" name="q38" value="FALSE">2/3</label><br>
			<label  onclick=""><input type="radio" id="radio_bt" name="q38" value="FALSE">2</label><br>
			<label  onclick=""><input type="radio" id="radio_bt" name="q38" value="TRUE">3/2</label><br>
			<label  onclick=""><input type="radio" id="radio_bt" name="q38" value="FALSE">8/5</label><br>
		</div>
		<h3>問題３９</h3>
		<div class="question">35÷[？]=11/14+1/21</div>
		<div class="answer">
			<label  onclick=""><input type="radio" id="radio_bt" name="q39" value="FALSE">48</label><br>
			<label  onclick=""><input type="radio" id="radio_bt" name="q39" value="TRUE">42</label><br>
			<label  onclick=""><input type="radio" id="radio_bt" name="q39" value="FALSE">35</label><br>
			<label  onclick=""><input type="radio" id="radio_bt" name="q39" value="FALSE">21</label><br>
			<label  onclick=""><input type="radio" id="radio_bt" name="q39" value="FALSE">14</label><br>
		</div>
		<h3>問題４０</h3>
		<div class="question">5÷3=12×[？]÷9</div>
		<div class="answer">
			<label  onclick=""><input type="radio" id="radio_bt" name="q40" value="FALSE">1.5</label><br>
			<label  onclick=""><input type="radio" id="radio_bt" name="q40" value="FALSE">2.2</label><br>
			<label  onclick=""><input type="radio" id="radio_bt" name="q40" value="FALSE">15</label><br>
			<label  onclick=""><input type="radio" id="radio_bt" name="q40" value="TRUE">1.25</label><br>
			<label  onclick=""><input type="radio" id="radio_bt" name="q40" value="FALSE">0.22</label><br>
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
		<input type="hidden" name="q" value="q1">
	</form>
	</div>
</body>
</html>
<html>

<head>
	
	<title>言語問題</title>
	<link rel="stylesheet" type="text/css" href="css/index.css" media="all">
	<script type="text/javascript" src="js/index.js"></script>
	
</head>

<body onload="getFormsCnt()">
	<div id="header">
		<h1>言語問題</h1>
		<h2 id="limitTime">説明</h2>
		<div id="headbt">
			<button style="display:none" id="closebt" onclick="nextPage3()">回答を終了</button>
		</div>
	</div>
	
	<!--テスト3説明文==== -->
	<form>
		<div class="contents">
			<p>制限時間：6分<br>
			問題文：6<br>
			設問文：24</p>
	 
			<p>このテストの目的は、短い文章の中の情報を的確につかみ判断する能力を測るものです。</p>
	 
			<h3>●解答の仕方について</h3>
			<p>このテストは問題文とそれに続く4つの設問からなっています。
			問題文をよく読み、次に4つの設問文それぞれについて、A、B、Cのいずれに当てはまるかを判断してください。</p>
			<ol type="A">
				<li>問題文に照らし合わせて、設問文は正しいといえる。</li>
				<li>問題文に照らし合わせて、設問文は間違っている。</li>
				<li>問題文の内容だけからでは、設問文は正しいとも間違っているともいえない。</li>
			</ol>

			<p>例題の答はラジオボタンの中の例題1、2、3、4欄を選択してください。</p>
		 
			<h3>●注意</h3>
			<ol>
				<li>できるだけ速く、正しい答を求めてください。</li>
				<li>なるべく上の問題から順に進めてください。あてずっぽうで多くの問題を回答した場合は減点となる場合があります。</li>
				<li>答がはっきりわからない場合でもできる限り推測し、一番正しいと思うものをマークしてください。</li>
			</ol>
	 
	 
			<h3>＜例題＞</h3>
			<h4>●問題文</h4>
			<div class="question">顧客のいろいろな要望を尋ねてから、セールスマンは3つの種類の保険についてカタログを示す。<br>
				そしてその3つの保険の違いについて説明し、いずれかの保険を選ぶことを顧客に勧める。<br>
			あくまで保険を決めるのは顧客であって、セールスマンではない。<br>
			一度顧客が態度を決めたら、セールスマンはあれこれ言わないように努める。
			</div>
	 
			<h4>○設問文</h4>
			<div class="answer">
				<ol>
					<li>どの保険にするのかを決めるのはセールスマンである。</li>
					<li>セールスマンは顧客の要望を考慮して、特定の3つの保険に絞って勧める。</li>
					<li>顧客が保険を断わったら、セールスマンは再度説得を開始する。</li>
					<li>保険のカタログは、それぞれの保険の違いについて詳しく説明されている。</li>
				</ol>
				<ol type="A">
					<li>問題文に照らし合わせて設問文は正しいといえる。</li>
					<li>問題文に照らし合わせて、設問分は間違っている。</li>
					<li>問題文の内容だけからでは、設問文は正しいとも間違っているともいえない。</li>
				</ol>
			</div>
		</div>
		<div class="center"><input type="button" id="next_bt" name="START" value="START" onclick="nextPage()"></div>
	</form>
	
	<!--テスト3問題==== -->
	<form style="display:none">
		<div class="contents">
			<H3>問題１</H3>
			<div class="question">
				<p>コンピュータ・ソフトの会社では普通、営業マンをおかずに、SEとプログラマーの2本だてで
				やっているところが多い。引き合いがあると、セールス・エンジニアというような感じでSEが出向く。
				だからSEの仕事の中には、営業的な要素が入ってこざるを得ない。コンピュータ・ソフト会社
				(特に相手のクライアントの要請に基づいて、業務をコンピュータに載せることを手伝う会社)は
				今後ますます人手不足になるだろう。そういうときにプログラマーとして教育し、経験を積んだ人を
				SEにするのではなく、営業適性のある人を逆に始めからSEとして育てることを考えたらいかがだろうか。</p>
			</div>
			<div class="answer">
				<table>
					 <tr>
					  <th width = "31%"><br></th>
					  <th width = "23%">問題文に照らし合わせて設問文は正しいといえる。</th>
					  <th width = "23%">問題文に照らし合わせて設問分は間違っている。</th>
					  <th width = "23%">問題文の内容だけからでは設問文は正しいとも間違っているともいえない。</th>
					 </tr>
					 <tr >
					  <th><div class="toi">[コンピュータ・ソフトの会社が営業マンをおかない理由は、SEが営業の役割を果たしているからである。]</div></th>
					  <td><input type="radio" name="q1" value="TRUE"></td>
					  <td><input type="radio" name="q1" value="FALSE"></td>
					  <td><input type="radio" name="q1" value="FALSE"></td>
					 </tr>
					 <tr >
					  <th><div class="toi">[通常、プログラマーとしての経験を積んでから、SEになっていく。]</div></th>
					  <td><input type="radio" name="q2" value="FALSE"></td>
					  <td><input type="radio" name="q2" value="FALSE"></td>
					  <td><input type="radio" name="q2" value="TRUE"></td>
					 </tr>
					 <tr >
					  <th><div class="toi">[コンピュータ・ソフトの会社と言ってもいろいろあり、いちがいに人手不足だとは言えない。]</div></th>
					  <td><input type="radio" name="q3" value="TRUE"></td>
					  <td><input type="radio" name="q3" value="FALSE"></td>
					  <td><input type="radio" name="q3" value="FALSE"></td>
					 </tr>
					 <tr >
					  <th><div class="toi">[営業適性とプログラマー適性とは違うものだ。]</div></th>
					  <td><input type="radio" name="q4" value="FALSE"></td>
					  <td><input type="radio" name="q4" value="FALSE"></td>
					  <td><input type="radio" name="q4" value="TRUE"></td>
					 </tr>
				</table>
			</div>
			<hr>
			<H3>問題２</H3>
			<div class="question">
				<p>証券会社の営業マンは、顧客が個人であれ、法人であれ、株の売買取引を増やさせ、手数料収入を多く取ること
				だけを考えているとみなさんは思うかもしれない。しかし、それは間違っている。やはり、顧客が望んでいるのは、
				株の売買を通じて利益を手にすることであり、顧客と長いつきあいを心がける営業マンとしては、そのために必要な
				アドバイスを惜しむべきではない。だから、最近の証券会社の営業マンはとてもよく勉強しているし、投資顧問会社
				と同じようなレベルの情報提供をこころがけているまじめな営業マンも多い。</p>
			</div>
			<div class="answer">
				<table>
					 <tr>
					  <th width = "31%"><br></th>
					  <th width = "23%">問題文に照らし合わせて設問文は正しいといえる。</th>
					  <th width = "23%">問題文に照らし合わせて設問分は間違っている。</th>
					  <th width = "23%">問題文の内容だけからでは設問文は正しいとも間違っているともいえない。</th>
					 </tr>
					 <tr >
					  <th><div class="toi">[証券会社にとって、一番大切なことは販売に伴う手数料収入を増やすことより、顧客の利益を増やすことである。]</div></th>
					  <td><input type="radio" name="q5" value="FALSE"></td>
					  <td><input type="radio" name="q5" value="FALSE"></td>
					  <td><input type="radio" name="q5" value="TRUE"></td>
					 </tr>
					 <tr >
					  <th><div class="toi">[投資顧問会社は、投資に関する専門的なアドバイスをする会社である。]</div></th>
					  <td><input type="radio" name="q6" value="FALSE"></td>
					  <td><input type="radio" name="q6" value="FALSE"></td>
					  <td><input type="radio" name="q6" value="TRUE"></td>
					 </tr>
					 <tr >
					  <th><div class="toi">[顧客が株の売買を通して望んでいるのは、利益を得ることではない。]</div></th>
					  <td><input type="radio" name="q7" value="TRUE"></td>
					  <td><input type="radio" name="q7" value="FALSE"></td>
					  <td><input type="radio" name="q7" value="FALSE"></td>
					 </tr>
					 <tr >
					  <th><div class="toi">[顧客が求めている情報提供を行うのは、顧客が株の売買を通して利益をあげてもらいたいからだ。]</div></th>
					  <td><input type="radio" name="q8" value="FALSE"></td>
					  <td><input type="radio" name="q8" value="FALSE"></td>
					  <td><input type="radio" name="q8" value="TRUE"></td>
					 </tr>
				</table>
			</div>
			<hr>
			<H3>問題３</H3>
			<div class="question">
				<p>宝石店の販売店員をしていて、だんだんわかってきたことがある。それはどういうお客さんが実際に買ってくれて、
				どういうお客さんがヒヤカシか、その見極めがつくようになってきたことだ。それと買ってもらうときのちょっとした
				勧めかたもうまくなったと思っている。まず、買ってくれるお客さんは、どちらかと言うととびきりの美人やスタイル
				がよいという人ではない。むしろ、普通の顔をした普通のスタイルをした人だ。それとお金もちに見える人は意外と買
				ってくれない。地味で宝石を買う余裕があるのかなあと思う人のほうが買ってくれる。勧めるときのコツは、実際にそ
				れをつけてみてもらって、似合いますねえ、映えますねえと自然に言うことだ。</p>
			</div>
			<div class="answer">
				<table>
					 <tr>
					  <th width = "31%"><br></th>
					  <th width = "23%">問題文に照らし合わせて設問文は正しいといえる。</th>
					  <th width = "23%">問題文に照らし合わせて設問分は間違っている。</th>
					  <th width = "23%">問題文の内容だけからでは設問文は正しいとも間違っているともいえない。</th>
					 </tr>
					 <tr >
					  <th><div class="toi">[宝石を買う人の気持ちがわかってくると、販売の成績があがってくるものだ。]</div></th>
					  <td><input type="radio" name="q9" value="FALSE"></td>
					  <td><input type="radio" name="q9" value="FALSE"></td>
					  <td><input type="radio" name="q9" value="TRUE"></td>
					 </tr>
					 <tr >
					  <th><div class="toi">[とびきりの美人とか、お金もちの人は、私がつとめていた店ではお客になってくれなかった。]</div></th>
					  <td><input type="radio" name="q10" value="FALSE"></td>
					  <td><input type="radio" name="q10" value="FALSE"></td>
					  <td><input type="radio" name="q10" value="TRUE"></td>
					 </tr>
					 <tr >
					  <th><div class="toi">[勧めるときのコツは、似合うとか映えるとか言わないことだ。]</div></th>
					  <td><input type="radio" name="q11" value="TRUE"></td>
					  <td><input type="radio" name="q11" value="FALSE"></td>
					  <td><input type="radio" name="q11" value="FALSE"></td>
					 </tr>
					 <tr >
					  <th><div class="toi">[とびきりの美人が宝石を買ってくれないのは、このお店だけの特徴だ。]</div></th>
					  <td><input type="radio" name="q12" value="FALSE"></td>
					  <td><input type="radio" name="q12" value="FALSE"></td>
					  <td><input type="radio" name="q12" value="TRUE"></td>
					 </tr>
				</table>
			</div>
			<hr>
			<H3>問題４</H3>
			<div class="question">
				<p>事務用品の卸し問屋である1商店の営業マンの仕事は、朝の朝礼から始まる。順番でその日の当番の営業マンが前に
				出て、今日の抱負を話す。売掛金の早期回収であったり、なかなか片がつかないクレームの処理についての話であった
				り、得意先になるべく多く顔を出すというような類の話である。朝礼が終わると、大体時間をみはからったように、得
				意先の文房具店やデパートなどから、注文の電話が入る。その電話を間違いのないようにとって、コンピュータ入力の
				用紙に書き込んで、コンピュータルームの入力オぺレータに渡す。ときには、注文にまじってとんでもないクレームが
				あったりして、朝の電話はなかなかスリルがある。</p>
			</div>
			<div class="answer">
				<table>
					 <tr>
					  <th width = "31%"><br></th>
					  <th width = "23%">問題文に照らし合わせて設問文は正しいといえる。</th>
					  <th width = "23%">問題文に照らし合わせて設問分は間違っている。</th>
					  <th width = "23%">問題文の内容だけからでは設問文は正しいとも間違っているともいえない。</th>
					 </tr>
					 <tr >
					  <th><div class="toi">[営業の仕事の一日の流れはまず朝礼から始まる。各人がそれぞれ、その日の自分の抱負について話す。]</div></th>
					  <td><input type="radio" name="q13" value="FALSE"></td>
					  <td><input type="radio" name="q13" value="FALSE"></td>
					  <td><input type="radio" name="q13" value="TRUE"></td>
					 </tr>
					 <tr >
					  <th><div class="toi">[注文の電話を受けてから、自分でその内容をコンピュータに入力する。]</div></th>
					  <td><input type="radio" name="q14" value="TRUE"></td>
					  <td><input type="radio" name="q14" value="FALSE"></td>
					  <td><input type="radio" name="q14" value="FALSE"></td>
					 </tr>
					 <tr >
					  <th><div class="toi">[事務用品の卸し問屋の得意先には、文房具店やデパートの他に大口の企業が含まれる場合がある。]</div></th>
					  <td><input type="radio" name="q15" value="FALSE"></td>
					  <td><input type="radio" name="q15" value="FALSE"></td>
					  <td><input type="radio" name="q15" value="TRUE"></td>
					 </tr>
					 <tr >
					  <th><div class="toi">[朝の電話がスリリングなのは、注文のような嬉しい電話ばかりでなく、突然、思いがけないクレームがきたりするからだ。]</div></th>
					  <td><input type="radio" name="q16" value="TRUE"></td>
					  <td><input type="radio" name="q16" value="FALSE"></td>
					  <td><input type="radio" name="q16" value="FALSE"></td>
					 </tr>
				</table>
			</div>
			<hr>
			<H3>問題５</H3>
			<div class="question">
				<p>ロンドンに駐在している商社マンのYさんは、休む時間がないのが一番厳しいとこぼしている。まず、なるべく早く
				会社に出て、東京の本社との間のファックスを見る。ロンドン時間の朝8時30分が、ちょうど東京本社の終業時間に当
				るから、ファックスの内容によっては、すぐ返事を打たないと、タイミングを失うような場合もある。だからなるべく
				早く会社に出る。夜は夜で、日本会社特有の仲間どうしのマージャンとかカラオケのつきあいが入る。まじめにつきあ
				うと午前様になってしまう。土日は、役所関係やメーカーの偉い人が今、ロンドンに来ているから、ちょっとしたとこ
				ろを見せてやってくれというような話が東京から来て、まるで観光ガイドのような一日を過ごす。</p>
			</div>
			<div class="answer">
				<table>
					 <tr>
					  <th width = "31%"><br></th>
					  <th width = "23%">問題文に照らし合わせて設問文は正しいといえる。</th>
					  <th width = "23%">問題文に照らし合わせて設問分は間違っている。</th>
					  <th width = "23%">問題文の内容だけからでは設問文は正しいとも間違っているともいえない。</th>
					 </tr>
					 <tr >
					  <th><div class="toi">[ロンドンと東京の間の時差はちょうど9時間あるから、ロンドンの朝は東京の夕刻にあたる。]</div></th>
					  <td><input type="radio" name="q17" value="FALSE"></td>
					  <td><input type="radio" name="q17" value="FALSE"></td>
					  <td><input type="radio" name="q17" value="TRUE"></td>
					 </tr>
					 <tr >
					  <th><div class="toi">[駐在スタッフの仕事の鍵は、東京本社との連絡で、どうやったらタイミングを失うことなくアクションがとれるかである。]</div></th>
					  <td><input type="radio" name="q18" value="FALSE"></td>
					  <td><input type="radio" name="q18" value="FALSE"></td>
					  <td><input type="radio" name="q18" value="TRUE"></td>
					 </tr>
					 <tr >
					  <th><div class="toi">[仲間どうしのマージャンとかカラオケとかは、外国の習慣にはない。]</div></th>
					  <td><input type="radio" name="q19" value="FALSE"></td>
					  <td><input type="radio" name="q19" value="FALSE"></td>
					  <td><input type="radio" name="q19" value="TRUE"></td>
					 </tr>
					 <tr >
					  <th><div class="toi">[土曜日や日曜日にはまるで観光ガイドのような仕事が舞い込む。だからなかなか休日がとれない。]</div></th>
					  <td><input type="radio" name="q20" value="TRUE"></td>
					  <td><input type="radio" name="q20" value="FALSE"></td>
					  <td><input type="radio" name="q20" value="FALSE"></td>
					 </tr>
				</table>
			</div>
			<hr>
			<H3>問題６</H3>
			<div class="question">
				<p>画商のみちに入ってつくづく思うことがある。常連の顧客といっても、本当に絵がわかる人というのはそんなに
				いないものだ。むしろ大半の顧客は、絵そのものの価値がわかって買うというのではなく、投資の対象として誰の絵を
				今買っておくべきかを模索しているといったほうが正しいだろう。だから、いろいろな話を持ち出して、絵そのもの
				よりも、その絵かきさんが、将来画壇でどういう地位を占めるに至るか、まるで予想屋さんのような口をきいたほうが
				商売としてはうまくゆくのである。だから時に、全く投資効果のような視点から離れて、好きな絵を好きだという理由
				だけで買ってくださるお客さんに出会うととても嬉しいのである。 </p>
			</div>
			<div class="answer">
				<table>
					 <tr>
					  <th width = "31%"><br></th>
					  <th width = "23%">問題文に照らし合わせて設問文は正しいといえる。</th>
					  <th width = "23%">問題文に照らし合わせて設問分は間違っている。</th>
					  <th width = "23%">問題文の内容だけからでは設問文は正しいとも間違っているともいえない。</th>
					 </tr>
					 <tr >
					  <th><div class="toi">[昔は、絵を集めるというのは、投資よりも趣味とか道楽であった。]</div></th>
					  <td><input type="radio" name="q21" value="FALSE"></td>
					  <td><input type="radio" name="q21" value="FALSE"></td>
					  <td><input type="radio" name="q21" value="TRUE"></td>
					 </tr>
					 <tr >
					  <th><div class="toi">[画壇での地位と絵の値段とは関係がある。]</div></th>
					  <td><input type="radio" name="q22" value="FALSE"></td>
					  <td><input type="radio" name="q22" value="FALSE"></td>
					  <td><input type="radio" name="q22" value="TRUE"></td>
					 </tr>
					 <tr >
					  <th><div class="toi">[絵の価値というのは、値段であらわされないものだ。]</div></th>
					  <td><input type="radio" name="q23" value="FALSE"></td>
					  <td><input type="radio" name="q23" value="FALSE"></td>
					  <td><input type="radio" name="q23" value="TRUE"></td>
					 </tr>
					 <tr >
					  <th><div class="toi">[画商のみちに入って嬉しいのは、本当に絵が好きで、自分の好きな絵を好きだから買うというお客さんに出会う時だ。]</div></th>
					  <td><input type="radio" name="q24" value="TRUE"></td>
					  <td><input type="radio" name="q24" value="FALSE"></td>
					  <td><input type="radio" name="q24" value="FALSE"></td>
					 </tr>
				</table>
			</div>
			<hr>
		</div>
	</form>
	
	
	
	<!--最終=========================================================================== -->
	<form name="f8" style="display:none" action="sendmail.php" method="post">
		<input type="hidden" name="userRadioButtonId">
		<input type="hidden" name="checkCnt">
		<input type="hidden" name="correctCnt">
		<input type="hidden" name="queCnt">
		<input type="hidden" name="answerList">
		<input type="hidden" name="q" value="q3">
	</form>
	</div>
</body>
</html>
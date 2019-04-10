<html>

<head>
	
	<title>技術問題（※ エンジニアのみ）</title>
	<link rel="stylesheet" type="text/css" href="css/index.css" media="all">
	<script type="text/javascript" src="js/index.js"></script>
	
</head>

<body onload="getFormsCnt()">
	<div id="header">
		<h1>技術問題</h1>
		<h2 id="limitTime">説明</h2>
		<div id="headbt">
			<button style="display:none" id="closebt" onclick="nextPage3()">回答を終了</button>
		</div>
	</div>
	
	<!--テスト4説明文==== -->
	<form>
		<div class="contents">
			<p>問題数：12問<br>
			制限時間：無</p>
			<h3>テスト内容の説明</h3>
			<p>以下の問題はエンジニア向けの問題になります。<br>
			該当の受験者以外は、ここで「テスト終了」を選択してください。</p>
			<div class="center"><input type="button" id="next_bt" value="テスト終了" onclick="testFnc()"></div>
			<h3>エンジニアの受験者へ</h3>
			<p>技術に関するテストです。<br>
			問題に対して適切な回答を選択してください。</p>
			<p class="caption">なお、このテストでは制限時間はありません。可能な限り、チェックを埋めてください。</p>
			<p>回答が終了しましたら、画面下部の「テスト終了」ボタンを押してください。<br>
			未選択項目がある際は、テスト終了確認ダイアログにて未選択項目の確認を行います。
			</p>
			<p>テスト終了後は、係りの者にお声かけ下さい。</p>
		</div>
		<div class="center"><input type="button" id="next_bt" name="START" value="START" onclick="flipPage()"></div>
	</form>
	
	<!--テスト4問題==== -->
	<form style="display:none">
		<div class="contents">
			<H2 id="g1">問題１</H2>
			<div class="question">オブジェクト指向プログラミングの特徴はどれか。</div>

			<div class="answer">
				<table class="gijutsu">
				<td><input type="radio" name="q1" id="a1" value="TRUE"></td><td><label onclick="" for="a1">オブジェクトが相互にメッセージを送ることによって、協調して動作し、プログラム全体の機能を実現する。</label></td></tr>
				<td><input type="radio" name="q1" id="a2" value="FALSE"></td><td><label onclick="" for="a2">オブジェクトの外部からオブジェクトの内部のデータを直接変更できるので、自由度が高い。</label></td></tr>
				<td><input type="radio" name="q1" id="a3" value="FALSE"></td><td><label onclick="" for="a3">下位クラスは上位クラスの機能や性質を引き継ぐので、下位クラスに必要な性質は全て上位クラスに含まれる。</label></td></tr>
				<td><input type="radio" name="q1" id="a4" value="FALSE"></td><td><label onclick="" for="a4">個々のオブジェクトが使用するデータ（属性）は、あらかじめデータ辞書に登録しておく。</label></td></tr>

				</table>
			</div>
			<H2 id="g2">問題２</H2>
			<div class="question">オブジェクト指向の基本概念の組み合わせとして、適切なものはどれか。</div>

			<div class="answer">
				<table class="gijutsu">
				<td><input type="radio" name="q2" id="b1" value="FALSE"></td><td><label onclick="" for="b1">仮想化，構造化，投影，クラス</label></td></tr>
				<td><input type="radio" name="q2" id="b2" value="FALSE"></td><td><label onclick="" for="b2">具体化，構造化，連続，クラス</label></td></tr>
				<td><input type="radio" name="q2" id="b3" value="FALSE"></td><td><label onclick="" for="b3">正規化，カプセル化，分割，クラス</label></td></tr>
				<td><input type="radio" name="q2" id="b4" value="TRUE"></td><td><label onclick="" for="b4">抽象化，カプセル化，継承，クラス</label></td></tr>

				</table>
			</div>
			<H2 id="g3">問題３</H2>
			<div class="question">オブジェクト指向におけるクラスとインスタンスとの関係のうち、適切なものはどれか。</div>

			<div class="answer">
				<table class="gijutsu">
				<td><input type="radio" name="q3" id="c1" value="FALSE"></td><td><label onclick="" for="c1">インスタンスはクラスの仕様を定義したものである。</label></td></tr>
				<td><input type="radio" name="q3" id="c2" value="TRUE"></td><td><label onclick="" for="c2">クラスの定義に基づいてインスタンスが生成される。</label></td></tr>
				<td><input type="radio" name="q3" id="c3" value="FALSE"></td><td><label onclick="" for="c3">一つのインスタンスに対して、複数のクラスが対応する。</label></td></tr>
				<td><input type="radio" name="q3" id="c4" value="FALSE"></td><td><label onclick="" for="c4">一つのクラスに対して、インスタンスはただ一つ存在する。</label></td></tr>

				</table>
			</div>
			<H2 id="g4">問題４</H2>
			<div class="question">モジュールの内部構造を考慮することなく、仕様書どおりに機能するかどうかをテストする手法はどれか。</div>

			<div class="answer">
				<table class="gijutsu">
				<tr><td><input type="radio" name="q4" id="d1" value="FALSE"></td><td><label onclick="" for="d1">トップダウンテスト</label></td></tr><tr>
				<td><input type="radio" name="q4" id="d2" value="TRUE"></td><td><label onclick="" for="d2">ブラックボックステスト</label><br></tr><tr>
				<td><input type="radio" name="q4" id="d3" value="FALSE"></td><td><label onclick="" for="d3">ボトムアップテスト</label><br></tr><tr>
				<td><input type="radio" name="q4" id="d4" value="FALSE"></td><td><label onclick="" for="d4">ホワイトボックステスト</label></td></tr>

				</table>
			</div>
			<H2 id="g5">問題５</H2>
			<div class="question">ソフトウェア開発におけるテスト技法のうち、ブラックボックステストに関する記述として、適切なものはどれか。</div>

			<div class="answer">
				<table class="gijutsu">
				<tr><td><input type="radio" name="q5" id="e1" value="FALSE"></td><td><label onclick="" for="e1">ソースコードを解析し，プログラムの制御の流れと変数間のデータの流れのテストを，主にプログラム開発者以外の第三者が実施する。</label></td></tr><tr>
				<td><input type="radio" name="q5" id="e2" value="TRUE"></td><td><label onclick="" for="e2">プログラムが設計者の意図した機能を実現しているかどうかのテストを，主にプログラム開発者以外の第三者が実施する。</label><br></tr><tr>
				<td><input type="radio" name="q5" id="e3" value="FALSE"></td><td><label onclick="" for="e3">プログラムの全ての命令について最低1回は実行することを完了の条件とするテストを，主にプログラム開発者自身が実施する。</label><br></tr><tr>
				<td><input type="radio" name="q5" id="e4" value="FALSE"></td><td><label onclick="" for="e4">プログラムの内部構造や論理が記述された内部仕様書に基づくテストを，主にプログラム開発者自身が実施する。</label></td></tr>

				</table>
			</div>
			<H2 id="g6">問題６</H2>
			<div class="question">ホワイトボックステストの説明として、適切なものはどれか。</div>

			<div class="answer">
				<table class="gijutsu">
				<tr><td><input type="radio" name="q6" id="f1" value="FALSE"></td><td><label onclick="" for="f1">外部仕様に基づいてテストデータを作成する。</label></td></tr><tr>
				<td><input type="radio" name="q6" id="f2" value="FALSE"></td><td><label onclick="" for="f2">同値分割の技法を使用してテストデータを作成する。</label><br></tr><tr>
				<td><input type="radio" name="q6" id="f3" value="TRUE"></td><td><label onclick="" for="f3">内部構造に基づいてテストデータを作成する。</label><br></tr><tr>
				<td><input type="radio" name="q6" id="f4" value="FALSE"></td><td><label onclick="" for="f4">入力と出力の関係からテストデータを作成する。</label></td></tr>

				</table>
			</div>
			<H2 id="g7">問題７</H2>
			<div class="question">テストの進捗管理に使用する指標として、最も適切なものはどれか。</div>

			<div class="answer">
				<table class="gijutsu">
				<tr><td><input type="radio" name="q7" id="g1" value="TRUE"></td><td><label onclick="" for="g1">テスト項目の消化件数</label></td></tr><tr>
				<td><input type="radio" name="q7" id="g2" value="FALSE"></td><td><label onclick="" for="g2">テストデータの作成量</label><br></tr><tr>
				<td><input type="radio" name="q7" id="g3" value="FALSE"></td><td><label onclick="" for="g3">プログラムの起動回数</label><br></tr><tr>
				<td><input type="radio" name="q7" id="g4" value="FALSE"></td><td><label onclick="" for="g4">プログラムの修正量</label></td></tr>

				</table>
			</div>
			<H2 id="g8">問題８</H2>
			<div class="question">JavaScriptの非同期通信の機能を使うことによって、動的なユーザインタフェースを画面遷移を伴わずに実現する技術はどれか。</div>

			<div class="answer">
				<table class="gijutsu">
				<tr><td><input type="radio" name="q8" id="h1" value="TRUE"></td><td><label onclick="" for="h1">Ajax</label></td></tr><tr>
				<td><input type="radio" name="q8" id="h2" value="FALSE"></td><td><label onclick="" for="h2">CSS</label><br></tr><tr>
				<td><input type="radio" name="q8" id="h3" value="FALSE"></td><td><label onclick="" for="h3">RSS</label><br></tr><tr>
				<td><input type="radio" name="q8" id="h4" value="FALSE"></td><td><label onclick="" for="h4">SNS</label></td></tr>

				</table>
			</div>
			<H2 id="g9">問題９</H2>
			<div class="question">Web サーバにおいて，クライアントからの要求に応じてアプリケーションプログラムを実行して， その結果をブラウザに返すなどのインタラクティブなページを実現するために， Web サーバと外部プログラムを連携させる仕組みはどれか。</div>

			<div class="answer">
				<table class="gijutsu">
				<tr><td><input type="radio" name="q9" id="i1" value="TRUE"></td><td><label onclick="" for="i1">CGI</label></td></tr><tr>
				<td><input type="radio" name="q9" id="i2" value="FALSE"></td><td><label onclick="" for="i2">HTML</label><br></tr><tr>
				<td><input type="radio" name="q9" id="i3" value="FALSE"></td><td><label onclick="" for="i3">MIME</label><br></tr><tr>
				<td><input type="radio" name="q9" id="i4" value="FALSE"></td><td><label onclick="" for="i4">URL</label></td></tr>

				</table>
			</div>
			<H2 id="g10">問題１０</H2>
			<div class="question">ウォータフォールモデルによるシステム開発工程の作業内容a～fを，実施する順序で並べたものはどれか。
				〔作業内容〕
				a.現状の問題点を調査・分析し，対象システムヘの要求を定義する。
				b.システムとして必要な機能をプログラムに分割し，処理の流れを明確にする。
				c.詳細な処理手順を設計し，コーディングする。
				d.テストを行う。
				e.各プログラム内の構造設計を行う。
				f.システムの要求仕様を基に，システムとして必要な機能を定義する。</div>

			<div class="answer">
				<table class="gijutsu">
				<tr><td><input type="radio" name="q10" id="j1" value="FALSE"></td><td><label onclick="" for="j1">a, b, f, c, e, d</label></td></tr><tr>
				<td><input type="radio" name="q10" id="j2" value="TRUE"></td><td><label onclick="" for="j2">a, f, b, e, c, d</label><br></tr><tr>
				<td><input type="radio" name="q10" id="j3" value="FALSE"></td><td><label onclick="" for="j3">a, f, b, e, d, c</label><br></tr><tr>
				<td><input type="radio" name="q10" id="j4" value="FALSE"></td><td><label onclick="" for="j4">a, f, e, b, c, d</label></td></tr>

				</table>
			</div>
			<H2 id="g11">問題１１</H2>
			<div class="question">E-R 図に関する記述として，適切なものはどれか。</div>

			<div class="answer">
				<table class="gijutsu">
				<tr><td><input type="radio" name="q11" id="k1" value="FALSE"></td><td><label onclick="" for="k1">関係データベースの表として実装することを前提に作成する。</label></td></tr><tr>
				<td><input type="radio" name="q11" id="k2" value="TRUE"></td><td><label onclick="" for="k2">業務で扱う情報をエンティティ及びエンティティ間のリレーションシップとして表現する。</label><br></tr><tr>
				<td><input type="radio" name="q11" id="k3" value="FALSE"></td><td><label onclick="" for="k3">データの生成から消滅に至るデータ操作を表現できる。</label><br></tr><tr>
				<td><input type="radio" name="q11" id="k4" value="FALSE"></td><td><label onclick="" for="k4">リレーションシップは、業務上の手順を表現する。</label></td></tr>

				</table>
			</div>
			<H2 id="g12">問題１２</H2>
			<div class="question">DBMS におけるログファイルの説明として，適切なものはどれか。</div>

			<div class="answer">
				<table class="gijutsu">
				<tr><td><input type="radio" name="q12" id="l1" value="FALSE"></td><td><label onclick="" for="l1">システムダウンが発生したときにデータベースの回復処理時間を短縮するため，主記憶上の更新データを定期的にディスクに書き出したものである。</label></td></tr><tr>
				<td><input type="radio" name="q12" id="l2" value="FALSE"></td><td><label onclick="" for="l2">ディスク障害があってもシステムをすぐに復旧させるため，常に同一データのコピーを別ディスクや別サイトのデータベースに書き出したものである。</label><br></tr><tr>
				<td><input type="radio" name="q12" id="l3" value="FALSE"></td><td><label onclick="" for="l3">ディスク障害からデータベースを回復するため，データベースの内容をディスク単位で複写したものである。</label><br></tr><tr>
				<td><input type="radio" name="q12" id="l4" value="TRUE"></td><td><label onclick="" for="l4">データベースの回復処理のため，データの更新前後の値を書き出してデータベースの更新記録を取ったものである。</label></td></tr>

				</table>
			</div>
			<div class="center"><input type="button" id="next_bt" value="テスト終了" onclick="testFnc_q4()"></div>
		</div>
	</form>
	
	<!--最終=========================================================================== -->
	<form name="f8" style="display:none" action="sendmail.php" method="post">
		<input type="hidden" name="userRadioButtonId">
		<input type="hidden" name="checkCnt">
		<input type="hidden" name="correctCnt">
		<input type="hidden" name="queCnt">
		<input type="hidden" name="answerList">
		<input type="hidden" name="q" value="q4">
	</form>
	</div>
</body>
</html>
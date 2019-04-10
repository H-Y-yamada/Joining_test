

//端末番号
var tanmatsu=0;
//回答時間
var answerTime=600000;
//回答開始時間
var startTime;
//ラジオボタン数
var allRadio;
//設問選択肢数
var queRadio;
//設問数
var queCnt;
//設問番号
var num;
//選択番号
var Cnt;
//回答数
var checkCnt=0;
//正解数
var correctCnt=0;
//回答状況
var answerList="";
//回答率
var checkPer;
//正答率
var correctPer;
//全フォーム
var allforms;
//クエリ
var result;



//問題ページをロードした時にフォーム、フォームの数を取得
function getFormsCnt(){
	allforms=document.forms;
}


//メニューページをロードした時にgetパラメータを変数resultに代入
function GetQueryString() {
  if (1 < document.location.search.length) {
		// 最初の1文字 (?記号) を除いた文字列を取得する
		var query = document.location.search.substring(1);
	 
		// クエリの区切り記号 (&) で文字列を配列に分割する
		var parameters = query.split('&');
		result = new Object();
		
		for (var i = 0; i < parameters.length; i++) {
			// パラメータ名とパラメータ値に分割する
			var element = parameters[i].split('=');
			var paramName = decodeURIComponent(element[0]);
			var paramValue = decodeURIComponent(element[1]);
		 
			// パラメータ名をキーとして連想配列に追加する
			result[paramName] = decodeURIComponent(paramValue);
		}
	
		return result;
	}
  return null;
}


/*トップページのSTARTボタンで使用
端末番号をチェック、メニューページへ遷移*/
function idchecked()
{
	var idchecker = false;
	var rButtons=document.forms[0].elements;
	for(j=0;j<rButtons.length;j++)
	{
		if(rButtons[j].checked)
		{
			idchecker = true;
			
		}
	}
	if(idchecker)
	{
		document.forms[0].submit();
	}else{
		window.alert('端末番号が選択されていません');
	}
}	


/*問題ページのスタートスタートボタンで使用、
説明文から問題文へ画面の切り替え、
カウントダウンタイマー使用開始*/
function nextPage(){
	
	//画面切り替え
	flipPage();
	document.getElementById("closebt").style.display="block";
	//テスト開始のシステム時間の取得
	startTime=new Date().getTime();
	//カウントダウンタイマー表示開始
	answerTime+=100;
	showTime();
	setTimeout('nextPage2()',100);
}



/*nextPage()で使用、
画面の切り替え*/
function flipPage(){
	document.forms[0].style.display="none";
	document.forms[1].style.display="block";
}

/*nextPage()で使用、
回答時間終了後testFnc()*/
function nextPage2(){
	if(new Date().getTime()-startTime>answerTime){
		testFnc();
	}else{
		setTimeout('nextPage2()',100);
	}
}

/*問題ページの回答終了ボタンで使用、
startTimeをずらす*/
function nextPage3(){
	if(confirm("回答を終了しますか？")){
		startTime=-answerTime;
	}
}


/*nextPage()で使用、
回答時間を５秒単位で表示*/
function showTime(){
	
	//現在のシステム時間
	var currentTime=new Date().getTime();
	//残り時間
	var limitTime=Math.round((answerTime+startTime-currentTime)/1000);
	//分
	var limitTimeM=Math.floor(limitTime/60);
	//秒
	var limitTimeS=Math.ceil((limitTime%60)/5)*5;
		if(limitTimeS==60){
			limitTimeS=0;
			limitTimeM+=1;
		}
	
	// 残り時間表示
	document.getElementById("limitTime").innerText="残り時間　"+limitTimeM+"分"+limitTimeS+"秒";
	
	// 回答時間を過ぎたら残り時間表示を消す
	if(answerTime+startTime-currentTime>0){
		setTimeout('showTime()',1000);
	}else{
		document.getElementById("limitTime").innerText="";
	}
}



function testFnc_q4(){

	if(confirm("テストを終了しますか？")){
		testFnc()
	}
}


//回答を集計、sendmailへpost送信
function testFnc(){

		var userId=0;
		
		// 端末情報をhiddenへセット
		var userList=document.getElementsByName("user");
		for (var i=0; i<userList.length;i++) {
			if (userList[i].checked) {
				userId = userList[i].value;
			}
		}
		allforms[2].userRadioButtonId.value=userId;
		
		// 正当数と回答数と回答状況をhiddenへセット
		allRadio = allforms[1].length;
		queRadio = allforms[1].q1.length;
		queCnt = Math.round(allRadio / queRadio);
		rButtons=allforms[1].elements;
		for(j=0;j<queCnt;j++)
		{
			num=j+1;
			answerList=answerList+num+"番,";
			for(Cnt=0;Cnt<queRadio;Cnt++)
			{
				if(rButtons[j*queRadio+Cnt].checked){
					checkCnt++;
					if(rButtons[j*queRadio+Cnt].value=="TRUE")
					{
						correctCnt++;
						answerList=answerList+"○,"
					}else{
						answerList=answerList+"×,"
					}
				}else{
					answerList=answerList+"‐,"
				}
			}
			answerList=answerList+"\n";
		}
		allforms[2].checkCnt.value=checkCnt;	// 回答数
		allforms[2].correctCnt.value=correctCnt;	// 正解数
		allforms[2].queCnt.value=queCnt;	// 設問数
		allforms[2].answerList.value=answerList;	// 回答状況
		allforms[2].submit();
	
}


/*結果メール送信ページで使用、
２秒でメニューページへ遷移*/
function sendmailLoad(){
	setTimeout("link()", 2000);
}

function link(){
	location.href='menu.php';
}



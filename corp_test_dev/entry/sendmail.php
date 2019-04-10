<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
 "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ja" lang="ja">

<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />
	<script type="text/javascript" src="js/index.js"></script>
	<title>テスト結果</title>
</head>

<body onload="sendmailLoad()">

<?php
	session_start();
	$correctCnt =$_POST['correctCnt'];
	$checkCnt = $_POST['checkCnt'];
	$queCnt =$_POST['queCnt'];
	$correctPer =round($correctCnt / $checkCnt *100);
	$answerList = $_POST['answerList'];
	$_SESSION[$_POST['q']]=array($correctCnt,$checkCnt);
	switch($_POST['q']){
		case "q1":
			$q="四則演算";
			$appId = 158;
			break;
		case "q2":
			$q="暗号問題";
			$appId = 159;
			break;
		case "q3":
			$q="言語問題";
			$appId = '';
			break;
		case "q4":
			$q="技術問題";
			$appId = 160;
			break;
	}
	$mailSubTxt="テスト結果";
	$mailMainTxt="結果\n端末番号【" . $_SESSION['user'] ."】\n";
	$mailMainTxt.="回答者氏名：". $_SESSION['LastName']." ".$_SESSION['FirstName'] ."\n";
	$mailMainTxt.=($q)."   ".$correctCnt."問正解(".$checkCnt."問回答）正答率". $correctPer ."％\n";
	$mailMainTxt.=$answerList."\n";

  //--------------システムタイムゾーン設定
	date_default_timezone_set('Asia/Tokyo');
	//--------------
	$fp = fopen("kekka.txt", "a");
	flock($fp,LOCK_EX);
	fwrite($fp, date("y/m/d H:i:s")."\n");
	fwrite($fp, $mailMainTxt);
	fwrite($fp, "-----------------------------------------------------\n");
	flock($fp,LOCK_UN);
	fclose($fp);
	//--------------

	mb_language('ja');
	mb_internal_encoding("UTF-8");
	if(!mb_send_mail("rec@acrovision.jp",$mailSubTxt,$mailMainTxt, "From:" . "recruit@acrovision.jp")){
		echo "テスト結果送信失敗";
		
	}else{
		echo "テスト結果を送信しました。";
		
	};


$path = "/home/acrovisionllc/pear/PEAR";
set_include_path(get_include_path() . PATH_SEPARATOR . $path);

require_once("/home/acrovisionllc/pear/PEAR/HTTP/Request2.php");

// アプリID

include('/home/acrovisionllc/www/kintone.acrovision.net/includes/configure.php');
include('/home/acrovisionllc/www.includes/kintone.acrovision.net/includes/configure.php');

// 認証設定
$subDomain = KINTONE_subDomain;
$loginName = KINTONE_loginName;
$password = KINTONE_password;

// リクエストヘッダ
 $header = array(
    "Host: " . $subDomain . ".cybozu.com:443",
    "Content-Type: application/json",
    "X-Cybozu-Authorization: " . base64_encode($loginName . ':' . $password)
);

$kintoneValue =  array(                 
                    "LastName" => array(
                            "value" => $_SESSION["LastName"]
                    ),
                    "FirstName" => array(
                            "value" => $_SESSION["FirstName"]
                    ),
                    "正解数" => array(
                            "value" => $correctCnt
                    ),
                    "回答数" => array(
                            "value" => $checkCnt
                    ),
                    "正答率" => array(
                            "value" => $correctPer
                    ),
                    "回答状況" => array(
                            "value" => $answerList
                    )
                );

try {
    // リクエスト作成
    $request = new HTTP_Request2();
    $request->setHeader($header);
    $request->setUrl("https://" . $subDomain . ".cybozu.com/k/v1/record.json");
    $request->setMethod(HTTP_Request2::METHOD_POST);
    $request->setBody(json_encode(array("app" => $appId,
    									"record" => $kintoneValue)
    									));
    $request->setConfig(array(
      'ssl_verify_host' => false,
      'ssl_verify_peer' => false
    ));
 
    // レスポンス取得
    $response = $request->send();

    echo "<br>DB送信しました";
 
// HTTP_Request2のエラーを表示
} catch (HTTP_Request2_Exception $e) {
    die($e->getMessage());
// それ以外のエラーを表示
} catch (Exception $e) {
    die($e->getMessage());
}
 
// エラー時
if ($response->getStatus() != "200") {
  echo sprintf("status: %s\n", $response->getStatus());
  echo sprintf("cybozu error: %s\n", $response->getHeader('x-cybozu-error'));
//  echo sprintf("body: \n%s\n", $response->getBody());
  die;
}



?>

</body>
</html>

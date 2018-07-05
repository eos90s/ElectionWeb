<?php

// Works well with php5.3 and php5.6.


class EmailSender {
    var $url;
    var $accesskey;
    var $secretkey;

    function __construct($accesskey, $secretkey) {
        $this->url = "https://live.kewail.com/directmail/v1/singleSendMail";
        $this->accesskey =  $accesskey;
        $this->secretkey = $secretkey;
    }

	function getRandom() {
        return rand(100000, 999999);
    }

    function sendCurlPost($url, $dataObj) {
        $curl = curl_init();
        curl_setopt($curl, CURLOPT_URL, $url);
        curl_setopt($curl, CURLOPT_HEADER, 0);
//        curl_setopt($curl, CURLOPT_TIMEOUT,300);
//        curl_setopt($curl, CURLOPT_IPRESOLVE, CURL_IPRESOLVE_V4);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($curl, CURLOPT_POST, 1);
        curl_setopt($curl, CURLOPT_CUSTOMREQUEST, "POST");  
        curl_setopt($curl, CURLOPT_POSTFIELDS, json_encode($dataObj));
        curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, 0);
        curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, 0);
        curl_setopt($curl, CURLOPT_HTTPHEADER, array('Content-Type: application/json', 'Content-Length: ' . strlen(json_encode($dataObj)))); 
        $ret = curl_exec($curl);
        if (false == $ret) {
            // curl_exec failed
            $result = "{ \"result\":" . -2 . ",\"errmsg\":\"" . curl_error($curl) . "\"}";
        } else {
            $rsp = curl_getinfo($curl, CURLINFO_HTTP_CODE);
            if (200 != $rsp) {
                $result = "{ \"result\":" . -1 . ",\"errmsg\":\"". $rsp . " " . curl_error($curl) ."\"}";
            } else {
                $result = $ret;
            }
        }
        curl_close($curl);
        return $result;
    }

    /**
     * 普通单发，明确指定内容，如果有多个签名，请在内容中以【】的方式添加到信息内容中，否则系统将使用默认签名
     * @param int $type 邮件类型，0事务投递，其他值的为商业投递量，默认是0
     * @param string $toEmail 邮件接收地址
     * @param string $fromEmail 发送邮件地址，管理控制台中配置的发信地址(登陆后台查看发信地址)
     * @param boolean $needToReply 是否显示回复邮件地址，如果为true是的时候，replyEmail必填，false的时候replyEmail可以为空
     * @param string $replyEmail 回复邮件地址
     * @param string $fromAlias 发信人昵称，可填空串
     * @param string $htmlBody 邮件正文
     * @param string $subject 邮件主题
     * @param string $ext 扩展字段,可填空串
     * @return string json string { "result": xxxxx, "errmsg": "xxxxxx" ... }，被省略的内容参见协议文档
     */

	function sendSingleEmail($type,$toEmail,$fromEmail,$needToReply,$replyEmail,$fromAlias,$htmlBody,$subject,$ext){
	/*
	请求包体
	{
		"sig": "D9544A3D290571425C8C5094542A76C2A19A84745F1DDFFA72F112A58E563517",
		"ext": "",
		"replyEmail": "xxxx@qq.com",
		"fromAlias": "张三",
		"htmlBody": "test email",
		"needToReply": true,
		"subject": "测试邮件",
		"clickTrace": "0",
		"time": 1519378109,
		"type": 0,
		"toEmail": "xxxxx@qq.com",
		"fromEmail": "service@xxx.com"
	}
	应答包体
	{
		"result": 0,
		"errmsg": "OK",
		"surplus": 19,
		"sequenceId": "5aa1deb00cf2deb46f411ee4"
	}
	*/		

	    $random = $this->getRandom();
		$curTime = time();
        $wholeUrl = $this->url . "?accesskey=" . $this->accesskey . "&random=" . $random;

        // 按照协议组织 post 包体
        $data = new \stdClass();
		$data->sig = hash("sha256",
            "secretkey=".$this->secretkey."&random=".$random."&time=".$curTime."&fromEmail=".$fromEmail, FALSE);
		$data->ext = "";
		$data->replyEmail = $replyEmail;
		$data->fromAlias = $fromAlias;
		$data->htmlBody = $htmlBody;
		$data->needToReply = $needToReply;
		$data->subject = $subject;
		$data->clickTrace = "0";
		$data->time = $curTime;
		$data->type = $type;
		$data->toEmail = $toEmail;
		$data->fromEmail = $fromEmail;
		echo $wholeUrl;

		return $this->sendCurlPost($wholeUrl, $data);
	}

}


try {
    // 请根据实际 accesskey 和 secretkey 进行开发，以下只作为演示 sdk 使用
//    $accesskey = "xxxxxx";
//    $secretkey = "xxxxxxx";
            $accesskey = "5af3ae0b0cf2dc82d70735ed";
            $secretkey = "fc851ecab28d4b29888a88aad89707c6";    

    
    $emailSender = new EmailSender($accesskey, $secretkey);

    // 普通单发
    $result = $emailSender->sendSingleEmail(0,"tmzj123@qq.com","mail@service.shuojianghu.com",true,"tmzj123@qq.com","昵称","邮件正文内容","邮件主题","");
	$rsp = json_decode($result);
    echo $result;
    echo "<br>";

} catch (\Exception $e) {
    echo var_dump($e);
}
?>
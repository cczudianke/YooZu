<?php
 function sendMail($to, $title, $content) {
   Vendor('PHPMailer.PHPMailerAutoload');
   $mail = new PHPMailer(); //实例化
   $mail->IsSMTP(); // 启用SMTP
   $mail->Host=C('MAIL_HOST'); //smtp服务器的名称（这里以QQ邮箱为例）
   $mail->SMTPAuth = C('MAIL_SMTPAUTH'); //启用smtp认证
   $mail->Username = C('MAIL_USERNAME'); //你的邮箱名
   $mail->Password = C('MAIL_PASSWORD') ; //邮箱密码
   $mail->From = C('MAIL_FROM'); //发件人地址（也就是你的邮箱地址）
   $mail->FromName = C('MAIL_FROMNAME'); //发件人姓名
   $mail->AddAddress($to,"尊敬的客户");
   $mail->WordWrap = 50; //设置每行字符长度
   $mail->IsHTML(C('MAIL_ISHTML')); // 是否HTML格式邮件
   $mail->CharSet=C('MAIL_CHARSET'); //设置邮件编码
   $mail->Subject =$title; //邮件主题
   $mail->Body = $content; //邮件内容
   $mail->AltBody = "这是一个纯文本的身体在非营利的HTML电子邮件客户端"; //邮件正文不支持HTML的备用显示
   return($mail->Send());
 }
   
   function create_verify(){
   		$config_verify=array(
		'fontSize'=>15,
		'imageW'=>100,
		'imageH'=>40,
		'length'=>3,
		'useNoise'=>false,
		'codeSet'=>'0123456789',
		);
		 $Verify=new \Think\Verify($config_verify);
		 $Verify->entry();
   }
   
   function check_verify($code, $id=""){
   	$config = array ('reset' => false);
    $verify = new \Think\Verify($config);  
    return $verify->check($code, $id);  
}
   
   	function is_login(){
    $user = session('user_auth');
    if (empty($user)) 
        {return 0;}
        else {
        return session('user_auth_sign') == data_auth_sign($user) ? $user['uid'] : 0;
    }
}
   	
   
   
   
   
   
   
 
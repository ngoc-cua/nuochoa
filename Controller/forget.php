<?php
    $act="forget";
    if(isset($_GET['act'])){
        $act=$_GET['act'];

    }
    switch ($act){
        case 'forget':
            include_once './View/forgetpassword.php';
             break;

        case 'forget_action':
            if(isset($_POST['submit_email'])){
                $email=$_POST['email'];
                $_SESSION['email']=array();
                // kiemr tra xem email này có tồn tại không
                $usr=new user();
                $checkur=$usr->checkEmail($email)->rowCount();
                if($checkur>0)
                {
                    // tạo pass ngẫu nhiên 123456
                    $code=random_int(1000,100000);
                    // tạo đối tượng
                    $item=array(
                        'id'=>$code,
                        'email'=>$email,
                    );
                    $_SESSION['email'][]=$item;
              //tiến hành gửi mail
                $mail = new PHPMailer();
                $mail->CharSet = "utf-8";
                $mail->IsSMTP();
                // enable SMTP authentication
                $mail->SMTPAuth = true;
                // GMAIL username to:
                // $mail->Username = "php22023@gmail.com";//
                $mail->Username = "lychau2387@gmail.com"; //
                // GMAIL password
                // $mail->Password = "php22023ngoc";
                $mail->Password = "kxws tlbl pjob ipjx"; //Phplytest20@php
                $mail->SMTPSecure = "tls";  // ssl
                // sets GMAIL as the SMTP server
                $mail->Host = "smtp.gmail.com";
                // set the SMTP port for the GMAIL server
                $mail->Port = "587"; // 465
                $mail->From = 'lychau2387@gmail.com';
                $mail->FromName = 'Ly';
                // $getemail là địa chỉ mail mà người nhập vào địa chỉ của họ đã đăng ký trong trang web
                $mail->AddAddress($email, 'reciever_name');
                $mail->Subject = 'Reset Password';
                $mail->IsHTML(true);
                $mail->Body = 'Cấp lại mã code ' . $code . '';
                if ($mail->Send()) {
                    echo '<script> alert("Check Your Email and Click on the
                        link sent to your email");</script>';
                    include "./View/resetpw.php";
                } else {
                    echo "Mail Error - >" . $mail->ErrorInfo;
                    include "./View/forgetpassword.php";
                }
                // include "./View/resetpw.php";
            } else {
                echo '<script> alert("Địa chỉ mail ko tồn tại");</script>';
                include "./View/forgetpassword.php";
            }
                // include "./View/resetpw.php";
            } else {
                echo '<script> alert("Địa chỉ mail ko tồn tại");</script>';
                include "./View/forgetpassword.php";
            }
             break;
            
             case 'reset':
                
                if(isset($_POST['submit_password']))
                {
                    $pass=$_POST['password']; // 1651
                    /// dò xem pass này có tồn tại trong session ko
                    foreach ($_SESSION['email'] as $key => $item) {
                        if($item['id']==$pass)
                        {
                            $emailold=$item['email']; // lấy ra email
                            // nếu có gắn muối salf thì ở đây cũng phải gắn
                            $passnew =md5($pass);
                            // tiến hành update
                            $usr=new user();
                            $usr->updatePassEmail($emailold,$passnew);
                        }
                    }
                }
                echo '<meta http-equiv="refresh" content="=;url=../index.php?action=dangnhap"/>';
                break;
    }
?>
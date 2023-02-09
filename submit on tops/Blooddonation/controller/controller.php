<?php
require_once('model/model.php');
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

error_reporting(0);
class controller extends Model
{
    public function __construct()
    {
        parent::__construct();

        // select bloodgroup table form blooddonation batabase...
        $showblood = $this->show('blood');

        // select city table form blooddonation batabase...
        $showcity = $this->show('city');

        // insert user
        if (isset($_POST["sub"])) {
            $fnm = $_POST["fnm"];
            $unm = $_POST["unm"];
            $dob = $_POST["dob"];
            $gender = $_POST["gender"];
            $email = $_POST["email"];
            $pass = base64_encode($_POST["pass"]);
            $con_pass = base64_encode($_POST["con_pass"]);
            $bg = $_POST["blood_group"];
            $mobile = $_POST["mobile"];
            // upload photo
            $tmp_name = $_FILES["ph"]["tmp_name"];
            $path = "uploads/images/user/" . $_FILES["ph"]["name"];
            move_uploaded_file($tmp_name, $path);
            $city = $_POST["city"];
            $pin = $_POST["pin"];
            $add = $_POST["add"];
            $data = array("fnm" => $fnm, "unm" => $unm, "dob" => $dob, "gender" => $gender, "email" => $email, "pass" => $pass, "con_pass" => $con_pass, "bg_id" => $bg, "mobile" => $mobile, "photo" => $path, "c_id" => $city, "pincode" => $pin, "address" => $add);
            if ($pass == $con_pass) {
                $chk = $this->insert('users', $data);
                if ($chk) {
                    echo "<script>
                alert('Data Add Successfully')
                window.location='login';
                </script>";
                }
            } else {
                echo "<script>
                    alert('Password and Confirm-password not match')
                    window.location='register';
                    </script>";
            }
        }

        // forget password
        if (isset($_POST['forget'])) {
            require 'PHPMailer/Exception.php';
            require 'PHPMailer/PHPMailer.php';
            require 'PHPMailer/SMTP.php';
            //Create an instance; passing `true` enables exceptions
            $mail = new PHPMailer(true);
            try {
                $em = $_POST['email'];

                $mail->SMTPDebug = 1;
                $mail->isSMTP(); //Send using SMTP
                $mail->Host = 'smtp.gmail.com'; //Set the SMTP server to send through
                $mail->SMTPAuth = true; //Enable SMTP authentication
                $mail->Username = 'bkpandey.pandey@gmail.com'; //SMTP username
                $mail->Password = 'lgacnbymmoahfkgu'; //SMTP password

                $mail->SMTPSecure = 'tls';
                $mail->Port = 587;

                //Recipients
                $mail->setFrom('bkpandey.pandey@gmail.com', 'Mailer');
                $mail->addAddress($_POST["email"], 'Repent');

                $chk = $this->forgetuserpass('users', 'email', $em);
                //Content
                $mail->isHTML(true); //Set email format to HTML
                $mail->Subject = 'Forget Password For User';
                $mail->Body = "<p>Your Password is : <p>" . $chk;

                $mail->send();
                echo "<script>
                alert('Your password is send successfully on your email kindly checked and logged in....')
                window.location='./';
                </script>";

            } catch (Exception $e) {
                echo "<script>
                alert('Enter valid email address')
                window.location='forget password';
                </script>";
                echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
            }
        }

        //login for user
        if (isset($_POST['login'])) {
            $un = $_POST['user'];
            $pass = base64_encode($_POST['pass']);
            $chk = $this->userlogin('users', $un, $pass);
            if ($chk) {
                echo "<script>
                alert('Login Successfully...')
                window.location='./';
                </script>";
            } else {
                echo "<script>
                alert('Something was wrong try again !')
                window.location='./';
                </script>";
            }
        }

        // change password of user
        if (isset($_POST["change"])) {
            $id = $_SESSION["u_id"];
            $oldpass = base64_encode($_POST["oldp"]);
            $newpass = base64_encode($_POST["newp"]);
            $confpass = base64_encode($_POST["confp"]);
            $chk = $this->chnagepass('users', 'u_id', $oldpass, $newpass, $confpass, $id);
            if ($chk) {
                unset($_SESSION["u_id"]);
                unset($_SESSION['unm']);
                unset($_SESSION["email"]);
                session_destroy();
                echo "<script>
                alert('Your password changed successfully..')
                 window.location='./';
                 </script>";
            } else {
                echo "<script>
                alert('Your Oldpass,New password and Confirm Passsword does not matched try again')
                 window.location='changepass';
                 </script>";
            }
        }
        
        // userdata for profile
        $showuser = $this->userprofile('users', 'blood', 'city', 'users.bg_id=blood.bg_id', 'users.c_id=city.c_id', 'u_id', $_SESSION['u_id']);
        
        //update profile for user
        if(isset($_POST['updprofile'])){
            $id = $showuser[0]['u_id']; 
            $fnm = $_POST["fnm"];
            $unm = $_POST["unm"];
            $dob = $_POST["dob"];
            $gender = $_POST["gender"];
            $email = $_POST["email"];
            $bg = $_POST["blood_group"];
            $mobile = $_POST["mobile"];
            // upload photo
            $tmp_name = $_FILES["ph"]["tmp_name"];
            $path = "uploads/images/user/" . $_FILES["ph"]["name"];
            move_uploaded_file($tmp_name, $path);
            $city = $_POST["city"];
            $pin = $_POST["pin"];
            $add = $_POST["add"];

            $chk = $this->updateprofile('users', $fnm, $unm, $dob, $gender, $email, $bg, $mobile, $path, $city, $pin, $add, 'u_id', $id);

            if($chk)
            {
                echo "<script>
                alert('Your Profile Update Successfully')
                window.location='profile';
                </script>";
            }
            else
            {
                echo "<script>
                alert('Something was wrong....')
                window.location='./';
                </script>";
            }
        }

        // Donate for blood
        if (isset($_POST['dona'])) {
            echo "<script>
                window.location='donate';
                </script>";
        }
        // show receiver
        $showreceiver = $this->donorblood('receiver', 'blood', 'hospital', 'receiver.bg_id=blood.bg_id', 'receiver.h_id=hospital.h_id');
        
        // add donor
        if (isset($_POST['adddonor'])) {
            $dnm = $_POST['dnm'];
            $mn = $_POST['mn'];
            $dbg = $_POST['bloodgroup'];
            $dtdcity = $_POST['dtdcity'];
            $dtime = $_POST['dtime'];
            $ddate = $_POST['ddate'];
            $data = array("d_nm" => $dnm,"d_contact" => $mn, "bg_id" => $dbg, "c_id" => $dtdcity, "d_time" => $dtime, "d_date" => $ddate);
            $chk = $this->insert('donar', $data);
            if ($chk) {
                echo "<script>
                alert('Thanks for donating blood')
                window.location='donate';
                </script>";
            } else {
                echo "<script>
                alert('Something was wrong try again !')
                window.location='donate';
                </script>";
            }
        }
         
        // Receive for blood
        if (isset($_POST['rece'])) {
            echo "<script>
                window.location='receive';
                </script>";

        }
        // add receiver
        if(isset($_POST['addreceiver']))
        {
            $rnm = $_POST['rnm'];
            $rci = $_POST['mn'];  
            $bg = $_POST['bloodgroup'];
            $hos = $_POST['hospital'];
            $data=array("r_nm"=>$rnm,"r_contact"=>$rci,"bg_id"=>$bg,"h_id"=>$hos);
            $chk = $this->insert('receiver',$data);
            if ($chk) {
                echo "<script>
                alert('dont worry we will find blood for you')
                window.location='receive';
                </script>";
            } else {
                echo "<script>
                alert('Something was wrong try again !')
                window.location='receive';
                </script>";
            }
        }
        // show hospital for receive blood
        $showhospital = $this->show('hospital');

        // show donor list
        $showdonor = $this->receiveblood('donar', 'blood', 'city', 'donar.bg_id=blood.bg_id', 'donar.c_id=city.c_id');

        // Send message for amdin
        if (isset($_POST['messagesend'])) {
            $un = $_SESSION['unm'];
            $em = $_SESSION['email'];
            $su = $_POST['sube'];
            $me = $_POST['message'];
            $data = array("un" => $un, "email" => $em, "sub" => $su, "message" => $me);
            if ($un != '' && $em != '' && $su != '' && $me != '') {
                $chk = $this->insert('message', $data);
                if ($chk) {
                    echo "<script>
                    alert('Message Send Successfully')
                    window.location='contact_us';
                    </script>";
                } else {
                    echo "<script>
                alert('Message not send')
                window.location='contact_us';
                </script>";
                }
            }
        }

        //logout for user
        if (isset($_GET['logoutuser'])) {
            $chk = $this->logoutuser();
            if ($chk) {
                echo "<script>
                alert('Logout Successfully...')
                window.location='./';
                </script>";
            } else {
                echo "<script>
                alert('Something was wrong try again !')
                window.location='./';
                </script>";
            }
        }

        // load template
        if (isset($_SERVER["PATH_INFO"])) {
            switch ($_SERVER["PATH_INFO"]) {
                case '/':
                    require_once("index.php");
                    require_once("nevbar.php");
                    require_once("header.php");
                    require_once("content.php");
                    require_once("footer.php");
                    break;

                case '/login':
                    require_once("index.php");
                    require_once("nevbar.php");
                    require_once("header.php");
                    require_once("login.php");
                    require_once("footer.php");
                    break;

                case '/profile':
                    require_once("index.php");
                    require_once("nevbar.php");
                    require_once("header.php");
                    require_once("profile.php");
                    require_once("footer.php");
                    break;

                case '/changepass':
                    require_once("index.php");
                    require_once("nevbar.php");
                    require_once("header.php");
                    require_once("changepassword.php");
                    require_once("footer.php");
                    break;

                case '/update_profile':
                    require_once("index.php");
                    require_once("nevbar.php");
                    require_once("header.php");
                    require_once("update profile.php");
                    require_once("footer.php");
                    break;

                case '/register':
                    require_once("index.php");
                    require_once("nevbar.php");
                    require_once("header.php");
                    require_once("register.php");
                    require_once("footer.php");
                    break;

                case '/donate_receive':
                    require_once("index.php");
                    require_once("nevbar.php");
                    require_once("header.php");
                    require_once("donate_receive.php");
                    require_once("footer.php");
                    break;

                case '/donate':
                    require_once("index.php");
                    require_once("nevbar.php");
                    require_once("header.php");
                    require_once("donate.php");
                    require_once("footer.php");
                    break;

                case '/receive':
                    require_once("index.php");
                    require_once("nevbar.php");
                    require_once("header.php");
                    require_once("receive.php");
                    require_once("footer.php");
                    break;

                case '/contact_us':
                    require_once("index.php");
                    require_once("nevbar.php");
                    require_once("header.php");
                    require_once("contact_us.php");
                    require_once("footer.php");
                    break;

                case '/about_us':
                    require_once("index.php");
                    require_once("nevbar.php");
                    require_once("header.php");
                    require_once("about_us.php");
                    require_once("footer.php");
                    break;

                case '/forget password':
                    require_once("index.php");
                    require_once("nevbar.php");
                    require_once("header.php");
                    require_once("forget password.php");
                    require_once("footer.php");
                    break;

                default:
                    require_once("index.php");
                    require_once("nevbar.php");
                    require_once("header.php");
                    require_once("404.php");
                    require_once("footer.php");
                    break;
            }
        }
    }
}
$obj = new controller();
?>
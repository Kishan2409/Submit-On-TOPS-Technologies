<?php
require_once('model/model.php');
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
        if(isset($_POST["sub"]))
        {
            $fnm = $_POST["fnm"];
            $unm = $_POST["unm"];
            $dob= $_POST["dob"];
            $gender = $_POST["gender"];
            $email = $_POST["email"];
            $pass = $_POST["pass"];
            $con_pass = $_POST["con_pass"];
            $bg = $_POST["blood_group"];
            $mobile= $_POST["mobile"];

           
            // upload photo
            $tmp_name = $_FILES["ph"]["tmp_name"];
            $path="assets/image/uploads/user".$_FILES["ph"]["name"];
            move_uploaded_file($tmp_name,$path);
            $city = $_POST["city"];
            $pin = $_POST["pin"];
            $add = $_POST["add"];

            $data=array("fnm"=>$fnm,"unm"=>$unm,"dob"=>$dob,"gender"=>$gender,"email"=>$email,"pass"=>$pass,"con_pass"=>$con_pass,"bloodgroup"=>$bg,"mobile"=>$mobile,"photo"=>$path,"city"=>$city,"pincode"=>$pin,"address"=>$add);

            $ch=$this->insert('user', $data);
            if($ch)
            {
                echo "<script>
                alert('Data Add Succefully')
                window.location='/login';
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
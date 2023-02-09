<?php
require_once("model/model.php");
error_reporting(0);
class controller extends model
{
    public function __construct()
    {
        parent::__construct();
        // fatch count data in a table
        $countuser = $this->count('users');
        $countblood = $this->count('blood');
        $countdoner = $this->count('donar');
        $showdoner = $this->receiveblood('donar', 'blood', 'city', 'donar.bg_id=blood.bg_id', 'donar.c_id=city.c_id');
        $countreceiver = $this->count('receiver');
        $showreceiver = $this->donorblood('receiver', 'blood', 'hospital', 'receiver.bg_id=blood.bg_id', 'receiver.h_id=hospital.h_id');
        $counthospital = $this->count('hospital');
        // login for admin
        if (isset($_POST['login'])) {
            $un = $_POST['user'];
            $pass = $_POST['pass'];
            $chk = $this->adminlogin('admin', $un, $pass);
            if ($chk) {
                echo "<script>
                alert('Login successfully')
                window.location='dashboard';
                </script>";
            } else {
                echo "<script>
                alert('Somthing was wrong try again !')
                window.location='./';
                </script>";
            }
        }

        // show all data in admin table...
        $showadmin = $this->showdata('admin');

        // show all data in user table...
        $showuser = $this->userprofile('users', 'blood', 'city', 'users.bg_id=blood.bg_id', 'users.c_id=city.c_id');

        //update userdata
        if (isset($_GET['updateprofile'])) {
            $id = $_GET['updateprofile'];
            $updateuserprofile = $this->upduserprofile('users', 'blood', 'city', 'users.bg_id=blood.bg_id', 'users.c_id=city.c_id', 'u_id', $id);
        }
        // show city for user update profile
        $showcity = $this->showdata('city');
        //upadet user profile
        if (isset($_POST['updprofile'])) {
            $id = $_GET['updateprofile'];
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
            $chk = $this->updprofile('users', $fnm, $unm, $dob, $gender, $email, $bg, $mobile, $path, $city, $pin, $add, 'u_id', $id);
            if ($chk) {
                echo "<script>
                alert('User Profile Update Successfully')
                window.location='user';
                </script>";
            } else {
                echo "<script>
                alert('Something was wrong....')
                window.location='./';
                </script>";
            }
        }

        // delete data for user
        if (isset($_GET["deleteuser"])) {
            $deleteid = $_GET["deleteuser"];
            $id = array("u_id" => $deleteid);
            $chk = $this->deletedata('users', $id);
            if ($chk) {
                echo "<script>
                alert('Delete User Successfully.')
                window.location='user';
                </script>";
            } else {
                echo "<script>
                alert('Somthing was wrong try again !')
                window.location='user';
                </script>";
            }
        }

        // show all data in blood table...
        $showblood = $this->showdata('blood');

        // add data in blood table...
        if (isset($_POST['adblood'])) {
            $bg = $_POST['bloodgroup'];
            $don = $_POST['donate'];
            $rec = $_POST['receive'];
            $data = array("bloodgroup" => $bg, "donate" => $don, "receive" => $rec);
            $chk = $this->insertdata('blood', $data);
            if ($chk) {
                echo "<script>
                alert('Data add in blood table')
                window.location='blood';
                </script>";
            } else {
                echo "<script>
                alert('Something was wrong!')
                window.location='blood';
                </script>";
            }
        }

        //update blood for fatch
        if (isset($_GET['updateblood'])) {
            $id = $_GET['updateblood'];
            $updblood = $this->updfatch('blood', 'bg_id', $id);
        }

        //update blood details
        if (isset($_POST['updblood'])) {
            $id = $_GET['updateblood'];
            $bg = $_POST['bloodgroup'];
            $don = $_POST['donate'];
            $rec = $_POST['receive'];
            $chk = $this->updateblood('blood', $bg, $don, $rec, 'bg_id', $id);
            if ($chk) {
                echo "<script>
                alert('Update data add in blood table')
                window.location='blood';
                </script>";
            } else {
                echo "<script>
                alert('Something was wrong!')
                window.location='./';
                </script>";
            }
        }

        // delete data for blood
        if (isset($_GET["deleteblood"])) {
            $deleteid = $_GET["deleteblood"];
            $id = array("bg_id" => $deleteid);
            $chk = $this->deletedata('blood', $id);
            if ($chk) {
                echo "<script>
                alert('Delete BloodGroup Successfully.')
                window.location='blood';
                </script>";
            } else {
                echo "<script>
                alert('Somthing was wrong try again !')
                window.location='blood';
                </script>";
            }
        }

        // show all data in blood table...
        $showhospital = $this->showdata('hospital');

        // add data in hospital table...
        if (isset($_POST['adhospital'])) {
            $hnm = $_POST['hnm'];
            $hnumber = $_POST['number'];
            $haddr = $_POST['add'];
            $data = array("h_nm" => $hnm, "h_phone" => $hnumber, "h_add" => $haddr);
            $chk = $this->insertdata('hospital', $data);
            if ($chk) {
                echo "<script>
                alert('Data add in hospital table')
                window.location='hospital';
                </script>";
            } else {
                echo "<script>
                alert('Something was wrong!')
                window.location='hospital';
                </script>";
            }
        }

        //update blood for fatch
        if (isset($_GET['updatehospital'])) {
            $id = $_GET['updatehospital'];
            $updhospital = $this->updfatch('hospital', 'h_id', $id);
        }

        //update blood details
        if (isset($_POST['updhospital'])) {
            $id = $_GET['updatehospital'];
            $hnm = $_POST['hnm'];
            $hnumber = $_POST['number'];
            $haddr = $_POST['add'];
            $chk = $this->updatehospital('hospital', $hnm, $hnumber, $haddr, 'h_id', $id);
            if ($chk) {
                echo "<script>
                alert('Update data add in Hospital table')
                window.location='hospital';
                </script>";
            } else {
                echo "<script>
                alert('Something was wrong!')
                window.location='./';
                </script>";
            }
        }

        // delete data for hospital
        if (isset($_GET["deletehospital"])) {
            $deleteid = $_GET["deletehospital"];
            $id = array("h_id" => $deleteid);
            $chk = $this->deletedata('hospital', $id);
            if ($chk) {
                echo "<script>
                alert('Delete Hospital Successfully.')
                window.location='hospital';
                </script>";
            } else {
                echo "<script>
                alert('Somthing was wrong try again !')
                window.location='hospital';
                </script>";
            }
        }

        // show all data in massage table...
        $showmessage = $this->showdata('message');

        // delete data for message
        if (isset($_GET["deletemessage"])) {
            $deleteid = $_GET["deletemessage"];
            $id = array("id" => $deleteid);
            $chk = $this->deletedata('message', $id);
            if ($chk) {
                echo "<script>
                alert('Delete Message Successfully.')
                window.location='message';
                </script>";
            } else {
                echo "<script>
                alert('Somthing was wrong try again !')
                window.location='message';
                </script>";
            }
        }

        //logout for admin
        if (isset($_GET['admin-logout'])) {
            $chk = $this->adminlogout();
            echo "<script>
            alert('You are Logout successfully')
             window.location='./';
             </script>";
        }

        // template load
        if (isset($_SERVER["PATH_INFO"])) {
            switch ($_SERVER["PATH_INFO"]) {
                case '/':
                    require_once("index.php");
                    require_once("header.php");
                    require_once("nevbar.php");
                    require_once("login.php");
                    require_once("footer.php");
                    break;

                case '/profile':
                    require_once("index.php");
                    require_once("header.php");
                    require_once("nevbar.php");
                    require_once("profile.php");
                    require_once("footer.php");
                    break;

                case '/dashboard':
                    require_once("index.php");
                    require_once("header.php");
                    require_once("nevbar.php");
                    require_once("content.php");
                    require_once("footer.php");
                    break;

                case '/user':
                    require_once("index.php");
                    require_once("header.php");
                    require_once("nevbar.php");
                    require_once("user.php");
                    require_once("footer.php");
                    break;

                case '/userupdateprofile':
                    require_once("index.php");
                    require_once("header.php");
                    require_once("nevbar.php");
                    require_once("user update profile.php");
                    require_once("footer.php");
                    break;

                case '/blood':
                    require_once("index.php");
                    require_once("header.php");
                    require_once("nevbar.php");
                    require_once("blood.php");
                    require_once("footer.php");
                    break;

                case '/updateblood':
                    require_once("index.php");
                    require_once("header.php");
                    require_once("nevbar.php");
                    require_once("updateblood.php");
                    require_once("footer.php");
                    break;


                case '/hospital':
                    require_once("index.php");
                    require_once("header.php");
                    require_once("nevbar.php");
                    require_once("hospital.php");
                    require_once("footer.php");
                    break;

                case '/updatehospital':
                    require_once("index.php");
                    require_once("header.php");
                    require_once("nevbar.php");
                    require_once("updatehospital.php");
                    require_once("footer.php");
                    break;
                case '/message':
                    require_once("index.php");
                    require_once("header.php");
                    require_once("nevbar.php");
                    require_once("message.php");
                    require_once("footer.php");
                    break;

                default:
                    require_once("index.php");
                    require_once("header.php");
                    require_once("nevbar.php");
                    require_once("404.php");
                    require_once("footer.php");
                    break;
            }
        }
    }
}
$obj = new controller();
?>
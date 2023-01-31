<?php
require_once("model/model.php");
class controller extends model
{
    public function __construct()
    {
        parent::__construct();

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
        $showuser = $this->showdata('users');
        
        // delete data for user
        if (isset($_GET["deleteuser"])) {
            $deleteid = $_GET["deleteuser"];
            $id = array("u_id" => $deleteid);
            $chk = $this->deletedata('users', $id);
            if($chk){
                echo "<script>
                alert('Delete User Successfully.')
                window.location='user';
                </script>";
            }
            else
            {
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

        // delete data for blood
        if (isset($_GET["deleteblood"])) {
            $deleteid = $_GET["deleteblood"];
            $id = array("bg_id" => $deleteid);
            $chk = $this->deletedata('blood', $id);
            if($chk){
                echo "<script>
                alert('Delete BloodGroup Successfully.')
                window.location='blood';
                </script>";
            }
            else
            {
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
        
        // delete data for hospital
        if (isset($_GET["deletehospital"])) {
            $deleteid = $_GET["deletehospital"];
            $id = array("h_id" => $deleteid);
            $chk = $this->deletedata('hospital', $id);
            if($chk){
                echo "<script>
                alert('Delete Hospital Successfully.')
                window.location='hospital';
                </script>";
            }
            else
            {
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
            if($chk){
                echo "<script>
                alert('Delete Message Successfully.')
                window.location='message';
                </script>";
            }
            else
            {
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

                case '/blood':
                    require_once("index.php");
                    require_once("header.php");
                    require_once("nevbar.php");
                    require_once("blood.php");
                    require_once("footer.php");
                    break;

                case '/hospital':
                    require_once("index.php");
                    require_once("header.php");
                    require_once("nevbar.php");
                    require_once("hospital.php");
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
<?php
require_once("model/model.php");
class controller extends model
{
    public function __construct()
    {
        parent::__construct();

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
                window.location='./blood';
                </script>";
            } else {
                echo "<script>
                alert('Something was wrong!')
                window.location='./blood';
                </script>";

            }
        }

        // show all data in blood table...
        $showblood = $this->showdata('blood');

        // show all data in blood table...
        $showuser = $this->showdata('user');

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
                window.location='./hospital';
                </script>";
            } else {
                echo "<script>
                alert('Something was wrong!')
                window.location='./hospital';
                </script>";

            }
        }

        // show all data in blood table...
        $showhospital = $this->showdata('hospital');

        // template load
        if (isset($_SERVER["PATH_INFO"])) {
            switch ($_SERVER["PATH_INFO"]) {
                case '/':
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

                case '/dashboard':
                    require_once("index.php");
                    require_once("nevbar.php");
                    require_once("header.php");
                    require_once("content.php");
                    require_once("footer.php");
                    break;

                case '/user':
                    require_once("index.php");
                    require_once("nevbar.php");
                    require_once("header.php");
                    require_once("user.php");
                    require_once("footer.php");
                    break;

                case '/blood':
                    require_once("index.php");
                    require_once("nevbar.php");
                    require_once("header.php");
                    require_once("blood.php");
                    require_once("footer.php");
                    break;

                case '/hospital':
                    require_once("index.php");
                    require_once("nevbar.php");
                    require_once("header.php");
                    require_once("hospital.php");
                    require_once("footer.php");
                    break;

                case '/message':
                    require_once("index.php");
                    require_once("nevbar.php");
                    require_once("header.php");
                    require_once("message.php");
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
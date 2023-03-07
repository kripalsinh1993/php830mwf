<?php
require_once("model/model.php");
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

class controller extends model
{
    public function __construct()
    {
        parent::__construct();
        //logic insert  data in feedback
        if (isset($_POST["addfeedback"])) {
            date_default_timezone_set("Asia/Calcutta");
            $fnm = $_POST["firstname"];
            $lnm = $_POST["lastname"];
            $em = $_POST["email"];
            $star = $_POST["star"];
            $com = $_POST["comment"];
            $datetime = date("d/m/Y H:i:s a");
            $data = array("firstname" => $fnm, "lastname" => $lnm, "email" => $em, "star" => $star, "comment" => $com, "datetime" => $datetime);
            $chk = $this->insertalldata('feedback', $data);
            if ($chk) {
                echo "<script>
                alert('Thanks For Your Valuable feedback')
                window.location='feedback';
                </script>";
            }
        }

        //logic insert  data in register
        if (isset($_POST["register"])) {
            date_default_timezone_set("Asia/Calcutta");
            $firstname = $_POST["firstname"];
            $lastname = $_POST["lastname"];
            $email = $_POST["email"];
            $password = base64_encode($_POST["password"]);
            $cpassword = base64_encode($_POST["cpassword"]);
            $gen = $_POST["gender"];
            $dob = $_POST["dob"];
            $mobile = $_POST["phone"];
            $datetime = date("d/m/Y H:i:s a");
            if ($password == $cpassword) {
                $data = array("firstname" => $firstname, "lastname" => $lastname, "email" => $email, "password" => $password, "gender" => $gen, "dob" => $dob, "phone" => $mobile, "datetime" => $datetime);
                $chk = $this->insertalldata('register', $data);
                if ($chk) {
                    echo "<script>
                    alert('Your Registation is Successfull')
                    window.location='register';
                    </script>";
                }
            } else {
                echo "<script>
                alert('Something went wrong Try Again')
                window.location='register';
                </script>";
            }
        }
        // logic for insert data in parking table
        if (isset($_POST["submit"])) {

            $tmpname = $_FILES["img"]["tmp_name"];
            $path = "uploads/rcbooks" . $_FILES["img"]["name"];
            move_uploaded_file($tmpname, $path);
            date_default_timezone_set("Asia/Calcutta");
            $fnm = $_POST["firstname"];
            $lnm = $_POST["lastname"];
            $email = $_POST["email"];
            $phn = $_POST["phone"];
            $parkp = $_POST["parkarea"];
            $reg = $_POST["regno"];
            $edate = $_POST["entrydate"];
            $etime = $_POST["entrytime"];
            $odate = $_POST["outdate"];
            $otime = $_POST["outtime"];
            $address = $_POST["address"];
            $datetime = date("d/m/Y H:i:s a");
            $data = array("rcphoto" => $path, "firstname" => $fnm, "lastname" => $lnm, "email" => $email, "phone" => $phn, "parkarea" => $parkp, "registerno" => $reg, "entrydate" => $edate, "entrytime" => $etime, "outdate" => $odate, "outtime" => $otime, "address" => $address, "datetime" => $datetime);
            $chk = $this->insertalldata('park', $data);
            if ($chk) {
                echo "<script>
                alert('Thanks For Using Epark Your Slot is Booked Successfully')
                window.location='park';
                </script>";
            } else {
                echo "<script>
                alert('Something went wrong Try Again')
                window.location='park';
                </script>";
            }
        }
        // logic for insert data in service table
        if (isset($_POST["submit"])) {

            $tmpname = $_FILES["img"]["tmp_name"];
            $path = "uploads/rcbooks/" . $_FILES["img"]["name"];
            move_uploaded_file($tmpname, $path);
            $tmpname1 = $_FILES["img1"]["tmp_name1"];
            $path1 = "uploads/users/" . $_FILES["img1"]["name1"];
            move_uploaded_file($tmpname1, $path1);
            date_default_timezone_set("Asia/Calcutta");
            $fnm = $_POST["firstname"];
            $lnm = $_POST["lastname"];
            $email = $_POST["email"];
            $phn = $_POST["phone"];
            $reg = $_POST["rcno"];
            $issue = $_POST["issue"];
            $datetime = date("d/m/Y H:i:s a");
            $data = array("registerphoto" => $path, "userphoto" => $path1, "firstname" => $fnm, "lastname" => $lnm, "email" => $email, "phone" => $phn, "registerno" => $reg, "issues" => $issue, "datetime" => $datetime);
            $chk = $this->insertalldata('services', $data);
            if ($chk) {
                echo "<script>
                alert('Thanks For Using Epark Your Service Slot is Booked Successfully')
                window.location='park';
                </script>";
            } else {
                echo "<script>
                alert('Something went wrong Try Again')
                window.location='park';
                </script>";
            }
        }
        // logic for login users
        if (isset($_POST["login"])) {
            $email = $_POST["email"];
            $password = base64_encode($_POST["password"]);
            $chk = $this->loginuser('register', $email, $password);
            if ($chk) {
                echo "<script>
                 alert('You Are Logged In Successfully')
                 window.location='./';
                 </script>";
            } else {
                echo "<script>
                 alert('Your Email And Password Are Incorrect Try Again')
                 window.location='login';
                 </script>";
            }
        }

        //logic insert  data in contact
        if (isset($_POST["addcontact"])) {
            date_default_timezone_set("Asia/Calcutta");
            $fnm = $_POST["firstname"];
            $lnm = $_POST["lastname"];
            $email = $_POST["email"];
            $phn = $_POST["phone"];
            $msg = $_POST["message"];
            $datetime = date("d/m/Y H:i:s a");
            $data = array("firstname" => $fnm, "lastname" => $lnm, "email" => $email, "phone" => $phn, "message" => $msg, "datetime" => $datetime);
            $chk = $this->insertalldata('contact', $data);
            if ($chk) {
                echo "<script>
                alert('Thanks For Your Contact with us')
                window.location='contactus';
                </script>";
            }
        }
        // logic for forgot password
        if (isset($_POST["fpass"])) {
            $email = $_POST["email"];
            $pass = base64_decode($_POST["password"]);

            $pass = $this->frgpassword('tbl_register', 'password', 'email', $email);

            //Load Composer's autoloader
            require 'PHPMailer/Exception.php';
            require 'PHPMailer/PHPMailer.php';
            require 'PHPMailer/SMTP.php';

            //Create an instance; passing `true` enables exceptions
            $mail = new PHPMailer(true);

            try {
                //Server settings
                $mail->SMTPDebug = true; //Enable verbose debug output
                $mail->isSMTP(); //Send using SMTP
                $mail->Host = 'smtp.gmail.com'; //Set the SMTP server to send through
                $mail->SMTPAuth = true; //Enable SMTP authentication
                $mail->Username = 'kripalsinhraa043@gmail.com'; //SMTP username
                $mail->Password = 'wvyzzhvexpewpufz'; //SMTP password
                $mail->SMTPSecure = 'tls'; //Enable implicit TLS encryption
                $mail->Port = 587; //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

                //Recipients
                $mail->setFrom($_POST["email"], 'Mailer');
                $mail->addAddress('kripalsinhraa043@gmail.com', 'Brijesh Chikhaliya'); //Add a recipient

                //Attachments
                // $mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
                // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name

                //Content
                $mail->isHTML(true); //Set email format to HTML
                $mail->Subject = 'Forget Password';
                $mail->Body = "<p><b>Your password : </b>" . $pass . "</p>";

                // $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

                $mail->send();
                echo "<script>
                  alert('Your Password Has Been Sent On Your Email')
                  window.location='login';
                  </script>";

            } catch (Exception $e) {
                echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
            }


            // $email=$_POST["email"];
            // $pass=base64_decode($_POST["pass"]);

            // $pass=$this->frgpassword('tbl_register','password','email',$email);
            // if($pass)
            // {
            //     echo "<script>
            //     alert('Your Password Is :'+'$pass')
            //     window.location='login';
            //     </script>";
            // }
            // else
            // {
            //     echo "<script>
            //     alert('Your Account Is Not Register With Us Try Again')
            //     window.location='forgetpassword';
            //     </script>";
            // }
        }

        //load view or templated
        if (isset($_SERVER["PATH_INFO"])) {
            switch ($_SERVER["PATH_INFO"]) {
                case '/':
                    require_once("index.php");
                    require_once("header.php");
                    require_once("navbar.php");
                    require_once("slider.php");
                    require_once("content.php");
                    require_once("footer.php");
                    break;
                case '/register':
                    require_once("index.php");
                    require_once("header.php");
                    require_once("navbar.php");
                    require_once("register.php");
                    require_once("footer.php");
                    break;
                case '/login':
                    require_once("index.php");
                    require_once("header.php");
                    require_once("navbar.php");
                    require_once("login.php");
                    require_once("footer.php");
                    break;
                case '/aboutus':
                    require_once("index.php");
                    require_once("header.php");
                    require_once("navbar.php");
                    require_once("aboutus.php");
                    require_once("footer.php");
                    break;
                case '/contactus':
                    require_once("index.php");
                    require_once("header.php");
                    require_once("navbar.php");
                    require_once("contactus.php");
                    require_once("footer.php");
                    break;
                case '/feedback':
                    require_once("index.php");
                    require_once("header.php");
                    require_once("navbar.php");
                    require_once("feedback.php");
                    require_once("footer.php");
                    break;
                case '/park':
                    require_once("index.php");
                    require_once("header.php");
                    require_once("navbar.php");
                    require_once("park.php");
                    require_once("footer.php");
                    break;
                case '/service':
                    require_once("index.php");
                    require_once("header.php");
                    require_once("navbar.php");
                    require_once("service.php");
                    require_once("footer.php");
                    break;
                case '/parking':
                    require_once("index.php");
                    require_once("header.php");
                    require_once("navbar.php");
                    require_once("Parking.php");
                    require_once("footer.php");
                    break;

                default:
                    require_once("index.php");
                    require_once("header.php");
                    require_once("navbar.php");
                    require_once("404.php");
                    require_once("footer.php");
                    break;


            }
        }
    }
}
$obj = new controller();
?>
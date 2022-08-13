   
<?php
class AccountController extends Controller{
    public $accountmodel;
    function __construct(){
        $this->accountmodel = $this->model("Account");
        
    }
    function Home(){
        header ('Location: '.BASE_URL."/AccountController/Login/");
    }
 
    function Login(){
        if (!isset($_POST['btnlogin'])){
            $this->viewInnManager("masteraccount",[  
                "account"=>"login"
            ]);
        }
        else
        {
            $username = $_POST['username'];
            $password_input = $_POST['password'];
           
            $result = $this->accountmodel->login($username);
            if (count($result)>0){
                if (password_verify($password_input,$result[0]['password'])){
                    $_SESSION['name'] = $result[0]['fullname'];
                    $_SESSION['username'] = $result[0]['username'];
                    if ($_SESSION['QUYEN'] =="3"){
                        header ('Location:'.BASE_URL."/AdminController/");
                    }
                    else{header ('Location: '.BASE_URL);}
       
                }
                else{        
                    $this->viewInnManager("masteraccount",[  
                        "account"=>"login"
                    ]);
                    echo "<script type='text/javascript'>alert('Login Fail, please try again');</script>";
                }
            }
            else{
                $this->viewInnManager("masteraccount",[  
                    "account"=>"login"
                ]);
                echo "<script type='text/javascript'>alert('Login Fail, please try again');</script>";
            }
        }

       

    }

    function Register(){
        if (!isset($_POST['btnregister'])){
            $this->viewInnManager("masteraccount",[  
                "account"=>"register"
          ]);
            
        }
        

       else {
           $username = $_POST['usernameregister'];
           $password = $_POST['passwordregister'];
           $password = password_hash($password,PASSWORD_DEFAULT);
           $fullname = $_POST['fullnameregister'];
           $email = $_POST['emailregister'];
           if ($this->accountmodel->createaccount($username,$password,$fullname,$email))
           {
                $this->viewInnManager("masteraccount",[  
                    "account"=>"register"
                ]);      
                echo "<script type='text/javascript'>alert('Register Success');</script>";         
                
           }
           else{        
                $this->viewInnManager("masteraccount",[  
                    "account"=>"register"
                ]);
                echo "<script type='text/javascript'>alert('Register Fail, please try again');</script>";
           }
           
       }

    }
    function Logout(){
        unset($_SESSION['username']);
        unset($_SESSION['name']);
        unset($_SESSION['cart']);
        header ('Location:'.BASE_URL);
    }

    function User(){
        if (isset($_SESSION['username'])){
            $history = $this->accountmodel->userhistory($_SESSION['username']);
            $this->viewInnManager("user",[
                "historyreceipt"=>$history
            ]); 
        }
        else{
            header ('Location: '.BASE_URL."/AccountController/Login/");
        }
    }
}
?>

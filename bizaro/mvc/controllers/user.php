<?php
class user extends Controller
{

    protected $userModel;

    public function __construct()
    {
        $this->userModel = $this->model("UserModel");
    }


    public function login()
    {
        $this->view("layout2", [
            "page" => "login",
            "issue" => ""
        ]);
    }

    public function register()
    {
        $this->view("layout2", [
            "page" => "register"
        ]);
    }

    public function logout()
    {
        setcookie("username", "", time() - 60, "/", "", 0);
        header('location: http://localhost:5000/bizaro/home');
    }

    public function checklogin()
    {

        if (isset($_POST["btnLogIn"])) {
            $username = $_POST["username"];
            $password = $_POST["password"];

            $result = $this->userModel->CheckLogIn($username, $password);

            if ($result == "success") {
                setcookie("username", $username, time() + 60 * 60 * 24 * 7, "/", "", 0);
                if ($result["role"] == 0) {
                    header('location: http://localhost:5000/bizaro/admin');
                } else {
                    header('location: http://localhost:5000/bizaro/home');
                }
            } else {
                return json_encode($result);
            }
        } else {
            echo "fail POST";
        }
    }

    public function checkregister()
    {
        if (isset($_POST["btnRegister"])) {
            $username = $_POST["username"];
            $password = $_POST["password"];
            $confirm = $_POST["confirm"];

            if ($password == $confirm) {
                $user = $this->userModel->CheckUsername($username);
                if ($user == null) {
                    $result = $this->userModel->CreateUser($username, $password);
                    echo $result;
                } else {
                    echo "Username này đã được đăng ký";
                }
            } else {
                echo "Mật khẩu không khớp";
            }
        } else {
            echo "fail POST";
        }
    }

    public function delete()
    {
    }

    public function edit_quantity()
    {
    }
}

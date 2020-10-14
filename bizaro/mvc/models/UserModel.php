<?php
class UserModel extends Database
{

    public function CheckLogIn($username, $password)
    {
        $query = "SELECT * FROM user WHERE username='$username'";
        $result =  mysqli_query($this->conn, $query);
        $resultItem = null;

        if (!$result) {
            return "Lỗi: " . mysqli_error($this->conn);
        } else {
            while ($item = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
                $resultItem = $item;
                break;
            }
            if (password_verify($password, $resultItem["pass"])) {
                return "success";
            } else {
                return "Mật khẩu không hợp lệ";
            }
        }
    }

    public function CheckUsername($username)
    {
        $query = "SELECT * FROM user WHERE username='$username'";
        $result =  mysqli_query($this->conn, $query);
        $resultItem = null;

        if (!$result) {
            return "Error: " . mysqli_error($this->conn);
        } else {
            while ($item = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
                $resultItem = $item;
                break;
            }
        }

        return $resultItem;
    }

    public function CreateUser($username, $password)
    {
        $pass_hash = password_hash($password, PASSWORD_DEFAULT);
        $query = "INSERT INTO user(username,pass,role) VALUES('$username','$pass_hash',1)";
        $result =  mysqli_query($this->conn, $query);

        if ($result) {
            return "success";
        } else {
            return "Error: " . mysqli_error($this->conn);
        }
    }
}

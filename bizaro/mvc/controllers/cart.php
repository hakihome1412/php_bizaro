<?php
class cart extends Controller
{

    protected $cartModel;

    public function __construct()
    {
        $this->cartModel = $this->model("CartModel");
    }

    public function add()
    {
        if (isset($_POST["idFood"])) {
            $idFood = $_POST["idFood"];
            $status = $this->cartModel->AddToCart($idFood);
            if ($status) {
                header("Location:" . $_SERVER['PHP_SELF']);
            } else {
                echo "Fail";
            }
        }
    }

    public function delete()
    {   
    }

    public function edit_quantity()
    {
    }
}

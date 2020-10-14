<?php
class CartModel extends Database
{
    public function AddToCart($idFood)
    {
        $status = false;
        $query = "INSERT INTO cart(id_user,id_food,status_cart) VALUES(1,'$idFood',0)";
        $result =  mysqli_query($this->conn, $query);

        if ($result) {
            $status = true;
        }

        return $status;
    }
}

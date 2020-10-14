<?php
class FoodModel extends Database
{
    public function getAllFood()
    {
        $query = "SELECT * FROM foods";
        $result =  mysqli_query($this->conn, $query);

        $resultArray = array();

        while ($item = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
            $resultArray[] = $item;
        }

        return $resultArray;
    }

    public function getFoodById($id)
    {
        $query = "SELECT * FROM foods WHERE id=$id";
        $result =  mysqli_query($this->conn, $query);
        $resultItem = null;

        while ($item = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
            $resultItem = $item;
            break;
        }

        return $resultItem;
    }

    public function getDoAn()
    {
        $query = "SELECT * FROM foods WHERE type=0";
        $result =  mysqli_query($this->conn, $query);

        $resultArray = array();

        while ($item = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
            $resultArray[] = $item;
        }

        return $resultArray;
    }

    public function getNuocUong()
    {
        $query = "SELECT * FROM foods WHERE type=1";
        $result =  mysqli_query($this->conn, $query);

        $resultArray = array();

        while ($item = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
            $resultArray[] = $item;
        }

        return $resultArray;
    }

    public function getYogurt()
    {
        $query = "SELECT * FROM foods WHERE type=2";
        $result =  mysqli_query($this->conn, $query);

        $resultArray = array();

        while ($item = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
            $resultArray[] = $item;
        }

        return $resultArray;
    }
}

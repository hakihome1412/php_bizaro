<?php
class home extends Controller
{
    protected $foodModel;
    protected $drinkModel;

    public function __construct()
    {
        $this->foodModel = $this->model("FoodModel");
    }

    public function index()
    {
        $listFood = $this->foodModel->getAllFood();

        $this->view("layout", [
            "page" => "home",
            "listFood" => $listFood,
        ]);
    }
}

<?php
class category extends Controller
{
    protected $foodModel;

    public function __construct()
    {
        $this->foodModel = $this->model("FoodModel");
    }

    public function index()
    {
        $listFood = $this->foodModel->getDoAn();
        $listDrink = $this->foodModel->getNuocUong();
        $listYogurt = $this->foodModel->getYogurt();

        $this->view("layout", [
            "page" => "category",
            "listFood" => $listFood,
            "listDrink" => $listDrink,
            "listYogurt" => $listYogurt,
        ]);
    }

    public function food()
    {
        $listFood = $this->foodModel->getDoAn();
        
        $this->view("layout", [
            "page" => "food",
            "listFood" => $listFood
        ]);
    }
}

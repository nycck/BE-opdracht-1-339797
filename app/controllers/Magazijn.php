<?php
class Magazijn extends BaseController
{
    private $magazijnModel; 
    public function __construct()
    {
        $this->magazijnModel = $this->model('MagazijnModel');
    }

    public function index()
    {
        $data = [
            'title' => 'Overzicht Magazijn Jamin',
            'message' => NULL,
            'messageColor' => NULL,
            'messageVisibility' => 'display: none;'
        ];
        $this->view('magazijn/index', $data);
    }

    public function leveringInfo($productId)
    {
        $leveringData = $this->magazijnModel->getLeveringByProductId($productId);
        $data = [
            'title' => 'Levering Informatie',
            'leveringData' => $leveringData
        ];
        $this->view('magazijn/levering_info', $data);
    }
}
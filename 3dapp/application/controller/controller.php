<?php
// Create the controller class for the MVC design pattern
class Controller {

    // Declare public variables for the controller class
    public $load;
    public $model;

    // Create functions for the controller class
    function __construct($pageURI = null) // constructor of the class
    {
        $this->load = new Load();
        $this->model = new Model();
        // determine what page you are on
        $this->$pageURI();
    }
    // home page function
    function home()
    {
        $data = $this->model->dbGetData();
        $this->load->view('viewHome',json_encode($data));
    }

    function about()
    {
        $this->load->view('viewAbout');
    }

    function models()
    {
        $data = $this->model->dbGetData();
        $this->load->view('viewModels',json_encode($data));
    }


    function costa(){
        header("Location: https://www.costa.co.uk/");
        die();
    }

    function cocaCola(){
        header("Location: https://us.coca-cola.com/products/coca-cola");
        die();
    }

    function fanta(){
        header("Location: https://us.coca-cola.com/products/fanta");
        die();
    }

    function sprite(){
        header("Location: https://www.coca-cola.co.uk/brands/sprite");
        die();
    }

    function drPepper(){
        header("Location: https://www.yourcoca-cola.co.uk/brands/dr-pepper.list");
        die();
    }



    function apiGetData()
    {
        $data = $this->model->dbGetData();
        $this->load->view('test', json_encode($data));
    }

    function apiCreateTable()
    {
        $data = $this->model->dbCreateTable();
        $this->load->view('viewMessage',json_encode($data));
    }

    function apiInsertData()
    {
        $data = $this->model->dbInsertData();
        $this->load->view('viewMessage', json_encode($data));
    }




}
?>
<?php
namespace SampleWebApp\views\publicPages\main;
use SampleWebApp\components\Controller as baseController;
use SampleWebApp\components\View;
use SampleWebApp\models\Products;

class Controller extends baseController{
    
    public function __construct($app) {
        parent::__construct($app);
    }

    public function post(){        
        
        echo "this is the main";
        $p = new Products();

        print_r($p->select());
        // $params = $this->app->request->body();
        // $view = new view($this->app);
        // echo $view->render('main', $this->app->request->path() , $params);
    }

    public function get(){
        echo "this is the main";
        $p = new Products();

        echo "<pre>";
        print_r($p->select(['name ='=>'forema']));
        echo "</pre>";
        // $params = $this->app->body();
        // $view = new view($this->request->app);
        // echo $view->render('main', $this->app->request->path() , $params);
    }

    public function put(){
        echo "put";
    }

    public function delete(){
        echo "delete";
    }
}
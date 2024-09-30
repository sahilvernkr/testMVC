<?php

class Home extends Controller
{
    public function index($a = '', $b = '', $c = '')
    {
        $model = new Model;

        $arr['name'] = 'zom';
        $arr['age'] = 13;
        $arr['date'] = date("Y-m-d");
        $result = $model->insert($arr);
        //  $result = $model->delete(3);
        // show($result);
        echo "This is home controller";
        $this->view('home');
    }
}

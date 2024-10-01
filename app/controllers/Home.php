<?php

class Home extends Controller
{
    public function index($a = '', $b = '', $c = '')
    {
        $user = new User;

        $arr['name'] = 'zom';
        $arr['age'] = 13;
        $arr['date'] = date("Y-m-d");
        $result = $user->insert($arr);
        //  $result = $model->delete(3);
        // show($result);
        // $model->update(2, ['name' => 'mary', 'age' => 34]);
        echo "This is home controller";
        $this->view('home');
    }
}

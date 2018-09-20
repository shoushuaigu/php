<?php
namespace Home\Controller;
use Think\Controller;
class testController extends Controller{
    public function test(){
        phpinfo();
    }
}
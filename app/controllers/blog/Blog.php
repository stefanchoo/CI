<?php

/**
 * Created by PhpStorm.
 * User: stefan
 * Date: 2016/5/26
 * Time: 12:29
 */
class Blog extends CI_Controller{

    public function index() {
        $this->getPrivate();
        echo 'Hello World!';
    }

    public function comments() {
        echo 'Hey, look at this!';
    }

    public function myinfo($name, $email) {
        echo 'name = ' . $name . ', email = ' . $email;
    }

    // 私有方法不能被访问 private 或者 protected
    private function getPrivate() {
        echo 'ERROR, I cannot be  viewed!';
    }
}
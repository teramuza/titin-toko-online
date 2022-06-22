<?php
if(!defined('BASEPATH')) exit('No direct script access allowed');

class User extends MySqlDb{

    static function login($data) {
        $auth = User::checkData(
            'user',
            "u_email='".$data->email."' AND u_password='".md5($data->password)."'"
        );
        $obj = new stdClass();
        if ($auth->success) {
            $obj->status = 200;
            $obj->success = true;
            $obj->data = $auth->data;
        } else {
            $obj->status = 401;
            $obj->message = "Username atau password salah";
        }
        return $obj;
    }

    static function register($data){
        $password = md5($data->password);
        return User::createData(
            'user',
            "u_name, u_email, u_password, u_gender, u_profile",
            "
                '$data->name',
                '$data->email',
                '$password',
                'l',
                'a'
            ");
    }
}
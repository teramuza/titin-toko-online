<?php

class Promo extends MySqlDb{

    static function getAllPromo() {
        return Promo::getAllData('promo');
    }

    static function getPromo($id) {
        return Promo::getData('promo', "id='".$id."'");
    }

    static function createPromo($data) {
        return Promo::createData('promo', "kp_nama", "'$data->name'");
    }

    static function updatePromo($data) {
        return Promo::updateData('promo', "kp_nama='".$data->name."'", "id='".$data->id."'");
    }

    static function deletePromo($id) {
        $response = Promo::deleteData('promo', "WHERE id='".$id."'");
        $obj = new stdClass();
        if ($response === true) {
            $obj->status = 200;
            $obj->success = true;
        } else {
            $obj->status = 400;
        }
        return $obj;
    }
}
<?php

class Categories extends MySqlDb{

    static function getAllCategories() {
        return Categories::getAllData('kategori_produk');
    }

    static function getCategories($id) {
        return Categories::getData('kategori_produk', "id='".$id."'");
    }

    static function createCategories($data) {
        return Categories::createData('kategori_produk', "kp_nama", "'$data->name'");
    }

    static function updateCategories($data) {
        return Categories::updateData('kategori_produk', "kp_nama='".$data->name."'", "id='".$data->id."'");
    }

    static function deleteCategories($id) {
        $response = Categories::deleteData('kategori_produk', "WHERE id='".$id."'");
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
<?php

class Products extends MySqlDb{

    static function getAllProducts() {
        return Products::getAllData('produk');
    }

    static function getProducts($id) {
        return Products::getData('produk', "id='".$id."'");
    }

    static function getProductsByCategory($categoryId) {
        return Products::getArrData('produk', "p_kp_kode='".$categoryId."'");
    }

    static function createProducts($data) {
        return Products::createData(
            'produk',
            "p_nama, p_satuan, p_harga, p_kp_kode, p_photo",
            "
                '$data->name',
                '$data->satuan',
                '$data->harga',
                '$data->kp_kode',
                '$data->photo_url'
            "
        );
    }

    static function updateProducts($data) {
        return Products::updateData(
            'produk',
            "
                p_nama='".$data->name."',
                p_satuan'".$data->satuan."',
                p_harga'".$data->harga."',
                p_kp_kode'".$data->kp_kode."',
                p_photo'".$data->photo_url."'
            ",
            "id='".$data->id."'");
    }

    static function deleteProducts($id) {
        $response = Products::deleteData('produk', "WHERE id='".$id."'");
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
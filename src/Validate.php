<?php

namespace App;

use App\db\Database;

class Validate
{
    public function validateSku($sku)
    {
        if(!$sku) {
            return "SKU was not provided!";
        }

        if(!preg_match('/^(?=.*\d)(?=.*[a-zA-Z])[a-zA-Z\d]{9}$/', $sku)){
            return "The SKU must contain at least 1 letter and 1 number and be 9 charaters long!";
        }

        $db = new Database();
        if ($db->getProduct($sku)) {
            return "SKU already taken!";
        }

        return "";
    }
}

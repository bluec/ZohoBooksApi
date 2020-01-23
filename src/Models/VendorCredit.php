<?php

namespace Webleit\ZohoBooksApi\Models;

/**
 * Class VendorCredit
 * @package Webleit\ZohoBooksApi\Models
 *
 * @method bool markAsOpen()
 * @method bool markAsVoid()
 */
class VendorCredit extends Model
{
    public function getKeyName()
    {
        return 'vendor_credit_id';
    }
}
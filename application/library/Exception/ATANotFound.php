<?php
/**
 * Created by PhpStorm.
 * User: minqi
 * Date: 13-11-17
 * Time: 下午3:31
 */

namespace Exception;

define(ATA_ERR_NOTFOUND, "ATA_ERR_404");

class ATANotFound extends \Exception {
    protected $code = ATA_ERR_NOTFOUND;
} 
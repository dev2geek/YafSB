<?php
/**
 * @name ErrorController
 * @desc 错误控制器, 在发生未捕获的异常时刻被调用
 * @see http://www.php.net/manual/en/yaf-dispatcher.catchexception.php
 * @author minqi
 */

use Exception\ATA_ERR_NOTFOUND as ATA_ERR_NOTFOUND;

class ErrorController extends \Yaf\Controller_Abstract {

	//从2.1开始, errorAction支持直接通过参数获取异常
	public function errorAction($exception) {

        switch($exception->getCode()) {
            case YAF_ERR_NOTFOUND_MODULE:
            case YAF_ERR_NOTFOUND_CONTROLLER:
            case YAF_ERR_NOTFOUND_ACTION:
            case YAF_ERR_NOTFOUND_VIEW:
            case ATA_ERR_NOTFOUND:
                echo 404, ":", $exception->getMessage();
                break;
            default:
                $message = $exception->getMessage();
                echo 0, ":", $exception->getMessage();
                break;
        }
		//1. assign to view engine
		//$this->getView()->assign("exception", $exception);
		//5. render by Yaf 
	}
}

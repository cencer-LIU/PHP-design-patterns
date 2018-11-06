<?php
/**
 * Created by PhpStorm.
 * User: Windows
 * Date: 2018/11/6
 * Time: 14:24
 */

class Manager extends Handler
{

    public function __construct()
    {
        parent::__construct(self::MANAGER_REQUEST);
    }

    protected function response(IStaff $staff)
    {
        // TODO: Implement response() method.
        echo '员工请假的理由是：' . $staff->getResponse() . PHP_EOL;
        echo '请假天数是:' . $staff->getDay() . PHP_EOL;
        echo '经理回复是:同意' . PHP_EOL;
    }
}
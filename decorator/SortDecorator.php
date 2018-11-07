<?php
/**
 * Created by PhpStorm.
 * User: Windows
 * Date: 2018/11/7
 * Time: 14:01
 */

require_once './Decorator.php';

class SortDecorator extends Decorator
{
    public function __construct(SchoolReport $sr)
    {
        parent::__construct($sr);
    }

    private function reportSort()
    {
        echo '我的排名是10'  . PHP_EOL;
    }

    public function report()
    {
        parent::report(); // TODO: Change the autogenerated stub
        $this->reportSort();
    }
}
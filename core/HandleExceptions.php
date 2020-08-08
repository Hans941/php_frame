<?php


namespace core;
use Throwable;
class HandleExceptions
{

    public function init()
    {
        set_exception_handler([$this, 'handleException']);
    }

    // 异常托管到这个方法
    public function handleException(Throwable $e)
    {
        if( method_exists($e, 'render')){

        }
        \App::get('response')->setContent(
            $e->render()
        )->send();
        if( $this->isIgnore($e))
         return;
    }

    // 是否忽略异常
    protected function isIgnore(Throwable $e)
    {
        foreach ($this->isIgnore as $item)
            if( $item instanceof  $e)
                return true;
        return false;
    }


}
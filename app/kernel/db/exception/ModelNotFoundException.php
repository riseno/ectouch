<?php

namespace app\kernel\db\exception;

use app\kernel\exception\DbException;

class ModelNotFoundException extends DbException
{
    protected $model;

    /**
     * 构造方法
     * @access public
     * @param  string $message
     * @param  string $model
     * @param  array  $config
     */
    public function __construct($message, $model = '', array $config = [])
    {
        $this->message = $message;
        $this->model   = $model;

        $this->setData('Database Config', $config);
    }

    /**
     * 获取模型类名
     * @access public
     * @return string
     */
    public function getModel()
    {
        return $this->model;
    }

}

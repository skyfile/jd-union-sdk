<?php

namespace JdUnionSdk;

use JdUnionSdk\Api\Activity;
use JdUnionSdk\Api\Apith;
use JdUnionSdk\Api\Coupon;
use JdUnionSdk\Api\Good;
use JdUnionSdk\Api\Link;
use JdUnionSdk\Api\Promotion;

/**
 * @property Good good  查询商品API
 * @property Promotion promotion  PID&推广位API
 * @property Link link 获取推广链接API
 * @property Coupon coupon 优惠券API
 * @property Activity activity 活动API
 */
class JdFatory
{
    private $config;
    private $error;

    public function __construct($config = null)
    {
        if (empty($config)) {
            throw new \Exception('no config');
        }
        $this->config = $config;
        return $this;
    }

    public function __get($api)
    {
        try {
            $classname = __NAMESPACE__ . "\\Api\\" . ucfirst($api);
            if (!class_exists($classname)) {
                throw new \Exception('api undefined');
                return false;
            }
            $new = new $classname($this->config, $this);
            return $new;
        } catch (\Exception $e) {
            throw new \Exception('api undefined');
        }
    }

    public function setError($message)
    {
        $this->error = $message;
    }


    public function getError()
    {
        return $this->error;
    }


}
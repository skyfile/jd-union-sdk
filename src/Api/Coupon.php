<?php

namespace JdUnionSdk\Api;

use JdUnionSdk\Tools\JdGateWay;

class Coupon extends JdGateWay
{
    /**
     * @param $skuId
     * @param string $couponLink
     * @return bool|string
     * @throws \Exception
     * @api 优惠券导入【申请】
     * @line https://union.jd.com/openplatform/api/696
     */
    public function importation($skuId, string $couponLink)
    {
        $params ['couponReq'] = [
            'skuId' => $skuId,
            'couponLink' => $couponLink
        ];

        return $this->send('jd.union.open.coupon.importation', $params);
    }

    /**
     * @param $url
     * @return bool|string
     * @throws \Exception
     * @api 优惠券领取情况查询接口【申请】
     * @line https://union.jd.com/openplatform/api/627
     */
    public function query($url)
    {
        if (is_array($url)) {
            $params['couponUrls'] = $url;
        } else {
            $params['couponUrls'] = [$url];
        }
        return $this->send('jd.union.open.coupon.query', $params);

    }
}

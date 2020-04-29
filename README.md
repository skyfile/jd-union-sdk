**京东联盟SDK**

京东联盟SDK，基于新版的 
改版于: yumufeng/jd-union-sdk

PHP =>7.0

### 使用示例

```php
$config = [
    'appkey' => '', // AppId
    'appSecret' => '', // 密钥
    'unionId' => '', // 联盟ID
    'positionId' => '', // 推广位ID
    'siteId' => '', // 网站ID,
];
$client = new \JdUnionSdk\JdFatory($config);
$result = $client->apith->querySeckillGoods();
if ($result == false ) {
    var_dump($client->getError());
}

var_dump($result);

```

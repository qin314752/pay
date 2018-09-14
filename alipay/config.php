<?php
$config = array (
    //应用ID,您的APPID。
    'app_id' => "2018091061340027",

    //商户私钥
    'merchant_private_key' =>"MIIEowIBAAKCAQEAq/Cd9IJkbUGJHkO2rHDABXHgxM7oCEahANmbY/B9XWghkm/LvQ6sMu8W35II0ume49isgcPvd5hdYT+PzFN8HRpCX2jPzsi3ZRXkTmfdCpD+61ZZl4XWmG62J3PYmb9gOd//AiUA5Ghn27oHhb6Q6YBZN91xK5sJbz2rsPRiXOxkkgerwYct18IqtI4f9sur7hjIBl8SfVbkq3n/mavSHmJu+a8RKINXM5ZQddC5hLRIGL1UF/2dx3Cuij0x/RXcucUA7OqvvLDpjncazLCLL322J+BQZN6+cJrgkI9pJ4iWwa0E4x9rSxItzIfGJ99HTHU1vZHe6ZpSKBlCN4JovwIDAQABAoIBAE3MhExcq8BcBQUysnd4VQqhqoii7o7AFp3h2NPxv2gCdB5kg5W6C+TIFlt3IpL8rq5+HiBhXfuJb8dPEWvs4p3wgdPWAyGX5JPSwglQKc5cKVynJ8bOAnnaroVPf9ShqZLGbga0Y6D2NPhRRpIX1k4xiy0h/9ExR6WUDBn3moJcnhhrNmncuhm+AwC5Qh3+Iodqx2Apu61yckYdRKVBtLhynxCjgENQ3LBNdLPEdvkQbj9+Xnme3NMkUajEngIv6aZ7nOeVtpJwFuKLIGKHGUrM7nZ2g3Rgx2Qux97DLTD+XntPyDjcHiiQSsjhkkBjO+oApr09MnW4QaDSw3ChjgECgYEA4QqujbbV+55mIHQA8XHvOci6P/E/nbqVVUY/S+Buj0V4l6YPkSx007DGeD1iZuZwsCpWE6o/xNHQ3PDwWhZRxQQzYLUKQLw26lJagdQz8PCc2TphrNDJXdoOEOrFNaVjPQmeW5A8W4SmLY1EVSd27Hjfm4IDUjFNlGzXqMYVrj8CgYEAw5fXyhGj9CHXsPbgRlXCAeemZvnQ6lSmqZUymQscVd92fhYMXsrtADHMrSG3YpxEL7uaHfLviN0HJct0di/01dqlFvZLvTtdTp4T56L5Q11v2PHNfhqd2SEs990VSmJULgoM3qtn4O1VyRcMXvn40KwTSoR0HkwWvUXy8475pYECgYEAnpEKQWyNBkisKT3T1Ey1hX+8TIXOj3MC+h0PSIWRIX6P5DrsSRyMDQVIMzz9cwf4awjJsf2KBULZ6nQSx0dmwm2dTg0Cdm6oOx9gCo7dMm439pA+dqh+2pRkyOLDpnMso7t9S4MsJEgpV3tspJu0HhdlZ4uKj4WR5n1yz8cTS70CgYADRJs3ZhoOLy6SZ12R70bhj0RJfi0ObUGnnbWNtxDPIn+xVZ75SnyxPyPDVMfinufIwGKv02pLKB5BdGfKvbxigle1zYGwdLh3Ys7EVQXDKWGAB3I+hCVVBmfg8FG1v3TWnBZg9g4zROPlCzyKrbSJkAZ2fUYPZ4gNu4h2p1HmgQKBgGRdLSw90Y+h5TpHWrOMgzpjOwrZoXfOIYZ4XXVQD+xQMF/vqHfvufojEXpEUpI18lTHxZ/FR3j5sq4ZmlJXvLbRabgV09Zz/vQss8PbOzwJXgUtLcXmij7arYtkJpGuSeaNPPBsgf2wEgH1mTPqDGIc7W+BCnkT3OWLGCc2lUMg",

    //异步通知地址
    'notify_url' => "http://pc.731018002.cn/alipay.pc/notify_url.php",

    //同步跳转
    'return_url' => "http://pc.731018002.cn/alipay.pc/return_url.php",

    //编码格式
    'charset' => "UTF-8",

    //签名方式
    'sign_type'=>"RSA2",

    //支付宝网关
    'gatewayUrl' => "https://openapi.alipay.com/gateway.do",

    //支付宝公钥,查看地址：https://openhome.alipay.com/platform/keyManage.htm 对应APPID下的支付宝公钥。
    'alipay_public_key' => "MIIBIjANBgkqhkiG9w0BAQEFAAOCAQ8AMIIBCgKCAQEAmgrjXeN1BWN8lIZbHvsVUGTYPry/pEL/28No6a67PUnlK1qDfTx1BLzqBUhMoAgVbKjjaQt2n/cS5uQvKdnI8Cpp4T+VIXK6qquH9xuBuYxnZx64SvTTV5AX6KL1Lmd3F8SciSPLXu8cU5Vo4dzUPsjWLhyFnQsvnjGxpdz32iYkII1+K2WHPNGMCKDcWxNzz1y5W6oZyIedVCU894dkS9aZQlpheLW1gkfhK9jWhu3TamiigIXazOeBhQJa8e0X39JL2iKsHkHAQoHWWqN/rfxZF7ICkFbG4vh10GHXDVI8XFQBqhtAFIRVb55HkavMVeib37YslJDedjc3MOX/5QIDAQAB",

    //最大查询重试次数
    'MaxQueryRetry' => "10",

    //查询间隔
    'QueryDuration' => "3"
);
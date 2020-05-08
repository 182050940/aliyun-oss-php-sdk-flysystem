## Flysystem Adapter for AliCloud OSS

[![Build Status](https://travis-ci.org/aliyun/aliyun-oss-php-sdk-flysystem.svg?branch=master)](https://travis-ci.org/aliyun/aliyun-oss-php-sdk-flysystem)
[![Coverage Status](https://coveralls.io/repos/github/aliyun/aliyun-oss-php-sdk-flysystem/badge.svg?branch=master)](https://coveralls.io/github/aliyun/aliyun-oss-php-sdk-flysystem?branch=master)

Laravel 阿里云 OSS Flysystem 插件

## Installation 安装

```bash
composer require westeteren/aliyun-oss-flysystem:dev-master
```

## Configuration 配置
修改 `config/filesystem.php` 文件
```
'disks' => [
        
        ...

        'oss' => [
            'driver' => 'oss',
            'key' => env('OSS_ACCESS_ID', null),
            'secret' => env('OSS_ACCESS_KEY', null),
            'endpoint' => env('OSS_ENDPOINT', null),
            'bucket' => env('OSS_BUCKET', null),
            'is_cname' => env('OSS_IS_CNAME', null),
            'security_token' => env('OSS_SECURITY_TOKEN', null),
        ],

    ],
```
#### endpoint (OSS_ENDPOINT)
类型 string

阿里云OSS的endpoint地址

如果需要启用SSL,请将endpoint设为 https://xxx.com

绑定cname的域名需要上传SSL证书才能开启SSL访问，请知悉！


#### is_cname(OSS_IS_CNAME)
类型 boolean

阿里云OSS中是否绑定cname域名访问

如果有，则必须将 OSS_ENDPOINT 设置为被绑定的域名
 
 
#### security_token(OSS_SECURITY_TOKEN)
类型 string

阿里云STS中获得的token,如果有则必须填写

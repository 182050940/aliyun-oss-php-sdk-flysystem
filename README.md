# Flysystem Adapter for AliCloud OSS

[![Build Status](https://travis-ci.org/aliyun/aliyun-oss-php-sdk-flysystem.svg?branch=master)](https://travis-ci.org/aliyun/aliyun-oss-php-sdk-flysystem)
[![Coverage Status](https://coveralls.io/repos/github/aliyun/aliyun-oss-php-sdk-flysystem/badge.svg?branch=master)](https://coveralls.io/github/aliyun/aliyun-oss-php-sdk-flysystem?branch=master)

This is a Flysystem Adapter for the AliCloud OSS ~1.2.1

## Installation

```bash
composer require laoliu/aliyun-oss-flysystem:dev-master
```

# Configuration
filesystem.php
```
'disks' => [
        
        ...

        'oss' => [
            'driver' => 'oss',
            'key' => env('OSS_ACCESS_ID'),
            'secret' => env('OSS_SECRET_ACCESS_KEY'),
            'endpoint' => env('OSS_ENDPOINT'),
            'bucket' => env('OSS_BUCKET'),
            'is_cname' => env('OSS_IS_CNAME'),
            'url' => env('OSS_CNAME'),
        ],

    ],
    
    #is_cname(OSS_IS_CNAME) boolean 是否绑定域名
    #url(OSS_CNAME)     string 绑定的域名
```

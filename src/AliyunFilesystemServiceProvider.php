<?php

namespace Aliyun\Flysystem\AliyunOss;

use Illuminate\Support\Facades\Storage;
use Illuminate\Support\ServiceProvider;
use League\Flysystem\Filesystem;
use OSS\OssClient;

class AliyunFilesystemServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        Storage::extend('oss', function ($app,$config) {
            $client = new OssClient($config['key'],$config['secret'], $config['endpoint']);

            return new Filesystem(new AliyunOssAdapter($client, $config['bucket']));
        });
    }

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}

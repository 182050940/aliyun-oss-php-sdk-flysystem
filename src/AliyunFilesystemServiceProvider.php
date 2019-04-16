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
            $client = new OssClient($config['filesystem.disk.oss.ACCESS_ID'],$config['filesystem.disk..oss.ACCESS_KEY'], $config['filesystem.disk.oss.ENDPOINT']);

            return new Filesystem(new AliyunOssAdapter($client, $config['filesystem.disk.oss.BUCKET']));
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

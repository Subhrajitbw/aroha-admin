<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Storage;
use League\Flysystem\AwsS3v3\AwsS3Adapter;
use League\Flysystem\Filesystem;

class R2ServiceProvider extends ServiceProvider
{
    public function boot()
    {
        Storage::extend('r2', function($app, $config) {
            $client = new \Aws\S3\S3Client([
                'credentials' => [
                    'key'    => config('filesystems.disks.r2.key'),
                    'secret' => config('filesystems.disks.r2.secret'),
                ],
                'region'  => config('filesystems.disks.r2.region'),
                'version' => 'latest',
                'endpoint' => config('filesystems.disks.r2.endpoint'),
            ]);

            return new Filesystem(new AwsS3Adapter($client, $config['bucket']));
        });
    }
}
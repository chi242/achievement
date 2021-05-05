<?php

namespace App\Console\Commands;

require 'vendor/autoload.php';

use Illuminate\Console\Command;
use GuzzleHttp\Client;
use App\Console\Kernel;

class LineNotify extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'line:notify';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = '時間通知';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */

    public function handle()
    {
        $uri = 'https://notify-api.line.me/api/notify';
        $client = new Client();
        $client->post($uri, [
            'headers' => [
                'Content-Type'  => 'application/x-www-form-urlencoded',
                'Authorization' => 'Bearer qkbzVtwy6NBOOBmsJNxMsuSeW5Fs3ubCGg1NIf5UFTr',
            ],
            'form_params' => [
                'message' => '今日も振り返りをしよう！'
            ]
        ]);
    }
}
    
// 2021年4月28日制作
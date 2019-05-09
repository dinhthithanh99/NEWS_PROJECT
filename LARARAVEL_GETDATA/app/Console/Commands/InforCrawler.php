<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Sunra\PhpSimple\HtmlDomParser;
use App\News;

class InforCrawler extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'crawler:infor';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

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
     * @return mixed
     */
    public function handle()
    {
        $dom = HtmlDomParser::file_get_html('http://dantri.com.vn/xa-hoi.htm');
        $dom = HtmlDomParserfile_get_contents('http://dantri.com.vn/xa-hoi.htm',true);
        $a = $dom->find('a #fon44');
        $tt = array();

        foreach ($a as $key => $value) {
            $infor['titles'] = $value->innertext;
            $infor['summary'] = null;
            $infor['date_post'] = null;
            $infor['content'] = null;
            $infor['view'] = 0;
            $infor['img'] = $value->href;
            $infor['source'] = null;
            $infor['id_cate'] = 1;


            $tt[] = $infor;
        }

        foreach ($tt as $key => $value) {
            News::create($value);
        }
        print_r($infor);
    }
}

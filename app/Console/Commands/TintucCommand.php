<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class TintucCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'command:name';

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
        //
    }
        var doc = $(result);
        var stockArrDom = doc.find('table tbody tr td:nth-child(2) a strong');
        
    function loadPage(index) {
        var currentUrl = 'http://www.cophieu68.vn/companylist.php?o=s&ud=a&currentPage=' + index;
        var currentId = index;
        $.ajax({
        url: currentUrl,
        success: onResult
    });
    function onResult(result) {
        console.log('The Result index: ' + currentId);
        var doc = $(result);
        var stockArrDom = doc.find('table tbody tr td:nth-child(2) a strong');
        console.log(stockArrDom.length);
        //Iterate all td's in second column
        stockArrDom.each(function () {
        //add item to array
        resultArray.push($(this).text());
        });
        }
    }
}

<?php

namespace RandikaSrimal\HubspotTools\Console\Commands;

use Illuminate\Console\Command;

class CopyProperties extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'hubspot-tools:copy-properties';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Copy Hubspot properties from one account to another account';

    // public function __construct() {
    //     parent::__construct();
    // }

    public function handle() {
        echo 'foo';
    }
}
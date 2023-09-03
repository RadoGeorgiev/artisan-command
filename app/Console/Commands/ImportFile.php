<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use DB;
use Illuminate\Support\Facades\Storage;

class ImportFile extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'import_file {file : The file name in the Storage} {id : The unique ID for the file}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Parse and import data from a fixed width text file into the database';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        // $file_name = $this->argument('file');
        // $res = Storage::get($this->argument('file'));
        $res = file('storage\app\PAYARC_DDF');
        // $res = Storage::get('import_file_specs.csv');
        // $results = DB::select('select * from users where id = ?', array(1));
        var_dump($res);exit();
    }
}

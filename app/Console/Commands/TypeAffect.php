<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Manga;
use App\Type;
class TypeAffect extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'types:affect';

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
        $headers = ["id","title"];
	$content = Manga::select("id","english_name")->get();
	$this->table($headers,$content);
	
	$id = $this->ask('Quel Manga ?');
	
	$headers = ["id","name"];
	$types = Type::select("id","name")->get();
	
	$this->table($headers,$types);
	
	$typesId = $this->ask('Quel Type ? (separer les id par des "|")');

	if($this->confirm('Etes vous sur du choix '.$typesId.' ?')){
		Manga::find($id)->types()->sync(explode('|',$typesId));
	}
	
	
	

	
    }
}

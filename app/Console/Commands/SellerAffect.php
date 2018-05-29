<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Manga;
use App\Seller;
class SellerAffect extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'sellers:affect';

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
	$sellers = Seller::select("id","name")->get();
	
	$this->table($headers,$sellers);
	
	$sellerId = $this->ask('Quel Seller ?');
	$price = $this->ask('Quel prix ?');

	if($this->confirm('Etes vous sur du choix '.$sellerId.' au prix : '.$price.'  ?')){
		Manga::find($id)->sellers()->detach();
		Manga::find($id)->sellers()->attach($sellerId,['price' => $price]);
	}
	
	
	

	
    }
}

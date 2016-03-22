<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Intervention\Image\Facades\Image;

class MakeVideo extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'vid:go';

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
        $slides = [[
            "title" => "INDIAN FOOD",
            "background_color" => "#9B3166",
            "text_color" => "#fff"
        ],[
            "title" => "COOKING CLASSES",
            "background_color" => "#9B3166",
            "text_color" => "#fff"
        ], [
            "title" => "In Brisbane",
            "background_color" => "#E7B100",
            "text_color" => "#fff"
        ], [
            "title" => "Cooking Demo",
            "subtitle" => "Booval",
            "background_color" => "#0F1219",
            "image_url" => "http://static.au.groupon-content.net/70/69/1454489676970.jpg",
            "text_color" => "#fff"
        ], [
            "title" => "with Meal & Drinks",
            "subtitle" => "Booval",
            "background_color" => "#0F1219",
            "image_url" => "http://static.au.groupon-content.net/70/69/1454489676970.jpg",
            "text_color" => "#fff"
        ], [
            "title" => "$19",
//        "subtitle" => "50% off",
            "image_url" => "http://static.au.groupon-content.net/64/86/1457503358664.jpg",
//        "subtitle_image_url" => "/Users/craig/Desktop/movie/tomato.png",
            "background_color" => "#9B3166",
            "text_color" => "#fff"
        ], [
            "title" => "3Hr Cooking Class",
            "subtitle" => "Woolloongabba",
            "image_url" => "http://static.au.groupon-content.net/28/26/1457704342628.jpg",
            "text_color" => "#fff"
        ], [
            "title" => "with Dinner",
            "subtitle" => "Woolloongabba",
            "background_color" => "#0F1219",
            "image_url" => "http://static.au.groupon-content.net/28/26/1457704342628.jpg",
            "text_color" => "#fff"
        ], [
            "title" => "$69",
            "background_color" => "#9B3166",
            "text_color" => "#fff"
        ], [
            "title" => "TO-DO.CO",
            "background_color" => "#E7B100",
            "text_color" => "#0F1219"
        ]];

        $blah = new \App\VideoMaker\VideoMaker();
        $asset = $blah->make($slides);

        echo $asset;
    }
}

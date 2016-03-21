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
        $cityName = 'Brisbane';
//    $day = 'today';
//    $cinemas = Cinema::where('city', $cityName)->get();
//    $firstCinema = $cinemas[0];
//    $startingAfter = \Carbon\Carbon::$day($firstCinema->timezone);
//    $endOfDay = $startingAfter->copy()->endOfDay();
//
//    $movieIds =  Showing::where('start_time', '>=', $startingAfter->toDateTimeString())
//        ->where('start_time', '<=', $endOfDay->toDateTimeString())
////        ->whereIn('cinema_id', $cinemas->lists('id'))
//        ->distinct()->lists('movie_id');
//
//    $movies = Movie::whereIn('id', $movieIds)->whereHas('details', function($query) {
////        $query->where('tomato_meter', '>=', 80);
//    })->with(array('details'))->orderBy('tomato_meter', 'desc')->get();


        $counter = 0;
        $width = 600 * 1.33;//720;
        $height = 600;//405;

        $titleFontSize = 57;
        $titleY = $height / 2 - $titleFontSize;
        $titleX = $width / 2;

//    $imageid = $invID = str_pad($counter++, 3, '0', STR_PAD_LEFT);
//    $path = storage_path("app/movie/img$imageid.jpg");
//    $img = Image::canvas($width, $height, '#FFD500');
//    $img->text("NEW AT THE MOVIES", $width / 2, $height / 2 - 25,
//        function($font) use ($img, $width, $titleFontSize, $height, $titleX, $titleY){
//            $font->file('/Users/craig/Desktop/TEST.otf');
//            $font->size($titleFontSize);
//            $font->color('#0F1219');
//            $font->align('center');
//            $font->valign('top');
//        });
//    $img->save($path);

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
        ]



//
//    ], [
//        "title" => "GRIMSBY",
//        "subtitle" => "51%",
//        "image_url" => "https://image.tmdb.org/t/p/original/q6vNLs1pejZENEHu8jL75Lmub8L.jpg",
//        "subtitle_image_url" => "/Users/craig/Desktop/movie/tomato.png",
//        "background_color" => "#0F1219",
//        "text_color" => "#fff"
//    ], [
//        "title" => "VICTOR FRANKENSTEIN",
//        "subtitle" => "26%",
//        "image_url" => "https://image.tmdb.org/t/p/original/AsNosq3JX6YfWy7HXmHnJjV7Fsw.jpg",
//        "subtitle_image_url" => "/Users/craig/Desktop/movie/splat.png",
//        "background_color" => "#0F1219",
//        "text_color" => "#fff"
//    ]
        ];

        foreach($slides as $slide) {

            if(!isset($slide['subtitle'])) {
                $imageid = $invID = str_pad($counter++, 3, '0', STR_PAD_LEFT);
                $path = storage_path("app/movie/img$imageid.jpg");
                $img = Image::canvas($width, $height, $slide['background_color']);
                $img->text(strtoupper($slide['title']), $width / 2, $height / 2 - 25,
                    function($font) use ($titleFontSize, $slide){
                        $font->file(storage_path('movie/font.otf'));
                        $font->size($titleFontSize);
                        $font->color($slide['text_color']);
                        $font->align('center');
                        $font->valign('top');
                    });
                $img->save($path);
                continue;
            }


            $imageid = $invID = str_pad($counter++, 3, '0', STR_PAD_LEFT);
            $path = storage_path("app/movie/img$imageid.jpg");
            $img = Image::make($slide['image_url'])->resize($width, $height);
            $img->brightness(-35);
//        $img->rectangle(5, 5, 195, 195, function ($draw) {
//            $draw->background('rgba(255, 255, 255, 0.5)');
//            $draw->border(2, '#000');
//        });
//        $img = Image::canvas($width, $height, $slide['background_color']);

// use callback to define details
            $subtitleSpace = 25;
            $subtitleFontSize = 30;
            $tomatoWidth = 30;

            $img->text(strtoupper($slide['title']), $titleX, $titleY,
                function($font) use ($img, $width, $titleFontSize, $height, $titleX, $titleY, $subtitleSpace, $tomatoWidth, $slide, $path){
                    $font->file(storage_path('movie/font.otf'));
                    $font->size($titleFontSize);
                    $font->color($slide['text_color']);
                    $font->align('center');
                    $font->valign('top');
//        $font->angle(45);

                    $box = $font->getBoxSize();
                    if($box['width'] > $width) {
                        return;
                    }

                    $subtitleX = $titleX + $tomatoWidth / 2;
                    $subtitleY = $titleY + $box['height'] + $subtitleSpace;
                    $img->text($slide['subtitle'], $subtitleX, $subtitleY , function($font2) use ($img, $titleX, $subtitleX, $subtitleY, $tomatoWidth, $path, $slide) {
                        $font2->file('/Library/Fonts/Futura.ttc');
                        $font2->size(30);
                        $font2->color($slide['text_color']);
                        $font2->align('center');
                        $font2->valign('top');

                        $box2 = $font2->getBoxSize();

                        $tomatoX = (int)($subtitleX - ($box2['width'] / 2) - $tomatoWidth - 10);
                        $tomatoY = (int)$subtitleY - 3;
                        if(isset($slide['subtitle_image_url'])) {
                            $img->insert($slide['subtitle_image_url'], 'top-left', $tomatoX, $tomatoY);
                        }
                    });
                });
            $img->save($path);

//        if(isset($slide['image_url'])) {
//            $imageid = $invID = str_pad($counter++, 3, '0', STR_PAD_LEFT);
//            $path = storage_path("app/movie/img$imageid.jpg");
//            Image::make($slide['image_url'])
//                ->resize($width, $height)
//                ->save($path);
//        }
        }

//    $imageid = $invID = str_pad($counter++, 3, '0', STR_PAD_LEFT);
//    $path = storage_path("app/movie/img$imageid.jpg");
//    $img = Image::canvas($width, $height, '#FFD500');
//    $img->insert("/Users/craig/Sites/moviesowl-laravel/public/images/owl.png", 'center');
//    $img->save($path);

//    $hootFontSize = 30;
//    $imageid = $invID = str_pad($counter++, 3, '0', STR_PAD_LEFT);
//    $path = storage_path("app/movie/img$imageid.jpg");
//    $img = Image::canvas($width, $height, '#FB1B75');
//    $img->text("10 Cloverfield Lane looks like a hoot.", $width / 2, $height / 2 - 25,
//        function($font) use ($img, $width, $hootFontSize, $height, $titleX, $titleY){
//            $font->file('/Users/craig/Desktop/TEST.otf');
//            $font->size($hootFontSize);
//            $font->color('#fff');
//            $font->align('center');
//            $font->valign('top');
//        });
//    $img->save($path);

//    $hootFontSize = 30;
//    $imageid = $invID = str_pad($counter++, 3, '0', STR_PAD_LEFT);
//    $path = storage_path("app/movie/img$imageid.jpg");
//    $img = Image::canvas($width, $height, '#FB1B75');
//    $img->text("10 Cloverfield Lane looks like a hoot.", $width / 2, $height / 2 - 25,
//        function($font) use ($img, $width, $hootFontSize, $height, $titleX, $titleY){
//            $font->file('/Users/craig/Desktop/TEST.otf');
//            $font->size($hootFontSize);
//            $font->color('#fff');
//            $font->align('center');
//            $font->valign('top');
//        });
//    $img->save($path);
        $images = storage_path('app/movie/img%03d.jpg');
        $music = storage_path("app/movie/Omission.mp3");
        $video = storage_path('app/movie/out3.mp4');
        $command = "ffmpeg -framerate 1 -i $images -i $music  -c:v libx264 -c:a aac -strict experimental -b:a 192k -shortest -r 30 -pix_fmt yuv420p -vf scale=-2:720 $video";

        echo shell_exec($command);

    }
}

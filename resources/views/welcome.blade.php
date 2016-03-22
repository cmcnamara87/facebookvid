<!DOCTYPE html>
<html>
    <head>
        <title>Laravel</title>
    </head>
    <body>
        <div class="container">
            <h2>Request</h2>
            Post to
            <pre>
                http://128.199.104.251/facebookvid/current/public/video
            </pre>
            Body
            <pre>
                application/json
            </pre>
            <pre>
                {
                    slides: [... array of slides ...]
                }
            </pre>

            <h3>Slides</h3>
            <h4>Title</h4>
            <pre>
                [
                    "title" => "INDIAN FOOD",
                    "background_color" => "#9B3166",
                    "text_color" => "#fff"
                ]
            </pre>
            <h4>Subtitle with background image</h4>
            <pre>
                [
                   "title" => "Cooking Demo",
                    "subtitle" => "Booval",
                    "background_color" => "#0F1219",
                    "image_url" => "http://static.au.groupon-content.net/70/69/1454489676970.jpg",
                    "text_color" => "#fff"
                ]
            </pre>
        </div>
    </body>
</html>

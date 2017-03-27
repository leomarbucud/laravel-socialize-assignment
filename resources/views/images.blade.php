<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Socialize Assignment</title>

        <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
        <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    </head>
    <body>
        <div class="wrapper registration-bg">
            <div class="row">
                <div class="column1">
                    <div class="registration-logo">
                       <img src="/images/glad-cooking-contest-logo.png" alt="GLAD COOKING CONTEST">
                    </div>
                    <img src="/images/chef.png" alt="CHEF" class="chef-logo" />
                </div>
                <dv class="column2">
                    <div class="registration-form">
                        <div class="title">
                            <p>So you think you can cook.</p>
                            <h2>COMPETITION GALLERY</h2>
                            <p>VOTE YOUR FAVORITE DISH OR SUBMIT YOUR OWN</p>
                        </div>
                        <div class="gallery">
                        @foreach( $images as $image )
                            <a href="{!! '/images/uploads/'.$image->path !!}"><img src="{!! '/images/uploads/'.$image->path !!}" /></a>
                        @endforeach
                        </div>
                    </div>
                </dv>
            </div>
            <footer>
                <nav>
                    <ul>
                        <li>
                            <a href="/">Register</a>
                        </li>
                        <li>
                            <a href="/upload">Upload</a>
                        </li>
                        <li>
                            <a href="/gallery">Gallery</a>
                        </li>
                    </ul>
                </nav>
            </footer>
        </div>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <script src="{{ asset('js/socialize.js') }}"></script>
    </body>
</html>

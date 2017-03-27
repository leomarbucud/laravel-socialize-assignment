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
                <dv class="column2" id="ajax-content">
                    <div class="registration-form">
                        <div class="title">
                            <p>So you think you can cook?</p>
                            <img src="/images/spatula.png" />
                            <p>Register Now</p>
                        </div>
                        <form method="post" action="/register" id="register-form">
                            {{ csrf_field() }}
                            <div class="form-group">
                                <label>Name<span class="required">*</span></label>
                                <input type="text" name="name" class="form-field" value="{!! old('name') !!}" required>
                            </div>
                            <div class="form-group">
                                <label>Email<span class="required">*</span></label>
                                <input type="email" name="email" class="form-field" value="{!! old('email') !!}" required>
                                <span class="error">{{ $errors->first('email') }}</span>
                            </div>
                            <div class="form-group">
                                <label>Country<span class="required">*</span></label>
                                <input type="text" name="country" class="form-field" value="{!! old('country') !!}" required>
                            </div>
                            <div class="form-group">
                                <label>Nationality<span class="required">*</span></label>
                                <input type="text" name="nationality" class="form-field" value="{!! old('nationality') !!}" required>
                            </div>
                            <div class="form-group">
                                <label>Mobile<span class="required">*</span></label>
                                <input type="text" name="mobile" class="form-field" value="{!! old('mobile') !!}" required>
                            </div>
                            <button type="submit" class="submit">Submit</button>
                        </form>
                    </div>
                </dv>
            </div>
            <footer>
                <nav>
                    <ul id="navs">
                        <li>
                            <a href="/register">Register</a>
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

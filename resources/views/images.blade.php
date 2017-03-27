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
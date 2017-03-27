<div class="registration-form">
    <div class="title">
        <p>So you think you can cook?</p>
        <img src="/images/spatula.png" />
        <p>Upload Image</p>
    </div>
    <form method="post" action="/upload" id="upload-form" enctype="multipart/form-data">
        {{ csrf_field() }}
        <div class="form-group">
            <label>Image<span class="required">*</span></label>
            <input type="file" name="image" class="form-field" required>
        </div>
        <button type="submit" class="submit">Upload</button>
    </form>
</div>
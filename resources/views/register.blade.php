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
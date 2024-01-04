<form id="form">
    <div class="form-group row">
        <div class="col-lg-6">
            <input type="text" name="fname" placeholder="First Name" required class="form-control form-input">
        </div>
        <div class="col-lg-6">
            <input type="text" name="lname" placeholder="Last Name" required class="form-control form-input">
        </div>
    </div>
    <div class="form-group row">
        <div class="col-lg-6">
            <input type="email" name="email" placeholder="Email" required class="form-control form-input">
        </div>
        <div class="col-lg-6">
            <input type="text" name="business" placeholder="Business Name" required class="form-control form-input">
        </div>
    </div>
    <div class="form-group row">
        <div class="col-lg-6">
            <input type="tel" name="tel" placeholder="Telephone" required class="form-control form-input">
        </div>
        <div class="col-lg-6">
            <input type="text" name="address" placeholder="Address" required class="form-control form-input">
        </div>
    </div>
    <div class="form-group">
        <textarea name="description"  class="form-control form-input"></textarea>
    </div>
    <div id="success-message" style="display:none"></div>
    <div class="form-group">
        <button type="submit" class="primary-button"><img src="<?php echo get_template_directory_uri()?>/assets/img/arrowupblack.png"/>Submit</button>
    </div>
</form>

<script>

    (function($){

        $('#form').submit(function(event){
            event.preventDefault();
            var endpoint = '<?php echo admin_url('admin-ajax.php') ?>';
            var form = $('#form').serialize();
            var formdata = new FormData;
            formdata.append('action', 'enquiry');
            formdata.append('enquiry', form);

            $.ajax(endpoint, {
                type:'POST',
                data:formdata,
                processData:false,
                contentType:false,
                success:function(res){
                    $('#form').trigger('reset');
                    $('#success-message').text("Thanks for sending");
                    $('#success-message').show();
                },
                error:function(err){

                }
            })
        })

    })(jQuery)


</script>
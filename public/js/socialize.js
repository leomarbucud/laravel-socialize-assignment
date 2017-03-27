(function(){

	var checkLoaded = function() {
	 	return document.readyState === "complete";
	};

	var loader = function() {
		$('body').append('<div id="loader"></div>')
	};

	var removeLoader = function() {
		$('#loader').remove();
	};

	var init = function() {
		$('#register-form').on('submit', function(e){
			e.preventDefault();
			var data = $(this).serialize();
			loader();
			$.ajax({
				url: $(this).attr('action'),
				method: 'post',
				data: data,
				type: 'JSON',
				success: function(res) {
					removeLoader();
					if(res.id) {
						alert('Successfully registered!');
					}
				},
				error: function(data) {
				    var errors = $.parseJSON(data.responseText);
				    var alertErrors = "";
				    $.each(errors, function(index, value) {
				        alertErrors += value + '\n';
				    });
					removeLoader();
				    alert(alertErrors);
				}
			});
		});

		$('#upload-form').on('submit', function(e){
			e.preventDefault();
			var formData = new FormData($(this)[0]);
            var form = $(this);
            console.log(formData);
            loader();
            $.ajax({
                url: $(this).attr('action'),
                type: 'POST',
                data: formData,
                async: false,
                success: function(data) {
					removeLoader();
                    alert("Successfully uploaded!");
                },
                cache: false,
                contentType: false,
                processData: false,
                error: function(data) {
                	var errors = $.parseJSON(data.responseText);
				    var alertErrors = "";
				    $.each(errors, function(index, value) {
				        alertErrors += value + '\n';
				    });
					removeLoader();
				    alert(alertErrors);
                }
            });
		});

		removeLoader();
	}

	$('#navs li a').each(function(){
		$(this).click(function(e){
			e.preventDefault();
			var link = $(this).attr('href');
			loader();
			$('#ajax-content').load(link, init);
		})
	});
	
	init();
}());
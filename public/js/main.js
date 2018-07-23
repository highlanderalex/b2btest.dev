var RELOAD = false;

$(document).ready(function(){
    $("#myTable").tablesorter();

    $("#search").keyup(function(){
        _this = this;

        $.each($(".searchTable tbody tr"), function() {
            if ($(this).text().toLowerCase().indexOf($(_this).val().toLowerCase()) === -1) {
                $(this).hide();
            } else {
                $(this).show();
            }
        });
    });
});


$('.subscribe-form').on('click', '.subscribe-btn', function(e){
    e.preventDefault();
    var domain = $('input.subscribe').val();
	var reg = /^([a-zA-Z0-9]([a-zA-Z0-9\-]{0,61}[a-zA-Z0-9])?\.)+[a-zA-Z]{2,6}$/;
	
	if (!reg.test(domain)){
		showAlert('Wrong domain format');
		return;
	}
    $.ajax({
        url: '/domain/add',
        data: {domain: domain},
        type: 'GET',
		beforeSend: function(){
			$("#spinner").fadeIn(200);
		},
        success: function(res){
			$("#spinner").css('display', 'none');
			if(res.success){
			    RELOAD = true;
				showAlert(res.message, 'success');
			}
			if(res.error){
				showAlert(res.error, 'error');
			}
        },
        error: function(){
			$("#spinner").css('display', 'none');
            showAlert('Error!');
        }
    });
});



function closeAlert(){
	$(".modal-alert").fadeOut();
	if(RELOAD)
        location.reload();
}

function showAlert(msg, type = 'error'){
	var color = '';
	$(".modal-alert p").text(msg);
	if(type == 'success'){
		color = '#2E8B57';
		$(".alert-header").css('background', color);
		$(".modal-alert h3").text('Message!');
		$(".alert-body").css('color', color);
	} else{
		color = '#CD5C5C';
		$(".alert-header").css('background', color);
		$(".modal-alert h3").text('Warning error!');
		$(".alert-body").css('color', color);
	}
	$(".modal-alert").fadeIn();
}

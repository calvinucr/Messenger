$(document).ready(function() {

	/* Edit info button */
	$('.info-edit').click(function () {
		$('.info').hide();
		$('.info-input').show();
		$('.cancel-info-edit').show();
		$('.info-edit').hide();
		$('.save-info-edit').show();
	});

	$('.cancel-info-edit').click(function () {
		$('.info').show();
		$('.info-input').hide();
		$('.cancel-info-edit').hide();
		$('.info-edit').show();
		$('.save-info-edit').hide();
	});
	
	/* Edit description button */
	$('.description-edit').click(function () {
		$('.description').hide();
		$('.description-input').show();
		$('.cancel-description-edit').show();
		$('.description-edit').hide();
		$('.save-description-edit').show();
	});

	$('.cancel-description-edit').click(function () {
		$('.description').show();
		$('.description-input').hide();
		$('.cancel-description-edit').hide();
		$('.description-edit').show();
		$('.save-description-edit').hide();
	});

	/* Edit profolio button */
	$('.profolio-edit').click(function () {
		$('.profolio').hide();
		$('.profolio-input').show();
		$('.cancel-profolio-edit').show();
		$('.profolio-edit').hide();
		$('.save-profolio-edit').show();
	});

	$('.cancel-profolio-edit').click(function () {
		$('.profolio').show();
		$('.profolio-input').hide();
		$('.cancel-profolio-edit').hide();
		$('.profolio-edit').show();
		$('.save-profolio-edit').hide();
	});
});
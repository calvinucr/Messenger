$(document).ready(function() {

	/* Edit info button */
	$('.info-edit').click(function () {
		$('.info').hide();
		$('.edit-input').show();
		$('.cancel-info-edit').show();
		$('.info-edit').hide();
		$('.save-info-edit').show();
	});

	$('.cancel-info-edit').click(function () {
		$('.info').show();
		$('.edit-input').hide();
		$('.cancel-info-edit').hide();
		$('.info-edit').show();
		$('.save-info-edit').hide();
	});
	
	/* Edit summary button */
	$('.summary-edit').click(function () {
		$('.summary').hide();
		$('.summary-input').show();
		$('.cancel-summary-edit').show();
		$('.summary-edit').hide();
		$('.save-summary-edit').show();
	});

	$('.cancel-summary-edit').click(function () {
		$('.summary').show();
		$('.edit-input').hide();
		$('.cancel-summary-edit').hide();
		$('.summary-edit').show();
		$('.save-summary-edit').hide();
	});

	/* Edit profolio button */
	$('.profolio-edit').click(function () {
		$('.profolio').hide();
		$('.edit-input').show();
		$('.cancel-profolio-edit').show();
		$('.profolio-edit').hide();
		$('.save-profolio-edit').show();
	});

	$('.cancel-profolio-edit').click(function () {
		$('.profolio').show();
		$('.edit-input').hide();
		$('.cancel-profolio-edit').hide();
		$('.profolio-edit').show();
		$('.save-profolio-edit').hide();
	});
});
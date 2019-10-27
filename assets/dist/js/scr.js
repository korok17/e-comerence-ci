const flashData = $('.flash-data').data('flashdata');
console.log(flashData);
if (flashData) {
	Swal.fire({
		type: 'error',
		title: 'Oops...',
		text: flashData,
	});
}

	$(function () {
		$.ajaxSetup({
			type: "POST",
			url: "<?php echo base_url('pendaftaran/ambilData') ?>",
			cache: false,
		});

		$("#provin").change(function () {
			var value = $(this).val();
			console.log(value)
			if (value > 0) {
				$.ajax({
					data: {
						modul: 'kab',
						id: value
					},
					success: function (respond) {
						$("#kab").html(respond);
					}
				})
			}

		});


		$("#kab").change(function () {
			var value = $(this).val();
			if (value > 0) {
				$.ajax({
					data: {
						modul: 'kec',
						id: value
					},
					success: function (respond) {
						$("#kec").html(respond);
					}
				})
			}
		})

		$("#kec").change(function () {
			var value = $(this).val();
			if (value > 0) {
				$.ajax({
					data: {
						modul: 'kel',
						id: value
					},
					success: function (respond) {
						$("#kel").html(respond);
					}
				})
			}
		})

	})

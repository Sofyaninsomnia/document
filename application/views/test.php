<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
	<style>
        .input-group-row {
            border: 1px solid #ccc;
            padding: 10px;
            margin-bottom: 10px;
            display: flex;
            gap: 10px;
            align-items: center;
        }
        input {
            padding: 8px;
            border: 1px solid #ddd;
        }
    </style>
</head>

<body>
	<form action="<?= base_url('form/create'); ?>" id="dynamicForm" method="POST">
		<div id="inputContainer">
			<div class="input-row-group">
				<input type="text" name="nama_produk[]">
				<button type="button" class="remove-button" style="display: none;">Hapus</button>
			</div>
		</div>

		<button type="button" id="addRow" style="margin-top: 15px;">Tambah</button>

		<hr style="margin-top: 20px;">
		<button type="submit">Simpan Semua Data</button>
	</form>

	<script>
		$(document).ready(function() {
			var templateRow = `<div class="input-row-group">
				<input type="text" name="nama_produk[]">
				<button type="button" class="remove-button">Hapus</button>
			</div>`;

			$("#addRow").click(function(e){
				e.preventDefault();

				$("#inputContainer").append(templateRow);
			});

			$("#inputContainer").on("click", ".remove-button", function(e) {
				e.preventDefault();

				$(this).closest('.input-row-group').remove();
			});

			function updateRemoveButton() {
				var rowCount = $("#inputContainer .input-row-group").length;
					if (rowCount > 1) {
						$(".remove-button").show();
					}else{
						$("#inputContainer .input-row-group .remove-button").hide();
					}

					$("#addRow").click(function(e) {
						$("#inputContainer").append(templateRow);
						updateRemoveButton();
					});

					$("#inputContainer").on("click", ".remove-button", function(e) {
						e.preventDefault();
						$(this).closest('.input-row-group').remove();
						updateRemoveButton();
					});
			}
		});
	</script>
</body>

</html>
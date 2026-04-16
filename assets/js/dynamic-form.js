$(document).ready(function() {
			var templateRow = `
<div class="row g-3 align-items-center mb-4 input-row-group">
    <div class="d-flex justify-content-between align-items-center">
        <button type="button" class="btn btn-danger remove-button ms-auto"><i class="bi bi-x-circle"></i></button>
    </div>
    <div class="row">
        <div class="col-md-4">
            <label class="form-label">Lokasi</label>
            <input type="text" class="form-control" name="lokasi[]" required>
        </div>
        <div class="col-md-4">
            <label class="form-label">Uraian Kegiatan</label>
            <input type="text" class="form-control" name="kegiatan[]" required>
        </div>
        <div class="col-md-4">
            <label class="form-label">Keterangan</label>
            <input type="text" class="form-control" name="keterangan[]" required>
        </div>
        <div class="col-md-4">
            <label class="form-label">0%</label>
            <input type="file" class="form-control" name="file_00[]" required>
        </div>
        <div class="col-md-4">
            <label class="form-label">50%</label>
            <input type="file" class="form-control" name="file_50[]" required>
        </div>
        <div class="col-md-4">
            <label class="form-label">100%</label>
            <input type="file" class="form-control" name="file_100[]" required>
        </div>
    </div>
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
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Form</title>
	<style>
		form {
			padding: 15px;
		}

		fieldset {
			padding: 15px;
			margin: auto;
			width: 200px;
			background-color: #DDE6ED;
		}

		legend {
			text-align: center;
			font-weight: bold;
		}

		label, input {
			justify-content: center;
		}

		input[type=number]::-webkit-inner-spin-button,
		input[type=number]::-webkit-outer-spin-button {
			-webkit-appearance: none;
			-moz-appearance: none;
			appearance: none;
			margin: 0;
		}

		#nama,
		#nim,
		#kelas,
		#matakuliah,
		#dosen,
		#asisten {
			border-radius: 5px;
			padding: 7px;
		}
	</style>
</head>

<body>
	<form action="<?php echo site_url('process-form'); ?>" method="post">
		<fieldset>
			<Legend>Form Mahasiswa</Legend>
			<label for="nama">Nama Lengkap:</label>
			<input type="text" id="nama" name="nama" placeholder="Nama Lengkap" required><br><br>
			<label for="nim">NIM:</label>
			<input type="number" id="nim" name="nim" placeholder="NIM" required><br><br>
			<label for="kelas">Kelas:</label>
			<input type="text" id="kelas" name="kelas" placeholder="Kelas" required><br><br>
			<label for="matakuliah">Mata Kuliah:</label>
			<input type="text" id="matakuliah" name="matakuliah" placeholder="Matakuliah" required><br><br>
			<label for="dosen">Dosen Pengampu:</label>
			<input type="text" id="dosen" name="dosen" placeholder="Dosen" required><br><br>
			<label for="asisten">Asisten Praktikum:</label>
			<input type="text" id="asisten" name="asisten" placeholder="Asisten Praktikum" required><br><br>
			<input type="submit" value="Submit">
		</fieldset>
	</form>

</body>

</html>
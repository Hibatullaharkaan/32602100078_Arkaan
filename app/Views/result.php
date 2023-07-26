<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Output</title>
    <style> 

        body {
			margin:0;
			padding:0;
			font-family: sans-serif;
			background : brown;
		} 

        fieldset {
            border-color: #03e9f4;
			background: #03e9f4;
			cursor: pointer;
			margin: 0;
			padding: 0;
            margin: auto;
            width: 350px;
        }

        legend {
            
            color: white;
            text-align: center;
            font-weight: bold;
        }

        td {
            color: white;
        } 

        .result-box {
			position: absolute;
			top: 50%;
			left: 50%;
			width: 400px;
			padding: 40px;
			transform: translate(-50%, -50%);
			background: rgba(0,0,0,.5);
			box-sizing: border-box;
			box-shadow: 0 15px 25px rgba(0,0,0,.6);
			border-radius: 10px;
		}
        .result-box legend {
			position: relative;
			display: inline-block;
			padding: 10px 20px;
			color: #03e9f4;
			font-size: 16px;
			text-decoration: none;
			text-transform: uppercase;
			overflow: hidden;
			transition: .5s;
			margin-top: 40px;
			letter-spacing: 4px
		}
        .result-box legend:hover {
            cursor: pointer;
			background: #03e9f4;
			color: #fff;
			border-radius: 5px;
			box-shadow: 0 0 5px #03e9f4,
			0 0 25px #03e9f4,
			0 0 50px #03e9f4,
			0 0 100px #03e9f4;
		}
        
    </style>
</head>
<body>
    <fieldset class="result-box">
        <legend>Form hasil data Mahasiswa</legend>
        <table>
            <tr>
                <td>Nama</td>
                <td>:</td>
                <td><?php echo $nama; ?></td>
            </tr>
            <tr>
                <td>Nim</td>
                <td>:</td>
                <td><?php echo $nim; ?></td>
            </tr>
            <tr>
                <td>Kelas</td>
                <td>:</td>
                <td><?php echo $kelas; ?></td>
            </tr>
            <tr>
                <td>Matakuliah</td>
                <td>:</td>
                <td><?php echo $matakuliah; ?></td>
            </tr>
            <tr>
                <td>Dosen Pengampu</td>
                <td>:</td>
                <td><?php echo $dosen; ?></td>
            </tr>
            <tr>
                <td>Asisten</td>
                <td>:</td>
                <td><?php echo $asisten; ?></td>
            </tr>
        </table>
    </fieldset>
</body>
</html>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kecamatan Teriak</title>
    <style>
        .title {
            text-align: center;
        }

        body {
            font-family: Arial, sans-serif;
            background-color: #1e1e2d;
            color: #ddd;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .container {
            background-color: #2b2b3b;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }
        th, td {
            padding: 10px;
            text-align: left;
        }
        th {
            background-color: #3e3e50;
        }
        tr:nth-child(even) {
            background-color: #2e2e3c;
        }
        tr:hover {
            background-color: #3e3e50;
        }
        a {
            color: #62dafc;
            text-decoration: none;
        }
        a:hover {
            text-decoration: underline;
        }
        .usage {
            background-color: #3e3e50;
            padding: 10px;
            border-radius: 5px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1 class="title">Kecamatan Teriak</h1>
        <table>
            <tr>
                <th>Endpoint</th>
                <th>Deskripsi</th>
            </tr>
            <tr>
                <td><a href="https://teriak.pspig.online/api/fasilitas" target="_blank">fasilitas</a></td>
                <td>Link API untuk fasilitas.</td>
            </tr>
            <tr>
                <td><a href="https://teriak.pspig.online/api/desa" target="_blank">desa</a></td>
                <td>Link API untuk desa.</td>
            </tr>
            <tr>
                <td><a href="https://teriak.pspig.online/api/kecamatan" target="_blank">kecamatan</a></td>
                <td>Link API untuk kecamatan.</td>
            </tr>
        </table>
        <div class="usage">
            <h2>Cara Penggunaan Link API</h2>
            <p>Untuk mengakses file geojson setiap link cukup menambahkan nama file. Mengikuti https://teriak.pspig.online/api/{endpoint}/{nama file}</p>
            <p>Contoh: <a href="https://teriak.pspig.online/api/fasilitas/SD.geojson" target="_blank">https://teriak.pspig.online/api/fasilitas/SD.geojson</a></p>
            <p>Untuk mengetahui list file geojson, silahkan mengklik endpoint di atas</p>
        </div>
    </div>
</body>
</html>
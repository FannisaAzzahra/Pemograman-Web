<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Informasi Dosen</title>
    <style>
        table {
            border-collapse: collapse;
            width: 50%;
            margin: auto;
        }
        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    <?php
        $Dosen = [
            'Nama' => 'Elok Nur Hamdana',
            'Domisili' => 'Malang',
            'Jenis Kelamin' => 'Perempuan'
        ];
    ?>
    <h2>Informasi Dosen</h2>
    <table>
        <tr>
            <th>Data</th>
            <th>Keterangan</th>
        </tr>
        <?php foreach ($Dosen as $data => $keterangan): ?>
            <tr>
                <td><?php echo $data; ?></td>
                <td><?php echo $keterangan; ?></td>
            </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>

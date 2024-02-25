<!DOCTYPE html>
<html>
<head>

    <title>Nilai Siswa</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }

        h2 {
            text-align: center;
            margin-top: 20px;
            color: #333;
        }

        table {
            width: 80%;
            margin: 20px auto;
            border-collapse: collapse;
            border-radius: 8px;
            overflow: hidden;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
        }

        th, td {
            padding: 12px 15px;
            text-align: center;
        }

        th {
            background-color: #307ed8;
            color: white;
        }

        tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        tr:hover {
            background-color: #ddd;
        }
    </style>
</head>
<!-- Navbar -->
@include('partials.header-brand')
      @include('partials.header-navigation')
      <div class="page-wrapper">
<body>
    <h2>Nilai Siswa</h2>
    <table>
        <tr>
            <th>No</th>
            <th>Nama Siswa</th>
            <th>Matematika</th>
            <th>Bahasa Indonesia</th>
            <th>Fisika</th>
        </tr>
        <?php
        // Data Nilai Siswa
        $nilai_siswa = array(
            array("Nama Siswa 1", 85, 78, 90),
            array("Nama Siswa 2", 90, 85, 88),
            array("Nama Siswa 3", 75, 80, 82),
            // Tambahkan data siswa sesuai kebutuhan
        );

        // Menampilkan data ke dalam tabel
        foreach ($nilai_siswa as $key => $value) {
            echo "<tr>";
            echo "<td>" . ($key + 1) . "</td>";
            foreach ($value as $item) {
                echo "<td>$item</td>";
            }
            echo "</tr>";
        }
        ?>
    </table>
</body>
</html>

<?php
include 'koneksi.php'; // Pastikan file koneksi benar

$selectQuery = "SELECT * FROM buku_tamu";
$result = $koneksi->query($selectQuery);

if (!$result) {
    die("Error: " . $koneksi->error);
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buku Tamu</title>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buku Tamu</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }
        form {
            margin-bottom: 20px;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        table, th, td {
            border: 1px solid #ddd;
        }
        th, td {
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #f4f4f4;
        }
    </style>
</head>
<body>
    <h1>Buku Tamu</h1>

    <!-- Form untuk input data -->
    <form method="POST" action="">
        <label for="nama">Nama:</label><br>
        <input type="text" id="nama" name="nama" required placeholder="Masukkan nama"><br><br>
        
        <label for="email">Email:</label><br>
        <input type="email" id="email" name="email" required placeholder="Masukkan email"><br><br>
        
        <label for="isi">Isi Pesan:</label><br>
        <textarea id="isi" name="isi" required placeholder="Masukkan pesan"></textarea><br><br>
        
        <button type="submit">Kirim</button>
    </form>

    <!-- Menampilkan daftar buku tamu -->
    <h2>Daftar Buku Tamu</h2>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Nama</th>
                <th>Email</th>
                <th>Isi Pesan</th>
            </tr>
        </thead>
        <tbody>
            <?php
            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    echo "<tr>
                            <td>" . htmlspecialchars($row['ID_BT']) . "</td>
                            <td>" . htmlspecialchars($row['NAMA']) . "</td>
                            <td>" . htmlspecialchars($row['EMAIL']) . "</td>
                            <td>" . htmlspecialchars($row['ISI']) . "</td>
                          </tr>";
                }
            } else {
                echo "<tr><td colspan='4'>Belum ada data</td></tr>";
            }
            ?>
        </tbody>
    </table>
</body>
</html>
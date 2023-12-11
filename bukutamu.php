<?php
$conn = new mysqli("localhost", "root", "", "bukutamu");

if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

function tampilkanData($conn) {
    $query = "SELECT * FROM datatamu";
    $result = $conn->query($query);

    if ($result && $result->num_rows > 0) {
        echo "<h2>Data Mahasiswa:</h2>";
        echo "<table border='1'>";
        echo "<tr><th>ID</th><th>NIM</th><th>Nama</th><th>Alamat</th><th>Email</th></tr>";

        while ($row = $result->fetch_assoc()) {
            echo "<tr><td>".$row["id"]."</td><td>".$row["nim"]."</td><td>".$row["nama"]."</td><td>".$row["alamat"]."</td><td>".$row["email"]."</td></tr>";
        }

        echo "</table>";
    } else {
        echo "Tidak ada data.";
    }
}

// Handle formulir jika dikirim
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST["tambah"])) {
        $nim = $_POST["nim"];
        $nama = $_POST["nama"];
        $alamat = $_POST["alamat"];
        $email = $_POST["email"];

        // Periksa apakah semua bidang terisi
        if (!empty($nim) && !empty($nama) && !empty($alamat) && !empty($email)) {
            // Jalankan query insert
            $query = "INSERT INTO datatamu (nim, nama, alamat, email) VALUES ('$nim', '$nama', '$alamat', '$email')";
            $result = $conn->query($query);

            if ($result) {
                echo "<p>Data berhasil ditambahkan!</p>";
                // Refresh halaman atau redirect ke halaman yang sama
                echo '<meta http-equiv="refresh" content="0">'; // Refresh halaman
                // Atau redirect ke halaman yang sama
                // header("Location: nama_halaman.php"); // Ubah 'nama_halaman.php' dengan nama halaman yang kamu gunakan
                exit;
            } else {
                echo "<p>Gagal menambahkan data: " . $conn->error . "</p>";
            }
        } else {
            echo "<script>alert('Semua bidang harus diisi!');</script>";
        }
    } elseif (isset($_POST["hapus"])) {
        $id_to_delete = $_POST["id"];

        // Jalankan query delete
        $delete_query = "DELETE FROM datatamu WHERE id=$id_to_delete";
        $delete_result = $conn->query($delete_query);

        if ($delete_result) {
            echo "Data berhasil dihapus!";
            // Refresh halaman atau redirect ke halaman yang sama
            echo '<meta http-equiv="refresh" content="0">'; // Refresh halaman
            // Atau redirect ke halaman yang sama
            // header("Location: nama_halaman.php"); // Ubah 'nama_halaman.php' dengan nama halaman yang kamu gunakan
            exit;
        } else {
            echo "Gagal menghapus data: " . $conn->error;
        }
    }
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buku Tamu</title>
    <style>
        body {
    font-family: 'Times New Roman', Times, serif;
    margin: 0;
    padding: 0;
    background-color: #333;
    color: #333; /* Tambahkan warna teks default */
}

.container {
    margin: 20px auto; /* Pusatkan konten */
    max-width: 800px; /* Lebarkan container */
    padding: 20px;
    background-color: #1E90FF; /* Tambahkan latar belakang putih */
    border-radius: 8px; /* Rounding border */
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); /* Tambahkan bayangan */
}

h2 {
    font-family: "Arial", sans-serif;
    font-size: 24px;
    font-weight: bold;
    color: #333;
    margin-bottom: 20px; /* Ruang bawah untuk h2 */
}

table {
    width: 100%;
    border-collapse: collapse;
}

table th, table td {
    padding: 8px;
    border: 1px solid #ccc;
    text-align: left;
}

table th {
    background-color: #f2f2f2;
}

form {
    margin-bottom: 20px; /* Ruang bawah antara form */
}

input[type="text"], textarea {
    width: calc(100% - 20px); /* Jaga lebar form */
    padding: 10px;
    margin-bottom: 10px;
    border: 1px solid #ccc;
    border-radius: 4px;
    resize: vertical;
    font-weight: bold; /* Teks menjadi bold */
}

input[type="text"]:focus, textarea:focus {
    border-color: #1E90FF;
    outline: none; /* Hapus outline */
}

button {
    background-color: #333;
    color: #fff;
    padding: 10px 20px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    transition: background-color 0.3s ease;
    font-weight: bold; /* Teks menjadi bold */
}

button:hover {
    background-color: #1e90ff; /* Warna hover menjadi #1E90FF */
}
    </style>
</head>
<body>
    <div class="container">
        <!-- Form untuk menambah data -->
        <form method="post">
            <h2>Tambah biodata:</h2>
            <!-- Input fields -->
            <!-- ... -->
            NIM: <input type="text" name="nim"><br>
            Nama: <input type="text" name="nama"><br>
            Alamat: <input type="text" name="alamat"><br>
            Email: <input type="text" name="email"><br>
            <input type="submit" name="tambah" value="Tambah Data">
        </form>

        <!-- Form untuk menghapus data -->
        <form method="post">
            <h2>Hapus data:</h2>
            <!-- Input field untuk menghapus -->
            <!-- ... -->
            ID Data yang akan dihapus: <input type="number" name="id"><br>
            <input type="submit" name="hapus" value="Hapus Data">
        </form>

        <!-- Panggil fungsi untuk menampilkan data -->
        <?php tampilkanData($conn); ?>
    </div>
</body>
</html>

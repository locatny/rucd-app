<h2 style="text-align: center;">Data Minuman</h2>
<style>
    body {
        font-family: Arial, sans-serif;
        margin: 0;
        padding: 0;
        text-align: center; 
        background: linear-gradient(to bottom, #FFC0CB, #ADD8E6); /* Gradien pink ke biru muda */
        color: #8B4513; /* Warna cokelat untuk teks */
    }
    table {
        margin: 20px auto; /* Menempatkan tabel di tengah secara horizontal */
        border-collapse: collapse;
        background: #f4f4f4; /* Warna latar belakang tabel pink soft */
        color: #000; /* Warna teks tabel */
        width: 80%; /* Menyesuaikan lebar tabel */
        border-radius: 8px; /* Membuat sudut tabel melengkung */
        overflow: hidden; /* Menghilangkan efek overflow */
    }
    th, td {
        border: 1px solid #ddd;
        padding: 8px;
        text-align: center; /* Konten tabel di tengah */
    }
    th {
        background-color: #f4f4f4;
        font-weight: bold;
    }
    a {
        text-decoration: none;
        color: blue;
    }
    a:hover {
        text-decoration: underline;
    }
    .add-data-link {
        display: inline-block;
        margin: 10px 0;
        font-weight: bold;
        color: #8B4513; /* Warna teks link cokelat */
    }
    /* Responsif untuk layar kecil */
    @media (max-width: 768px) {
        table {
            width: 100%; /* Lebar tabel mengikuti layar */
        }
        th, td {
            font-size: 12px; /* Ukuran teks lebih kecil */
        }
        .add-data-link {
            font-size: 14px;
        }
    }
</style>
<!-- Link Tambah Data Baru -->
<a href="?page=minumanAdd" class="add-data-link">[+] Tambah Data Baru</a>
<!-- Tabel Data Minuman -->
<table>
    <thead>
        <tr>
            <th>No</th>
            <th>Nama Minuman</th>
            <th>Daerah Minuman</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        <?php
        include "includes/config.php";
        $query = "SELECT * FROM tbl_minuman ORDER BY id_minuman ASC";
        $sql = mysqli_query($conn, $query);
        $nomor = 1;
        if (mysqli_num_rows($sql) == 0) { ?>
            <tr>
                <td colspan="4"><i>No data</i></td>
            </tr>
        <?php } else {
            while ($data = mysqli_fetch_array($sql)) { ?>
                <tr>
                    <td><?= $nomor++; ?></td>
                    <td><?= htmlspecialchars($data["nama_minuman"]) ?></td>
                    <td><?= htmlspecialchars($data["daerah_minuman"]) ?></td>
                    <td>
                        <a href="?page=minumanUpdate&id=<?= $data['id_minuman']; ?>">Edit</a> |
                        <a href="?page=minumanDelete&id=<?= $data['id_minuman']; ?>" 
                           onclick="return confirm('Yakin ingin menghapus data ini?');">
                           Hapus</a>
                    </td>
                </tr>
            <?php }
        } ?>
    </tbody>
</table>
<!-- Menampilkan Total Data -->
<p>Total: <?= mysqli_num_rows($sql) ?></p>

<?php
    $barang = [
        [
            'nama_barang' => 'Pasta Gigi',
            'harga_barang' => 18000,
            'jumlah_beli' => 1,
        ],
        [
            'nama_barang' => 'Sabun Mandi',
            'harga_barang' => 5000,
            'jumlah_beli' => 3,
        ],
        [
            'nama_barang' => 'Aloe Vera Sheet Mask',
            'harga_barang' => 15000,
            'jumlah_beli' => 4,
        ]
    ];

    $total_harga = 0;

    echo "Daftar Belanjaan : <br>";

    foreach ($barang as $key => $value) {
        $total = $value['harga_barang'] * $value['jumlah_beli'];
        $total_harga += $total;
        echo ($key + 1) . ". " . $value['nama_barang'] . " : " . number_format($total, 0, ',', '.') . "<br>";
    }
    
    echo "Total Harga Yang Harus dibayar adalah : <b>Rp." . number_format($total_harga, 0, ',', '.') . "</b>";
?>


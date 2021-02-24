<?php
    function formatPrice($param){
        $returnedValue = "Rp. " . number_format($param,0,',','.');
        return $returnedValue;
    }
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Export - Data Penjualan Tokopidea</title>
    </head>
    <body>
        <div style="display: flex">
            <img src="data:image/png;base64,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" style="width: 80px; height: 80px" alt="Gambar">
            <h3 style="margin-left: 100px">Data Penjualan Tokopidea</h3>
        </div>
        <hr>
        <p style="margin: 15px 0 15px 0">Tanggal Generate : <?= $date ?></p>
        <table border="1" style="width: 100%">
            <thead>
                <tr>
                    <th>No Penjualan</th>
                    <th>Nama Pembeli</th>
                    <th>Total Penjualan</th>
                    <th>Total Ogkir</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($data_pjl as $index => $item) { ?>
                    <tr style="text-align: center">
                        <td><?= $item->id_penjualan ?></td>
                        <td><?= $item->nama ?></td>
                        <td><?= formatPrice($item->total_penjualan) ?></td>
                        <td><?= formatPrice($item->total_ongkir) ?></td>
                    </tr>
                <?php  } ?>
            </tbody>
        </table>
    </body>
</html>
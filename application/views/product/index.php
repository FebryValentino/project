<!-- strat content -->
<div class="bg-gray-100 flex-1 p-6 md:mt-16">

    <!-- Start Recent Sales -->
    <div class="card col-span-2 xl:col-span-1">
        <div class="card-header">
            <a href="<?= base_url('Product/tambah'); ?>" style="color:cornflowerblue;">
                <h2 class="btn-shadow mt-2 mb-3">Tambah Data Produk</h2>
            </a>
        </div>

        <table class="table-auto w-full text-center">
            <thead>
                <tr>
                    <th class="px-4 py-2 border-r" align="center">#</th>
                    <th class="px-20 py-4 border-r">Produk</th>
                    <th class="px-4 py-2 border-r">Kode</th>
                    <th class="px-10 py-2 border-r">Warna</th>
                    <th class="px-4 py-2 border-r">Ukuran</th>
                    <th class="px-10 py-2 border-r">Harga</th>
                    <th class="px-4 py-2 border-r">Stok</th>
                    <th class="px-4 py-2 border-r text-center">Gambar</th>
                    <th class="px-8 py-2 text-center">Pilihan</th>
                </tr>
            </thead>

            <tbody>
                <?php
                $a = 1;
                foreach ($product as $b) { ?>
                    <tr>
                        <th class="border border-l-0"><?= $a++; ?></th>
                        <td class=" border border-l-0 px-4 py-2"><?= $b["nama_produk"]; ?></td>
                        <td class="border border-l-0 px-4 py-2"> <?= $b["kode_produk"]; ?></td>
                        <td class="border border-l-0 px-4 py-2"> <?= $b["warna"]; ?></td>
                        <td class="border border-l-0 px-4 py-2"> <?= $b["ukuran"]; ?></td>
                        <td class="border border-l-0 px-4 py-2"> <?= $b["harga"]; ?></td>
                        <td class="border border-l-0 px-4 py-2"> <?= $b["stok"]; ?></td>
                        <td class="border border-l-0 px-4 py-2">
                            <img src="<?= base_url('assets/img/upload/') . $b['image']; ?>" width="70" alt="gambar">
                        </td>
                        <td class="border border-l-0 border-r-0 px-3 py-2 text-center">
                            <a href="<?= base_url('Product/ubahProduct/') . $b['id']; ?>"><span class=" btn-bs-danger text-white badge bg-teal-400 text-m mb-1">
                                    Ubah
                                </span></a>
                            <a href="<?= base_url('Product/hapusProduct/') . $b['id']; ?>" onclick="return confirm('Kamu yakin akan menghapus  ?');"><span class="btn-bs-danger text-white badge bg-red-400 text-m">
                                    Hapus
                                </span></a>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
    <!-- End Recent Sales -->

</div>
<!-- end quick Info -->
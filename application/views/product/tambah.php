<!-- strat content -->
<div class="bg-gray-100 flex-1 p-6 md:mt-16">




    <!-- Start Recent Sales -->
    <div class="card col-span-2 xl:col-span-1">
        <div class="card-header h6">Tambah Data Produk</div>

        <form action="<?= base_url('Product/tambah'); ?>" method="post" enctype="multipart/form-data">
            <table class="table-auto w-full text-left ">

                <tr>
                    <td class="px-4 py-4 border-0 ">
                        <label for="nama_produk" style="margin:0px 0px 0px 240px; font-weight:bold;">Produk</label> <br> <input type="text" name="nama_produk" id="nama_produk" style="border: 1px solid; width:50%; padding:12px 10px; margin:10px 0px 0px 240px; border-radius:5px;" placeholder="Masukan nama produk">
                        <?= form_error('nama_produk', '<small class="text-danger pl-3" style="color:red;">', '</small>'); ?>
                    </td>
                </tr>

                <tr>
                    <td class="border-0 px-4 py-2 ">
                        <label for="kode_produk" style="margin:0px 0px 0px 240px; font-weight:bold;">Kode Produk</label> <br> <input type="text" name="kode_produk" id="kode_produk" style="border: 1px solid; width:50%; padding:12px 10px; margin:10px 0px 0px 240px; border-radius:5px;" placeholder="Masukan kode produk">
                        <?= form_error('kode_produk', '<small class="text-danger pl-3" style="color:red;">', '</small>'); ?>
                    </td>
                </tr>

                <tr>
                    <td class="border-0 px-4 py-2 ">
                        <label for="warna" style="margin:0px 0px 0px 240px; font-weight:bold;">Warna</label> <br>
                        <input type="text" name="warna" id="warna" style="border: 1px solid; width:50%; padding:12px 10px; margin:10px 0px 0px 240px; border-radius:5px;" placeholder="Masukan warna">
                        <?= form_error('warna', '<small class="text-danger pl-3" style="color:red;">', '</small>'); ?>
                    </td>
                </tr>

                <tr>
                    <td class="border-0 px-4 py-2 ">
                        <label for="ukuran" style="margin:0px 0px 0px 240px; font-weight:bold;">Ukuran</label> <br>
                        <input type="text" name="ukuran" id="ukuran" style="border: 1px solid; width:50%; padding:12px 10px; margin:10px 0px 0px 240px; border-radius:5px;" placeholder="Masukan ukuran">
                        <?= form_error('ukuran', '<small class="text-danger pl-3" style="color:red;">', '</small>'); ?>
                    </td>
                </tr>

                <tr>
                    <td class="border-0 px-4 py-2 ">
                        <label for="harga" style="margin:0px 0px 0px 240px; font-weight:bold;">Harga</label> <br>
                        <input type="text" name="harga" id="harga" style="border: 1px solid; width:50%; padding:12px 10px; margin:10px 0px 0px 240px; border-radius:5px;" placeholder="Masukan harga">
                        <?= form_error('harga', '<small class="text-danger pl-3" style="color:red;">', '</small>'); ?>
                    </td>
                </tr>

                <tr>
                    <td class="border-0 px-4 py-2 ">
                        <label for="stok" style="margin:0px 0px 0px 240px; font-weight:bold;">Stok</label> <br>
                        <input type="text" name="stok" id="stok" style="border: 1px solid; width:50%; padding:12px 10px; margin:10px 0px 0px 240px; border-radius:5px;" placeholder="Masukan stok">
                        <?= form_error('stok', '<small class="text-danger pl-3" style="color:red;">', '</small>'); ?>
                    </td>
                </tr>

                <tr>
                    <td class="border-1 px-4 py-2 ">
                        <label for="image" style="margin:0px 0px 0px 240px; font-weight:bold;">Gambar</label> <br>
                        <input type="file" id="image" name="image" style="border: 1px solid; width:50%; padding:12px 10px; margin:10px 0px 10px 240px; border-radius:5px;">
                    </td>
                </tr>

            </table>
            <tr>

                <div class="card col-span-2 xl:col-span-1 border-l-0 border-b-0 border-r-0 text-center">
                    <div class="card-header">
                        <button type="submit" name="submit">
                            <h2 class="btn-shadow mt-2 mb-3">Tambah Produk</h2>
                        </button>
                    </div>
                </div>
            </tr>
        </form>
    </div>

</div>
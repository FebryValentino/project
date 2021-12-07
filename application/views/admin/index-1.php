<!-- strat content -->
<div class="bg-gray-100 flex-1 p-6 md:mt-16">

    <!-- congrats & summary -->
    <div class="grid grid-cols-3 lg:grid-cols-1 gap-5">
        <!-- congrats -->
        <div class="card col-span-1">

            <div class="card-body h-full flex flex-col justify-between">

                <div>
                    <h1 class="text-lg font-bold tracking-wide">Congratulations <?= $user['nama']; ?></h1>
                    <p class="text-gray-600 mt-2">Best seller Bulan ini :</p>
                </div>

                <div class="flex flex-row mt-10 items-end">

                    <div class="flex-1">
                        <h1 class="font-extrabold text-teal-400" style="font-size:30px;">Rp 38.450.000</h1>
                        <p class="mt-3 mb-4 text-xs text-gray-500">Kamu telah menyelesaikan lebih dari 57.6% penjualan bulan ini.</p>
                        <a href="#" class="btn-shadow py-3">
                            Lihat
                        </a>
                    </div>

                    <div class="flex-1 ml-10 w-32 h-32 lg:w-auto lg:h-auto overflow-hidden">
                        <img class="object-cover" src="<?= base_url('assets/'); ?>img/congrats.svg">
                    </div>

                </div>

            </div>

        </div>
        <!-- end congrats -->
        <div class="card p-0 overflow-hidden col-span-2 lg:col-span-1 flex flex-row lg:flex-col">

            <!-- right -->
            <div class="border-r border-gray-200 w-2/3 lg:w-full lg:mb-5">

                <!-- top -->
                <div class="p-5 flex flex-row flex-wrap justify-between items-center">
                    <h2 class="font-bold text-lg">Ringkasan Order</h2>
                    <div class="flex flex-row justify-center items-center">
                        <a href="#" class="btn mr-4 text-sm py-2 block">Bulan</a>
                        <a href="#" class="btn-shadow text-sm py-2 block">Minggu</a>
                    </div>
                </div>
                <!-- end top -->

                <!-- chart -->
                <div id="SummaryChart"></div>
                <!-- end chart -->

            </div>
            <!-- end right -->

            <!-- left -->
            <div class="w-1/3 lg:w-full">

                <!-- top -->
                <div class="p-5 border-b border-gray-200">
                    <h2 class="font-bold text-lg mb-6">Riwayat Penjualan</h2>

                    <div class="flex flex-row justify-between mb-3">
                        <div class="">
                            <h4 class="text-gray-600 font-thin">Classic Trench Coat</h4>
                            <p class="text-gray-400 text-xs font-hairline">5 menit yang lalu</p>
                        </div>
                    </div>

                    <div class="flex flex-row justify-between mb-3">
                        <div class="">
                            <h4 class="text-gray-600 font-thin">Esprit Ruffle Shirt</h4>
                            <p class="text-gray-400 text-xs font-hairline">12 menit yang lalu</p>
                        </div>
                    </div>

                    <div class="flex flex-row justify-between">
                        <div class="">
                            <h4 class="text-gray-600 font-thin">Front Pocket Jumper</h4>
                            <p class="text-gray-400 text-xs font-hairline">21 menit yang lalu</p>
                        </div>
                    </div>

                </div>
                <!-- end top -->

                <!-- bottom -->
                <div class="p-5">
                    <h2 class="font-bold text-lg mb-2">Pemasukan</h2>
                    <strong class="text-teal-400 font-extrabold text-xl">Rp 12.450.000</strong>

                    <div class="bg-gray-300 h-2 rounded-full mt-2 relative">
                        <div class="rounded-full bg-teal-400 h-full w-3/4 shadow-md"></div>
                    </div>
                </div>
                <!-- end bottom -->

            </div>
            <!-- end left -->

        </div>



    </div>
    <!-- end congrats & summary -->

    <!-- status -->
    <div class="grid grid-cols-5 gap-5 mt-5 lg:grid-cols-2">

        <!-- status -->
        <div class="card col-span-1">
            <div class="card-body ">
                <h5 class="uppercase text-xs tracking-wider font-extrabold">Hari Ini</h5>
                <h1 class="capitalize text-lg mt-1 mb-1">Rp1.300.000</h1>
                <p class="capitalize text-xs text-gray-500">12 Order</p>
            </div>
        </div>
        <!-- status -->

        <!-- status -->
        <div class="card col-span-1">
            <div class="card-body">
                <h5 class="uppercase text-xs tracking-wider font-extrabold">kemarin</h5>
                <h1 class="capitalize text-lg mt-1 mb-1">Rp1.950.000 </h1>
                <p class="capitalize text-xs text-gray-500">19 Order</p>
            </div>
        </div>
        <!-- status -->

        <!-- status -->
        <div class="card col-span-1">
            <div class="card-body">
                <h5 class="uppercase text-xs tracking-wider font-extrabold">Minggu lalu</h5>
                <h1 class="capitalize text-lg mt-1 mb-1">Rp9.200.000 </h1>
                <p class="capitalize text-xs text-gray-500"> 45 Order</p>
            </div>
        </div>
        <!-- status -->

        <!-- status -->
        <div class="card col-span-1">
            <div class="card-body">
                <h5 class="uppercase text-xs tracking-wider font-extrabold">Bulan Lalu</h5>
                <h1 class="capitalize text-lg mt-1 mb-1">Rp 35.900.000</h1>
                <p class="capitalize text-xs text-gray-500">145 Order</p>
            </div>
        </div>
        <!-- status -->

        <!-- status -->
        <div class="card col-span-1 lg:col-span-2">
            <div class="card-body">
                <h5 class="uppercase text-xs tracking-wider font-extrabold">90 hari terakhir</h5>
                <h1 class="capitalize text-lg mt-1 mb-1">Rp 112.500.000</h1>
                <p class="capitalize text-xs text-gray-500">420 Order</p>
            </div>
        </div>
        <!-- status -->


    </div>
    <!-- end status -->

    <!-- best seller & traffic -->
    <div class="grid grid-cols-2 lg:grid-cols-1 gap-5 mt-5">
        <div class="card">

            <div class="card-body">
                <div class="flex flex-row justify-between items-center">
                    <h1 class="font-extrabold text-lg">best sellers</h1>
                    <a href="#" class="btn-gray text-sm">Lihat</a>
                </div>

                <table class="table-auto w-full mt-5 text-center">

                    <thead>
                        <tr>
                            <th class="py-4 font-extrabold text-sm" align="">#</th>
                            <th class="py-4 font-extrabold text-sm">Produk</th>
                            <th class="py-4 font-extrabold text-sm">Harga</th>
                            <th class="py-4 font-extrabold text-sm">Terjual</th>
                            <th class="py-4 font-extrabold text-sm text-center">Total</th>
                        </tr>
                    </thead>

                    <tbody>

                        <!-- item -->
                        <tr class="">
                            <td>1</td>
                            <td class="py-4 text-sm text-gray-600">
                                Classic Trench Coat
                            </td>
                            <td class="py-4 text-xs text-gray-600">Rp 450.000</td>
                            <td class="py-4 text-xs text-gray-600">120</td>
                            <td class="py-4 text-xs text-gray-600">Rp 54.000.000</td>
                        </tr>
                        <!-- end item -->

                        <!-- item -->
                        <tr class="">
                            <td>2</td>
                            <td class="py-4 text-sm text-gray-600">
                                Front Pocket Jumper
                            </td>
                            <td class="py-4 text-xs text-gray-600">Rp 200.000</td>
                            <td class="py-4 text-xs text-gray-600">98</td>
                            <td class="py-4 text-xs text-gray-600">Rp 19.600.000</td>
                        </tr>
                        <!-- end item -->

                        <!-- item -->
                        <tr class="">
                            <td>3</td>
                            <td class="py-4 text-sm text-gray-600">
                                Pieces Metalic Printed
                            </td>
                            <td class="py-4 text-xs text-gray-600">Rp 190.000</td>
                            <td class="py-4 text-xs text-gray-600">86</td>
                            <td class="py-4 text-xs text-gray-600">Rp 16.340.000</td>
                        </tr>
                        <!-- end item -->

                        <!-- item -->
                        <tr class="">
                            <td>4</td>
                            <td class="py-4 text-sm text-gray-600">
                                Esprit Ruffle Shirt
                            </td>
                            <td class="py-4 text-xs text-gray-600">Rp 150.000</td>
                            <td class="py-4 text-xs text-gray-600">79</td>
                            <td class="py-4 text-xs text-gray-600">Rp 11.850.000</td>
                        </tr>
                        <!-- end item -->

                        <tr class="">
                            <td>5</td>
                            <td class="py-4 text-sm text-gray-600">
                                Shirt In Strech Cotton
                            </td>
                            <td class="py-4 text-xs text-gray-600">Rp 250.000</td>
                            <td class="py-4 text-xs text-gray-600">55</td>
                            <td class="py-4 text-xs text-gray-600">Rp 13.750.000</td>
                        </tr>
                        <!-- end item -->

                    </tbody>

                </table>

            </div>
        </div>
        <div class="card">

            <div class="card-body">
                <h2 class="font-bold text-lg mb-10 mt-2">Order Terbaru</h2>


                <!-- start a table -->
                <table class="table-fixed w-full text-center">

                    <!-- table head -->
                    <thead class="text-center">
                        <tr>
                            <th class="w-1/2 pb-10 text-sm font-extrabold tracking-wide">customer</th>
                            <th class="w-1/4 pb-10 text-sm font-extrabold tracking-wide text-right">Produk</th>
                            <th class="w-1/4 pb-10 text-sm font-extrabold tracking-wide text-right">Invoice</th>
                            <th class="w-1/4 pb-10 text-sm font-extrabold tracking-wide text-right">Harga</th>
                            <th class="w-1/4 pb-10 text-sm font-extrabold tracking-wide text-right">status</th>
                        </tr>
                    </thead>
                    <!-- end table head -->

                    <!-- table body -->
                    <tbody class="text-left text-gray-600">

                        <!-- item -->
                        <tr>
                            <!-- name -->
                            <th class="w-1/2 mb-4 text-xs font-extrabold tracking-wider flex flex-row items-center w-full">
                                <div class="w-8 h-8 overflow-hidden rounded-full">
                                    <img src="<?= base_url('assets/'); ?>img/user2.jpg" class="object-cover">
                                </div>
                                <p class="ml-3">Dian Puji</p>
                            </th>
                            <!-- name -->

                            <!-- product -->
                            <th class="w-1/4 mb-4 text-xs font-extrabold tracking-wider text-right">Classic...</th>
                            <!-- product -->

                            <!-- invoice -->
                            <th class="w-1/4 mb-4 text-xs font-extrabold tracking-wider text-right">#5765</th>
                            <!-- invoice -->

                            <!-- price -->
                            <th class="w-1/4 mb-4 text-xs font-extrabold tracking-wider text-right">Rp450...</th>
                            <!-- price -->

                            <!-- status -->
                            <th class="w-1/4 mb-4 text-xs font-extrabold tracking-wider text-right">Menunggu</th>
                            <!-- status -->

                        </tr>
                        <!-- item -->


                        <!-- item -->
                        <tr>
                            <!-- name -->
                            <th class="w-1/2 mb-4 text-xs font-extrabold tracking-wider flex flex-row items-center w-full">
                                <div class="w-8 h-8 overflow-hidden rounded-full">
                                    <img src="<?= base_url('assets/'); ?>img/user3.jpg" class="object-cover">
                                </div>
                                <p class="ml-3 ">Wahyu Kur...</p>
                            </th>
                            <!-- name -->

                            <!-- product -->
                            <th class="w-1/4 mb-4 text-xs font-extrabold tracking-wider text-right">Front P...</th>
                            <!-- product -->

                            <!-- invoice -->
                            <th class="w-1/4 mb-4 text-xs font-extrabold tracking-wider text-right">#8695</th>
                            <!-- invoice -->

                            <!-- price -->
                            <th class="w-1/4 mb-4 text-xs font-extrabold tracking-wider text-right">Rp200...</th>
                            <!-- price -->

                            <!-- status -->
                            <th class="w-1/4 mb-4 text-xs font-extrabold tracking-wider text-right">Menunggu</th>
                            <!-- status -->

                        </tr>
                        <!-- item -->


                        <!-- item -->
                        <tr>
                            <!-- name -->
                            <th class="w-1/2 mb-4 text-xs font-extrabold tracking-wider flex flex-row items-center w-full">
                                <div class="w-8 h-8 overflow-hidden rounded-full">
                                    <img src="<?= base_url('assets/'); ?>img/user2.jpg" class="object-cover">
                                </div>
                                <p class="ml-3 ">Mitha Riy...</p>
                            </th>
                            <!-- name -->

                            <!-- product -->
                            <th class="w-1/4 mb-4 text-xs font-extrabold tracking-wider text-right">Pieces...</th>
                            <!-- product -->

                            <!-- invoice -->
                            <th class="w-1/4 mb-4 text-xs font-extrabold tracking-wider text-right">#1123</th>
                            <!-- invoice -->

                            <!-- price -->
                            <th class="w-1/4 mb-4 text-xs font-extrabold tracking-wider text-right">Rp190...</th>
                            <!-- price -->

                            <!-- status -->
                            <th class="w-1/4 mb-4 text-xs font-extrabold tracking-wider text-right">Menunggu</th>
                            <!-- status -->

                        </tr>
                        <!-- item -->

                        <!-- item -->
                        <tr>
                            <!-- name -->
                            <th class="w-1/2 mb-4 text-xs font-extrabold tracking-wider flex flex-row items-center w-full">
                                <div class="w-8 h-8 overflow-hidden rounded-full">
                                    <img src="<?= base_url('assets/'); ?>img/user1.jpg" class="object-cover">
                                </div>
                                <p class="ml-3 ">Edo Sanjaya</p>
                            </th>
                            <!-- name -->

                            <!-- product -->
                            <th class="w-1/4 mb-4 text-xs font-extrabold tracking-wider text-right">Front P...</th>
                            <!-- product -->

                            <!-- invoice -->
                            <th class="w-1/4 mb-4 text-xs font-extrabold tracking-wider text-right">#2123</th>
                            <!-- invoice -->

                            <!-- price -->
                            <th class="w-1/4 mb-4 text-xs font-extrabold tracking-wider text-right">Rp200...</th>
                            <!-- price -->

                            <!-- status -->
                            <th class="w-1/4 mb-4 text-xs font-extrabold tracking-wider text-right">Dikirim</th>
                            <!-- status -->

                        </tr>
                        <!-- item -->

                        <!-- item -->
                        <tr>
                            <!-- name -->
                            <th class="w-1/2 mb-4 text-xs font-extrabold tracking-wider flex flex-row items-center w-full">
                                <div class="w-8 h-8 overflow-hidden rounded-full">
                                    <img src="<?= base_url('assets/'); ?>img/user3.jpg" class="object-cover">
                                </div>
                                <p class="ml-3 ">Dafit Ca...</p>
                            </th>
                            <!-- name -->

                            <!-- product -->
                            <th class="w-1/4 mb-4 text-xs font-extrabold tracking-wider text-right">Classic...</th>
                            <!-- product -->

                            <!-- invoice -->
                            <th class="w-1/4 mb-4 text-xs font-extrabold tracking-wider text-right">#4352</th>
                            <!-- invoice -->

                            <!-- price -->
                            <th class="w-1/4 mb-4 text-xs font-extrabold tracking-wider text-right">Rp450...</th>
                            <!-- price -->

                            <!-- status -->
                            <th class="w-1/4 mb-4 text-xs font-extrabold tracking-wider text-right">Dikirim</th>
                            <!-- status -->

                        </tr>
                        <!-- item -->




                    </tbody>
                    <!-- end table body -->

                </table>
                <!-- end a table -->
            </div>

        </div>

    </div>
    <!-- end best seller & traffic -->


</div>
<!-- end content -->

</div>
<!-- end wrapper -->
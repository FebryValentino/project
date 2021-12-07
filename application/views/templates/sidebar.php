<!-- strat wrapper -->
<div class="h-screen flex flex-row flex-wrap">
    <!-- start sidebar -->
    <div id="sideBar" class="relative flex flex-col flex-wrap bg-white border-r border-gray-300 p-6 flex-none w-64 md:-ml-64 md:fixed md:top-0 md:z-30 md:h-screen md:shadow-xl animated faster">


        <!-- sidebar content -->
        <div class="flex flex-col">

            <!-- sidebar toggle -->
            <div class="text-right hidden md:block mb-4">
                <button id="sideBarHideBtn">
                    <i class="fad fa-times-circle"></i>
                </button>
            </div>
            <!-- end sidebar toggle -->

            <p class="uppercase text-xs text-gray-600 mb-4 tracking-wider">homes</p>

            <!-- link -->
            <a href="<?= base_url('Admin/index'); ?>" class="mb-3 capitalize font-medium text-sm hover:text-teal-600 transition ease-in-out duration-500">
                <i class="fad fa-chart-pie text-xs mr-2"></i>
                Analisa dashboard
            </a>
            <!-- end link -->

            <!-- link -->
            <a href="<?= base_url('Admin/index_1'); ?>" class="mb-3 capitalize font-medium text-sm hover:text-teal-600 transition ease-in-out duration-500">
                <i class="fad fa-shopping-cart text-xs mr-2"></i>
                Ecommerce dashboard
            </a>

            <!-- link -->
            <a href="<?= base_url('Product'); ?>" class="mb-3 capitalize font-medium text-sm hover:text-teal-600 transition ease-in-out duration-500">
                <i class="fas fa-tshirt text-xs mr-2"></i>
                Produk dashboard
            </a>
            <!-- end link -->

            <p class="uppercase text-xs text-gray-600 mb-4 mt-4 tracking-wider">apps</p>

            <!-- link -->
            <a href="<?= base_url('Admin/email'); ?>" class="mb-3 capitalize font-medium text-sm hover:text-teal-600 transition ease-in-out duration-500">
                <i class="fad fa-envelope-open-text text-xs mr-2"></i>
                email
            </a>
            <!-- end link -->

            <!-- link -->
            <a href="<?= base_url('Admin/invoice'); ?>" class="mb-3 capitalize font-medium text-sm hover:text-teal-600 transition ease-in-out duration-500">
                <i class="fad fa-file-invoice-dollar text-xs mr-2"></i>
                invoice
            </a>
            <!-- end link -->




        </div>
        <!-- end sidebar content -->

    </div>
    <!-- end sidbar --
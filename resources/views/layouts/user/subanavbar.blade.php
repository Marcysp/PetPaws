<div class="fixed bg-white top-[74px] w-4/5 px-4 shadow-md flex justify-center items-center mr-3 h-16">
    <div class="w-full justify-center">
        <div class="items-center justify-between relative mx-auto">
            <div class="flex items-center px-1 mx-3">
                <nav class=" rounded-md w-full right-0 top-full lg:static lg:block lg:bg-transparent lg:max-w-full lg:shadow-none bg-white">
                    <ul class="flex justify-center">
                        <li class="group">
                            <a href="#" onclick="filterContent('all')" class="text-base text-black py-2 mx-4 flex group-hover:text-purple-700">Semua</a>
                        </li>
                        <li class="group">
                            <a href="#/unpiad" onclick="filterContent('unpaid')" class="text-base text-black py-2 mx-4 flex group-hover:text-purple-700">Belum Bayar</a>
                        </li>
                        <li class="group">
                            <a href="#/inProgress" onclick="filterContent('proses')" class="text-base text-black py-2 mx-4 flex group-hover:text-purple-700">Proses</a>
                        </li>
                        <li class="group">
                            <a href="#/success" onclick="filterContent('terlayani')" class="text-base text-black py-2 mx-4 flex group-hover:text-purple-700">Selesai</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</div>

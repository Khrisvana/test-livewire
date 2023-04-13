<aside
    class="flex flex-col w-64 h-screen px-5 py-8 overflow-y-auto bg-sky-800 border-r rtl:border-r-0 rtl:border-l dark:bg-gray-900 dark:border-gray-700">
    <a href="#" class="p-3 font-bold text-lg rounded bg-white text-center">
        LOGO
    </a>

    <div class="flex flex-col justify-between flex-1 mt-6">
        <nav class="-mx-3 space-y-2">
            <a class="flex items-center p-3 text-white transition-colors duration-300 transform rounded hover:bg-gray-100 hover:text-gray-700"
                href="#">
                <span class="mx-2 text-sm font-medium">Dashboard</span>
            </a>

            <a class="flex items-center p-3 text-white transition-colors duration-300 transform rounded hover:bg-gray-100 hover:text-gray-700"
                href="#">
                <span class="mx-2 text-sm font-medium">Rates</span>
            </a>
            <a class="flex items-center p-3 text-white transition-colors duration-300 transform rounded hover:bg-gray-100 hover:text-gray-700"
                href="#">
                <span class="mx-2 text-sm font-medium">Availability</span>
            </a>

            <a class="flex items-center p-3 text-white transition-colors duration-300 transform rounded hover:bg-gray-100 hover:text-gray-700"
                href="#">
                <span class="mx-2 text-sm font-medium">Reservations</span>
            </a>

            <a class="flex items-center p-3 text-white transition-colors duration-300 transform rounded hover:bg-gray-100 hover:text-gray-700"
                href="#">
                <span class="mx-2 text-sm font-medium">Guest</span>
            </a>
            <div x-data="{ open: false }" class="space-y-2">
                <a @click="open = ! open"
                    class="flex items-center justify-between p-3 text-white transition-colors duration-300 transform rounded hover:bg-gray-100 hover:text-gray-700"
                    href="#">
                    <span class="mx-2 text-sm font-medium">Purchasing</span>
                    <svg :class="open ? '' : 'rotate-180'" class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/> </svg>
                </a>

                <div class="ml-6" x-show="open">
                    <a class="flex items-center p-3 text-white transition-colors duration-300 transform rounded hover:bg-gray-100 hover:text-gray-700"
                        href="#">
                        <span class="mx-2 text-sm font-medium">Purchase Request</span>
                    </a>
                </div>

                <div class="ml-6" x-show="open">
                    <a class="flex items-center p-3 text-white transition-colors duration-300 transform rounded hover:bg-gray-100 hover:text-gray-700"
                        href="#">
                        <span class="mx-2 text-sm font-medium">Purchase Order</span>
                    </a>
                </div>

                <div class="ml-6" x-show="open">
                    <a class="flex items-center p-3 text-white transition-colors duration-300 transform rounded hover:bg-gray-100 hover:text-gray-700"
                        href="#">
                        <span class="mx-2 text-sm font-medium">Store Order</span>
                    </a>
                </div>

                <div class="ml-6" x-show="open">
                    <a class="flex items-center p-3 text-white transition-colors duration-300 transform rounded hover:bg-gray-100 hover:text-gray-700"
                        href="#">
                        <span class="mx-2 text-sm font-medium">Receiving</span>
                    </a>
                </div>

                <div class="ml-6" x-show="open">
                    <a class="flex items-center p-3 text-white transition-colors duration-300 transform rounded hover:bg-gray-100 hover:text-gray-700"
                        href="#">
                        <span class="mx-2 text-sm font-medium">Inventory</span>
                    </a>
                </div>

                <div class="ml-6" x-show="open">
                    <a class="flex items-center p-3 text-white transition-colors duration-300 transform rounded hover:bg-gray-100 hover:text-gray-700"
                        href="#">
                        <span class="mx-2 text-sm font-medium">Stock Opname</span>
                    </a>
                </div>

                <div class="ml-6" x-show="open">
                    <a class="flex items-center p-3 text-white transition-colors duration-300 transform rounded hover:bg-gray-100 hover:text-gray-700"
                        href="#">
                        <span class="mx-2 text-sm font-medium">Payment Setting</span>
                    </a>
                </div>
            </div>

            <a class="flex items-center p-3 text-white transition-colors duration-300 transform rounded hover:bg-gray-100 hover:text-gray-700"
                href="#">
                <span class="mx-2 text-sm font-medium">Other</span>
            </a>
        </nav>
    </div>
</aside>

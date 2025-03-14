<div class="flex w-80 flex-col overflow-hidden rounded-xl border bg-white shadow-lg">
    <!-- Calendar -->
    <div class="space-y-0.5 p-3">
        <!-- Months -->
        <div class="mx-1.5 grid grid-cols-5 items-center gap-x-3 pb-3">
            <!-- Prev Button -->
            <div class="col-span-1">
                <button type="button"
                    class="flex size-8 items-center justify-center rounded-full text-gray-800 hover:bg-gray-100 focus:bg-gray-100 focus:outline-none disabled:pointer-events-none disabled:opacity-50"
                    aria-label="Previous">
                    <svg class="size-4 shrink-0" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round">
                        <path d="m15 18-6-6 6-6" />
                    </svg>
                </button>
            </div>
            <!-- End Prev Button -->

            <!-- Month / Year -->
            <div class="col-span-3 flex items-center justify-center gap-x-1">
                <div class="relative">
                    <select
                        data-hs-select='{
                "placeholder": "Select month",
                "toggleTag": "<button type=\"button\" aria-expanded=\"false\"></button>",
                "toggleClasses": "hs-select-disabled:pointer-events-none hs-select-disabled:opacity-50 relative flex text-nowrap w-full cursor-pointer text-start font-medium text-gray-800 hover:text-blue-600 focus:outline-none focus:text-blue-600 before:absolute before:inset-0 before:z-[1] dark:text-neutral-200 dark:hover:text-blue-500 dark:focus:text-blue-500",
                "dropdownClasses": "mt-2 z-50 w-32 max-h-72 p-1 space-y-0.5 bg-white border border-gray-200 rounded-lg shadow-lg overflow-hidden overflow-y-auto [&::-webkit-scrollbar]:w-2 [&::-webkit-scrollbar-thumb]:rounded-full [&::-webkit-scrollbar-track]:bg-gray-100 [&::-webkit-scrollbar-thumb]:bg-gray-300 dark:[&::-webkit-scrollbar-track]:bg-neutral-700 dark:[&::-webkit-scrollbar-thumb]:bg-neutral-500  ",
                "optionClasses": "p-2 w-full text-sm text-gray-800 cursor-pointer hover:bg-gray-100 rounded-lg focus:outline-none focus:bg-gray-100 dark:bg-neutral-900 dark:hover:bg-neutral-800 dark:text-neutral-200 dark:focus:bg-neutral-800",
                "optionTemplate": "<div class=\"flex justify-between items-center w-full\"><span data-title></span><span class=\"hidden hs-selected:block\"><svg class=\"shrink-0 size-3.5 text-gray-800 dark:text-neutral-200\" xmlns=\"http:.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\"><polyline points=\"20 6 9 17 4 12\"/></svg></span></div>"
              }'
                        class="hidden">
                        <option value="0">January</option>
                        <option value="1">February</option>
                        <option value="2">March</option>
                        <option value="3">April</option>
                        <option value="4">May</option>
                        <option value="5">June</option>
                        <option value="6" selected>July</option>
                        <option value="7">August</option>
                        <option value="8">September</option>
                        <option value="9">October</option>
                        <option value="10">November</option>
                        <option value="11">December</option>
                    </select>
                </div>

                <span class="text-gray-800 dark:text-neutral-200">/</span>

                <div class="relative">
                    <select
                        data-hs-select='{
                "placeholder": "Select year",
                "toggleTag": "<button type=\"button\" aria-expanded=\"false\"></button>",
                "toggleClasses": "hs-select-disabled:pointer-events-none hs-select-disabled:opacity-50 relative flex text-nowrap w-full cursor-pointer text-start font-medium text-gray-800 hover:text-blue-600 focus:outline-none focus:text-blue-600 before:absolute before:inset-0 before:z-[1] dark:text-neutral-200 dark:hover:text-blue-500 dark:focus:text-blue-500",
                "dropdownClasses": "mt-2 z-50 w-20 max-h-72 p-1 space-y-0.5 bg-white border border-gray-200 rounded-lg shadow-lg overflow-hidden overflow-y-auto [&::-webkit-scrollbar]:w-2 [&::-webkit-scrollbar-thumb]:rounded-full [&::-webkit-scrollbar-track]:bg-gray-100 [&::-webkit-scrollbar-thumb]:bg-gray-300 dark:[&::-webkit-scrollbar-track]:bg-neutral-700 dark:[&::-webkit-scrollbar-thumb]:bg-neutral-500  ",
                "optionClasses": "p-2 w-full text-sm text-gray-800 cursor-pointer hover:bg-gray-100 rounded-lg focus:outline-none focus:bg-gray-100 dark:bg-neutral-900 dark:hover:bg-neutral-800 dark:text-neutral-200 dark:focus:bg-neutral-800",
                "optionTemplate": "<div class=\"flex justify-between items-center w-full\"><span data-title></span><span class=\"hidden hs-selected:block\"><svg class=\"shrink-0 size-3.5 text-gray-800 dark:text-neutral-200\" xmlns=\"http:.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\"><polyline points=\"20 6 9 17 4 12\"/></svg></span></div>"
              }'
                        class="hidden">
                        <option selected>2023</option>
                        <option>2024</option>
                        <option>2025</option>
                        <option>2026</option>
                        <option>2027</option>
                    </select>
                </div>
            </div>
            <!-- End Month / Year -->

            <!-- Next Button -->
            <div class="col-span-1 flex justify-end">
                <button type="button"
                    class="flex size-8 items-center justify-center rounded-full text-gray-800 hover:bg-gray-100 focus:bg-gray-100 focus:outline-none disabled:pointer-events-none disabled:opacity-50"
                    aria-label="Next">
                    <svg class="size-4 shrink-0" width="24" height="24" viewBox="0 0 24 24" fill="none"
                        stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="m9 18 6-6-6-6" />
                    </svg>
                </button>
            </div>
            <!-- End Next Button -->
        </div>
        <!-- Months -->

        <!-- Weeks -->
        <div class="flex pb-1.5">
            <span class="m-px block w-10 text-center text-sm text-gray-500 dark:text-neutral-500">
                Mo
            </span>
            <span class="m-px block w-10 text-center text-sm text-gray-500 dark:text-neutral-500">
                Tu
            </span>
            <span class="m-px block w-10 text-center text-sm text-gray-500 dark:text-neutral-500">
                We
            </span>
            <span class="m-px block w-10 text-center text-sm text-gray-500 dark:text-neutral-500">
                Th
            </span>
            <span class="m-px block w-10 text-center text-sm text-gray-500 dark:text-neutral-500">
                Fr
            </span>
            <span class="m-px block w-10 text-center text-sm text-gray-500 dark:text-neutral-500">
                Sa
            </span>
            <span class="m-px block w-10 text-center text-sm text-gray-500 dark:text-neutral-500">
                Su
            </span>
        </div>
        <!-- Weeks -->

        <!-- Days -->
        <div class="flex">
            <div>
                <button type="button"
                    class="m-px flex size-10 items-center justify-center rounded-full border border-transparent text-sm text-gray-800 hover:border-blue-600 hover:text-blue-600 focus:border-blue-600 focus:text-blue-600 focus:outline-none disabled:pointer-events-none disabled:opacity-50 dark:text-neutral-200"
                    disabled>
                    26
                </button>
            </div>
            <div>
                <button type="button"
                    class="m-px flex size-10 items-center justify-center rounded-full border border-transparent text-sm text-gray-800 hover:border-blue-600 hover:text-blue-600 focus:border-blue-600 focus:text-blue-600 focus:outline-none disabled:pointer-events-none disabled:opacity-50 dark:text-neutral-200"
                    disabled>
                    27
                </button>
            </div>
            <div>
                <button type="button"
                    class="m-px flex size-10 items-center justify-center rounded-full border border-transparent text-sm text-gray-800 hover:border-blue-600 hover:text-blue-600 focus:border-blue-600 focus:text-blue-600 focus:outline-none disabled:pointer-events-none disabled:opacity-50 dark:text-neutral-200"
                    disabled>
                    28
                </button>
            </div>
            <div>
                <button type="button"
                    class="m-px flex size-10 items-center justify-center rounded-full border border-transparent text-sm text-gray-800 hover:border-blue-600 hover:text-blue-600 focus:border-blue-600 focus:text-blue-600 focus:outline-none disabled:pointer-events-none disabled:opacity-50 dark:text-neutral-200"
                    disabled>
                    29
                </button>
            </div>
            <div>
                <button type="button"
                    class="m-px flex size-10 items-center justify-center rounded-full border border-transparent text-sm text-gray-800 hover:border-blue-600 hover:text-blue-600 focus:border-blue-600 focus:text-blue-600 focus:outline-none disabled:pointer-events-none disabled:opacity-50 dark:text-neutral-200"
                    disabled>
                    30
                </button>
            </div>
            <div>
                <button type="button"
                    class="m-px flex size-10 items-center justify-center rounded-full border border-transparent text-sm text-gray-800 hover:border-blue-600 hover:text-blue-600 focus:border-blue-600 focus:text-blue-600 focus:outline-none disabled:pointer-events-none disabled:opacity-50 dark:text-neutral-200">
                    1
                </button>
            </div>
            <div>
                <button type="button"
                    class="m-px flex size-10 items-center justify-center rounded-full border border-transparent text-sm text-gray-800 hover:border-blue-600 hover:text-blue-600 focus:border-blue-600 focus:text-blue-600 focus:outline-none disabled:pointer-events-none disabled:opacity-50 dark:text-neutral-200">
                    2
                </button>
            </div>
        </div>
        <!-- Days -->

        <!-- Days -->
        <div class="flex">
            <div>
                <button type="button"
                    class="m-px flex size-10 items-center justify-center rounded-full border border-transparent text-sm text-gray-800 hover:border-blue-600 hover:text-blue-600 focus:border-blue-600 focus:text-blue-600 focus:outline-none disabled:pointer-events-none disabled:opacity-50 dark:text-neutral-200">
                    3
                </button>
            </div>
            <div>
                <button type="button"
                    class="m-px flex size-10 items-center justify-center rounded-full border border-transparent text-sm text-gray-800 hover:border-blue-600 hover:text-blue-600 focus:border-blue-600 focus:text-blue-600 focus:outline-none disabled:pointer-events-none disabled:opacity-50 dark:text-neutral-200">
                    4
                </button>
            </div>
            <div>
                <button type="button"
                    class="m-px flex size-10 items-center justify-center rounded-full border border-transparent text-sm text-gray-800 hover:border-blue-600 hover:text-blue-600 focus:border-blue-600 focus:text-blue-600 focus:outline-none disabled:pointer-events-none disabled:opacity-50 dark:text-neutral-200">
                    5
                </button>
            </div>
            <div>
                <button type="button"
                    class="m-px flex size-10 items-center justify-center rounded-full border border-transparent text-sm text-gray-800 hover:border-blue-600 hover:text-blue-600 focus:border-blue-600 focus:text-blue-600 focus:outline-none disabled:pointer-events-none disabled:opacity-50 dark:text-neutral-200">
                    6
                </button>
            </div>
            <div>
                <button type="button"
                    class="m-px flex size-10 items-center justify-center rounded-full border border-transparent text-sm text-gray-800 hover:border-blue-600 hover:text-blue-600 focus:border-blue-600 focus:text-blue-600 focus:outline-none disabled:pointer-events-none disabled:opacity-50 dark:text-neutral-200">
                    7
                </button>
            </div>
            <div>
                <button type="button"
                    class="m-px flex size-10 items-center justify-center rounded-full border border-transparent text-sm text-gray-800 hover:border-blue-600 hover:text-blue-600 focus:border-blue-600 focus:text-blue-600 focus:outline-none disabled:pointer-events-none disabled:opacity-50 dark:text-neutral-200">
                    8
                </button>
            </div>
            <div>
                <button type="button"
                    class="m-px flex size-10 items-center justify-center rounded-full border border-transparent text-sm text-gray-800 hover:border-blue-600 hover:text-blue-600 focus:border-blue-600 focus:text-blue-600 focus:outline-none disabled:pointer-events-none disabled:opacity-50 dark:text-neutral-200">
                    9
                </button>
            </div>
        </div>
        <!-- Days -->

        <!-- Days -->
        <div class="flex">
            <div>
                <button type="button"
                    class="m-px flex size-10 items-center justify-center rounded-full border border-transparent text-sm text-gray-800 hover:border-blue-600 hover:text-blue-600 focus:border-blue-600 focus:text-blue-600 focus:outline-none disabled:pointer-events-none disabled:opacity-50 dark:text-neutral-200">
                    10
                </button>
            </div>
            <div>
                <button type="button"
                    class="m-px flex size-10 items-center justify-center rounded-full border border-transparent text-sm text-gray-800 hover:border-blue-600 hover:text-blue-600 focus:border-blue-600 focus:text-blue-600 focus:outline-none disabled:pointer-events-none disabled:opacity-50 dark:text-neutral-200">
                    11
                </button>
            </div>
            <div>
                <button type="button"
                    class="m-px flex size-10 items-center justify-center rounded-full border border-transparent text-sm text-gray-800 hover:border-blue-600 hover:text-blue-600 focus:border-blue-600 focus:text-blue-600 focus:outline-none disabled:pointer-events-none disabled:opacity-50 dark:text-neutral-200">
                    12
                </button>
            </div>
            <div>
                <button type="button"
                    class="m-px flex size-10 items-center justify-center rounded-full border border-transparent text-sm text-gray-800 hover:border-blue-600 hover:text-blue-600 focus:border-blue-600 focus:text-blue-600 focus:outline-none disabled:pointer-events-none disabled:opacity-50 dark:text-neutral-200">
                    13
                </button>
            </div>
            <div>
                <button type="button"
                    class="m-px flex size-10 items-center justify-center rounded-full border border-transparent text-sm text-gray-800 hover:border-blue-600 hover:text-blue-600 focus:border-blue-600 focus:text-blue-600 focus:outline-none disabled:pointer-events-none disabled:opacity-50 dark:text-neutral-200">
                    14
                </button>
            </div>
            <div>
                <button type="button"
                    class="m-px flex size-10 items-center justify-center rounded-full border border-transparent text-sm text-gray-800 hover:border-blue-600 hover:text-blue-600 focus:border-blue-600 focus:text-blue-600 focus:outline-none disabled:pointer-events-none disabled:opacity-50 dark:text-neutral-200">
                    15
                </button>
            </div>
            <div>
                <button type="button"
                    class="m-px flex size-10 items-center justify-center rounded-full border border-transparent text-sm text-gray-800 hover:border-blue-600 hover:text-blue-600 focus:border-blue-600 focus:text-blue-600 focus:outline-none disabled:pointer-events-none disabled:opacity-50 dark:text-neutral-200">
                    16
                </button>
            </div>
        </div>
        <!-- Days -->

        <!-- Days -->
        <div class="flex">
            <div>
                <button type="button"
                    class="m-px flex size-10 items-center justify-center rounded-full border border-transparent text-sm text-gray-800 hover:border-blue-600 hover:text-blue-600 focus:border-blue-600 focus:text-blue-600 focus:outline-none disabled:pointer-events-none disabled:opacity-50 dark:text-neutral-200">
                    17
                </button>
            </div>
            <div>
                <button type="button"
                    class="m-px flex size-10 items-center justify-center rounded-full border border-transparent text-sm text-gray-800 hover:border-blue-600 hover:text-blue-600 focus:border-blue-600 focus:text-blue-600 focus:outline-none disabled:pointer-events-none disabled:opacity-50 dark:text-neutral-200">
                    18
                </button>
            </div>
            <div>
                <button type="button"
                    class="m-px flex size-10 items-center justify-center rounded-full border border-transparent text-sm text-gray-800 hover:border-blue-600 hover:text-blue-600 focus:border-blue-600 focus:text-blue-600 focus:outline-none disabled:pointer-events-none disabled:opacity-50 dark:text-neutral-200">
                    19
                </button>
            </div>
            <div>
                <button type="button"
                    class="m-px flex size-10 items-center justify-center rounded-full border border-transparent bg-blue-600 text-sm font-medium text-white hover:border-blue-600 focus:bg-gray-100 focus:outline-none disabled:pointer-events-none disabled:opacity-50 dark:bg-blue-500 dark:hover:border-neutral-700">
                    20
                </button>
            </div>
            <div>
                <button type="button"
                    class="m-px flex size-10 items-center justify-center rounded-full border border-transparent text-sm text-gray-800 hover:border-blue-600 hover:text-blue-600 focus:border-blue-600 focus:text-blue-600 focus:outline-none disabled:pointer-events-none disabled:opacity-50 dark:text-neutral-200">
                    21
                </button>
            </div>
            <div>
                <button type="button"
                    class="m-px flex size-10 items-center justify-center rounded-full border border-transparent text-sm text-gray-800 hover:border-blue-600 hover:text-blue-600 focus:border-blue-600 focus:text-blue-600 focus:outline-none disabled:pointer-events-none disabled:opacity-50 dark:text-neutral-200">
                    22
                </button>
            </div>
            <div>
                <button type="button"
                    class="m-px flex size-10 items-center justify-center rounded-full border border-transparent text-sm text-gray-800 hover:border-blue-600 hover:text-blue-600 focus:border-blue-600 focus:text-blue-600 focus:outline-none disabled:pointer-events-none disabled:opacity-50 dark:text-neutral-200">
                    23
                </button>
            </div>
        </div>
        <!-- Days -->

        <!-- Days -->
        <div class="flex">
            <div>
                <button type="button"
                    class="m-px flex size-10 items-center justify-center rounded-full border border-transparent text-sm text-gray-800 hover:border-blue-600 hover:text-blue-600 focus:border-blue-600 focus:text-blue-600 focus:outline-none disabled:pointer-events-none disabled:opacity-50 dark:text-neutral-200">
                    24
                </button>
            </div>
            <div>
                <button type="button"
                    class="m-px flex size-10 items-center justify-center rounded-full border border-transparent text-sm text-gray-800 hover:border-blue-600 hover:text-blue-600 focus:border-blue-600 focus:text-blue-600 focus:outline-none disabled:pointer-events-none disabled:opacity-50 dark:text-neutral-200">
                    25
                </button>
            </div>
            <div>
                <button type="button"
                    class="m-px flex size-10 items-center justify-center rounded-full border border-transparent text-sm text-gray-800 hover:border-blue-600 hover:text-blue-600 focus:border-blue-600 focus:text-blue-600 focus:outline-none disabled:pointer-events-none disabled:opacity-50 dark:text-neutral-200">
                    26
                </button>
            </div>
            <div>
                <button type="button"
                    class="m-px flex size-10 items-center justify-center rounded-full border border-transparent text-sm text-gray-800 hover:border-blue-600 hover:text-blue-600 focus:border-blue-600 focus:text-blue-600 focus:outline-none disabled:pointer-events-none disabled:opacity-50 dark:text-neutral-200">
                    27
                </button>
            </div>
            <div>
                <button type="button"
                    class="m-px flex size-10 items-center justify-center rounded-full border border-transparent text-sm text-gray-800 hover:border-blue-600 hover:text-blue-600 focus:border-blue-600 focus:text-blue-600 focus:outline-none disabled:pointer-events-none disabled:opacity-50 dark:text-neutral-200">
                    28
                </button>
            </div>
            <div>
                <button type="button"
                    class="m-px flex size-10 items-center justify-center rounded-full border border-transparent text-sm text-gray-800 hover:border-blue-600 hover:text-blue-600 focus:border-blue-600 focus:text-blue-600 focus:outline-none disabled:pointer-events-none disabled:opacity-50 dark:text-neutral-200">
                    29
                </button>
            </div>
            <div>
                <button type="button"
                    class="m-px flex size-10 items-center justify-center rounded-full border border-transparent text-sm text-gray-800 hover:border-blue-600 hover:text-blue-600 focus:border-blue-600 focus:text-blue-600 focus:outline-none disabled:pointer-events-none disabled:opacity-50 dark:text-neutral-200">
                    30
                </button>
            </div>
        </div>
        <!-- Days -->

        <!-- Days -->
        <div class="flex">
            <div>
                <button type="button"
                    class="m-px flex size-10 items-center justify-center rounded-full border border-transparent text-sm text-gray-800 hover:border-blue-600 hover:text-blue-600 focus:border-blue-600 focus:text-blue-600 focus:outline-none disabled:pointer-events-none disabled:opacity-50 dark:text-neutral-200">
                    31
                </button>
            </div>
            <div>
                <button type="button"
                    class="m-px flex size-10 items-center justify-center rounded-full border border-transparent text-sm text-gray-800 hover:border-blue-600 hover:text-blue-600 focus:bg-gray-100 focus:outline-none disabled:pointer-events-none disabled:opacity-50 dark:text-neutral-200 dark:hover:border-neutral-500 dark:focus:bg-neutral-700"
                    disabled>
                    1
                </button>
            </div>
            <div>
                <button type="button"
                    class="m-px flex size-10 items-center justify-center rounded-full border border-transparent text-sm text-gray-800 hover:border-blue-600 hover:text-blue-600 focus:bg-gray-100 focus:outline-none disabled:pointer-events-none disabled:opacity-50 dark:text-neutral-200 dark:hover:border-neutral-500 dark:focus:bg-neutral-700"
                    disabled>
                    2
                </button>
            </div>
            <div>
                <button type="button"
                    class="m-px flex size-10 items-center justify-center rounded-full border border-transparent text-sm text-gray-800 hover:border-blue-600 hover:text-blue-600 focus:bg-gray-100 focus:outline-none disabled:pointer-events-none disabled:opacity-50 dark:text-neutral-200 dark:hover:border-neutral-500 dark:focus:bg-neutral-700"
                    disabled>
                    3
                </button>
            </div>
            <div>
                <button type="button"
                    class="m-px flex size-10 items-center justify-center rounded-full border border-transparent text-sm text-gray-800 hover:border-blue-600 hover:text-blue-600 focus:bg-gray-100 focus:outline-none disabled:pointer-events-none disabled:opacity-50 dark:text-neutral-200 dark:hover:border-neutral-500 dark:focus:bg-neutral-700"
                    disabled>
                    4
                </button>
            </div>
            <div>
                <button type="button"
                    class="m-px flex size-10 items-center justify-center rounded-full border border-transparent text-sm text-gray-800 hover:border-blue-600 hover:text-blue-600 focus:bg-gray-100 focus:outline-none disabled:pointer-events-none disabled:opacity-50 dark:text-neutral-200 dark:hover:border-neutral-500 dark:focus:bg-neutral-700"
                    disabled>
                    5
                </button>
            </div>
            <div>
                <button type="button"
                    class="m-px flex size-10 items-center justify-center rounded-full border border-transparent text-sm text-gray-800 hover:border-blue-600 hover:text-blue-600 focus:bg-gray-100 focus:outline-none disabled:pointer-events-none disabled:opacity-50 dark:text-neutral-200 dark:hover:border-neutral-500 dark:focus:bg-neutral-700"
                    disabled>
                    6
                </button>
            </div>
        </div>
        <!-- Days -->
    </div>
</div>

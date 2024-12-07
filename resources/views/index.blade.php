{{-- <table>
    <tr>
        <th>Name</th>
        <th>Price</th>
        <th>Quantity</th>
        <th>Actions</th>
    </tr>
    @foreach ($products as $product)
        <tr>
            <td>{{ $product->name }}</td>
            <td>{{ $product->price }}</td>
            <td>{{ $product->quantity }}</td>
            <td>
                <a href="{{ url('products/' . $product->id . '/edit') }}">Edit</a>
                <form action="{{ url('products/' . $product->id) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Delete</button>
                </form>
            </td>
        </tr>
    @endforeach
</table> --}}



<!doctype html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body>
    <div class="container mx-auto">
        <div class="overflow-x-auto font-[sans-serif]">
            <h1 class="text-4xl font-semibold underline italic text-center flex justify-center text-blue-500 my-6">CRUD
            </h1>

            <!-- Container for button and search bar -->
            <div class="flex justify-around items-center mb-4">
                <!-- Add Product Button with URL -->
                <a href="/products/create">
                    <button type="button"
                        class="px-5 py-2.5 rounded-lg text-white text-sm tracking-wider font-medium border border-current outline-none bg-gradient-to-tr hover:bg-gradient-to-tl from-blue-700 to-blue-300 flex items-center space-x-2">
                        <!-- "+" Icon (SVG) -->
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="16px" height="16px"
                            class="fill-white">
                            <path
                                d="M12 2C11.4477 2 11 2.4477 11 3V10H4C3.4477 10 3 10.4477 3 11C3 11.5523 3.4477 12 4 12H11V19C11 19.5523 11.4477 20 12 20C12.5523 20 13 19.5523 13 19V12H20C20.5523 12 21 11.5523 21 11C21 10.4477 20.5523 10 20 10H13V3C13 2.4477 12.5523 2 12 2Z" />
                        </svg>
                        <span>Add Product</span>
                    </button>
                </a>

                <!-- Search Bar -->
                <div class="flex rounded-md border-2 border-blue-500 overflow-hidden max-w-md">
                    <input type="text" placeholder="Search Something..."
                        class="w-full outline-none bg-white text-gray-600 text-sm px-4 py-3" />
                    <button type='button' class="flex items-center justify-center bg-[#007bff] px-5">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 192.904 192.904" width="16px"
                            class="fill-white">
                            <path
                                d="m190.707 180.101-47.078-47.077c11.702-14.072 18.752-32.142 18.752-51.831C162.381 36.423 125.959 0 81.191 0 36.422 0 0 36.423 0 81.193c0 44.767 36.422 81.187 81.191 81.187 19.688 0 37.759-7.049 51.831-18.751l47.079 47.078a7.474 7.474 0 0 0 5.303 2.197 7.498 7.498 0 0 0 5.303-12.803zM15 81.193C15 44.694 44.693 15 81.191 15c36.497 0 66.189 29.694 66.189 66.193 0 36.496-29.692 66.187-66.189 66.187C44.693 147.38 15 117.689 15 81.193z">
                            </path>
                        </svg>
                    </button>
                </div>
            </div>

            <table class="min-w-full bg-white">
                <thead class="whitespace-nowrap">
                    <tr>
                        <th class="p-4 text-left text-sm font-semibold text-black">
                            Name
                        </th>
                        <th class="p-4 text-left text-sm font-semibold text-black">
                            Price
                        </th>
                        <th class="p-4 text-left text-sm font-semibold text-black">
                            Quantity
                        </th>
                        <th class="p-4 text-left text-sm font-semibold text-black">
                            Actions
                        </th>
                    </tr>
                </thead>

                <tbody class="whitespace-nowrap">
                    @foreach ($products as $product)
                        <tr class="odd:bg-blue-50">
                            <td class="p-4 text-sm">
                                <div class="flex items-center cursor-pointer w-max">
                                    <div class="ml-4">
                                        <p class="text-sm text-black">{{ $product->name }}</p>
                                        <p class="text-xs text-gray-500">{{ $product->email }}</p>
                                    </div>
                                </div>
                            </td>
                            <td class="p-4 text-sm">
                                ${{ $product->price }}
                            </td>
                            <td class="p-4 text-sm">
                                {{ $product->quantity }}
                            </td>
                            <td class="p-4 text-sm">
                                <!-- Flex container to keep buttons in the same line -->
                                <div class="flex space-x-4">
                                    <!-- Edit button -->
                                    <a href="{{ url('products/' . $product->id . '/edit') }}"
                                        class="text-blue-500 hover:text-blue-700" title="Edit">
                                        <svg xmlns="http://www.w3.org/2000/svg"
                                            class="w-5 fill-blue-500 hover:fill-blue-700" viewBox="0 0 348.882 348.882">
                                            <path
                                                d="m333.988 11.758-.42-.383A43.363 43.363 0 0 0 304.258 0a43.579 43.579 0 0 0-32.104 14.153L116.803 184.231a14.993 14.993 0 0 0-3.154 5.37l-18.267 54.762c-2.112 6.331-1.052 13.333 2.835 18.729 3.918 5.438 10.23 8.685 16.886 8.685h.001c2.879 0 5.693-.592 8.362-1.76l52.89-23.138a14.985 14.985 0 0 0 5.063-3.626L336.771 73.176c16.166-17.697 14.919-45.247-2.783-61.418zM130.381 234.247l10.719-32.134.904-.99 20.316 18.556-.904.99-31.035 13.578zm184.24-181.304L182.553 197.53l-20.316-18.556L294.305 34.386c2.583-2.828 6.118-4.386 9.954-4.386 3.365 0 6.588 1.252 9.082 3.53l.419.383c5.484 5.009 5.87 13.546.861 19.03z" />
                                            <path
                                                d="M303.85 138.388c-8.284 0-15 6.716-15 15v127.347c0 21.034-17.113 38.147-38.147 38.147H68.904c-21.035 0-38.147-17.113-38.147-38.147V100.413c0-21.034 17.113-38.147 38.147-38.147h131.587c8.284 0 15-6.716 15-15s-6.716-15-15-15H68.904C31.327 32.266.757 62.837.757 100.413v180.321c0 37.576 30.571 68.147 68.147 68.147h181.798c37.576 0 68.147-30.571 68.147-68.147V153.388c.001-8.284-6.715-15-14.999-15z" />
                                        </svg>
                                    </a>
                                    <!-- Delete button -->
                                    <form action="{{ url('products/' . $product->id) }}" method="POST"
                                        style="display:inline;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="text-red-500 hover:text-red-700" title="Delete">
                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                class="w-5 fill-red-500 hover:fill-red-700" viewBox="0 0 24 24">
                                                <path
                                                    d="M19 7a1 1 0 0 0-1 1v11.191A1.92 1.92 0 0 1 15.99 21H8.01A1.92 1.92 0 0 1 6 19.191V8a1 1 0 0 0-2 0v11.191A3.918 3.918 0 0 0 8.01 23h7.98A3.918 3.918 0 0 0 20 19.191V8a1 1 0 0 0-1-1Zm1-3h-4V2a1 1 0 0 0-1-1H9a1 1 0 0 0-1 1v2H4a1 1 0 0 0 0 2h16a1 1 0 0 0 0-2ZM10 4V3h4v1Z" />
                                                <path
                                                    d="M11 17v-7a1 1 0 0 0-2 0v7a1 1 0 0 0 2 0Zm4 0v-7a1 1 0 0 0-2 0v7a1 1 0 0 0 2 0Z" />
                                            </svg>
                                        </button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                    @endforeach

                </tbody>
            </table>
            <div>
                <ul class="flex space-x-5 justify-center font-[sans-serif]">
                    <li class="flex items-center justify-center shrink-0 bg-gray-100 w-9 h-9 rounded-md">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-3 fill-gray-400" viewBox="0 0 55.753 55.753">
                            <path
                                d="M12.745 23.915c.283-.282.59-.52.913-.727L35.266 1.581a5.4 5.4 0 0 1 7.637 7.638L24.294 27.828l18.705 18.706a5.4 5.4 0 0 1-7.636 7.637L13.658 32.464a5.367 5.367 0 0 1-.913-.727 5.367 5.367 0 0 1-1.572-3.911 5.369 5.369 0 0 1 1.572-3.911z"
                                data-original="#000000" />
                        </svg>
                    </li>
                    <li
                        class="flex items-center justify-center shrink-0 bg-blue-500  border hover:border-blue-500 border-blue-500 cursor-pointer text-base font-bold text-white px-[13px] h-9 rounded-md">
                        1
                    </li>
                    <li
                        class="flex items-center justify-center shrink-0 border hover:border-blue-500 cursor-pointer text-base font-bold text-gray-800 px-[13px] h-9 rounded-md">
                        2
                    </li>
                    <li
                        class="flex items-center justify-center shrink-0 border hover:border-blue-500 cursor-pointer text-base font-bold text-gray-800 px-[13px] h-9 rounded-md">
                        3
                    </li>
                    <li
                        class="flex items-center justify-center shrink-0 border hover:border-blue-500 cursor-pointer text-base font-bold text-gray-800 px-[13px] h-9 rounded-md">
                        4
                    </li>
                    <li
                        class="flex items-center justify-center shrink-0 border hover:border-blue-500 cursor-pointer w-9 h-9 rounded-md">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-3 fill-gray-400 rotate-180"
                            viewBox="0 0 55.753 55.753">
                            <path
                                d="M12.745 23.915c.283-.282.59-.52.913-.727L35.266 1.581a5.4 5.4 0 0 1 7.637 7.638L24.294 27.828l18.705 18.706a5.4 5.4 0 0 1-7.636 7.637L13.658 32.464a5.367 5.367 0 0 1-.913-.727 5.367 5.367 0 0 1-1.572-3.911 5.369 5.369 0 0 1 1.572-3.911z"
                                data-original="#000000" />
                        </svg>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</body>

</html>

<!DOCTYPE html>
<html lang="ar">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>جدول الطلبات</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        #dropdown {
            display: none;
        }

        ul {
            display: flex;
            flex-direction: column;
            gap: 0.7rem;
        }
    </style>
    <link rel="stylesheet" href="{{ asset('Datatable/datatables.min.css') }}">
    <link rel="stylesheet" href="{{ asset('Datatable/DataTables-1.13.6/css/jquery.dataTables.min.css') }}">
    <link rel="stylesheet" href="{{ asset('Datatable/Responsive-2.5.0/css/responsive.dataTables.min.css') }}">
    <link rel="stylesheet" href="{{ asset('style.css') }}">
</head>

<body class="bg-gray-100 text-gray-900 tracking-wider leading-normal">


    <div class="min-h-screen p-6 bg-gray-100 flex flex-col items-center justify-center">
        @csrf
        <div class="md:absolute top-0 right-0 p-5 float-right wrapper">
            <div class="wrapper-dropdown-2 bg-white transition-all rounded-full w-14 shadow-lg ring ring-white">
                <img src="{{ asset('moy.jpeg') }}" alt="Moy Logo" id="dropdownMenuButton"
                    class="mb-0 scale-110 transition-all rounded-full w-14 hover:shadow-sm shadow-lg ring hover:ring-4 ring-white">
                <ul id="dropdown" style="transition: none;"
                    class="bg-white transition-all rounded-full w-14 shadow-lg ring ring-white p-3 text-center">
                    <li>
                        <a href="{{ route('oil') }}"
                            class="no-underline hover:underline text-blue-500 hover:text-blue-900">
                            <svg fill="#000000" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100"
                                xml:space="preserve">
                                <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                <g id="SVGRepo_iconCarrier">
                                    <g>
                                        <g>
                                            <path
                                                d="M78.8,62.1l-3.6-1.7c-0.5-0.3-1.2-0.3-1.7,0L52,70.6c-1.2,0.6-2.7,0.6-3.9,0L26.5,60.4 c-0.5-0.3-1.2-0.3-1.7,0l-3.6,1.7c-1.6,0.8-1.6,2.9,0,3.7L48,78.5c1.2,0.6,2.7,0.6,3.9,0l26.8-12.7C80.4,65,80.4,62.8,78.8,62.1z">
                                            </path>
                                        </g>
                                        <g>
                                            <path
                                                d="M78.8,48.1l-3.7-1.7c-0.5-0.3-1.2-0.3-1.7,0L52,56.6c-1.2,0.6-2.7,0.6-3.9,0L26.6,46.4 c-0.5-0.3-1.2-0.3-1.7,0l-3.7,1.7c-1.6,0.8-1.6,2.9,0,3.7L48,64.6c1.2,0.6,2.7,0.6,3.9,0l26.8-12.7C80.4,51.1,80.4,48.9,78.8,48.1 z">
                                            </path>
                                        </g>
                                        <g>
                                            <path
                                                d="M21.2,37.8l26.8,12.7c1.2,0.6,2.7,0.6,3.9,0l26.8-12.7c1.6-0.8,1.6-2.9,0-3.7L51.9,21.4 c-1.2-0.6-2.7-0.6-3.9,0L21.2,34.2C19.6,34.9,19.6,37.1,21.2,37.8z">
                                            </path>
                                        </g>
                                    </g>
                                </g>
                            </svg>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('oil.done') }}"
                            class="no-underline hover:underline text-blue-500 hover:text-blue-900">
                            <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                <g id="SVGRepo_iconCarrier">
                                    <path d="M4 12.6111L8.92308 17.5L20 6.5" stroke="#000000" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round"></path>
                                </g>
                            </svg>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('orders') }}"
                            class="no-underline hover:underline text-blue-500 hover:text-blue-900">
                            <svg fill="#000000" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg">
                                <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                <g id="SVGRepo_iconCarrier">
                                    <path
                                        d="M12.32 8a3 3 0 0 0-2-.7H5.63A1.59 1.59 0 0 1 4 5.69a2 2 0 0 1 0-.25 1.59 1.59 0 0 1 1.63-1.33h4.62a1.59 1.59 0 0 1 1.57 1.33h1.5a3.08 3.08 0 0 0-3.07-2.83H8.67V.31H7.42v2.3H5.63a3.08 3.08 0 0 0-3.07 2.83 2.09 2.09 0 0 0 0 .25 3.07 3.07 0 0 0 3.07 3.07h4.74A1.59 1.59 0 0 1 12 10.35a1.86 1.86 0 0 1 0 .34 1.59 1.59 0 0 1-1.55 1.24h-4.7a1.59 1.59 0 0 1-1.55-1.24H2.69a3.08 3.08 0 0 0 3.06 2.73h1.67v2.27h1.25v-2.27h1.7a3.08 3.08 0 0 0 3.06-2.73v-.34A3.06 3.06 0 0 0 12.32 8z">
                                    </path>
                                </g>
                            </svg>
                        </a>
                </li>
                    <li>
                        <a href="{{ route('logout') }}"
                            class="no-underline hover:underline text-blue-500 hover:text-blue-900">
                            <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                <g id="SVGRepo_iconCarrier">
                                    <path
                                        d="M15 16.5V19C15 20.1046 14.1046 21 13 21H6C4.89543 21 4 20.1046 4 19V5C4 3.89543 4.89543 3 6 3H13C14.1046 3 15 3.89543 15 5V8.0625M11 12H21M21 12L18.5 9.5M21 12L18.5 14.5"
                                        stroke="#000000" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round"></path>
                                </g>
                            </svg>
                        </a>
                    </li>
                </ul>
            </div>
        </div>

        <div class="container max-w-screen-lg mx-auto">

            <div>
                <div class="bg-white rounded shadow-lg p-4 px-4 md:p-8 mb-6">


                    <table id="example" class="stripe hover"
                        style="width:100%; padding-top: 1em;  padding-bottom: 1em;">
                        <thead>
                            <tr>
                                <th data-priority="1">#</th>
                                <th data-priority="2">الاسم</th>
                                <th data-priority="3">عدد التنكات المطلوب</th>
                                <th data-priority="4">مكان التصنيع</th>
                                <th data-priority="5">الرقم التسلسلي</th>
                                <th data-priority="6">تاريخ الطلب</th>
                                <th data-priority="7">رقم الهاتف</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                                $count = 1;
                            @endphp
                            @foreach ($orders as $order)
                                <tr>
                                    <form action="{{ route('oil.update', ['id' => $order->id]) }}" method="POST">
                                        @csrf
                                        @method('PUT')
                                        <td>{{ $count++ }}</td>
                                        <td>{{ $order->name }}</td>
                                        <td>{{ $order->amount }}</td>
                                        <td>{{ $order->location }}</td>
                                        <td>{{ $order->id }}</td>
                                        <td>{{ $order->created_at }}</td>
                                        <td><a class="no-underline hover:underline text-blue-500 hover:text-blue-900"
                                                href="tel:{{ $order->phone }}">{{ $order->phone }}</a></td>
                                    </form>
                                </tr>
                            @endforeach
                        </tbody>

                    </table>


                </div>
                <!--/Card-->


            </div>
            <!--/container-->

        </div>

    </div>

    <!-- jQuery -->
    <script type="text/javascript" src="{{ asset('jquery-3.4.1.min.js') }}"></script>
    <script src="{{ asset('Datatable/datatables.min.js') }}"></script>
    <script src="{{ asset('Datatable/DataTables-1.13.6/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('Datatable/Responsive-2.5.0/js/responsive.dataTables.min.js') }}"></script>
    <script>
        $("#dropdownMenuButton").click(function() {
            $("#dropdown").slideToggle("fast");
        });

        $(document).ready(function() {
            var table = $('#example').DataTable({
                    responsive: true
                })
                .columns.adjust()
                .responsive.recalc();
        });
    </script>

</body>

</html>

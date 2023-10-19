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
                        <a href="{{ route('home') }}"
                            class="no-underline hover:underline text-blue-500 hover:text-blue-900">
                            <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                <g id="SVGRepo_iconCarrier">
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M4.18753 11.3788C4.03002 11.759 4 11.9533 4 12V20.0018C4 20.5529 4.44652 21 5 21H8V15C8 13.8954 8.89543 13 10 13H14C15.1046 13 16 13.8954 16 15V21H19C19.5535 21 20 20.5529 20 20.0018V12C20 11.9533 19.97 11.759 19.8125 11.3788C19.6662 11.0256 19.4443 10.5926 19.1547 10.1025C18.5764 9.1238 17.765 7.97999 16.8568 6.89018C15.9465 5.79788 14.9639 4.78969 14.0502 4.06454C13.5935 3.70204 13.1736 3.42608 12.8055 3.2444C12.429 3.05862 12.1641 3 12 3C11.8359 3 11.571 3.05862 11.1945 3.2444C10.8264 3.42608 10.4065 3.70204 9.94978 4.06454C9.03609 4.78969 8.05348 5.79788 7.14322 6.89018C6.23505 7.97999 5.42361 9.1238 4.8453 10.1025C4.55568 10.5926 4.33385 11.0256 4.18753 11.3788ZM10.3094 1.45091C10.8353 1.19138 11.4141 1 12 1C12.5859 1 13.1647 1.19138 13.6906 1.45091C14.2248 1.71454 14.7659 2.07921 15.2935 2.49796C16.3486 3.33531 17.4285 4.45212 18.3932 5.60982C19.3601 6.77001 20.2361 8.0012 20.8766 9.08502C21.1963 9.62614 21.4667 10.1462 21.6602 10.6134C21.8425 11.0535 22 11.5467 22 12V20.0018C22 21.6599 20.6557 23 19 23H16C14.8954 23 14 22.1046 14 21V15H10V21C10 22.1046 9.10457 23 8 23H5C3.34434 23 2 21.6599 2 20.0018V12C2 11.5467 2.15748 11.0535 2.33982 10.6134C2.53334 10.1462 2.80369 9.62614 3.12345 9.08502C3.76389 8.0012 4.63995 6.77001 5.60678 5.60982C6.57152 4.45212 7.65141 3.33531 8.70647 2.49796C9.2341 2.07921 9.77521 1.71454 10.3094 1.45091Z"
                                        fill="#0F0F0F"></path>
                                </g>
                            </svg>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('admin') }}"
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
                        <a href="{{ route('done') }}"
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
                                <th data-priority="3">مبلغ السلفة المطلوب</th>
                                <th data-priority="4">مدة التسديد</th>
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
                                    <form action="{{ route('update', ['id' => $order->id]) }}" method="POST">
                                        @csrf
                                        @method('PUT')
                                        <td>{{ $count++ }}</td>
                                        <td>{{ $order->name }}</td>
                                        <td>{{ $order->amount }}</td>
                                        <td>{{ $order->period }} Months</td>
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

@if ($errors->any())
    <div class="alert alert-danger">
        <strong>Whoops!</strong> There were some problems with your input.<br><br>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
<!DOCTYPE html>
<html lang="ar">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>طلب جديد</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <!-- <link href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css" rel="stylesheet"> -->
  <!-- <link href="https://cdn.datatables.net/responsive/2.2.3/css/responsive.dataTables.min.css" rel="stylesheet"> -->
  <link href="https://cdn.datatables.net/v/dt/dt-1.13.6/r-2.5.0/datatables.min.css" rel="stylesheet">
 

  <style>
    .dataTables_wrapper .dataTables_filter input,.dataTables_wrapper select{color:#4a5568;padding:.5rem 1rem;line-height:1.25;border-width:2px;border-radius:.25rem;border-color:#edf2f7;background-color:#edf2f7}table.dataTable.display tbody tr:hover,table.dataTable.hover tbody tr:hover{background-color:#ebf4ff}.dataTables_wrapper .dataTables_paginate .paginate_button{font-weight:700;border-radius:.25rem;border:1px solid transparent}.dataTables_wrapper .dataTables_paginate .paginate_button.current,.dataTables_wrapper .dataTables_paginate .paginate_button:hover{color:#fff!important;box-shadow:0 1px 3px 0 rgba(0,0,0,.1),0 1px 2px 0 rgba(0,0,0,.06);font-weight:700;border-radius:.25rem;background:#667eea!important;border:1px solid transparent}table.dataTable.no-footer{border-bottom:1px solid #e2e8f0;margin-top:.75em;margin-bottom:.75em}table.dataTable.dtr-inline.collapsed>tbody>tr>td:first-child:before,table.dataTable.dtr-inline.collapsed>tbody>tr>th:first-child:before{background-color:#667eea!important}
  </style>

</head>

<body class="bg-gray-100 text-gray-900 tracking-wider leading-normal">


    <div class="min-h-screen p-6 bg-gray-100 flex flex-col items-center justify-center">
        @csrf
        <a href="{{ route('home') }}" class="md:absolute top-0 right-0 p-5 float-right">
          <img src="{{ asset('moy.jpeg') }}" alt="Moy Logo"
            class="scale-110 transition-all rounded-full w-14 hover:shadow-sm shadow-lg ring hover:ring-4 ring-white">
        </a>
    
        <div class="container max-w-screen-lg mx-auto">
    
          <div>
            <div class="bg-white rounded shadow-lg p-4 px-4 md:p-8 mb-6">


			<table id="example" class="stripe hover" style="width:100%; padding-top: 1em;  padding-bottom: 1em;">
				<thead>
					<tr>
						<th data-priority="1">#</th>
						<th data-priority="2">الاسم</th>
						<th data-priority="3">المبلغ</th>
						<th data-priority="4">مدة التسديد</th>
                        <th data-priority="5">الرقم التسلسلي</th>
						<th data-priority="6">تاريخ الطلب</th>
						<th data-priority="7">رقم الهاتف</th>
                        <th data-priority="8"></th>
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
                            @method("PUT")
                            <td>{{ $count++ }}</td>
                            <td>{{ $order->name }}</td>
                            <td>{{ $order->amount }}</td>
                            <td>{{ $order->period }} Months</td>
                            <td>{{ $order->id }}</td>
                            <td>{{ $order->created_at }}</td>
                            <td><a class="no-underline hover:underline text-blue-500 hover:text-blue-900" href="tel:{{ $order->phone }}">{{ $order->phone }}</a></td>
                            <td>
                                @if ($count == 2)
                                <input type="submit" value="انهاء" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded mx-2" />
                                @endif
                            </td>
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
	<script type="text/javascript" src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.datatables.net/v/dt/dt-1.13.6/r-2.5.0/datatables.min.js"></script>

	<!--Datatables -->
    <!-- <script src="{{ asset('jquery.dataTables.js') }}"></script> -->
	<!-- <script src="{{ asset('dataTables.responsive.min.js') }}"></script> -->
	<script>
		$(document).ready(function() {



            $("#example").DataTable({responsive: true}).columns.adjust().responsive.recalc();

                $("#example_filter label input").addClass("text-right");
		});
	</script>

</body>

</html>
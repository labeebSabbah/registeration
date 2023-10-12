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
  <link rel="stylesheet" href="{{ asset("Datatable/datatables.min.css") }}">
  <link rel="stylesheet" href="{{ asset("Datatable/DataTables-1.13.6/css/jquery.dataTables.min.css") }}">
  <link rel="stylesheet" href="{{ asset("Datatable/Responsive-2.5.0/css/responsive.dataTables.min.css") }}">
  <link rel="stylesheet" href="{{ asset("style.css") }}">
</head>

<body class="bg-gray-100 text-gray-900 tracking-wider leading-normal">


    <div method="POST" action="{{ route("show") }}" class="min-h-screen p-6 bg-gray-100 flex flex-col items-center justify-center">
        @csrf
        <a href="{{ route("home") }}" class="md:absolute top-0 right-0 p-5 float-right">
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
                        <form action="{{ route("update", ['id' => $order->id]) }}" method="POST">
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
	<script type="text/javascript" src="{{ asset("jquery-3.4.1.min.js") }}"></script>
    <script src="{{ asset("Datatable/datatables.min.js") }}"></script>
    <script src="{{ asset("Datatable/DataTables-1.13.6/js/jquery.dataTables.min.js") }}"></script>
    <script src="{{ asset("Datatable/Responsive-2.5.0/js/responsive.dataTables.min.js") }}"></script>
	<script>
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
<!DOCTYPE html>
<html lang="ar">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>طلب جديد</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>

<body dir="rtl">
  <!-- component -->
  <form method="POST" action="{{ route("login") }}" class="min-h-screen p-6 bg-gray-100 flex flex-col items-center justify-center">
    @csrf
    <a href="{{ route("home") }}" class="md:absolute top-0 right-0 p-5 float-right">
      <img src="{{ asset('moy.jpeg') }}" alt="Moy Logo"
        class="scale-110 transition-all rounded-full w-14 hover:shadow-sm shadow-lg ring hover:ring-4 ring-white">
    </a>

    <div class="container max-w-screen-lg mx-auto">

      <div>
        <div class="bg-white rounded shadow-lg p-4 px-4 md:p-8 mb-6">
          <div class="grid gap-4 gap-y-2 text-sm grid-cols-1 lg:grid-cols-3">
            <div class="text-gray-600">
              <p class="font-medium text-lg">تسجيل الدخول</p>
              <p>الرجاء ادخال كلمة المرور.</p>
            </div>

            <div class="lg:col-span-2">
              <div class="grid gap-4 gap-y-2 text-sm grid-cols-1 md:grid-cols-5">
                <div class="md:col-span-5">
                  <label for="password">كلمة المرور</label>
                  <input type="password" name="password" id="password" class="h-10 border mt-1 rounded px-4 w-full bg-gray-50"
                    value="" />
                    @error('password')
                      @foreach ($errors->get('password') as $message)
                        <div class="text-red-500">{{ $message }}</div>
                      @endforeach
                    @enderror

                <div class="md:col-span-5 text-right mt-2">
                  <div class="inline-flex items-end">
                    <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">استعلم
                      </button>
                  </div>
                </div>

              </div>
            </div>
          </div>
        </div>
      </div>

    </div>
  </form>
</body>

</html>
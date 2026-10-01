<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-gray-50 dark:bg-gray-900 antialiased">
    <script src="https://cdn.jsdelivr.net/npm/flowbite@4.0.1/dist/flowbite.min.js"></script>
    <div class="bg-gray-50 dark:bg-gray-900 antialiased ">

    <!-- navbar -->

    <x-admin.navbar/>


    <!-- Sidebar -->

    <x-admin.sidebar/>


        <!-- Main -->
    <main class="p-4 md:ml-64 h-auto pt-20 bg-gray-100 dark:bg-gray-900">
      <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4 mb-4">

        {{ $slot }}
        </div>
    </main>
  </div>
</body>
</html>

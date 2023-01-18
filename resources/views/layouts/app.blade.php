<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <!-- Tailwind CSS Link -->
      <link rel="stylesheet" 
      href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.0.1/tailwind.min.css">
  
      <!-- Fontawesome Link -->
      <link href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" rel="stylesheet">

    <title> @yield('title') Productos - App</title>

</head>

<body style="bg-gray-100">
    <nav class="h-16 flex justify-end py-4 px-16">
        <a href="{{route('productos.index')}}" class="border border-blue-500 rounded px-4 pt-1 h-10 bg-white text-blue-500 font-semibold mx-2">Products</a>
        
        <a href="{{ route('productos.create')}}" class="bg-blue-500 rounded px-4 pt-1 h-10  text-white-500 font-semibold mx-2">Crear</a>
    </nav>
    
    <main class="p-16 flex justify-center">
        @yield('content')
    </main>

    


</body>

</html>
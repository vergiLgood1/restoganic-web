<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Restoganic | Fresh Food</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    
</head>
<body>
    <div class="flex flex-col h-full bg-[#E9E8E3]">
        
            @include('marketing._components.navbar')
            @include('marketing._components.hero')
        
            
        
    </div>

    <script src="/node_modules/preline/dist/preline.js"></script>
</body>
</html>!
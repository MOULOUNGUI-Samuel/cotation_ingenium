@include('layouts.head')

<body 
class="font-serif leading-normal tracking-normal bg-cover bg-center bg-fixed h-screen overflow-auto bg-no-repeat bg-[url('images/login.webp')] bg-gray-900 bg-blend-multiply" style="background-image: url('images/login.webp');">
    <div class="antialiased ">
        @include('layouts.nav')
        @include('layouts.sidebar')
        <main class="p-4 md:ml-64 md:mx-16 h-auto pt-20">
            @yield('content')
        </main>
    </div>
    @include('layouts.script')

</body>

</html>

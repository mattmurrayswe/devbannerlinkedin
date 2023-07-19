@include('components.header')

<body class="antialiased">
    <div class="container flex min-h-screen min-w-full h-screen">
        @include('components.sidebar')

        <div id="container-content" class="w-4/5 p-20 h-screen">
            <div class="header flex justify-between content-center">
                <div id="titulo-pagina" class="text-gray-900 text-xl font-medium underline">
                    <a class="flex" href="">
                        <div class="w-7 mr-3 flex justify-center">
                            <img src="{{URL::asset('/image/box-black.svg')}}" alt="profile Pic" height="30" width="30">
                        </div>
                        <p>Gerar Banner</p>
                    </a>
                </div>
                <div id="perfil flex content-center" class="text-gray-900 text-xl font-medium underline">
                    <a class="flex" href="">
                        <div class="w-7 mr-3 flex justify-center">
                            <img src="{{URL::asset('/image/user.svg')}}" alt="profile Pic" height="30" width="30">
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
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
            <div class="h-5/6 my-20">
                <label class="block mb-3 mt-3 text-large font-medium text-gray-900 dark:text-white">Nome do Profissional</label>
                <input class="mb-1 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                <label class="block mb-3 mt-3 text-large font-medium text-gray-900 dark:text-white">Cargo</label>
                <input class="mb-1 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">

                <label class="block mb-3 mt-16 text-large font-medium text-gray-900 dark:text-white">1ª Tecnologia</label>
                <select class="mb-1 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                    <option value="">React</option>
                    <option value="">Vue</option>
                    <option value="">Node</option>
                    <option value="">Laravel</option>
                    <option value="">PHP</option>
                    <option value="">Ruby</option>
                    <option value="">C#</option>
                    <option value="">Svelte</option>
                </select>
                <label class="block mb-3 mt-6 text-large font-medium text-gray-900 dark:text-white">2ª Tecnologia</label>
                <select class="mb-1 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                    <option value="">React</option>
                    <option value="">Vue</option>
                    <option value="">Node</option>
                    <option value="">Laravel</option>
                    <option value="">PHP</option>
                    <option value="">Ruby</option>
                    <option value="">C#</option>
                    <option value="">Svelte</option>
                </select>
                <label class="block mb-3 mt-6 text-large font-medium text-gray-900 dark:text-white">3ª Tecnologia</label>
                <select class="mb-1 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                    <option value="">React</option>
                    <option value="">Vue</option>
                    <option value="">Node</option>
                    <option value="">Laravel</option>
                    <option value="">PHP</option>
                    <option value="">Ruby</option>
                    <option value="">C#</option>
                    <option value="">Svelte</option>
                </select>
                <label class="block mb-3 mt-6 text-large font-medium text-gray-900 dark:text-white">4ª Tecnologia</label>
                <select class="mb-1 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                    <option value="">React</option>
                    <option value="">Vue</option>
                    <option value="">Node</option>
                    <option value="">Laravel</option>
                    <option value="">PHP</option>
                    <option value="">Ruby</option>
                    <option value="">C#</option>
                    <option value="">Svelte</option>
                </select>
                <div class="flex justify-end mt-16">
                    <button type="button" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Gerar</button>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
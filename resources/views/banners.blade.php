@include('components.header')

<body>
    <div class="container flex min-h-screen min-w-full h-screen">
        @include('components.sidebar')

        <div id="container-content" class="ml-[20%] w-4/5 p-20 h-screen">
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
                <div class="w-full h-[295px] bg-black flex flex-col justify-between my-10">
                    <div id="name-and-position" class="text-white self-start w-full pr-8 pt-8 text-xl">
                        <p class="text-white flex justify-end">SOFTWARE ENGINEER</p>
                        <p class="text-white flex justify-end">matheusmurraydev@gmail.com</p>
                    </div>
                    <div id="tecs" class="flex justify-end self-end w-full">
                        <img class="m-6" src="{{URL::asset('/image/react.svg')}}" alt="profile Pic" width="120">
                        <img class="m-6" src="{{URL::asset('/image/node.svg')}}" alt="profile Pic" width="120">
                        <img class="m-6" src="{{URL::asset('/image/firebase.svg')}}" alt="profile Pic" width="120">
                        <img class="m-6" src="{{URL::asset('/image/gcp.svg')}}" alt="profile Pic" width="120">
                    </div>
                </div>

                <label for="position" class="block mb-3 mt-6 text-large font-medium text-gray-900 dark:text-white">Cargo</label>
                <input id="position" value="SOFTWARE ENGINEER" class="mb-1 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">

                <label for="email" class="block mb-3 mt-6 text-large font-medium text-gray-900 dark:text-white">Email</label>
                <input id="email" value="matheusmurraydev@gmail.com" class="mb-1 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">

                <label class="block mb-3 mt-16 text-large font-medium text-gray-900 dark:text-white">1ª Tecnologia</label>
                <select id="id-tec-1" class="mb-1 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                    <option selected value="React">React</option>
                    <option value="Vue">Vue</option>
                    <option value="Node">Node</option>
                    <option value="Laravel">Laravel</option>
                    <option value="PHP">PHP</option>
                    <option value="Ruby">Ruby</option>
                    <option value="C#">C#</option>
                    <option value="Svelte">Svelte</option>
                    <option value="AWS">AWS</option>
                    <option value="GCP">GCP</option>
                    <option value="Azure">Azure</option>
                </select>
                <label class="block mb-3 mt-6 text-large font-medium text-gray-900 dark:text-white">2ª Tecnologia</label>
                <select id="id-tec-2" class="mb-1 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                    <option value="React">React</option>
                    <option selected value="Vue">Vue</option>
                    <option value="Node">Node</option>
                    <option value="Laravel">Laravel</option>
                    <option value="PHP">PHP</option>
                    <option value="Ruby">Ruby</option>
                    <option value="C#">C#</option>
                    <option value="Svelte">Svelte</option>
                    <option value="AWS">AWS</option>
                    <option value="GCP">GCP</option>
                    <option value="Azure">Azure</option>
                </select>
                <label class="block mb-3 mt-6 text-large font-medium text-gray-900 dark:text-white">3ª Tecnologia</label>
                <select id="id-tec-3" class="mb-1 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                    <option value="React">React</option>
                    <option value="Vue">Vue</option>
                    <option selected value="Node">Node</option>
                    <option value="Laravel">Laravel</option>
                    <option value="PHP">PHP</option>
                    <option value="Ruby">Ruby</option>
                    <option value="C#">C#</option>
                    <option value="Svelte">Svelte</option>
                    <option value="AWS">AWS</option>
                    <option value="GCP">GCP</option>
                    <option value="Azure">Azure</option>
                </select>
                <label class="block mb-3 mt-6 text-large font-medium text-gray-900 dark:text-white">4ª Tecnologia</label>
                <select id="id-tec-4" class="mb-1 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                    <option value="React">React</option>
                    <option value="Vue">Vue</option>
                    <option value="Node">Node</option>
                    <option selected value="Laravel">Laravel</option>
                    <option value="PHP">PHP</option>
                    <option value="Ruby">Ruby</option>
                    <option value="C#">C#</option>
                    <option value="Svelte">Svelte</option>
                    <option value="AWS">AWS</option>
                    <option value="GCP">GCP</option>
                    <option value="Azure">Azure</option>
                </select>
                <div class="flex justify-end mt-16">
                    <button onClick="downloadBanner()" type="button" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Gerar</button>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
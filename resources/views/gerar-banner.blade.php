@include('components.header')

<body>
    <div class="container flex min-h-screen min-w-full h-screen">
        @include('components.sidebar')

        <div id="container-content" class="ml-[20%] w-4/5 p-20 h-screen bg-dots-darker">
            <div class="header flex justify-between content-center">
                <div id="titulo-pagina" class="text-gray-900 text-xl font-medium underline">
                    <a class="flex" href="">
                        <div class="w-7 mr-3 flex justify-center">
                            <img src="{{URL::asset('/image/box-black.svg')}}" alt="profile Pic" height="30" width="30">
                        </div>
                        <p>Gerador de Banner</p>
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
                <select id="tec-1" class="mb-1 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                    <option selected value="ada">Ada</option>
                    <option value="algol">ALGOL</option>
                    <option value="assembly">Assembly</option>
                    <option value="aws">AWS</option>
                    <option value="azure">Azure</option>
                    <option value="bash">Bash</option>
                    <option value="c">C</option>
                    <option value="c++">C++</option>
                    <option value="c#">C#</option>
                    <option value="cobol">COBOL</option>
                    <option value="dart">Dart</option>
                    <option value="elixir">Elixir</option>
                    <option value="erlang">Erlang</option>
                    <option value="f#">F#</option>
                    <option value="fortran">Fortran</option>
                    <option value="go">Go</option>
                    <option value="gcp">GCP</option>
                    <option value="groovy">Groovy</option>
                    <option value="haskell">Haskell</option>
                    <option value="java">Java</option>
                    <option value="javascript">JavaScript</option>
                    <option value="julia">Julia</option>
                    <option value="kotlin">Kotlin</option>
                    <option value="laravel">Laravel</option>
                    <option value="lisp">Lisp</option>
                    <option value="lua">Lua</option>
                    <option value="matlab">MATLAB</option>
                    <option value="node">Node</option>
                    <option value="objective-c">Objective-C</option>
                    <option value="pascal">Pascal</option>
                    <option value="perl">Perl</option>
                    <option value="php">PHP</option>
                    <option value="prolog">Prolog</option>
                    <option value="python">Python</option>
                    <option value="r">R</option>
                    <option value="ruby">Ruby</option>
                    <option value="rust">Rust</option>
                    <option value="react">React</option>
                    <option value="scala">Scala</option>
                    <option value="scheme">Scheme</option>
                    <option value="shell">Shell</option>
                    <option value="sql">SQL</option>
                    <option value="swift">Swift</option>
                    <option value="svelte">Svelte</option>
                    <option value="typescript">TypeScript</option>
                    <option value="vb.net">VB.NET (Visual Basic .NET)</option>
                    <option value="vhdl">VHDL</option>
                    <option value="visualbasic">Visual Basic</option>
                    <option value="vue">Vue</option>
                    <option value="whitespace">Whitespace</option>

                </select>
                <label class="block mb-3 mt-6 text-large font-medium text-gray-900 dark:text-white">2ª Tecnologia</label>
                <select id="tec-2" class="mb-1 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                <option selected value="ada">Ada</option>
                    <option value="algol">ALGOL</option>
                    <option value="assembly">Assembly</option>
                    <option value="aws">AWS</option>
                    <option value="azure">Azure</option>
                    <option value="bash">Bash</option>
                    <option value="c">C</option>
                    <option value="c++">C++</option>
                    <option value="c#">C#</option>
                    <option value="cobol">COBOL</option>
                    <option value="dart">Dart</option>
                    <option value="docker">Docker</option>
                    <option value="elixir">Elixir</option>
                    <option value="erlang">Erlang</option>
                    <option value="f#">F#</option>
                    <option value="firebase#">FireBase</option>
                    <option value="fortran">Fortran</option>
                    <option value="gcp">GCP</option>
                    <option value="groovy">Groovy</option>
                    <option value="haskell">Haskell</option>
                    <option value="html">Html</option>
                    <option value="java">Java</option>
                    <option value="javascript">JavaScript</option>
                    <option value="kotlin">Kotlin</option>
                    <option value="laravel">Laravel</option>
                    <option value="lisp">Lisp</option>
                    <option value="lua">Lua</option>
                    <option value="matlab">MATLAB</option>
                    <option value="node">Node</option>
                    <option value="objective-c">Objective-C</option>
                    <option value="pascal">Pascal</option>
                    <option value="perl">Perl</option>
                    <option value="php">PHP</option>
                    <option value="python">Python</option>
                    <option value="ruby">Ruby</option>
                    <option value="rust">Rust</option>
                    <option value="react">React</option>
                    <option value="scala">Scala</option>
                    <option value="scheme">Scheme</option>
                    <option value="shell">Shell</option>
                    <option value="sql">SQL</option>
                    <option value="swift">Swift</option>
                    <option value="typescript">TypeScript</option>
                    <option value="vue">Vue</option>
                </select>
                <label class="block mb-3 mt-6 text-large font-medium text-gray-900 dark:text-white">3ª Tecnologia</label>
                <select id="tec-3" class="mb-1 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                <option selected value="ada">Ada</option>
                    <option value="algol">ALGOL</option>
                    <option value="assembly">Assembly</option>
                    <option value="aws">AWS</option>
                    <option value="azure">Azure</option>
                    <option value="bash">Bash</option>
                    <option value="c">C</option>
                    <option value="c++">C++</option>
                    <option value="c#">C#</option>
                    <option value="cobol">COBOL</option>
                    <option value="dart">Dart</option>
                    <option value="elixir">Elixir</option>
                    <option value="erlang">Erlang</option>
                    <option value="f#">F#</option>
                    <option value="fortran">Fortran</option>
                    <option value="go">Go</option>
                    <option value="gcp">GCP</option>
                    <option value="groovy">Groovy</option>
                    <option value="haskell">Haskell</option>
                    <option value="java">Java</option>
                    <option value="javascript">JavaScript</option>
                    <option value="julia">Julia</option>
                    <option value="kotlin">Kotlin</option>
                    <option value="laravel">Laravel</option>
                    <option value="lisp">Lisp</option>
                    <option value="lua">Lua</option>
                    <option value="matlab">MATLAB</option>
                    <option value="node">Node</option>
                    <option value="objective-c">Objective-C</option>
                    <option value="pascal">Pascal</option>
                    <option value="perl">Perl</option>
                    <option value="php">PHP</option>
                    <option value="prolog">Prolog</option>
                    <option value="python">Python</option>
                    <option value="r">R</option>
                    <option value="ruby">Ruby</option>
                    <option value="rust">Rust</option>
                    <option value="react">React</option>
                    <option value="scala">Scala</option>
                    <option value="scheme">Scheme</option>
                    <option value="shell">Shell</option>
                    <option value="sql">SQL</option>
                    <option value="swift">Swift</option>
                    <option value="svelte">Svelte</option>
                    <option value="typescript">TypeScript</option>
                    <option value="vb.net">VB.NET (Visual Basic .NET)</option>
                    <option value="vhdl">VHDL</option>
                    <option value="visualbasic">Visual Basic</option>
                    <option value="vue">Vue</option>
                    <option value="whitespace">Whitespace</option>
                </select>
                <label class="block mb-3 mt-6 text-large font-medium text-gray-900 dark:text-white">4ª Tecnologia</label>
                <select id="tec-4" class="mb-1 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                <option selected value="ada">Ada</option>
                    <option value="algol">ALGOL</option>
                    <option value="assembly">Assembly</option>
                    <option value="aws">AWS</option>
                    <option value="azure">Azure</option>
                    <option value="bash">Bash</option>
                    <option value="c">C</option>
                    <option value="c++">C++</option>
                    <option value="c#">C#</option>
                    <option value="cobol">COBOL</option>
                    <option value="dart">Dart</option>
                    <option value="elixir">Elixir</option>
                    <option value="erlang">Erlang</option>
                    <option value="f#">F#</option>
                    <option value="fortran">Fortran</option>
                    <option value="go">Go</option>
                    <option value="gcp">GCP</option>
                    <option value="groovy">Groovy</option>
                    <option value="haskell">Haskell</option>
                    <option value="java">Java</option>
                    <option value="javascript">JavaScript</option>
                    <option value="julia">Julia</option>
                    <option value="kotlin">Kotlin</option>
                    <option value="laravel">Laravel</option>
                    <option value="lisp">Lisp</option>
                    <option value="lua">Lua</option>
                    <option value="matlab">MATLAB</option>
                    <option value="node">Node</option>
                    <option value="objective-c">Objective-C</option>
                    <option value="pascal">Pascal</option>
                    <option value="perl">Perl</option>
                    <option value="php">PHP</option>
                    <option value="prolog">Prolog</option>
                    <option value="python">Python</option>
                    <option value="r">R</option>
                    <option value="ruby">Ruby</option>
                    <option value="rust">Rust</option>
                    <option value="react">React</option>
                    <option value="scala">Scala</option>
                    <option value="scheme">Scheme</option>
                    <option value="shell">Shell</option>
                    <option value="sql">SQL</option>
                    <option value="swift">Swift</option>
                    <option value="svelte">Svelte</option>
                    <option value="typescript">TypeScript</option>
                    <option value="vb.net">VB.NET (Visual Basic .NET)</option>
                    <option value="vhdl">VHDL</option>
                    <option value="visualbasic">Visual Basic</option>
                    <option value="vue">Vue</option>
                    <option value="whitespace">Whitespace</option>
                </select>
                <div class="flex justify-end mt-16">
                    <button onClick="downloadBanner()" type="button" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Gerar</button>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
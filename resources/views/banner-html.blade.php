@include('components.header')

<div class="w-[1584px] h-[396px] bg-black flex flex-col justify-between">
    <div id="name-and-position" class="text-white self-start w-full pr-8 pt-8 text-2xl">
        <p class="text-white flex justify-end">SOFTWARE ENGINEERING</p>
        <p class="text-white flex justify-end">matheusmurraydev@gmail.com</p>
    </div>
    <div id="tecs" class="flex justify-end self-end w-full">
        <img class="m-8" src="{{URL::asset('/image/csharp.svg')}}" alt="profile Pic" width="180">
        <img class="m-8" src="{{URL::asset('/image/node.svg')}}" alt="profile Pic" width="180">
        <img class="m-8" src="{{URL::asset('/image/ruby.svg')}}" alt="profile Pic" width="180">
        <img class="m-8" src="{{URL::asset('/image/gcp.svg')}}" alt="profile Pic" width="180">
    </div>
</div>

</html>
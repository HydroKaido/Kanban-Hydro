<div class="bg-gray-100 fixed max-md:hidden bottom-0 left-0 w-64 h-screen">
    <div className="h-full bg-pink-400 border relative">
        <ul class="mx-10 flex-col mt-6">
            <li class="mb-8">
                <div class="flex items-center space-x-3 ">
                    <img src="https://dummyimage.com/300" alt="" class="h-14 w-14 rounded">
                    <div class="flex flex-wrap">
                        <h2 class="">Doedsfad</h2>
                        <h2 class=" text-xs">Software Engineer</h2>
                    </div>
                </div>
            </li>
            <li  class="flex mt-3 items-center text-gray-500 text-sm">
            @svg('monoicon-board')
                <a href="{{'/'}}">Board</a>
            </li>
            <li  class="flex mt-3 items-center text-gray-500  text-sm">
            @svg('mdi-feature-search-outline')
                <a href="{{'/feature'}}">Features</a>
            </li>
            <li  class="flex mt-3 items-center text-gray-500  text-sm">
            @svg('eva-settings-outline')
                <a href="{{'/setting'}}">Settings</a>
            </li>
        </ul>
    </div>
</div>
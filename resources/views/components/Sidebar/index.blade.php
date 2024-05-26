<div class="bg-gray-200 fixed max-md:hidden h-screen w-56">
    <div>
        <ul class="grid justify-center mt-6">
            <li>
                <div class="flex items-center space-x-3 text-center">
                    <img src="https://dummyimage.com/300" alt="" class="h-20 w-20">
                    <div>
                        <h2 class="font-bold ">Doe</h2>
                        <h2 class="text-sm">Admin</h2>
                    </div>
                </div>
            </li>
            <li  class="flex mt-3 text-gray-500">
                <x-monoicon-board class="w-6 h-6 me-5"/>
                <a href="{{'/'}}">Board</a>
            </li>
            <li  class="flex mt-3 text-gray-500">
                <x-mdi-feature-search-outline class="w-6 h-6 me-5"/>
                <a href="{{'/features'}}">Features</a>
            </li>
            <li  class="flex mt-3 text-gray-500">
                <x-gmdi-settings class="w-6 h-6 me-5"/>
                <a href="{{'/setting'}}">Settings</a>
            </li>
        </ul>
    </div>
</div>
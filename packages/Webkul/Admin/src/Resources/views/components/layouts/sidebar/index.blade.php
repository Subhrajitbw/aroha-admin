<div class="fixed top-14 z-[1000] h-full w-[270px] bg-white pt-4 shadow-[0px_8px_10px_0px_rgba(0,_0,_0,_0.2)] transition-all duration-300 group-[.sidebar-collapsed]/container:w-[70px] dark:bg-gray-900 max-lg:hidden">
    <div class="journal-scroll h-[calc(100vh-100px)] overflow-auto group-[.sidebar-collapsed]/container:overflow-visible">
        <nav class="grid w-full gap-2">
            <!-- Navigation Menu -->
            @foreach (menu()->getItems('admin') as $menuItem)
                <div x-data="{ isExpanded: false }"
                     :class="{ 'active': {{ $menuItem->isActive() ? 'true' : 'false' }}, 'inactive': {{ $menuItem->isActive() ? 'false' : 'true' }} }"
                     class="px-4 py-2 group/item">

                    @if ($menuItem->haveChildren())
                        <a href="#"
                           x-on:click="isExpanded = !isExpanded, console.log(isExpanded)"
                           class="flex gap-2.5 p-1.5 items-center cursor-pointer hover:rounded-lg"
                           :class="{ 'active': isExpanded, 'inactive': !isExpanded }">
                            <div class="w-6 text-blue-500">
                                {!! $menuItem->getIcon() !!}
                            </div>
                            <p class="text-gray-600 dark:text-gray-300 font-semibold whitespace-nowrap group-[.sidebar-collapsed]/container:hidden">
                                {{ $menuItem->getName() }}
                            </p>
                            <span class="ml-auto">
                <svg class="w-5 h-5 text-gray-400" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M10 3a1 1 0 0 1 1 1v10a1 1 0 0 1-2 0V4a1 1 0 0 1 1-1zm3.293 5.293a1 1 0 1 1 1.414 1.414l-4 4a1 1 0 0 1-1.414 0l-4-4a1 1 0 0 1 1.414-1.414L10 10.586l2.293-2.293z" clip-rule="evenodd"></path>
                                </svg>
            </span>
                        </a>

                        <div x-cloak x-show="isExpanded" x-collapse
                             class="mt-2 min-w-[180px] ltr:pl-10 rtl:pr-10 pb-2 rounded-b-lg z-[100] overflow-hidden flex flex-col">
                            @foreach ($menuItem->getChildren() as $subMenuItem)
                                <div class="py-2 px-2 rounded-md hover:bg-blue-500 flex-col gap-2 hover:text-[#fff] text-gray-600 dark:text-gray-300 whitespace-nowrap group-[.sidebar-collapsed]/container:px-5 group-[.sidebar-collapsed]/container:py-2.5" >
                                    <a href="{{ $subMenuItem->getUrl() }}" >
                                    {{ $subMenuItem->getName() }}
                                    </a>
                                </div>
                            @endforeach
                        </div>
                    @else
                        <a href="{{ $menuItem->getUrl() }}" class="flex gap-2.5 p-1.5 items-center cursor-pointer hover:rounded-lg">
                            <div class="w-6 text-blue-500">
                                {!! $menuItem->getIcon() !!}
                            </div>
                            <p class="text-gray-600 dark:text-gray-300 font-semibold whitespace-nowrap group-[.sidebar-collapsed]/container:hidden">
                                {{ $menuItem->getName() }}
                            </p>
                        </a>
                    @endif

                </div>


            @endforeach
        </nav>
    </div>
</div>




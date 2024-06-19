<div class="w-full h-full flex justify-center items-center overflow-auto">
    <div class="bg-white rounded-lg overflow-auto">
        <form action="/{{ $slot }}" method="post" class="flex flex-col">
            @csrf
            <div class="flex flex-col p-3">

                {{-- task name --}}
                <input name="todo" value="{{ $todo }}" type="text" placeholder="Task name"
                    class="focus:outline-none font-bold">

                {{-- task description --}}
                <input name="description" value="{{ $description }}" type="text" placeholder="Description"
                    class="focus:outline-none">

                {{-- task priority --}}
                <input type="hidden" id="priority" name="priority" value="1">
                <ul class="flex mt-2">
                    <a href="#" class="w-6 h-6 flex justify-center items-center">
                        <svg class="hover:w-5 hover:h-5 w-6 h-6 text-red-500 dark:text-white" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor"
                            viewBox="0 0 24 24">
                            <path
                                d="M13.09 3.294c1.924.95 3.422 1.69 5.472.692a1 1 0 0 1 1.438.9v9.54a1 1 0 0 1-.562.9c-2.981 1.45-5.382.24-7.25-.701a38.739 38.739 0 0 0-.622-.31c-1.033-.497-1.887-.812-2.756-.77-.76.036-1.672.357-2.81 1.396V21a1 1 0 1 1-2 0V4.971a1 1 0 0 1 .297-.71c1.522-1.506 2.967-2.185 4.417-2.255 1.407-.068 2.653.453 3.72.967.225.108.443.216.655.32Z" />
                        </svg>
                    </a>
                </ul>

            </div>
            <div class="flex justify-between border-t rounded-b-lg p-3">

                {{-- task submit --}}
                <button class="w-6 h-6 flex justify-center items-center">
                    <svg class="hover:w-5 text-gray-500 dark:text-white" aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor"
                        viewBox="0 0 24 24">
                        <path fill-rule="evenodd"
                            d="M2 12C2 6.477 6.477 2 12 2s10 4.477 10 10-4.477 10-10 10S2 17.523 2 12Zm11-4.243a1 1 0 1 0-2 0V11H7.757a1 1 0 1 0 0 2H11v3.243a1 1 0 1 0 2 0V13h3.243a1 1 0 1 0 0-2H13V7.757Z"
                            clip-rule="evenodd" />
                    </svg>
                </button>

                {{-- cancel --}}
                <a href="/" class="w-6 h-6 flex justify-center items-center">
                    <svg class="hover:w-5 w-6 h-6 text-gray-500 dark:text-white" aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor"
                        viewBox="0 0 24 24">
                        <path fill-rule="evenodd"
                            d="M2 12C2 6.477 6.477 2 12 2s10 4.477 10 10-4.477 10-10 10S2 17.523 2 12Zm7.707-3.707a1 1 0 0 0-1.414 1.414L10.586 12l-2.293 2.293a1 1 0 1 0 1.414 1.414L12 13.414l2.293 2.293a1 1 0 0 0 1.414-1.414L13.414 12l2.293-2.293a1 1 0 0 0-1.414-1.414L12 10.586 9.707 8.293Z"
                            clip-rule="evenodd" />
                    </svg>
                </a>
            </div>
        </form>
    </div>
</div>

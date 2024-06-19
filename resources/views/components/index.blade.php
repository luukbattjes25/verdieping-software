<div class="flex flex-col min-h-screen">
    <div class="w-full h-full flex flex-col justify-center items-center px-4 py-10">
        <div class="flex flex-col rounded-lg gap-4 w-full max-w-4xl mx-auto">
            @foreach ($todos as $todo)
                @if ($todo->completed == $completed)
                    <div class="flex flex-col bg-white p-3 rounded-lg md:max-w-2xl gap-2 w-full mx-auto shadow">
                        <h1 class="break-words font-bold text-lg md:text-xl">{{ $todo->todo }}</h1>
                        <p class="break-words text-base md:text-lg">{{ $todo->description }}</p>
                        <div class="flex align-middle">
                            <a href="/edit/{{ $todo->id }}" class="w-6 h-6 flex justify-center items-center">
                                <svg class="hover:w-5 text-gray-800 dark:text-white" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor"
                                    viewBox="0 0 24 24">
                                    <path fill-rule="evenodd"
                                        d="M11.32 6.176H5c-1.105 0-2 .949-2 2.118v10.588C3 20.052 3.895 21 5 21h11c1.105 0 2-.948 2-2.118v-7.75l-3.914 4.144A2.46 2.46 0 0 1 12.81 16l-2.681.568c-1.75.37-3.292-1.263-2.942-3.115l.536-2.839c.097-.512.335-.983.684-1.352l2.914-3.086Z"
                                        clip-rule="evenodd" />
                                    <path fill-rule="evenodd"
                                        d="M19.846 4.318a2.148 2.148 0 0 0-.437-.692 2.014 2.014 0 0 0-.654-.463 1.92 1.92 0 0 0-1.544 0 2.014 2.014 0 0 0-.654.463l-.546.578 2.852 3.02.546-.579a2.14 2.14 0 0 0 .437-.692 2.244 2.244 0 0 0 0-1.635ZM17.45 8.721 14.597 5.7 9.82 10.76a.54.54 0 0 0-.137.27l-.536 2.84c-.07.37.239.696.588.622l2.682-.567a.492.492 0 0 0 .255-.145l4.778-5.06Z"
                                        clip-rule="evenodd" />
                                </svg>

                            </a>
                            <a href="/delete/{{ $todo->id }}" class="w-6 h-6 flex justify-center items-center">
                                <svg class="hover:w-5 text-green-500 dark:text-white" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor"
                                    viewBox="0 0 24 24">
                                    <path fill-rule="evenodd"
                                        d="M2 12C2 6.477 6.477 2 12 2s10 4.477 10 10-4.477 10-10 10S2 17.523 2 12Zm13.707-1.293a1 1 0 0 0-1.414-1.414L11 12.586l-1.793-1.793a1 1 0 0 0-1.414 1.414l2.5 2.5a1 1 0 0 0 1.414 0l4-4Z"
                                        clip-rule="evenodd" />
                                </svg>
                            </a>
                        </div>
                    </div>
                @endif
            @endforeach
        </div>
        <a href="/create" class="m-3">
            <svg class="hover:w-10 text-orange-500 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                width="50" height="50" fill="currentColor" viewBox="0 0 24 24">
                <path fill-rule="evenodd"
                    d="M2 12C2 6.477 6.477 2 12 2s10 4.477 10 10-4.477 10-10 10S2 17.523 2 12Zm11-4.243a1 1 0 1 0-2 0V11H7.757a1 1 0 1 0 0 2H11v3.243a1 1 0 1 0 2 0V13h3.243a1 1 0 1 0 0-2H13V7.757Z"
                    clip-rule="evenodd" />
            </svg>
        </a>
    </div>
</div>

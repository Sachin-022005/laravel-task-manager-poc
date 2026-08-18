<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task Manager</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-gray-100 min-h-screen">

    <div class="max-w-5xl mx-auto py-10 px-6">

        <div class="flex justify-between items-center mb-8">
            <div>
                <h1 class="text-3xl font-bold text-gray-900">
                    Task Manager
                </h1>

                <p class="text-gray-600 mt-1">
                    Laravel Task Management POC
                </p>
            </div>

            <a
                href="{{ route('tasks.create') }}"
                class="bg-blue-600 text-white px-5 py-2 rounded-lg hover:bg-blue-700"
            >
                + Create Task
            </a>
        </div>

        @if(session('success'))
            <div class="bg-green-100 text-green-800 px-4 py-3 rounded-lg mb-6">
                {{ session('success') }}
            </div>
        @endif

        @if($tasks->count())

            <div class="space-y-4">

                @foreach($tasks as $task)

                    <div class="bg-white rounded-xl shadow-sm p-5">

                        <div class="flex justify-between items-start">

                            <div>
                                <h2 class="text-xl font-semibold text-gray-900">
                                    {{ $task->title }}
                                </h2>

                                @if($task->description)
                                    <p class="text-gray-600 mt-2">
                                        {{ $task->description }}
                                    </p>
                                @endif
                            </div>

                            @if($task->completed)
                                <span class="bg-green-100 text-green-700 px-3 py-1 rounded-full text-sm">
                                    Completed
                                </span>
                            @else
                                <span class="bg-yellow-100 text-yellow-700 px-3 py-1 rounded-full text-sm">
                                    Pending
                                </span>
                            @endif

                        </div>

                        <div class="flex gap-3 mt-5">

                            <a
                                href="{{ route('tasks.show', $task) }}"
                                class="text-blue-600 hover:underline"
                            >
                                View
                            </a>

                            <a
                                href="{{ route('tasks.edit', $task) }}"
                                class="text-gray-700 hover:underline"
                            >
                                Edit
                            </a>

                            <form
                                action="{{ route('tasks.destroy', $task) }}"
                                method="POST"
                                onsubmit="return confirm('Delete this task?')"
                            >
                                @csrf
                                @method('DELETE')

                                <button
                                    type="submit"
                                    class="text-red-600 hover:underline"
                                >
                                    Delete
                                </button>
                            </form>

                        </div>

                    </div>

                @endforeach

            </div>

        @else

            <div class="bg-white rounded-xl shadow-sm p-10 text-center">

                <h2 class="text-xl font-semibold text-gray-800">
                    No tasks yet
                </h2>

                <p class="text-gray-500 mt-2">
                    Create your first task to get started.
                </p>

                <a
                    href="{{ route('tasks.create') }}"
                    class="inline-block mt-5 bg-blue-600 text-white px-5 py-2 rounded-lg"
                >
                    Create First Task
                </a>

            </div>

        @endif

    </div>

</body>
</html>
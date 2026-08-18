<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $task->title }} - Task Manager</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-gray-100 min-h-screen">

    <div class="max-w-3xl mx-auto py-10 px-6">

        <div class="mb-8">

            <a
                href="{{ route('tasks.index') }}"
                class="text-blue-600 hover:underline"
            >
                ← Back to Tasks
            </a>

            <h1 class="text-3xl font-bold text-gray-900 mt-4">
                Task Details
            </h1>

        </div>

        <div class="bg-white rounded-xl shadow-sm p-6">

            <div class="flex justify-between items-start">

                <div>
                    <h2 class="text-2xl font-bold text-gray-900">
                        {{ $task->title }}
                    </h2>

                    <p class="text-gray-500 mt-1">
                        Created {{ $task->created_at->format('d M Y, h:i A') }}
                    </p>
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

            <div class="mt-8">

                <h3 class="font-semibold text-gray-800">
                    Description
                </h3>

                <p class="text-gray-600 mt-2 whitespace-pre-line">
                    {{ $task->description ?: 'No description provided.' }}
                </p>

            </div>

            <div class="flex gap-3 mt-8">

                <a
                    href="{{ route('tasks.edit', $task) }}"
                    class="bg-blue-600 text-white px-5 py-3 rounded-lg hover:bg-blue-700"
                >
                    Edit Task
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
                        class="bg-red-600 text-white px-5 py-3 rounded-lg hover:bg-red-700"
                    >
                        Delete Task
                    </button>
                </form>

            </div>

        </div>

    </div>

</body>
</html>
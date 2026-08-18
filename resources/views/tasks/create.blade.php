<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Task - Task Manager</title>

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
                Create Task
            </h1>

            <p class="text-gray-600 mt-1">
                Add a new task to your task manager.
            </p>
        </div>

        @if($errors->any())
            <div class="bg-red-100 text-red-700 px-4 py-3 rounded-lg mb-6">
                <ul class="list-disc list-inside">
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <div class="bg-white rounded-xl shadow-sm p-6">

            <form action="{{ route('tasks.store') }}" method="POST">

                @csrf

                <div class="mb-5">
                    <label
                        for="title"
                        class="block font-medium text-gray-700 mb-2"
                    >
                        Task Title
                    </label>

                    <input
                        type="text"
                        id="title"
                        name="title"
                        value="{{ old('title') }}"
                        placeholder="Enter task title"
                        class="w-full border border-gray-300 rounded-lg px-4 py-3"
                        required
                    >
                </div>

                <div class="mb-6">
                    <label
                        for="description"
                        class="block font-medium text-gray-700 mb-2"
                    >
                        Description
                    </label>

                    <textarea
                        id="description"
                        name="description"
                        rows="5"
                        placeholder="Enter task description"
                        class="w-full border border-gray-300 rounded-lg px-4 py-3"
                    >{{ old('description') }}</textarea>
                </div>

                <div class="flex gap-3">

                    <button
                        type="submit"
                        class="bg-blue-600 text-white px-5 py-3 rounded-lg hover:bg-blue-700"
                    >
                        Create Task
                    </button>

                    <a
                        href="{{ route('tasks.index') }}"
                        class="bg-gray-200 text-gray-800 px-5 py-3 rounded-lg hover:bg-gray-300"
                    >
                        Cancel
                    </a>

                </div>

            </form>

        </div>

    </div>

</body>
</html>
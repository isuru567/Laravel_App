<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student List</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 min-h-screen flex items-center justify-center">
    <div class="container mx-auto px-4">
        <h1 class="text-3xl font-bold text-center mb-8 text-gray-700">Student List</h1>

        <table class="table-auto w-full border-collapse border border-gray-300 bg-white shadow-md rounded-md">
            <thead class="bg-gray-200">
                <tr>
                    <th class="border border-gray-300 px-4 py-2 text-gray-700">ID</th>
                    <th class="border border-gray-300 px-4 py-2 text-gray-700">Name</th>
                    <th class="border border-gray-300 px-4 py-2 text-gray-700">Address</th>
                    <th class="border border-gray-300 px-4 py-2 text-gray-700">Phone</th>
                    <th class="border border-gray-300 px-4 py-2 text-gray-700">Actions</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($students as $student)
                    <tr class="hover:bg-gray-100">
                        <td class="border border-gray-300 px-4 py-2 text-center">{{ $student->id }}</td>
                        <td class="border border-gray-300 px-4 py-2">{{ $student->name }}</td>
                        <td class="border border-gray-300 px-4 py-2">{{ $student->address }}</td>
                        <td class="border border-gray-300 px-4 py-2">{{ $student->phone }}</td>
                        <td class="border border-gray-300 px-4 py-2 text-center">
                            <!-- Edit Button -->
                            <a href="{{ route('student-edit', $student->id) }}" 
                               class="text-white bg-blue-500 hover:bg-blue-600 px-4 py-2 rounded-md">
                                Edit
                            </a>

                            <!-- Delete Button -->
                            <form action="{{ route('student-delete', $student->id) }}" method="POST" class="inline-block">
                                @csrf
                                @method('DELETE')
                                <button type="submit" 
                                        onclick="return confirm('Are you sure you want to delete this student?')"
                                        class="text-white bg-red-500 hover:bg-red-600 px-4 py-2 rounded-md">
                                    Delete
                                </button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="5" class="border border-gray-300 px-4 py-2 text-center text-gray-500">
                            No students found
                        </td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</body>
</html>

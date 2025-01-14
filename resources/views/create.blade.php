<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Form</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 min-h-screen flex items-center justify-center">

<form action="{{ route('student-store') }}" method="POST" class="w-full max-w-lg bg-white p-6 rounded-lg shadow-md">
    @csrf

    <h2 class="text-2xl font-semibold text-gray-800 mb-6 text-center">Student Information</h2>

    <!-- Full Name -->
    <div class="mb-4">
        <label for="name" class="block text-sm font-medium text-gray-700">Full Name</label>
        <input 
            type="text" 
            name="name" 
            id="name" 
            value="{{ old('name') }}" 
            required 
            class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 text-gray-900">
        @error('name')
            <p class="text-red-500 text-xs italic mt-2">{{ $message }}</p>
        @enderror
    </div>

    <!-- Address -->
    <div class="mb-4">
        <label for="address" class="block text-sm font-medium text-gray-700">Address</label>
        <textarea 
            name="address" 
            id="address" 
            rows="3" 
            required 
            class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 text-gray-900">{{ old('address') }}</textarea>
        @error('address')
            <p class="text-red-500 text-xs italic mt-2">{{ $message }}</p>
        @enderror
    </div>

    <!-- Phone Number -->
    <div class="mb-4">
        <label for="phone" class="block text-sm font-medium text-gray-700">Phone Number</label>
        <input 
            type="tel" 
            name="phone" 
            id="phone" 
            value="{{ old('phone') }}" 
            required 
            class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 text-gray-900">
        @error('phone')
            <p class="text-red-500 text-xs italic mt-2">{{ $message }}</p>
        @enderror
    </div>

    <!-- Submit Button -->
    <div class="mt-6">
        <button 
            type="submit" 
            class="w-full bg-indigo-600 text-white font-medium py-2 px-4 rounded-md hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">
            Submit
        </button>
    </div>

    @if(session('success'))
    <div class="text-green-500 text-center mb-4">
        {{ session('success') }}
    </div>
    @endif

</form>

</body>
</html>

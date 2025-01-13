<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="{{ route('student-store') }}" method="POST">

    @csrf
    
    <div>
        <label for="name">Full Name</label>
        <input type="text" name="name" id="name" 
                
               value="{{ old('name') }}" required>
        @error('name')
            <p class="text-red-500 text-xs italic">{{ $message }}</p>
        @enderror
    </div>

    <div class="mb-4">
        <label for="address" >Address</label>
        <textarea name="address" id="address" rows="3" 
                  
                  required>{{ old('address') }}</textarea>
        @error('address')
            <p >{{ $message }}</p>
        @enderror
    </div>

    <div class="mb-6">
        <label for="phone" >Phone Number</label>
        <input type="tel" name="phone" id="phone" 
                
               value="{{ old('phone') }}" required>
        @error('phone')
            <p>{{ $message }}</p>
        @enderror
    </div>

    <div>
        <button type="submit">
            Submit
        </button>
    </div>
</form>
</body>
</html>
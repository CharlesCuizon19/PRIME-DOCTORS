@extends('admin.layouts.adminapp')

@section('title', 'Edit Service')

@section('admin-content')
<!-- Page Title -->
<h1 class="text-2xl font-semibold mb-6">EDIT SERVICE</h1>

<!-- Back Button -->
<div class="flex justify-between items-center mb-6">
    <a href="{{ route('admin.services.index') }}"
        class="inline-flex items-center gap-2 text-sm bg-black text-white px-5 py-2 rounded-xl shadow-md hover:bg-gray-700 transition duration-200">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24"
            stroke="currentColor" stroke-width="2">
            <path stroke-linecap="round" stroke-linejoin="round" d="M15 19l-7-7 7-7" />
        </svg>
        Back
    </a>
</div>

<!-- Edit Form -->
<div class="bg-white rounded-xl shadow-md p-8 border border-gray-200 max-w-3xl mx-auto">
    <form action="{{ route('admin.services.update', $service->id) }}" method="POST" enctype="multipart/form-data"
        class="space-y-6">
        @csrf
        @method('PUT')

        <!-- Title -->
        <div>
            <label class="block font-semibold mb-2">Title <span class="text-red-500">*</span></label>
            <input type="text" name="title" value="{{ old('title', $service->title) }}"
                class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:ring-2 focus:ring-yellow-400 focus:outline-none"
                placeholder="Enter service title" required>
            @error('title')
            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
            @enderror
        </div>

        <!-- Description -->
        <div>
            <label class="block font-semibold mb-2">Description</label>
            <textarea name="description" id="description" rows="4"
                class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:ring-2 focus:ring-yellow-400 focus:outline-none"
                placeholder="Enter description">{{ old('description', $service->description) }}</textarea>
            @error('description')
            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
            @enderror
        </div>

        <!-- Why It Matters -->
        <div>
            <label class="block font-semibold mb-2">Why It Matters</label>
            <textarea name="why_it_matters" rows="3"
                class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:ring-2 focus:ring-yellow-400 focus:outline-none"
                placeholder="Explain why this service is important">{{ old('why_it_matters', $service->why_it_matters) }}</textarea>
            @error('why_it_matters')
            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
            @enderror
        </div>

        <!-- Current Service Image -->
        <div>
            <label class="block font-semibold mb-2">Current Service Image</label>
            @if ($service->image && $service->image->file && $service->image->file->image_path)
            <img src="{{ asset('storage/' . $service->image->file->image_path) }}" alt="Service Image"
                class="w-56 h-32 object-cover rounded shadow border mb-3">
            @else
            <p class="text-gray-400 italic">No image uploaded.</p>
            @endif
        </div>

        <!-- Upload New Service Image -->
        <div>
            <label class="block font-semibold mb-2">Upload New Service Image (optional)</label>
            <input type="file" name="service_image"
                class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:ring-2 focus:ring-yellow-400 focus:outline-none
                       file:mr-4 file:py-2 file:px-4 file:rounded-md file:border-0 file:text-sm
                       file:bg-yellow-400 file:text-black hover:file:bg-yellow-500">
            @error('service_image')
            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
            @enderror
        </div>

        <!-- Current Icon Image -->
        <div>
            <label class="block font-semibold mb-2">Current Icon Image</label>
            @if ($service->icon && $service->icon->file && $service->icon->file->image_path)
            <img src="{{ asset('storage/' .$service->icon->file->image_path) }}" alt="Icon Image"
                class="w-28 h-28 object-cover rounded shadow border mb-3">
            @else
            <p class="text-gray-400 italic">No icon uploaded.</p>
            @endif
        </div>

        <!-- Upload New Icon Image -->
        <div>
            <label class="block font-semibold mb-2">Upload New Icon (optional)</label>
            <input type="file" name="icon_image"
                class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:ring-2 focus:ring-yellow-400 focus:outline-none
                       file:mr-4 file:py-2 file:px-4 file:rounded-md file:border-0 file:text-sm
                       file:bg-yellow-400 file:text-black hover:file:bg-yellow-500">
            @error('icon_image')
            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
            @enderror
        </div>

        <!-- Save Button -->
        <div class="pt-4">
            <button type="submit"
                class="w-full bg-gradient-to-r from-yellow-400 to-yellow-500 text-black py-3 rounded-xl font-semibold shadow-md hover:shadow-lg hover:scale-[1.02] transition duration-200">
                Save Changes
            </button>
        </div>
    </form>
</div>
@endsection

@push('scripts')
<script src="https://cdn.ckeditor.com/ckeditor5/39.0.1/classic/ckeditor.js"></script>
<script>
    ClassicEditor.create(document.querySelector('#description')).catch(console.error);
</script>

@if(session('success'))
<script>
    Swal.fire({
        icon: 'success',
        title: 'Success!',
        text: "{{ session('success') }}",
        timer: 2000,
        showConfirmButton: false
    });
</script>
@endif
@endpush
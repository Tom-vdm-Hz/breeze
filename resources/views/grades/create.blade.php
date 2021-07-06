<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Make Grade
        </h2>
    </x-slot>
    <link rel="stylesheet" href="../../css/app.css">
    <link rel="stylesheet" href="../../../public/css/app.css">
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <form method="POST" action="{{ route('grades.store') }}">
                        @csrf
                        <div class="form-group list">
                            <label for="name">Name</label>
                            <input name="name" class="form-control input-sm @error('name') is-invalid @enderror"
                                   type="text" id="name"
                                   value="{{ old('name') }}" required>
                            <div class="invalid-feedback">
                                Enter Name
                            </div>
                        </div>
                        <div class="form-group list">
                            <label for="grade">Grade</label>
                            <input name="grade" class="form-control input-sm @error('grade') is-invalid @enderror"
                                   type="number" id="grade"
                                   value="{{ old('grade') }}" required>
                            <div class="invalid-feedback">
                                Enter Grade
                            </div>
                        </div>
                        <div class="form-group mt-2">
                            <button type="submit" class="btn btn-primary">Make Grade</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

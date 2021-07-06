<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            All Grades
        </h2>
    </x-slot>
    <link rel="stylesheet" href="../../css/app.css">
    <link rel="stylesheet" href="../../../public/css/app.css">
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <a type="button" class="btn btn-primary" href="{{route('grades.create')}}">Make Grade</a>
                    <table class="table mt-3">
                        <thead>
                        <tr>
                            <th scope="col">Id</th>
                            <th scope="col">Name</th>
                            <th scope="col">Grade</th>
                            <th scope="col">View</th>
                            <th scope="col">Edit</th>
                            <th scope="col">Delete</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($grades as $grade)
                            <tr>
                                <th scope="row">{{$grade->id}}</th>
                                <th scope="row">{{$grade->name}}</th>
                                <th scope="row">{{$grade->grade}}</th>
                                <td><a href="{{route('grades.show',$grade->id)}}"><i
                                            class="fas fa-eye"></i></a></td>
                                <td><a href="{{route('grades.edit',$grade->id)}}"><i
                                            class="fas fa-edit"></i></a>
                                </td>
                                <td>
                                    <form method="POST" action="{{route('grades.destroy',$grade->id)}}">
                                        @method('DELETE')
                                        @csrf
                                        <button type="submit"><i class=" fas fa-trash"></i></button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Grade {{$grade->id}}
        </h2>
    </x-slot>
    <link rel="stylesheet" href="../../css/app.css">
    <link rel="stylesheet" href="../../../public/css/app.css">
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <table class="table mt-3">
                        <thead>
                        <tr>
                            <th scope="col">Id</th>
                            <th scope="col">Name</th>
                            <th scope="col">Grade</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <th scope="row">{{$grade->id}}</th>
                            <td>{{$grade->name}}</td>
                            <td>{{$grade->grade}}</td>
                        </tr>
                        </tbody>
                    </table>
                    <div class="row">
                        <div class="col-6">
                            <a class="btn btn-block btn-primary" href="{{route('grades.edit',$grade->id)}}">
                                Edit Grade</a>
                        </div>
                        <div class="col-6">
                            <form method="POST" action="{{route('grades.destroy',$grade->id)}}">
                                @method('DELETE')
                                @csrf
                                <button type="submit" class="btn btn-block btn-danger">
                                    Delete Grade
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

<x-app-layout>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('CARS MANAGEMENT') }}
            <a href="{{url('management/create')}}" class="btn btn-primary float-end">Add Cars</a>
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-#212529 dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-white">

                    <div class="card-body">

                        <table class="table table-bordered text-white">
                            <thead>
                                <tr>
                                    <th>Car-Name</th>
                                    <th>Car-Company</th>
                                    <th>Car-Model</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($managements as $item )
                                <tr>
                                    <td>{{$item->carname}}</td>
                                    <td>{{$item->carcompany}}</td>
                                    <td>{{$item->carmodel}}</td>
                                    <td>
                                        <a href="{{url('management/'.$item->id.'/edit')}}" class="btn btn-success mx-2">Edit</a>
                                        <a href="{{url('management/'.$item->id.'/delete')}}" class="btn btn-danger mx-1">Delete</a>
                                    </td>
                                </tr>
                                    
                                @endforeach
                            </tbody>
    
                        </table>
                    </div>
                  
                    
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

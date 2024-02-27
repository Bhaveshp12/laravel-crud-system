<x-app-layout>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('CARS MANAGEMENT') }}
            <a href="{{url('management')}}" class="btn btn-primary float-end">Back</a>
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-#212529 dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    @if(session('status'))
                <div class="alert alert-success">{{session('status')}}</div>
            @endif
                    <div class="card-body">
                        <form action="{{url('management/'.$management->id.'/edit')}}" method="POST">
                            @csrf
                            @method('PUT')
                            <div class="mb-3">
                                <lable>CarName</lable>
                                <input type="text" name="carname" class="form-control" value="{{$management->carname}}"/>
    
                                @error('carname') <span class="text-danger">{{$message}}</span> @enderror  
                            </div>
                            <div class="mb-3">
                                <lable>CarCompany</lable>
                                <input type="text" name="carcompany" class="form-control" value="{{$management->carcompany}}"/>
    
                                @error('carcompany') <span class="text-danger">{{$message}}</span> @enderror 
                            </div>
    
                            <div class="mb-3">
                                <lable>CarModel</lable>
                                <input type="text" name="carmodel" class="form-control" value="{{$management->carmodel}}"/>
    
                                @error('carmodel') <span class="text-danger">{{$message}}</span> @enderror 
                            </div>
    
                            <div class="mb-3">
                                <button type="submit" class="btn btn-primary">Update</button>
                            </div>
                        </form>
                    </div>
                   
                    
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

<div>
    <div class="container-fluid">
        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3 d-flex justify-content-between">
                <h6 class="m-0 font-weight-bold text-primary">Services</h6>
                @if (Session::has('message'))
                    <div  class="alert alert-success alert-dismissible fade show" role="alert">
                        {{ Session::get('message') }}
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                @endif
                <a href="{{route('admin.addServices')}}" class="btn btn-primary">Add Service</a>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>Image</th>
                                <th>Name</th>
                                <th>Description</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($services as $service)
                                <tr>
                                    <td>
                                        <img src="{{asset('assets/img/Services')}}/{{$service->image}}" alt="" width="100" height="100">
                                    </td>
                                    <td>  {{$service->name}}</td>
                                    <td>  {{$service->description}}</td>
                                    <td>
                                        <a href="{{route('admin.editServices',[$service->id])}}"> <i class="fas fa-edit text-success"></i></a>
                                        <a href="" onclick="confirm('Are you sure to Delete this service?') || event.stopImmediatePropagation()" wire:click.prevent="deleteservice({{$service->id}})"> <i class="fas fa-trash text-danger"></i></a>
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



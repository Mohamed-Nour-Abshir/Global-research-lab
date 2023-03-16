<div>
    <div class="container-fluid">
        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3 d-flex justify-content-between">
                <h6 class="m-0 font-weight-bold text-primary">Home Sliders</h6>
                @if (Session::has('message'))
                    <div  class="alert alert-success alert-dismissible fade show" role="alert">
                        {{ Session::get('message') }}
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                @endif
                <a href="{{route('admin.addhomeslider')}}" class="btn btn-primary">Add Slider</a>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>Image</th>
                                <th>Title</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($sliders as $slider)
                                <tr>
                                    <td>
                                        <img src="{{asset('assets/img/Sliders')}}/{{$slider->image}}" alt="" width="100" height="100">
                                    </td>
                                    <td>  {{$slider->title}}</td>
                                    <td>
                                        <a href=""> <i class="fas fa-edit text-success"></i></a>
                                        <a href=""> <i class="fas fa-trash text-danger"></i></a>
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

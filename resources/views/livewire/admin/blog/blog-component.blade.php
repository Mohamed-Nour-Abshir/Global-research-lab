<div>
    <div class="container-fluid">
        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3 d-flex justify-content-between">
                <h6 class="m-0 font-weight-bold text-primary">News</h6>
                @if (Session::has('message'))
                    <div  class="alert alert-success alert-dismissible fade show" role="alert">
                        {{ Session::get('message') }}
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                @endif
                <a href="{{route('admin.addNews')}}" class="btn btn-primary">Add News</a>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>Image</th>
                                <th>Name</th>
                                <th>Description</th>
                                <th>Date</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($news as $blog)
                                <tr>
                                    <td>
                                        <img src="{{asset('assets/img/Blogs')}}/{{$blog->image}}" alt="" width="100" height="100">
                                    </td>
                                    <td>  {{$blog->name}}</td>
                                    <td>  {{$blog->description}}</td>
                                    <td>  {{date("d-M-Y",strtotime($blog->date))}}</td>
                                    <td>
                                        <a href="{{route('admin.edit',[$blog->id])}}"> <i class="fas fa-edit text-success"></i></a>
                                        <a href="" onclick="confirm('Are you sure to Delete this blog?') || event.stopImmediatePropagation()" wire:click.prevent="deleteBlog({{$blog->id}})"> <i class="fas fa-trash text-danger"></i></a>
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



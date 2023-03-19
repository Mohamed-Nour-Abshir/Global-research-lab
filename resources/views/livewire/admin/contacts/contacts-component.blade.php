<div>
    <div class="container-fluid">
        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">All Contacts</h6>
                @if (Session::has('message'))
                    <div  class="alert alert-success alert-dismissible fade show" role="alert">
                        {{ Session::get('message') }}
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                @endif
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>Sl No.</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Subject</th>
                                <th>Message</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                              $i =0;
                            ?>
                            @foreach ($contacts as $contact)
                                <tr>
                                    <td>{{++ $i}}</td>
                                    <td>  {{$contact->name}}</td>
                                    <td>  {{$contact->email}}</td>
                                    <td>  {{$contact->subject}}</td>
                                    <td>  {{$contact->message}}</td>
                                    <td>
                                        <a href="" onclick="confirm('Are you sure to Delete this contact?') || event.stopImmediatePropagation()" wire:click.prevent="deleteContact({{$contact->id}})"> <i class="fas fa-trash text-danger"></i></a>
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




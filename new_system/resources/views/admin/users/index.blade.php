<x-admin-master>
    @section('content')
        <h1>Users</h1>

        @if(session('user-deleted'))
        <div>
            <div class="alert alert-danger">{{session('user-deleted')}}</div>
        </div>
        @endif
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary" >DataTables Example</h6>

        </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>Username</th>
                                <th>Avatar</th>
                                <th>Name</th>
                                <th>Registered date</th>
                                <th>Updated profile date</th>
                                <th>Delete</th>
                            </tr>
                        </thead>
                        <thead>
                            <tfoot>
                            <tr>
                                <th>Id</th>
                                <th>Username</th>
                                <th>Avatar</th>
                                <th>Name</th>
                                <th>Registered date</th>
                                <th>Updated profile date</th>
                                <th>Delete</th>
                            </tr>
                            </tfoot>
                            <tbody>
                                @foreach($users as $user)
                                <tr>
                                    <td>
                                        <td>{{$user->id}}</td>
                                        <td><a href="{{route('user.profile.show',$user->id)}}" >{{$user->username}}</a></td>
                                        <td>
                                            <img src="{{$user->avatar}}" alt="">
                                        </td>
                                        <td>{{$user->name}}</td>
                                        <td>{{$user->created_at->diffForhumans()}}</td>
                                        <td>{{$user->updated_at->diffForhumans()}}</td>
                                        
                                    </td>
                                    <td>
                                        <form action="{{ route('user.destroy', $user->id) }}" method="post">
                                            @csrf
                                            @method('DELETE')
                                            <button class="btn btn-danger">DELETE</button>
                                        </form>
                                    </td>
                                    
                                </tr>
                                @endforeach
                            </tbody>
                            
                        </thead>

                    </table>

                </div>
            </div>
        </div>


    @endsection
    @section('scripts')
        <script src="{{asset('vendor/datatables/jquery.dataTables.min.js')}}"></script>
        <script src="{{asset('vendor/datatables/dataTables.bootstrap4.min.js')}}"></script>
        <script src="{{asset('js/demo/datatables-demo.js')}}"></script>
        @endsection

</x-admin-master>
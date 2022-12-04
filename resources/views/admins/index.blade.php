@extends('cms.paerent')

@section('title','Admins')

@section('page-title','Index')

@section('small-title','Admins Index')

@section('styles')

@endsection

@section('content')
<section class="content">
    <div class="container-fluid">

        <div class="row">

                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h3 class="card-title">Admins</h3>

                                    <div class="card-tools">
                                        <div class="input-group input-group-sm" style="width: 150px;">
                                            <input type="text" name="table_search" class="form-control float-right" placeholder="Search">

                                            <div class="input-group-append">
                                                <button type="submit" class="btn btn-default">
                        <i class="fas fa-search"></i>
                      </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- /.card-header -->
                                <div class="card-body table-responsive p-0">
                                    <table class="table table-bordered table-striped table-hover text-nowrap">
                                        <thead>
                                            <tr>
                                                <th>ID</th>
                                                <th>Name</th>
                                                <th>email</th>
                                                <th>mobile</th>
                                                {{-- <th>password</th> --}}
                                                <th>status</th>
                                                <th>gender</th>
                                                {{-- <th>Created At</th>
                                                <th>Updated At</th> --}}
                                                <th>Setting</th>
                                            </tr>
                                        </thead>
                                        <tbody>

                                            @foreach ($admins as $admin)
                                            <tr>
                                                <td>{{$admin->id}}</td>
                                                <td>{{$admin->user->name}}</td>

                                                <td>{{$admin->email}}</td>
                                                <td>{{$admin->mobile}}</td>

                                                <td>
                                                    @if ($admin->status)
                                                    <span class="badge bg-success">{{$admin->active_status}}</span>
                                                    @else
                                                    <span class="badge bg-danger">{{$admin->active_status}}</span>
                                                    @endif
                                                    </td>
                                                <td>{{$admin->gender}}</td>

                                                {{-- <td>{{$admins->created_at}}</td>
                                                <td>{{$admins->updated_at}}</td>    --}}

                                                <td>
                                                    <div class="btn-group">
                                                        <a href="{{route('admins.edit', $admin->id)}}" class="btn btn-info">
                                                          <i class="fas fa-edit"></i>
                                                        </a>

                                                    <a href="#" onclick="performDestroy({{$admin->id}}, this)" class="btn btn-danger">
                                                        <i class="fas fa-trash-alt"></i>
                                                    </a>

                                                      </div>
                                                </td>
                                            </tr>

                                            @endforeach


                                        </tbody>
                                    </table>
                                </div>
                                <!-- /.card-body -->
                            </div>
                            <!-- /.card -->
                        </div>
                    </div>
    </div>
</section>
@endsection

 @section('scripts')
{{-- <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
<script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script> --}}

    <script>

           function performDestroy(id , ref){
            confirmDestroy('/cms/admin/admins/'+id,ref);
           }

        </script>
@endsection

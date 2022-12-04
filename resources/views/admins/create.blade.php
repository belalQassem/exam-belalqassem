@extends('cms.paerent')

@section('title','Admin')

@section('page-title','Admin Create')

@section('small-title','Admin')

@section('styles')
<link rel="stylesheet" href="{{ asset('cms/plugins/select2/css/select2.min.css') }}">
<link rel="stylesheet" href="{{ asset('cms/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css') }}">
@endsection

@section('content')
      <!-- Main content -->
      <section class="content">
        <div class="container-fluid">
          <div class="row">
            <!-- left column -->
            <div class="col-md-12">
              <!-- general form elements -->
              <div class="card card-primary">
                <div class="card-header">
                  <h3 class="card-title">Data of Admin</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form id="create_form">
                    @csrf
                  <div class="card-body">

                    <div class="form-group">
                      <label for="name">Name</label>
                      <input type="text" name="name" class="form-control" id="name" placeholder="Enter Name">
                    </div>
                    <div class="form-group">
                      <label for="email">Email</label>
                      <input type="email" name="email" class="form-control" id="email"
                          placeholder="Enter email">
                  </div>
                  <div class="form-group">
                    <label for="mobile">Mobile</label>
                    <input type="tel" name="mobile" class="form-control" id="mobile"
                        placeholder="Enter mobile">
                </div>
                <div class="form-group">
                  <label for="gender">Gender</label>
                  <!-- radio -->
                  <div class="form-group clearfix">
                      <div class="icheck-primary d-inline">
                          <input type="radio" id="male" name="gender" checked>
                          <label for="male">
                              Male
                          </label>
                      </div>
                      <div class="icheck-primary d-inline">
                          <input type="radio" id="female" name="gender">
                          <label for="female">
                              Female
                          </label>
                      </div>
                  </div>
              </div>
              {{-- <div class="form-group">
                <label for="status">Status</label>
                <!-- radio -->
                <div class="form-group clearfix">
                    <div class="icheck-primary d-inline">
                        <input type="radio" id="male" name="status" checked>
                        <label for="Active">
                            Active
                        </label>
                    </div>
                    <div class="icheck-primary d-inline">
                        <input type="radio" id="InActive" name="status">
                        <label for="InActive">
                            InActive
                        </label>
                    </div>
                </div>
            </div> --}}

                    <div class="form-group">

                      <div class="form-check">
                        <input type="checkbox" name="status" class="form-check-input" id="status">
                        <label class="form-check-label" for="status">Active</label>
                      </div>
                    </div>
                    </div>

                   </div>
                  <!-- /.card-body -->

                  <div class="card-footer">
                    <button type="button" onclick="performStore()" class="btn btn-primary">Store</button>
                  </div>
                </form>
              </div>
            </div>

              <!-- /.card -->



          <!-- /.row -->
        </div><!-- /.container-fluid -->
      </section>
      <!-- /.content -->
@endsection

@section('scripts')

  <!-- Select2 -->
<script src="{{ asset('cms/plugins/select2/js/select2.full.min.js') }}"></script>
<script src="{{ asset('js/crud.js') }}"></script>

    <script>

    // function performStore(){
    //     let formData = new FormData();


    //       formData.append('name' , document.getElementById('name').value);
    //       formData.append('email' , document.getElementById('email').value);
    //       formData.append('mobile' , document.getElementById('mobile').value);
    //       formData.append('status' , document.getElementById('Active').checked? "Active":"InActive");
    //       formData.append('gender' , document.getElementById('male').checked? "M":"F");



    //     store('/cms/admin/admins',formData);
    // }
    function performStore(){

        let data = {
          name: document.getElementById('name').value,
          email: document.getElementById('email').value,
          mobile: document.getElementById('mobile').value,
          // status: document.getElementById('Active').checked? "Active":"InActive".value,
          gender: document.getElementById('male').checked? "M":"F",
          // formData.append('gender',document.getElementById('male').checked? "M":"F");
        };
          store('/cms/admin/admins', data);
      }
      </script>
@endsection

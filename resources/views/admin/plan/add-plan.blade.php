@extends('admin.layouts.master') 
@section('content')
    <!-- Main content -->
    <section class="content p-4">
      <div class="container-fluid">
          <div class="row">
              <div class="col-md-12">
                <div class="top-title pb-4">
                    <h4> Add Plan  </h4>
                </div>
            </div>
          </div>
          <!--2-->
          <div class="row mb-4">
            <div class="col-12">
            <div class="card card-info">
              <div class="card-header">
                <h3 class="card-title">Add Plan Information</h3>
              </div>
              
              <div class="card-body">
                  <div class="form-group">
                    <label for="inputName">Plan Name</label>
                    <input type="text" name="plane_name" id="inputName" class="form-control">
                  </div>
                   <div class="form-group">
                    <label for="inputuser">Add User Type</label>
                    <input type="text" name="plane_type" id="inputuser" class="form-control">
                  </div>
                   <div class="form-group">
                    <label for="inputmonth">Add Month Plan</label>
                    <input type="text" name="billing_style" id="inputmonth" class="form-control">
                  </div>
                  <div class="form-group">
                    <label for="inputmonth">Add Plan Price</label>
                    <input type="text" name="plane_price" id="inputmonth" class="form-control">
                  </div>
                  <div class="form-group">
                    <label for="inputmonth">Add Plan Discount</label>
                    <input type="text" name="plane_discount" id="inputmonth" class="form-control">
                  </div>
                  <div class="form-group">
                    <label for="inputmonth">Add Plan Credit</label>
                    <input type="text" name="plane_credit" id="inputmonth" class="form-control">
                  </div>
                  <div class="form-group">
                    <label for="inputDescription">Plan Description</label>
                    <textarea id="inputDescription" name="plane_price" class="form-control" rows="4"></textarea>
                  </div>

                    </div>
                  </div>
                </div>
              </div>
    
          </div>
    </section>

@endsection
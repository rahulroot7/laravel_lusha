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
              <div class="card-body p-0">
          <table class="table table-striped projects">
              <thead>
                  <tr>
                      <th>
                          Plan No
                      </th>
                      <th>
                          Plan Name
                      </th>
                      <th>
                          Add User
                      </th>
                      <th>
                          Add Month Plan
                      </th>
                      <th>
                          Project Progress
                      </th>
                      <th>
                          Add Payment
                      </th>
                      <th class="text-center">
                          Status
                      </th>
                      <th>
                      </th>
                  </tr>
              </thead>
              <tbody>
                  <tr>
                      <td>
                          1
                      </td>
                      <td>
                          <a>
                              Starter
                          </a>
                      </td>
                      <td>
                          Try it for free
                      </td>
                      <td>
                          free 
                      </td>
                        <td>
                           5 credits /mo 
                      </td>
                      <td class="project_progress">
                          <div class="progress progress-sm">
                              <div class="progress-bar bg-green" role="progressbar" aria-valuenow="57" aria-valuemin="0" aria-valuemax="100" style="width: 57%">
                              </div>
                          </div>
                          <small>
                              57% Complete
                          </small>
                      </td>
                      <td class="project-state">
                          <span class="badge badge-success">Success</span>
                      </td>
                      <td class="project-actions text-right">
                          <a class="btn btn-primary btn-sm" href="#">
                              <i class="fas fa-folder">
                              </i>
                              View
                          </a>
                          <a class="btn btn-info btn-sm" href="#">
                              <i class="fas fa-pencil-alt">
                              </i>
                              Edit
                          </a>
                          <a class="btn btn-danger btn-sm" href="#">
                              <i class="fas fa-trash">
                              </i>
                              Delete
                          </a>
                      </td>
                  </tr>
                  <!--2-->
                  <tr>
                      <td>
                          2
                      </td>
                      <td>
                          <a>
                              Professional
                          </a>
                      </td>
                      <td>
                          Up to 2 users
                      </td>
                      <td>
                          $59/ month 
                      </td>
                        <td>
                            1,200 credits /yr
                      </td>
                      <td class="project_progress">
                          <div class="progress progress-sm">
                              <div class="progress-bar bg-green" role="progressbar" aria-valuenow="12" aria-valuemin="0" aria-valuemax="100" style="width: 12%">
                              </div>
                          </div>
                          <small>
                              12% Complete
                          </small>
                      </td>
                      <td class="project-state">
                          <span class="badge badge-success">Success</span>
                      </td>
                      <td class="project-actions text-right">
                          <a class="btn btn-primary btn-sm" href="#">
                              <i class="fas fa-folder">
                              </i>
                              View
                          </a>
                          <a class="btn btn-info btn-sm" href="#">
                              <i class="fas fa-pencil-alt">
                              </i>
                              Edit
                          </a>
                          <a class="btn btn-danger btn-sm" href="#">
                              <i class="fas fa-trash">
                              </i>
                              Delete
                          </a>
                      </td>
                  </tr>
                  <!--3-->
                  <tr>
                      <td>
                          3
                      </td>
                      <td>
                          <a>
                             Premium
                          </a>
                      </td>
                      <td>
                          Up to 5 users
                      </td>
                      <td>
                          $119/ month 
                      </td>
                        <td>
                             3,600 credits /yr
                      </td>
                      <td class="project_progress">
                          <div class="progress progress-sm">
                              <div class="progress-bar bg-green" role="progressbar" aria-valuenow="77" aria-valuemin="0" aria-valuemax="100" style="width: 77%">
                              </div>
                          </div>
                          <small>
                              77% Complete
                          </small>
                      </td>
                      <td class="project-state">
                          <span class="badge badge-success">Success</span>
                      </td>
                      <td class="project-actions text-right">
                          <a class="btn btn-primary btn-sm" href="#">
                              <i class="fas fa-folder">
                              </i>
                              View
                          </a>
                          <a class="btn btn-info btn-sm" href="#">
                              <i class="fas fa-pencil-alt">
                              </i>
                              Edit
                          </a>
                          <a class="btn btn-danger btn-sm" href="#">
                              <i class="fas fa-trash">
                              </i>
                              Delete
                          </a>
                      </td>
                  </tr>
             <!--4-->
                  <tr>
                      <td>
                          4
                      </td>
                      <td>
                          <a>
                            Enterprise
                          </a>
                      </td>
                      <td>
                          Built to scale
                      </td>
                      <td>
                          Custom 
                      </td>
                        <td>
                             Custom plan Billed annually
                      </td>
                      <td class="project_progress">
                          <div class="progress progress-sm">
                              <div class="progress-bar bg-green" role="progressbar" aria-valuenow="35" aria-valuemin="0" aria-valuemax="100" style="width: 35%">
                              </div>
                          </div>
                          <small>
                              35% Complete
                          </small>
                      </td>
                      <td class="project-state">
                          <span class="badge badge-success">Success</span>
                      </td>
                      <td class="project-actions text-right">
                          <a class="btn btn-primary btn-sm" href="#">
                              <i class="fas fa-folder">
                              </i>
                              View
                          </a>
                          <a class="btn btn-info btn-sm" href="#">
                              <i class="fas fa-pencil-alt">
                              </i>
                              Edit
                          </a>
                          <a class="btn btn-danger btn-sm" href="#">
                              <i class="fas fa-trash">
                              </i>
                              Delete
                          </a>
                      </td>
                  </tr>
                  
                   
                  
                  
                  
            
              </tbody>
          </table>
        </div>
              
             
           
              <!-- /.card-body -->
            </div>
            
          </div>
               
          </div>

      </div>
    </section>
    <!-- /.content -->
  </div>
  </div>
  <!-- /.content-wrapper -->
@endsection
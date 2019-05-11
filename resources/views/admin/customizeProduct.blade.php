@include('admin/partials/header')
@include('admin/partials/sidebar')
@include('admin/partials/nav')


<div class="row justify-content-center align-content-center">
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-primary shadow h-100 py-2 ml-10">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="h5 mb-0 font-weight-bold text-gray-800">
                      	<a class="font-weight-bold btn" href="#">Add a New Product</a></div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-plus fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>


              <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-primary shadow h-100 py-2 ml-10">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="h5 mb-0 font-weight-bold text-gray-800">
                      	<a class="font-weight-bold btn" href="#">View Products</a></div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-camera fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>

          </div>

@include('admin/partials/footer')
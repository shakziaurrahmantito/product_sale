<section class="container-fluid">
  <div class="row">
    <div class="col-md-2 bg-dark" style="min-height: 550px;">
      <div id="accordian">
        <ul class="list-unstyled side-menu my-3">
              <li class="p-1"><a href=""><i class="fa fa-home"></i>Dashboard</a>
              </li>

              <li class="p-1"><a href="#select-1" class="" data-toggle="collapse"><i class="fa fa-user"></i>Unit</a>
                  <ul class="collapse list-unstyled ml-4" id="select-1" data-parent="#accordian">
                    <li><a href="{{url('/')}}">Unit List</a></li>
                  </ul>
              </li>

              <li class="p-1"><a href="#select-2" class="" data-toggle="collapse"><i class="fa fa-user"></i>Supplier</a>
                  <ul class="collapse list-unstyled ml-4" id="select-2" data-parent="#accordian">
                    <li><a href="{{url('/supplierlist')}}">Supplier List</a></li>
                  </ul>
              </li>

              <li class="p-1"><a href="#select-3" class="" data-toggle="collapse"><i class="fa fa-user"></i>Product</a>
                  <ul class="collapse list-unstyled ml-4" id="select-3" data-parent="#accordian">
                    <li><a href="{{url('/productadd')}}">Product Add</a></li>
                  </ul>
              </li>


              <li class="p-1"><a href="#select-4" class="" data-toggle="collapse"><i class="fa fa-user"></i>Order</a>
                  <ul class="collapse list-unstyled ml-4" id="select-4" data-parent="#accordian">
                    <li><a href="{{url('/orderadd')}}">Order Add</a></li>
                  </ul>
              </li>

              <li class="p-1"><a href="#select-11" class="" data-toggle="collapse"><i class="fa fa-sign-out"></i>Logout</a>
                  <ul class="collapse list-unstyled ml-4" id="select-11" data-parent="#accordian">
                    <li><a href="">Logout</a></li>
                  </ul>
              </li>
        </ul>
      </div>
  </div>
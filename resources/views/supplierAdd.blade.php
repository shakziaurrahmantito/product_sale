  @include("inc.header")
  @include("inc.sidebar")

  <div class="col-md-10">

    <div class="m-2 my-4">
      <div class="card my-2">
      <div class="card-body">
          <h3>Supplier Add</h3>
          <hr>

          <form method="post" action="{{Route('supplier.supplierInsert')}}">
            @csrf

            <div class="form-group row">
              <label for="supplier_name" class="col-sm-2 col-form-label font-weight-bold">Name * </label>

              <div class="col-sm-10">
                <input type="text" class="form-control" id="supplier_name" required name="supplier_name" placeholder="Enter name">
              </div>
            </div>

            <div class="form-group row">
              <label for="supplier_company" class="col-sm-2 col-form-label font-weight-bold">Company Name</label>

              <div class="col-sm-10">
                <input type="text" class="form-control" id="supplier_company" name="supplier_company" placeholder="Enter name">
              </div>
            </div>


            <div class="form-group row">
              <label for="supplier_mobail" class="col-sm-2 col-form-label font-weight-bold">Mobile No * </label>

              <div class="col-sm-10">
                <input type="text" class="form-control" id="supplier_mobail" required name="supplier_mobail" placeholder="Enter name">
              </div>
            </div>

            <div class="form-group row">
              <label for="supplier_address" class="col-sm-2 col-form-label font-weight-bold">Address No * </label>

              <div class="col-sm-10">
                <input type="text" class="form-control" id="supplier_address" required name="supplier_address" placeholder="Enter name">
              </div>
            </div>


            <div class="form-group row">

              <label for="supplier_status" class="col-sm-2 col-form-label font-weight-bold">Status *</label>

              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="supplier_status" id="supplier_status" value="1">
                <label class="form-check-label" for="inlineRadio1">Active</label>
              </div>

              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="supplier_status" id="supplier_status" value="0">
                <label class="form-check-label" for="supplier_status">Inactive</label>
              </div>

            </div>
            <hr>
            <button type="submit" class="btn btn-primary">Save</button>
          </form>


        
        </div>

      </div>
    </div>



    <div class="m-2 my-4">

      <div class="card my-2">
      

      <div class="card-body">
        <table id="example" class="display text-center" width="100%">
            <thead>
              <tr>
                <th >Name</th>
                <th>Company</th>
                <th>Mobile</th>
                <th>Address</th>
                <th>Opening Deu</th>
                <th>Status</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
              @foreach($getsupplier as $data)
              <tr align="center">
                <td>{{$data['supplier_name']}}</td>
                <td>{{$data['supplier_company']}}</td>
                <td>{{$data['supplier_mobail']}}</td>
                <td>{{$data['supplier_address']}}</td>
                <td>{{$data['supplier_due']}}</td>
                <td>
                  
                  @if($data['supplier_status'] == 1)
                   <span class="bg-success p-2 d-block text-center" style="width: 80px;">Active</span>
                  @else
                    <span class="bg-danger p-2 d-block text-center" style="width: 80px;">Inactive</span>
                  @endif
                </td>
                <td>
                  N/A
                   <!-- <a href=""><button data-toggle="modal" data-target="#updateBrand" class="btn btn-primary"><i class="fa fa-edit"></i></button></a> -->
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
  </section>

  <!--JavaScript Plugin-->
  <script type="text/javascript">
      $(document).ready(function() {
        $('#example').DataTable();
    } );
  </script>

  @include("inc.footer")
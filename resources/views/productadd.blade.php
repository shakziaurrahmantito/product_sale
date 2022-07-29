  @include("inc.header")
  @include("inc.sidebar")

  <?php

    use App\Models\unit;

  ?>

  <div class="col-md-10">

    <div class="m-2 my-4">
      <div class="card my-2">
      <div class="card-body">
          <h3>Product Add</h3>
          <hr>

          <form method="post" action="{{Route('product.productInsert')}}">
            @csrf

            <div class="form-group row">
              <label for="product_name" class="col-sm-2 col-form-label font-weight-bold">Name * </label>

              <div class="col-sm-10">
                <input type="text" class="form-control" id="product_name" required name="product_name" placeholder="Enter name">
              </div>
            </div>

            <div class="form-group row">
              <label for="product_unit" class="col-sm-2 col-form-label font-weight-bold">Unit</label>

              <div class="col-sm-10">

                <select name="product_unit" required class="form-control" id="product_unit">
                  <option value="">Select Unit</option>
                  @foreach($getunit as $data)
                  <option value="{{$data->unit_id}}">{{$data->unit_name}}</option>
                  @endforeach
                </select>
              </div>
            </div>


            <div class="form-group row">
              <label for="product_code" class="col-sm-2 col-form-label font-weight-bold">Code * </label>

              <div class="col-sm-10">
                <input type="text" class="form-control" id="product_code" required name="product_code" placeholder="Enter name">
              </div>
            </div>

            <div class="form-group row">
              <label for="product_description" class="col-sm-2 col-form-label font-weight-bold">Description </label>

              <div class="col-sm-10">
                <textarea name="product_description" class="form-control" id="product_description"></textarea>
              </div>
            </div>


            <div class="form-group row">

              <label for="product_status" class="col-sm-2 col-form-label font-weight-bold">Status *</label>

              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="product_status" id="product_status" value="1">
                <label class="form-check-label" for="product_status">Active</label>
              </div>

              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="product_status" id="product_status" value="0">
                <label class="form-check-label" for="product_status">Inactive</label>
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
                <th>Name</th>
                <th>Unit</th>
                <th>Code</th>
                <th>Description</th>
                <th>Status</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
              @foreach($getproduct as $data)
              <tr align="center">
                <td>{{$data['product_name']}}</td>
                <td>

                  <?php 

                    $getUnitData = unit::get()->where("unit_id", $data['product_unit']);
                    foreach($getUnitData as $unit_data){
                      echo $unit_data['unit_name'];
                    }

                  ?>

                </td>
                <td>{{$data['product_code']}}</td>
                <td>{{$data['product_description']}}</td>
                <td>
                  
                  @if($data['product_status'] == 1)
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
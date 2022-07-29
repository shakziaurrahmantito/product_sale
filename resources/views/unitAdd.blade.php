  @include("inc.header")
  @include("inc.sidebar")

  <div class="col-md-10">

    <div class="m-2 my-4">
      <div class="card my-2">
      <div class="card-body">
          <h3>Unit Add</h3>
          <hr>

          <form method="post" action="{{Route('uinsert.unitInsert')}}">
            @csrf
            <div class="form-group row">
              <label for="unit_name" class="col-sm-2 col-form-label font-weight-bold">Name * </label>

              <div class="col-sm-10">
                <input type="text" class="form-control" id="unit_name" required name="unit_name" placeholder="Enter name">
              </div>
            </div>

            <div class="form-group row">

              <label for="unit_status" class="col-sm-2 col-form-label font-weight-bold">Status *</label>

              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="unit_status" id="unit_status" value="1">
                <label class="form-check-label" for="inlineRadio1">Active</label>
              </div>

              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="unit_status" id="unit_status" value="0">
                <label class="form-check-label" for="unit_status">Inactive</label>
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
                <th width="20%">Name</th>
                <th width="40%">Status</th>
                <th width="40%">Action</th>
              </tr>
            </thead>
            <tbody>
              @foreach($getunit as $data)
              <tr align="center">
                <td>{{$data['unit_name']}}</td>
                <td>
                  
                  @if($data['unit_status'] == 1)
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
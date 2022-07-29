  @include("inc.header")
  @include("inc.sidebar")

  <div class="col-md-10">

    <div class="m-2 my-4">
      <div class="card my-2">
      <div class="card-body">
          <h3>Order Add</h3>
          <hr>

          <form method="post" action="{{Route('orderes.orderInsert')}}">
            @csrf



  <div class="form-row">

    <div class="form-group col-md-4">
      <label for="supplier_id" class="col-form-label">Supplier</label>
      <select class="form-control" required name="supplier_id">
        <option value="">Select Supplier</option>
          @foreach($getsupplier as $data)
            <option value="{{$data->supplier_id}}">{{$data->supplier_name}}</option>
          @endforeach
      </select>
    </div>

    <div class="form-group col-md-4">
      <label for="order_date" class="col-form-label">Date</label>
      <input type="date" class="form-control" required name="order_date">
    </div>

    <div class="form-group col-md-4">
      <label for="order_no" class="col-form-label">Order NO</label>
      <input type="text" placeholder="Order no" readonly required class="form-control" name="order_no" value="<?php

        if($getorderes){
           echo $getorderes->order_no+1;
        }else{
          echo 1000;
        }

    ?>">
    </div>

  </div>

    <table class="table">
      <thead>
        <tr>
          <th>Product Name</th>
          <th>Qty</th>
          <th>Unit Price</th>
          <th>Total Cost</th>
          <th></th>
        </tr>
      </thead>

      <tbody>

        

      </tbody>
      <tfoot>
        <tr>
          <td></td>
          <td></td>
          <td align="right">Total</td>
          <td class=""><span id="total"></span></td>
          <td></td>
        </tr>
      </tfoot>

    </table>

    <button type="button" id="addProduct" class="btn btn-success">Add Product</button>

    <hr>
    <button type="submit" class="btn btn-primary">Save</button>
  </form>


        
        </div>

      </div>
    </div>







      </div>
    </div>
  </section>



  <script type="text/javascript">


    


    function calculation(qty , price, show){
        var order_qty1    = $("#order_qty"+qty).val();
        var order_price1  = $("#order_price"+price).val();
        $("#addTotal"+show).html(order_qty1*order_price1);

        var total = 0;

        $(".perTotal").each(function(){

          total += parseInt($(this).text());

        });

        $("#total").text(total);

    }



    $("#addProduct").click(function(){
        var count = $(".count").length;
          $("tbody").append('<tr class="count"><td><select class="form-control" name="product_id[]" required><option value="">Select Product</option>@foreach($getproduct as $data)<option value="{{$data->product_id}}">{{$data->product_name}}</option>@endforeach</select></td><td><input type="number" onchange="calculation('+count+', '+count+','+count+')" class="form-control qty" id="order_qty'+count+'" required name="order_qty[]" placeholder="Qty"></td><td><input type="number" class="form-control order_price" onchange="calculation('+count+', '+count+', '+count+')"  id="order_price'+count+'" required name="order_price[]" placeholder="Unit Price"></td><td><span id="addTotal'+count+'" class="perTotal"></span></td> <td> <button type="button" class="btnRemove btn btn-danger">X</button>  </td> </tr>');
      });


      $('tbody').on('click', '.btnRemove', function() {
          $(this).parent().parent().remove();
      });

    
      


      


  </script>



  <!--JavaScript Plugin-->
  <script type="text/javascript">
      $(document).ready(function() {
        $('#example').DataTable();
    } );
  </script>

  @include("inc.footer")
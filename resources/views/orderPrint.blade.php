  @include("inc.header")
  @include("inc.sidebar")

	 <?php 

	    use App\Models\product;

	?>

  <style type="text/css">
  	@media print{

  		html, body{
  			visibility: hidden;
  		}

  		.printArea{
  			visibility: visible;
  		}

  	}
  </style>

    <div class="col-md-10">

    <div class="m-2 my-4">
      <div class="card my-2">
      <div class="card-header">
      	<a href="{{url('/orderadd')}}"><button class="btn btn-info float-left">Back</button></a>
      	<button class="btn btn-primary float-right" onclick="window.print()">Print</button>
      </div>
      <div class="card-body">
          	

          <div class="row printArea">

          	<div class="col-md-6">
          		<table class="table">
          			<tr>
          				<th width="40%">Order No</th>
          				<td width="5%">:</td>
          				<td>{{$getorderes->order_no}}</td>
          			</tr>
          			<tr>
          				<th width="40%">Order Date</th>
          				<td width="5%">:</td>
          				<td>{{$getorderes->order_date}}</td>
          			</tr>
          			<tr>
          				<th width="40%">Received Date</th>
          				<td width="5%">:</td>
          				<td>Not Received</td>
          			</tr>
          		</table>
          	</div>
          	<div class="col-md-6">
          		<table class="table">
          			<tr>
          				<th colspan="3" class="text-center">Supplier Info</th>
          			</tr>
          			<tr>
          				<th width="40%">Name</th>
          				<td width="5%">:</td>
          				<td>{{$getsupplierInfo->supplier_name}}</td>
          			</tr>
          			<tr>
          				<th width="40%">Company Name</th>
          				<td width="5%">:</td>
          				<td>{{$getsupplierInfo->supplier_company}}</td>
          			</tr>
          			<tr>
          				<th width="40%">Mobile</th>
          				<td width="5%">:</td>
          				<td>{{$getsupplierInfo->supplier_mobail}}</td>
          			</tr>
          			<tr>
          				<th width="40%">Address</th>
          				<td width="5%">:</td>
          				<td>{{$getsupplierInfo->supplier_address}}</td>
          			</tr>
          		</table>
          	</div>

          	<div class="col-md-12">


          		<table class="table">
          			<tr>
          				<th>Product Name</th>
          				<th>Quantity</th>
          				<th>Unit Price</th>
          				<th>Total</th>
          			</tr>
          			@php
          				$total = 0;
          			@endphp
          			@foreach($getProduct_id_all as $data)

          			<?php 

          				$getProductData = product::where("product_id", $data['product_id'])->first();

          			?>

          			<tr>
          				<td>{{$getProductData->product_name}}</td>
          				<td>{{$data->product_qty}}</td>
          				<td>{{$data->unit_price}}</td>
          				<td>@php
          					echo $data->product_qty * $data->unit_price;
          					$total += $data->product_qty * $data->unit_price
          				@endphp</td>
          			</tr>

          			@endforeach


          			<tr>
          				<td colspan="3" align="right" class="font-weight-bold">Total Amount</td>
          				<td>{{$total}}</td>
          			</tr>
          			
          		</table>



          	</div>

          </div>

         


        
        </div>
      </div>
    </div>







      </div>
    </div>
  </section>

  @include("inc.footer")
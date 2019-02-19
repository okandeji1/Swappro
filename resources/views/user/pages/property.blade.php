@extends('layouts.user')
@section('content')
<section class="wrapper site-min-height">
  <div class="card-tools mt-5 text-right">
    <button class="btn btn-success" data-toggle="modal" data-target="#addCategory">Add Category<i class="icon fa fa-plus fa-f2x"></i></button>
    <button class="btn btn-success" data-toggle="modal" data-target="#addProperty">Add Property<i class="icon fa fa-plus fa-f2x"></i></button>
  </div>
  <div class="row mt">
    <div class="col-md-12">
      <div class="content-panel">
        <table class="table table-striped table-advance table-hover">
          <h4><i class="fa fa-angle-right"></i> Advanced Table</h4>
          <hr>
          <thead>
            <tr>
              <th><i class="fa fa-bullhorn"></i> Company</th>
              <th class="hidden-phone"><i class="fa fa-question-circle"></i> Descrition</th>
              <th><i class="fa fa-bookmark"></i> Profit</th>
              <th><i class=" fa fa-edit"></i> Status</th>
              <th></th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>
                <a href="basic_table.html#">Company Ltd</a>
              </td>
              <td class="hidden-phone">Lorem Ipsum dolor</td>
              <td>12000.00$ </td>
              <td><span class="label label-info label-mini">Due</span></td>
              <td>
                <button class="btn btn-success btn-xs"><i class="fa fa-check"></i></button>
                <button class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i></button>
                <button class="btn btn-danger btn-xs"><i class="fa fa-trash-o "></i></button>
              </td>
            </tr>
            <tr>
              <td>
                <a href="basic_table.html#">
                  Dashio co
                  </a>
              </td>
              <td class="hidden-phone">Lorem Ipsum dolor</td>
              <td>17900.00$ </td>
              <td><span class="label label-warning label-mini">Due</span></td>
              <td>
                <button class="btn btn-success btn-xs"><i class="fa fa-check"></i></button>
                <button class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i></button>
                <button class="btn btn-danger btn-xs"><i class="fa fa-trash-o "></i></button>
              </td>
            </tr>
            <tr>
              <td>
                <a href="basic_table.html#">
                  Another Co
                  </a>
              </td>
              <td class="hidden-phone">Lorem Ipsum dolor</td>
              <td>14400.00$ </td>
              <td><span class="label label-success label-mini">Paid</span></td>
              <td>
                <button class="btn btn-success btn-xs"><i class="fa fa-check"></i></button>
                <button class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i></button>
                <button class="btn btn-danger btn-xs"><i class="fa fa-trash-o "></i></button>
              </td>
            </tr>
            <tr>
              <td>
                <a href="basic_table.html#">Dashio ext</a>
              </td>
              <td class="hidden-phone">Lorem Ipsum dolor</td>
              <td>22000.50$ </td>
              <td><span class="label label-success label-mini">Paid</span></td>
              <td>
                <button class="btn btn-success btn-xs"><i class="fa fa-check"></i></button>
                <button class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i></button>
                <button class="btn btn-danger btn-xs"><i class="fa fa-trash-o "></i></button>
              </td>
            </tr>
            <tr>
              <td>
                <a href="basic_table.html#">Total Ltd</a>
              </td>
              <td class="hidden-phone">Lorem Ipsum dolor</td>
              <td>12120.00$ </td>
              <td><span class="label label-warning label-mini">Due</span></td>
              <td>
                <button class="btn btn-success btn-xs"><i class="fa fa-check"></i></button>
                <button class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i></button>
                <button class="btn btn-danger btn-xs"><i class="fa fa-trash-o "></i></button>
              </td>
            </tr>
          </tbody>
        </table>
      </div>
      <!-- /content-panel -->
    </div>
            <!-- /col-md-12 -->
  </div>

  <!-- Property Modal -->

  <div class="modal fade" id="addProperty" tabindex="-1" role="dialog" aria-labelledby="addProperty" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="addNewLabel" v-show="editmode">Add Property</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form>
            {{ csrf_field() }}
      <div class="modal-body">
         <div class="form-group">
           <input type="text" name="address" placeholder="Address"
                  class="form-control {{ $errors->has('address') ? 'has-error' : '' }}">
         </div>

         <div class="form-group">
           <input type="text" name="lga" placeholder="LGA"
                  class="form-control {{ $errors->has('lga') ? 'has-error' : '' }}">
         </div>
         <div class="form-group">
           <input type="text" name="status" placeholder="Status"
                  class="form-control {{ $errors->has('status') ? 'has-error' : '' }}">
         </div>
         <div class="form-group">
                <select id="category" name="category"
                class="form-control type {{ $errors->has('category') ? 'has-error' : '' }}" data-dependent="sub_category">
                <option value="">Select Category </option>
                @foreach($PropertyType as $type)
                <option value="{{ $type->category}}">{{ $type->category }}</option>
                @endforeach
                {{--  <option value="warehouse">Warehouse</option>
                <option value="office">Office</option>  --}}
               </select>
              <has-error :form="form" field="type"></has-error>
         </div>
         <div class="form-group">
                <select id="sub_category" name="sub_category"
                class="form-control {{ $errors->has('sub_category') ? 'has-error' : '' }}" data-dependent="category">
                <option value="">Select Category </option>
                {{--  <option value="">0</option>  --}}
                {{--  <option value="warehouse">Warehouse</option>
                <option value="office">Office</option>  --}}
               </select>
              <has-error :form="form" field="type"></has-error>
         </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-outline-danger" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-success">Add</button>
        {{--  <button v-show="!editmode" type="submit" class="btn btn-outline-primary">Create</button>  --}}
      </div>
    </form>
    </div>
  </div>
</div>
{{-- Category Property End  --}}



<!-- Category Modal -->

<div class="modal fade" id="addCategory" tabindex="-1" role="dialog" aria-labelledby="addCategory" aria-hidden="true">
<div class="modal-dialog modal-dialog-centered" role="document">
  <div class="modal-content">
    <div class="modal-header">
      <h5 class="modal-title" id="addNewLabel" v-show="editmode">Add Category</h5>
      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>
    <form action="api/category" method="POST">
        {{ csrf_field() }}
    <div class="modal-body">
       <div class="form-group">
         <input type="number" name="category" placeholder="Category"
                class="form-control {{ $errors->has('category') ? 'has-error' : '' }}">
       </div>

       <div class="form-group">
         <input type="text" name="sub_category" placeholder="Sub Category"
                class="form-control {{ $errors->has('sub_category') ? 'has-error' : '' }}">
       </div>
    <div class="modal-footer">
      <button type="button" class="btn btn-outline-danger" data-dismiss="modal">Close</button>
      <button type="submit" class="btn btn-outline-success">Add Category</button>
    </div>
  </form>
  </div>
</div>
</div>
{{-- Category Modal End  --}}

</section>

<script>
        $(document).ready(function(){

         $('.type').change(function(){
          if($(this).val() != '')
          {
           var select = $(this).attr("id");
           var value = $(this).val();
           var dependent = $(this).data('dependent');
           var _token = $('input[name="_token"]').val();
           $.ajax({
            url:"{{ route('propertyType.fetch') }}",
            method:"POST",
            data:{select:select, value:value, _token:_token, dependent:dependent},
            success:function(result)
            {
             $('#'+dependent).html(result);
            }

           })
          }
         });

         $('#category').change(function(){
          $('#sub_category').val('');
          {{--  $('#city').val('');  --}}
         });

         $('#sub_category').change(function(){
          $('#category').val('');
         });


        });
        </script>
@endsection

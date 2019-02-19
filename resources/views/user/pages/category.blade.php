@extends('layouts.user')
@section('content')
<section class="wrapper site-min-height">
  <div class="card-tools mt-5 text-right">
    <button class="btn btn-success" data-toggle="modal" data-target="#addCategory">Add Category<i class="icon fa fa-plus fa-f2x"></i></button>
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

  <!-- Modal -->

  <div class="modal fade" id="addCategory" tabindex="-1" role="dialog" aria-labelledby="addCategory" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="addNewLabel" v-show="!editmode">Add New</h5>
        <h5 class="modal-title" id="addNewLabel" v-show="editmode">Update User's Info</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form @submit.prevent="editmode ? updateUser() : createUser()">
      <div class="modal-body">
         <div class="form-group">
           <input type="text" name="lga" placeholder="LGA"
                  class="form-control">
         </div>

         <div class="form-group">
           <input v-model="form.email" type="email" name="email" placeholder="Email Adress"
                  class="form-control" :class="{ 'is-invalid': form.errors.has('email') }">
           <has-error :form="form" field="email"></has-error>
         </div>

         <div class="form-group">
           <input v-model="form.password" type="password" name="password" placeholder="Password"
                  class="form-control" :class="{ 'is-invalid': form.errors.has('password') }">
           <has-error :form="form" field="password"></has-error>
         </div>

         <div class="form-group">
           <select id="type" name="type"
                  class="form-control">
                  <option value="">Select Property </option>
                  <option value="resident">Resident</option>
                  <option value="warehouse">Warehouse</option>
                  <option value="office">Office</option>
            </select>
           <has-error :form="form" field="type"></has-error>
         </div>

         <div class="form-group">
           <textarea id="bio" v-model="form.bio" name="bio" placeholder="Short bio for user (optional)"
                  class="form-control" :class="{ 'is-invalid': form.errors.has('bio') }"></textarea>
           <has-error :form="form" field="bio"></has-error>
         </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-outline-danger" data-dismiss="modal">Close</button>
        <button v-show="editmode" type="submit" class="btn btn-outline-success">Update</button>
        <button v-show="!editmode" type="submit" class="btn btn-outline-primary">Create</button>
      </div>
    </form>
    </div>
  </div>
</div>
</section>
@endsection
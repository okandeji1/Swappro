<template>
    <div class="container">
      <div class="card-tools">
        <button class="btn btn-outline-success" @click="newModal">Add New<i class="icon fa fa-user-plus fa-fw"></i></button>
        </div>
         <!-- row -->
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
        <!-- /row -->


        <!-- Modal -->

        <div class="modal fade" id="addNew" tabindex="-1" role="dialog" aria-labelledby="addNewLabel" aria-hidden="true">
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
           <input v-model="form.name" type="text" name="name" placeholder="Name"
                  class="form-control" :class="{ 'is-invalid': form.errors.has('name') }">
           <has-error :form="form" field="name"></has-error>
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
           <select id="type" v-model="form.type" name="type"
                  class="form-control" :class="{ 'is-invalid': form.errors.has('type') }">
                  <option value="">Select User Role</option>
                  <option value="admin">Admin</option>
                  <option value="user">Standard User</option>
                  <option value="author">Author</option>
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

        <!-- /Modal -->
    </div>
</template>

<script>
    export default {

        data(){
            return {
                editmode: false,
                users: {},
                form: new Form({
                    id: '',
                    name: '',
                    email: '',
                    password: '',
                    type: '',
                    bio: '',
                    photo: '',
                })
            }
        },

        methods: {
            getResults(page = 1){
                axios.get('api/user?page=' + page)
				.then(response => {
					this.users = response.data;
				});
            },
            updateUser(id){
                this.$Progress.start();
                // console.log('Editing data');
                this.form.put('api/user/' + this.form.id)
                .then(()=> {
                    //success
                    $('#addNew').modal('hide');

                 swal(
                         'Updated!',
                         'Information has been updated',
                         'Success'
                            )
                    this.$Progress.finish();
                     Fire.$emit('AfterCreate');
                })
                .catch(()=>{
                    this.$Progress.fail();
                })
            },
            editModal(user){
                this.editmode = true;
                this.form.reset();
                $('#addNew').modal('show');
                this.form.fill(user);
            },

             newModal(user){
                 this.editmode = false;
                this.form.reset();
                $('#addNew').modal('show');
            },
            deleteUser(id){
                swal({
                    title: 'Are you sure?',
                    text: "You won't be able to revert this!",
                    type: 'Warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3580d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Yes, delete it!',
                }).then((result) =>{
                    // Send request to the server
                 if(result.value){
                    this.form.delete('api/user/' + id).then(()=>{
                            swal(
                                'Deleted!',
                                'Your file has been deleted',
                                'Success'
                            )

                     Fire.$emit('AfterCreate');

                    }).catch(()=>{
                        swal(  'Oops!', 'There was something wrong', 'Warning');
                    })
                 }
                })
            },
            loadUsers(){
                if(this.$gate.isAdminOrAuthor()){
                    axios.get("api/user").then(({data})=>(this.users =data));
                }
            },

    createUser(){
        // progress bar
        this.$Progress.start();
      // Submit the form via a POST request
      this.form.post('api/user')

    .then(() => {

    //   Vue custom event
      Fire.$emit('AfterCreate')
    //   Hide Modal after user is created
    $('#addNew').modal('hide');
    //   Sweet alert
    toast({
        type: 'success',
        title: 'User created successfully'
    });
      this.$progress.finish();
        // .then(({ data }) => { console.log(data) })
})

.catch(() =>{

})
    }
  },
        // mounted() {
        //     console.log('Component mounted.')
        // }

        created(){
            Fire.$on('searching', () => {
                let query = this.$parent.search;
                axios.get('api/findUser?q=' + query)
                .then((data) => {
                    this.users = data.data;
                })
                .catch(() => {});
            })
            this.loadUsers();
            Fire.$on('AfterCreate', () => {
                this.loadUsers();
            });
            // setInterval(()=> this.loadUsers(), 3000);
        }
    }
</script>
<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Example Component</div>

                    <div class="form-panel">
                        <form role="form" class="form-horizontal style-form">
                            <div class="form-group has-success">
                            <label class="col-lg-2 control-label">First Name</label>
                            <div class="col-lg-10">
                                <input type="text" placeholder="" id="f-name" class="form-control">
                                <p class="help-block">Successfully done</p>
                            </div>
                            </div>
                            <div class="form-group has-error">
                            <label class="col-lg-2 control-label">Last Name</label>
                            <div class="col-lg-10">
                                <input type="text" placeholder="" id="l-name" class="form-control" >
                                <p class="help-block">Aha you gave a wrong info</p>
                            </div>
                            </div>
                            <div class="form-group has-warning">
                            <label class="col-lg-2 control-label">Email</label>
                            <div class="col-lg-10">
                                <input type="email" placeholder="" id="email2" class="form-control">
                                <p class="help-block">Something went wrong</p>
                            </div>
                            </div>
                            <div class="form-group">
                            <div class="col-lg-offset-2 col-lg-10">
                                <button class="btn btn-theme" type="submit">Submit</button>
                            </div>
                            </div>
                        </form>
                    </div>
            <!-- /form-panel -->
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>

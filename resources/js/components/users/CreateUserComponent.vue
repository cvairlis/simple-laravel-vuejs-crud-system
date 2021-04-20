<template>

  <div class="row justify-content-center">
      <div class="col-md-8">
          <div class="card card-default">
              <div class="card-header">Create User</div>

              <div class="card-body">
                <form @submit.prevent="addUser">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Name:</label>
                                <input type="text" class="form-control" v-model="user.name">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Email:</label>
                                <input type="text" class="form-control" v-model="user.email">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Password:</label>
                                <input type="text" class="form-control" v-model="user.password">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Departments:</label>
                                <input type="text" class="form-control" v-model="user.departments">
                            </div>
                        </div>
                    </div>
                    <br />
                    <div class="form-group">
                        <button class="btn btn-primary">Create</button>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        data(){
        return {
          user:{}
        }
    },
    methods: {
      addUser(){
        let uri = '/api/users';
        this.axios.post(uri, this.user).then((response) => {
          this.$router.push({name: 'users'});
        });
      }
    }
  }
</script>

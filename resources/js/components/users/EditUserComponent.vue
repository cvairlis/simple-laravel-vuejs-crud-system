<template>

  <div class="row justify-content-center">
      <div class="col-md-8">
          <div class="card card-default">
              <div class="card-header">Edit User</div>

              <div class="card-body">
                <form @submit.prevent="updateUser">
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
                    <br />
                    <div class="form-group">
                        <button class="btn btn-primary">Update</button>
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
        created() {
            let uri = `/api/users/${this.$route.params.id}/edit`;
            this.axios.get(uri).then((response) => {
                this.user = response.data;
            });
        },
        methods: {
            updateUser(){
                let uri = `/api/users/${this.$route.params.id}`;
                this.axios.put(uri, this.user).then((response) => {
                    this.$router.push({name: 'users'});
                });
            }
        }
    }
</script>

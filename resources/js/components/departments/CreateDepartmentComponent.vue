<template>

  <div class="row justify-content-center">
      <div class="col-md-8">
          <div class="card card-default">
              <div class="card-header">Create Department</div>

              <div class="card-body">
                <form @submit.prevent="addDepartment">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Name:</label>
                                <input type="text" class="form-control" v-model="department.name">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Description:</label>
                                <textarea class="form-control" v-model="department.description" rows="5"></textarea>
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
          department:{}
        }
    },
    methods: {
      addDepartment(){
        let uri = '/api/departments';
        this.axios.post(uri, this.department).then((response) => {
          this.$router.push({name: 'departments'});
        });
      }
    }
  }
</script>

<template>
    <div>
        <div class="d-flex justify-content-between align-content-center mb-2">
            <div class="d-flex">
                <div>
                    <div class="d-flex align-items-center ml-4">
                        <label for="paginate" class="text-nowrap mr-2 mb-0"
                            >Per Page</label
                        >
                        <select v-model="paginate" class="form-control form-control-sm">
                            <option value="10">10</option>
                            <option value="20">20</option>
                            <option value="30">30</option>
                        </select>
                    </div>
                </div>
            </div>
        </div>

        <div class="card-body table-responsive p-0">
            <table class="table table-hover">
                <tbody>
                    <tr>
                        <th><input type="checkbox" /></th>
                        <th>
                            Id
                        </th>
                        <th>
                            Name
                        </th>
                        <th>
                            Email
                        </th>
                        <th>
                            Departments
                        </th>
                        <th>
                            Created At
                        </th>
                        <!-- <th>Action</th> -->
                    </tr>

                    <tr v-for="user in users.data" :key="user.id">
                        <td>
                            <input type="checkbox" />
                        </td>
                        <td>{{ user.id }}</td>
                        <td>{{ user.name }}</td>
                        <td>{{ user.email }}</td>
                        <td>{{ user.departments }}</td>
                        <td>{{ user.date_created }}</td>
                        <!-- <td>
                            <button class="btn btn-danger btn-sm">
                                <i class="fa fa-trash" aria-hidden="true"></i>
                            </button>
                        </td> -->
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="row mt-4">
            <div class="col-sm-6 offset-5">
                <pagination :data="users" @pagination-change-page="getUsers"></pagination>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    data(){
        return {
            users: {},
            paginate : 10,
        }
    },
    watch:{
        paginate: function(value){
            this.getUsers();
        }
    },
    methods: {
        getUsers(page = 1){
            axios.get('/getUsers?page='+ page + '&paginate=' + this.paginate)
            .then(response => {
                this.users = response.data;
            });
        }
    },
    mounted(){
        this.getUsers();
    }
};
</script>

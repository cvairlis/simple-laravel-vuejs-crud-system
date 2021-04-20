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
                            Description
                        </th>
                        <th>
                            Created At
                        </th>
                        <th colspan="2" class="text-center">Actions</th>
                    </tr>

                    <tr v-for="department in departments.data" :key="department.id">
                        <td>
                            <input type="checkbox" />
                        </td>
                        <td>{{ department.id }}</td>
                        <td>{{ department.name }}</td>
                        <td>{{ department.description }}</td>
                        <td>{{ department.date_created }}</td>
                        <td><router-link :to="{name: 'departments.department.edit', params: { id: department.id }}" class="btn btn-primary">Edit</router-link></td>
                        <td><button class="btn btn-danger" @click = "deleteDepartment(department.id)">Delete</button></td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="row mt-4">
            <div class="col-sm-6 offset-5">
                <pagination :data="departments" @pagination-change-page="getDepartments"></pagination>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    data(){
        return {
            departments: {},
            paginate : 10,
        }
    },
    watch:{
        paginate: function(value){
            this.getDepartments();
        }
    },
    methods: {
        getDepartments(page = 1){
            axios.get('api/getDepartments?page='+ page + '&paginate=' + this.paginate)
            .then(response => {
                this.departments = response.data;
            });
        },
        deleteDepartment(id)
        {
            let uri = `/api/departments/${id}`;
            this.axios.delete(uri).then(response => {
                this.departments.splice(this.departments.indexOf(id), 1);
            });
        }
    },
    mounted(){
        this.getDepartments();
    }
};
</script>

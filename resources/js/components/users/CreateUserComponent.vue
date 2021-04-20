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
                                <label class="typo__label" for="ajax">Async multiselect for departments:</label>

                                <multiselect v-model="user.departments" id="ajax" label="name" track-by="code" placeholder="Type to search" open-direction="bottom" :options="departments" :multiple="true" :searchable="true" :loading="isLoading" :internal-search="false" :clear-on-select="false" :close-on-select="false" :options-limit="300" :limit="3" :limit-text="limitText" :max-height="600" :show-no-results="false" :hide-selected="true" @search-change="asyncFind">
                                    <template slot="tag" slot-scope="{ option, remove }"><span class="custom__tag"><span>{{ option.name }}</span><span class="custom__remove" @click="remove(option)">❌</span></span></template>
                                    <template slot="clear" slot-scope="props">
                                    <div class="multiselect__clear" v-if="selectedDepartments.length" @mousedown.prevent.stop="clearAll(props.search)"></div>
                                    </template><span slot="noResult">Oops! No elements found. Consider changing the search query.</span>
                                </multiselect>
                                <!-- <pre class="language-json"><code>{{ selectedDepartments }}</code></pre> -->
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
    import Multiselect from 'vue-multiselect';

    export default {
        components: { Multiselect },
        data(){
            return {
                user:{},
                selectedDepartments: [],
                departments: [],
                isLoading: false
            }
        },
        methods: {
            addUser(){
                let uri = '/api/users';
                this.axios.post(uri, this.user).then((response) => {
                    this.$router.push({name: 'users'});
                });
            },
            limitText(count) {
                return `and ${count} other departments`
            },
            asyncFind(query) {
                this.isLoading = true;
                axios.get(`/api/departments/search/${query}`).then(response => {
                    this.isLoading = false
                    this.departments = response.data
                });
            },
            clearAll() {
                this.selectedDepartments = []
            }
        }
    }
</script>

<style src="vue-multiselect/dist/vue-multiselect.min.css"></style>

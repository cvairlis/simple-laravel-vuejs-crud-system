<template>
  <div class="row justify-content-center">
      <div class="col-md-8">
          <div class="card card-default">
              <div class="card-header">Users</div>

              <div class="card-body">
                  <users-datatable-component></users-datatable-component>
              </div>
          </div>
      </div>
  </div>
</template>

<script>
    import UsersDatatableComponent from './UsersDatatableComponent.vue'
    export default {
        components: { UsersDatatableComponent },
            mounted() {
                console.log('Component mounted.')
            }
        }
</script>

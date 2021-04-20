<template>
  <div class="row justify-content-center">
      <div class="col-md-8">
          <div class="card card-default">
              <div class="card-header">Departments</div>

              <div class="card-body">
                  <departments-datatable-component></departments-datatable-component>
              </div>
          </div>
      </div>
  </div>
</template>

<script>
    import DepartmentsDatatableComponent from './DepartmentsDatatableComponent.vue'
    export default {
        components: { DepartmentsDatatableComponent },
            mounted() {
                console.log('Component mounted.')
            }
        }
</script>

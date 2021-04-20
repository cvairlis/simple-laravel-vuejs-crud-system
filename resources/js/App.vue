<template>
  <div class="p">
    <nav class="bg-white px-8 pt-2 pb-2 shadow-md">
        <div class="-mb-px flex justify-center">
            <router-link to="/" class="nav-link">Home</router-link>
            <router-link to="/users" class="nav-link">Users</router-link>
            <router-link to="/users/create" class="nav-link">Create User</router-link>
            <router-link to="/departments" class="nav-link">Departments</router-link>
            <router-link to="/departments/create" class="nav-link">Create Department</router-link>
        </div>
    </nav><br />
    <router-view></router-view>
  </div>
</template>

<script>

    export default{
    }
</script>

/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue').default;

import VueRouter from 'vue-router';
Vue.use(VueRouter);

import VueAxios from 'vue-axios';
import axios from 'axios';
Vue.use(VueAxios, axios);

import App from './App.vue';

import HomeComponent from './components/HomeComponent.vue';
import UsersComponent from './components/users/UsersComponent.vue';
import CreateUserComponent from './components/users/CreateUserComponent.vue';
import EditUserComponent from './components/users/EditUserComponent.vue';
import DepartmentsComponent from './components/departments/DepartmentsComponent.vue';
import CreateDepartmentComponent from './components/departments/CreateDepartmentComponent.vue';
import EditDepartmentComponent from './components/departments/EditDepartmentComponent.vue';

const routes = [
  {
      name: 'home',
      path: '/',
      component: HomeComponent
  },
  {
      name: 'users',
      path: '/users',
      component: UsersComponent
  },
  {
      name: 'users.create',
      path: '/users/create',
      component: CreateUserComponent
  },
  {
      name: 'users.user.edit',
      path: '/users/user/edit/:id',
      component: EditUserComponent
  },
  {
      name: 'departments',
      path: '/departments',
      component: DepartmentsComponent
  },
  {
      name: 'departments.create',
      path: '/departments/create',
      component: CreateDepartmentComponent
  },
  {
      name: 'departments.department.edit',
      path: '/departments/department/edit/:id',
      component: EditDepartmentComponent
  },
];

const router = new VueRouter({ mode: 'history', routes: routes});
const app = new Vue(Vue.util.extend({ router }, App)).$mount('#app');

Vue.component('pagination', require('laravel-vue-pagination'));

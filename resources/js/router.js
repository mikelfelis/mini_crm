import Vue from 'vue'
import Router from 'vue-router'

Vue.use(Router)

const router = new Router({
    mode: 'history',
    base: '/',
    routes: [
        {
            path: '/admin/home',
            name: 'admin/dashboard',
            component: () => import('./components/admin/Dashboard.vue'),
        },
        // {
        //     path: '/home',
        //     name: 'home',
        //     component: () => import('./components/Dashboard.vue'),
        // },
        // {
        //     path: '/companies',
        //     name: 'companies',
        //     component: () => import('./components/company/Companies.vue'),
        // },
        // {
        //     path: '/company/:id/edit',
        //     name: 'company-edit',
        //     component: () => import('./components/company/CompanyEdit.vue'),
        // },
        // {
        //     path: '/employees',
        //     name: 'employees',
        //     component: () => import('./components/employee/Employees.vue'),
        // },
        // {
        //     path: '/employee/:id/edit',
        //     name: 'employee-edit',
        //     component: () => import('./components/employee/EmployeeEdit.vue'),
        // },
        // Redirect to 404 page, if no match found
        {
            path: '*',
            redirect: '/pages/error-404'
        }
    ],
});

export default router;
<template>
    <div class="row justify-content-center">
        <div class="col-md-4">
            <div class="card">
                <div class="card-header">Companies</div>
                <div class="card-body">
                    There are x companies
                </div>
                <div class="card-footer text-center">
                    <!-- <router-link to="/companies">Show All</router-link> -->
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <div class="card-header">Employees</div>
                <div class="card-body">
                    There are y employees.
                </div>
                <div class="card-footer text-center">
                    <!-- <router-link to="/employees">Show All</router-link> -->
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>

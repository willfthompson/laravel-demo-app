<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Example Component</div>
                    <div class="title m-b-md">
                        {{title}}
                    </div>
                    <div class="card-body">
                        I can write things in here
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        props : ['title'],
        mounted() {
            console.log('Component mounted.')
            
        }
        
    }
</script>

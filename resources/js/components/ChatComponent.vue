<template>
    <div class="container">
        <div class="row justify-content-center">

            <div class="col-md-3">
                <div class="card card-default">
                    <div class="card-header">Private Chat App</div>
                    <ul class="list-group">
                        <li class="list-group-item">Cras justo odio</li>                    
                    </ul>
                </div>
            </div>

            <div class="col-md-9">
               <MessageComponent  v-if="open" @close="close"></MessageComponent>
            </div>

        </div>
    </div>
</template>

<script>
    import MessageComponent from './MessageComponent.vue';
    export default {
        data(){
            return{
                open:true,
            }
        },
        methods:{
            close(){
                this.open=false
            },            
        },
        created(){
            this.$on('close',()=>this.close);
        },
        components:{MessageComponent},
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>

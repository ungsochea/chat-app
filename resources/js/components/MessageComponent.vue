<template>
    <div class="card card-default chat-box">
        <div class="card-header">
            <b :class="{'text-danger':session_block}">
                {{friend.name}}
                <span v-if="session_block"> ( Blocked )</span>
            </b>
            <a href="" @click.prevent="close">
                <i class="far fa-times-circle float-right"></i>      
            </a>      

            <div class="dropdown float-right mr-4">               
                <a href="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                     <i class="fas fa-ellipsis-v "></i>
                </a>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                    <!-- <a class="dropdown-item" href="#" v-if="!session_block" @click.prevent="block">Block</a>
                    <a class="dropdown-item" href="#" v-if="session_block" @click.prevent="unblock">Unblock</a> -->
                    <a class="dropdown-item" href="#" v-if="session_block" @click.prevent="unblock">Unblock</a>
                    <a class="dropdown-item" href="#" @click.prevent="block" v-else>Block</a>                    
                    <a class="dropdown-item" href="#" @click.prevent="clear">Clear Chats</a>
                </div>
            </div>   

                
        </div>
        <div class="card-body" vue-chat-scroll>
            <p class="card-text" v-for="chat in chats" :key="chat.message">
                {{chat.message}}
            </p>
        </div>
        <form action="" class="card-footer" @submit.prevent="send">
            <div class="form-group">
                <input type="text" class="form-control" placeholder="Write your message here..." :disabled='session_block'>
            </div>
        </form>                    
    </div>
</template>

<script>
export default {
    props:['friend'],
    data(){
        return{
            chats:[],
            session_block:false,
        }           
        
    },

    methods:{
        send(){
            console.log('send')
        },
        close(){
            this.$emit('close')
        },
        clear(){
            this.chats=[]
        },
        block(){
            this.session_block=true            
        },
        unblock(){
            this.session_block=false 
        }
    },
    created(){
        this.chats.push(
            {message:'hello'},
            {message:'How are you?1'},
            {message:'How are you?2'},
            {message:'How are you?3'},
            {message:'How are you?4'},
            {message:'How are you?5'},
            {message:'How are you?6'},

            );
    },

  mounted() {
    console.log("Component mounted.");
  }
};
</script>
<style>
.chat-box{
    height: 300px;
}

.card-body{
    overflow-y: scroll
}
</style>


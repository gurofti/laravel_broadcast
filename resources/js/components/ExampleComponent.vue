<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Example Component</div>

                    <div class="card-body">
                        <input type="text" v-model="userId" placeholder="user id">
                        <input type="text" v-model="message" placeholder="message">
                        <button type="button"  v-on:click.prevent="pingUser">Click</button>
                    </div>
                    message: {{ message }}
                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    props: [
        'id'
    ],
    data () {
        return {
            userId: null,
            message: ""
        }
    },
    mounted() {
        /* Private */
        console.log('Component mounted.')
        console.log('userid: ', this.id)
        window.Echo.private('user.' + this.id.toString())
            .listen('.UserEvent', (e) => {
                console.log("aa", e)
            });

        /* Public
        console.log('Component mounted.')
        window.Echo.channel('user-channel')
            .listen('.UserEvent', (e) => {
                console.log(e)
            });*/
    },
    methods: {
        pingUser() {
            console.log('click axios')
            window.axios.post('/ping', {
                id: this.userId,
                message: this.message
            })
        }
    }
}
</script>

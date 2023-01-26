Vue.createApp({
    data() {
        return {
            message: 'Hello Vue 3!'
        }
    },
    methods: {
        setMessage(event) {
            this.message = event.target.value;
        }
    }
}).mount('#app2');
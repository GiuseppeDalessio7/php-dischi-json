const { createApp } = Vue

createApp({
    data() {
        return {
            mylist: ""
        }
    },
    methods: {

    },

    //chiamata axios
    mounted() {
        axios
            .get('myServer.php')
            .then(response => {
                console.log(response);
                this.list = response.data;
            })
    }
}).mount('#app')
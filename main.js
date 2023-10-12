const { createApp } = Vue

createApp({
    data() {
        return {
            mylist: null,
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
                this.mylist = response.data;
            })
    }
}).mount('#app')
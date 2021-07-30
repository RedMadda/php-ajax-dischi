const app = new Vue({

    el: "#app",
    data: {
        url: "api/dischi.php",
        dischi: "",
        genreOptions: [],
        selectedGenre: "",
        filteredArray : []
    },
    mounted(){
        axios
            .get(this.url)
            .then(el => {
                this.dischi = el.data;
                // this.getGenreS();
                // this.filterGenreS();
            })
    },
    methods: {

        // getGenreS(){
            
        // },
    
    }
});

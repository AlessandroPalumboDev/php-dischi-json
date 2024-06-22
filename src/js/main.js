const { createApp } = Vue;

createApp({
  data() {
    return {
      title: "PHP Dischi JSON",
      albumsUrl: "http://localhost/php-dischi-json/server.php/",
      albums: [],
      currentAlbum: null,
    };
  },

  methods: {
    getAlbums() {
      axios.get(this.albumsUrl).then((response) => {
        this.albums = response.data;
      });
    },
    getAlbumByID(id) {
      axios
        .get(this.albumsUrl, {
          params: {
            id: "id",
            info: "descrizione",
            brani: "brani",
            action: "read",
          },
        })
        .then((response) => {
          console.log(response.data);
          this.currentAlbum = response.data;
        });
    },
  },
  created() {
    this.getAlbums();
  },
}).mount("#app");

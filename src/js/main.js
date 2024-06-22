const { createApp } = Vue;

createApp({
  data() {
    return {
      title: "PHP Dischi JSON",
      albumsUrl: "http://localhost/php-dischi-json/server.php/",
      albums: [],
      currentAlbum: "",
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
            action: "read",
            id: id,
          },
        })
        .then((response) => {
          this.currentAlbum = response.data;
        });
    },
  },
  created() {
    this.getAlbums();
  },
}).mount("#app");

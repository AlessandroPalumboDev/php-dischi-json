const { createApp } = Vue;

createApp({
  data() {
    return {
      title: "PHP Dischi JSON",
      albumsUrl: "http://localhost/php-dischi-json/server.php",
      albums: [],
    };
  },

  methods: {
    getAlbums() {
      axios.get(this.albumsUrl).then((response) => {
        this.albums = response.data;
      });
    },
  },
  created() {
    this.getAlbums();
  },
}).mount("#app");

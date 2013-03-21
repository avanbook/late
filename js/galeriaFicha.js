 $(function() {

var galleries = $(".ad-gallery").adGallery({
  loader_image: "loader.gif",
  // Width of the image, set to false and it will 
  // read the CSS width
  width: 550, 
  // Height of the image, set to false and it 
  // will read the CSS height
  height: 410, 
  // Opacity that the thumbs fades to/from, (1 removes fade effect)
  // Note that this effect combined with other effects might be 
  // resource intensive and make animations lag

  slideshow: {
    enable: true,
    autostart: false,
    speed: 5000,
    
  },
  effect: 'fade'


  
});


 });
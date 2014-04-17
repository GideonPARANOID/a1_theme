$(function() {

   // resize each image on each one loading
   $('.post section.image img').each(function() {
      $(this).load(resize_image);   
   })
});


function resize_image() {
   // post image container width 
   var imageContainerWidth = $('article').width() + 150,
      imageContainerWidthMobile = $('article').width() + 70;

   $(window).width() < 700 ?
      $('.post section.image').css({
         width: imageContainerWidthMobile
      }) :
      $('.post section.image').css({
         width: imageContainerWidth
      });
   
   // post image centering
   $('.post section.image').each(function() {
      var imageHeight = $(this).find('img').height(),
         imageWidth = $(this).find('img').width();

      $(this).find('img').css({
         marginLeft: imageWidth / -2, marginTop: imageHeight / -2
      });
   });
}


$(window).resize(function() {

   // post image container width 
   var imageContainerWidth = $('article').width() + 150,
      imageContainerWidthMobile = $('article').width() + 70;

   $(window).width() < 700 ?
      $('.post section.image').css({
         width: imageContainerWidthMobile
      }) :
      $('.post section.image').css({
         width: imageContainerWidth
      });

   // post image centering
   $('.post section.image').each(function() {
      var imageHeight = $(this).find('img').height(),
         imageWidth = $(this).find('img').width();

      $(this).find('img').css({
         marginLeft: imageWidth / -2, marginTop: imageHeight / -2
      });
   });
});

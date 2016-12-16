// function CurrentFile(){
//      currentURL=window.location.href;
//      filenameIndex=currentURL.lastIndexOf("/")+1;
//      currentFileName=currentURL.substr(filenameIndex);
// }

// thisFile=currentFile();

// if (thisFile==""){
//      thisFile="index.php"
// }

// $("nav a").each( function() {
//      if (this.href.indexOf(thisFile)>0){
//           $(this).addClass("current");
//      }
// });


//WORKING

$(function(){
  $('nav a').each(function() {
    if ($(this).prop('href') == window.location.href) {
      $(this).closest('li').addClass('active');
    }
  });
});


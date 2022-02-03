  var selectedImageIndex = 0;


  function make_img_full(domElement) {
    //selected_image = domElement;
   gallery = document.getElementById("gallery");
   bigPhotoDiv = document.getElementById("big_photo_div");
   bigPhoto = document.getElementById("big_photo");
   bigPhoto.src =  domElement.src ;
   bigPhotoDiv.style.display="table-cell";

   for (var i = 0; i < imageArrayOrdered.length; i++) {
     if(imageArrayOrdered[i] == domElement.getAttribute("src")){
       selectedImageIndex = i;
       break;
     }
   }
 }

 function nextPrevImg(flag) {
   var gallery = document.getElementById("gallery");
   var bigPhoto = document.getElementById("big_photo");

   if(flag == 1){
     if(selectedImageIndex + 1 < imageArrayOrdered.length ){
       bigPhoto.src = imageArrayOrdered[selectedImageIndex+1];
       selectedImageIndex = selectedImageIndex + 1;
     }
     else{
       bigPhoto.src = imageArrayOrdered[0];
       selectedImageIndex = 0;
     }
   }

  if(flag == -1){
    if(selectedImageIndex - 1 >=0 ){
      bigPhoto.src = imageArrayOrdered[selectedImageIndex-1];
      selectedImageIndex = selectedImageIndex - 1;
    }
    else{
      bigPhoto.src = imageArrayOrdered[imageArrayOrdered.length-1];
      selectedImageIndex = imageArrayOrdered.length - 1;
    }

    }
  }

 function hide(){
   bigPhotoDiv = document.getElementById("big_photo_div");
   bigPhotoDiv.style.display="none";
 }



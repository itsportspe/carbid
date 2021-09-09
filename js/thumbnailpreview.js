// preview files before uploading / submitting

var fileUpload = document.getElementById("file-upload");
fileUpload.addEventListener("change", function(){
  if (fileUpload.files && fileUpload.files[0]) {
    var reader = new FileReader();
    reader.onload = function(evt) {
      var divInsertCols = document.getElementById("divInsertCols"); // get div where I want to do insertions
      var createImagePreviewDiv = document.createElement("div", { class : "col-2"}); // create div element to be inserted
      var createImagePreviewImg = document.createElement("img", { id : ""}); // create img element to be inserted
      createImagePreviewDiv.appendChild(createImagePreviewImg); // append the two elements together as parent and child
      divInsertCols.insertBefore(createImagePreviewDiv, null); // insert the div with the appended child into the DOM
      document.getElementById().src=evt.target.result; // set the src of the img tag
    }
    reader.readAsDataURL()
  }
});

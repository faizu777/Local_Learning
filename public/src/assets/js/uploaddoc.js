window.addEventListener('DOMContentLoaded', function () {

const uploadInput1 = document.getElementById('uploadInput1');

const uploadedImage1 = document.getElementById('uploadedImage1');

uploadInput1.addEventListener('change', function() {
  const file = this.files[0];
  if (file) {
    const reader = new FileReader();
    reader.onload = function(e) {
      uploadedImage1.src = e.target.result;
      
    }
    reader.readAsDataURL(file);
  }
});
const uploadInput2 = document.getElementById('uploadInput2');

const uploadedImage2 = document.getElementById('uploadedImage2');

uploadInput2.addEventListener('change', function() {
  const file = this.files[0];
  if (file) {
    const reader = new FileReader();
    reader.onload = function(e) {
      uploadedImage2.src = e.target.result;
     
    }
    reader.readAsDataURL(file);
  }
});
});
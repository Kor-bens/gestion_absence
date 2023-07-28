$(document).ready(function() {
    $('#image').change(function() {
      var file = this.files[0];
      if (file) {
        var imageURL = URL.createObjectURL(file);
        $('#image').attr('src', imageURL);
      }
    });
  });
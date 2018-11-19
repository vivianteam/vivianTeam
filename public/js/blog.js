
      var file = document.getElementById('chooseimg');
      var img = document.getElementById('image');
      file.addEventListener("change", function() {
        if (this.value) {
          var file = this.files[0];
          img.onload = function () {
            window.URL.revokeObjectURL(this.src);
          };
          img.src = window.URL.createObjectURL(file);
        }
        });
    
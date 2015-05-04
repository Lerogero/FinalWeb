var img = new Array();
var uploadIndex = 0;
var imageIndex = 0;

function readURL(input) {
    if (input.files && input.files[0]) {
        var fileList = input.files;
        for (var i = 0, file; file = fileList[i]; i++) {
            var reader = new FileReader();

            reader.onload = function (e) {
                img[uploadIndex] = new Image();
                img[uploadIndex].src = e.target.result;

                if (uploadIndex === 0) {
                    $('#img').attr('src', img[0].src);
                    $("#uploadForm").hide();
                }

                uploadIndex++;
            };
            reader.readAsDataURL(input.files[i]);
        }

    }
}






document.onkeydown = checkKey;

function checkKey(e) {

    e = e || window.event;

    if (e.keyCode == '37') {
        if (imageIndex === 0) {
            //do nothing
        } else {
            imageIndex--;
            $('#img').attr('src', img[imageIndex].src);
        }
    }
    if (e.keyCode == '39') {

        if (imageIndex >= uploadIndex) {
            //do nothing
        } else {
            imageIndex++;
            $('#img').attr('src', img[imageIndex].src);
        }
    }

}

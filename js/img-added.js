var fileInput = document.getElementById('file-input');
var fileNameElement = document.getElementById('file-name');

fileInput.addEventListener('change', function(e) {
    var fileName = e.target.files[0].name;
    fileNameElement.textContent = fileName;
});
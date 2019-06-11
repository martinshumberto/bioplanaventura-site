ClassicEditor.create(document.querySelector("#editor")).catch(error => {
    console.error(error);
});

Dropzone.options.fileUpload = {
    url: "#",
    addRemoveLinks: true,
    uploadMultiple: true,
    accept: function(file) {
        let fileReader = new FileReader();

        fileReader.readAsDataURL(file);
        fileReader.onloadend = function() {
            let content = fileReader.result;
            $("#file").val(content);
            file.previewElement.classList.add("dz-success");
        };
        file.previewElement.classList.add("dz-complete");
    }
};

//# sourceMappingURL=backend-abouts.js.map

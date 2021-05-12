$(document).ready(function () {
    let files = [];

    FilePond.registerPlugin(FilePondPluginFileValidateSize);
    FilePond.registerPlugin(FilePondPluginFileValidateType);
    FilePond.registerPlugin(FilePondPluginFileEncode);

    FilePond.setOptions({
        allowMultiple: true,
        maxFiles: 1000,
        maxFileSize: "100mb",
    });

    const inputElement = document.querySelector('input');

    const pond = FilePond.create(inputElement, {
        name: 'filename',
        maxFiles: 100,
        instantUpload: false,
        allowFileSizeValidation: true,
        allowFileEncode: true,
        allowProcess: true,
        allowReorder: true,
        allowPaste: true,
        maxFileSize: "100MB",
        labelIdle: "拖动或点击<span class=\"filepond--label-action\">浏览</span>选择待扫描的文件",
        onaddfile: (err, fileItem) => {
            if (!err) {
                files.push(fileItem.file);
            }
            //console.log(files);
        },
        onremovefile: (err, fileItem) => {
            const index = files.indexOf(fileItem.file);
            if (index > -1) {
                files.splice(index, 1);
            }
            //console.log(files);
        },
    });

    let formData = new FormData();

    $("#reset").on("click", function (e) {
        formData = new FormData();

        while (pond.getFiles().length > 0) {
            pond.removeFile(pond.getFiles()[0].id);
        }
    });

    

    $("#back").on("click", function (e) {
        location.reload();
    });

    $("#xForm").on("submit", function (e) {
        e.preventDefault();

        formData.set("fileCount", files.length);

        for (let i = 0; i < files.length; i++) {
            filename = files[i]["name"];
            formData.append(filename, files[i]);
            console.log(filename);
        }

        $("#fpond-input").attr('style', 'display: none !important;');
        $("#fpond-form").hide();

        $("#wait-cat").attr('style', '');
        $("#progress-bar-div").attr('style', '');

        $.ajax({
            xhr: function () {
                $("#percent").css("width", "0%");
                let xhr = new window.XMLHttpRequest();
                xhr.upload.addEventListener(
                    "progress",
                    function (e) {
                        if (e.lengthComputable) {
                            let percentComplete = e.loaded / e.total;
                            $("#percent").css("width", percentComplete * 100 + "%");
                            if (percentComplete * 100 == 100) {
                                $("#progress-bar-div").attr('style', 'display: none !important;');
                                $("#processing").attr('style', '');
                            }
                        }
                    },
                    false
                );
                return xhr;
            },
            type: "POST",
            url: "http://127.0.0.1:4000/upload",
            data: formData,
            cache: false,
            processData: false,
            contentType: false,
            enctype: "multipart/form-data",
            success: function (response) {
                console.log(response);
                $("#processing").attr('style', 'display: none !important;');
                $("#scan-report").attr('style', '');
                $("#cat").attr('src', 'img/stop-cat.png')
                $("#view-report").attr('href', response);
            },
            error: function (err) {
                console.log(err.responseText);
                $("#pdfForm").show();
                $(".progress").hide();
                $("#please").hide();
                $(".ajaxProgress").hide();
            },
        });
    });
})
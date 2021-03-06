// ************************ Drag and drop ***************** //
let dropArea = document.getElementById("drop-area")

// Prevent default drag behaviors
;['dragenter', 'dragover', 'dragleave', 'drop'].forEach(eventName => {
    dropArea.addEventListener(eventName, preventDefaults, false)
    document.body.addEventListener(eventName, preventDefaults, false)
})

// Highlight drop area when item is dragged over it
;['dragenter', 'dragover'].forEach(eventName => {
    dropArea.addEventListener(eventName, highlight, false)
})

;['dragleave', 'drop'].forEach(eventName => {
    dropArea.addEventListener(eventName, unhighlight, false)
})

// Handle dropped files
dropArea.addEventListener('drop', handleDrop, false)

function preventDefaults (e) {
    e.preventDefault()
    e.stopPropagation()
}

function highlight(e) {
    dropArea.classList.add('highlight')
}

function unhighlight(e) {
    dropArea.classList.remove('active')
}

function handleDrop(e) {
    var dt = e.dataTransfer
    var files = dt.files

    handleFiles(files)
}

let uploadProgress = [];
let progressBar = document.getElementById('progress-bar');
let fileses;

function initializeProgress(numFiles) {
    progressBar.value = 0
    uploadProgress = []

    for(let i = numFiles; i > 0; i--) {
        uploadProgress.push(0)
    }
}

function updateProgress(fileNumber, percent) {
    uploadProgress[fileNumber] = percent
    let total = uploadProgress.reduce((tot, curr) => tot + curr, 0) / uploadProgress.length
    console.debug('update', fileNumber, percent, total)
    progressBar.value = total
}

function handleFiles(files) {
    fileses = [...files]
    initializeProgress(files.length)
    //files.forEach(uploadFile)
    //uploadFile(files)
    fileses.forEach(previewFile)
}


function uploadFile() {
    var url = 'http://tararam.ua/edit/images/upload';
    var xhr = new XMLHttpRequest();
    var formData = new FormData();
    xhr.open('POST', url, true);
    xhr.setRequestHeader('X-Requested-With', 'XMLHttpRequest');

    // Update progress (can be used to show progress indicator)
    xhr.upload.addEventListener("progress", function(e) {
        updateProgress(i, (e.loaded * 100.0 / e.total) || 100)
    });

    xhr.addEventListener('readystatechange', function(e) {
        if (xhr.readyState == 4 && xhr.status == 200) {
            updateProgress(i, 100) // <- Add this
        }
        else if (xhr.readyState == 4 && xhr.status != 200) {
            // Error. Inform the user
        }
    });

    let imList = document.querySelectorAll("#gallery>.cartImg");
    let dtList =[];
    imList.forEach(
        function(im){
            let dtIm = {};
            if( im.querySelector(".chkDb>input").checked){
                let p = im.querySelector(".nameDb>input");
                dtIm.title =p.value;

                p=im.querySelector(".rateDB>input");
                dtIm.rate = p.value;

                p=im.querySelector(".tagsDb>textarea");
                dtIm.tags =p.value;

                dtList.push(dtIm);
            }
        }

);



    formData.append('serverPath',
        document.getElementById("serverPath").value );

    fileses.forEach(
        function(f){
            formData.append('imgs[]', f)}
    );

    dtList.forEach(
        function(f){
            formData.append('imgDT[]', f)}
    );
    xhr.send(formData)
}

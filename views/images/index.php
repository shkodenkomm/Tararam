<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>

</head>
<body>
<div id="drop-area">
    <form class="my-form">
        <p>Upload multiple files with the file dialog or by dragging and dropping images onto the dashed region</p>
        <input type="text" id="serverPath" />
        <label class="button" for="serverPath">Папка на сервере, если нет - будет создана</label>

        <input type="file" id="fileElem" multiple accept="image/*" onchange="handleFiles(this.files)">
        <button id="sendFiles" onclick="uploadFile()" >Отправить</button>
        <label class="button" for="fileElem">Select some files</label>
    </form>
    <progress id="progress-bar" max=100 value=0></progress>
    <div id="gallery"/>
</div>
</div>
</body>
<link rel="stylesheet" href="/web/css/uploader.css">
<script src="/web/js/uploader.js"></script>
</html>
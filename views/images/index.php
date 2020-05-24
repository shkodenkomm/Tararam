<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" href="/web/css/uploader.css">
    <link rel="stylesheet" href="/web/css/imgsCart.css">
</head>
<body>
    <div id="drop-area">
        <form class="my-form">
            <input type="text" id="serverPath" />
            <label class="button" for="serverPath">Папка на сервере, если нет - будет создана</label>

            <input type="file" id="fileElem" multiple accept="image/*" onchange="handleFiles(this.files)">
            <button id="sendFiles" onclick="uploadFile()" >Отправить</button>
            <label class="button" for="fileElem">Select some files</label>
        </form>
        <progress id="progress-bar" max=100 value=0></progress>

    </div>
    <div id="gallery">
        <div id="cartImgTemplate">
            <div class="chkDb"><input type="checkbox" name="addToDb" id="0" ></input ></div>
            <div class="imgDb"><img src="/web/data/imgs/cat.jpg" alt=""></div>
            <div class="rateDb">
                <input type="range" id="vol" name="vol" min="1" max="10" value="5" >
            </div>
            <div class="nameDb">
                <input type="text" maxlength="15" value="cat"/>
            </div>
            <div class="tagsDb"><textarea  rows="3" cols="20"></textarea> </div>
        </div>
    </div>
</body>
<script src="/web/js/edit/uploader.js"></script>
<script src="/web/js/edit/previewImgs.js"></script>
</html>
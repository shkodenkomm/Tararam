var modal = document.getElementById("myModal");

var imgsList = document.querySelectorAll(".row_gal.desctop img");
var srcList=[];

var currIndex=0;

tmpS = imgsList[currIndex].getAttribute("src");
iSlash = tmpS.lastIndexOf("/")+1;
var imgPath = tmpS.substr(0, iSlash);

for (var i = 0; i < imgsList.length; i++) {
    tmpS = imgsList[i].getAttribute("src");
    srcList.push(tmpS.substr(iSlash));
}

imgsList = null;

srcList.sort(function(_a, _b){
    iA = _a.indexOf("_");
    if(iA == -1) iA = _a.indexOf(".");

    iB = _b.indexOf("_");
    if(iB == -1) iB = _b.indexOf(".");

    var a, b = 0;

    a = _a.substr(0,iA) ;
    b = _b.substr(0,iB) ;

    return a - b
});

function SrcToIndex(_src){
    var index = 0;
    tmpS = _src.substr(_src.lastIndexOf("/")+1);
    for (var i = 0; i < srcList.length; i++) {
        if(srcList[i] == tmpS) {
            index = i;
            break;
        }
    }
    return index;
}

function IndexToSrc(_index){
    if(srcList.length<1) console.error("no set src List");
    var src= imgPath+srcList[_index];
    return src;
}

function plusSlides(slide){
    currIndex+=slide;

    if(currIndex < 0) currIndex = srcList.length-1;
    if(currIndex >= srcList.length) currIndex = 0;
    //console.lo g("set currIndex "+currIndex);

    previewClick(IndexToSrc(currIndex));
}

function previewClick(_src){

    var img = document.querySelector("img[src='"+_src+"']")


    var modalImg = document.getElementById("img01");
    var captionText = document.getElementById("caption");

    modal.style.display = "block";

    var fullSrc = img.src.replace("preview/","").replace("_hq","");

    fbq('track', 'ViewContent', { content_ids:  fullSrc.replace("https://svitlyna.in.ua/imgs","") });

    modalImg.src = fullSrc;
    captionText.innerHTML = img.alt;

    var span = document.getElementsByClassName("close")[0];

    span.onclick = function() {
        modal.style.display = "none";
    }
}



document.querySelector("section.root_img").
addEventListener("click",
    function(event){
        //console.log("clicked "+event.target);
        if (event.target.tagName=="IMG") {
            currIndex = SrcToIndex(event.target.getAttribute("src"));
            console.log("set currIndex "+currIndex);
            previewClick(event.target.getAttribute("src"));
        }
    }, false
)
//}

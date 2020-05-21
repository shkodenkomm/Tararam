function buildCart(f, r){
    let cart = document.createElement('div');
    cart.classList.add("cartImg");

    let cartHtml =  document.getElementById('cartImgTemplate').innerHTML.trim();
    cart.insertAdjacentHTML('beforeend', cartHtml);


    cart.querySelector(".chkDb>input").checked = true;
    cart.querySelector(".imgDb>img").src = r.result;
    cart.querySelector(".nameDb>input").value= f.name;

    cart.style.display = "flex";

    document.getElementById('gallery').appendChild(cart);

    // // рисунок
    // let img = document.createElement('img')
    // img.src = r.result
    // imgbox.appendChild(img)
    //
    // //имя файла
    // let label = document.createElement('div');
    // label.classList.add("filename");
    // label.textContent = f.name;
    //
    // imgbox.appendChild(label);
    //
    // document.getElementById('gallery').appendChild(imgbox);
}

function previewFile(file) {
    let reader = new FileReader()
    reader.readAsDataURL(file)
    reader.onloadend = function() {
        buildCart(file, reader);
    }
}

var danhsach = document.getElementById("danhsach");
var menu = document.getElementById("menu");
var xem = document.querySelector(".product");
var sp = document.querySelector(".col-md-4");
console.log(xem);
// console.log(sp);
var tt = true;
danhsach.addEventListener('click', function () {

    console.log("danhsach");
    if(tt === true){
        xem.classList.add('product-danhsach');
        xem.classList.remove('product');
        return tt = false;

    }
});
menu.addEventListener('click',function(){
    if(tt === false){
        xem.classList.add('product');
        xem.classList.remove('product-danhsach');
        return tt = true;
    }

});

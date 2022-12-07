function thanhtien(obj) {
    var soluong = obj.value;
    var gia = obj.parentNode.previousElementSibling.innerText;
    obj.parentNode.nextElementSibling.innerText = soluong * gia;

}
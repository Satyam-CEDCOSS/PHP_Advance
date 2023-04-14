function clicks() {
    let val = document.getElementById("word").value;
    console.log(val);
    let str = val.replace(/[`~!@#$%^&*()_|+\-=?;:'",.<>\{\}\[\]\\\/]/gi, '');
    document.getElementById("result").innerHTML = str;
}
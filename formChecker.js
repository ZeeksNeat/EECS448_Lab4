function checkForm() {

    let g = document.getElementById('gQuantity').value;
    let s = document.getElementById('sQuantity').value;
    let st = document.getElementById('steamQuantity').value;
    let x = document.getElementById('steamQuantity').value;
    let p = document.getElementById('ps4Quantity').value;
    let s1 = document.getElementById('s1');
    let s2 = document.getElementById('s2');
    let s3 = document.getElementById('s3');
    let u = document.getElementById('user').value;
    let pa = document.getElementById('pass').value;
    
    if (g < 0 || s < 0 || st < 0 || x < 0 || p < 0) { alert("Can't have negative quantity"); return false }
    
    if (u == "") { alert("Please enter username"); return false }

    if (pa == "") { alert("Please enter a password"); return false }

    if (!(s1.checked || s2.checked || s3.checked )) { alert("Please select a shipping method"); return false }

    return true;
}
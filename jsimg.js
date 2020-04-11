
function check(){
    var imgname = document.form2.upload1.value;

    if (imgname==""){
        alert("โปรดเลือกไฟล์");
        return false;
    }

    return true;
}
    
function YesOrNo(id,ordre){
    let xhr = new XMLHttpRequest();
    xhr.open("GET", "php/YesOrNo.php?id="+id+"&ordre="+ordre, true);
    xhr.onload = ()=>{
        if(xhr.readyState === XMLHttpRequest.DONE){
            if(xhr.status === 200){
            }
        }
    }
     xhr.send();
}
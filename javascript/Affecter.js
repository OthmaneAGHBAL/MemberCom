function Affecter(idPerson,idTache){
    let xhr = new XMLHttpRequest();
    xhr.open("GET", "php/Affecter.php?idPerson="+idPerson+"&idTache="+idTache, true);
    xhr.onload = ()=>{
        if(xhr.readyState === XMLHttpRequest.DONE){
            if(xhr.status === 200){
            }
        }
    }
     xhr.send();
}
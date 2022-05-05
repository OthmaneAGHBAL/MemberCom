const bodyTab = document.querySelector('#tableUtilisateur');
const bodyTabAtt = document.querySelector('#tableUtilisateurAtt');

setInterval(() =>{
    let xhr = new XMLHttpRequest();

    xhr.open("GET", "php/forUtilisateurs.php", true);
    xhr.onload = ()=>{
      if(xhr.readyState === XMLHttpRequest.DONE){
          if(xhr.status === 200){
            let data = xhr.response;
                bodyTab.innerHTML = data;
          }
      }
    }
    xhr.send();
  }, 500);

setInterval(() =>{  
  let xhrAtt = new XMLHttpRequest();
  xhrAtt.open("GET", "php/ForUserAtt.php", true);
  xhrAtt.onload = ()=>{
    if(xhrAtt.readyState === XMLHttpRequest.DONE){
        if(xhrAtt.status === 200){
          let dataAtt = xhrAtt.response;
          bodyTabAtt.innerHTML = dataAtt;
        }
    }
  }
  xhrAtt.send();
}, 500);
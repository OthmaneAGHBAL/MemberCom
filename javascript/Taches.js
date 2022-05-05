const Taches = document.querySelector("#Taches");

setInterval(() =>{
    let xhr = new XMLHttpRequest();
    xhr.open("GET", "php/Taches.php", true);
    xhr.onload = ()=>{
      if(xhr.readyState === XMLHttpRequest.DONE){
          if(xhr.status === 200){
            let data = xhr.response;
            Taches.innerHTML = data;
          }
      }
    }
    xhr.send();
  }, 500);
let dd=document.getElementById('dropdown');
let dd_ul=document.getElementById('dd_ul');
let links=document.getElementById('links');
let menu=document.getElementById('icon');
dd.addEventListener("click",(e)=>{
  if(dd_ul.style.display == "none"){
      dd_ul.style.display = "flex";
  }else{
    dd_ul.style.display = "none";
  
  }
    });
    document.addEventListener('click', (e)=>{
        let check_mate = dd.contains(event.target);
        if (!check_mate) {
            dd_ul.style.display = "none";
        }
    });
    links.addEventListener("click",(e)=>{
        let confirm = window.confirm("Are you sure you want to navigate?");
        if (confirm) {
            window.alert("reirecting you to different page");
    
            window.location.href = "window-location.html";
    
        }
    });
    menu.addEventListener('click', (e)=>{
        if(links.style.display == "none"){
            links.style.display = "block";
        }else{
          links.style.display = "none";
        
        }
    });
document.addEventListener("DOMContentLoaded",()=>{
    iniciarApp();
    navegacion();
    navegacionFija();
});

function iniciarApp(){
    crearGaleria();
}

function navegacion(){
    const enlaces = document.querySelectorAll(".header__navegacion a");
    enlaces.forEach((enlace)=>{
        enlace.addEventListener("click", function(e){
            e.preventDefault();
            const indice = document.querySelector(e.target.attributes.href.value);
            indice.scrollIntoView({behavior: "smooth"});
        })
    })
}

function navegacionFija(){
    const body = document.querySelector("body");
    const header = document.querySelector(".header");
    const lineup = document.querySelector("#lineup");
    window.addEventListener("scroll",function(){
        if(lineup.getBoundingClientRect().top>0){
            header.classList.remove("headerFijo");
            body.classList.remove("scrollBody");
        }else{
            header.classList.add("headerFijo");
            body.classList.add("scrollBody");
        }
    })
}

function crearGaleria(){
    const galeria = document.querySelector(".galeria__fotos");

    for(let i=1;i<=12;i++){
        const foto = document.createElement("picture");
        foto.innerHTML = `
            <source srcset="build/img/thumb/${i}.avif" type="image/avif">
            <source srcset="build/img/thumb/${i}.webp" type="image/webp">
            <img width="200" height="300" loading="lazy" src="build/thumb/${i}.jpg" alt="thumb ${i}">
        `;
        galeria.appendChild(foto);

        foto.onclick =  function(){
            mostrarFoto(i);
        }

    }


}

function mostrarFoto(id){
    const nuevaFoto = document.createElement("picture");
    const boton = document.createElement("p");
    const lay = document.createElement("div");
    const body = document.querySelector("body");
    nuevaFoto.innerHTML = `
        <source srcset="build/img/grande/${id}.avif" type="image/avif">
        <source srcset="build/grande/${id}.webp" type="image/webp">
        <img width="200" height="300" loading="lazy" src="build/grande/${id}.jpg" alt="thumb ${id}">
    `;
    boton.innerHTML = "X";
    boton.classList.add("botonX");
    body.classList.add("bodyFijo");
    lay.classList.add("layFijo");
    lay.classList.add("orientation");

    lay.appendChild(nuevaFoto);
    lay.appendChild(boton);
    body.appendChild(lay);

    boton.onclick = function(){
        lay.remove();
        body.classList.remove("bodyFijo");
    }

    lay.onclick = function(){
        lay.remove();
        body.classList.remove("bodyFijo");
    }
}
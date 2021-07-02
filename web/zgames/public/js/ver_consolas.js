const cargarTabla = (consolas) =>{
    let tbody = document.querySelector("#tbody-consolas");
    
    consolas.forEach((c)=>{
        let tr = document.createElement("tr");

        let tdNombre = document.createElement("td");
        let tdMarca = document.createElement("td");
        let tdAnno = document.createElement("td");
        let tdAcciones = document.createElement("td");
        let btnEliminar = document.createElement("button");

        tdNombre.innerText = c.Nombre;
        tdMarca.innerText = c.Marca;
        tdAnno.innerText = c.anno;
        btnEliminar.innerText="Eliminar";
        btnEliminar.classList.add('btn', 'btn-danger');
        btnEliminar.idConsola = c.id;
        tdAcciones.appendChild(btnEliminar);

        tr.appendChild(tdNombre);
        tr.appendChild(tdMarca);
        tr.appendChild(tdAnno);
        tr.appendChild(tdAcciones);

        tbody.appendChild(tr);
    });
};

document.addEventListener("DOMContentLoaded", async()=>{
    let consolas = await getConsolas();
    cargarTabla(consolas);
});
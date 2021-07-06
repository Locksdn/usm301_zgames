const iniciarEliminacion = async function(){
    let id = this.idConsola;
    
    let resp = await Swal.fire({
        title:"Estas Seguro?",
        text:"Esta accion es irreversible",
        icon: 'error',
        showCancelButton:true
    });
    if (resp.isConfirmed){
        
        if (await eliminarConsola(id)){
            cargarTabla(await getConsolas());
            Swal.fire("Consola eliminada", "Consola eliminada exitosamente", "info");
        } else {
            Swal.fire("Error", "No se pudo eliminar la consola", "error");
        }
    } else {
        Swal.fire("Cancelado", "Cancelado a peticion del usuario", "info");
    }
};

const cargarTabla = (consolas) =>{
    let tbody = document.querySelector("#tbody-consolas");
    tbody.innerHTML = "";
    
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
        btnEliminar.addEventListener("click", iniciarEliminacion);
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
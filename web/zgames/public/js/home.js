const cargarMarcas = async()=>{
    let resultado = await axios.get("api/marcas/get");
    let marcas = resultado.data;

    let marcaSelect = document.querySelector("#marca-select");
    marcas.forEach(m=>{
        let option = document.createElement("option");
        option.innerText = m;
        marcaSelect.appendChild(option);
    });
}

cargarMarcas();

document.querySelector("#registrar-btn").addEventListener("click", async()=>{
    let nombre = document.querySelector('#nombre').value;
    let marca = document.querySelector('#marca-select').value;
    let anno = document.querySelector('#anno').value;

    let consola = {};
    consola.nombre = nombre;
    consola.marca = marca;
    consola.anno = anno;

    let res = await crearConsola(consola);
    Swal.fire('Consola agregada');
});
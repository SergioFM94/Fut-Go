async function crearMapa(){
    const response = await fetch("http://localhost/MVC2/view/PUBLIC/src/json.php");
    const json = await response.json();

    var map = L.map('map').setView([40.416, -3.703], 5);

    L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
        maxZoom: 19,
        attribution: '© OpenStreetMap'
    }).addTo(map);

    for(let i = 0; i < json.campos.length; i++){
        let marker = L.marker([json.campos[i].latitud, json.campos[i].longitud]).addTo(map).bindPopup(json.campos[i].nombre);
    }
}
crearMapa();


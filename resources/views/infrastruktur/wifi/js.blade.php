@section('js')
<script>

    var map = L.map('map').setView([-6.914744, 107.609810], 13);
        var tiles = L.tileLayer(
            'https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token=pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXVycTA2emYycXBndHRqcmZ3N3gifQ.rJcFIG214AriISLbB6B5aw', {
                maxZoom: 18,
                attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors, ' +
                    'Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
                id: 'mapbox/streets-v11',
                tileSize: 512,
                zoomOffset: -1
            }).addTo(map);

        $.getJSON('api/wifi', function(data) {
            $.each(data, function(i) {
                L.marker([data[i].latitude, data[i].longitude]).addTo(map).on('click', (e) => {
                    L.marker([data[i].latitude, data[i].longitude]).addTo(map)
                });
            });
        });
        $(document).ready(function() {

        })
</script>
@stop
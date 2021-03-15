<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Тестовое задание</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://unpkg.com/leaflet@1.2.0/dist/leaflet.css" />
        <link rel="stylesheet" href="https://unpkg.com/leaflet-routing-machine@latest/dist/leaflet-routing-machine.css" />
    </head>
    <body>
    <form method="post" action="/">
        <div>
            <label for="zip-from">Zip-код (район отбытия):</label>
            <input id="zip-from" name="zip_from" type="text" maxlength="8" required>
        </div>
        <div>
            <label for="zip-to">Zip-код (район прибытия):</label>
            <input id="zip-to" name="zip_to" type="text" maxlength="8">
        </div>
        @csrf
        <button type="submit">Расчитать</button>
    </form>
    @foreach ($errors->all() as $error)
        <div>{{ $error }}</div>
    @endforeach

    @if($hasData)
        <p>Дистанция между городами (на машине): {{ $distance }} метров</p>
        <table>
            <tr>
                <th>Перевозчик</th>
                <th>Телефон</th>
            </tr>
            @foreach ($carriers as $carrier)
                <tr>
                    <td>{{ $carrier->name }}</td>
                    <td>{{ $carrier->phone }}</td>
                </tr>
            @endforeach
        </table>
        <div style="width: 100%; height: 500px;" id="map"></div>
    @endif
    </body>
    <script src="https://unpkg.com/leaflet@1.2.0/dist/leaflet.js"></script>
    <script src="https://unpkg.com/leaflet-routing-machine@latest/dist/leaflet-routing-machine.js"></script>
    <script>
        @if ($hasData)
        const map = L.map('map');

        L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
            attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
        }).addTo(map);
        L.Routing.control({
            waypoints: [
                L.latLng({{ $coordinates['from'][0] }}, {{ $coordinates['from'][1] }}),
                L.latLng({{ $coordinates['to'][0] }}, {{ $coordinates['to'][1] }}),
            ]
        }).addTo(map);
        @endif
    </script>
</html>

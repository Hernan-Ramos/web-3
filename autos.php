<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Autos Destacados</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #f3f4f6;
      margin: 0;
      padding: 2rem;
    }
    h1 {
      text-align: center;
      color: #1f2937;
    }
    .autos {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
      gap: 1.5rem;
      margin-top: 2rem;
    }
    .card {
      background: white;
      border-radius: 10px;
      box-shadow: 0 4px 8px rgba(0,0,0,0.05);
      overflow: hidden;
      transition: transform 0.3s ease;
    }
    .card:hover {
      transform: scale(1.03);
    }
    .card img {
      width: 100%;
      height: 180px;
      object-fit: cover;
    }
    .card-content {
      padding: 1rem;
    }
    .card-content h2 {
      margin: 0;
      font-size: 1.2rem;
      color: #111827;
    }
    .card-content p {
      font-size: 0.9rem;
      color: #4b5563;
      margin-top: .5rem;
    }
  </style>
</head>
<body>

<h1>🚘 Autos Destacados</h1>

<div class="autos">
  <div class="card">
    <img src="https://s1.elespanol.com/2019/09/09/omicrono/ferrari-coches-omicrono_427968584_134194054_1706x960.jpg" alt="Toyota Supra">
    <div class="card-content">
      <h2>Toyota Supra</h2>
      <p>Un clásico moderno con motor turbo y diseño deportivo. Ideal para los amantes de la velocidad.</p>
    </div>
  </div>

  <div class="card">
    <img src="https://www.diariomotor.com/imagenes/2012/10/tesla-roadster-000.jpg?class=XL" alt="Tesla Model S">
    <div class="card-content">
      <h2>Tesla Model S</h2>
      <p>Eléctrico, elegante y potente. Autonomía de más de 600 km y tecnología de conducción autónoma.</p>
    </div>
  </div>

  <div class="card">
    <img src="https://cdn.autobild.es/sites/navi.axelspringer.es/public/bdc/dc/fotos/Rolls_Royce_Spectre_10.jpg?tf=3840x" alt="Ford Bronco">
    <div class="card-content">
      <h2>Ford Bronco</h2>
      <p>Diseñado para la aventura. Tracción 4x4, estilo retro y gran capacidad off-road.</p>
    </div>
  </div>
</div>

</body>
</html>

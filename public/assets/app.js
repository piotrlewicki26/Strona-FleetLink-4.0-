(async () => {
  const tableBody = document.querySelector('#vehiclesTableBody');
  const stats = {
    online: document.querySelector('[data-stat="online"]'),
    service: document.querySelector('[data-stat="service"]'),
    offline: document.querySelector('[data-stat="offline"]')
  };

  const response = await fetch('/api/vehicles.php', { headers: { Accept: 'application/json' } });
  const data = await response.json();

  let online = 0;
  let service = 0;
  let offline = 0;

  for (const vehicle of data.vehicles) {
    if (vehicle.status === 'online') online += 1;
    if (vehicle.status === 'service') service += 1;
    if (vehicle.status === 'offline') offline += 1;

    const row = document.createElement('tr');
    row.innerHTML = `
      <td>${vehicle.name}</td>
      <td>${vehicle.plate_number}</td>
      <td>${vehicle.status}</td>
      <td>${vehicle.latitude ?? '-'}, ${vehicle.longitude ?? '-'}</td>
      <td>${vehicle.updated_at}</td>
    `;
    tableBody.appendChild(row);
  }

  stats.online.textContent = String(online);
  stats.service.textContent = String(service);
  stats.offline.textContent = String(offline);
})();

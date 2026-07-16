(async () => {
  const tableBody = document.querySelector('#vehiclesTableBody');
  const stats = {
    online: document.querySelector('[data-stat="online"]'),
    service: document.querySelector('[data-stat="service"]'),
    offline: document.querySelector('[data-stat="offline"]')
  };

  try {
    const response = await fetch('/api/vehicles.php', { headers: { Accept: 'application/json' } });
    if (!response.ok) {
      throw new Error('Request failed');
    }
    const data = await response.json();

    let online = 0;
    let service = 0;
    let offline = 0;

    for (const vehicle of data.vehicles ?? []) {
      if (vehicle.status === 'online') online += 1;
      if (vehicle.status === 'service') service += 1;
      if (vehicle.status === 'offline') offline += 1;

      const row = document.createElement('tr');
      const cells = [
        vehicle.name,
        vehicle.plate_number,
        vehicle.status,
        `${vehicle.latitude ?? '-'}, ${vehicle.longitude ?? '-'}`,
        vehicle.updated_at
      ];
      for (const cellValue of cells) {
        const cell = document.createElement('td');
        cell.textContent = String(cellValue ?? '-');
        row.appendChild(cell);
      }
      tableBody.appendChild(row);
    }

    stats.online.textContent = String(online);
    stats.service.textContent = String(service);
    stats.offline.textContent = String(offline);
  } catch (error) {
    const row = document.createElement('tr');
    const cell = document.createElement('td');
    cell.colSpan = 5;
    cell.textContent = 'Nie udało się pobrać danych pojazdów.';
    row.appendChild(cell);
    tableBody.appendChild(row);
  }
})();

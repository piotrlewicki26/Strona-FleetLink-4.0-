CREATE TABLE IF NOT EXISTS vehicles (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(120) NOT NULL,
    plate_number VARCHAR(40) NOT NULL UNIQUE,
    status ENUM('online', 'offline', 'service') NOT NULL DEFAULT 'offline',
    latitude DECIMAL(10, 7) NULL,
    longitude DECIMAL(10, 7) NULL,
    updated_at TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
);

INSERT INTO vehicles (name, plate_number, status, latitude, longitude)
SELECT 'Van 01', 'FL-001', 'online', 52.2296756, 21.0122287
WHERE NOT EXISTS (SELECT 1 FROM vehicles WHERE plate_number = 'FL-001');

INSERT INTO vehicles (name, plate_number, status, latitude, longitude)
SELECT 'Truck 02', 'FL-002', 'service', 50.0646501, 19.9449799
WHERE NOT EXISTS (SELECT 1 FROM vehicles WHERE plate_number = 'FL-002');

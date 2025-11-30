CREATE DATABASE IF NOT EXISTS laravel_final CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
USE laravel_final;

CREATE TABLE products (
  id BIGINT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
  title VARCHAR(255) NOT NULL,
  description TEXT,
  category VARCHAR(100),
  image_path VARCHAR(255),
  created_at TIMESTAMP NULL,
  updated_at TIMESTAMP NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

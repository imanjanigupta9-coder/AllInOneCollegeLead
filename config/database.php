<?php
// config/database.php

$host = 'localhost';
$dbname = 'online_degree';
$username = 'root'; // Default XAMPP username
$password = '';     // Default XAMPP password (empty)

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8mb4", $username, $password);
        
            // Set PDO error mode to exception
                $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                    // Fetch associative arrays by default
                        $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
                            // Disable emulated prepared statements for strict types
                                $pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
                                    
                                    } catch (PDOException $e) {
                                        // In production, log the error instead of outputting it.
                                            error_log("Database Connection Error: " . $e->getMessage());
                                                header('HTTP/1.1 500 Internal Server Error');
                                                    echo json_encode(['status' => 'error', 'message' => 'Database connection failed.']);
                                                        exit;
                                                        }
                                                        ?>
                                                        
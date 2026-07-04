<?php
// api/submit.php
session_start();
require_once '../config/database.php';

header('Content-Type: application/json');

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    echo json_encode(['status' => 'error', 'message' => 'Invalid request method.']);
        exit;
        }

        // 1. CSRF Protection Check
        if (!isset($_POST['csrf_token']) || !hash_equals($_SESSION['csrf_token'], $_POST['csrf_token'])) {
            echo json_encode(['status' => 'error', 'message' => 'Invalid CSRF token. Please refresh the page.']);
                exit;
                }

                // 2. Rate Limiting (Prevent spamming)
                if (isset($_SESSION['last_submission']) && (time() - $_SESSION['last_submission']) < 30) {
                    echo json_encode(['status' => 'error', 'message' => 'Please wait 30 seconds before submitting again.']);
                        exit;
                        }

                        // 3. Input Sanitization & Collection
                        $fullName = trim(filter_input(INPUT_POST, 'full_name', FILTER_SANITIZE_STRING));
                        $mobile = trim(filter_input(INPUT_POST, 'mobile', FILTER_SANITIZE_STRING));
                        $email = trim(filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL));
                        $city = trim(filter_input(INPUT_POST, 'city', FILTER_SANITIZE_STRING));
                        $highestQual = trim(filter_input(INPUT_POST, 'highest_qualification', FILTER_SANITIZE_STRING));
                        $workExp = trim(filter_input(INPUT_POST, 'work_experience', FILTER_SANITIZE_STRING));
                        $program = trim(filter_input(INPUT_POST, 'preferred_program', FILTER_SANITIZE_STRING));

                        // Metadata
                        $ipAddress = $_SERVER['REMOTE_ADDR'];
                        $userAgent = $_SERVER['HTTP_USER_AGENT'];

                        // 4. Server-Side Validation
                        if (empty($fullName) || empty($mobile) || empty($email) || empty($city) || empty($highestQual) || empty($program)) {
                            echo json_encode(['status' => 'error', 'message' => 'Please fill in all required fields.']);
                                exit;
                                }

                                if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                                    echo json_encode(['status' => 'error', 'message' => 'Please enter a valid email address.']);
                                        exit;
                                        }

                                        if (!preg_match('/^[0-9]{10}$/', $mobile)) {
                                            echo json_encode(['status' => 'error', 'message' => 'Please enter a valid 10-digit mobile number.']);
                                                exit;
                                                }

                                                // 5. Database Insertion (Prepared Statement prevents SQL Injection)
                                                try {
                                                    $stmt = $pdo->prepare("
                                                            INSERT INTO admissions 
                                                                    (full_name, mobile, email, city, highest_qualification, work_experience, preferred_program, ip_address, user_agent) 
                                                                            VALUES (:full_name, :mobile, :email, :city, :highest_qualification, :work_experience, :preferred_program, :ip_address, :user_agent)
                                                                                ");

                                                                                    $stmt->execute([
                                                                                            ':full_name' => $fullName,
                                                                                                    ':mobile' => $mobile,
                                                                                                            ':email' => $email,
                                                                                                                    ':city' => $city,
                                                                                                                            ':highest_qualification' => $highestQual,
                                                                                                                                    ':work_experience' => $workExp,
                                                                                                                                            ':preferred_program' => $program,
                                                                                                                                                    ':ip_address' => $ipAddress,
                                                                                                                                                            ':user_agent' => $userAgent
                                                                                                                                                                ]);

                                                                                                                                                                    // Update last submission time
                                                                                                                                                                        $_SESSION['last_submission'] = time();

                                                                                                                                                                            echo json_encode(['status' => 'success', 'message' => 'Application submitted successfully! Our counselor will contact you shortly.']);

                                                                                                                                                                            } catch (PDOException $e) {
                                                                                                                                                                                error_log("Submission Error: " . $e->getMessage());
                                                                                                                                                                                    echo json_encode(['status' => 'error', 'message' => 'An error occurred. Please try again later.']);
                                                                                                                                                                                    }
                                                                                                                                                                                    ?>
                                                                                                                                                                                    
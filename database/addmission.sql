CREATE DATABASE IF NOT EXISTS online_degree CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
USE online_degree;

CREATE TABLE IF NOT EXISTS admissions (
    id INT AUTO_INCREMENT PRIMARY KEY,
        full_name VARCHAR(100) NOT NULL,
            mobile VARCHAR(15) NOT NULL,
                email VARCHAR(100) NOT NULL,
                    city VARCHAR(100) NOT NULL,
                        highest_qualification VARCHAR(100) NOT NULL,
                            work_experience VARCHAR(50) NOT NULL,
                                preferred_program VARCHAR(100) NOT NULL,
                                    ip_address VARCHAR(45) NOT NULL,
                                        user_agent TEXT NOT NULL,
                                            created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
                                            );

                                            -- Indexes for faster querying
                                            CREATE INDEX idx_email ON admissions(email);
                                            CREATE INDEX idx_mobile ON admissions(mobile);
                                            CREATE INDEX idx_created_at ON admissions(created_at);
                                            
CREATE TABLE work_experience (
    id INT AUTO_INCREMENT PRIMARY KEY,
    company_name VARCHAR(255) NOT NULL,
    job_title VARCHAR(255) NOT NULL,
    start_date DATE NOT NULL,
    end_date DATE,
    description TEXT
);

INSERT INTO work_experience (company_name, job_title, start_date, end_date, description)
VALUES
('AP Computer Science Curriculum Coordinator, / Zinkerz.com', 'Instructor', '2023-12-01', NULL, 'Monitored and guided students advancement in the course, ensuring a personalized and successful learning path. Created engaging content to enhance understanding and delve into advanced concepts.'),
('AP Computer Science Instructor / Zinkerz.com', 'Instructor', '2022-11-01', NULL, 'Instruct and teach students concepts of AP Computer Science Principles. Prepare students for the AP exam.'),
('Computer Science Intern', 'Intern', '2020-09-01', '2021-06-01', 'Help teach students computer science. Assisted teaching.');

CREATE TABLE contactMe (
    id INT AUTO_INCREMENT PRIMARY KEY,
    fullname VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL,
    phonenum VARCHAR(20),
    message TEXT,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);
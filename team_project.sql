USE team_intro;

CREATE TABLE members (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL,
    mssv VARCHAR(20) NOT NULL,
    role VARCHAR(255) NOT NULL,
    skills VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL,
    github VARCHAR(255) NOT NULL
);

CREATE TABLE project (
    id INT AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(255) NOT NULL,
    description TEXT NOT NULL
);

CREATE TABLE timeline (
    id INT AUTO_INCREMENT PRIMARY KEY,
    start_date DATE NOT NULL,
    end_date DATE NOT NULL,
    description VARCHAR(255) NOT NULL,
    status VARCHAR(50) NOT NULL
);

CREATE TABLE contact (
    id INT AUTO_INCREMENT PRIMARY KEY,
    email VARCHAR(255) NOT NULL,
    github VARCHAR(255) NOT NULL
);

INSERT INTO members (name, mssv, role, skills, email, github) VALUES
('Đặng Hoàng Phú', '52300237', 'Người triển khai Docker và CI/CD', 'Docker', '52300237@student.tdtu.edu.vn', 'https://github.com/PhuDauPo'),
('Huỳnh Nguyễn Quốc Việt', '52300267', 'Người phát triển ứng dụng Web', 'HTML, CSS, JavaScript, Node.js', '52300267@student.tdtu.edu.vn', 'https://github.com/Vinsmoke-Visconti'),
('Đặng Thị Kim Nguyên', '52300136', 'Người thiết kế giao diện và cơ sở dữ liệu', 'Figma, MySQL', '52300136@student.tdtu.edu.v', '');

INSERT INTO project (title, description) VALUES
('Container trong Phát triển và Triển khai Web (Docker)', 'Đồ án nghiên cứu việc sử dụng Docker để đơn giản hóa triển khai ứng dụng web bằng cách đóng gói ứng dụng và các phụ thuộc. Các điểm chính bao gồm cơ bản về Docker, điều phối, khả năng mở rộng và các lợi ích như tính di động và hiệu quả tài nguyên.');

INSERT INTO timeline (start_date, end_date, description, status) VALUES
('2025-04-01', '2025-04-06', 'Bắt đầu nghiên cứu Docker', 'Hoàn thành'),
('2025-04-07', '2025-04-13', 'Thiết kế giao diện và cơ sở dữ liệu', 'Hoàn thành'),
('2025-04-14', '2025-04-20', 'Phát triển ứng dụng Web', 'Hoàn thành'),
('2025-04-21', '2025-04-27', 'Triển khai với Docker và CI/CD', 'Hoàn thành');

INSERT INTO contact (email, github) VALUES
('contact@teamdocker.com', 'https://github.com/PhuDauPo/Project_WEB_MIDTERM');
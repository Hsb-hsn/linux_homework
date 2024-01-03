-- 初始化数据库表结构
CREATE TABLE users (
  id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
  name VARCHAR(30) NOT NULL,
  age VARCHAR(5) NOT NULL,
  email VARCHAR(50) NOT NULL,
  phonenumber VARCHAR(20) NOT NULL
);

-- 插入示例数据
INSERT INTO users (name, age, email, phonenumber) VALUES ('abc', '25', 'abc@habhan.com', '12345678910');
INSERT INTO users (name, age, email, phonenumber) VALUES ('cba', '31', 'cba@habhan.com', '01987654321');
INSERT INTO users (name, age, email, phonenumber) VALUES ('lll', '31', 'lll@habhan.com', '15614541541');
INSERT INTO users (name, age, email, phonenumber) VALUES ('eee', '31', 'eee@habhan.com', '65514527865');


CREATE DATABASE gujarati_dhaba;

USE gujarati_dhaba;

CREATE TABLE menu_items (
    id INT AUTO_INCREMENT PRIMARY KEY,
    item_name VARCHAR(100),
    description TEXT,
    price INT
);

CREATE TABLE orders (
    id INT AUTO_INCREMENT PRIMARY KEY,
    customer_name VARCHAR(100),
    table_number INT,
    item_id INT,
    quantity INT,
    total_price INT,
    order_time DATETIME,
    FOREIGN KEY (item_id) REFERENCES menu_items(id)
);
INSERT INTO menu_items (item_name, description, price) VALUES
('Sev Tameta nu Shaak', 'Tangy tomato curry cooked with crispy sev.', 120),
('Bajri no Rotlo', 'Traditional millet flatbread, served with white butter.', 40),
('Ringan no Olo', 'Smoked brinjal mash seasoned with garlic and spices.', 90),
('Gujarati Kadhi', 'Sweet and tangy yogurt-based curry.', 70),
('Thepla', 'Soft methi (fenugreek) flatbreads served with chutney.', 60),
('Fafda Jalebi', 'Crispy gram flour strips with hot jalebis.', 100),
('Dal Dhokli', 'Wheat dumplings cooked in spiced dal gravy.', 110),
('Handvo', 'Savory lentil and rice cake, tempered with mustard seeds.', 80),
('Undhiyu', 'Famous mixed vegetable curry cooked in spices.', 150),
('Khaman Dhokla', 'Soft steamed gram flour snack with mustard seasoning.', 60),
('Khichdi', 'Comforting rice and dal preparation, served with kadhi.', 90),
('Chaas (Buttermilk)', 'Spiced chilled buttermilk drink.', 30),
('Shrikhand', 'Sweet, thick strained yogurt flavored with cardamom.', 80),
('keri no ras',  'mango jucie.',50),
('Aloo Tameta nu Shaak', 'Simple potato and tomato curry with traditional masala.', 100);

select* from menu_items;
select* from orders;
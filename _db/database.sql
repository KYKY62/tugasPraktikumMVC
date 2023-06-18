CREATE TABLE tb_kategori (
	kat_id TINYINT(3) NOT NULL AUTO_INCREMENT,
	kat_nama VARCHAR(50) NOT NULL,
	kat_keterangan TEXT DEFAULT NULL,
	created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
	updated_at DATETIME DEFAULT NULL,
	PRIMARY KEY(kat_id)
);

CREATE TABLE tb_users (
	user_id INT(11) NOT NULL AUTO_INCREMENT,
	user_email VARCHAR(50) NOT NULL,
	user_password VARCHAR(100) NOT NULL,
	user_nama VARCHAR(100) DEFAULT NULL,
	user_alamat TEXT DEFAULT NULL,
	user_hp VARCHAR(25) DEFAULT NULL,
	user_pos VARCHAR(5) DEFAULT NULL,
	user_role TINYINT(2),
	user_aktif TINYINT(2),
	created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
	updated_at DATETIME DEFAULT NULL,
	PRIMARY KEY(user_id),
	UNIQUE KEY(user_email)
);

CREATE TABLE tb_produk (
	produk_id INT(11) NOT NULL AUTO_INCREMENT,
	produk_id_kat TINYINT(3) NOT NULL,
	produk_id_user INT(11) NOT NULL,
	produk_kode VARCHAR(50) NOT NULL,
	produk_nama VARCHAR(256) NOT NULL,
	produk_hrg DOUBLE DEFAULT '0',
	produk_keterangan TEXT DEFAULT NULL,
	produk_stock INT(11) DEFAULT '0',
	produk_photo VARCHAR(100) DEFAULT NULL,
	created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
	updated_at DATETIME DEFAULT NULL,
	PRIMARY KEY(produk_id),
	UNIQUE KEY(produk_kode),
	FOREIGN KEY(produk_id_kat) REFERENCES tb_kategori(kat_id) ON UPDATE CASCADE ON DELETE RESTRICT,
	FOREIGN KEY(produk_id_user) REFERENCES tb_users(user_id) ON UPDATE CASCADE ON DELETE RESTRICT
);

CREATE TABLE tb_keranjang (
	ker_id INT(11) NOT NULL AUTO_INCREMENT,
	ker_id_user INT(11) NOT NULL,
	ker_id_produk INT(11) NOT NULL,
	ker_harga DOUBLE,
	ker_jml INT(11),
	PRIMARY KEY(ker_id),
	FOREIGN KEY(ker_id_user) REFERENCES tb_users(user_id) ON UPDATE CASCADE ON DELETE RESTRICT,
	FOREIGN KEY(ker_id_produk) REFERENCES tb_produk(produk_id) ON UPDATE CASCADE ON DELETE RESTRICT
);

CREATE TABLE tb_order (
	order_id INT(11) NOT NULL AUTO_INCREMENT,
	order_id_user INT(11) NOT NULL,
	order_tgl TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
	order_kode VARCHAR(50) NOT NULL,
	order_ttl DOUBLE,
	order_kurir VARCHAR(100),
	order_ongkir INT(11) DEFAULT '0',
	order_byr_deadline DATETIME,
	order_batal TINYINT(1),
	updated_at DATETIME DEFAULT NULL,
	PRIMARY KEY(order_id),
	UNIQUE KEY(order_kode),
	FOREIGN KEY(order_id_user) REFERENCES tb_users(user_id) ON UPDATE CASCADE ON DELETE RESTRICT
);

CREATE TABLE tb_order_detail (
	detail_id_order INT(11) NOT NULL,
	detail_id_produk INT(11) NOT NULL,
	detail_harga DOUBLE,
	detail_jml INT(11),
	FOREIGN KEY(detail_id_order) REFERENCES tb_order(order_id) ON UPDATE CASCADE ON DELETE RESTRICT,
	FOREIGN KEY(detail_id_produk) REFERENCES tb_produk(produk_id) ON UPDATE CASCADE ON DELETE RESTRICT	
);
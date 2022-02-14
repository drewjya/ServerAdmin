CREATE TABLE users(
    ID varchar(10),
    Nama varchar(255),
    Alamat varchar(255),
    Jabatan varchar(255),
    PRIMARY KEY(ID)
);

INSERT INTO users (ID, Nama, Alamat, Jabatan)
VALUES ('1234567890', 'Jane Doe', 'Jl. Sayap Kudus', 'Professional Procrastinator');
-- referensi: https://i.stack.imgur.com/FS7IN.png / https://dba.stackexchange.com/questions/64945/airline-reservation-system
-- # ada 10 tabel

-- buat skema database
create database basdat_travel;
use basdat_travel;

create table penumpang(
    id_penumpang varchar(8) primary key ,
    nama varchar(50) not null,
    telepon varchar(15)
)Engine=InnoDB;

create table kota(
    id_kota varchar(8) primary key ,
    nama_kota varchar(50) not null
)Engine=InnoDB;

create table cabang(
    id_cabang varchar(8) primary key ,
    id_kota varchar(8) not null,
    nama_cabang varchar(50) not null,
    alamat varchar(50) not null,
    constraint fk_cabang_idkota foreign key(id_kota) references kota(id_kota)
)Engine=InnoDB;

create table mobil(
    nopol varchar(12) primary key ,
    id_cabang varchar(8) not null,
    kapasitas int(11) not null,
    constraint fk_mobil_idcabang foreign key(id_cabang) references cabang(id_cabang)
)Engine=InnoDB;

create table rute(
    id_rute varchar(8) primary key ,
    id_cabang_asal varchar(8) not null,
    id_cabang_tujuan varchar(8) not null,
    nopol varchar(12) not null,
    constraint fk_rute_idcabang_asal foreign key(id_cabang_asal) references cabang(id_cabang),
    constraint fk_rute_idcabang_tujuan foreign key(id_cabang_tujuan) references cabang(id_cabang)
)Engine=InnoDB;

create table jadwal(
    id_jadwal varchar(8) primary key ,
    id_rute varchar(8) not null,
    waktu_berangkat timestamp not null,
    waktu_tiba timestamp not null,
    harga int(12)not null,
    constraint fk_jadwal_idrute foreign key(id_rute) references rute(id_rute)
)Engine=InnoDB;

create table pemberangkatan(
    id_pemberangkatan varchar(8) primary key ,
    id_jadwal varchar(8) not null,
    status_pemberangkatan varchar(50),
    constraint fk_pemberangkatan_idjadwal foreign key(id_jadwal) references jadwal(id_jadwal)
)Engine=InnoDB;

create table petugas(
    id_petugas varchar(8) primary key ,
    username varchar(50),
    password varchar(50),
    nama varchar(50) not null
)Engine=InnoDB;

create table pembayaran(
    id_pembayaran varchar(8) primary key ,
    id_petugas varchar(8),
    metode_pembayaran varchar(50),
    tgl_pembayaran date not null,
    total_harga int(12),
    constraint fk_pembayaran_idpetugas foreign key(id_petugas) references petugas(id_petugas)
)Engine=InnoDB;

create table tiket(
    id_tiket varchar(8) primary key ,
    id_pemberangkatan varchar(8) not null,
    id_penumpang varchar(8) not null,
    id_pembayaran varchar(8),
    tgl_keberangkatan date,
    constraint fk_tiket_idpemberangkatan foreign key(id_pemberangkatan) references pemberangkatan(id_pemberangkatan),
    constraint fk_tiket_idpenumpang foreign key(id_penumpang) references penumpang(id_penumpang),
    constraint fk_tiket_idpembayaran foreign key(id_pembayaran) references pembayaran(id_pembayaran)
)Engine=InnoDB;



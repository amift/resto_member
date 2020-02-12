CREATE VIEW member_v AS SELECT m.id,
     m.nama,
     m.jenis_kelamin,
     m.alamat,
     m.telepon,
     m.`type`,
     mt.keterangan AS type_member
FROM member m, membership_type mt
WHERE m.`type`=mt.id ;

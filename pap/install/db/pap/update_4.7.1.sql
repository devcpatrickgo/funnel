INSERT IGNORE INTO qu_pap_transstatsdays (dateinserted) SELECT DISTINCT DATE_FORMAT( dateinserted,  '%Y-%m-%d' ) FROM  `qu_pap_transactions`;
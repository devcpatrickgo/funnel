INSERT INTO qu_pap_impressions (userid,campaignid,bannerid,parentbannerid,countrycode,cdata1,cdata2,channel,dateinserted,raw,uniq) SELECT userid, campaignid, bannerid, parentbannerid, countrycode, cdata1, cdata2, channel, CONCAT(DATE(day), ' 6:00:00') as dateinserted, raw_6 as raw, unique_6 as uniq FROM qu_pap_dailyimpressions WHERE raw_6 > 0 OR unique_6 > 0;
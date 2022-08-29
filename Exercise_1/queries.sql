
/* Exercise 1 */
/* 1. display all instruments (name) for the band ‘metallica’. */

SELECT i.name, b.name
 FROM instruments i
 INNER JOIN instruments_in_band ib ON i.id = ib.instrument_id
 INNER JOIN bands b ON ib.band_id = b.id
 WHERE b.name = "Metallica"

/* 2. display number of instruments per band. For each band, display the name of the band + number of instruments. */

SELECT b.name, COUNT(ib.instrument_id)
FROM bands b
INNER JOIN instruments_in_band ib ON b.id = ib.band_id
GROUP BY b.name;
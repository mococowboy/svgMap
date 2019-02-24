CREATE PROCEDURE unem_month (IN wantedYear CHAR(4), IN wantedMonth CHAR(3))
BEGIN
SELECT state, rate
FROM unem_rate 
WHERE year = wantedYear and month = wantedMonth;
END//

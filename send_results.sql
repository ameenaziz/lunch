-- query to run every 5 min
-- get events that have just ended but results email has not been sent
 select * from event where date <= curdate() and time < curtime() and date and time and results_sent = "n";
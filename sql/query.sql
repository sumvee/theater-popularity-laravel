SELECT t.id, t.name, COUNT(tc.id) AS ticket_count
FROM theaters t
         JOIN show_times s ON t.id = s.theater_id
         JOIN tickets tc ON s.id = tc.show_time_id
WHERE DATE(s.showtime) = '2024-11-26'
GROUP BY t.id, t.name

# ORDER BY ticket_count DESC;
ORDER BY ticket_count DESC LIMIT 1;


SELECT Date(s.showtime) AS date
FROM show_times s
JOIN tickets tc ON s.id = tc.show_time_id
GROUP BY date;

SELECT
    player_id,
    MIN(event_date) AS first_login
FROM Activity
GROUP BY player_id;

-- alternatif solusi
-- SELECT DISTINCT ON (player_id)
--     player_id,
--     event_date AS first_login
-- FROM Activity
-- ORDER BY player_id, event_date ASC;
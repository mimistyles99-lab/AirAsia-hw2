
CREATE TABLE IF NOT EXISTS ACCOUNT (
    account_id INTEGER PRIMARY KEY,
    first_name TEXT NOT NULL,
    last_name TEXT NOT NULL,
    email TEXT NOT NULL
);

CREATE TABLE IF NOT EXISTS GIFTCARD (
    card_id INTEGER PRIMARY KEY,
    card_name TEXT NOT NULL,
    card_type TEXT NOT NULL,
    card_value REAL NOT NULL CHECK (card_value > 0),
    points_required INTEGER NOT NULL
        CHECK (points_required > 0)
);

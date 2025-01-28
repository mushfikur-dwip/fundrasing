<?php
// Functions for managing donors.

function fundraising_get_donors() {
    // Fetch donors from the database (dummy data for now).
    return [
        ['name' => 'John Doe', 'email' => 'john@example.com', 'amount' => 100],
        ['name' => 'Jane Smith', 'email' => 'jane@example.com', 'amount' => 50],
    ];
}

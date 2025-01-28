<?php
// Functions for managing campaigns.

function fundraising_get_campaigns() {
    // Fetch campaigns from the database (dummy data for now).
    return [
        ['title' => 'Education Fund', 'raised' => 5000, 'goal' => 10000],
        ['title' => 'Health Relief', 'raised' => 3000, 'goal' => 5000],
    ];
}

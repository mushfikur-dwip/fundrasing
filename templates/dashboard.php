<h2>Active Campaigns</h2>
<table>
    <thead>
        <tr>
            <th>Campaign Name</th>
            <th>Funds Raised</th>
            <th>Goal</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $campaigns = fundraising_get_campaigns();
        foreach ($campaigns as $campaign) {
            echo "<tr>
                    <td>{$campaign['title']}</td>
                    <td>\${$campaign['raised']}</td>
                    <td>\${$campaign['goal']}</td>
                  </tr>";
        }
        ?>
    </tbody>
</table>
<canvas id="donation-chart"></canvas>

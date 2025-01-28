document.addEventListener("DOMContentLoaded", function () {
  const ctx = document.getElementById("donation-chart").getContext("2d");
  new Chart(ctx, {
    type: "line",
    data: {
      labels: ["January", "February", "March", "April", "May"],
      datasets: [
        {
          label: "Funds Raised",
          data: [500, 1500, 3000, 7000, 10000],
          borderColor: "rgba(75, 192, 192, 1)",
          borderWidth: 2,
          fill: false,
        },
      ],
    },
    options: {
      responsive: true,
      scales: {
        y: {
          beginAtZero: true,
        },
      },
    },
  });
});

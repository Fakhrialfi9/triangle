// File: chart-config.js
document.addEventListener("DOMContentLoaded", (event) => {
    var ctx = document.getElementById("Order").getContext("2d");
    var Order = new Chart(ctx, {
        type: "line",
        data: {
            labels: [
                "January",
                "February",
                "March",
                "April",
                "May",
                "June",
                "July",
            ],
            datasets: [
                {
                    data: [65, 59, 80, 81, 56, 55, 40],
                    backgroundColor: "transparent",
                    borderColor: "rgba(78, 79, 244)",
                    borderWidth: 1,
                    tension: 0.1,
                    fill: true,
                    pointRadius: 1,
                    pointHoverRadius: 1,
                },
            ],
        },
        options: {
            responsive: true,
            maintainAspectRatio: false,
            scales: {
                x: {
                    display: true,
                    grid: {
                        display: true,
                        lineWidth: 0,
                        borderWidth: 0,
                        drawBorder: true,
                        drawTicks: true,
                    },
                },
                y: {
                    display: true,
                    grid: {
                        display: true,
                        lineWidth: 1,
                        borderWidth: 0,
                        drawBorder: true,
                        drawTicks: true,
                    },
                    ticks: {
                        stepSize: 30,
                        callback: function (value) {
                            if (
                                value === 0 ||
                                value === 30 ||
                                value === 60 ||
                                value === 90
                            ) {
                                return value;
                            }
                            return null;
                        },
                    },
                    beginAtZero: true,
                    max: 90,
                },
            },
            plugins: {
                legend: {
                    display: false, // Hide the legend
                },
            },
        },
    });
});

// File: chart-config.js
document.addEventListener("DOMContentLoaded", (event) => {
    var ctx = document.getElementById("Leads").getContext("2d");
    var Leads = new Chart(ctx, {
        type: "bar",
        data: {
            labels: ["Linux", "Mac", "iOS", "Windows", "Android", "Other"],
            datasets: [
                {
                    data: [65, 59, 80, 81, 56, 55, 40],
                    backgroundColor: "rgba(78, 79, 244)",
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
                        display: false,
                        drawBorder: true,
                        drawTicks: true,
                    },
                },
                y: {
                    display: true,
                    grid: {
                        display: true,
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
                    display: false,
                },
            },
            glowEffect: {
                beforeDraw: function (chart, easing) {
                    const { ctx, canvas } = chart.chart;
                    ctx.save();
                    ctx.shadowColor = "rgba(120, 36, 245, 0.8)";
                    ctx.shadowBlur = 20;
                    ctx.shadowOffsetX = 0;
                    ctx.shadowOffsetY = 0;
                    ctx.strokeStyle = "rgba(120, 36, 245, 0.8)";
                    ctx.lineWidth = 2;
                    ctx.strokeRect(0, 0, canvas.width, canvas.height);
                    ctx.restore();
                },
            },
        },
    });
});

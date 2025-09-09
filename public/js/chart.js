function calculatePercentages(data) {
    return data.map((item) => {
        const total = item.data.reduce((sum, el) => sum + el.value, 0);

        let percents = item.data.length > 0 ? 100 / item.data.length : 0;

        return {
            ...item,
            data: item.data.map((el) => ({
                ...el,
                percent: percents,
                unit: el.unit ?? ""
            })),
        };
    });
}

// Tooltip
const tooltip = document.createElement("div");
tooltip.className = "tooltip";
document.body.appendChild(tooltip);

// Данные из Blade
const result = calculatePercentages(window.chartData);
const container = document.getElementById("chart-block");

// Рендер
result.forEach((item) => {
    const block = document.createElement("div");
    const number = item.code; // Берём из БД (например "01")
    block.className = "chart-line-row";

    block.innerHTML = `
        <div class="chart-line-title">
            <span style="color:${item.color}">${number} </span>${item.title}
        </div>
        <div class="chart-line">
            ${item.data.map((d) => `
                <div
                    class="chart-line-item ${d.status}"
                    style="width:${d.percent}%"
                    data-title="${d.title}"
                    data-status="${d.status}"
                    data-value="${d.value}"
                    data-unit="${d.unit}"
                    data-url="${d.url}"
                ></div>
            `).join("")}
        </div>
    `;

    container.appendChild(block);
});

// Tooltip поведение
container.addEventListener("mousemove", (e) => {
    if (e.target.classList.contains("chart-line-item")) {
        const { title, status, value, unit } = e.target.dataset;
        tooltip.innerHTML = `
            <div class="tooltip-title">${title}</div>
            <div class="tooltip-row">
                <div class="tooltip-cube ${status}"></div>
                <div><span class="tooltip-value">${value}</span> ${unit}</div>
            </div>
        `;

        tooltip.style.left = e.pageX + 10 + "px";
        tooltip.style.top = e.pageY + 10 + "px";
        tooltip.style.opacity = 1;
    } else {
        tooltip.style.opacity = 0;
    }
});

// Клик по блоку → открыть ссылку
document.addEventListener("click", (e) => {
    const item = e.target.closest(".chart-line-item");
    if (item && item.dataset.url) {
        window.open(item.dataset.url, "_blank");
    }
});

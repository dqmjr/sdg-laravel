const colors = ["#EF384C", "#E9B233", "#10A348", "#E42338", "#F1523D", "#26BDE2", "#FFAA00", "#B81E4C", "#F27439", "#F02D79", "#FB9C32", "#CB942F", "#0F804C", "#1096D3", "#2EB24D", "#066F9F", "#074B6E"];

function calculatePercentages(data) {
    return data.map((item) => {
        console.log(item.data.length)
        const total = item.data.reduce((sum, el) => sum + el.value, 0);

        let percents = 100 / item.data.length;

        // if (sumPercents > 100) {
        //   let diff = sumPercents - 100;
        //   while (diff > 0) {
        //     const minIndex = percents.indexOf(Math.min(...percents));
        //     percents[minIndex] -= 1;
        //     diff--;
        //   }
        // } else if (sumPercents < 100) {
        //   let diff = 100 - sumPercents;
        //   while (diff > 0) {
        //     const maxIndex = percents.indexOf(Math.max(...percents));
        //     percents[maxIndex] += 1;
        //     diff--;
        //   }
        // }

        return {
            ...item,
            data: item.data.map((el, idx) => ({
                ...el,
                percent: percents,
            })),
        };
    });
}

const tooltip = document.createElement("div");
tooltip.className = "tooltip";
document.body.appendChild(tooltip);

const result = calculatePercentages(chartData);
const container = document.getElementById("chart-block");

result.forEach((item, index) => {
    const block = document.createElement("div");
    const number = String(index + 1).padStart(2, "0");
    block.className = "chart-line-row";

    block.innerHTML = `
          <div class="chart-line-title"><span style="color:${colors[index]}">${number} </span>${item.title}</div>
          <div class="chart-line">
            ${item.data
        .map(
            (d) => `
              <div
                class="chart-line-item ${d.status}"
                style="width:${d.percent}%"
                data-title="${d.title}"
                data-status="${d.status}"
                data-value="${d.value}"
                data-url="${d.url}"
              >
              </div>
            `
        )
        .join("")}
          </div>
        `;

    container.appendChild(block);
});

container.addEventListener("mousemove", (e) => {
    if (e.target.classList.contains("chart-line-item")) {
        const title = e.target.dataset.title;
        const status = e.target.dataset.status;
        const value = e.target.dataset.value;
        tooltip.innerHTML = `
      <div class="tooltip-title">${title}</div>
      <div class="tooltip-row">
        <div class="tooltip-cube ${status}" ></div>
        <div> <span class="tooltip-value">${value}</span></div>
      </div>
    `;

        tooltip.style.left = e.pageX + 10 + "px";
        tooltip.style.top = e.pageY + 10 + "px";
        tooltip.style.opacity = 1;
    } else {
        tooltip.style.opacity = 0;
    }
});
document.addEventListener("click", (e) => {
    const item = e.target.closest(".chart-line-item");
    if (item && item.dataset.url) {
        const url = item.dataset.url;
        console.log(item);
        window.open(url, "_blank");
    }
});

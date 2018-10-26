/* Line Chart */
new Chart(document.getElementById("line-chart"), {
  type: 'line',
  data: {
    labels: [900,1000,1100,1200,1300,1400,1500,1600,1700],
    datasets: [{ 
        data: [5, 85, 18, 12, 6, 35, 190, 22, 85],
        label: "Monday ($)",
        borderColor: "#3e95cd",
        fill: false
      }, { 
        data: [0, 15, 40, 76, 2, 19, 140, 75, 60],
        label: "Tuesday ($)",
        borderColor: "#8e5ea2",
        fill: false
      }, { 
        data: [25, 45, 10, 18, 15, 50, 120, 30, 120],
        label: "Wednesday ($)",
        borderColor: "#3cba9f",
        fill: false
      }, { 
        data: [15, 55, 30, 10, 9, 25, 80, 50, 90],
        label: "Thursday ($)",
        borderColor: "#e8c3b9",
        fill: false
      }, { 
        data: [10, 25, 40, 160, 26, 15, 50, 122, 30],
        label: "Friday ($)",
        borderColor: "#c45850",
        fill: false
      }
    ]
  },
  options: {
    title: {
      display: true,
      text: 'Sales per hour (This Week)'
    }
  }
});
/* Line Chart */



/* Bar Chart */
new Chart(document.getElementById("bar-chart"), {
    type: 'bar',
    data: {
      labels: ["Bread", "Laptops", "Phones", "Headphones", "Chips", "Charger"],
      datasets: [
        {
          label: "Amount($)",
          backgroundColor: ["#3e95cd", "#8e5ea2", "#8bc34a", "#c45850","#3cba9f", "#FFC107"],
          data: [165, 850, 1190, 375, 100, 250]
        }
      ]
    },
    options: {
      legend: { display: false },
      title: {
        display: true,
        text: 'Store Sales (This Week)'
      }
    }
});
/* Bar Chart */
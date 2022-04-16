
const data = {
  labels: ["Africa", "Asia", "Europe", "Latin America", "North America"],
    datasets: [{
      label: "Population (millions)",
      backgroundColor: ["#3e95cd", "#8e5ea2","#3cba9f","#e8c3b9","#c45850"],
      data: [2478,5267,734,784,433],
      
    }]
};

const config = {

  type: 'pie',
  data: {
    labels: ["Africa", "Asia", "Europe", "Latin America", "North America"],
    datasets: [{
      label: "Population (millions)",
      backgroundColor: ["#3e95cd", "#8e5ea2","#3cba9f","#e8c3b9","#c45850"],
      data: [2478,5267,734,784,433],
      
    }]
  },
  options: {
    
    responsive: true,
    maintainAspectRatio: false,
    
    title: {
      display: true,
      text: 'Predicted world population (millions) in 2050'
    }
  }

};

const pie_chart = new Chart(

  document.getElementById("pie_chart"),
  config
);

new Chart(ctx, {

  
});


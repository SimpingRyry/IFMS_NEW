// Data for the chart
const data = {
    labels: ['Counseling Cases', 'Students on Record', 'Number of Visits'],  // X-axis labels
    datasets: [{
      label: 'Statistics',
      data: [6, 9, 3],  // Y-axis values for each label
      backgroundColor: ['#FF5733', '#33C1FF', '#75FF33'],  // Different colors for each bar
      borderColor: ['#C13F00', '#1D89B1', '#5B9C20'],  // Border colors for each bar
      borderWidth: 1
    }]
  };

  // Chart options
  const options = {
    responsive: true,
    scales: {
      y: {
        beginAtZero: true  // Ensures the Y-axis starts from 0
      }
    }
  };

  // Create the chart
  const ctx = document.getElementById('counselingChart').getContext('2d');
  const counselingChart = new Chart(ctx, {
    type: 'bar',  // Bar chart type
    data: data,
    options: options
  });

  
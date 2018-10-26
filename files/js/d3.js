const sample = [

    {
      language: 'Bread',
      value:160,
      color: '#65cedb'
    },
    {
      language: 'Butter',
      value: 85,
      color: '#ff6e52'
    },
    {
      language: 'Mineral Water',
      value: 90,
      color: '#f9de3f'
    },
    {
      language: 'Headphones',
      value: 275,
      color: '#5d2f8e'
    },
    {
      language: 'Chips',
      value: 200,
      color: '#008fc9'
    },
    {
      language: 'Charger',
      value: 250,
      color: '#507dca'
    }
  ];

  const svg = d3.select('#reports_bar_chart_container').append("svg").attr('id', 'reports_bar_chart').attr('viewBox','0 0 1000 600').attr('preserveAspectRatio','xMinYMin');


  const svgContainer = d3.select('#reports_bar_chart_container');
  
  const margin = 80;
  const width = 1000 - 2 * margin;
  const height = 600 - 2 * margin;

  const chart = svg.append('g')
    .attr('transform', `translate(${margin}, ${margin})`);

  const xScale = d3.scaleBand()
    .range([0, width])
    .domain(sample.map((s) => s.language))
    .padding(0.4)
  
  const yScale = d3.scaleLinear()
    .range([height, 0])
    .domain([0, 300]);

  // vertical grid lines
  // const makeXLines = () => d3.axisBottom()
  //   .scale(xScale)

  const makeYLines = () => d3.axisLeft()
    .scale(yScale)

  chart.append('g')
    .attr('transform', `translate(0, ${height})`)
    .call(d3.axisBottom(xScale));

  chart.append('g')
    .call(d3.axisLeft(yScale));

  // vertical grid lines
  // chart.append('g')
  //   .attr('class', 'grid')
  //   .attr('transform', `translate(0, ${height})`)
  //   .call(makeXLines()
  //     .tickSize(-height, 0, 0)
  //     .tickFormat('')
  //   )

  chart.append('g')
    .attr('class', 'grid')
    .call(makeYLines()
      .tickSize(-width, 0, 0)
      .tickFormat('')
    )

  const barGroups = chart.selectAll()
    .data(sample)
    .enter()
    .append('g')

  barGroups
    .append('rect')
    .attr('class', 'bar')
    .attr('x', (g) => xScale(g.language))
    .attr('y', (g) => yScale(g.value))
    .attr('height', (g) => height - yScale(g.value))
    .attr('width', xScale.bandwidth())
    .on('mouseenter', function (actual, i) {
      d3.selectAll('.value')
        .attr('opacity', 0)

      d3.select(this)
        .transition()
        .duration(300)
        .attr('opacity', 0.6)
        .attr('x', (a) => xScale(a.language) - 5)
        .attr('width', xScale.bandwidth() + 10)

      const y = yScale(actual.value)

      line = chart.append('line')
        .attr('id', 'limit')
        .attr('x1', 0)
        .attr('y1', y)
        .attr('x2', width)
        .attr('y2', y)

      barGroups.append('text')
        .attr('class', 'divergence')
        .attr('x', (a) => xScale(a.language) + xScale.bandwidth() / 2)
        .attr('y', (a) => yScale(a.value) + 30)
        .attr('fill', 'white')
        .attr('text-anchor', 'middle')
        .text((a, idx) => {
          const divergence = (a.value - actual.value).toFixed(1)
          
          let text = ''
          if (divergence > 0) text += '+'
          text += `$${divergence}`

          return idx !== i ? text : '';
        })

    })
    .on('mouseleave', function () {
      d3.selectAll('.value')
        .attr('opacity', 1)

      d3.select(this)
        .transition()
        .duration(300)
        .attr('opacity', 1)
        .attr('x', (a) => xScale(a.language))
        .attr('width', xScale.bandwidth())

      chart.selectAll('#limit').remove()
      chart.selectAll('.divergence').remove()
    })

  barGroups 
    .append('text')
    .attr('class', 'value')
    .attr('x', (a) => xScale(a.language) + xScale.bandwidth() / 2)
    .attr('y', (a) => yScale(a.value) + 30)
    .attr('text-anchor', 'middle')
    .text((a) => `$${a.value}`)
  
  svg
    .append('text')
    .attr('class', 'label')
    .attr('x', -(height / 2) - margin)
    .attr('y', margin / 2.4)
    .attr('transform', 'rotate(-90)')
    .attr('text-anchor', 'middle')
    .text('Amount (USD)')

  svg.append('text')
    .attr('class', 'label')
    .attr('x', width / 2 + margin)
    .attr('y', height + margin * 1.7)
    .attr('text-anchor', 'middle')
    .text('Products')

  svg.append('text')
    .attr('class', 'title')
    .attr('x', width / 2 + margin)
    .attr('y', 40)
    .attr('text-anchor', 'middle')
    .text('Store Sales (Today)')



    /* Line Chart */
    var data = [
        {
          name: "Store 1",
          values: [
            {date: "1", price: "0"},
            {date: "2", price: "15"},
            {date: "2", price: "45"},
            {date: "4", price: "75"},
            {date: "5", price: "25"}
          ]
        }
      ];
      
/*       var width2 = 500;
      var height2 = 300;
      var margin2 = 50; */
      var duration = 250;

        
    var margin2 = 80;
    var width2 = 1200 - 2 * margin;
    var height2 = 600 - 2 * margin;
      
      var lineOpacity = "0.25";
      var lineOpacityHover = "0.85";
      var otherLinesOpacityHover = "0.1";
      var lineStroke = "1.5px";
      var lineStrokeHover = "2.5px";
      
      var circleOpacity = '0.85';
      var circleOpacityOnLineHover = "0.25"
      var circleRadius = 3;
      var circleRadiusHover = 6;
      
      
      /* Format Data */
      var parseDate = d3.timeParse("%Y");
      data.forEach(function(d) { 
        d.values.forEach(function(d) {
          d.date = parseDate(d.date);
          d.price = +d.price;    
        });
      });
      
      
      /* Scale */
      var xScale2 = d3.scaleTime()
        .domain(d3.extent(data[0].values, d => d.date))
        .range([0, width2-margin2]);
      
      var yScale2 = d3.scaleLinear()
        .domain([0, d3.max(data[0].values, d => d.price)])
        .range([height2-margin2, 0]);
      
      var color = d3.scaleOrdinal(d3.schemeCategory10);
      
      /* Add SVG */
      var svg2 = d3.select('#reports_line_chart_container').append("svg").attr('id', 'reports_line_chart').attr('viewBox','0 0 1000 600').attr('preserveAspectRatio','xMinYMin');
      
      
      /* Add line into SVG */
      var line = d3.line()
        .x(d => xScale2(d.date))
        .y(d => yScale2(d.price));
      
      let lines = svg2.append('g')
        .attr('class', 'lines');
      
      lines.selectAll('.line-group')
        .data(data).enter()
        .append('g')
        .attr('class', 'line-group')  
        .on("mouseover", function(d, i) {
            svg2.append("text")
              .attr("class", "title-text")
              .style("fill", color(i))        
              .text(d.name)
              .attr("text-anchor", "middle")
              .attr("x", (width2-margin2)/2)
              .attr("y", 5);
          })
        .on("mouseout", function(d) {
            svg2.select(".title-text").remove();
          })
        .append('path')
        .attr('class', 'line')  
        .attr('d', d => line(d.values))
        .style('stroke', (d, i) => color(i))
        .style('opacity', lineOpacity)
        .on("mouseover", function(d) {
            d3.selectAll('.line')
                          .style('opacity', otherLinesOpacityHover);
            d3.selectAll('.circle')
                          .style('opacity', circleOpacityOnLineHover);
            d3.select(this)
              .style('opacity', lineOpacityHover)
              .style("stroke-width", lineStrokeHover)
              .style("cursor", "pointer");
          })
        .on("mouseout", function(d) {
            d3.selectAll(".line")
                          .style('opacity', lineOpacity);
            d3.selectAll('.circle')
                          .style('opacity', circleOpacity);
            d3.select(this)
              .style("stroke-width", lineStroke)
              .style("cursor", "none");
          });
      
      
      /* Add circles in the line */
      lines.selectAll("circle-group")
        .data(data).enter()
        .append("g")
        .style("fill", (d, i) => color(i))
        .selectAll("circle")
        .data(d => d.values).enter()
        .append("g")
        .attr("class", "circle")  
        .on("mouseover", function(d) {
            d3.select(this)     
              .style("cursor", "pointer")
              .append("text")
              .attr("class", "text")
              .text(`${d.price}`)
              .attr("x", d => xScale2(d.date) + 5)
              .attr("y", d => yScale2(d.price) - 10);
          })
        .on("mouseout", function(d) {
            d3.select(this)
              .style("cursor", "none")  
              .transition()
              .duration(duration)
              .selectAll(".text").remove();
          })
        .append("circle")
        .attr("cx", d => xScale2(d.date))
        .attr("cy", d => yScale2(d.price))
        .attr("r", circleRadius)
        .style('opacity', circleOpacity)
        .on("mouseover", function(d) {
              d3.select(this)
                .transition()
                .duration(duration)
                .attr("r", circleRadiusHover);
            })
          .on("mouseout", function(d) {
              d3.select(this) 
                .transition()
                .duration(duration)
                .attr("r", circleRadius);  
            });
      
      
      /* Add Axis into SVG */
      var xAxis = d3.axisBottom(xScale2).ticks(5);
      var yAxis = d3.axisLeft(yScale2).ticks(5);
      
      svg2.append("g")
        .attr("class", "x axis")
        .attr("transform", `translate(0, ${height2-margin2})`)
        .call(xAxis);
      
      svg2.append("g")
        .attr("class", "y axis")
        .call(yAxis)
        .append('text')
        .attr("y", 15)
        .attr("transform", "rotate(-90)")
        .attr("fill", "#000")
        .text("Amount");
    /* Line Chart */
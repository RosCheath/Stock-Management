Morris.Donut({
    element: 'graph-chart',
    data: [
        {value: 70, label: 'Water'},
        {value: 15, label: 'Cake'},
        {value: 10, label: 'Beer'},
        {value: 5, label: 'Candy'}
    ],
    colors: ['#E9422E', '#FAC552', '#3eb489', '#29b7d3'],
    resize:true,
    formatter: function (x) { return x + "%"}
}).on('click', function(i, row){
    console.log(i, row);
});

var labelColor = jQuery('#morris-bar-chart').css('color');
Morris.Bar({
    element: 'morris-bar-chart',
    data: [
        { year: '2022', product: 99, employee: 8 ,category:12},
    ],
    xkey: 'year',
    ykeys: ['product', 'employee', 'category'],
    labels: ['All Product', 'All Employee', 'All Categories'],
    gridTextColor: labelColor,
    barColors: jQuery('#morris-bar-chart').data('colors').split(',')
});

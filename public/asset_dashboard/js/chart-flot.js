

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

/**
 * @author Alexandre Unruh
 */

$(function () {
    var colors = ['#17a2b8', '#28a745', '#ffc107', '#dc3545', '#666666', '#000000'];

    // ############################## VISITAS ###########################################
    // Pega o elemento e cria a instância do chart
    var visitsCtx = $("#visits");
    var visitsChart = new Chart(visitsCtx);

    /**
     * Evento do botão para chamar a API
     */
    $(".visits").click(function(){
        var id = $(this).attr('id').replace('visits_', '');
        getVisits(id);
    });

    /**
     * Chama a API para obter os dados
     *
     * @param {string} date
     */
    function getVisits(date) {
        $.ajax({
            url: 'stats-' + date,
            dataType: 'json',
            success: function (response) {
                var labels = Object.keys(response);
                var data = Object.values(response);
                createVisitsChart(labels, data);
            }
        })
    }

    /**
     * Cria o convas com o Gráfico através do Chart.js
     *
     * @param {array} labels
     * @param {array} data
     */
    function createVisitsChart(labels, data) {
        visitsChart.destroy();
        visitsChart = new Chart(visitsCtx, {
            type: 'bar',
            data: {
                labels: labels,
                datasets: [{
                    label: 'Visitas',
                    data: data,
                    borderWidth: 1,
                    borderColor: '#28a745',
                    backgroundColor: '#ffc107'
                }],
            },
            options: {
                legend: {
                    position: 'bottom'
                },
            }
        });
    }

    // ############################## NAVEGADOR ###########################################
    // Pega o elemento e cria a instância do chart
    var browserCtx = $("#browser");
    var browserChart = new Chart(browserCtx);

    /**
     * Evento do botão para chamar a API
     */
    $(".browser").click(function(){
        var date = $(this).attr('id').replace('browser_', '');
        getBrowserStats(date);
    });

    /**
     * Chama a API para obter os dados
     *
     * @param {string} date
     */
    function getBrowserStats(date) {
        $.ajax({
            url: '/stats/browser/' + date,
            dataType: 'json',
            success: function (response) {
                var labels = Object.keys(response);
                var data = Object.values(response);
                createBrowserChart(labels, data);
            }
        })
    }

    /**
     * Cria o convas com o Gráfico através do Chart.js
     *
     * @param {array} labels
     * @param {array} data
     */
    function createBrowserChart(labels, data) {
        browserChart.destroy();
        browserChart = new Chart(browserCtx, {
            type: 'pie',
            data: {
                labels: labels,
                datasets: [{
                    label: ' visitas',
                    data: data,
                    borderWidth: 1,
                    backgroundColor: ['#dc3545', '#ffc107', '#17a2b8', '#28a745', '#666666', '#000000']
                }],
            },
            options: {
                legend: {
                    position: 'bottom'
                },
            }
        });
    }

    // ############################## PLATAFORMA ###########################################
    // Pega o elemento e cria a instância do chart
    var platformCtx = $("#platform");
    var platformChart = new Chart(platformCtx);

    /**
     * Evento do botão para chamar a API
     */
    $(".platform").click(function(){
        var date = $(this).attr('id').replace('platform_', '');
        getPlatformStats(date);
    });

    /**
     * Chama a API para obter os dados
     *
     * @param {string} date
     */
    function getPlatformStats(date) {
        $.ajax({
            url: '/stats/platform/' + date,
            dataType: 'json',
            success: function (response) {
                var labels = Object.keys(response);
                var data = Object.values(response);
                createPlatformChart(labels, data);
            }
        })
    }

    /**
     * Cria o convas com o Gráfico através do Chart.js
     *
     * @param {array} labels
     * @param {array} data
     */
    function createPlatformChart(labels, data) {
        platformChart.destroy();
        platformChart = new Chart(platformCtx, {
            type: 'doughnut',
            data: {
                labels: labels,
                datasets: [{
                    label: ' visitas',
                    data: data,
                    borderWidth: 1,
                    backgroundColor: ['#17a2b8', '#666666', '#28a745', '#ffc107', '#dc3545', '#000000']
                }],
            },
            options: {
                legend: {
                    position: 'bottom'
                },
            }
        });
    }


    // ############################## LISTAS ###########################################

    function getListStats(table_id, date){
        var data = table_id.replace('table_', '');
        $.ajax({
            url: '/admin/statistics/' + data + '/' + date,
            dataType: 'json',
            success: function (response) {
                var html = '';
                $.each(response, function(key, val){
                    html += '<tr>';
                    html += '   <td>' + key + '</td>';
                    html += '   <td class="text-right">' + val + '<td>';
                    html += '<tr>';
                });
                $('#' + table_id).html(html);
            }
        })
    }

    /**
     * Evento do botão para chamar a API
     */
    $(".list").click(function(){
        var str = $(this).attr('id').replace('list_', '');
        var params = str.split('_');
        console.log(params);
        getListStats('table_' + params[0], params[1]);
    });

    getVisits('today');
    getBrowserStats('today');
    getPlatformStats('today');
    // getListStats('table_uri', 'today');
    // getListStats('table_referer', 'today');
    // getListStats('table_region', 'today');
    // getListStats('table_country', 'today');

})
